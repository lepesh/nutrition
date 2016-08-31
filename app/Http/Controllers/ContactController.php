<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function feedback()
    {
        return view('feedback');
    }

    public function send(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $text = $request->get('message');

        $message = 'Имя: ' . $name . PHP_EOL . 'Email: ' . $email . PHP_EOL . PHP_EOL . $text;

        Mail::raw($message, function($message) {
            $message->to('sergey.lepesh@gmail.com')->subject('Обратная связь');
        });

        $sendResult = count(Mail::failures()) == 0;

        return view('feedback', [
            'sendResult' => $sendResult
        ]);
    }
}
