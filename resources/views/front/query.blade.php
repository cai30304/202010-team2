@extends('layouts.template')

@section('content')
<main>
    <div class="container-lg">
        <h2>場次查詢</h2>
        <div class="choose_group">
            {{-- {{$time}} --}}
            <div class="date">
                <span>請選擇日期</span>
                {{-- <select name="" id="">
                <option value="">-請選擇-</option>
                <option value="">2020-10-16(五)</option>
                <option value="">2020-10-17(六)</option>
                <option value="">2020-10-18(日)</option>
                </select> --}}
                <select name="" id="">
                    @foreach ($date as $item)
                    <option value="{{$item->date}}" data-date="{{$item->date}}">{{$item->date}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="movies">
            @foreach ($movies as $movie)
            <div class="movie">
                <div class="poster">
                    <img src="{{$movie->poster}}" alt="">
                </div>
                <div class="info">
                    <div class="general_audiences">
                        <img src="{{$movie->rating}}" alt="">
                    </div>
                    <a href=""><span class="movie_title"
                            data-name="{{$movie->movie_name}}">{{$movie->movie_name}}</span></a>
                    <h5 class="movie_EnglishName">{{$movie->english_name}}</h5>
                    <br>
                    <div class="movie_length">影片片長：{{$movie->movie_length}}分鐘</div>
                    <div class="screen_date">上映日期：{{$movie->release_date}}</div>
                </div>
                <div class="times_group">
                    <div class="time_table">角頭戲院時刻表 2020-10-27(二)</div>
                    <p>{{$movie->hall}}廳 {{$movie->movie_name}}</p>
                    <hr>

                    @foreach ($movie->show as $item)
                    {{-- {{$item}} --}}
                        <div class="time_list">
                            <div class="time">
                                <a href="/system_0/{{$item->id}}_{{$movie->id}}"><button type="button"
                                        class="btn btn-outline-danger btn-sm">訂票</button></a>
                                {{-- <button type="button" class="btn btn-outline-danger btn-sm">訂票</button> --}}
                                <span>{{$item->showtime}}</span>
                            </div>
                        </div>
                    @endforeach
                    <hr>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</main>
@endsection

@section('css')
<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/query.css">
@endsection

@section('js')
<script>
    $(function(){
    $('select').change(function(){
       var selected = $(this).find('option:selected');
       var show_id = selected.data('date');
       console.log(show_id);
       window.location.href=`/query/${show_id}`;
    });
});

$(function(){
        $('button').click(function(){
        var movie_name = $('.movie_title').data('name')
        console.log(selected);
        });
});


// Plain old JavaScript
// var sel = document.getElementById('select');
// var selected = sel.options[sel.selectedIndex];
// var extra = selected.getAttribute('data-foo');
</script>

@endsection
