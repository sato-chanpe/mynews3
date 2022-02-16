@extends('layouts.app')
@section('title', '投稿済みスレッド一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>スレッド一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('ThreadController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <form action= {{ action('ThreadController@index') }} class="form-inline">
                <label class="sr-only" for="inlineFormInputName2">Name</label>
                <input type="text" name="search_word" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="スレッド検索">
                <button type="submit" class="btn btn-primary mb-2">検索</button>
            </form>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($threads as $thread)
                                <tr>
                                    <th>{{ $thread->id }}</th>
                                    <td>{{ \Str::limit($thread->title, 100) }}</td>
                                    <td>{{ \Str::limit($thread->body, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection