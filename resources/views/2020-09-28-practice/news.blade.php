@extends('layouts/nav_footer')

@section('content')
        <section class="news">
            <div class="container">
                <h2 class="news_title">最新消息</h2>
                {{-- {{$news_ary}} --}}
                <div class="row news_lists">

                    @foreach ($news_ary as $news)
                        <div class="col-md-4">
                            <div class="news_list">
                            <h3>{{ $news -> title}}</h3>
                            <h4>{{ $news -> sub_title}}</h4>
                            <img width="100%" src="{{ $news -> image_url}}" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">{{ $news -> text}}</p>
                            <a class="btn btn-success" href="/news_info/{{ $news -> id}}" role="button">點擊查看更多 &raquo;</a>
                            </div>
                        </div>
                    @endforeach
                    {{$news_ary->links()}}
                    {{-- <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>中台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>中台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>中台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="/images/2020-09-28-practice/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <hr>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/2020-09-28-practice/news.css">
@endsection
