<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(){
        return view('test');
    }

    public function welcome(){
        return view('welcome');
    }

    public function test2() {
        return view('test2');
    }

    public function aboutme(){
        return view('aboutme');
    }
    public function myhobby(){
        return view('myhobby');
    }
    public function contactme(){
        return view('contactme');
    }
}
