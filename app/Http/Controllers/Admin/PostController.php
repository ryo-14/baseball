<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function add()
      {
        return view ('top');
      } 
    public function edit()
      {
        return view ('admin.post.edit');
      }
}
