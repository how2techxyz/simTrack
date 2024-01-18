<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

    public function sendEmail(Request $request)
    {
        // Extract inputs from the request
        $to = "kiddoapplic@gmail.com";
        $from = $request->input('email');
        $name = $request->input('name');
        $csubject = $request->input('subject');
        $cmessage = $request->input('message');

        // Compose email data
        $mailData = [
            'name' => $name,
            'from' => $from,
            'subject' => $csubject,
            'message' => $cmessage,
        ];

        try {

            \Illuminate\Support\Facades\Log::error('cmsg: ' .$cmessage );

            // Send email using Laravel Mail facade with the specified view
            // Mail::send('emails.contact',  $mailData, function ($mailMessage) use ($to, $from, $name, $csubject) {
            //     $mailMessage->to($to)->subject($csubject);
            //     $mailMessage->from($from, $name); 
                
            // });
               Mail::send('emails.contact',$mailData, function ($mailMessage) use ($to, $from, $name, $csubject) {

                // Remove $message from use()
                $mailMessage->to($to)->subject($csubject);
                $mailMessage->from($from, $name); 
              
              });

            // Handle success response after sending the email
            // \Illuminate\Support\Facades\Log::error('Email sending failed: ' . $mailData);
            \Illuminate\Support\Facades\Log::error('Email sending :' );
            return redirect()->back()->with('success', 'Email sent successfully');
        } catch (\Exception $e) {
            // Log the exception to capture detailed error information
            \Illuminate\Support\Facades\Log::error('Email sending failed: ' . $e->getMessage());

            // Handle failure with a more detailed error message
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }
    }

    // public function sendEmail(Request $request)
    // {
    //     // Extract inputs from the request
    //     $to = "webapp.isb@gmail.com";
    //     $from = $request->input('email');
    //     $name = $request->input('name');
    //     $csubject = $request->input('subject');
    //     $cmessage = $request->input('message');
    
    //     // Compose email data
    //     $mailData = [
    //         'name' => $name,
    //         'from' => $from,
    //         'subject' => $csubject,
    //         'message' => $cmessage,
    //     ];
    
    //     try {
    //         // Send email using Laravel Mail facade with SMTP settings
    //         Mail::send('emails.your_email_view', $mailData, function ($message) use ($to, $from, $name, $csubject) {
    //             $message->to($to)->subject($csubject);
    //             $message->from($from, $name);
    //         });
    
    //         // Handle success response after sending the email
    //         return redirect()->back()->with('success', 'Email sent successfully'); // Redirect back with success message
    //     } catch (\Exception $e) {
    //         // Log the exception to capture detailed error information
    //         Log::error('Email sending failed: ' . $e->getMessage());
    
    //         // Handle failure with a more detailed error message
    //         return redirect()->back()->with('error', 'Failed to send email. Please try again later.'); // Redirect back with error message
    //     }
    // }
    

//     public function sendEmail(Request $request)
//     {
        
//         $to = "webapp.isb@gmail.com";
//         $from = $request->input('email');
//         $name = $request->input('name');
//         $csubject = $request->input('subject');
//         $cmessage = $request->input('message');
// // dd($to, $from, $name, $csubject, $cmessage);
    //     $headers = "From: $from";
    //     $headers = "From: " . $from . "\r\n";
    //     $headers .= "Reply-To: " . $from . "\r\n";
    //     $headers .= "MIME-Version: 1.0\r\n";
    //     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    //     $subject = "You have a message from your Bitmap Photography.";

    //     $logo = 'img/logo.png';
    //     $link = '#';

    //     $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    //     $body .= "<table style='width: 100%;'>";
    //     $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    //     $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    //     $body .= "</td></tr></thead><tbody><tr>";
    //     $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
    //     $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    //     $body .= "</tr>";
    //     $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
    //     $body .= "<tr><td></td></tr>";
    //     $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
    //     $body .= "</tbody></table>";
    //     $body .= "</body></html>";

    //     $send = mail($to, $subject, $body, $headers);

    //     // Handle the response after sending the email (e.g., redirect, return success message, etc.)
    // }

}
