@extends('layouts.default')

@section('content')


<a class="btn btn-success" href="{{ url('managers') }}"> Back </a>

<h2>Single View</h2> 

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<td > {{{ $result->id }}} </td>
	</tr>

	<tr>
		<th>Email</th>
		<td > {{{ $result->email }}} </td>
	</tr>

	<tr>
		<th>User Name</th>
		<td > {{{ $result->username }}} </td>
	</tr>

	<tr>
		<th>Password</th>
		<td > {{{ $result->password }}} </td>
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
