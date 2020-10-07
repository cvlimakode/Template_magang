<?php 
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // $level = $this->select->post('level');
        $user = $this->m_login->cek_login('administrator', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data_session = [
                    'username' => $user['username'],
                    'status' => 'login'
                ];
                $this->session->set_userdata($data_session);

                if ($user['level'] === 'admin'){
                    redirect('admin/index');
                } elseif($user['level'] === 'superadmin'){
                    redirect('superadmin');
                } else{
                    echo $this->session->set_flashdata('Select level');
                    redirect('login');
                }

            }else {
                echo "password salah";
            }
        } else{
            echo "Akun Belum Terdaftar";
        }
    }

}