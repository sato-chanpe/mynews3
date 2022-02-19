@extends('layouts.app')
@section('title', 'スレッド詳細')

@section('content')
<div class="container">
  <div>スレッド詳細ページ</div>
  
  <!-- <div>{{$thread->body}}</div> -->
  
  <div class="card  mb-2">
    <div class="card-body">
      <h4 class="card-title">{{$thread->title}}</h4>
      <h6 class="card-subtitle mb-2 text-muted">ユーザー名が入る</h6>
      <p class="card-text">
        {{$thread->body}}
      </p>
    </div>
  </div>
  <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">

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
      <input type="hidden" name="thread_id" value={{ $thread->id }}>
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="投稿">
  </form>
</div>
@endsection