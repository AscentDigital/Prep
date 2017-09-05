<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeywordsController extends Controller
{ 
	public function __construct(){
    	$this->middleware('auth');
    }

    public function show(){
    	return view('keyword.show', ['title' => 'Keywords']);
    }

    public function create(){
    	return view('keyword.create', ['title' => 'Create Keyword']);
    }
}
