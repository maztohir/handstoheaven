<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct(){
			parent::__construct();		
			$this->load->model('UserModel');
	}

	public function panel()
	{
		if ($this->session->userdata('islogin')==TRUE){
	      $this->template->load('template_panel','panel_user');
	    }else{
	      redirect('user/login');
	    }
	}
	
	public function logout(){
	    $this->session->sess_destroy();
	    redirect('home','refresh');
	}

	public function login()
	{
		if ($this->session->userdata('islogin')==TRUE){
	      redirect('home');
	    }else{
	      $this->template->load('template','login');
	    }
	}

	public function do_login(){
	  $email = $this->input->post('email');
	  $password = $this->input->post('password');
	  $cek = $this->UserModel->get_by_email_password($email, $password);

	  if (count($cek) > 0 ){
	    $this->session->set_userdata(array(
	            'islogin' => TRUE,
	            'email' => $email,
	    ));

	    redirect('home');
	  } else{
	    redirect('user/login');
	  }

	}		

   public function store()
   {
       $data = array(
           'name' => $this->input->post('name'),
           'password' => $this->input->post('password'),
           'email' => $this->input->post('email'),
           'phone' => $this->input->post('phone')      
       );

       $this->UserModel->create($data);

       redirect('home');
   }
}