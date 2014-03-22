@extends('layouts.default')

@section('content')

{{ Form::model($data, array( 'route' => array('events.update', $id), 'method' => 'patch') ) }}

<fieldset>
    <legend>Edit Events</legend>


			<div class="control-group">
		    <label class="control-label" for="managers_id">
				{{ Form::label('managers_id', 'Event Manager') }}
			</label>
			<div class="controls">
				{{  Form::select('managers_id', $results )	}}
					<span class="help-inline">{{ $errors->first('managers_id','<span class="error">:message</span>'); }}</span>
			</div>
		</div>


		<div class="control-group">
		    <label class="control-label" for="title">
				{{ Form::label('title', 'Title') }}
			</label>
			<div class="controls">
				{{  Form::text('title') }}
					<span class="help-inline">{{ $errors->first('title','<span class="error">:message</span>'); }}</span>
			</div>
		</div>
	
		<div class="control-group">
		    <label class="control-label" for="managers_id">
				{{ Form::label('description', 'Description') }}
			</label>
			<div class="controls">
				{{  Form::textarea('description') }}
			</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="managers_id">
				{{ Form::label('venue', 'Venue') }} 
			</label>
			<div class="controls">
				{{  Form::textarea('venue') }}
					<span class="help-inline">{{ $errors->first('venue','<span class="error">:message</span>'); }}</span>
			</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="managers_id">
				 {{ Form::label('picture', 'Picture') }} 
			</label>
			<div class="controls">
				{{  Form::text('picture') }}
			</div>
		</div>
				
		<div class="control-group">
		    <label class="control-label" for="managers_id">
				{{ Form::label('start_date', 'Start Date') }} 
			</label>
			<div class="controls">
				{{  Form::text('start_date') }}
				<span class="help-inline">{{ $errors->first('start_date','<span class="error">:message</span>'); }}</span>
			</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="managers_id">
				 {{ Form::label('end_date', 'End Date') }}
			</label>
			<div class="controls">
				{{  Form::text('end_date') }}
					<span class="help-inline">{{ $errors->first('end_date','<span class="error">:message</span>'); }}</span>
			</div>
		</div>

		<div class="control-group">
		   <div class="controls">
			{{ Form::submit('Update', array('class'=>'btn btn-primary')) }}

			<a class="btn btn-danger" href="{{ url('events') }}"> Cancel </a>
			</div>
		</div>


{{ Form::close() }}

@stop