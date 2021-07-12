<header>
<nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-thumbnail logo-top" src="{{ asset('images/logo.gif') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse collapse-border" id="navbarNavDropdown">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="{{ url('/') }}">{{ __('menu.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('menu.introduce') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-link"
                       href="{{ url('/') }}"
                       id="navbarDropdownMenuLink"
                    >{{ __('menu.program') }} <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">LARAVEL</a></li>
                        <li><a class="dropdown-item" href="#">MERN</a></li>
                        <li><a class="dropdown-item" href="#">PYTHON</a></li>
                        <li><a class="dropdown-item" href="#">FLUTTER</a></li>
                        <li><a class="dropdown-item" href="#">SWIFT</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('menu.contact') }}</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('login') ? 'active' : ''}}" href="{{ route('login') }}">{{ __('menu.login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('register') ? 'active' : ''}}" href="{{ route('register') }}">{{ __('menu.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('menu.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
</header>
