<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


  public function index() 
  {

    $users = User::with('games')->get();

    return $users;
  }
}
