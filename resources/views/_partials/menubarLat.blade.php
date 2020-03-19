@if(Auth::check())    
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <div class="user-profile" style="background: url({{asset('img/user-info.jpg')}}) no-repeat;">
                <!-- User profile image -->
                <div class="profile-img"> <img src="{{asset('img/zou-perfil-navbar.png')}}" alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="true">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu animated flipInY"> 
                        <a href="#" class="dropdown-item"><i class="ti-user"></i>
                            Mi perfil
                        </a> 
                        <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <div class="dropdown-divider"></div> 
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i>configuración</a>
                        <div class="dropdown-divider"></div> 
                        <div  class="dropdown-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                @if(Auth::user()->hasRole(1))
                    <li class="nav-small-cap">USERS</li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="fas fa-university"></i>
                            <span class="hide-menu"> Users </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('user.index') }}">All</a></li>
                            <li><a href="{{ route('user.create') }}">New User</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->hasRole(1) || Auth::user()->hasRole(2))
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span class="hide-menu">Customer</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ route('customer.index')}}">All</a></li>
                            <li><a href="{{ route('customer.create') }}">New Customer</a></li>
                        </ul>
                    </li>
                @endif
                </ul>
            </nav>
        </div>
        <div class="sidebar-footer">
            <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="fas fa-cogs"></i></a>
            <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <div class="link">
                <a href="{{ route('logout') }}" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                    <i class="fa fa-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </aside>
@endif