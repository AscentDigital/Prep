<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribersController extends Controller
{
   public function show(){
    	return view('subscriber.show', ['title' => 'Subscribers']);
    }
}
