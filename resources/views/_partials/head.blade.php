@section('head')
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <title>{{ config('app.name', 'Test Konecta') }} | @yield('title') </title>
  <meta name="description" content="@yield('description')">
  <meta name="author" content="eightbitsco.com">

  <meta name="viewport" content="width=device-width">
  <meta http-equiv="cleartype" content="on">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
  <link rel="image_src" href="" />
  
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- In case you want to add your own meta tags --}}
  @yield('meta-tags')

  {{-- Place favicon.ico and apple-touch-icon(s) in the root directory --}}

  {{-- CSS --}}
  {!! Html::style('//fonts.googleapis.com/css?family=Poppins:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic') !!}
  {!! Html::style('css/zou.css') !!}
  {!! Html::style('css/zou-blue.css') !!} 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

  
  {{-- JS --}}
  {!! Html::script('//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js')  !!}   
  {!! Html::script('js/popper.min.js') !!}
  {!! Html::script('js/bootstrap.min.js') !!} 


@show