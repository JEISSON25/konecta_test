<header class="topbar is_stuck position-navbar-fixed">

@section('header')
  
    @if (Auth::check()) 
        @include('_partials.menubar')
    @endif

@show
</header>
@if(Auth::check())
    <div class="div-master"></div>
@endif