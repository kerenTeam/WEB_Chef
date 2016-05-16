<?php  
defined('BASEPATH') OR exit('No direct script access allowed');



// 点菜


class Order extends CI_Controller 

{

	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}

	// 宴席
	function custom(){

		$this->load->view('order/custom');
		$this->load->view('footer');
	}

	// 宴席详情
	function partyInfo(){

		$this->load->view('order/partyInfo');
		$this->load->view('footer');
	}

	// 净菜
	function vegetable(){

		$this->load->view('order/vegetable');
		$this->load->view('footer');
	}

	// 点菜详情
	function info(){

		$this->load->view('order/foodInfo');
		$this->load->view('footer');
	}





}



?>