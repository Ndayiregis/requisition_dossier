<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
     public function getMembers(){
    	$members = Member::all();

    	return view('show')->with('members', $members);
    }
}
