<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('form_input');
	}
	public function awesome()
	{
		$this->load->view('awesome');
	}
}

/* End of file survey.php */
/* Location: ./application/controllers/survey.php */