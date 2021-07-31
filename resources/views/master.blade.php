<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Vegatable</title>

    <base href="{{asset('')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }
    </style>
    <!-- Css Styles -->
    <link rel="stylesheet" href="../assets/users/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/users/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>

<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> khaitkdev@gmail.com</li>
                            <li>Free Shipping for all Order of 99.000 đ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            @if(Illuminate\Support\Facades\Auth::check())
                                <div>{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="{{route('profile')}}">Profile</a></li>
                                    <li><a href="{{route('show-cart')}}">Cart</a></li>
                                    <li><a href="{{route('order-status')}}">Order Status</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            @else
                                <div><a href="/login"><i class="fa fa-user"></i> Login</a></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="../assets/usersimg/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="{{route('shop')}}">Shop</a></li>
{{--                        <li><a href="#">Pages</a>--}}
{{--                            <ul class="header__menu__dropdown">--}}
{{--                                <li><a href="">Shop Details</a></li>--}}
{{--                                <li><a href="">Shoping Cart</a></li>--}}
{{--                                <li><a href="{{route('checkout')}}">Check Out</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <?php
                            $total_items = 0;
                            use App\Http\Controllers\PageController;
                            if(Illuminate\Support\Facades\Auth::check()){
                                $total_items = PageController::cartItem();
                            }
                        ?>
                        <li><a href="/show-cart"><i class="fa fa-shopping-bag"></i><span>{{$total_items}}</span></a></li>
                    </ul>
                    <div class="header__cart__price">
                        items:
                        <?php
                            $total_price = 0;

                            if(Illuminate\Support\Facades\Auth::check()){
                                $total_price = PageController::totalPrice();
                            }
                        ?>
                        <span>${{$total_price}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
@yield('content')

@include('users.footer')

<script src="../assets/users/js/jquery-3.3.1.min.js"></script>
<script src="../assets/users/js/bootstrap.min.js"></script>
<script src="../assets/users/js/jquery.nice-select.min.js"></script>
<script src="../assets/users/js/jquery-ui.min.js"></script>
<script src="../assets/users/js/jquery.slicknav.js"></script>
<script src="../assets/users/js/mixitup.min.js"></script>
<script src="../assets/users/js/owl.carousel.min.js"></script>
<script src="../assets/users/js/main.js"></script>

</body>
</html>
