<?php

namespace App\Http\Controllers;

use App\contact;
use App\User_0928;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_list = User_0928::all();
        return view('admin.news.index',compact('news_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        //ORM 基本新增
        // $new_news = new User_0928();
        // $new_news->title = $request->title;
        // $new_news->sub_title = $request->sub_title;
        // $new_news->image_url = '';
        // $new_news->text = $request->text;
        // $new_news->save();

        //file storage上傳方式 先使用php artisan storage:link建立捷徑在public
        // $requestData = $request->all();
        // $request->file('image_url');

        //檔案上傳並取得圖片名稱,之後去index php 更改路徑
        // $file_name = $request->file('image_url')->store('','public');
        // $requestData['image_url'] = $file_name;

        //move上傳方式
        $requestData = $request->all();

        if($request->hasFile('image_url')){
            $file = $request->file('image_url');
            $path = $this->fileUpload($file,'news');
            $requestData['image_url'] = $path;
        };

        User_0928::create($requestData);

        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = User_0928::where('id','=',$id)->first();
        // dd($news);
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //也可以用 $news = User_0928::where('id','=',$id)->first();
        $news = User_0928::find($id);
        $requestData = $request->all();

         //判斷是否有上傳圖片
            if($request->hasFile('image_url')){
               //刪除舊有照片
                 $old_image = $news->image_url;
                 File::delete(public_path().$old_image);
               //上傳新圖片
               $file = $request->file('image_url');
               $path = $this->fileUpload($file,'news');
               //將新圖片的路徑放入requestData中
               $requestData['image_url'] = $path;
            }
        $news->update($requestData);

        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        // $news = User_0928::find($id);
        // $news->delete();

        $news = User_0928::find($id);
        $old_image = $news->image_url;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $news->delete();

        return redirect('/admin/news');

        // return redirect('/admin/news');
    }

    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }
}
