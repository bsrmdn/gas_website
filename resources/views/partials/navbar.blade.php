<nav class="gas-yellow sticky-top">
    <div class="row align-items-center justify-content-center justify-content-md-between py-3 mx-5">

        <div class="col-md-3 mb-2 mb-md-0">
            <a class="navbar-brand fw-bolder fs-5 align-middle" href="#">
                <img src="{{ asset('assets/img/Gas-logo.png') }}" alt="Bootstrap" width="30" height="30">
                GAS
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ url('/') }}">Tentang GAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ url('/') }}">Fitur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ url('/') }}">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="{{ url('/') }}">Karir</a>
            </li>
            {{-- <li class="nav-item {{ Request::is('authors') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('authors') }}">Authors</a>
            </li> --}}
        </ul>


        <div class="col-md-3 text-end">
            @guest
                <a class="btn btn-outline-light text-black me-2" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endguest
            @auth
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>
