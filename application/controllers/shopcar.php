<?php  
defined('BASEPATH') OR exit('No direct script access allowed');



// 点菜


class Shopcar extends CI_Controller 

{

	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}

	// 购物篮
	function car(){

		$this->load->view('shopcar/shopcar');
		$this->load->view('footer');
	}

	// 购物篮
	function defray(){

		$this->load->view('shopcar/defray');
		$this->load->view('footer');
	}

	// 支付成功
	function succeed(){

		$this->load->view('shopcar/succeed');
	}




}



?>