<?php

namespace App\Http\Controllers\Site\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $result = false;
        
        if($request->ajax() && !empty($request->all()))
        {
            $sender = $request;
            
            Mail::send('emails.default', ['sender' => $sender], function($message) use ($sender) {
                $message->from($sender->email, $sender->name);
                $message->to(env('MAIL_ADMIN_EMAIL'));
                $message->subject($sender->subject);
            });
            
            $result = true;
        }
        
        return response()->json(['result' => $result]);
    }
}