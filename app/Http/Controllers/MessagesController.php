<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {

        // Validate fields
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        // Create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Svae message
        $message->save();

        return redirect('/')->with(' ', "Message sent Successfully");
    }

    public function message(Request $request)
    {
        $messages = Message::latest()->paginate(3);
        return view('pages.message', compact('messages'));
    }
}
