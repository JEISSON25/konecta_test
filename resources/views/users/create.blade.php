  
@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Create User
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'user.store']) !!}
                        @csrf
                        
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                        value="{{ old('name') }}" placeholder="Firstname" required autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 input-bottom">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email') }}" placeholder="Email" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 input-bottom">
                                        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        {{ Form::label('rol', 'Rol') }}
                                        <select name="rol" class="form-control">
                                            <option selected disabled>Select rol</option>
                                            @foreach($rol as $r)
                                                <option value="{{$r->name}}">{{ $r->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('rol')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-md-center top-btn">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        {{ Form::submit('Create User', ['class'=>'btn btn-success col']) }}
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a class="btn btn-danger color-leading col" href="{{route('user.index')}}">Cancel</a>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection