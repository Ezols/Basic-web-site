<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    { 

        $data = request()->validate(
        [
            'name' => 'required',
            'email' => 'required',
            'message' => '',
        ]);

        // Create a message
        $message = new Message;
        $message->name = $data['name'];
        $message->name = $data['email'];
        $message->name = $data['message'];
        $message->save;

        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages()
    {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
