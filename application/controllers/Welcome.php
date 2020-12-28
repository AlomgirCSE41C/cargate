<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$data = array();
		$data['content'] = $this->load->view('home/main_content','',true);
		$this->load->view('home',$data);
	}
	public function car()
	{
		$data = array();
		$this->load->model('admin_model');
		$data['car_info'] = $this->admin_model->car_info();
		$data['content'] = $this->load->view('home/car_list',$data,true);
		$this->load->view('home',$data);
	}
	public function about()
	{
		$data = array();
		$data['content'] = $this->load->view('home/about','',true);
		$this->load->view('home',$data);
	}
	public function contact()
	{
		$data = array();
		$data['content'] = $this->load->view('home/contact_page','',true);
		$this->load->view('home',$data);
	}

	

	public function contact_us(){
		$data = array();
        $this->load->model("Main_model");
        $data['contact_us'] = $this->Main_model->contact_us();

        // $savedata["msg"] = "Contact Success";
        // $this->session->set_userdata($savedata);
        redirect('contact-page');
	}


	public function buy_we(){
		$data = array();
        $this->load->model("Main_model");
        $data['buy_we'] = $this->Main_model->buy_we();

        // $savedata["msg"] = "Contact Success";
        // $this->session->set_userdata($savedata);
        redirect('buy-page');
	}

	public function buy()
	{
		$data = array();
		$data['content'] = $this->load->view('home/buy','',true);
		$this->load->view('home',$data);
	}

	public function buy_us(){
		$data = array();
        $this->load->model("Main_model");
		$data['buy_us'] = $this->Main_model->buy_us();
		
		redirect('buy-page');
        
	}
}
