@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Servicios 
                    <a href="{{ route('contacts.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->excerpt }}</td>
                                <td width="10px">
                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                  {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>        

                    {{ $contacts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection