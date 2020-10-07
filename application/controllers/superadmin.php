<?php 

class Superadmin extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('m_data');
        
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$data = [
            'user' => $this->m_data->tampil_data()->result()  
        ];
		$this->load->view('v_superadmin', $data);
	}
}