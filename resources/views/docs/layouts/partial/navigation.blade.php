<nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-md p-0 shadow">
    @php
        $actionUrl = (strpos(Route::currentRouteName(), 'sub'))
            ? route('docs.sub.index', $doc->id)
            : route('docs.index')
    @endphp
    <a class="navbar-brand col-10 col-sm-3 mr-0" href="{{ route('docs.index') }}"><span data-feather="home"></span> Documents Room</a>
    <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#sub_navbar" aria-controls="sub_navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="sub_navbar">
        <ul class="navbar-nav mr-auto w-100">
            <li class="nav-item w-100">
                <form action="{{ $actionUrl }}" method="GET" role="search">
                    <input class="form-control form-control-dark" value="{{ request()->input('q') }}" type="text" placeholder="Search" aria-label="Search" name="q" onclick="this.value=null">
                </form>
            </li>
            <li class="nav-item">
                <ul class="navbar-nav px-3">
                    @if (Auth::guest())
                        <li class="nav-item text-nowrap"><a class="nav-link" href="{{ route('login') }}">Sign in</a></li>
                    @else
                        <li class="dropdown" style="text-align: right;">
                            <a class="nav-link ellipsis" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" role="menu" style="position:absolute;">
                                <li style="text-align: center;">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </li>
        </ul>
    </div>
</nav>
