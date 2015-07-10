<?php

class ContactsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Contact Controller
	|--------------------------------------------------------------------------
	|
	
	|
	|	
	
	|
	*/

 

	public function showform()
	{
		// show the form
		return View::make('contacts.index');
	}

	
	
 //  Add new contacts 
	public function add()
	{
	
	
	 //creating rules for validation
	
	   $rules= array(
			 'name'=>'required',
			 'email'=>'required|email',
			 'phone'=>'required|numeric|digits_between:8,12'
	          );
	 
	 	// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
	  
		if($validator->fails()){
		  return Redirect::to('contacts')
		        ->withErrors($validator)->withInput(); // Return errors with inputs
		} else {
			Contact::create(array(
			 'name'=>Input::get('name'),
			 'email'=>Input::get('email'),
			 'Phone'=>Input::get('phone'),
			 'userid'=>'1'
			 ));
		 return Redirect::to('contacts')
		        ->with('message','The contact was created successfully');
		}		   
		  
	}
	
	// show all contacts
	public function showcontacts()
	 {
	 
	  return View::make('contacts.showcontacts')
	   			->with('title','contacts')
	  		    ->with('contacts',Contact::all()); // display contacts
	 
	 
	}


  public function postSearch()
	{

	    $name = Input::get('query');
	   
	   
	    //$posts=DB::table('contacts')->select('name', 'email')->get();
	   
		$posts = Contact::where('name', 'LIKE', "%$name%")->get();

	    return View::make('contacts.showcontacts')->with('contacts',$posts);

	}













}