@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Customer
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Name</th>
                                    <th>document</th>
                                    <th>Role</th>
                                    <th>Address</th>
                                    <th colspan="3" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customer as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->name }}</td>
                                    <td>{{ $c->document }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->address }}</td>
                                    <td width="10px">
                                        <a href="{{ route('customer.show', $c->id) }}" class="btn btn-sm btn-default">
                                            <button class="btn btn-sm btn-success">
                                            Ver
                                            </button>
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('customer.edit', $c->id) }}" class="btn btn-sm btn-default">
                                            <button class="btn btn-sm btn-warning">
                                                Editar
                                            </button>
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['customer.destroy', $c->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger" style="margin-top:4px">
                                                Eliminar
                                            </button>                           
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>   
                        </table>  
                        <div class="text-center col">
                            {{ $customer->render() }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection