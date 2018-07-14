<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Link;
 
class LinksController extends Controller
{
 
    public function index()
    {
        return Link::all();
    }
 
    public function show(Link $link)
    {
        return $link;
    }
 
    public function store(Request $request)
    {
        $link = Link::create($request->all());
 
        return response()->json($link, 201);
    }
 
    public function update(Request $request, Link $link)
    {
        $link->update($request->all());
 
        return response()->json($link, 200);
    }
 
    public function delete(Link $link)
    {
        $link->delete();
 
        return response()->json(null, 204);
    }
 
}