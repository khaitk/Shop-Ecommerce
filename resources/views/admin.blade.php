<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Shop Vegetable</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <base href="{{asset('')}}">

    <link rel="icon" href="../assets/admin/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/admin/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/admin/icon/font-awesome/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/jquery.mCustomScrollbar.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/style.css">
    <link rel="stylesheet" href="../assets/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('admin.menu')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('admin.nav')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                @yield('content')
                            </div>
                            <div id="styleSelector"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Required Jquery -->
<script type="text/javascript" src="../assets/admin/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/admin/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="../assets/admin/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../assets/admin/js/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="../assets/admin/pages/widget/excanvas.js "></script>
<!-- waves js -->

<!-- jquery slimscroll js -->
<script type="text/javascript" src="../assets/admin/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="../assets/admin/js/modernizr/modernizr.js "></script>
<!-- slimscroll js -->
<script type="text/javascript" src="../assets/admin/js/SmoothScroll.js"></script>
<script src="../assets/admin/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Chart js -->
<script type="text/javascript" src="../assets/admin/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="../assets/admin/js/pcoded.min.js"></script>
<script src="../assets/admin/js/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript" src="../assets/admin/js/scripttk.js "></script>
<script src="../assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function (){
        $('.compose-textarea').summernote();
    });
</script>
</body>

</html>
