@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h4>Sửa Sản phẩm - {{$product->name}}</h4></div>
                    <div class="card-block">
                        <div class="row">
                            <form action="{{route('update-product', $product->id)}}"enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Tên Sản Phẩm : </label>
                                                        <input type="text" class="form-control" name="tensanpham" value="{{$product->name}}" aria-describedby="helpId" placeholder="Tên Sản Phẩm">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Hình ảnh</label>
                                                        <input type="file" class="form-control" name="images" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Đơn Vị : </label>
                                                        <select name="unit" id="" class="form-control" >
                                                            @if($product->unit == 'kg')
                                                                <option value="{{$product->unit}}">{{$product->unit}}</option>
                                                                <option value="hộp">Hộp</option>
                                                                <option value="cái">Cái</option>
                                                            @elseif($product->unit == 'hộp')
                                                                <option value="{{$product->unit}}">{{$product->unit}}</option>
                                                                <option value="hộp">KG</option>
                                                                <option value="cái">Cái</option>
                                                            @elseif($product->unit == 'cái')
                                                                <option value="{{$product->unit}}">{{$product->unit}}</option>
                                                                <option value="hộp">KG</option>
                                                                <option value="hộp">Hộp</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Số lượng : </label>
                                                        <input type="number" class="form-control" name="soluong" value="{{$product->quantity}}" aria-describedby="helpId" placeholder="Số Lượng">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Giá : </label>
                                                        <input type="number" class="form-control" name="gia" id="" value="{{($product->original_price)}}" aria-describedby="helpId" placeholder=" ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Giảm giá : </label>
                                                        <input type="number" class="form-control" name="giamgia" id="" value="{{($product->promotion_price)}}" aria-describedby="helpId" placeholder=" ">
                                                    </div>
                                                    <div class="form-outline">
                                                        <label for="">Danh Mục Sản Phẩm: </label>
                                                        <select name="categories" class="form-control" id="">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="">Chất Lượng : </label>
                                                        <select name="new_product" id="" class="form-control" >
                                                            @if($product->new_product == 0)
                                                                <option value="{{$product->new_product}}">Sản Phẩm mới</option>
                                                                <option value="1">Sản Phẩm Cũ</option>
                                                            @else
                                                                <option value="{{$product->new_product}}">Sản Phẩm Cũ</option>
                                                                <option value="0">Sản Phẩm Mới</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-outline">
                                                            <label for="">Mô tả</label> <br>
                                                            <textarea name="description" class="compose-textarea" cols="80" rows="5"  id="description">{{$product->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success" id="">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
