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
                    <h3>選擇座位</h3>
                </div>
                <div class="seats">
                    <div id="seats_info" class='d-flex justify-content-center mt-4 mb-3'>
                        <div class="info_group mr-3">
                            <div class="box" style='background-color: royalblue;'></div>
                            <div>您的座位</div>
                        </div>
                        <div class="info_group mr-5">
                            <div class="box"></div>
                            <div>可選</div>
                        </div>
                        <div class="info_group">
                            <div class="box" style='background-color:palevioletred;'></div>
                            <div>已售</div>
                        </div>
                    </div>
                    <div class="frame mb-3"></div>

                    <div id="seats_table" class='d-flex flex-column align-items-center justify-content-center mb-4'>

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
                            <h5>座位:<span id='seatid'></span></h5>
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
        <div id="btns_group_container" class='container d-flex justify-content-end mb-5'>
            <div class="btns">
                <button type="button" class="btn btn-light"><a href="/system_0/{{$show->id}}_{{$movie->id}}"
                        style='color:black;text-decoration: none;'>上一步</a></button>
                {{-- <button id='next'  type="button" class="btn btn-light"><a href="/system_2/{{$show->id}}_{{$movie->id}}"
                style='color:black;text-decoration: none;'>繼續</a></button> --}}
                <button id='next' type="button" class="btn btn-light">繼續</button>
            </div>

        </div>
    </div>
</main>
@endsection

@section('css')
<link rel="stylesheet" href="/css/system.css">
@endsection

@section('js')
<script src="/js/system.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    var price1=0
    var price2=0
    var price3=0
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
</script>

<script>
    var content=''
    var counter=0
    var amount1={{$amount1}}
    var amount2={{$amount2}}
    var amount3={{$amount3}}
    var limit={{$amount1}}+{{$amount2}}+{{$amount3}}
    function checkcounter(){
        // console.log(counter)
        // console.log(limit);
        if(counter>=limit && limit!=0){
            // $(".seat").prop("disabled",true);
            $('.seat').attr('disabled', true);
        }else if(limit<=0 && counter==0){
            // $(".seat").prop("disabled",false);
            $('.seat').attr('disabled', true);
            Swal.fire({
                icon: 'error',
                title: 'Erros',
                text: '請先回上一步購買票券',
            })
        }else{
            // $(".seat").prop("disabled",false);
            $('.seat').attr('disabled', false);
        }
    };

    checkcounter();

    $('.seat').click(function(){

        // console.log(limit);

        if($('.seat').attr('disabled') != "disabled"){
            counter++
            content+=$(this).data('id')+' '
             $('#seatid').html(content);
        }
        checkcounter();
})

    $('#next').click(function(){
        // amount=amount1+amount2+amount3;
        // console.log(amount);
        // console.log(amount1)
        window.location.href=`/system_2/{{$show->id}}_{{$movie->id}}_${amount1}_${amount2}_${amount3}_${content}`;
    })

</script>
@endsection
