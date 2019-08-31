{{ Form::hidden('user_id',auth()->user()->id) }}

<div class = "form-group">
	
	{{Form::text('name',null,['class'=>'form-control','id'=>'title'])}}
	{{Form::text('email',null,['class'=>'form-control','id'=>'title'])}}
	{{Form::text('subject',null,['class'=>'form-control','id'=>'title'])}}
	{{Form::textarea('body',null,['class'=>'form-control'])}}

</div>
<div>
			<div class = "form-group">
				{{ Form::label('excerpt','Extracto')}}
				{{Form::textarea('excerpt',null,['class'=>'form-control', 'rows' => '2'])}}

			</div>

			<div class = "form-group">
				{{Form::label('body','Descripción Completa del servicio')}}
				{{Form::textarea('body',null,['class'=>'form-control'])}}
			</div>

</div>


<div class = "form-group">
	{{Form::submit('Enviar',['class'=>'btn btn-sm btn-primary'])}}

</div>

