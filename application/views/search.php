<!DOCTYPE html>
<html>
<head>
	<title>大厨到家-搜索</title>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<base href="<?php echo base_url();?>application/" />
  	<meta name="description" content="">
  	<meta name="keywords" content="">
  	<!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="skin/img/LOGO-ug_03.png">
    <link rel="stylesheet" href="skin/css/amazeui.min.css">
    <link rel="stylesheet" type="text/css" href="skin/css/home.css">

</head>
<body class="bgcolor">
<div class="order_hd">
	<div class="header price_hd">
		<div class="center">
			<ul class="clear">
		        <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
		        <li><a href="<?=site_url('usercenter/personal');?>">我的订单</a></li>
		        <!-- <li><a href="<?=site_url('welcome/recommend');?>">我的大厨</a></li> -->
		        <li><a href="<?=site_url('welcome/help');?>">联系我们</a></li>
		        <li><a href="<?=site_url('shopcar/car');?>">购物篮</a></li>
		        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
			</ul>
		</div>
	</div>
	<div class="center clear">
		<form class="am-form fr index_search">
			<div class="am-form-group am-form-icon am-form-feedback">
				<input type="search" placeholder="搜索">
				<button type="submit" class="am-icon-search"></button>
			</div>
		</form>
	</div>
</div>
<div class="content">
	<div class="center">
          <!-- 指引 -->
          <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
          <li><a href="<?=site_url('welcome/add');?>">点菜</a></li>
          <li class="am-active">搜索结果</li>
        </ol>
		<div class="search_ctt">
		<!-- 搜索结果没有 -->
			<p class="am-text-center am-text-lg am-link-muted">没有搜到相关菜品！！</p>
		<!-- 搜索到的菜品 -->
			<ul class="am-avg-sm-5">
				<li>
					<div class="order-goods">
						<a href="<?=site_url('welcome/info');?>"><img src="skin/img/lc (1).jpg"></a>
						<div class="goods-info">
							<h1>鲜椒拌贡菜</h1>
							<p>推荐指数 <span class="index-num"><i></i></span></p>
							<div class="goods-price clear">
								<div class="goods-pl">
									<p><span>4.5</span> 评分</p>
									<div>价格： ￥<span>28.00</span> <i>/ 1份</i></div>
								</div>
								<div class="goods-pr">
									<a href="javascript:;"><i class="am-icon-opencart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="order-goods">
						<a href="<?=site_url('welcome/info');?>"><img src="skin/img/lc (2).jpg"></a>
						<div class="goods-info">
							<h1>韭香双仁</h1>
							<p>推荐指数 <span class="index-num"><i></i></span></p>
							<div class="goods-price clear">
								<div class="goods-pl">
									<p><span>4.5</span> 评分</p>
									<div>价格： ￥<span>32.00</span></div>
								</div>
								<div class="goods-pr">
									<a href="javascript:;"><i class="am-icon-opencart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="order-goods">
						<a href="<?=site_url('welcome/info');?>"><img src="skin/img/lc (3).jpg"></a>
						<div class="goods-info">
							<h1>炝拌凤尾</h1>
							<p>推荐指数 <span class="index-num"><i></i></span></p>
							<div class="goods-price clear">
								<div class="goods-pl">
									<p><span>4.5</span> 评分</p>
									<div>价格： ￥<span>22.00</span></div>
								</div>
								<div class="goods-pr">
									<a href="javascript:;"><i class="am-icon-opencart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="order-goods">
						<a href="<?=site_url('welcome/info');?>"><img src="skin/img/lc (4).jpg"></a>
						<div class="goods-info">
							<h1>泰式刺身虾</h1>
							<p>推荐指数 <span class="index-num"><i></i></span></p>
							<div class="goods-price clear">
								<div class="goods-pl">
									<p><span>4.5</span> 评分</p>
									<div>价格： ￥<span>88.00</span></div>
								</div>
								<div class="goods-pr">
									<a href="javascript:;"><i class="am-icon-opencart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="order-goods">
						<a href="<?=site_url('welcome/info');?>"><img src="skin/img/lc (7).jpg"></a>
						<div class="goods-info">
							<h1>田七拌桃仁</h1>
							<p>推荐指数 <span class="index-num"><i></i></span></p>
							<div class="goods-price clear">
								<div class="goods-pl">
									<p><span>4.5</span> 评分</p>
									<div>价格： ￥<span>38.00</span></div>
								</div>
								<div class="goods-pr">
									<a href="javascript:;"><i class="am-icon-opencart"></i></a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>








    <script src="skin/js/jquery.min.js"></script>


