<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}
	
	function hi($id, $name="Peter", $happy=true) {
		echo $id;
		echo $name;
		echo $happy;
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */