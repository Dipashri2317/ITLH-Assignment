<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function store_page10()
	{
		$this->load->view('page10');
	}

	public function page_9()
	{
		$this->load->view('Page_9');
	}

	public function page_2()
	{
		$this->load->view('page2');
	}
public function post_page10()
	{
		// Input Validation????????
		$errors = [];
		if($_POST['email'] == '') // if(empty($email))
		{
			$errors['email'] = "email is required.";
		}else{
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = "Please enter a valid email.";
			}else{
				$email = $this->test_inputs($_POST['email']);
			}			
		}
		
		// Check if errors is empty, else show them an error
		if(!empty($errors))
		{
			
			$this->session->set_flashdata('errors',$errors);
			redirect('/user/signup');
					}
		
		$data = [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'gender' => $gender,
			'DOB' => $DOB,
			'contact' => $contact,
			'email' => $email,
			'password' => $pass,
			'confirm_password' => $confirm_password,
			'address' => $address,
		];
		// Store values in DB
		$this->load->model('User_model');
		$isCreated = $this->User_model->store_user($data);
		if($isCreated){
			redirect('/user/signup');
		}
		
	}

}

