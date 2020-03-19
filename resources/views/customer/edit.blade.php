@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Customer {{ $customer->name }}
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                {!! Form::model($customer, ['route' => ['customer.update', $customer->id], 'method' => 'PUT']) !!}
                        @csrf
                        
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                        value="{{ $customer->name }}" placeholder="Name" required autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="document" type="number" class="form-control @error('document') is-invalid @enderror" name="document" 
                                        value="{{ $customer->document }}" placeholder="Document" required>
                                        @error('document')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 input-bottom">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                        value="{{ $customer->email }}" placeholder="Email" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" 
                                        value="{{ $customer->address }}" placeholder="Address" required>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-md-center top-btn">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        {{ Form::submit('Update Customer', ['class'=>'btn btn-success col']) }}
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a class="btn btn-danger color-leading col" href="{{route('customer.index')}}">Cancel</a>
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