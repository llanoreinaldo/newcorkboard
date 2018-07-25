<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    // //Beauty Mail Route
    public function sendMail(Request $request){
        $this->validate($request, [
        'email' => 'bail|required|email',
        ]);
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.welcome', [], function($message) 
        {
        $email = Input::get('email'); //Input::get not working
        $message
        ->from('reinaldo@projectcodex.biz')
        ->to($email, 'Welcome Friend')
        ->subject('Your Cork Board Invitation');
        });
        return Redirect::back();
        //return view('welcome');
        }
}
