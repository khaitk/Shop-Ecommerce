@extends('admin')
@section('content')
    <div class="row">
        <!-- task, page, download counter  start -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-purple">{{number_format($bills)}} đ</h4>
                            <h6 class="text-muted m-b-0">Tổng Tiền Tất Cả</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="fa fa-bar-chart f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-purple">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0"></p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="fa fa-line-chart text-white f-16"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-green">{{$categoríes}}</h4>
                            <h6 class="text-muted m-b-0">Page Views</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="fa fa-file-text-o f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-green">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0"></p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="fa fa-line-chart text-white f-16"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-red">{{$products}}</h4>
                            <h6 class="text-muted m-b-0">Task Completed</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="fa fa-calendar-check-o f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-red">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0"></p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="fa fa-line-chart text-white f-16"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-blue">{{$users}}</h4>
                            <h6 class="text-muted m-b-0">Downloads</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="fa fa-hand-o-down f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-blue">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0">% change</p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="fa fa-line-chart text-white f-16"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Người dùng hoạt động</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-trash close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Gmail</th>
                                <th>Ngày tạo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_users as $list_user)
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon fa fa-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <div class="d-inline-block">
                                                <h6>{{$list_user->name}}</h6>
                                                <p class="text-muted m-b-0">{{$list_user->phone}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$list_user->email}}</td>
                                    <td>{{$list_user->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-right m-r-20">
                            <a href="admin/show-users" class=" b-b-primary text-primary">View all Users</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5>Products</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-trash close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    @foreach($product as $pr)
                        <div class="align-middle m-b-30">
                            <img src="../images/products/{{$pr->images}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                            <div class="d-inline-block">
                                <h6>{{$pr->name}}</h6>
                                <p class="text-muted m-b-0">{{$pr->status}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center">
                        <a href="/admin/bills" class="b-b-primary text-primary">View all</a>
                    </div>
                </div>
            </div>
        </div>
        <!--  project and team member end -->
    </div>

@endsection
