@extends('layouts.default')

@section('content')

<a class="btn btn-success" href="{{ url('managers') }}"> Back </a>

{{ Form::open( array( 'action' => 'ManagersController@store') ) }}

 <fieldset>
    <legend>Add Event Manager</legend>

		<table class="table">
			<tr>
				<th>  <label> {{ Form::label('email', 'Email') }} </label></th>
				<td>{{  Form::text('email') }}</td>
			</tr>


			<tr>
				<th>  <label>{{ Form::label('username', 'User Name') }} </label></th>
				<td>{{  Form::text('username') }}</td>
			</tr>


			<tr>
				<th>  <label> {{ Form::label('password', 'Password') }} </label></th>
				<td>{{  Form::password('password') }}</td>
			</tr>

			<tr>
				<td > {{ Form::submit('Save', array('class'=>'btn btn-primary')) }}</td>
			</tr>
			
		</table>
	</fieldset>
		

{{ Form::close() }}

@stop