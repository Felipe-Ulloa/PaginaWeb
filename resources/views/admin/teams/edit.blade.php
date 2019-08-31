@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Post 
                    
                </div>

                <div class="panel-body">
                    {!! Form::model($team, ['route' => ['teams.update', $team->id], 'method' => 'PUT', 'files' => true]) !!}

                     @include('admin.teams.partials.form')

                    {!! Form::Close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection