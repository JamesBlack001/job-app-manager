@extends('master')

@section('content')

	<h2>{{ $job->title }}</h2>

	@if ($job->contactName)

		<h3> {{ $job->contactName }} </h3>

	@endif
	@if ($job->contactNumber)

			<h3> {{ $job->contactNumber }} </h3>

	@endif
	@if ($job->contactEmail)

			<h3> {{ $job->contactEmail }} </h3>

	@endif
	<h3> {{ $job->location }} </h3>
	<h3> {{ $job->salary }} </h3>
	<h3> {{ $job->companyName }} </h3>
	<h3> {{ $job->web_link }} </h3>
	@if ($job->notes)

			<h3> {{ $job->notes }} </h3>

	@endif
	@if ($job->status)

			<h3> {{ $job->status }} </h3>

	@endif
	<h3> {{ $job->created_at }} </h3>
	<h3> {{ $job->updated_at }} </h3>


@stop