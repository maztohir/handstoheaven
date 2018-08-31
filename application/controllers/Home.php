<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
			parent::__construct();		
			$this->load->model('CampaignModel');
	}

	public function index()
	{
		$data['campaigns'] = $this->CampaignModel->read();
		$this->template->load('template','homepage',$data);
		//$this->template->load('Statis','Index');
	}

}