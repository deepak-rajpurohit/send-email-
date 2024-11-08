<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welocomeEmail;
class MailController extends Controller
{
    //
    function sendEmail(Request $request){

        $to=$request->to;
        $msg=$request->message;
        $subject=$request->subject;
        Mail::to($to)->send(new welocomeEmail($msg, $subject));

        return "Email sent";
    }

}
