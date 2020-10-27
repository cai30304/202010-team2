@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">後台</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                   <a href="/admin/movie">電影管理</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">新增電影資訊</li>
            </ol>
        </nav>
        <form method="POST" action="/admin/movie/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="movie_name">
                    電影標題
                    {{-- <small class="text-danger">不可超過20字</small> --}}
                </label>
                <input type="text" name="movie_name" class="form-control" id="movie_name" required>
            </div>
            <div class="form-group">
                <label for="english_name">
                    英文標題
                    {{-- <small class="text-danger">不可超過20字</small> --}}
                </label>
                <input type="text" name="english_name" class="form-control" id="english_name" required>
            </div>
            <div class="form-group">
                <label for="rating">分級</label>
                <input name="rating" type="text" class="form-control-file" id="rating">
            </div>
            <div class="form-group">
                <label for="actors">演員</label>
                <input name="actors" type="text" class="form-control" id="actors" required>
            </div>
            <div class="form-group">
                <label for="movie_length">時長</label>
                <input name="movie_length" type="text" class="form-control" id="movie_length" required>
            </div>
            <div class="form-group">
                <label for="trailer">預告片</label>
                <input name="trailer" type="text" class="form-control" id="trailer" required>
            </div>
            <div class="form-group">
                <label for="release_date">上映日期</label>
                <input name="release_date" type="text" class="form-control" id="release_date" required>
            </div>
            <div class="form-group">
                <label for="hall">上映廳次</label>
                <input name="hall" type="text" class="form-control" id="hall" required>
            </div>
            <div class="form-group">
                <label for="poster">海報</label>
                <input name="poster" type="text" class="form-control-file" id="poster">
            </div>
            <div class="form-group">
                <label for="movie_imgA">劇照1</label>
                <input name="movie_imgA" type="text" class="form-control-file" id="movie_imgA">
            </div>
            <div class="form-group">
                <label for="movie_imgB">劇照2</label>
                <input name="movie_imgB" type="text" class="form-control-file" id="movie_imgB">
            </div>
            <div class="form-group">
                <label for="movie_imgC">劇照3</label>
                <input name="movie_imgC" type="text" class="form-control-file" id="movie_imgC">
            </div>
            <div class="form-group">
                <label for="movie_about">電影介紹</label>
                <textarea name="movie_about" type="text" class="form-control" id="movie_about" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">新增</button>
        </form>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
