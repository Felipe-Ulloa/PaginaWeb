{{ Form::hidden('user_id',auth()->user()->id) }}

<div>
	
	<div class = "form-group">
	{{Form::label('name','Nombre del trabajador')}}
	{{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
	</div>
</div>

<div>
	
		<div class = "form-group">
		{{Form::label('charge','Cargo del trabajador')}}
		{{Form::text('charge',null,['class'=>'form-control','id'=>'charge'])}}
		</div>

		
</div>
		<div class="form-gruop">
		{{ Form::label('file','Seleccione Foto del trabajador')}}
		{{ Form::file('file')}}
		
		</div>

		<div class = "form-group">
			{{Form::submit('Guardar',['class'=>'pull-right btn btn-sm btn-primary'])}}

		</div>
		
</div>