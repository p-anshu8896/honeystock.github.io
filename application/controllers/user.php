<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('honey');
	}
	public function about()
	{
		$this->load->view('honey-about');
	}
	public function orderprocess()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('unm', 'User Name', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('mob', 'Mobile', 'trim|required|min_length[10]|max_length[10]|integer');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('honey');
		}
		else
		{
			$insert_data=array(
				'name' => $this->input->post('unm'),
				'mobile' => $this->input->post('mob'),
				'address' => $this->input->post('address'),
				'honeyType' => $this->input->post('honeytype'),
				'qnty' => $this->input->post('qty'),
				'dt' => date("Y-m-d H:i:s"),
				'status' =>"pending"
			);
			$this->load->model('order');
			if($query = $this->order->insertorder($insert_data)){
				$this->session->set_flashdata('msg', 'Successfully Ordered');
			}else{
				$this->session->set_flashdata('msg', 'Error Occured Try Again');
			}
			redirect('user/index');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */