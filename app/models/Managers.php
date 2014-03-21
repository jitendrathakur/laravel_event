<?php

// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableInterface;

class Managers extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'managers';

	public function validate($input, $scenario, $id = null)
	{
	    $rules = [];

	    //'username'     => 'required|min:5|unique:users',
	    //'password' => 'required|min:4|confirmed'
	  	//update : 'name'     => 'required|min:5|unique:users' .',name,' . $id,
	    switch($scenario)
	    {
	        case 'store':
	            $rules   = [
	                'username'     => 'required|min:5',
	                'email'    => 'required|email',
	                'password' => 'required|min:4'
	            ];
	            break;

	        case 'update';
	            $rules   = [
	                'username'     => 'required|min:5' .',username,' . $id,
	                'email'    => 'required|email' .',email,' . $id,
	                'password' => 'min:4'
	            ];
	        break;    
	    }

	    return Validator::make($input, $rules);
	}
	//===============================================

 	public function events()
    {
        return $this->hasMany('Events');
    }
    //===============================================
	
}