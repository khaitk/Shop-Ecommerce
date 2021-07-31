@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Hiển thị sản phẩm</h4>
                        <a href="{{route('add-product')}}" class="btn btn-outline-success float-right">Thêm sản phẩm</a>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá - Giá Sale</th>
                                    <th>Loại Sản Phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thực hiện</th>
                                </tr>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="../images/products/{{$product->images}}" alt="" width="80px"></td>
                                        <td><h6>{{$product->name}}</h6></td>
                                        <td>{{number_format($product->original_price)}} đ</td>
                                        <td>{{$product->name_categories}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>
                                            <a href="/admin/product/edit/{{$product->id}}"><i class="fa fa-edit" style="font-size:24px;color:blue"></i></a>
                                            <a href="/admin/product/delete/{{$product->id}}"><i class="fa fa-close" style="font-size:24px;color:red"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
