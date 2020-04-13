<section class="linker">
    <a href="{{ route('welcome') }}">main</a>
    <a href="{{ route('hello') }}">hello</a>
    <a href="{{ route('info') }}">info</a>
    <a href="{{ route('news::news') }}">news</a>
{{--    <a href="{{ route('Auth') }}">Auth</a>--}}
    @guest
        <a href="{{ route('loginVK') }}">VK</a>
    @else
    <a href="{{ route('admin::index') }}">Admin</a>
    @endguest
    @guest
        <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</section>
