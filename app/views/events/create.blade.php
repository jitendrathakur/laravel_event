@extends('layouts.default')

@section('content')


<a class="btn btn-success" href="{{ url('events') }}"> Back </a>

{{ Form::open( array( 'action' => 'EventsController@store') ) }}

 <fieldset>
    <legend>Add Events</legend>

		<table class="table">
			<tr>
				<th>  <label> {{ Form::label('managers_id', 'Event Manager') }} </label></th>
				<td>
					{{  Form::select('managers_id', $results )	}}
				</td>
			</tr>
			
			<tr>
				<th>  <label>{{ Form::label('title', 'Title') }} </label></th>
				<td>{{  Form::text('title') }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('description', 'Description') }} </label></th>
				<td>{{  Form::textarea('description') }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('venue', 'Venue') }} </label></th>
				<td>{{  Form::textarea('venue') }}</td>
			</tr>	
				
			<tr>
				<th>  <label> {{ Form::label('picture', 'Picture') }} </label></th>
				<td>{{  Form::text('picture') }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('start_date', 'Start Date') }} </label></th>
				<td>{{  Form::text('start_date') }}</td>
			</tr>

			<tr>
				<th>  <label> {{ Form::label('end_date', 'End Date') }} </label></th>
				<td>{{  Form::text('end_date') }}</td>
			</tr>

			<tr>
				<td > {{ Form::submit('Save', array('class'=>'btn btn-primary')) }}</td>
			</tr>
			
		</table>
	</fieldset>
		

{{ Form::close() }}

@stop