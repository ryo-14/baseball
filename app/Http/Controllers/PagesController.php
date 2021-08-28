<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class PagesController extends Controller
{
     public function top()
     {
        return view('top');
     }
     
     public function teams()
     {
          $teams = new Team;
          $posts = Team::all();
          //dd($posts);
          return view('teams.teams', ['posts'=> $posts]);
     }
    
     public function players(Request $request)
     {
          $id = $request->id;
          $players = Team::find($id)->players;
          $team = Team::find($id);

          return view('teams.players',['players'=> $players , 'team'=> $team]);
     }
     
     public function giants()
     {
         return view('layouts/giants/players');
     }
     
     // public function test()
     // {
          // $teams = new Team;
          // $posts = Team::all();
          // dd($posts);
          // return view('teams.teams', ['posts'=> $posts]);
     // }
}

