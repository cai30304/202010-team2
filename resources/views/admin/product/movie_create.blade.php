@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item"><a href="/admin/movie">電影總覽管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增</li>
        </ol>
    </nav>

    <form method="POST" action="/admin/movie/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">
                電影標題
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>

        <div class="form-group">
            <label for="foreign_title">
                副標題
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="foreign_title" class="form-control" id="foreign_title" required>
        </div>

        <div class="form-group">
            <label for="release_date">上映日期</label>
            <input name="release_date" type="text" class="form-control" id="release_date" required>
        </div>

        <div class="form-group">
            <label for="file">上傳照片</label>
            <input name="movie_poster" type="file" class="form-control-file" id="file">
        </div>

        <div class="form-group">
            <label for="file">上傳多張照片</label>
            <input name="movie_poster[]" multiple type="file" class="form-control-file" id="file">
        </div>

        <div class="form-group">
            <label for="content_rating">分級</label>
            <input name="content_rating" type="text" class="form-control" id="content_rating" required>
        </div>

        <button type="submit" class="btn btn-primary">新增</button>
    </form>
@endsection

@section('js')

@endsection
