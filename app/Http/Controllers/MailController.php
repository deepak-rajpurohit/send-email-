<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welocomeEmail;
class MailController extends Controller
{
    //
    function sendEmail(){
        $to="deepak.codoffer@gmail.com";
        $msg="Hello! Deepak, It's Your first Email ";
        $subject="Test Email";
        Mail::to($to)->send(new welocomeEmail($msg, $subject));
    }

}
