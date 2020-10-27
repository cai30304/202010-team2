<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie_all;
use App\Show;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index(){
        $movies=Movie_all::where('release_date','<','2020/12/04')->get();
        return view('front.index',compact('movies'));
    }
    public function index_future(){
        $movies=Movie_all::where('release_date','>','2020/12/03')->get();
        return view('front.index',compact('movies'));
    }
    public function system_0($movie_id,$movie_id2){
        $id1=$movie_id;//抓到shows表的id
        $id2=$movie_id2;//抓到movie_alls表的id
        $movie=Movie_all::find($id2);
        $show=Show::find($id1);
        // dd($show);
        return view('front.system_0',compact('movie','show'));
    }
    public function system_1($movie_id,$movie_id2,$amount1,$amount2,$amount3){
        $id1=$movie_id;//抓到shows表的id
        $id2=$movie_id2;//抓到movie_alls表的id
        $movie=Movie_all::find($id2);
        $show=Show::find($id1);
        return view('front.system_1',compact('movie','show','amount1','amount2','amount3'));
    }
    public function system_2($movie_id,$movie_id2,$amount1,$amount2,$amount3,$seat){
        $id1=$movie_id;//抓到shows表的id
        $id2=$movie_id2;//抓到movie_alls表的id
        $movie=Movie_all::find($id2);
        $show=Show::find($id1);
        return view('front.system_2',compact('movie','show','amount1','amount2','amount3','seat'));
    }
    public function query(){
        /* 場次查詢主頁 */
        $date=Show::where('showtime','09:00')->where('movie_id','1')->get(); //得到可以選擇的日期
        // $movies=Movie_all::all(); //得到在上映的電影
        $time=Movie_all::with('show')->get(); //得到電影的時段
        /* 得到指定日期的電影時段 */
        $movies = Movie_all::with(['show' => function($query) {
            $query->where('date','2020-10-27(二)');
        }])->get();

        return view('front.query',compact('date','movies'));
    }
    public function querySelect($show_id){
        /* 選擇日期時顯示 */
        $date=Show::where('showtime','09:00')->where('movie_id','1')->get(); //得到可以選擇的日期

        /* 得到等於選擇的日期的電影 */
        $movies = Movie_all::with(['show' => function($query) use ($show_id) {
            $query->where('date','=',$show_id);
        }])->get();

        /* 帶回傳的show_id到前端頁面 */
        $time=$show_id;
        // dd($time);
        return view('front.querySelect',compact('date','movies','time'));
    }
    public function movie_now(){
        // $movies=Movie_all::all();
        $movies=Movie_all::where('release_date','<','2020/12/04')->get();
        // dd($movies);
        return view('front.movie_all',compact('movies'));
    }
    public function movie_future(){
        // $movies=Movie_all::all();
        $movies=Movie_all::where('release_date','>','2020/12/03')->get();
        // dd($movies);
        return view('front.movie_all',compact('movies'));
    }
    public function movie_info($movie_id){
        $movie=Movie_all::find($movie_id);
        return view('front.movie_info',compact('movie'));
    }
    public function cinema_info(){
        return view('front.cinemaInfo');
    }
}
