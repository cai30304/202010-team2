@extends('layouts.template')

@section('content')
<section style="width: 100%;">
    <div class="fullpage parallax"
        style="background-image: url(https://ysolife.com/wp-content/uploads/2019/05/Lateshift_Poster1920x1080.jpg)">
    </div>
</section>

<section id="templateA">
    <div class="container">
        <div class="poster">
            <img src="{{$movie->poster}}" alt="">
            <a href="/query"><div class="btn">我要訂票</div></a>
        </div>
        <div class="info">
            <h2>{{$movie->movie_name}}</h2>
            <h3>{{$movie->english_name}}</h3>
            <hr>
            <p>電影介紹：{{$movie->movie_about}}</p>
            <p>主要演員：{{$movie->actors}}</p>
            <p>上映日期：{{$movie->release_date}}</p>
            <p>片長：{{$movie->movie_length}}</p>
            <!-- <button class="btn-primary">預告</button> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn-primary" data-toggle="modal" data-target="#test" style="border-radius: 5px">
                預告
            </button>
            <!-- Modal -->
            <div class="modal fade" id="test" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalCenterTitle">{{$movie->movie_name}}</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe width="100%" height="100%" src="{{$movie->trailer}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-secondary" data-dismiss="modal" style="border-radius: 5px">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div id="templateB" class="fullpage parallax2"
        style="background-image: url(https://ysolife.com/wp-content/uploads/2019/05/Lateshift_Poster1920x1080.jpg)">
        <div class="mask">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"
                        style="background-image:url({{$movie->movie_imgA}})">
                        {{-- style="background-image:url(https://image.agentm.w/images/movie/be83f523598b675fc18166e597c19fb404e9c072d640d541fa38fd8bc3fc197c/photo/image/e98008ba-0d46-4fba-b826-ed16d32e4073.jpg)"> --}}
                    </div>
                    <div class="swiper-slide"
                        style="background-image:url({{$movie->movie_imgB}})">
                    </div>
                    <div class="swiper-slide"
                        style="background-image:url({{$movie->movie_imgC}})">
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="/css/movie_info.css">
<!-- sweetalert -->
<link rel="stylesheet" href="sweetalert2.min.css">
@endsection

@section('js')
<!-- Swiper js -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
  effect: 'cube',
  grabCursor: true,
  cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});
</script>
@endsection
