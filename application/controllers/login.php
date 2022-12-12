<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}
	public function loginprocess()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname', 'UserName', 'trim|required|min_length[3]|alpha');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required|min_length[4]');
		if($this->form_validation->run()==FALSE){
			$this->index();
		}else{
			$unm=$this->input->post('uname');
			$pwd=$this->input->post('pwd');
			$this->load->model('admin');
			$query = $this->admin->validateUser($unm,$pwd);
			if($query){
				$data = array(
					'username'=> $this->input->post('uname'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				redirect('admin_area/index');
			}else{
				$this->session->set_flashdata('msg', 'username/password is incorrect');
				redirect('login/index');
			}
		}
	}
}
