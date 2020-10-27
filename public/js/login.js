
// modal function
$(document).ready(function(){
    // 點選註冊按鈕時
    $('.register-btn').on('click', function(){
        // console.log(1);
        $('.modal-body-footer').addClass('d-none');
        $('.modal-body-verify').removeClass('d-none');
        // 秀出返回鍵
        $('.btn-back-to').removeClass('active-none');
        $('.register-btn').addClass('active-none');
        $('.forgetPW-btn').addClass('active-none');
    });

    // 點選忘記密碼時
    $('.forgetPW-btn').on('click', function(){
        // console.log(1);
        $('.modal-body-middle').addClass('d-none');
        $('.modal-body-footer').addClass('d-none');
        $('.modal-body-forgetPW').removeClass('d-none')
        // 秀出返回鍵
        $('.btn-back-to').removeClass('active-none');
        $('.register-btn').addClass('active-none');
        $('.forgetPW-btn').addClass('active-none');
    });
    // 點選忘記密碼後-1: 忘記密碼分頁按鈕
    $('.login-group').on('click', '.forget-left', function(){
        // $('.forget-left').addClass('border-bottom-golden');
        // $('.forget-right').removeClass('border-bottom-golden');
        $('.modal-body-middle').addClass('d-none');
        $('.modal-body-footer').addClass('d-none');
        $('.modal-body-forgetEM').addClass('d-none')
        $('.modal-body-forgetPW').removeClass('d-none')
        // 秀出返回鍵
        $('.btn-back-to').removeClass('active-none');
        $('.register-btn').addClass('active-none');
        $('.forgetPW-btn').addClass('active-none');
    })
    // 點選忘記密碼後-1: 忘記Email分頁按鈕
    $('.login-group').on('click', '.forget-right', function(){
        // $('.forget-right').addClass('border-bottom-golden');
        // $('.forget-left').removeClass('border-bottom-golden');
        $('.modal-body-middle').addClass('d-none');
        $('.modal-body-footer').addClass('d-none');
        $('.modal-body-forgetPW').addClass('d-none')
        $('.modal-body-forgetEM').removeClass('d-none')
        // 秀出返回鍵
        $('.btn-back-to').removeClass('active-none');
        $('.register-btn').addClass('active-none');
        $('.forgetPW-btn').addClass('active-none');
    })

    // 點選返回會員登入按鈕
    $('.btn-back-to').on('click', function(){
        $('.modal-body-forgetEM').addClass('d-none')
        $('.modal-body-forgetPW').addClass('d-none')
        $('.modal-body-verify').addClass('d-none')
        $('.modal-body-middle').removeClass('d-none');
        $('.modal-body-footer').removeClass('d-none');
        // 返回鍵消失
        $('.btn-back-to').addClass('active-none');
        $('.register-btn').removeClass('active-none');
        $('.forgetPW-btn').removeClass('active-none');
    });

    // bootstrap nav_tab active btn color
    $('#navbarSupportedContent ul').on('click', 'li',function () {
        $('.nav-link').removeClass('active');
        $(this).children().addClass('active')
    })
    var window_url = window.location.href
    // console.log($('.nav-link').data('nav'));
    // $('.nav-link').each(function( index ) {
    //   console.log($('.nav-link')[0]);
    // });
    // var data_nav = $('.nav-link').data('nav')
    if (window_url == 'http://127.0.0.1:8000/' || window_url == 'http://localhost:8000/'){
        $('.link_0').addClass('active');
    } else if (window_url == 'http://127.0.0.1:8000/movie_all' || window_url == 'http://localhost:8000/movie_all'){
        $('.link_2').addClass('active');
    } else if (window_url == 'http://127.0.0.1:8000/cinema_info' || window_url == 'http://localhost:8000/cinema_info'){
        $('.link_3').addClass('active');
    } else if (window_url == 'http://127.0.0.1:8000/query' || window_url == 'http://localhost:8000/query'){
        $('.link_4').addClass('active');
    }
})

