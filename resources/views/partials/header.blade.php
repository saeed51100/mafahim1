<nav class="navbar navbar-expand-md navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                {{--TODO:
                 show random post in welcome screen. saeed doc.
                 <a class="nav-link" href="{{ route('blog.randpost') }}">‌Blog</a>--}}
                <a class="nav-link" href="{{ route('other.about') }}">About</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="{{ route('other.about') }}">mafahim1.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>


                {{--                TODO: register must be removeed from header. saeed doc.--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                {{--                </li>--}}
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}">Posts</a>
                </li>

                {{--                TODO: code below copied from--}}
                {{--                php artisan ui bootstrap --auth created. saeed doc--}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            @endif
        </ul>
    </div>
</nav>
