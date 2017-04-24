<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
      function index(){
          $p = Player::all();
          return view('todos',['jugadores'=>$p]);
          //$p = DB::select('select * from players');
          //return view('todos', ['jugadores' => $p]);
      }

      function ver($id){
          $p = Player::find($id);
          return view('ver',['unjugador'=>$p]);
      }

}
