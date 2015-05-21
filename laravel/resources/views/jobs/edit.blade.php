@extends('master')

@section('content')
	
	<h2>Job Edit</h2>

	{!! Form::model($job, ['route' => ['job_update', $job->id], 'method' => 'PATCH']) !!}

		@include ('jobs._form')

	{!! Form::close() !!}

	{!! delete_form(['job_destroy',$job->id]) !!}

	{!! link_to_route('jobs_path', 'Go Back Home') !!}

@stop