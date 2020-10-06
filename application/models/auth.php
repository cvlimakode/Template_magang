<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$name,$email,$phone,$password,$level)
	{
		$data_user = array(
            'username'=>$username,
            'email'=>$email,
            'name'=>$name,
            'phone'=>$phone,
			'password'=>password_hash($password, PASSWORD_DEFAULT),
			'level'=>$level
		);
		$this->db->insert('administrator',$data_user);
	}
}
?>