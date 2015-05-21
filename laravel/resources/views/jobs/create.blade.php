@extends('master')

@section('content')
	
	<h2>Add a new Job</h2>

	{!! Form::open(['route' => ['job_store']]) !!}

		@include ('jobs._form')

	{!! Form::close() !!}

	{!! link_to_route('jobs_path', 'Go Back Home') !!}

@stop