<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    
    public function contact_us(){
   
	

        $data = array();
 
        $data['cnt_name'] = $this->input->post('cnt_name',true);
        $data['cnt_email'] = $this->input->post('cnt_email',true);
        $data['cnt_msg'] = $this->input->post('cnt_msg',true);
        
        $this->db->insert('contact_info',$data);
 
     }
     public function buy_we(){
       
	//`buy_model`, `buy_name`, `buy_address`, `buy_number

        $data = array();
 
        $data['buy_model'] = $this->input->post('buy_model',true);
        $data['buy_name'] = $this->input->post('buy_name',true);
        $data['buy_address'] = $this->input->post('buy_address',true);
        $data['buy_number'] = $this->input->post('buy_number',true);

        $this->db->insert('buy_car',$data);
 
     }
   
}