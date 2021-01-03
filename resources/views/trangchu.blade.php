@extends('layout.master')
@push('styles')
    <link href="{{ asset('css/trangchu.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div class="banner">
                        <ul>
                            <!-- THE FIRST SLIDE -->
                            @foreach ($slide as $sli)
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                        data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                        data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                        data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                        data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                        data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                            data-bgposition="center center" data-bgrepeat="no-repeat"
                                            data-lazydone="undefined" src="source/image/slide/{{ $sli->name }}"
                                            data-src="source/image/slide/{{ $sli->name }}"
                                            style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{ $sli->name }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
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
    </div>
    <div class="w-80 d-flex justify-content-center main-content-page">
        <div class="container w-100 p-0">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    {{-- <div class="space60">&nbsp;</div> --}}
                    <div class="row m-0 ">
                        <div class="col-sm-12" style="border-radius: 4px;">
                            <div class="beta-products-list mb-2 mt-3">
                                <div class="navigat">
                                    <div class="title">
                                        <h2 class="mt-0">Điện thoại</h2>

                                    </div>
                                </div>
                                @isset($mobile)
                                    <div class="beta-products-details">
                                        <p class="pull-left">Tìm thấy {{ count($mobile) }} sản phẩm</p>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="row">
                                        @foreach ($mobile as $mob)
                                            <div class="col-sm-3 mt-3">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="{{ route('detailproduct', $mob->id) }}"><img
                                                                src="source/image/product/{{ $mob->images }}" alt=""
                                                                style="height: 250px;"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{ $mob->name }}</p>
                                                        <p class="single-item-price">
                                                            <span>{{ number_format($mob->price) }} đồng</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left"
                                                            href="{{ route('addtocart', $mob->id) }}"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary"
                                                            href="{{ route('detailproduct', $mob->id) }}">Chi tiết <i
                                                                class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div
                                        class="paginate-div d-flex justify-content-center align-item-center mt-3 ">
                                        {{ $mobile->links() }}

                                    </div>

                                @endisset
                            </div> <!-- .beta-products-list -->

                            {{-- <div class="space50">&nbsp;</div>
                            --}}

                            <div class="beta-products-list mb-2">
                                <div class="navigat">
                                    <h2 class="mt-0">Laptop</h2>
                                </div>
                                @isset($laptop)
                                    <div class="beta-products-details">
                                        <p class="pull-left">Tìm thấy {{ count($laptop) }} sản phẩm</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row">
                                        @foreach ($laptop as $lap)
                                            <div class="col-sm-3 mt-3">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="{{ route('detailproduct', $lap->id) }}"><img
                                                                src="source/image/product/{{ $lap->images }}" alt=""
                                                                height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{ $lap->name }}</p>
                                                        <p class="single-item-price">
                                                            <span>{{ number_format($lap->price) }} đồng</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left"
                                                            href="{{ route('addtocart', $lap->id) }}"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary"
                                                            href="{{ route('detailproduct', $lap->id) }}">Chi tiết <i
                                                                class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                    <div class="paginate-div d-flex justify-content-center align-item-center mt-3">
                                        {{ $laptop->links() }}
                                    </div>

                                @endisset
                            </div>
                            {{-- <div class="space40">&nbsp;</div>
                            --}}
                            <div class="beta-products-list mb-2">
                                <div class="navigat">
                                    <h2 class="mt-0">PC</h2>
                                </div>
                                @isset($pc)
                                    <div class="beta-products-details">
                                        <p class="pull-left">Tìm thấy {{ count($pc) }} sản phẩm</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row">
                                        @foreach ($pc as $lap)
                                            <div class="col-sm-3 mt-3">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="{{ route('detailproduct', $lap->id) }}"><img
                                                                src="source/image/product/{{ $lap->images }}" alt=""
                                                                height="250px"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{ $lap->name }}</p>
                                                        <p class="single-item-price">
                                                            <span>{{ number_format($lap->price) }} đồng</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left"
                                                            href="{{ route('addtocart', $lap->id) }}"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary"
                                                            href="{{ route('detailproduct', $lap->id) }}">Chi tiết <i
                                                                class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="paginate-div d-flex justify-content-center align-item-center mt-3">
                                        {{ $pc->links() }}
                                    </div>

                                @endisset

                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
    </div>
@endsection
