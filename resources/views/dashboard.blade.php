@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
{{-- <div class="row colorbox-group-widget">
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-primary">
                <div class="media-body">
                    <h3 class="info-count">{{$order}} <span class="pull-right"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span></h3>
                    <p class="info-text font-12">Order</p>
                    <p class="info-ot font-15">{{ now()->format('F') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-success">
                <div class="media-body">
                    <h3 class="info-count">{{$orderItem}} <span class="pull-right"><i class="mdi mdi-comment-text-outline"></i></span></h3>
                    <p class="info-text font-12">Order Item</p>
                    <p class="info-ot font-15">{{ now()->format('F') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-danger">
                <div class="media-body">
                    <h3 class="info-count">Rp.{{number_format($profit)}} <span class="pull-right"><i class="mdi mdi-coin"></i></span></h3>
                    <p class="info-text font-12">Profit</p>
                    <p class="info-ot font-15">{{ now()->format('F') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-warning">
                <div class="media-body">
                    <h3 class="info-count">Rp.{{number_format($revenue)}} <span class="pull-right"><i class="mdi mdi-coin"></i></span></h3>
                    <p class="info-text font-12">Revenue</p>
                    <p class="info-ot font-15">{{ now()->format('F') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='white-box'>
    <div class="row">
        <div class="col-sm-6">
            <h4 class="box-title">Sales Profit</h4>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
    <table id="noPadding" cellspacing="0" width="100%" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Quantity Order</th>
                <th>Sales</th>
                <th>Profit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profits as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->product->product_name }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>Rp.{{ number_format($item->price) }}</td>
                    <td>Rp.{{ number_format($item->profit) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
{{-- <div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="white-box sd-widget m-b-0 b-b-0">
            <a href="javascript:void(0);" class="pull-right"><i class="icon-settings"></i></a>
            <h4 class="box-title">Sales Difference</h4>
        </div>
        <div class="white-box p-0 b-t-0">
            <div class="ct-sd-chart chart-pos"></div>
            <ul class="list-inline t-a-c">
                <li>
                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-danger"></i>March</h6>
                </li>
                <li>
                    <h6 class="font-15"><i class="fa fa-circle m-r-5 text-primary"></i>February</h6>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="white-box sc-widget">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="box-title">Sales Chart</h4>
                </div>
                <div class="col-sm-6">
                    <select class="custom-select">
                        <option selected>March 2017</option>
                        <option value="1">April 2017</option>
                        <option value="2">May 2017</option>
                        <option value="3">June 2017</option>
                    </select>
                </div>
            </div>
            <div class="chartist-sales-chart chart-pos m-t-40"></div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="white-box ie-widget m-b-0 b-b-0">
            <h4 class="box-title">Item Earnings</h4>
        </div>
        <div class="white-box p-0 b-t-0">
            <div class="ct-ie-chart chart-pos"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box user-table">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="box-title">Table User Data</h4>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="javascript:void(0);" class="text-link">{{$item->username}}</a></td>
                                <td><span class="label label-success">{{$item->role->name}}</span></td>
                                <td>
                                    <select class="custom-select">
                                        <option value="1">Modulator</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Staff</option>
                                        <option value="4">User</option>
                                        <option value="5">General</option>
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination">
                <li class="disabled"> <a href="#">1</a> </li>
                <li class="active"> <a href="#">2</a> </li>
                <li> <a href="#">3</a> </li>
                <li> <a href="#">4</a> </li>
                <li> <a href="#">5</a> </li>
            </ul>
            <a href="javascript:void(0);" class="btn btn-success pull-right m-t-10 font-20">+</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box calendar-widget">
            <div id='calendar'></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-sm-12">
        <div class="white-box comment-widget">
            <h4 class="box-title">Recent Comments</h4>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="#"> <img alt="user" class="media-object" src="../plugins/images/users/jeffery.jpg"> </a>
                    </div>
                    <div class="media-body">
                        <div class="media-heading"><a href="javascript:void(0);" class="text-link"> Daniel Kristeen</a><span class="font-normal com-time">2 min ago</span>
                            <ul class="list-inline">
                                <li>
                                    <a href="javascript:void(0);"><span>Reply</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-heart p-r-5"></i>0 Like</a>
                                </li>
                            </ul>
                        </div>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                        <div class="media reply">
                            <div class="media-left">
                                <a href="#"> <img alt="user" class="media-object" src="../plugins/images/users/hanna.jpg"> </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading"><a href="javascript:void(0);" class="text-link">Hanna Gover</a><span class="font-normal com-time">1 min ago</span>
                                    <ul class="list-inline">
                                        <li>
                                            <a href="javascript:void(0);"><span>Reply</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-heart p-r-5"></i>0 Like</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>Cras sit amet nibh libero, in gravida nulla.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-left">
                        <a href="#"> <img alt="user" class="media-object" src="../plugins/images/users/jeffery.jpg"> </a>
                    </div>
                    <div class="media-body">
                        <div class="media-heading"><a href="javascript:void(0);" class="text-link"> Daniel Kristeen</a><span class="font-normal com-time">2 sec ago</span>
                            <ul class="list-inline">
                                <li>
                                    <a href="javascript:void(0);"><span>Reply</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-heart p-r-5 text-danger"></i>2 Like</a>
                                </li>
                            </ul>
                        </div>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                    </div>
                </li>
            </ul>
            <div class="add-comment">
                <input type="text" class="form-control" placeholder="Write your comment here">
                <i class="fa fa-camera"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="white-box">
            <div class="profile-widget">
                <div class="profile-img">
                    <img src="../plugins/images/users/jeffery.jpg" alt="user-img" class="img-circle">
                    <p class="m-t-10 m-b-5"><a href="javascript:void(0);" class="profile-text font-22 font-semibold">Jeffery Brown</a></p>
                    <span class="font-16">Ahmedabad, IN</span>
                </div>
                <div class="profile-info">
                    <div class="col-xs-6 col-md-6 b-r">
                        <h1 class="text-primary">647 </h1>
                        <span class="font-16">Ranking</span>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <h1 class="text-primary">98 </h1>
                        <span class="font-16">Events</span>
                    </div>
                </div>
                <div class="profile-detail font-15">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                    </p>
                </div>
                <div class="profile-btn">
                    <a href="javascript:void(0);" class="btn btn-success">Follow Me</a>
                    <a href="javascript:void(0);" class="btn btn-default btn-outline m-r-0">Detail View</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@section('js')
    <script>
        $('#noPadding').dataTable( {
            "paging": false
        });
    </script>
@endsection