<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

// 个人中心



class Usercenter extends CI_Controller 

{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}


	// 个人中心
    public function personal()
	{
		
		$this->load->view('usercenter/personalcenter');
		$this->load->view('footer');
	}

	// 我的订单
    public function myorder()
	{
		
		$this->load->view('usercenter/myOrder');
				$this->load->view('footer');

	}

	// 我的订单
    public function appraise()
	{
		
		$this->load->view('usercenter/appraise');
				$this->load->view('footer');

	}

	// 我的退款
    public function back()
	{
		
		$this->load->view('usercenter/moneyBack');
				$this->load->view('footer');

	}

	// 优惠券
    public function coupon()
	{
		
		$this->load->view('usercenter/coupon');
				$this->load->view('footer');

	}

	// 会员卡
    public function member()
	{
		
		$this->load->view('usercenter/member');
				$this->load->view('footer');

	}

	// 个人信息
    public function userInfo()
	{
		
		$this->load->view('usercenter/userInfo');
				$this->load->view('footer');

	}

	// 收货地址
    public function address()
	{
		
		$this->load->view('usercenter/address');
				$this->load->view('footer');

	}





}



?>