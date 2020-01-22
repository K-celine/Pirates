<?php 

class Match extends CI_Controller 
{



	public function infos()
	{
	
		$data['scores'] = $this->match_model->get_scores();

		$data['standing'] = $this->match_model->get_standing();


		$data['main_view'] = "match_view";

		$this->load->view('layouts/main', $data);
	}


/*public function booking()
	{
		
		$data['main_view'] = "match_view";

		$this->load->view('layouts/main', $data);
    	
  	}

	public function scores()
	{
		
		$data['main_view'] = "match_view";

		$this->load->view('layouts/main', $data);
    	
  	}

  	public function standing()
  	{
  		$data['main_view'] = "match_view";

		$this->load->view('layouts/main', $data);

  	}*/
  
}


?>