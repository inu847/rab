<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/plugins/images/favicon.png')}}">
    <title>@yield('title') | {{generalSetting()->site_title1}}</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="{{asset('assets/plugins/components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href='{{asset('assets/plugins/components/fullcalendar/fullcalendar.css')}}' rel='stylesheet'>
    <!-- ===== Animation CSS ===== -->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="{{asset('assets/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('assets/plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
<style>
    .text-black{
        color: black;
    }
    .float-left{
        float: left;
    }
    .float-right{
        float: right;
    }
</style>
@yield('style')

<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        @include('layouts.navbar')
        <!-- ===== Top-Navigation-End ===== -->

        <!-- ===== Left-Sidebar ===== -->
        @include('layouts.sidebar')
        <!-- ===== Left-Sidebar-End ===== -->

        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif
                
                @yield('content')
                @include('layouts.rightbar')
            </div>
            <!-- ===== Page-Container-End ===== -->
            <footer class="footer t-a-c">
                © {{ now()->format('Y') }} {{generalSetting()->site_title1}}
            </footer>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="{{asset('assets/plugins/components/jquery/dist/jquery.min.js')}}"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="{{asset('assets/plugins/components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src='{{asset('assets/plugins/components/moment/moment.js')}}'></script>
    <script src='{{asset('assets/plugins/components/fullcalendar/fullcalendar.js')}}'></script>
    <script src="{{asset('assets/js/db2.js')}}"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="{{asset('assets/plugins/components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{ asset('assets/plugins/components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/plugins/components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('js')

    <script>
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
</body>

</html>
