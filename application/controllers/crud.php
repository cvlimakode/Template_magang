<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		
		
		
		$this->load->view('v_admin',$data);
		
	}
	public function tambah()
    {
        // $crud = $this->m_data;
        // $validation = $this->form_validation;
        // $validation->set_rules($crud->rules());

        // if ($validation->run()) {
        //     $crud->save();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $this->load->view("v_tambah");
	}

	function tambah_aksi(){
		$username = $this->input->post('username');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
 
		$data = array(
			'username' => $username,
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'password' => $password,
			'level' => $level

			);
		$this->m_data->input_data($data,'administrator');
		redirect('crud/index');
	}

	function hapus($username){
		$where = array('username' => $username);
		$this->m_data->hapus_data($where,'administrator');
		redirect('crud/index');
	}
}