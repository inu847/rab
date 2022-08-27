<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/plugins/images/favicon.png') }}">
    <title>Cubic Admin Template</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="{{ asset('assets/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/components/custom-select/custom-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/components/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <!-- ===== Animation CSS ===== -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="{{ asset('assets/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="../plugins/images/logo.png" alt="home" />
                        </b>
                        <span>
                            <img src="../plugins/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="icon-magnifier"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-speech"></i>
                            <span class="badge badge-xs badge-danger">6</span>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/1.jpg" alt="user" class="img-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/2.jpg" alt="user" class="img-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/3.jpg" alt="user" class="img-circle"><span class="profile-status away pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/4.jpg" alt="user" class="img-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-calender"></i>
                            <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="right-side-toggle">
                        <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar" role="navigation">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">
                            <img src="../plugins/images/users/hanna.jpg" alt="user-img" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Hanna Gover</a></p>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard <span class="label label-rounded label-info pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="index.html">Modern Version</a> </li>
                                <li> <a href="index2.html">Clean Version</a> </li>
                                <li> <a href="index3.html">Analytical Version</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-basket fa-fw"></i> <span class="hide-menu"> eCommerce </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="index4.html">Dashboard</a> </li>
                                <li> <a href="products.html">Products</a> </li>
                                <li> <a href="product-detail.html">Product Detail</a> </li>
                                <li> <a href="product-edit.html">Product Edit</a> </li>
                                <li> <a href="product-orders.html">Product Orders</a> </li>
                                <li> <a href="product-cart.html">Product Cart</a> </li>
                                <li> <a href="product-checkout.html">Product Checkout</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Inbox <span class="label label-rounded label-primary pull-right">5</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="inbox.html">Mail Box</a> </li>
                                <li> <a href="inbox-detail.html">Mail Details</a> </li>
                                <li> <a href="compose.html">Compose Mail</a> </li>
                                <li> <a href="contact.html">Contact</a> </li>
                                <li> <a href="contact-detail.html">Contact Detail</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-equalizer fa-fw"></i> <span class="hide-menu"> UI Elements<span class="label label-rounded label-danger pull-right">18</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="panels-wells.html">Panels and Wells</a></li>
                                <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                                <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="progressbars.html">Progress Bars</a></li>
                                <li><a href="notification.html">Notifications</a></li>
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="user-cards.html">User Cards</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                                <li><a href="range-slider.html">Range Slider</a></li>
                                <li><a href="ribbons.html">Ribbons</a></li>
                                <li><a href="steps.html">Steps</a></li>
                                <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                                <li><a href="session-timeout.html">Session Timeout</a></li>
                                <li><a href="bootstrap.html">Bootstrap UI</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Forms </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="icheck-control.html">Icheck Control</a></li>
                                <li><a href="form-advanced.html">Form Addons</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-pickers.html">Form-pickers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-grid fa-fw"></i> <span class="hide-menu"> Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="basic-table.html">Basic Tables</a></li>
                                <li><a href="table-layouts.html">Table Layouts</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                                <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                <li><a href="editable-tables.html">Editable Tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-pie-chart fa-fw"></i> <span class="hide-menu"> Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="morris-chart.html">Morris Chart</a></li>
                                <li><a href="peity-chart.html">Peity Charts</a></li>
                                <li><a href="knob-chart.html">Knob Charts</a></li>
                                <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html" aria-expanded="false"><i class="icon-settings fa-fw"></i> <span class="hide-menu"> Widgets </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-bulb fa-fw"></i> <span class="hide-menu"> Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="simple-line.html">Simple Line</a> </li>
                                <li> <a href="fontawesome.html">Fontawesome</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-location-pin fa-fw"></i> <span class="hide-menu"> Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="map-google.html">Google Map</a> </li>
                                <li> <a href="map-vector.html">Vector Map</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-docs fa-fw"></i> <span class="hide-menu"> Pages<span class="label label-rounded label-success pull-right">18</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="javascript:void(0);">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li> <a href="400.html">400</a> </li>
                                        <li> <a href="403.html">403</a> </li>
                                        <li> <a href="404.html">404</a> </li>
                                        <li> <a href="500.html">404</a> </li>
                                        <li> <a href="503.html">404</a> </li>
                                    </ul>
                                </li>
                                <li><a href="starter-page.html">Starter Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="search-result.html">Search Result</a></li>
                                <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="recoverpw.html">Recover Password</a></li>
                                <li><a href="animation.html">Animations</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html" aria-expanded="false"><i class="icon-calender fa-fw"></i> <span class="hide-menu"> Calendar</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="p-30">
                    <span class="hide-menu">
                        <a href="javascript:void(0);" target="_blank" class="btn btn-success">Buy Cubic Admin</a>
                        <a href="javascript:void(0);" target="_blank" class="btn btn-default m-t-15">Check Documentation</a>
                    </span>
                </div>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Select 2</h3>
                            <p class="text-muted m-b-30"> Select2 for custom search and select</p>
                            <h5 class="m-t-30">Single select2</h5>
                            <select class="form-control select2">
                                <option>Select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                            <h5 class="m-t-20">Multiple select boxes</h5>
                            <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Bootstrap Select boxes</h3>
                            <p class="text-muted m-b-10">Just add bootstrap-select-min.js and same css & add class <code>.selectpicker</code></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="m-t-30 m-b-10">Select box</h5>
                                    <select class="selectpicker" data-style="form-control">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="m-t-30 m-b-10">Select boxes with optgroups</h5>
                                    <select class="selectpicker" data-style="form-control">
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="m-t-30">Multiple select boxes</h5>
                                    <select class="selectpicker" multiple data-style="form-control">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                            <h5 class="m-t-30">With colored Button Classes</h5>
                            <div class="row">
                                <div class="col-sm-4">
                                    <select class="selectpicker m-b-20 m-r-10" data-style="btn-primary btn-outline">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="selectpicker m-b-20 m-r-10" data-style="btn-info btn-outline">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="selectpicker m-b-20 m-r-10" data-style="btn-warning btn-outline">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="selectpicker m-b-20 m-r-10" data-style="btn-danger btn-outline">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="selectpicker m-b-20 m-r-10" data-style="btn-success btn-outline">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="selectpicker m-b-20" data-style="btn-default btn-outline">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Switchery</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="box-title">Basic</h4>
                                    <p class="text-muted  font-13"> add the following line <code> class="js-switch" data-color="#13dafe"</code> to your input element. </p>
                                    <div class="switchery-demo m-b-30">
                                        <input type="checkbox" checked class="js-switch" data-color="#13dafe" />
                                        <input type="checkbox" checked class="js-switch" data-color="#f96262" />
                                        <input type="checkbox" checked class="js-switch" data-color="#99d683" />
                                        <input type="checkbox" checked class="js-switch" data-color="#ffca4a" />
                                        <input type="checkbox" checked class="js-switch" data-color="#6164c1" />
                                        <input type="checkbox" checked class="js-switch" data-color="#3d3b3b" /> </div>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="box-title">Sizes</h4>
                                    <p class="text-muted font-13"> You can add <code> data-size="small",data-size="large"</code> to your input element for different sizes. </p>
                                    <div class="m-b-30">
                                        <input type="checkbox" checked class="js-switch" data-color="#f96262" data-size="small" />
                                        <input type="checkbox" checked class="js-switch" data-color="#99d683" />
                                        <input type="checkbox" checked class="js-switch" data-color="#ffca4a" data-size="large" /> </div>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="box-title">Secondary color</h4>
                                    <p class="text-muted font-13"> You can apply <code> data-color="@color" data-secondary-color="@color"</code> to your input element to both color. </p>
                                    <div class="m-b-30">
                                        <input type="checkbox" class="js-switch" data-color="#99d683" data-secondary-color="#f96262" />
                                        <input type="checkbox" class="js-switch" data-color="#13dafe" data-secondary-color="#6164c1" /> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Input Tags</h3>
                            <p class="text-muted">Add <code>data-role="tagsinput"</code> to your input field & its automatically change it to a tags input.</p>
                            <div class="tags-default">
                                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags" /> </div>
                            <h3 class="box-title m-t-30 m-b-0">Select Tags</h3>
                            <p class="text-muted">You can also use <code>select multiple</code> to your input field.</p>
                            <select multiple data-role="tagsinput">
                                <option value="Amsterdam">Amsterdam</option>
                                <option value="Washington">Washington</option>
                                <option value="Sydney">Sydney</option>
                            </select>
                            <h3 class="box-title m-t-30 m-b-0">Input Group Tags</h3>
                            <p class="text-muted">You can also use group tag <code>data-role="tagsinput"</code> to your input field.</p>
                            <div class="input-group m-b-30"> <span class="input-group-addon">Tags</span>
                                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> </div>
                            <div class="input-group">
                                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> <span class="input-group-addon">Tags</span> </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="m-b-0 box-title">Bootstrap TouchSpin</h3>
                            <p class="text-muted m-b-40"> Use the <code> data-plugin="touchSpin" </code> to create a Bootstrap style spinner.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <form class="p-r-20">
                                        <div class="form-group">
                                            <label class="control-label">Vertical Touchspin</label>
                                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline" value="" name="vertical-spin"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Postfix</label>
                                            <input id="tch1" type="text" value="55" name="tch1" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                        <div class="form-group m-b-0">
                                            <label class="control-label">Prefix</label>
                                            <input id="tch2" type="text" value="0" name="tch2" class=" form-control" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form>
                                        <div class="form-group">
                                            <label class="control-label">Init </label>
                                            <input id="tch3" type="text" value="" name="tch3" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Value set 30 </label>
                                            <input id="tch3_22" type="text" value="30" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                        <div class="form-group m-b-0">
                                            <label class="control-label">Button group</label>
                                            <div class="input-group">
                                                <input id="tch5" type="text" class="form-control" name="tch5" value="50" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li> <a href="#">Action</a> </li>
                                                        <li> <a href="#">Another action</a> </li>
                                                        <li> <a href="#">Something else here</a> </li>
                                                        <li class="divider"></li>
                                                        <li> <a href="#">Separated link</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                        <h3 class="box-title m-b-0">Checkbox Square</h3>
                                        <p class="text-muted font-13 m-b-30"> Bootstrap brand colors </p>
                                        <div class="checkbox">
                                            <input id="checkbox0" type="checkbox">
                                            <label for="checkbox0"> Default </label>
                                        </div>
                                        <div class="checkbox checkbox-custom">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11"> Custom </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2"> Primary </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3"> Success </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4"> Info </label>
                                        </div>
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox" checked>
                                            <label for="checkbox5"> Warning </label>
                                        </div>
                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6"> Danger </label>
                                        </div>
                                        <div class="checkbox checkbox-purple">
                                            <input id="checkbox6a" type="checkbox">
                                            <label for="checkbox6a"> Purple </label>
                                        </div>
                                        <div class="checkbox checkbox-inverse">
                                            <input id="checkbox6c" type="checkbox">
                                            <label for="checkbox6c"> Inverse </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                        <h3 class="box-title m-b-0">Checkbox Circle</h3>
                                        <p class="text-muted font-13 m-b-30"> Add simple <code>checkbox-circle</code> class </p>
                                        <div class="checkbox checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7"> Simply Rounded </label>
                                        </div>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8"> Info </label>
                                        </div>
                                        <div class="checkbox checkbox-primary checkbox-circle">
                                            <input id="checkbox-9" type="checkbox">
                                            <label for="checkbox-9"> Primary </label>
                                        </div>
                                        <div class="checkbox checkbox-success checkbox-circle">
                                            <input id="checkbox-10" type="checkbox" checked>
                                            <label for="checkbox-10"> Success </label>
                                        </div>
                                        <div class="checkbox checkbox-warning checkbox-circle">
                                            <input id="checkbox-11" type="checkbox">
                                            <label for="checkbox-11"> Warning </label>
                                        </div>
                                        <div class="checkbox checkbox-danger checkbox-circle">
                                            <input id="checkbox-12" type="checkbox" checked>
                                            <label for="checkbox-12"> Danger </label>
                                        </div>
                                        <div class="checkbox checkbox-purple checkbox-circle">
                                            <input id="checkbox-13" type="checkbox" checked>
                                            <label for="checkbox-13"> Purple </label>
                                        </div>
                                        <div class="checkbox checkbox-inverse checkbox-circle">
                                            <input id="checkbox-15" type="checkbox" checked>
                                            <label for="checkbox-15"> Inverse </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-xs-12">
                                        <h3 class="box-title m-b-0">Checkbox Disable</h3>
                                        <p class="text-muted font-13 m-b-30"> Disable state </p>
                                        <div class="checkbox">
                                            <input id="checkbox9" type="checkbox" disabled>
                                            <label for="checkbox9"> Can't check this </label>
                                        </div>
                                        <div class="checkbox checkbox-warning checkbox-circle">
                                            <input id="checkbox110" type="checkbox" disabled checked>
                                            <label for="checkbox110"> And this </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox12" type="checkbox" disabled checked>
                                            <label for="checkbox12"> Can't check this </label>
                                        </div>
                                        <div class="checkbox checkbox-purple checkbox-circle">
                                            <input id="checkbox14" type="checkbox" disabled checked>
                                            <label for="checkbox14"> And this </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                        <h3 class="box-title m-b-0">Radio Buttons</h3>
                                        <p class="text-muted font-13 m-b-30"> With bootstrap colors </p>
                                        <div class="radio">
                                            <input type="radio" name="radio" id="radio1" value="option1" checked>
                                            <label for="radio1"> Default </label>
                                        </div>
                                        <div class="radio radio-custom">
                                            <input type="radio" name="radio" id="radio2" value="option2">
                                            <label for="radio2"> Custom </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <input type="radio" name="radio" id="radio3" value="option3">
                                            <label for="radio3"> Primary </label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="radio" name="radio" id="radio4" value="option4">
                                            <label for="radio4"> Success </label>
                                        </div>
                                        <div class="radio radio-info">
                                            <input type="radio" name="radio" id="radio5" value="option5">
                                            <label for="radio5"> Info </label>
                                        </div>
                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio" id="radio6" value="option6">
                                            <label for="radio6"> Danger </label>
                                        </div>
                                        <div class="radio radio-warning">
                                            <input type="radio" name="radio" id="radio7" value="option7">
                                            <label for="radio7"> Warning </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" name="radio" id="radio8" value="option8">
                                            <label for="radio8"> Purple </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                        <h3 class="box-title m-b-0">Radio Clickable</h3>
                                        <p class="text-muted font-13 m-b-30"> All buttons clickable </p>
                                        <div class="radio">
                                            <input type="radio" name="radio1" id="radio11" value="option1" checked>
                                            <label for="radio11"> Default </label>
                                        </div>
                                        <div class="radio radio-custom">
                                            <input type="radio" name="radio2" id="radio12" value="option2">
                                            <label for="radio12"> Custom </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <input type="radio" name="radio3" id="radio13" value="option3">
                                            <label for="radio13"> Primary </label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="radio" name="radio4" id="radio14" value="option4" checked>
                                            <label for="radio14"> Success </label>
                                        </div>
                                        <div class="radio radio-info">
                                            <input type="radio" name="radio5" id="radio15" value="option5" checked>
                                            <label for="radio15"> Info </label>
                                        </div>
                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio6" id="radio16" value="option6">
                                            <label for="radio16"> Danger </label>
                                        </div>
                                        <div class="radio radio-warning">
                                            <input type="radio" name="radio7" id="radio17" value="option7" checked>
                                            <label for="radio17"> Warning </label>
                                        </div>
                                        <div class="radio radio-purple">
                                            <input type="radio" name="radio8" id="radio18" value="option8">
                                            <label for="radio18"> Purple </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                        <h3 class="box-title m-b-0">Radio Disable</h3>
                                        <p class="text-muted font-13 m-b-30"> Disable state </p>
                                        <div class="radio">
                                            <input type="radio" name="radio21" id="radio21" value="option1" disabled checked>
                                            <label for="radio21"> Default </label>
                                        </div>
                                        <div class="radio radio-custom">
                                            <input type="radio" name="radio22" disabled id="radio22" value="option2">
                                            <label for="radio22"> Custom </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <input type="radio" name="radio23" disabled id="radio23" value="option3">
                                            <label for="radio23"> Primary </label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="radio" name="radio24" disabled id="radio24" value="option4" checked>
                                            <label for="radio24"> Success </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                    <!-- /.row -->
                    <!-- ===== Right-Sidebar ===== -->
                    <div class="right-sidebar">
                        <div class="slimscrollright">
                            <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
                            <div class="r-panel-body">
                                <ul class="hidden-xs">
                                    <li><b>Layout Options</b></li>
                                    <li>
                                        <div class="checkbox checkbox-danger">
                                            <input id="headcheck" type="checkbox" class="fxhdr">
                                            <label for="headcheck"> Fix Header </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-warning">
                                            <input id="sidecheck" type="checkbox" class="fxsdr">
                                            <label for="sidecheck"> Fix Sidebar </label>
                                        </div>
                                    </li>
                                </ul>
                                <ul id="themecolors" class="m-t-20">
                                    <li><b>With Light sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                    <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                    <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                    <li class="db"><b>With Dark sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                    <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                    <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                                </ul>
                                <ul class="m-t-20 chatonline">
                                    <li><b>Chat option</b></li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ===== Right-Sidebar-End ===== -->
                </div>
                <!-- /.container-fluid -->
                <footer class="footer t-a-c">
                    © 2017 Cubic Admin
                </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        
        <script src="{{ asset('assets/plugins/components/switchery/dist/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/components/custom-select/custom-select.min.js" type="text/javascript') }}"></script>
        <script src="{{ asset('assets/plugins/components/bootstrap-select/bootstrap-select.min.js" type="text/javascript') }}"></script>
        <script src="{{ asset('assets/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript') }}"></script>
        <script>
        jQuery(document).ready(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });

        });
        </script>
        <!--Style Switcher -->
        <script src="{{ asset('assets/plugins/components/styleswitcher/jQuery.style.switcher.js') }}"></script>
        <!--Style Switcher -->
        <script src="{{ asset('assets/plugins/components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>
