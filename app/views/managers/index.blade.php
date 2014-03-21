@extends('layouts.default')

@section('content')


<div class="message">

	<span style="color:green"></span>

</div>

<h2>Show All Records</h2> 

<a class="btn btn-large btn-primary" href="{{ url('managers/create', $parameters = array()) }}"> Add </a>



<table class="table table-hover table-bordered table-striped">
	<tr>
		<th>ID</th>
		<th>email</th>
		<th>username</th>
		<th>password</th>
		<th>Created Date</th>
		<th>Modified Date</th>
		<th>Action</th>
	</tr>

	@if(!empty($results))
		@foreach ($results as $result) 

			<tr>
				<td > {{{ $result->id }}} </td>
				<td > {{{ $result->email }}} </td>
				<td > {{{ $result->username }}} </td>
				<td > {{{ $result->password }}} </td>
				<td > {{{ $result->created_at }}} </td>
				<td > {{{ $result->updated_at }}} </td>
				<td>
					<a href="{{ URL::action('ManagersController@show',$result->id ) }}">
						<span class="btn btn-mini btn-success">View</span>
					</a> 
					
					<a href="{{ URL::action('ManagersController@edit',$result->id ) }}">
						<span class="btn btn-mini btn-primary">Edit </span>
					</a>
					
				 	{{ Form::open(array('route' => array('managers.destroy', $result->id), 'method' => 'delete')) }}
        				<button  class="btn btn-mini btn-danger" type="submit" href="{{ URL::route('managers.destroy',  $result->id ) }}" class="btn btn-danger btn-mini">
        					Delete
        				</button>
    				{{ Form::close() }}

				</td>
			</tr>
		@endforeach
	@endif


</table>
@stop