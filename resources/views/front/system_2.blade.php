@extends('layouts.template')

@section('content')
<main>
    <div id="place">
        <div id="place_container" class="container d-flex">
            <span>1.選擇票種>></span><span>2.選擇座位>></span><span>3.確認</span>
            {{-- <button type="button" class="btn btn-dark">登入</button> --}}
        </div>

    </div>

    <div id="order_info" class='container d-flex flex-wrap justify-content-center'>
        <div class="title mb-5">
            <h3>訂單資訊</h3>
        </div>

        <div id="seats_right" class="mb-5">
            <div class="info d-flex">
                <img width='200px' class='mr-4' src="{{$movie->poster}}" alt="">
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
                        <h5>座位:{{$seat}}</h5>
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






    <div id="btns_group">
        <div id="btns_group_container" class='container d-flex justify-content-end mb-5'>
            <div class="btns">
                {{-- <button type="button" class="btn btn-light"><a href="/system_1/{{$show->id}}_{{$movie->id}}"
                        style='color:black;text-decoration: none;'>上一步</a></button> --}}
                <button id='before' type="button" class="btn btn-light">上一步</button>
                <button id='sub' type="button" class="btn btn-primary">提交訂單</button>
            </div>

        </div>
    </div>
</main>
@endsection

@section('css')
<link rel="stylesheet" href="/css/system_2.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection

@section('js')
<script>
    var price1=0
    var price2=0
    var price3=0
    var amount1={{$amount1}}
    var amount2={{$amount2}}
    var amount3={{$amount3}}
    if ({{$amount1}}!=0) {
        price1={{$amount1}}*230
        // $('#cart1').html("學生票x"{{$amount1}}"="+$price1+"元");
        $('#cart1').html("學生票 x "+{{$amount1}}+" = "+price1+" 元");
    }
    if ({{$amount2}}!= 0) {
        price2 = {{$amount2}}*270
        $('#cart2').html("全票 x "+{{$amount2}}+" = "+price2+" 元");
    }
    if ({{$amount3}}!= 0) {
        price3 = {{$amount3}}*180
        $('#cart3').html("優待票 x "+{{$amount3}}+" = "+price3+" 元");
    }
    var count=price1+price2+price3
    $('#count').html("合計 "+count+" 元");

    $('#before').click(function(){
        window.location.href=`/system_1/{{$show->id}}_{{$movie->id}}_${amount1}_${amount2}_${amount3}`;
    })

    $('#sub').click(function(){
        console.log(1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '您的訂單已提交成功',
            showConfirmButton: false,
            timer: 2500
        })
    })
</script>
@endsection
