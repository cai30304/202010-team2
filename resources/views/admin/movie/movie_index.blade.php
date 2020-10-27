@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">後台</a></li>
                <li class="breadcrumb-item active" aria-current="page">電影管理</li>
            </ol>
        </nav>

        <a href="/admin/movie/create" class="btn btn-success mb-3">新增電影資訊</a>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>電影標題</th>
                    <th>英文標題</th>
                    <th>演員</th>
                    <th>時長</th>
                    <th>上映日期</th>
                    <th>上映廳次</th>
                    <th style="width: 150px">海報</th>
                    <th>劇照1</th>
                    <th>劇照2</th>
                    <th>劇照3</th>
                    <th>功能</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{$movie_all}} --}}
                @foreach ($movie_all as $movie)
                    <tr>
                        <td>{{$movie->movie_name}}</td>
                        <td>{{$movie->english_name}}</td>
                        <td>{{$movie->actors}}</td>
                        <td>{{$movie->movie_length}}分鐘</td>
                        <td>{{$movie->release_date}}</td>
                        <td>{{$movie->hall}}</td>
                        <td>
                            <img width="100%" src="{{$movie->poster}}" alt="">
                        </td>
                        <td>
                            <img width="100%" src="{{$movie->movie_imgA}}" alt="">
                        </td>
                        <td>
                            <img width="100%" src="{{$movie->movie_imgB}}" alt="">
                        </td>
                        <td>
                            <img width="100%" src="{{$movie->movie_imgC}}" alt="">
                        </td>
                        <td>
                            <a href="/admin/movie/edit/{{$movie->id}}" class="btn btn-sm btn-primary">編輯</a>
                            <a id="delete" href="/admin/movie/destroy/{{$movie->id}}" class="btn btn-sm btn-danger">刪除</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection

@section('css')

@endsection

@section('js')
    {{-- <script>
        $(document).ready(function(){
            $('#example').DataTable();
            $('#example').on("click","btn-delete",function{
                var movie_id = this.dataset.movieid
                var r = confirm("Press a buttom!");
                if(r == true){
                    window.location.href = ''
                }
            })
        })
    </script> --}}
@endsection
