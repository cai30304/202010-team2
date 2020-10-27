@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item active" aria-current="page">電影總覽管理</li>
        </ol>
    </nav>

    <a href="/admin/movie/create" class="btn btn-success mb-3">新增最新電影</a>

    {{-- {{$movie_list}} --}}
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>標題</th>
                <th>原文標題</th>
                <th>圖片</th>
                <th>分級</th>
                <th>上映日期</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movie_list as $movie)
                <tr>
                    <td>{{$movie -> title}}</td>
                    <td>{{$movie -> foreign_title}}</td>
                    <td>
                        {{-- {{asset('/storage/'.$movie->movie_poster)}} --}}
                        <img src="{{$movie -> movie_poster}}" width="100px" alt="">
                    </td>
                    <td>{{$movie -> content_rating}}</td>
                    <td>{{$movie -> release_date}}</td>
                    <td>
                        <a href="movie/edit/{{$movie->id}}" class="btn btn-sm btn-primary">編輯</a>
                        <a id="delete" href="movie/destory/{{$movie->id}}" class="btn btn-sm btn-danger">刪除</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

@endsection
