@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item active" aria-current="page">最新消息管理</li>
        </ol>
    </nav>

    <a href="/admin/news/create" class="btn btn-success mb-3">新增最新消息</a>

    {{-- {{$news_list}} --}}
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>標題</th>
                <th>副標題</th>
                <th>圖片</th>
                <th>內文</th>
                <th>created_at</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news_list as $news)
                <tr>
                    <td>{{$news -> title}}</td>
                    <td>{{$news -> sub_title}}</td>
                    <td>
                        {{-- {{asset('/storage/'.$news->image_url)}} --}}
                        <img src="{{$news -> image_url}}" width="100px" alt="">
                    </td>
                    {{-- 不想顯示的時候有<p></p>要記得用以下寫法參考laravel文件dispaly in data --}}
                    <td>{!! $news-> text !!}</td>
                    <td>{{$news -> created_at}}</td>
                    <td>
                        <a href="news/edit/{{$news->id}}" class="btn btn-sm btn-primary">編輯</a>
                        <a id="delete" href="news/destory/{{$news->id}}" class="btn btn-sm btn-danger">刪除</a>
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

        var delete_btns = document.querySelectorAll('#delete')

        console.log(delete_btns);

        delete_btns.forEach(delete_btn => {
            delete_btn.onclick = function(){
            alert('確定要刪除嗎')
            }
        });
    </script>

@endsection
