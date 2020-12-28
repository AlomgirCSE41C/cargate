<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
		// echo "ok";
	}
	// public function admin_login()
	// {
	// 	// $this->load->view('dashboard');
	// 	// echo "ok"; 
	// 	redirect('dashboard');
	// }


	public function dashboard(){
		$data = array();
		
		$data['content'] = $this->load->view('admin_pages/view_content','',true);
		$this->load->view('dashboard',$data);
	}
	public function manage_car(){
		$data = array();
		$this->load->model('admin_model');
		$data['all_car']=$this->admin_model->fetch_car_data();
		$data['content'] = $this->load->view('admin_pages/manage_car',$data,true);
		$this->load->view('dashboard',$data);
	}

	public function manage_contact(){
		$data = array();
		$this->load->model('admin_model');
		$data['all_contact']=$this->admin_model->fetch_contact_data();
		$data['content'] = $this->load->view('admin_pages/contact',$data,true);
		$this->load->view('dashboard',$data);
	}
	
	public function buy_car(){
		$data = array();
		$this->load->model('admin_model');
		$data['all_buy']=$this->admin_model->fetch_buy_data();
		$data['content'] = $this->load->view('admin_pages/buy_car',$data,true);
		$this->load->view('dashboard',$data);
	}

	public function add_car(){
		$data = array();
				
		$data['content'] = $this->load->view('admin_pages/add_car','',true);
		$this->load->view('dashboard',$data);
	}

	public function save_car(){
		$this->load->model('admin_model');
		$this->admin_model->save_car();
		redirect('add-car');
	}
	

	public function admin_login(){
        $admin_email=$this->input->post('admin_email',true);
        $admin_password= $this->input->post('admin_password',true);
        $this->load->model('admin_model');
        $result = $this->admin_model->admin_login_info($admin_email,$admin_password);
		$this->load->view('login');
       $sdata = array();
       if($result){
            $sdata['admin_id']=$result->admin_id;
            $sdata['admin_name']=$result->admin_name;
            $this->session->set_userdata($sdata);
            redirect('dashboard');
        }
        else{
            // echo "Your or Password Invalid";
            $sdata['logout_message']="Your Email or Password Invalid";
            $this->session->set_userdata($sdata);
            redirect('admin');
		}
		
		
	}
	
	public function admin_signup_form(){
        $this->load->view('home/signup');
	}
	
	public function admin_signup(){
		$data=array();
        $this->load->model('admin_model');
        $data['admin_signup_info'] = $this->admin_model->admin_signup_info();
        
		$this->session->set_userdata($sdata);
        redirect('admin');
	}

	public function delete_car($car_id){
		$this->load->model('admin_model');
        $this->admin_model->delete_car($car_id);
        redirect('manage-car');
	}

	

}
 