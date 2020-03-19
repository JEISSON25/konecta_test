@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            User {{ $user->name }}
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
                        @csrf
                        
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                        value="{{ $user->name }}" placeholder="Name" required autofocus>
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
                                        value="{{ $user->email }}" placeholder="Email" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        {{ Form::label('rol', 'Role') }}
                                        <select name="role[]" class="form-control">
                                            @foreach($roles as $r)
                                                @if($user->roles[0]->id == $r->id)
                                                    <option value="{{$r->id}}" selected>{{ $r->name }}</option>
                                                @else                                                    
                                                    <option value="{{$r->id}}">{{ $r->name }}</option>
                                                @endif
                                                                                                
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
                                        {{ Form::submit('Update user', ['class'=>'btn btn-success col']) }}
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