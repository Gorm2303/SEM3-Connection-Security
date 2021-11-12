<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function basic_email() {
        $data = array('name'=>"Connection Security Reset");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('jobro19@student.sdu.dk', 'Tutorials Point')->subject
            ('Password Reset');
            $message->from('sem3.con.sec@gmail.com','Connection Security Reset');
        });

        echo "Basic Email Sent. Check your inbox.";
    }
    public function html_email() {
        $data = array('name'=>"Connection Security Reset");
        Mail::send('mail', $data, function($message) {
            $message->to('jobro19@student.sdu.dk', 'Tutorials Point')->subject
            ('Password Reset');
            $message->from('sem3.con.sec@gmail.com','Connection Security Reset');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

}
