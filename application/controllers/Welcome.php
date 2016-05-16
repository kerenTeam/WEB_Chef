<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index/welcome
	 *	- or -
	 * 		http://example.com/index/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	// 个人中心
    public function personalcenter()
	{
		$this->load->view('personalcenter');
	}
	// 点菜
	function add(){

		$this->load->view('order');
		$this->load->view('footer');
	}
	// 菜品详情
	function info(){

		$this->load->view('foodInfo');
	}
	// 实时菜价
	function price(){

		$this->load->view('price');
	}
	// 我的收藏
	function collection(){

		$this->load->view('collection');
	}
	// 我的余额
	function balance(){

		$this->load->view('balance');
	}
	//	点菜
	function order(){

		$this->load->view('order');
	}
	// 实时菜价
	function priceChart(){
		$this->load->view('priceChart');
	}
	
	// 商品评价
	function orderaps(){
		$this->load->view('orderaps');
	}
	// 主页
	function home(){
		$this->load->view('home');
	}
	// 大厨推荐
	function recommend(){
		$this->load->view('recommend');
	}
	// 活动页面
	function activity(){
		$this->load->view('activity');
		$this->load->view('footer');
	}
	// 换一换
	function exchange(){
		$this->load->view('exchange');
	}
	// 搜索
	function search(){
		$this->load->view('search');
		$this->load->view('footer');
	}
	// 帮助中心
	function help(){
		$this->load->view('help');
		$this->load->view('footer');
	}
}
