<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authCont extends CI_Controller {

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect('authCont/login','refresh');
	}
	
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]'); //password should has more than 5 character

		//check fot validation
		if ($this->form_validation->run() == TRUE){

			$username = $_POST['username'];
			$password = md5($_POST['password']);

			//check username in database
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(['username'=>$username, 'password' => $password]);
			$query = $this->db->get();
			$user = $query->row();

			//if user exist or not null
			if ($user != null){
				
				//set variables which can used for parameter
				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['email'] = $user->email;

				//redirect to profile page if success
				redirect("userCont/dashboardview", "refresh");
			}
			
			else{
				$this->session->set_flashdata("error", "Username or password is incorrect");
				redirect('authCont/login','refresh');
			}
		}

		$this->load->view('loginView');
	}
	
	public function register(){

		//this for validation
		if (isset($_POST['register'])){
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			//this bellow is for check password with confirmation password
			$this->form_validation->set_rules('confirmpassword', 'confirm password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
						

			//if form validation true
			if ($this->form_validation->run() == TRUE){
				echo 'form validated';

				
			//add user in database
			$data = [
				'username'=>$_POST['username'],
				'email'=>$_POST['email'],
				// 'password'=>$_POST['password'],
				'password'=>md5($_POST['password']), //translate this password into token in database
				'gender'=>$_POST['gender'],
				'create_at'=>date('Y-m-d'),
				'phone'=>$_POST['phone'],
			];

			//data will insert to table users
			$this->db->insert('users', $data);

			$this->session->set_flashdata('success', 'Your account has been registered. You can login now');
			redirect("authCont/login", "refresh");
			
			}
		}

		$this->load->view('registerView');
	}
}
