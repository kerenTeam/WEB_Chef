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
		$this->load->view('welcome_message.html');
	}
	// 个人中心
    public function personalcenter()
	{
		$this->load->view('personalcenter.html');
	}
	// 点菜
	function add(){

		$this->load->view('order.html');
	}
	// 菜品详情
	function info(){

		$this->load->view('foodInfo.html');
	}
	// 个人中心
	function personal(){

		$this->load->view('personalcenter.html');
	}
	// 购物篮
	function car(){

		$this->load->view('shopcar.html');
	}
	// 登录
	function login(){

		$this->load->view('login.html');
	}
	// 注册
	function register(){

		$this->load->view('register.html');
	}
	// 宴会定制
	function custom(){

		$this->load->view('custom.html');
	}
	// 实时菜价
	function price(){

		$this->load->view('price.html');
	}
	// 我的收藏
	function collection(){

		$this->load->view('collection.html');
	}
	// 我的订单
	function myorder(){

		$this->load->view('myOrder.html');
	}
	// 我的退款
	function back(){

		$this->load->view('moneyBack.html');
	}
	// 我的余额
	function balance(){

		$this->load->view('balance.html');
	}
	// 会员卡
	function member(){

		$this->load->view('member.html');
	}
	// 优惠券
	function coupon(){

		$this->load->view('coupon.html');
	}
	// 收货地址
	function address(){

		$this->load->view('address.html');
	}
	//	点菜
	function order(){

		$this->load->view('order.html');
	}
	//个人信息
	function userInfo(){
		$this->load->view('userInfo.html');
	}
	// 支付
	function defray(){
		$this->load->view('defray.html');
	}
	// 实时菜价
	function priceChart(){
		$this->load->view('priceChart.html');
	}
	// 购买成功
	function succeed(){
		$this->load->view('succeed.html');
	}
	// 忘记密码
	function forget(){
		$this->load->view('forgetpsw.html');
	}
	// 我的评价
	function appraise(){
		$this->load->view('appraise.html');
	}
	// 商品评价
	function orderaps(){
		$this->load->view('orderaps.html');
	}
	// 主页
	function home(){
		$this->load->view('home.html');
	}
	// 大厨推荐
	function recommend(){
		$this->load->view('recommend.html');
	}
	// 活动页面
	function activity(){
		$this->load->view('activity.html');
	}
	// 换一换
	function exchange(){
		$this->load->view('exchange.html');
	}
	// 搜索
	function search(){
		$this->load->view('search.html');
	}
	// 帮助中心
	function help(){
		$this->load->view('help.html');
	}
}
