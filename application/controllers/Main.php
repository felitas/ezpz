<?php 


	class Main extends CI_Controller{

		public function index(){
			$this->load->view('logins/login_user');
		}

		public function signup(){
			$this->load->view('logins/signup_form');
		}

		public function signup_submit(){
			
		}

	}

 ?>