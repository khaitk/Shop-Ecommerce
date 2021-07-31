@extends('admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Hiển Thị Người Dùng</h4>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="/admin/users/delete/{{$user->id}}"><i class="fa fa-close" style="font-size:24px;color:red"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
