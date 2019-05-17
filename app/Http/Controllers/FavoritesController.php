<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class FavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Question $question)
    {
        $question->favorite()->attach(auth()->id());

        return back();
    }

    public function destroy(Question $question)
    {
        $question->favorite()->detach(auth()->id());

        return back();
    }
}
