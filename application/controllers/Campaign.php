<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

	function __construct(){
			parent::__construct();		
			$this->load->model('CampaignModel');
      $this->load->helper('form');
	}
	
  public function index(){

      $data['campaigns'] = $this->CampaignModel->read();
      $this->template->load('template','list_campaign',$data); 
  }

  public function detail($short_name, $id) {
    $id = $id/231 - 982398;
    $data['campaign'] = $this->CampaignModel->get($short_name, $id);
    $this->template->load('template','detail_campaign',$data);
  }

   public function store()
   {
       // Tampung data dari form dalam asosiatif array
       $data = array(
           'judul' => $this->input->post('judul'),
           'target_dana' => $this->input->post('target_dana'),
           'tanggal_mulai' => $this->input->post('tanggal_mulai'),
           'tanggal_selesai' => $this->input->post('tanggal_selesai'),
           'kategori' => $this->input->post('kategori'),
           'lokasi_penerimaan' => $this->input->post('lokasi_penerimaan'),
           'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
           'deskripsi_lengkap' => $this->input->post('deskripsi_lengkap'),
           'penanggung_jawab' => $this->input->post('penanggung_jawab')
       );

       if ($this->Campaign->create($data)) {
           redirect('personal_dashboard');
       } else {
           redirect('create_campaign');
       }
   }

   public function create()
  {
    if ($this->session->userdata('islogin')==TRUE){
        $this->template->load('template','create_campaign');
  
      }else{
        /*$this->load->view('login');*/
        redirect('user/login');
      }
  }

}