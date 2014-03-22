@extends('layouts.default')

@section('content')

{{ Form::open(array('route' => 'managers.store', 'class' => 'form-horizontal')) }}

 <fieldset>
    <legend>Add Event Manager</legend>

		<div class="control-group">
		    <label class="control-label" for="email">
				{{ Form::label('email', 'Email') }} 
			</label>
			<div class="controls">
				{{  Form::text('email') }}
				<span class="help-inline">{{ $errors->first('email','<span class="error">:message</span>'); }}</span>
			</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="username">
				{{ Form::label('username', 'User Name') }}
			</label>
			<div class="controls">
				{{  Form::text('username') }}<span class="help-inline">{{ $errors->first('username','<span class="error">:message</span>'); }}</span>
			</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="password">
				{{ Form::label('password', 'Password') }} 
			</label>
			<div class="controls">
				{{  Form::password('password') }}<span class="help-inline">{{ $errors->first('password','<span class="error">:message</span>'); }}</span>
			</div>
		</div>


		<div class="control-group">
		   <div class="controls">
			{{ Form::submit('Save', array('class'=>'btn btn-primary')) }}

			<a class="btn btn-danger" href="{{ url('managers') }}"> Cancel </a>
			</div>
		</div>

	</fieldset>
		

{{ Form::close() }}

@stop