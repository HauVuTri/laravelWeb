<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Slide;
use Illuminate\Support\Facades\Schema;

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

        Schema::defaultStringLength(191);

        view()->composer('inc.header', function ($view) { // dùng cái này để chia sẻ dữ liệu với 1 view chỉ định
            $slide = Slide::all();
            $categorychung = Category::where('parent_id', '=', 0)->get();
            $mobile = Category::where('parent_id', '=', 1)->get();
            $laptop = Category::where('parent_id', '=', 2)->get();

            $pc = Category::where('parent_id', '=', 19)->get();
            $view->with(['slide' => $slide, 'categorychung' => $categorychung, 'mobile' => $mobile, 'laptop' => $laptop, 'pc' => $pc]);
        }); // cái $view này là biến bất kì thôi
        view()->composer('inc.header', function ($view) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
        });
    }
}
