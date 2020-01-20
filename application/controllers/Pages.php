<?php 

class Pages extends CI_Controller 
{

	public function club()
	{
	
		$data['main_view'] = "pages/club_view";

		$this->load->view('layouts/main', $data);
	}


	public function team()
	{
	
		$data['main_view'] = "pages/team_view";

		$this->load->view('layouts/main', $data);
	}


	public function media()
	{
	
		$data['main_view'] = "pages/media_view";

		$this->load->view('layouts/main', $data);
	}


	public function contact()
	{
	
		$data['main_view'] = "pages/contact_view";

		$this->load->view('layouts/main', $data);
	}
}

?>