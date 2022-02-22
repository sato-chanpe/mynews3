@extends('layouts.app')
@section('title', 'スレッド詳細')

@section('content')
<div class="container">
  <div>スレッド詳細ページ</div>
  
  <!-- <div>{{$thread->body}}</div> -->
  
  <div class="card  mb-2">
    <div class="card-body">
      <h4 class="card-title">{{$thread->title}}</h4>
      <h6 class="card-subtitle mb-2 text-muted">投稿者名：{{ $thread->user->name }}</h6>
      <p class="card-text">
        {{$thread->body}}
      </p>
    </div>
  </div>
  @foreach($thread->posts as $post)
    <div class="card mt-3 mb-3">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted">コメントした人の名前が入ります</h6>
          <p class="card-text">
            {{ $post->body }}
          </p>
        </div>
    </div>
  @endforeach
  
  <form action="{{ action('PostController@create', $thread) }}" method="post" enctype="multipart/form-data">
      @if (count($errors) > 0)
          <ul>
              @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
              @endforeach
          </ul>
      @endif
      <div class="form-group row">
          <label class="col-md-2">本文</label>
          <div class="col-md-10">
              <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
          </div>
      </div>
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="投稿">
  </form>
</div>
@endsection