@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item"><a href="/admin/movie_type">電影評級管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增</li>
        </ol>
    </nav>

    <form method="POST" action="/admin/movie_type/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="grade">
                電影評級
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="grade" class="form-control" id="grade" required>
        </div>

        <button type="submit" class="btn btn-primary">新增</button>
    </form>
@endsection

@section('js')

@endsection
