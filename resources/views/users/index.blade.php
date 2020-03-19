@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Users
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
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th colspan="3" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->roles[0]->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('user.show', $u->id) }}" class="btn btn-sm btn-default">
                                            <button class="btn btn-sm btn-success">
                                            Ver
                                            </button>
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-default">
                                            <button class="btn btn-sm btn-warning">
                                                Editar
                                            </button>
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['user.destroy', $u->id], 'method' => 'DELETE']) !!}
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
                            {{ $users->render() }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection