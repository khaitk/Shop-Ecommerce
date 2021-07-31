@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Hiển thị Danh Mục</h4>
                        <a href="{{route('add-category')}}" class="btn btn-outline-success float-right">Thêm Danh Mục</a>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <td>Hình ảnh</td>
                                    <th>Tên Danh Mục</th>
                                    <th>Thực hiện</th>
                                </tr>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td><img src="../images/category/{{$category->images}}" alt="" width="80px"></td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="/admin/category/edit/{{$category->id}}"><i class="fa fa-edit" style="font-size:24px;color:blue"></i></a>
                                            <a href="/admin/category/delete/{{$category->id}}"><i class="fa fa-close" style="font-size:24px;color:red"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            {{$categories->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
