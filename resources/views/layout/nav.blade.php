<nav class="navbar navbar-expand-xl bg-black fixed-top navigation-bar">
    <div class="container-fluid text-white">
        <a class="navbar-brand mx-5 fw-bold fs-3 text-white" href="{{ url('/') }}" wire:navigate.prevent>{{ config('app.name') }}</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-4" id="navbarNavDropdown">
            <ul class="navbar-nav flex-grow-1 justify-content-end align-items-center text-white">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item align-self-center">
                            <p class="nav-link active text-white m-0" aria-current="page">{{ Auth::user()->name }}</p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/register">Register</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
