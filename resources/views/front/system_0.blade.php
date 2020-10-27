@extends('layouts.template')

@section('content')
<main>
    <div id="place">
        <div id="place_container" class="container d-flex">
            <span>1.選擇票種>></span><span>2.選擇座位>></span><span>3.確認</span>
            {{-- <button type="button" class="btn btn-dark">登入</button> --}}
        </div>

    </div>

    <div id="seats_select">
        <div id="seats_select_container" class="container d-flex flex-md-column flex-lg-row justify-content-between">
            <div id="seats_left" class="">
                <div class="title">
                    <h3>選擇票種</h3>
                    {{-- {{$id2}}
                    {{$id1}} --}}
                </div>
                <div class="seats d-flex flex-wrap justify-content-center">
                    <div class="option mb-4 mt-2 d-flex">
                        <div class="option_l d-flex justify-content-center align-items-center">
                            <img width='50%' src="/images/two-tickets.svg" alt="">
                        </div>
                        <div class="option_r d-flex justify-content-between align-items-center">
                            <div class="option_info">
                                <div>學生票</div>
                                <span>NT$230</span>
                            </div>
                            <div class="btns row">
                                <div id='btn-l1' class="btn-l col">-</div>
                                <div id='btn-m1' class="btn-m col">0</div>
                                <div id='btn-r1' class="btn-r col">+</div>
                            </div>
                        </div>
                    </div>
                    <div class="option mb-4 d-flex">
                        <div class="option_l d-flex justify-content-center align-items-center">
                            <img width='50%' src="/images/two-tickets.svg" alt="">
                        </div>
                        <div class="option_r d-flex justify-content-between align-items-center">
                            <div class="option_info">
                                <div>全票</div>
                                <span>NT$270</span>
                            </div>
                            <div class="btns row">
                                <div id='btn-l2' class="btn-l col">-</div>
                                <div id='btn-m2' class="btn-m col">0</div>
                                <div id='btn-r2' class="btn-r col">+</div>
                            </div>
                        </div>
                    </div>
                    <div class="option mb-2 d-flex">
                        <div class="option_l d-flex justify-content-center align-items-center">
                            <img width='50%' src="/images/two-tickets.svg" alt="">
                        </div>
                        <div class="option_r d-flex justify-content-between align-items-center">
                            <div class="option_info">
                                <div>優待票</div>
                                <span>NT$180</span>
                            </div>
                            <div class="btns row">
                                <div id='btn-l3' class="btn-l col">-</div>
                                <div id='btn-m3' class="btn-m col">0</div>
                                <div id='btn-r3' class="btn-r col">+</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seats_right" class="">
                <div class="info d-flex">
                    <img width='150px' class='mr-3' src="{{$movie->poster}}" alt="">
                    <div class="intro">
                        <div class="movie_title mb-4">
                            <h3>{{$movie->movie_name}}</h3>
                            <h4>{{$movie->english_name}}</h4>
                        </div>
                        <div class="movie_info">
                            <h5>影城:角頭影城</h5>
                            <h5>規格:數位</h5>
                            <h5>場次:</h5>
                            <h5>{{$show->date}}{{$show->showtime}}</h5>
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">購物清單</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id='cart1'></p>
                            <p id='cart2'></p>
                            <p id='cart3'></p>
                        </div>
                        <div class="modal-footer">
                            <p id='count'>合計</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="btns_group">
        <div id="btns_group_container" class='container d-flex justify-content-end'>
            <div class="btns">
                {{-- <button id='next' type="button" class="btn btn-light"><a href="/system_1/{{$show->id}}_{{$movie->id}}"
                style='color:black;text-decoration: none;'>繼續</a></button> --}}
                <button id='next' type="button" class="btn btn-light">繼續</button>
            </div>

        </div>
    </div>
</main>
@endsection

@section('css')
<link rel="stylesheet" href="/css/system_0.css">
@endsection

@section('js')
<script>
    /* 第一排 */
var amount1=0
var count=0
var price1=0
var price2=0
var price3=0
$('#count').html("合計 "+count+" 元");

$('#btn-m1').html(amount1);

$("#btn-r1").click(function() {
    amount1+=1
    price1=amount1*230
    count+=230
    $('#btn-m1').html(amount1);
    $('#cart1').html("學生票 x "+amount1+" = "+price1+" 元");
    $('#count').html("合計 "+count+" 元");
});

$("#btn-l1").click(function() {
    amount1-=1
    price1=amount1*230
    count-=230
    $('#btn-m1').html(amount1);
    if (amount1!=0) {
        $('#cart1').html("學生票 x "+amount1+" = "+price1+" 元");
    }else{
        $('#cart1').html('');
    }
    $('#count').html("合計 "+count+" 元");
});

/* 第二排 */
var amount2=0
$('#btn-m2').html(amount2);

$("#btn-r2").click(function() {
    amount2+=1
    price2=amount2*270
    count+=270
    $('#btn-m2').html(amount2);
    $('#cart2').html("全票 x "+amount2+" = "+price2+" 元");
    $('#count').html("合計 "+count+" 元");
});

$("#btn-l2").click(function() {
    amount2-=1
    price2=amount2*270
    count-=270
    $('#btn-m2').html(amount2);
    if (amount2!=0) {
        $('#cart2').html("全票 x "+amount2+" = "+price2+" 元");
    }else{
        $('#cart2').html('');
    }
    $('#count').html("合計 "+count+" 元");
});

/* 第三排 */
var amount3=0
$('#btn-m2').html(amount3);

$("#btn-r3").click(function() {
    amount3+=1
    price3=amount3*180
    count+=180
    $('#btn-m3').html(amount3);
    $('#cart3').html("優待票 x "+amount3+" = "+price3+" 元");
    $('#count').html("合計 "+count+" 元");
});

$("#btn-l3").click(function() {
    amount3-=1
    price3=amount3*180
    count-=180
    $('#btn-m3').html(amount3);
    if (amount3!=0) {
        $('#cart3').html("優待票 x "+amount3+" = "+price3+" 元");
    }else{
        $('#cart3').html('');
    }
    $('#count').html("合計 "+count+" 元");
});

// var amount=0
$('#next').click(function(){
    // amount=amount1+amount2+amount3;
    // console.log(amount);
    window.location.href=`/system_1/{{$show->id}}_{{$movie->id}}_${amount1}_${amount2}_${amount3}`;
})
</script>
@endsection
