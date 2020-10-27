<?php

namespace App\Http\Controllers;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProductToCar(){

        // 取得儲存資料庫使用者資料的ID
        // $User = auth()->user()->id;
        // dd($User);
        $user = '';
        if (auth()->user()) {
            $user = auth()->user()->id;
        }


        \Cart::add(455, 'Sample Item', 100, 2, array());
    }

    public function getContent()
    {
        $content = \Cart::getContent();
        dd($content);

    }

    public function TotalCart()
    {
        $total = \Cart::getTotal();
        dd($total);

    }
}
