<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

// 特色服务



class Service extends CI_Controller 

{
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}

	// 庆典详情
    public function Ceremony()
	{
		
		$this->load->view('service/Ceremony');
		$this->load->view('footer');
	}

	// 庆典列表
    public function ceremonyType()
	{
		
		$this->load->view('service/ceremonyType');
		$this->load->view('footer');
	}

	// 伴餐
    public function elegance()
	{
		
		$this->load->view('service/elegance');
		$this->load->view('footer');
	}

	// 服务
    public function service()
	{
		
		$this->load->view('service/service');
		$this->load->view('footer');
	}

	// 服务详情
    public function lifeInfo2()
	{
		
		$this->load->view('service/lifeInfo2');
		$this->load->view('footer');
	}

	// 客服
    public function customServ()
	{
		
		$this->load->view('service/customServ');
		$this->load->view('footer');
	}






}



?>