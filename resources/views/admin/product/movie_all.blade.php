@extends('layouts/nav_footer')

@section('css')
    <!-- bookstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/movie_all.css">
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col d-flex justify-content-around mt-5">
                <div id="playing_now" class="text-center border border-dark p-2 active2">
                    <h1>現正熱映</h1>
                </div>
                <div id="coming_soon" class="text-center border border-dark p-2">
                    <h1>即將上映</h1>
                </div>
            </div>
        </div>

        <div id="1" class="btn">{{$movie_types[0] -> grade}}級</div>
        <div id="2" class="btn">{{$movie_types[1] -> grade}}級</div>
        <div id="3" class="btn">{{$movie_types[2] -> grade}}級</div>

        <div class="row">
            <div class="col d-flex justify-content-around flex-wrap">
                {{-- {{$movie_list}} --}}
                {{-- <a href="/movie_all/1"></a>
                <a href="/movie_all/2">{{$movie_types[1] -> grade}}級</a>
                <a href="/movie_all/3">{{$movie_types[2] -> grade}}級</a> --}}

                @foreach ($movie_list as $movie)

                    <div class="card m-3" style="width: 15%;" data-grade="{{$movie->movie_type_id}}">
                        <a href="">
                            <img src="{{ $movie -> movie_poster}}"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text text-center m-0">{{ $movie -> content_rating}}</p>
                                <p class="card-text text-center m-0">{{ $movie -> title}}</p>
                                <p class="card-text text-center m-0">{{ $movie -> release_date}}</p>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="/js/movie_all.js"></script>
@endsection
