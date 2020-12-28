<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model{

    public function save_car(){
        $data['manage_name'] = $this->input->post('manage_name',true);
        $data['manage_model'] = $this->input->post('manage_model',true);
        $data['manage_myear'] = $this->input->post('manage_myear',true);
        $data['manage_transmission'] = $this->input->post('manage_transmission',true);
        $data['manage_location'] = $this->input->post('manage_location',true);
        $data['manage_mileage'] = $this->input->post('manage_mileage',true);
        $data['price'] = $this->input->post('price',true);

        $sdata = array();
                $error ="";
                $config['upload_path'] = 'images/carpic/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '1000000';
                $config['width'] = '3000';
                $config['height'] = '3000';
                $this->load->library('upload',$config);

                if (!$this->upload->do_upload('car_img')) {
                    $error = $this->upload->display_errors();
        
                } 
                else {
                    $sdata =  $this->upload->data();
                    $data['car_img'] = $config['upload_path'].$sdata['file_name'];
                }
        $this->db->insert('manage_car',$data);
    }

    public function fetch_car_data(){
        $this->db->select('*');
        $this->db->from('manage_car');
        $query = $this->db->get();
        $car = $query->result();
        return $car;
    }
    public function fetch_buy_data(){
        $this->db->select('*');
        $this->db->from('buy_car');
        $query = $this->db->get();
        $car = $query->result();
        return $car;
    }

    public function fetch_contact_data(){
        $this->db->select('*');
        $this->db->from('contact_info');
        $query = $this->db->get();
        $cnt = $query->result();
        return $cnt;
    }
    public function car_info(){
		$this->db->select('*');
		$this->db->from('manage_car');
		$query = $this->db->get();
		$res = $query->result();
		return $res;

    }
    

    public function admin_login_info($admin_email,$admin_password){
        $this->db->select('*');
        $this->db->from('admin_info');
        $this->db->where('admin_email',$admin_email);
        $this->db->where('admin_password',$admin_password);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }


    public function admin_signup_info(){

        
        $data = array();


        $data['admin_name'] = $this->input->post('admin_name',true);
       
        $data['admin_email'] = $this->input->post('admin_email',true);
        $data['admin_password'] = $this->input->post('admin_password',true);
        
        $this->db->insert('admin_info',$data);

    }

    public function delete_car($car_id){
        $this->db->where('manage_id', $car_id);
        $this->db->delete('manage_car');
    }
    public function count_car(){
        $this->db->SELECT('*');
        $this->db->FROM('manage_car');
        $query_result = $this->db->get();
        $car =$query_result->num_rows();
        return $car;
    }

}