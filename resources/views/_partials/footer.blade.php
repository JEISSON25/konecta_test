@section('footer')

    @if (Auth::check()) 
    <div id="footer" role="contentinfo">
        <div class="copyright">
            <div class="row">
                <div class="container">
                <div class="row">
                    <div class= "col-xs-12 col-sm-8 col-md-8 title_plus" style=" margin-top: 5px;">© Test Konecta </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <span class="powerby">
                        Powered by: 
                        </span>
                    </div>                
                </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@show