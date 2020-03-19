@extends('layouts.master')

@section('content')

<div class="container" id="preload">
    <div class="preload">
        <div class="logo">
            <img src="{{asset('/img/Logo.png')}}" class="img-fluid rounded mx-auto d-block">
                        
        <div class="loader-frame">
            <div class="loader1" id="loader1"></div>
            <div class="loader2" id="loader2"></div>
        </div>
        </div>
        
    </div>
</div>
<script>
    (function(){
        var preload = document.getElementById('preload');
        var loading = 0;
        var id = setInterval(frame, 64);
        function frame() {
            if(loading == 100){
                clearInterval(id);
                window.open('{{URL::to("login")}}', '_self');
            }else{
                loading = loading + 2;
                if(loading == 90){
                    preload.style.animation= 'fadeout 1s ease';
                }
            }
        }
    })();
</script>
@endsection