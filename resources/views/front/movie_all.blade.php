@extends('layouts.template')

@section('content')
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col d-flex justify-content-around">
                <a href="./movie_now" style='color:white;text-decoration: none;'><button class="btn draw-border">現正熱映</button></a>
                <a href="./movie_future" style='color:white;text-decoration: none;'><button class="btn draw-border">即將上映</button></a>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center">
            <!-- 小於lg時col占12格 -->
            @foreach ($movies as $movie)
                {{-- <a href=""> --}}
                    <div class="col-12 col-lg-4">
                        <div class="card m-3 border">
                            <a href="./movie_info/{{$movie->id}}">
                            <img src="{{$movie->poster}}"
                                    class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-text text-center m-0">{{$movie->movie_name}}</h4>
                                    <h5 class="card-text text-center m-0">{{$movie->english_name}}</h5>
                                    <h5 class="card-text text-center m-0">{{$movie->release_date}}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                {{-- </a> --}}
            @endforeach
        </div>
    </div>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="css/chienchih/login.css"> --}}
    <link rel="stylesheet" href="css/chienchih/button.css">
    {{-- <link rel="stylesheet" href="css/chienchih/movie_all.css"> --}}
    <link rel="stylesheet" href="css/movie_all.css">
@endsection

@section('js')

@endsection
