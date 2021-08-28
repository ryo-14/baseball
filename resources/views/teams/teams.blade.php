@extends('layouts.master')
@section('content')
@include('layouts.header')

<title>球団選択画面</title>
<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="col-md-8">
                <div class="title m-b-md">
                    【NPB】みんなで作るリアルタイム選手データベース
                </div>
                    <div class="links">
                          @foreach($posts as $post)
                          <a href="{{ route('players',[
                            "team_name_en" => $post->team_name_en,
                            "id" => $post->id
                            ])}}">{{ $post->team_name }}</a>
                          //. "?id=" . 後で調べる
                          @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection