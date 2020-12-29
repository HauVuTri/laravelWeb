@extends('layout.master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{$data->products->name}}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('trangchu')}}">Home</a> / <span>Chi tiết sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">

                    <div class="row">
                        <div class="col-sm-4">

                            <img src="source/image/product/{{$data->products->images}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{$data->products->name}}</p>
                                <p class="single-item-price">
                                    <span class="flash-sale">{{number_format($data->products->price)}} đồng</span>
                                </p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>CPU: {{$data->cpu}}</p>
                                <p>Ram: {{$data->ram}}</p>
                                <p>Màn hình: {{$data->screen}}</p>
                                <p>Vga: {{$data->vga}}</p>
                                <p>Camera sau: {{$data->cam1}}</p>
                                <p>Camera trước: {{$data->cam2}}</p>
                                <p>Bộ nhớ: {{$data->storage}}</p>
                                <p>Bộ nhớ mở rộng: {{$data->exten_memory}}</p>
                                <p>Kết nối:{{$data->connect}}</p>
                                <p>Pin: {{$data->pin}}</p>
                                <p>Hệ điều hành: {{$data->os}}</p>
                                <p>Quà tặng kèm: {{$data->note}}</p>
                            </div>
                            <div class="space20">&nbsp;</div>

                            <p>Options:</p>
                            <div class="single  -item-options">
                                {{--<select class="wc-select" name="color">
                                    <option>Số lượng</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>--}}
                                <a class="add-to-cart" href="{{route('addtocart',$data->products->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Description</a></li>
                            <li><a href="#tab-reviews">Reviews (0)</a></li>
                        </ul>

                        <div class="panel" id="tab-description">
                             {!!$data->products->r_intro!!}
                        </div>
                        <div class="panel" id="tab-reviews">
                            {!!$data->products->review!!}
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>

            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
    </div>
    @endsection