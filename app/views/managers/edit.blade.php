@extends('layouts.default')

@section('content')

<a class="btn btn-success" href="{{ url('managers') }}"> Back </a>

{{ Form::model($data, array( 'route' => array('managers.update', $id), 'method' => 'patch') ) }}

<fieldset>
    <legend>Edit Event Manager</legend>


	<table class="table">
		
		<tr>
			<th>  <label> {{ Form::label('email', 'Email') }} </label></th>
			<td>{{  Form::text('email', null) }}</td>
		</tr>


		<tr>
			<th>  <label>{{ Form::label('username', 'User Name') }} </label></th>
			<td>{{  Form::text('username', null) }}</td>
		</tr>


		<tr>
			<th>  <label> {{ Form::label('password', 'Password') }} </label></th>
			<td>{{  Form::password('password', null) }}</td>
		</tr>

		<tr>
			<td > {{ Form::submit('Update', array('class'=>'btn btn-primary')) }}</td>
		</tr>
	
	</table>

{{ Form::close() }}

@stop