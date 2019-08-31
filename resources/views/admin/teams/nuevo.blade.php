@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Lista de trabajadores</h1>

            
            <div class="panel panel-default">
                

                <div class="panel-body">
                    @if($team->file)
                        <img src="{{ $team->file }}" class="img-responsive">
                    @endif
                <div>{{ $team->name }}</div>    
                <div>{{ $team->excerpt }}</div>
                    
                </div>
            </div>
            

            
        </div>
    </div>
</div>
@endsection