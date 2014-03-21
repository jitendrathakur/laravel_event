<?php

class EventsController extends \BaseController {


	protected $layout = 'layouts.default';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$results = Events::all();
		$this->layout->content = View::make('events.index', compact('results'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$results = Managers::lists('email', 'id');
		$this->layout->content = View::make('events.create', compact('results'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		$obj =new Events();

		$obj->managers_id 		= $input['managers_id'];
		$obj->title 			= $input['title'];
		$obj->description 		= $input['description'];
		$obj->venue 			= $input['venue'];
		$obj->picture 			= $input['picture'];
		$obj->start_date 		= $input['start_date'];
		$obj->end_date 			= $input['end_date'];
		$obj->created_at		= date('Y-m-d H:m:s');

		$obj->save();

		return Redirect::to('events')->with('success', 'Insert Record Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id = '')
	{
		$result = Events::find($id);
		$this->layout->content = View::make('events.show', compact('result'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id = '')
	{

		$data = Events::find($id);
		$results = Managers::lists('email', 'id');

		$this->layout->content = View::make('events.edit', compact('data', 'id', 'results'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$obj = Events::find($id);

		$obj->managers_id 		= $input['managers_id'];
		$obj->title 			= $input['title'];
		$obj->description 		= $input['description'];
		$obj->venue 			= $input['venue'];
		$obj->picture 			= $input['picture'];
		$obj->start_date 		= $input['start_date'];
		$obj->end_date 			= $input['end_date'];
		$obj->updated_at = date('Y-m-d H:m:s');

		$obj->save();

		return Redirect::to('events')->with('success', 'updated Record Successfully');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id='')
	{
		$obj = Events::find($id);
		$obj->delete();
		return Redirect::to('events')->with('success', 'Record Deleted Successfully');
	}

}