<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function html_email(Request $request) {
        $email = $request->email;
        $data = array('name'=>"Connection Security Reset");
        Mail::send('mail', $data, function ($message) use ($email) {
            $message->to($email, 'Tutorials Point')->subject
            ('Password Reset');
            $message->from('sem3.con.sec@gmail.com','Connection Security Reset');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

}
