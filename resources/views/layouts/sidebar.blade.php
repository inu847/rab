<aside class="sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div class="profile-image">
                    <img src="{{asset('storage/'.generalSetting()->site_logo)}}" alt="user-img" class="img-circle">
                    <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-danger">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    {{-- <ul class="dropdown-menu animated flipInY">
                        <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul> --}}
                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> {{generalSetting()->site_title1}}</a></p>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="side-menu">
                <li>
                    <a class="active waves-effect" href="{{ route('dashboard') }}" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard</span></a>
                </li>
                @if (Auth::guard('user')->user()->role->id == 1)
                    <li>
                        <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-user fa-fw"></i> <span class="hide-menu"> Manage User <span class="label label-rounded label-info pull-right">2</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li> <a href="{{ route('user.index') }}">User</a> </li>
                            <li> <a href="{{ route('role.index') }}">Role</a> </li>
                        </ul>
                    </li>
                @endif
                {{-- <li>
                    <a class="waves-effect" href="{{ route('rspp.index') }}" aria-expanded="false"><i class="icon-basket fa-fw"></i> <span class="hide-menu"> Data RSPP </span></a>
                </li> --}}
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-basket fa-fw"></i> <span class="hide-menu"> RAB <span class="label label-rounded label-info pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('ruhBelanja.index') }}">Ruh Belanja</a> </li>
                        <li> <a href="{{ route('rspp.index') }}">Data RSPP</a> </li>
                    </ul>
                </li>
                {{-- <li>
                    <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-list fa-fw"></i> <span class="hide-menu"> Manage Product <span class="label label-rounded label-info pull-right">3</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('product.index') }}">Product</a> </li>
                        <li> <a href="{{ route('master-product.index') }}">Master Product</a> </li>
                        <li> <a href="{{ route('master-varian.index') }}">Master Varian</a> </li>
                        <li> <a href="{{ route('product.todoBarcode') }}">Barcode Product</a> </li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" href="{{ route('invoice.index') }}" aria-expanded="false"><i class="icon-grid fa-fw"></i> <span class="hide-menu"> Invoice</span></a>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Report <span class="label label-rounded label-info pull-right">3</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('report.daily') }}">Daily Report</a></li>
                        <li><a href="{{ route('report.monthly') }}">Mounthly Report</a></li>
                        <li><a href="{{ route('report.yearly') }}">Yearly Report</a></li>
                    </ul>
                </li> --}}
                @if (Auth::guard('user')->user()->role->id == 1)
                    <li>
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-settings fa-fw"></i>  <span class="hide-menu"> Setting <span class="label label-rounded label-info pull-right">3</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                @if (Auth::guard('user')->user()->generalSetting)
                                    <a href="{{ route('general-setting.edit', [Auth::guard('user')->user()->generalSetting->id]) }}"> Web Setting </span></a>
                                @else
                                    <a href="{{ route('general-setting.create') }}">Web Setting </span></a>
                                @endif
                            </li>
                            <li><a href="{{ route('manage-access.index') }}">Manage Access</a></li>
                        </ul>
                    </li>
                @endif
                <li>
                    <a href="javascript:void(0);" onclick="$('#logout').submit();" aria-expanded="false"><i class="icon-power fa-fw"></i> <span class="hide-menu"> Logout</span></a>
                    <form action='{{ route('logout') }}' id="logout" method='POST' enctype='multipart/form-data'>
                    @csrf
                    </form>
                </li>
            </ul>
        </nav>
        {{-- <div class="p-30">
            <span class="hide-menu">
                <a href="javascript:void(0);" target="_blank" class="btn btn-success">Buy Cubic Admin</a>
                <a href="javascript:void(0);" target="_blank" class="btn btn-default m-t-15">Check Documentation</a>
            </span>
        </div> --}}
    </div>
</aside>