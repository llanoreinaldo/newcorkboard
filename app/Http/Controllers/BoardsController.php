<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Board;
use App\User;
 
class BoardsController extends Controller
{
 
    public function index()
    {
        
    //Boards holds all the boards..here we are assigning Board to a variable
        $boards = Board::orderBy('created_at', 'desc')->paginate(5);
        // dd(Auth::user());
    //Then we return this route to the view home.blade and pass the $boards variable
    //to the home view AS the name boards!
        return view('home')->with(['boards' => $boards]);
    }
 
    // public function show(Board $board)
    // {
        
    //     return view('board_show')->with(['board' => $board]);
    // }

    public function show($id){
        $board = Board::find($id);
        return view('boardshow')->with('board', $board);
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        // Board::create($request->all());
        $board = new Board;
        $board->name = $request->input('name');

        
        // $board->user_id = auth()->user['id'];
        $board->user_id = $request->user()->id;
        $board->save();

        return redirect('home');
        // return response()->json($board, 201);
    }
 
    public function update(Request $request, Board $board)
    {
        $board->update($request->all());
  
        return response()->json($board, 200);
    }
 
    public function delete($id)
    {
        $board = Board::find($id);
        $board->delete();
        return redirect('home')->with('success', 'Board Removed');
 
    }
 
}