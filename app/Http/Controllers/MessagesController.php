<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function show(){
    	return view('messages.show', ['title' => 'Messages']);
    }

    public function create(){
    	return view('messages.create', ['title' => 'Create Message']);
    }
}
