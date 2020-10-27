@extends('layouts/nav_footer')

@section('content')

        <section class="news_info">
            <div class="container">
                <h2 class="info_title">{{$news -> title}}</h2>
                {{-- {{var_dump($news)}} --}}
                <div class="row">
                    <div class="col-12 my-3 my-md-0 col-md-6">
                        <div class="image_box h-100">
                            <a href="/images/2020-09-28-practice/index/news/news_example.JPG" data-lightbox="image-1" data-title="My caption">
                                <img width="100%" src="{{$news -> image_url}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 my-3 my-md-0 col-md-6">
                        <div class="info_content">
                            <h3>{{$news -> sub_title}}</h3>
                            {{$news -> text}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr>

@endsection

@section('css')
    <!-- lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- page css -->
    <link rel="stylesheet" href="/css/2020-09-28-practice/news_info.css">
@endsection

@section('js')
    <!-- lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
