<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('form_input');
	}

	public function process_form()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('form_input');
		}
		else
		{
			$form_data = $this->input->post();
			$this->session->set_flashdata('data',$form_data);

			if($this->session->set_userdata('count') === TRUE)
			{
				$this->session->set_userdata('count') = $this->session->set_userdata('count') + 1;
			}
			else
			{
				$this->session->set_userdata('count',1);
			}



			

			redirect('result');
		}
	}

	public function result()
	{
		$get_data['data'] = $this->session->flashdata('data');

		$this->load->view('form_display', $get_data);
	}
	
}

/* End of file survey.php */
/* Location: ./application/controllers/survey.php */