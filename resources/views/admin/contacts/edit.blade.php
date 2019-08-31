@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar mensaje
                    
                </div>

                <div class="panel-body">
                	{!! Form::model($contact,['route'=>['contacts.update', $contact->id],'method' => 'PUT']) !!}
                	

                	 @include('home')

                	{!! Form::Close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection