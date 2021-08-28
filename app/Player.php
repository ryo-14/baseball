<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Team;

class Player extends Model
{
    public function team()
  {
    return $this->belongsTo('App\Team');
  }
  
    protected $guarded = array('id');
    
    public static $rules = array(
      'title' => 'required',
      'body' => 'required',
      );
}
