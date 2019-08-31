{{ Form::hidden('user_id',auth()->user()->id) }}

<div class = "form-group">
	{{Form::label('title','Nombre del servicio')}}
	{{Form::text('title',null,['class'=>'form-control','id'=>'title'])}}

</div>
<div>
			<div class = "form-group">
				{{ Form::label('excerpt','Breve descripsión del servicio')}}
				{{Form::textarea('excerpt',null,['class'=>'form-control', 'rows' => '2'])}}

			</div>

			<div class = "form-group">
				{{Form::label('body','Descripción Completa del servicio')}}
				{{Form::textarea('body',null,['class'=>'form-control'])}}
			</div>

</div>


<div class = "form-group">
	{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}

</div>

@section('scripts')
<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
<script>
	CKEDITOR.config.height = 250;
	CKEDITOR.config.width = 'auto';

	CKEDITOR.replace('body');
</script>
</script>
@endsection