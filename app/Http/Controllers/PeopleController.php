<?php

namespace App\Http\Controllers;

use App\Http\Request\PeoplePostRequest;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
   
    public function index()
    {
        return response()->json(Article::all(), 200);
    }

    public function create()
    {
        return response->(View::make('people.create'));
    }

    public function show(People $people)
    {
        return response()->json($article, 200);
    }

 
    public function edit(People $people)
    {
        $people = people::find($id);

        return response()->json(View::make('people.edit')->with('people', $people));
    }

 
    public function destroy(People $people)
    {
        $people = people::find($id);
        $people -> delete();
    }
}
