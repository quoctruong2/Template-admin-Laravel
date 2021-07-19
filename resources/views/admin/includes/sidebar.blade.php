<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ (request()->routeIs(['dashboard'])) ? 'active' : '' }}">
                <a href="{{route('dashboard')}}" title="Dashboard">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
{{--            <li class="pcoded-hasmenu {{ (request()->routeIs(['users.*'])) ? 'active' : '' }}">--}}
{{--                <a href="javascript:void(0)">--}}
{{--                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>--}}
{{--                    <span class="pcoded-mtext">Users</span>--}}
{{--                    <!-- <span class="pcoded-badge label label-warning">NEW</span> -->--}}
{{--                </a>--}}
{{--                <ul class="pcoded-submenu">--}}
{{--                    <li class="{{ (request()->routeIs(['users.patients.*'])) ? 'active' : '' }}">--}}
{{--                        <a href="{{route('users.patients.index')}}">--}}
{{--                            <span class="pcoded-mtext">Patient</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="{{ (request()->routeIs(['users.pharmacies.*'])) ? 'active' : '' }}">--}}
{{--                        <a href="{{route('users.pharmacies.index')}}">--}}
{{--                            <span class="pcoded-mtext">Provider</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}


        </ul>

    </div>
</nav>
