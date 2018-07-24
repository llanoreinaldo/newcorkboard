<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


use App\Board;
use App\User;

 
class BoardsController extends Controller
{
 
    public function index()
    {
        
    //Boards holds all the boards..here we are assigning Board to a variable
        $boards = Board::orderBy('created_at', 'desc')->paginate(5);
    //Then we return this route to the view home.blade and pass the $boards variable
    //to the home view AS the name boards!
        return view('home')->with(['boards' => $boards]);
    }
 
    // public function show(Board $board)
    // {
        
    //     return view('board_show')->with(['board' => $board]);
    // }

    public function show(Board $board){
        // dd($board);
        return view('boardshow')->with('board', $board);
    }
 
    public function store(Request $request)
    {
        // Board::create($request->all());
        $board = new Board;
        $board->name = $request->input('name');
        $board->hash = Str::uuid();
        
        
        // $board->user_id = auth()->user['id'];
        $board->user_id = $request->user()->id;
        $board->save();

        return redirect('boards');
        // return response()->json($board, 201);
    }
 
    public function update(Request $request, Board $board)
    {
        $board->update($request->all());
  
        return response()->json($board, 200);
    }
 
    public function delete(Board $boards)
    {
        
        $boards= Board::find($boards->hash);
        $boards->delete();
        return redirect('boards')->with('success', 'Board Removed');
 
    }
 
}