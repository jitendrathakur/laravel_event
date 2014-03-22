<?php

class EventsController extends \BaseController {


	protected $layout = 'layouts.default';


	public function __construct(Events $event)
	{
		//parent::__construct();
		$this->event = $event;
	}


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
		$input = array_except($input, '_token');

		if ($this->event->validate($input)) {
			
			$events = $this->event->create($input);
			
			return Redirect::to('events')->with('success', 'Insert Record Successfully');
			
		} else {
			// failure
		    $errors = $this->event->errors();			
		    return Redirect::route('events.create')
			->withInput()
			->withErrors($errors)
			->with('error', 'There were validation errors.');
		}		


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
		$input = array_except($input, '_token');

		if ($this->event->validate($input)) {	
			
			$event = $this->event->find($id);
			$events = $event->update($input);
			
			return Redirect::to('events')->with('success', 'Updated Record Successfully');
			
		} else {
			// failure
		    $errors = $this->event->errors();			
		    return Redirect::route('events.edit', $id)
			->withInput()
			->withErrors($errors)
			->with('error', 'There were validation errors.');
		}
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