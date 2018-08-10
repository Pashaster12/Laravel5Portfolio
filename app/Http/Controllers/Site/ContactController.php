<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Request as RequestFacade;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Контакты',
            'description' => 'Свяжитесь с нами'
        ];
        
        $data['breadcrumbs'] = RequestFacade::get('breadcrumbs');
        return view('site.contacts', $data);
    }

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
