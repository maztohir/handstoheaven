<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Controller {

	public function index()
	{
		$this->load->view('zakat');
	}
}