<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index() 
    {

      $games = Game::with('versions')->get();

      return $games;
    }
}
