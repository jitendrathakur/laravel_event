<?php

// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableInterface;

class Managers extends Eloquent{

	protected $guarded = array();

	private $rules = array(
		'username'     => 'required|min:5',
        'email'    => 'required|email',
        'password' => 'required|min:4'
        // .. more rules here ..
    );

    private $errors;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'managers';

	public function validate($data)
    {
    	
    	$availableRule = array();
    	foreach($this->rules as $field => $rules) {
    		if (isset($data[$field])) {
    			$availableRule[$field] = $rules;
    		}    	
    	}
        // make a new validator object
        $v = Validator::make($data, $availableRule);

        if ($v->fails())
        {
            // set errors and return false
            $this->errors = $v->errors();
            return false;
        }

        // validation pass
        return true;
    }
    //===============================================

    public function errors()
    {
        return $this->errors;
    }
	//===============================================

 	public function events()
    {
        return $this->hasMany('Events');
    }
    //===============================================
	
}