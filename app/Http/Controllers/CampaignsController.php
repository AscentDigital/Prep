<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function show(){
    	return view('campaign.show', ['title' => 'Campaign']);
    }

    public function create(){
    	return view('campaign.create', ['title' => 'Create Campaign']);
    }
}
