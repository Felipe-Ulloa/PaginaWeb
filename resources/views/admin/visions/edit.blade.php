@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Mision y Vision
                    
                </div>

                <div class="panel-body">
                	{!! Form::model($vision,['route'=>['visions.update', $vision->id],'method' => 'PUT']) !!}
                	

                	 @include('admin.visions.partials.form')

                	{!! Form::Close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection