@extends('layouts/template')

@section('content')
<!-- swiper -->
<div class="banner mb-5">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://www.ambassador.com.tw/Uploads/108/f8446562-3bbd-4142-9a19-f66be636535b.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.ambassador.com.tw/Uploads/97/4e63009e-e555-43bb-bfa7-db93d1a2b024.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.ambassador.com.tw/Uploads/107/44edeff6-b099-40e8-ae9b-e664509b33d0.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.ambassador.com.tw/Uploads/93/606addfb-e382-45b3-b9e0-69dca1cf6038.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.ambassador.com.tw/Uploads/37/6eb21f21-19f7-43f9-b65b-c4d2bd044c9d.jpg" alt="">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- 卡片 -->
<div class="recommend container">
    <div class="row mt-5 mb-5">
        <div class="col d-flex justify-content-around">
            <a href="./" style='color:white;text-decoration: none;'><button class="btn draw-border">現正熱映</button></a>
            <a href="./future" style='color:white;text-decoration: none;'><button class="btn draw-border">即將上映</button></a>
        </div>
    </div>
    <div class="multiple-items d-flex justify-content-center align-items-center">
        @foreach ($movies as $movie)

        <div>
            <div class="card">
                <a href="./movie_info/{{$movie->id}}" style='text-decoration: none;'>
                    <img class="img-fliud card-img-top" src="{{$movie->poster}}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <span class="card-title">{{$movie->movie_name}}</span>
                    <h5 class="card-text mb-3">{{$movie->english_name}}</h5>
                    <button><a href="./movie_info/{{$movie->id}}" style='color:white;text-decoration: none;'>詳情</a></button>
                    <button><a href="./query" style='color:white;text-decoration: none;'>場次</a></button>
                </div>

            </div>
        </div>


        @endforeach
        {{-- <div>
            <div class="card">
                <a href=""><img class="card-img-top"
                        src="https://www.ambassador.com.tw/assets/img/movies/Bacurau_180x270_Poster.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <a href=""><span class="card-title">殺戮荒村</span></a>
                    <a href="">
                        <h5 class="card-text">Bacurau</h5>
                    </a>
                    <button>場次</button>
                    <button>預告</button>
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <a href=""><img class="card-img-top"
                        src="https://www.ambassador.com.tw/assets/img/movies/MyMissingValentine_180x270_Poster.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <a href=""><span class="card-title">消失的情人節</span></a>
                    <a href="">
                        <h5 class="card-text">My Missing Valentine</h5>
                    </a>
                    <button>場次</button>
                    <button>預告</button>
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <a href=""><img class="card-img-top"
                        src="https://www.ambassador.com.tw/assets/img/movies/BigfootFamily_180x270_Poster.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <a href=""><span class="card-title">森林特攻隊</span></a>
                    <a href="">
                        <h5 class="card-text">Bigfoot Family</h5>
                    </a>
                    <button>場次</button>
                    <button>預告</button>
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <a href=""><img class="card-img-top"
                        src="https://www.ambassador.com.tw/assets/img/movies/THEWARWITHGRANDPA_180x270_Poster.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <a href=""><span class="card-title">阿公當家</span></a>
                    <a href="">
                        <h5 class="card-text">THE WAR WITH GRANDPA</h5>
                    </a>
                    <button>場次</button>
                    <button>預告</button>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row mt-5 mb-5 ">
        <div class="col d-flex justify-content-center">
            <button class="btn draw-border"><a href="./movie_all"
                    style='color:white;text-decoration: none;'>更多电影</a></button>
        </div>
    </div>
</div>
@endsection

@section('css')
<!-- swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">

<!-- slick -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />

<link rel="stylesheet" href="./css/indexStyle.css">
@endsection

@section('js')
<script>
    var swiper = new Swiper('.swiper-container', {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
</script>
<!-- slick js -->
<script>
    $('.slider').slick({
            centerMode: true,
            centerPadding: '100px',
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
        });
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            arrows: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }

            ]
        });
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object

</script>
@endsection
