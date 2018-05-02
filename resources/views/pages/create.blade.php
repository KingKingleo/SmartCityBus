@extends('layouts.master')

@section('formstyle')

{!! Form::open(['url'=>'pages']) !!}
<div class="col-md-10">
	<div class="form-group">
		{!! Form::label('location','Add your location') !!}
		{!! Form::text('location',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('name','Add your full name') !!}
		{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('phone','Add your Phone#') !!}
		{!! Form::text('phone',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('organization','Add your Organization') !!}
		{!! Form::text('organization',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email','Your email') !!}
		{!! Form::text('email',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
	</div>
</div>
{!! Form::close() !!}
@endsection