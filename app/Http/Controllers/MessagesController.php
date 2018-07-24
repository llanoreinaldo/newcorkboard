<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\Board;
use App\User;

class MessagesController extends Controller
{
    //
    public function index()
    {
        $messages = Message::orderBy('created_at','desc');
        dd($messages);

        return view('boardshow')->with(['messages' => $messages]);
    }
 
    public function show(Message $message)
    {
        
        return view('boardshow')->with('message', $message);
    }
 
    public function store(Request $request)
    {
        $message = Message::create($request->all());
 
        // $message->user_id = auth()->user['id'];
        $message->user_id = $request->user()->id;
        $message->save();

        return redirect()->back();
    }
 
    public function update(Request $request, Message $message)
    {
        $message->update($request->all());
 
        return response()->json($message, 200);
    }
 
    public function delete(Message $message)
    {
        $message->delete();
 
        return response()->json(null, 204);
    }
}
