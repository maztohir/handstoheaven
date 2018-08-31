<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CampaignModel extends CI_Model{


	public function read(){
		$campaigns = $this->db->get('campaigns');
		return $campaigns;
	}

    public function read_on($number,$offset){
        return $campaigns = $this->db->get('campaigns',$number,$offset);    
    }

    //menghitung jumlah data di database
    public function count(){
        return $campaigns = $this->db->get('campaigns')->num_rows();
    }
		 
    public function create($data)
    {
    	$campaign = $this->db->insert('campaigns', $data);
        return $campaign;
    }
 
    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        $campaign = $this->db->get('campaigns');
        return $campaign->row();
    }
    public function get($short_name, $id)
    {
        $where = array('id' => $id, 'short_name' => $short_name);
        $this->db->where($where);
        $campaign = $this->db->get('campaigns');
        return $campaign->row();
    }
 
    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('campaigns', $data);
    }
 
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('campaigns');
    }


}