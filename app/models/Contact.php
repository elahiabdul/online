<?php 
// Create contact Model



class Contact extends \Eloquent {

	protected $table = 'contacts';
    protected $fillable = array('name', 'email','Phone','userid');
   
  
  

}
