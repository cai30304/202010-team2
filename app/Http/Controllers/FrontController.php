<?php

namespace App\Http\Controllers;

use App\contact;
use App\movie_all;
use App\movie_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        $news_list = DB::table('news')->orderBy('id', 'desc')->take(3)->get();
        // dd($news_list);
        return view('2020-09-28-practice/index', ['news_ary' => $news_list]);
    }

    public function contact_us(){
        return view('2020-09-28-practice/contact_us');
    }

    public function store_contact(Request $request){
        // dd($store_contact -> all());
        // DB::table('contact')->insert(
        //     ['email' => $request->email,
        //     'location' => $request->location,
        //     'image_url' => '',
        //     'place_name' => $request->place_name,
        //     'place_info' => $request->place_info,]
        // );

        contact :: create($request -> all());

        return 'success';
    }


    public function news(){
        $news_list = DB::table('news')->orderBy('id', 'desc')->paginate(6);
        // dd($news_list);
        return view('2020-09-28-practice/news', ['news_ary' => $news_list]);
    }

    public function news_info($news_id){
        $news = DB::table('news')->where('id','=',$news_id)->first();
        // dd($news);
        return view('2020-09-28-practice/news_info',compact('news'));
    }

    public function movie_all(){
        $movie_list = movie_all::all();
        $movie_types = movie_type::all();
        // dd($movie_types);
        return view('admin/product/movie_all',compact('movie_list','movie_types'));
    }

    public function movie_info(){
        return view('');
    }

    public function A($movie_type_id){
        // dd($movie_type_id);

        $movies = movie_type::find($movie_type_id);
        $movie_types = movie_type::all();

        // dd($movies);

        $movie_list = movie_all::all();
        return view('admin/product/movie_all',compact('movie_list','movie_types'));

    }

}
