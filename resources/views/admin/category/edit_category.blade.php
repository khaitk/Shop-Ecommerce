@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h4>Sửa Danh Mục - {{$category->name}}</h4></div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('update-category', $category->id)}}"enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Tên Danh Mục : </label>
                                                        <input type="text" class="form-control" name="name_category" value="{{$category->name}}" aria-describedby="helpId" placeholder="Tên Danh Mục" ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">Hình ảnh</label>
                                                        <input type="file" class="form-control" name="images" id="">
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
