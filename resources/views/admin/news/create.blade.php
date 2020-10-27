@extends('layouts.app')

@section('css')

{{-- summernote --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item"><a href="/admin/news">最新消息管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增</li>
        </ol>
    </nav>

    <form method="POST" action="/admin/news/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">
                標題
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>

        <div class="form-group">
            <label for="sub_title">
                副標題
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="sub_title" class="form-control" id="sub_title" required>
        </div>

        <div class="form-group">
            <label for="file">上傳照片</label>
            <input name="image_url" type="file" class="form-control-file" id="file">
        </div>

        <div class="form-group">
            <label for="text">景點名稱</label>
            {{-- sumernote切記勿用以下白癡方法例如：input --}}
            {{-- <input name="text" type="text" class="form-control" id="text"> --}}
            <textarea name="text" id="text" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">新增</button>
    </form>
@endsection

@section('js')
    {{-- summernote --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/lang/summernote-ja-JP.min.js"></script>
    <script>

            $('#text').summernote({
                height: 150,
                lang: 'ja-JP',
                callbacks: {
                    onImageUpload: function(files) {
                        for(let i=0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    },
                    onMediaDelete : function(target) {
                        $.delete(target[0].getAttribute("src"));
                    }
                },
            });
            $.upload = function (file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_upload_img',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function (img) {
                    $('#description').summernote('insertImage', img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };

        $.delete = function (file_link) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_delete_img',
                data: {file_link:file_link},
                success: function (img) {
                    console.log("delete:",img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }


    </script>
@endsection
