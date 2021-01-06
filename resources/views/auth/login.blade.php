@extends('layout.master')

@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đăng nhập</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="index.html">Home</a> / <span>Đăng nhập</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<div class="row d-flex justify-content-center">

    <div class="col-6">
        <div id="content">
            <form action="{{url('login')}}" method="post" class="beta-form-checkout">
                {{csrf_field()}}
                <div class="row d-flex justify-content-center">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all()  as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="col-12">
                        <div class="alert alert-success">{{Session::get('success')}}</div>

                    </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="col-12">
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>

                    </div>
                    @endif
                    <div class="col-sm-6">
                        <h4>Đăng nhập</h4>
                        <div class="space20">&nbsp;</div>


                        <div class="form-block">
                            <label for="email">Email address*</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Password*</label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        {{-- <form> --}}
                            {{-- <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button> --}}
                          {{-- </form> --}}
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
</div>
@endsection
@push('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush
