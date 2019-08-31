{{ Form::hidden('user_id',auth()->user()->id) }}

<div>
	<div class="form-gruop">
	{{ Form::label('file','Imagen de la noticia')}}
	{{ Form::file('file')}}
	
	</div>

	<div class = "form-group">
	{{Form::label('name','Nombre del autor')}}
	{{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
	</div>
</div>

<div>
	<div class="col-md-8">
		<div class = "form-group">
		{{Form::label('title','Titulo de la noticia')}}
		{{Form::text('title',null,['class'=>'form-control','id'=>'title'])}}
		</div>
	</div>

	<div class="col-md-4">
		<div class="form-group">
			{{ Form::label('start_date', 'Fecha Ingreso') }}
			{{ Form::date('start_date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
		</div>
	</div>
</div>

<div>
	<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
	</div>

	<div class="form-group">
		{{ Form::label('category_id','Seleccione la categoria') }}
		{{ Form::select('category_id',$categories,null,['class'=>'form-control']) }}
	</div>

</div>
<div>
		<div class="form-group">
			{{ Form::label('tags', 'Etiquetas') }}
			<div>
				@foreach($tags as $tag)
				<label>
				{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
				</label>
				@endforeach
			</div>
		</div>
</div>

		<div>
			<div>
				{{ Form::label('excerpt','Descripción')}}
				{{Form::textarea('excerpt',null,['class'=>'form-control', 'rows' => '2'])}}

			</div>

			<div class = "form-group">
				{{Form::label('body','Descripción')}}
				{{Form::textarea('body',null,['class'=>'form-control'])}}
			</div>

		</div>
		
<div>			
		<div class="form-group">
			{{ Form::label('status','Estado') }}
		<div>	
			<label>
				{{ Form::radio('status','PUBLISHED') }} Publicado
			</label>
			<label>
				{{ Form::radio('status','DRAFT') }} Borrador
			</label>
		</div>
		</div>
		<div class = "form-group">
			{{Form::submit('Guardar',['class'=>'pull-right btn btn-sm btn-primary'])}}

		</div>
</div>
@section('scripts')
<script src="{{asset('vendor/StringToSlug/jquery.stringToSlug.min.js')}}"></script>

@endsection