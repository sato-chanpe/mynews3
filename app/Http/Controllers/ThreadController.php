<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreadController extends Controller
{
    //
    public function add()
    {
         return view('thread.create');
    }
    
    public function create()
    {
      return redirect('thread');
    }
}
