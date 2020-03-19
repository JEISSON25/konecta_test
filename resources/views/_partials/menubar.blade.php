<nav class="navbar top-navbar navbar-expand-md navbar-light">
    <div class="navbar-header">
        <a class="navbar-brand ico-logo" href="{{ route('home') }}">
            <b style="margin-right: 10px;">
                <!-- Dark Logo icon -->
                <img src="{{asset('img/k.png')}}" alt="homepage" class="dark-logo" style=" width: 40px;">
                <!-- Light Logo icon -->
                <img src="{{asset('img/k.png')}}" alt="homepage" class="light-logo" style="width: 40px;">
            </b>
            <span>
                <!-- dark Logo text -->
                <img src="{{asset('img/logo_Konecta.svg')}}" alt="homepage" class="dark-logo" style="width: 171px; padding: 0 10px 0 10px;">
                <!-- Light Logo text -->
                <img src="{{asset('img/logo_Konecta.svg')}}" class="light-logo" alt="homepage" style="width: 171px; padding: 0 10px 0 10px;">
            </span>
        </a>
    </div>
    <div class="navbar-collapse">
        <ul class="navbar-nav mr-auto mt-md-0">
            <!-- This is  -->
            <li class="nav-item"> 
                <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                    <i class="fas fa-bars"></i>
                </a> 
            </li>
            <li class="nav-item"> 
                <a class="nav-link sidebartoggler d-none d-sm-block hidden-sm-down text-muted waves-effect waves-dark"href="javascript:void(0)">
                    <i class="fas fa-bars"></i>
                </a> 
            </li>
        </ul>
        <ul class="navbar-nav my-lg-0">
            <!-- ============================================================== -->
            <!-- Profile -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('img/zou-perfil-navbar.png')}}" alt="user" class="profile-pic">
                </a>
                <div class="dropdown-menu dropdown-menu-right scale-up">
                    <ul class="dropdown-user">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="{{asset('img/zou-perfil.png')}}" alt="user"></div>
                                <div class="u-text">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p class="text-muted">{{Auth::user()->email}}</p>
                                    <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Vista Perfil</a>
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-user"></i> Mi perfil</a></li>
                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-settings"></i> Configuración de cuenta</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>