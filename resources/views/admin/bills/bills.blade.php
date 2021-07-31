@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h4>Hóa đơn</h4></div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <th>Name - Email - Phone</th>
                                        <th>Address</th>
                                        <th>Total</th>
                                        <th>Process</th>
                                        <th>Action</th>
                                        <th>Print</th>
                                    </tr>
                                    @foreach($bills as $bill)
                                        <tr>
                                            <td>{{$bill->name}} <br> {{$bill->email}} <br> {{$bill->phone}}</td>
                                            <td>{{$bill->address}}</td>
                                            <td>{{number_format($bill->total)}} đ</td>
                                            <td>{{$bill->status}}</td>
                                            <td>
                                                @if($bill->status == 'Đang xử lý')
                                                    <a href="/admin/processing/{{$bill->id}}" class="btn btn-outline-danger">Đang xử lý</a>
                                                @elseif($bill->status == 'Đang vận chuyển')
                                                    <a href="/admin/shipping/{{$bill->id}}" class="btn btn-outline-primary">Đang vận chuyển</a>
                                                @elseif($bill->status == 'Đã giao hàng')
                                                    <button class="btn btn-success">Đã giao hàng</button>
                                                @endif
                                            </td>
                                            <td><a href="{{route('print', $bill->id)}}" class="btn btn-dark">Print</a></td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            {{$bills->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
