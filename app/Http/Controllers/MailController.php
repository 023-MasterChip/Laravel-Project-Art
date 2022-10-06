<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {
        $data = $request->all();
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $artist = $data['artistEmail'];

        Mail::send('mail', $data, function($message) use ($email,$name,$artist) {
            $message->to($artist, 'ART')->subject
               ('Art Commission');
            $message->from($email,$name);
         });
         return redirect()->back()->with('message', 'Art commission sent.');
    }
}
