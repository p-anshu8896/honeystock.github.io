<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_area extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	
	function  index(){
		$this->load->model('order');
		$data['data'] = $this->order->alldata();
		$this->load->view('admin/admin_dashboard',$data);
	}
	function  changestatus($order_id = NULL){
		$this->load->model('order');
		$data = array('status' =>"complete");
		if($this->order->completestatus($order_id,$data)){
			$this->session->set_flashdata('msg', 'Successfully Completed');
			redirect('admin_area/index');
		}else{
			$this->session->set_flashdata('msg', 'Error Occured');
			redirect('admin_area/index');
		}
		
	}
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata['is_logged_in'];
		
		if(!isset($is_logged_in) || $is_logged_in !=true){
			redirect('login/index');
		}
	}
	function deleteorder($order_id = NULL) {
		$this->load->model('order');
		if($this->order->delete_order($order_id)){
			$this->session->set_flashdata('msg', 'Successfully Deleted');
			redirect('admin_area/index');
		}else{
			$this->session->set_flashdata('msg', 'Error Occured');
			redirect('admin_area/index');
		}
	}
	function  editorder($order_id = NULL){
		$this->load->model('order');
		$data['data'] = $this->order->orderdetail($order_id);
		$this->load->view('admin/admin_edit',$data);
	}
	
	function  editprocess(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mob', 'Mobile', 'trim|required|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->load->model('order');
			$data=array(
				'name' => $this->input->post('name'),
				'mobile' => $this->input->post('mob'),
				'address' => $this->input->post('address'),
				'honeyType' => $this->input->post('honeytype'),
				'qnty' => $this->input->post('qty'),
			);
			if($this->order->updateorder($this->input->post('oid'),$data)){
				$this->session->set_flashdata('msg', 'Successfully Updated');
				redirect('admin_area/index');
			}else{
				$this->session->set_flashdata('msg', 'Error Occured');
				redirect('admin_area/index');
			}
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */