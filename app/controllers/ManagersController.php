<?php

class ManagersController extends \BaseController {


	protected $layout = 'layouts.default';


	public function __construct(Managers $manager)
	{
		//parent::__construct();
		$this->manager = $manager;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$results = Managers::all();
		$this->layout->content = View::make('managers.index', compact('results'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('managers.create');
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

		if ($this->manager->validate($input)) {
			
			$managers = $this->manager->create($input);
			
			return Redirect::to('managers')->with('success', 'Insert Record Successfully');
			
		} else {
			// failure
		    $errors = $this->manager->errors();			
		    return Redirect::route('managers.create')
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
		$result = Managers::find($id);
		$this->layout->content = View::make('managers.show', compact('result'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id = '')
	{

		$data = Managers::find($id);
		$this->layout->content = View::make('managers.edit', compact('data', 'id'));

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

		if ($this->manager->validate($input)) {	
			
			$manager = $this->manager->find($id);
			$managers = $manager->update($input);
			
			return Redirect::to('managers')->with('success', 'Updated Record Successfully');
			
		} else {
			// failure
		    $errors = $this->manager->errors();			
		    return Redirect::route('managers.edit', $id)
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
		$obj = Managers::find($id);
		$obj->delete();
		return Redirect::to('managers')->with('success', 'Record Deleted Successfully');
	}

}