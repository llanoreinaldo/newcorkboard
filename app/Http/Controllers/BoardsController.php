<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Board;
 
class BoardsController extends Controller
{
 
    public function index()
    {
        return Board::all();
    }
 
    public function show(Board $board)
    {
        return $board;
    }
 
    public function store(Request $request)
    {
        $board = Board::create($request->all());
        // return View::make("/");
        return response()->json($board, 201);
    }
 
    public function update(Request $request, Board $board)
    {
        $board->update($request->all());
 
        return response()->json($board, 200);
    }
 
    public function delete(Board $board)
    {
        $board->delete();
 
        return response()->json(null, 204);
    }
 
}