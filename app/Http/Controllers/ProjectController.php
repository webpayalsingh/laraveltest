<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProjectController extends Controller
{
     public function AllData()
    {
      $user = User::latest()->get();
    	return view('admin.Userdata',compact('user'));
    }
}
