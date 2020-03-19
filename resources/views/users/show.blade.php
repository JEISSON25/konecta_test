@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
           User
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                            
                            <img src="{{ asset('img/perfil.png')}}" alt="" class="img-fluid">
                          
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                            <h2>{{ $user->name }}</h2>
                            <div>{{ $user->email }}</div>
                            <div>{{ $user->roles[0]->name }}</div>
                            <div class="text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-success">
                                    Preview
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection