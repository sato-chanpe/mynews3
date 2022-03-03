<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Thread;
use Auth;

class ThreadController extends Controller
{
    //
    public function add()
    {
        return view('thread.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Thread::$rules);
        $thread = new Thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = Auth::id();
        $thread->save();
        
        return redirect('thread');
    }
    
    public function index(Request $request)
    {
        if($request->search_word){
            $threads = Thread::where('title','like', "%{$request->search_word}%")->get();
        } else {
          // それ以外はすべてのニュースを取得する
            $threads = Thread::all();
        }
        return view('thread.index', ['threads' => $threads, 'hogehoge' => "hello"]);
    }
    
    public function show(Request $request)
    {
        $thread = Thread::find($request->thread_id);
        return view('thread.show', ['thread' => $thread, "posts" => $thread->posts()->paginate(100)]);
    }

}
