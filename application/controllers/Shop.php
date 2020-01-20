<?php 

class Shop extends CI_Controller 
{

	public function home()
	{
	
		$data['main_view'] = "shop/home_view";

		$this->load->view('layouts/main', $data);
	}
}

?>