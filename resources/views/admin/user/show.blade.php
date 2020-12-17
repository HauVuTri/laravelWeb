@extends('admin.layout.index')@section('content')    <!-- Page Content -->    <div id="page-wrapper">        <div class="container-fluid">            <div class="row">                <div class="col-lg-12">                    <h1 class="page-header">Category                        <small>List</small>                    </h1>                </div>                <!-- /.col-lg-12 -->                <table class="table table-striped table-bordered table-hover" id="dataTables-example">                    <thead>                    <tr align="center">                        <th>Tên người order</th>                        <th>Giới tính</th>                        <th>Ngày order</th>                        <th>Tổng tiền</th>                        <th>Hình thức thanh toán</th>                        <th>Ghi chú</th>                    </tr>                    </thead>                    <tbody>                    @foreach($history as $his)                        <tr class="odd gradeX" align="center">                            <td>{{$his->name_user_order }}</td>                            <td>{{$his->gender_user_order}}</td>                            <td>{{$his->date_order}}</td>                            <td>{{$his->total}}</td>                            <td>{{$his->payment}}</td>                            <td>{{$his->note}}</td>                        </tr>                    @endforeach                    </tbody>                </table>            </div>            <!-- /.row -->        </div>        <!-- /.container-fluid -->    </div>    <!-- /#page-wrapper -->@endsection