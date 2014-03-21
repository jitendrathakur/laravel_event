<?php

class ManagersController extends \BaseController {


	protected $layout = 'layouts.default';

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

		$obj =new Managers();
		$obj->email 		= $input['email'];
		$obj->username 		= $input['username'];
		$obj->password 		= $input['password'];
		$obj->created_at	= date('Y-m-d H:m:s');


		$validation = $obj->validate($input, 'store');

	    if ($validation->fails())
	    {
	        $messages = $validation->messages();
	        // print_r($messages);
	        // die;

	        return Redirect::to('managers')->withErrors($messages);
	    }
	    else
	    {
	    	$obj->save();
	    	return Redirect::to('managers')->with('success', 'Insert Record Successfully');
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
		$obj = Managers::find($id);

		$obj->email 		= $input['email'];
		$obj->username 		= $input['username'];
		$obj->password 		= $input['password'];
		$obj->updated_at = date('Y-m-d H:m:s');

		$obj->save();

		return Redirect::to('managers')->with('success', 'updated Record Successfully');

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