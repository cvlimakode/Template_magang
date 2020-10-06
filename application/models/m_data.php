<?php 

class M_data extends CI_Model{
	private $_table = "administrator";

    public $username;
    public $name;
    public $email;
    public $phone;
	public $password;
	public $level;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'username',
    //         'label' => 'Username',
	// 		'rules' => 'required'],
			
	// 		['field' => 'name',
    //         'label' => 'Name',
	// 		'rules' => 'required'],
			
	// 		['field' => 'email',
    //         'label' => 'Email',
	// 		'rules' => 'required'],
			
	// 		['field' => 'phone',
    //         'label' => 'Phone',
    //         'rules' => 'numeric'],

    //         ['field' => 'password',
    //         'label' => 'Password',
    //         'rules' => 'required'],
            
    //         ['field' => 'level',
    //         'label' => 'Level',
    //         'rules' => 'required']
    //     ];
    // }
	function tampil_data(){
        return $this->db->get('administrator');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
?>