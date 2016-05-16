<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// 登录+注册控制器

class Login extends CI_Controller {

	public function  __construct(){
		parent::__construct();

	}

	// 登录
	function index(){

		$this->load->view('login/login');
	}
	// 注册
	function register(){

		$this->load->view('login/register');
	}

	// 忘记密码
	function forget(){
		$this->load->view('login/forgetpsw');
	}

}
 ?>