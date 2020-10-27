<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GaTao Theater</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="css/style.css"> -->
    {{-- 此为團體專題通用樣板 --}}

    @yield('css')
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">角頭影院</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item">
                    <a class="nav-link link_0" data-nav="0" href="/">首頁 <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link link_1" data-nav="1" href="/system_0">訂票系統</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link link_2" data-nav="2" href="/movie_all">電影總覽</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link_3" data-nav="3" href="/cinema_info">影城介紹</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        會員專區
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link link_4" href="/query">訂票系統</a>
                </li>
            </ul>
        </div>
        <!-- Button trigger modal -->
        {{-- <button type="button" class="member-btn" data-toggle="modal" data-target="#member_modal">
            會員登入
        </button> --}}
        <!-- Authentication Links -->
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <button type="button" class="member-btn" data-toggle="modal" data-target="#member_modal">
                        會員登入
                    </button>
                    {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                </li>
                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        {{-- end --}}

    </nav>
    <div class="space"></div>

    <div id="Modal-section"> {{-- modal-section --}}
        <!-- Membetr Modal -->
        <div class="modal fade" id="member_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <!-- modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body login-group">
                        <h1 class="text-center">角頭影院</h1>
                        <p class="text-center">GaTao</p>
                        <div class="modal-body-middle">
                            <a class="btn btn-block login-fb" href="{{ url('auth/facebook') }}">以Facebook帳號登入</a>
                            <a class="btn btn-block login-google" href="{{ url('auth/google') }}">以Google帳號登入</a>
                            <p class="or">或</p>
                        </div>
                        <div class="modal-body-footer">
                            {{-- 登入 --}}
                            {{-- <div class="card-body"> --}}
                            <form method="POST" id="login_input" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                                    {{-- <div class="col"> --}}
                                        <input id="email" type="email" class="p-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="我的Email" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>
                                <div class="form-group">
                                    {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                                    {{-- <div class="col"> --}}
                                        <input id="password" type="password" class="p-4 form-control @error('password') is-invalid @enderror" name="password" placeholder="我的密碼" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>
                                <div class="form-group">
                                    {{-- <div class="col"> --}}
                                        <div class="form-check">
                                            <label class="form-check-label text-white" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                            <input class="form-check-input w-50" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="form-group mb-0">
                                    <div class="submit">
                                        <button type="submit" class="btn-login">
                                            {{ __('登入') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            {{-- </div> --}}
                            {{-- 登入結尾 --}}
                            {{-- <form id="login_input" action="" class="d-flex flex-wrap" method="POST">
                                <input id="email" type="email" name="email" placeholder="我的Email" required>
                                <label for="email"></label>
                                <input id="password" type="text" name="password" placeholder="密碼" required>
                                <label for="password"></label>
                            </form> --}}
                            {{-- <div class="submit">
                                <div type="submit" class="btn btn-login">
                                    登入
                                    <input type="submit" value="送出資料" id="submit" hidden>
                                    <label for="submit">登入</label>
                                </div>
                            </div> --}}
                        </div>
                        <div class="modal-body-verify d-none">

                            {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                            <div class="card-body p-0">   {{-- 註冊 --}}
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label text-md-right text-white">{{ __('Name') }}</label>
                                        <div class="col-6 d-flex align-items-center">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="您的大名" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>
                                        <div class="col-6 d-flex align-items-center">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="您的信箱" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-4 col-form-label text-md-right text-white">{{ __('Password') }}</label>
                                        <div class="col-6 d-flex align-items-center">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="您的密碼" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-4 col-form-label text-md-right text-white">{{ __('Confirm Password') }}</label>
                                        <div class="col-6 d-flex align-items-center">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="再次確認密碼" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    {{-- 註冊 --}}
                                    <div class="form-group">
                                        <div class="submit">
                                            <button type="submit" class="btn btn-login">
                                                {{ __('註冊') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>    {{-- 註冊結束 --}}

                            {{-- <form id="login_input" action="" class="d-flex flex-wrap" method="POST">
                                <input id="email" type="email" name="email" placeholder="我的Email" required>
                                <label for="email"></label>
                            </form>
                            <div class="submit">
                                <div type="button" class="btn btn-login">
                                發送驗證信至我的Email
                                    <input type="submit" value="送出資料" id="submit" hidden>
                                </div>
                            </div> --}}
                        </div>
                        <div class="modal-body-forgetPW d-none">
                            <div id="tab-forget" class="tab-forget">
                                <span class="forget-left border-bottom-golden">忘記密碼</span>
                                <span class="forget-right">忘記Email</span>
                            </div>
                            <form id="login_input" action="" class="d-flex flex-wrap" method="POST">
                                <input id="email" type="email" name="email" placeholder="我的Email" required>
                                <label for="email"></label>
                            </form>
                            <div class="submit">
                                <div type="button" class="btn btn-login">
                                    發送重設密碼信件至我的Email
                                    <input type="submit" value="送出資料" id="submit" hidden>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-forgetEM d-none">
                            <div id="tab-forget" class="tab-forget">
                                <span class="forget-left">忘記密碼</span>
                                <span class="forget-right border-bottom-golden">忘記Email</span>
                            </div>
                            <form id="login_input" action="" class="d-flex flex-wrap" method="POST">
                                <input id="last_name" type="text" name="last_name" placeholder="姓氏" required>
                                <label for="email"></label>
                            </form>
                            <form id="login_input" action="" class="d-flex flex-wrap" method="POST">
                                <input id="first_name" type="text" name="first_name" placeholder="名字" required>
                                <label for="email"></label>
                            </form>
                            <form id="login_input" action="" class="d-flex flex-wrap" method="POST">
                                <input id="id_number" type="text" name="id_number" placeholder="身分證字號" required>
                                <label for="email"></label>
                            </form>
                            <form id="login_input" action="" class="d-flex flex-wrap" method="POST">

                            </form>
                            <div class="submit">
                                <div type="button" class="btn btn-login">
                                    找回我的Email
                                    <input type="submit" value="送出資料" id="submit" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="register-btn">
                            我要註冊
                        </div>
                        <div class="forgetPW-btn">
                            忘記密碼
                            {{-- @if (Route::has('password.request'))
                                <a style="text-decoration: none; color: black;" href="{{ route('password.request') }}">
                                    {{ __('忘記密碼?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn btn-back-to active-none">
                            返回登入
                        </div>
                        <button type="button" class="btn btn-close" data-dismiss="modal">關閉視窗</button>
                        <button type="button" class="btn btn-rule" data-toggle="modal" data-target="#member_rule">
                            會員規章
                        </button>
                    </div>
                </div>  <!-- modal-content end-->
            </div>
        </div> <!-- madal end -->

        <!--Member_rule Modal -->
        <div class="modal fade" id="member_rule" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <!-- modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">111</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>入會規章</h3>
                        <p>1. 填寫完整資料後，於線上刷卡申辦或至影城現場繳交1,000元保證金完成入會者，即為角頭影城會員。保證金即押金，不得作為消費使用。</p>
                        <p>2. 角頭影城會員採記名制度，會員憑「角頭看電影APP」內之「A+行動儲值卡」作為會員身分識別憑證。</p>
                        <h3>角頭會員權益須知</h3>
                        <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta consequatur minus repellendus recusandae nam harum, earum laudantium quam optio id cum sapiente sint voluptatibus in aperiam. Minima ipsam esse ea!</p>
                        <p>2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem nulla doloremque optio, placeat facere praesentium labore, vero nemo minima cumque provident nihil iure vitae expedita impedit animi voluptates suscipit laboriosam?</p>
                        <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil, voluptates beatae explicabo voluptatem exercitationem adipisci non animi facere. Sit maxime odit neque incidunt minus deserunt eligendi possimus aliquam consequatur?</p>
                        <p>4. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae quas veritatis magnam sint cumque nobis at nesciunt, praesentium, dicta in sequi earum ex id ipsum laborum voluptas minus veniam quo.</p>
                        <p>5. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quam sint perferendis nobis, error, dolores, necessitatibus fugiat dolore dolor consequatur suscipit neque minima non quibusdam. Vel perspiciatis culpa laudantium expedita?</p>
                        <p>6. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni iure laborum dignissimos. Repudiandae vero quam perspiciatis, sed molestiae dolorem numquam voluptates tempore minus, asperiores ab quae illo nihil est explicabo.</p>
                        <p>7. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni iure laborum dignissimos. Repudiandae vero quam perspiciatis, sed molestiae dolorem numquam voluptates tempore minus, asperiores ab quae illo nihil est explicabo.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rule" data-dismiss="modal">我知道了</button>
                    </div>
                </div>  <!-- modal-content end-->
            </div>
        </div> <!-- madal end -->
    </div id="Modal-section">  <!-- madal-section end -->

    {{-- <main role="main"> --}}
        <!-- 內容放此 -->
    @yield('content')
    {{-- </main> --}}

    <footer>Copyright © 2020 GaTao 純屬練習</footer>
    {{-- <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}

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

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

    <!-- slick js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

    <!-- Initialize Swiper -->

    {{-- login.js --}}
    <script src="/js/login.js"></script>

    @yield('js')

</body>

</html>
