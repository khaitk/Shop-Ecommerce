@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h4>Thêm Danh Mục</h4></div>
                    <div class="card-block">
                        <div class="row">
                            <form action="{{route('add-product')}}"enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Tên Sản Phẩm : </label>
                                                        <input type="text" class="form-control" name="tensanpham" id="" aria-describedby="helpId" placeholder="Tên Sản Phẩm">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Hình ảnh</label>
                                                        <input type="file" class="form-control" name="images" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Đơn Vị : </label>
                                                        <select name="unit" id="" class="form-control" >
                                                            <option value="kg">Kg</option>
                                                            <option value="hộp">Hộp</option>
                                                            <option value="cái">Cái</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Số lượng : </label>
                                                        <input type="number" class="form-control" name="soluong" aria-describedby="helpId" placeholder="Số Lượng">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Giá : </label>
                                                        <input type="number" class="form-control" name="gia" id="" aria-describedby="helpId" placeholder=" ">
                                                    </div>
                                                    <div class="form-outline">
                                                        <label for="">Danh Mục Sản Phẩm: </label>
                                                        <select name="categories" class="form-control" id="">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-outline">
                                                                <label for="">Mô tả</label> <br>
                                                                <textarea name="description" class="compose-textarea" cols="80" rows="5"  id="description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success" id="">Thêm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
