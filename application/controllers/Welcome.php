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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel', 'userModel');
		$this->load->model('productModel', 'productModel');
    }

	public function index()
	{
		if($this->input->post('email'))
		{
			$username = $this->input->post('email');
			
            $password=md5($this->input->post('password'));
			
			$login_query = $this->db->query("select * from users where email = '".$username."' and password = '".$password."'");
			// print_r($login_query);die;
			if($login_query->num_rows() > 0) 
			{
                // print_r("success");die;
				$user_row = $login_query->row();
		 		redirect(base_url('main'));
				
			}
			else 
			{
               
				 $this->session->set_flashdata('error', 'Incorrect login details.');
			}
		}
		$this->load->view('login.php');
	}

	public function list(){
		
		if($this->input->post()){
			$insertData=[];
			$insertData=$_POST['name'];
			$user = $this->userModel->userdata("",$insertData);
			// print_r($users_data);die;
		}else{
			$insertData=[];
			$user = $this->userModel->userdata("",$insertData);
		
		}
		$this->load->view('home/list.php',["users"=>$user]);
	}
	public function userAndProductAdd(){
		if($this->input->post()){
			$name=$this->input->post("name");
			$insertData=[];
			$insertData = $_POST;
			$users_id = $this->userModel->createUser($insertData);
			$insertData["userId"]=$users_id;
			$product = $this->productModel->createProduct($insertData);
		}
		$this->load->view('home/add.php');
	}
}
