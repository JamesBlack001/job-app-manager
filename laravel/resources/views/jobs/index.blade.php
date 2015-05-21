@extends('master')

@section('content')

	<h2>List of Applications</h2>

	@foreach ($jobs as $job)

		<li> {!! link_to_route('job_path', $job->title, [$job->id]) !!} </li>

	@endforeach

	{!! link_to_route('job_create', 'Create Job') !!}

@stop