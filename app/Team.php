<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;

class Team extends Model
{
  //protected $table = 'players';
  //protected $primaryKey = 'team_id';
  
    public function players()
  {
    return $this->hasMany('App\Player');
  }
}
