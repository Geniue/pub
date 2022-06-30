<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{env('APP_NAME')}} - @yield('Title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <link href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/lightpick/lightpick.css')}}" rel="stylesheet" />

    <!-- App css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
	 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    @yield('page_level_style')
<style>
    .upload-btn-img {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }

    .upload-btn-img input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        height: 100%;
    }

    .img-thumbnail,.image_one,.image_two,.image_three {
        opacity: 1;
        transition: opacity .25s ease-in-out;
        -moz-transition: opacity .25s ease-in-out;
        -webkit-transition: opacity .25s ease-in-out;
        cursor: pointer;
        width: 100%;
        object-fit: cover;
    }
    .upload-btn-img:hover .img-thumbnail {
        opacity: 0.7;
        cursor: pointer;
    }

    .upload-btn-img:hover input {
        cursor: pointer;
    }

</style>
	</head>

<body>

<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{route('index')}}" class="logo">
                    <span>
                        <img src="{{asset('backend/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
            <span>
                        <img src="{{asset('backend/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{asset('backend/images/logo-dark.png')}}" alt="logo-large" class="logo-lg">
                    </span>
        </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    @include('dashboard.inc.navbar')
    <!-- end navbar-->
</div>

<!-- Left Sidenav -->
@include('dashboard.inc.sidebar')
<!-- end left-sidenav-->

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
       @yield('content')

        <footer class="footer text-center text-sm-left">
            &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer><!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->




<!-- jQuery  -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/metismenu.min.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/feather.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-ui.min.js')}}"></script>

<script src="{{asset('backend/plugins/moment/moment.js')}}"></script>
<script src="{{asset('backend/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.canvaswrapper.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.colorhelpers.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.flot.saturated.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.flot.browser.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.flot.drawSeries.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.flot.uiConstants.js')}}"></script>
<script src="{{asset('backend/plugins/flot-chart/jquery.flot-dataType.js')}}"></script>
<script src="{{asset('backend/pages/jquery.crm_dashboard.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('backend/js/app.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script> 
    const showThumbnail = (btnHasClicked) => {
        const imgTag = btnHasClicked.parentNode.querySelector('.img-thumbnail');
        const file = btnHasClicked.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            imgTag.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imgTag.src = "<?php echo asset('backend/images/image-upload.gif'); ?>";
            
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
<script>
    // $('#datatable').DataTable();
</script>
@yield('page_level_script')
</body>

</html>
