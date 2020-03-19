<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include("_partials/head")
</head>

<body class="@yield('tags') {{ Request::path() == 'login' || Request::path() == 'register'  ? 'img-background' : 'mini-sidebar' }} ">

  @include("_partials/header")
  {{-- HEADER --}}

  @include("_partials/menubarLat")

  @yield('breadcrumbs')
  {{-- BREADCRUMBS --}}


  <div class="{{ Auth::check() ? 'page-wrapper' : 'h-100' }}" id="main-wrapper">
    @if (session('info'))
      <div class="container">
          <div class="row">
              <div class="col  mt-1align-self-end">
                  <div class="alert alert-success">
                      {{ session('info') }}
                  </div>
              </div>
          </div>
      </div>
    @endif
    @yield('content')
  </div>

  @include("_partials/footer")
  {{-- FOOTER --}}

  @include("_partials/tail")

</body>
</html>