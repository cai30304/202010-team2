<?php

namespace App\Http\Controllers;

use App\movie_all;
use App\movie_imgs;
use App\movie_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 原本勿刪除
        $movie_list = movie_all::all();
        return view('admin.product.index',compact('movie_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.movie_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('movie_poster');
        // if($request->hasFile('imgs'))
        // {
        //     foreach ($files as $file) {
        //         //上傳圖片
        //         $path = $this->fileUpload($file,'product');
        //         //新增資料進DB
        //         $product_img = new ProductImg;
        //         $product_img->product_id = $new_product_id;
        //         $product_img->img = $path;
        //         $product_img->save();

        //     }
        // }

        // $requestData = $request->all();
        // if($request->hasFile('movie_poster')){
        //     $file = $request->file('movie_poster');
        //     $path = $this->fileUpload($file,'movie');
        //     $requestData['movie_poster'] = $path;
        // };

        // movie_all::create($requestData);

        return redirect('/admin/movie');
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
        $movie_imgs = movie_imgs::all();
        $movie_grade = movie_type::all();
        $movie = movie_all::where('id','=',$id)->first();
        dd($movie->movie_imgs);
        return view('admin.product.movie_edit',compact('movie','movie_grade','movie_imgs'));
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
                $movie = movie_all::find($id);
                $requestData = $request->all();
                 //判斷是否有上傳圖片
                    if($request->hasFile('movie_poster')){
                       //刪除舊有照片
                         $old_image = $movie->movie_poster;
                         File::delete(public_path().$old_image);
                       //上傳新圖片
                       $file = $request->file('movie_poster');
                       $path = $this->fileUpload($file,'movie');
                       //將新圖片的路徑放入requestData中
                       $requestData['movie_poster'] = $path;
                    }
                $movie->update($requestData);

                return redirect('/admin/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        $movie = movie_all::find($id);
        $old_image = $movie->movie_poster;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $movie->delete();

        return redirect('/admin/movie');
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
