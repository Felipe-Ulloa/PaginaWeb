@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de trabajadores 
                    <a href="{{ route('teams.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear 
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->charge }}</td>
                                <td width="10px">
                                    <a href="{{ route('teams.show', $team->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                  {!! Form::open(['route' => ['teams.destroy', $team->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>        

                    {{ $teams->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
