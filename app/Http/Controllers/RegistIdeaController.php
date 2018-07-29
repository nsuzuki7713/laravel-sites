<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class RegistIdeaController extends Controller
{
    public function index()
    {
        return view('regist');
    }

    public function post(Request $request)
    {
        $idea = new Idea;
        $form = $request->all();
        unset($form['_token']);
        $idea->fill($form)->save();

        return redirect('/detail/'.$idea->id);
    }
}
