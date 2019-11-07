<div class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <div id="sidebarCollapse">
                <hamburger  class="hamburger-container"/>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <el-tooltip content="전체화면" effect="dark" placement="bottom" class="screenfull">
                            <screenfull class="screenfull"/>
                        </el-tooltip>
                    </li>
                    <li class="nav-item">
                        <el-tooltip content="테마" effect="dark" placement="bottom" class="themepicker">
                            <theme-picker class="theme-switch"/>
                        </el-tooltip>
                    </li>
                </ul>
            </div>

            <el-dropdown class="avatar-container" trigger="click">
                <img src="{{asset('/assets/home/img/avatars/avatar.jpg')}}" alt="Avatar">

                <el-dropdown-menu slot="dropdown">
                    <el-dropdown-item>
                        <a href="/em/dashboard"><i class="icon-fa icon-fa-dashboard"></i> 대시보드</a>
                    </el-dropdown-item>
                    <el-dropdown-item>
                        <a href="/em/co/configuration/49" v-pre><i class="icon-fa icon-fa-user"></i> {{ Auth::user()->name }}</a>
                    </el-dropdown-item>
                    <el-dropdown-item divided>
                        <div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-fa icon-fa-sign-out"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" s="display: none;">
                                @csrf
                            </form>
                        </div>
                    </el-dropdown-item>
                </el-dropdown-menu>
            </el-dropdown>
        </div>
    </nav>

    <div class="tags-view-container">
        {{-- <span>&nbsp;</span> --}}
    </div>
</div>
