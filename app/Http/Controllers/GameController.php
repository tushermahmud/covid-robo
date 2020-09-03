<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        return view('snakeGame');
    }
    public function word(){
        return view('numberGuesser');
    }
}
