@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Thống kê</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <table class='table table-bordered'>
                                <center>
                                    <h2>{{$month}}-{{$year}}</h2>
                                    <a class='btn btn-xs btn-primary' href='admin/statistics?month={{date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))}}'>Previous Month</a>
                                    <a href='/admin/statistics' class='btn btn-xs btn-primary' data-month={{date('m')."' data-year='".date('Y')}}>Current Month</a>
                                    <a href='admin/statistics?month={{date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))}}' class='btn btn-xs btn-primary'>Next Month</a>
                                </center><br>
                            </table>
                        </div>

                    </div>
                    <div class="card-block">
                        <div class="row">

                            <table class="table">
                                <tr class="text-danger">
                                    <th colspan="2">Total : </th>
                                    <th colspan="2">{{number_format($totals)}} đ</th>
                                </tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Người dùng - SĐT</th>
                                    <th>Tổng Tiền</th>
                                    <td>Ngày thanh toán</td>
                                </tr>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($bills as $bill)
                                    @if($bill->status == 'Đã giao hàng')
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td class="">
                                                {{$bill->name}} <br>{{$bill->phone}}
                                            </td>
                                            <td>{{number_format($bill->total)}} đ</td>
                                            <td>
                                                {{$bill->updated_at}}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
