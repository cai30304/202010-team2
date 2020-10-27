@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item active" aria-current="page">電影評級管理</li>
        </ol>
    </nav>

    <a href="/admin/movie_type/create" class="btn btn-success mb-3">新增最新評級</a>

    {{-- {{$movie_list}} --}}
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>評級</th>
                <th>日期</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($movie_grades as $movie_grade)
                <tr>
                    <td>{{$movie_grade -> id}}</td>
                    <td>{{$movie_grade -> grade}}</td>
                    <td>{{$movie_grade -> created_at}}</td>
                    <td>
                        <a href="movie_type/edit/{{$movie_grade->id}}" class="btn btn-sm btn-primary">編輯</a>
                        <a id="delete" href="movie_type/destory/{{$movie_grade->id}}" class="btn btn-sm btn-danger">刪除</a>
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
