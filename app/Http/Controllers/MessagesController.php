<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


use App\Board;
use App\Message;

class MessagesController extends Controller
{
    //
    public function index()
    {
        //Boards holds all the boards..here we are assigning Board to a variable
        $messages = Message::all();
    //Then we return this route to the view home.blade and pass the $boards variable
    //to the home view AS the name boards!
        return view('home')->with(['messages' => $messages]);
    }
 
    public function show(Message $message)
    {
        
        return view('boardshow')->with('message', $message);
    }
 
    public function store(Request $request)
    {
        $message = new Message;
 
        // $message->user_id = auth()->user['id'];
        $message->board_id = $request->board()->id;
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
