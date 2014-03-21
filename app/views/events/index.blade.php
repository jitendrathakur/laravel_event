@extends('layouts.default')

@section('content')

<h2>Events Record</h2> 

<a class="btn btn-large btn-primary" href="{{ url('events/create', $parameters = array()) }}"> Add </a>

<table class="table table-hover table-bordered table-striped">
	<tr>
		<th>ID</th>
		<th>Event Manager</th>
		<th>Title</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Action</th>
	</tr>

	@if(!empty($results))
		@foreach ($results as $result) 

			<tr>
				<td > {{{ $result->id }}} </td>
				<td > {{{ $result->managers->email }}} </td>
				<td > {{{ $result->title }}} </td>
				<td > {{{ $result->start_date}}} </td>
				<td > {{{ $result->end_date }}} </td>
				<td>
					<a href="{{ URL::action('EventsController@show',$result->id ) }}">
						<span class="btn btn-mini btn-success">View</span>
					</a> 
					
					<a href="{{ URL::action('EventsController@edit',$result->id ) }}">
						<span class="btn btn-mini btn-primary">Edit </span>
					</a>
					
				 	{{ Form::open(array('route' => array('events.destroy', $result->id), 'method' => 'delete')) }}
        				<button  class="btn btn-mini btn-danger" type="submit" href="{{ URL::route('events.destroy',  $result->id ) }}" class="btn btn-danger btn-mini">
        					Delete
        				</button>
    				{{ Form::close() }}

				</td>
			</tr>
		@endforeach
	@endif


</table>
@stop