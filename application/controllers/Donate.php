<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donate extends CI_Controller {

	function __construct(){
			parent::__construct();		
			$this->load->model('CampaignModel');
	}

	public function index()
	{
		if ($this->session->userdata('islogin')==TRUE){
		  $data['campaigns'] = $this->CampaignModel->read();
	      $this->template->load('template','list_campaign',$data);
	    }else{
	      redirect('user/login');
	    }
		
	}

	public function from($short_name, $id) {
	    $id = $id/231 - 982398;
	    $data['campaign'] = $this->CampaignModel->get($short_name, $id);
	    $this->template->load('template','donate_campaign',$data);
	}
}