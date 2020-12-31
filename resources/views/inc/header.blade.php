<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a class="p-0 m-0" href="/trangchu" id="logo"><img src="source/image/logo/thegioididong.png" width="40px" height="40px" alt=""></a></li>
                    <li><a href=""><i class="fa fa-home"></i>MinhUKShop</a></li>
                    <li><a href=""><i class="fa fa-phone"></i>0988888888</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="background/{{Auth::user()->id}}"><i class="fa fa-user"></i>Xin
                                chào {{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user()->level==100)
                        <li><a href="{{route('catlist')}}"><i class="fa fa-user"></i>Quản lí</a></li>
                            @else
                            <li><a href="{{route('historybuy')}}"><i class="fa fa-user"></i>Lịch sử mua hàng</a></li>
                            @endif
                        <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                    @else
                        <li><a href="{{route('register')}}">Đăng kí</a></li>
                        <li><a href="{{route('login')}}">Đăng nhập</a></li>
                    @endif

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{route('search')}}">
                        <input type="text" name="key" id="s" placeholder="Nhập từ khóa..."/>
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    @if(Session::has('cart'))
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng
                                @if(Session::has('cart'))
                                    {{Session('cart')->totalQty}}
                                @else Trống
                                @endif
                                <i class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">
                            {{-- {{$product_cart}} --}}
                                @isset($product_cart)
                                    @foreach($product_cart as $product)
                                        <div class="cart-item">
                                            <a class="cart-item-delete"
                                            href="{!! route('deletecart',$product['item']['id'])!!}"><i
                                                        class="fa fa-times"></i> </a>
                                            <div class="media">
                                                <a class="pull-left" href="#"><img
                                                            src="source/image/product/{{$product['item']['images']}}"
                                                            alt=""></a>
                                                <div class="media-body">
                                                    <span class="cart-item-title">{{$product['item']['name']}}</span>
                                                    <span class="cart-item-amount">{{$product['qty']}}
                                                        *<span>{{$product['item']['price']}}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endisset
                                {{-- {!!Session('cart')!!} --}}
                                <div class="cart-caption">
                                    <div class="cart-total text-right">Tổng tiền: <span
                                                class="cart-total-value">{{number_format(Session('cart')->totalPrice)}}
                                            đồng</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="dathang" class="beta-btn primary text-center">Đặt hàng <i
                                                    class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif
                <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{url('trangchu')}}">Trang chủ</a></li>
                    <li><a href="#">Điện thoại</a>
                        <ul class="sub-menu">
                            {{-- @foreach($mobile as $row)
                                <li><a href="{{route('category',$row->id)}}">{{$row->name}}</a></li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li><a href="#">Laptop</a>
                        <ul class="sub-menu">
                            {{-- @foreach($laptop as $row)
                                <li><a href="{{route('category',$row->id)}}">{{$row->name}}</a></li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li><a href="#">PC</a>
                        <ul class="sub-menu">
                            {{-- @foreach($pc as $row)
                                <li><a href="{{route('category',$row->id)}}">{{$row->name}}</a></li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">Giới thiệu</a></li>
                    <li><a href="{{route('contact')}}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->


{{--Slide--}}
{{--
<div class="rev-slider">
   <div class="fullwidthbanner-container">
       <div class="fullwidthbanner">
           <div class="bannercontainer" >
               <div class="banner" >
                   <ul>
                       <!-- THE FIRST SLIDE -->
                       @foreach($slide as $sli)
                           <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                               style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                               <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                    data-zoomstart="undefined" data-zoomend="undefined"
                                    data-rotationstart="undefined" data-rotationend="undefined"
                                    data-ease="undefined" data-bgpositionend="undefined"
                                    data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                    data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                    data-oheight="undefined">
                                   <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                        data-bgposition="center centernter" data-bgrepeat="no-repeat"
                                        data-lazydone="undefined" src="source/image/slide/{{$sli->image}}"
                                        data-src="source/image/slide/{{$sli->image}}"
                                        style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sli->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                   </div>
                               </div>

                           </li>
                       @endforeach

                   </ul>
               </div>
           </div>

           <div class="tp-bannertimer"></div>
       </div>
   </div>
   <!--slider-->
</div>--}}
