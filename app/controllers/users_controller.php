<?php

class UsersController extends AppController {

	var $name = 'Users';
	
	//Temporary: List all registered users
	function index() {
	
		$this->set('users', $this->User->find('all'));
	
	}
	
	function signup(){
	
	}
	
	function sigin(){
	
	}
	
	function profile(){
	
	}

}
?>