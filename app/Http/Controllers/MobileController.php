<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DerekCodes\TurnstileLaravel\TurnstileLaravel;

class MobileController extends Controller
{
    public function index(Request $request)
    {
        $turnstile = new TurnstileLaravel;
        $response = $turnstile->validate(
            $request->input('captcha_response')
        );

        if ($response['status'] == true) {
            $searchMobile = $request->input('query');
            $searchMobile = ltrim($searchMobile, '0');
            $searchMobile = preg_replace('/[^0-9]/', '', $searchMobile);
            $searchMobile = substr($searchMobile, 0, 13);

            $searchCnic = $request->input('search_cnic');

            $tables = [
                'w1', 'w2',
                'u1', 'u2', 'u3', 'u4', 'u5', 'u6', 'u7', 'u8', 'u9', 'u10',
                'z1', 'z2', 'z3', 'z4', 'z5', 'z6', 'z7', 'z8', 'z9', 'z10', 'z11', 'z12', 'z13', 'z14', 'zong-3',
                't1', 't2', 't3', 't4', 't5', 't6', 't7', 't8', 't9', 't10', 't11', 't12', 't13', 't14', 't15', 't16', 't17', 't18', 't19', 't20', 't21', 't22', 't23', 't24', 't25', 't26', 't27', 't28', 't29', 't30', 't31', 't32',
                'm1', 'm2', 'm3', 'm4', 'm5', 'm6', 'm7', 'm10', 'm11', 'm12', 'm13', 'm14', 'm15', 'm16', 'm17', 'm18', 'm19', 'm20', 'm21', 'm22', 'm23', 'm24', 'm25', 'm26', 'm27'
            ]; // Define your tables here

            $query = null;

            foreach ($tables as $table) {
                if (!empty($searchMobile)) {
                    if ($query === null) {
                        $query = DB::table($table)->select('*')->where('mobile', $searchMobile);
                    } else {
                        $query->union(DB::table($table)->select('*')->where('mobile', $searchMobile));
                    }
                } else if (!empty($searchCnic)) {
                    if ($query === null) {
                        $query = DB::table($table)->select('*')->where('cnic', $searchCnic);
                    } else {
                        $query->union(DB::table($table)->select('*')->where('cnic', $searchCnic));
                    }
                }
            }

            $results = $query->get();

            if (!empty($searchMobile)) {
                if ($results->isEmpty()) {
                    // If no results found in the database, send request to another API
                    $externalData = $this->fetchDataFromExternalAPI($searchMobile);
                    return response()->json(['results' => $externalData, 'searchMobile' => $searchMobile]);
                } else {
                    return response()->json(['results' => $results, 'searchMobile' => $searchMobile]);
                }
            } else if (!empty($searchCnic)) {
                return response()->json(['results' => $results, 'searchCnic' => $searchCnic]);
            }
        }
    }

    private function fetchDataFromExternalAPI($mobileNumber)
    {
        $formData = http_build_query([
            'action' => 'get_number_data',
            'get_number_data' => 'searchdata=' . $mobileNumber
        ]);

        try {
            $response = file_get_contents('https://simownerdetails.pk/wp-admin/admin-ajax.php', false, stream_context_create([
                'http' => [
                    'method' => 'POST',
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'content' => $formData
                ]
            ]));
            return json_decode($response, true);
        } catch (\Exception $e) {
            return ['error' => 'An error occurred while fetching data from the external API.'];
        }
    }
}
