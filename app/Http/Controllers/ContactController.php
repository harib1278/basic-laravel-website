<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactController extends Controller
{
    // Take the request variables and send them to the model for saving
    public function submit(ContactRequest $request){
      //dd($request->input('email'));
      $message = new Message();
      $message->name    = $request->input('name');
      $message->email   = $request->input('email');
      $message->subject = $request->input('subject');
      $message->message = $request->input('message');

      $message->save();

      // Redirect the user back to the homepage via named route
      return redirect()->route('home');
    }
}
