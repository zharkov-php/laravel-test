<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function ($message){
            $message->to('zharkov.php@gmail.com', 'To web dev blog')->subject('Test email');
            $message->from('zharkov.php@gmail.com', 'Web dev blog');
    });
    }
}
