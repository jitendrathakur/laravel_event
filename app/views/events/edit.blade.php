@extends('layouts.default')

@section('content')

<a class="btn btn-success" href="{{ url('events') }}"> Back </a>

{{ Form::model($data, array( 'route' => array('events.update', $id), 'method' => 'patch') ) }}

<fieldset>
    <legend>Edit Events</legend>


	<table class="table">
		
			<tr>
				<th>  <label> {{ Form::label('managers_id', 'Event Manager') }} </label></th>
				<td>{{  Form::select('managers_id', $results, $id )	}}</td>
			</tr>


			<tr>
				<th>  <label>{{ Form::label('title', 'Title') }} </label></th>
				<td>{{  Form::text('title', null) }}</td>
			</tr>


			<tr>
				<th>  <label> {{ Form::label('description', 'Description') }} </label></th>
				<td>{{  Form::textarea('description', null) }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('venue', 'Venue') }} </label></th>
				<td>{{  Form::textarea('venue', null) }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('picture', 'Picture') }} </label></th>
				<td>{{  Form::text('picture', null) }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('start_date', 'Start Date') }} </label></th>
				<td>{{  Form::text('start_date', null) }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('end_date', 'End Date') }} </label></th>
				<td>{{  Form::text('end_date', null) }}</td>
			</tr>

		<tr>
			<td > {{ Form::submit('Update', array('class'=>'btn btn-primary')) }}</td>
		</tr>
	
	</table>

{{ Form::close() }}

@stop