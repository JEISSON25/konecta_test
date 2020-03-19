@section('tail')
@yield('custom_script')

@if(Auth::check())
    {!! Html::script('js/jquery.slimscroll.js') !!}
    {!! Html::script('js/waver.js') !!}
    {!! Html::script('js/sidebarmenu.js') !!}
    {!! Html::script('js/sticky-kit.min.js') !!}
    {!! Html::script('js/jquery.sparkline.min.js') !!}
    {!! Html::script('js/custom.min.js') !!}
@endif

@show