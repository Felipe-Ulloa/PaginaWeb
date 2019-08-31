@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Mision y vision 
                    
                </div>

                <div class="panel-body">
                	{!! Form::open(['route'=>'visions.store']) !!}

                	@include('admin.visions.partials.form')

                	{!! Form::Close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection