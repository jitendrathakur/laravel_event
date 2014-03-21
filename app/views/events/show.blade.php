@extends('layouts.default')

@section('content')


<a class="btn btn-success" href="{{ url('events') }}"> Back </a>

<h2>Single View</h2> 

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<td > {{{ $result->id }}} </td>
	</tr>

	<tr>
		<th>Event Manager</th>
		<td > {{{ $result->managers->email }}} </td>
	</tr>

	<tr>
		<th>Title</th>
		<td > {{{ $result->title }}} </td>
	</tr>

	<tr>
		<th>Description</th>
		<td > {{{ $result->description }}} </td>
	</tr>

	<tr>
		<th>Picture</th>
		<td > {{{ $result->picture }}} </td>
	</tr>


	<tr>
		<th>Start Date</th>
		<td > {{{ $result->start_date }}} </td>
	</tr>

	<tr>
		<th>End Date</th>
		<td > {{{ $result->end_date }}} </td>
	</tr>

	<tr>
		<th>Created Date</th>
		<td > {{{ $result->created_at }}} </td>
	</tr>

	<tr>
		<th>Modified Date</th>
		<td > {{{ $result->updated_at }}} </td>
		
	</tr>
	
</table>

@stop
