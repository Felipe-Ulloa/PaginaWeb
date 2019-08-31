{{ Form::hidden('user_id',auth()->user()->id) }}


<div>
			<div class = "form-group">
				{{Form::label('mision','Mision de la empresa')}}
				{{Form::textarea('mision',null,['class'=>'form-control'])}}
			</div>

			<div class = "form-group">
				{{Form::label('vision','Vision de la empresa')}}
				{{Form::textarea('vision',null,['class'=>'form-control'])}}
			</div>

</div>


<div class = "form-group">
	{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}

</div>

