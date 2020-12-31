<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if (Session::has('cart')){
        //     dd(123);
        //     $oldCart=Session::get('cart');
        //     $cart=new Cart($oldCart);
        //     view()->share('product_cart',$cart );
        //     view()->share('totalPrice',$cart->totalPrice);
        //     view()->share('totalQty',$cart->totalQty );
        // }
        view()->share('hello','Đây là câu xin chào' );
    }
}
