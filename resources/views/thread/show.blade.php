@extends('layouts.app')
@section('title', 'スレッド詳細')

@section('content')
    <div>スレッド詳細ページ</div>
    
    <!-- <div>{{$thread->body}}</div> -->
    
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$thread->title}}</h4>
        <h6 class="card-subtitle mb-2 text-muted">ユーザー名が入る</h6>
        <p class="card-text">
          {{$thread->body}}
        </p>
      </div>
    </div>
@endsection