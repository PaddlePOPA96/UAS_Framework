@php
    $currentRouteName = Route::currentRouteName();
    $isLoggedIn = Auth::check();
@endphp
<style>
    #nav-item{
        background-color: black;
        font-display: 
    }
        
    
</style>

<nav class="shadow-lg navbar navbar-expand-sm navbar p-3 bg-red rounded">
        <div class="container">
            <a class="navbar-brand">
                <img src="{{ Vite::asset('resources/images/icon.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                gigiku</a>

            {{-- button burger --}}
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-md-none text-white-50">
    
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a></li>
                    <li class="nav-item">
                           <a class="nav-link" href="{{ route('ourteam') }}">Our Team</a></li>

                     @if($isLoggedIn)
                        <li class="nav-item">
                            <a href="{{ route('employees.index') }}" class="nav-link @if ($currentRouteName == 'employees.index') active @endif">Employee</a>
                            </li>
                        @endif



                </ul>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
    
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ route('profile') }}" class="dropdown-item"><i class="bi-person-circle me-1"></i> My
                                    Profile</a>
    
                                <hr>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="bi bi-lock-fill"></i> {{ __('Logout') }}
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
