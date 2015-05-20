@extends('master')

@section('content')

	<h2>List of Applications</h2>


	
	@foreach ($jobs as $job)

		<li><a href="/jobs/{{ $job->id}}">{{$job->title}}</a></li>

	@endforeach

@stop