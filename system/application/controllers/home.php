<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->model('Page', '', TRUE);
		
		$data['content'] = $this->Page->get_content();

		$this->load->helper('html');
		$this->load->view('home', $data);
	}
	
	function update() {
		$this->load->model('Page', '', TRUE);
		$this->Page->update_content($this->input->post('content'));
	}
}














/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */