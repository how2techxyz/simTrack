<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DerekCodes\TurnstileLaravel\TurnstileLaravel;
use Illuminate\Support\Facades\Http;

class MobileController extends Controller
{
    public function index(Request $request)
    {
        $turnstile = new TurnstileLaravel;
        $response = $turnstile->validate($request->input('captcha_response'));
        if ($response['status'] == true) {
            $searchMobile = $this->sanitizeInput($request->input('query'));
            $searchCnic = $request->input('search_cnic');

            $tables = [
                'w1', 'w2',
                'u1', 'u2', 'u3', 'u4', 'u5', 'u6', 'u7', 'u8', 'u9', 'u10',
                'z1', 'z2', 'z3', 'z4', 'z5', 'z6', 'z7', 'z8', 'z9', 'z10', 'z11', 'z12', 'z13', 'z14', 'zong-3',
                't1', 't2', 't3', 't4', 't5', 't6', 't7', 't8', 't9', 't10', 't11', 't12', 't13', 't14', 't15', 't16', 't17', 't18', 't19', 't20', 't21', 't22', 't23', 't24', 't25', 't26', 't27', 't28', 't29', 't30', 't31', 't32',
                'm1', 'm2', 'm3', 'm4', 'm5', 'm6', 'm7', 'm10', 'm11', 'm12', 'm13', 'm14', 'm15', 'm16', 'm17', 'm18', 'm19', 'm20', 'm21', 'm22', 'm23', 'm24', 'm25', 'm26', 'm27', 'thirdparty_data'
            ]; // Define your tables here

            $results = $this->searchDatabase($tables, $searchMobile, $searchCnic);

            if ($results->isEmpty() && !empty($searchMobile)) {
                $fallbackResults = $this->fetchDataFromSecondAPI($searchMobile);
                $res = $this->extractDataToJson($fallbackResults['data']['data']);
                $decodedResult = json_decode($res, true);
            
                // Insert the fallback results into the 'New Data' table
                DB::table('thirdparty_data')->insert([
                    'mobile' => $decodedResult['mobile'] ?? null,
                    'name' => $decodedResult['name'] ?? null,
                    'cnic' => $decodedResult['cnic'] ?? null,
                    'address' => $decodedResult['address'] ?? null,
                ]);
            
                return response()->json(['results' => $decodedResult, 'searchMobile' => $searchMobile, 'fromFallback' => true]);
            }
            

            return response()->json(['results' => $results, 'searchMobile' => $searchMobile]);
        }

        // Optionally, handle the case where captcha validation fails

        return response()->json(['error' => 'Captcha validation failed'], 403);
    }

    private function sanitizeInput($input)
    {
        $input = ltrim($input, '0');
        $input = preg_replace('/[^0-9]/', '', $input);
        return substr($input, 0, 13);
    }

    private function searchDatabase($tables, $searchMobile, $searchCnic)
    {
        $query = null;

        foreach ($tables as $table) {
            if (!empty($searchMobile)) {
                $query = $query ? $query->union(DB::table($table)->where('mobile', $searchMobile)) : DB::table($table)->where('mobile', $searchMobile);
            } else if (!empty($searchCnic)) {
                $query = $query ? $query->union(DB::table($table)->where('cnic', $searchCnic)) : DB::table($table)->where('cnic', $searchCnic);
            }
        }

        return $query ? $query->get() : collect([]);
    }


private function fetchDataFromSecondAPI($mobileNumber)
{
    try {
        $response = Http::asForm()->post('https://simownerdetails.pk/wp-admin/admin-ajax.php', [
            'action' => 'get_number_data',
            'get_number_data' => 'searchdata=' . $mobileNumber,
        ]);

        if ($response->successful()) {
            return [
                'status' => 'fallbackTrue',
                'data' => $response->json() // Assuming the API returns JSON
            ];
        } else {
            // Log error details for debugging
            Log::error('Failed to fetch data from second API', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);
            return [
                'status' => 'fallbackTrue',
                'error' => 'Failed to fetch data from second API',
                'errorCode' => $response->status()
            ];
        }
    } catch (Exception $e) {
        // Log exception details
        Log::error('Exception when fetching data from second API', [
            'message' => $e->getMessage()
        ]
    );
        return [
            'status' => 'fallbackTrue',
            'error' => 'Exception occurred',
            'errorMessage' => $e->getMessage()
        ];
    }
}

private function extractDataToJson($htmlString) {
    // Define the output array with default values
    $output = [
        "mobile" => "Unknown",
        "name" => "Unknown",
        "cnic" => "Unknown",
        "address" => "Unknown"
    ];

    // Check for Full Name
    if (preg_match('/<label class="info">FULL NAME<\/label>\s*<div>(.*?)<\/div>/s', $htmlString, $matches)) {
        $output['name'] = $matches[1];
    }

    // Check for Phone Number
    if (preg_match('/<label class="info">PHONE #<\/label>\s*<div>(.*?)<\/div>/s', $htmlString, $matches)) {
        $output['mobile'] = $matches[1];
    }

    // Check for CNIC
    if (preg_match('/<label class="info">CNIC #<\/label>\s*<div>(.*?)<\/div>/s', $htmlString, $matches)) {
        $output['cnic'] = $matches[1];
    }

    // Check for Address
    if (preg_match('/<label class="info">ADDRESS<\/label>\s*<div>(.*?)<\/div>/s', $htmlString, $matches)) {
        $output['address'] = $matches[1];
    }

    // Convert the output array to JSON and return
    return json_encode($output);
}


}