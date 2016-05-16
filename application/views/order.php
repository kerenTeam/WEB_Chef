<!DOCTYPE html>
<html>
<head>
	<title>大厨到家</title>
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
		<p class="index_address">当前位置：成都市蜀都中心</p>
		<form class="am-form fr index_search">
			<div class="am-form-group am-form-icon am-form-feedback">
				<input type="search" placeholder="搜索">
				<button type="submit" class="am-icon-search"></button>
			</div>
		</form>
	</div>
</div>
	<div class="content">
	<div class="content-tit">
		<div class="center clear">
		<!-- 指引 -->
				<ol class="am-breadcrumb am-margin-bottom-0">
					<li><a href="<?=site_url('welcome/home');?>">首页</a></li>
					<li class="am-active">点菜</li>
				</ol>
				<ul class="clear">
	                <li><a href="<?=site_url('welcome/add');?>">点菜</a></li>
	                <li><a href="<?=site_url('order/custom');?>">宴席</a></li>
	                <li><a href="<?=site_url('order/vegetable');?>">净菜</a></li>
	                <li><a href="javascript:;">特色服务 <i class="am-icon-sort-desc"></i></a>
	                  <div class="subMenu">
	                    <a href="<?=site_url('service/service');?>" title="">服务</a>
	                    <a href="<?=site_url('service/elegance');?>" title="">伴餐</a>
	                    <a href="<?=site_url('service/ceremonyType');?>" title="">庆典</a>
	                    <a href="<?=site_url('welcome/price');?>" title="">菜价</a>
	                  </div>
	                </li>
        		</ul>
			</div>
		</div>
		<div class="center">
			
			<div class="content-nav">
				<nav class="scrollspy-nav" data-am-scrollspy-nav="{offsetTop: 45}" data-am-sticky>
				<ul class="clear">
					<li><a class="active" href="#cold">凉菜</a></li>
					<li><a href="#hot">热菜</a></li>
					<li><a href="#soup">汤</a></li>
					<li><a href="#snack">小吃</a></li>
					<li><a href="#ycb">燕鲍翅</a></li>
					<li><a href="#seafood">海河鲜</a></li>
					<li><a href="#meal">套餐</a></li>
				</ul>
				</nav>
			</div>
			<div class="order-goods">
				<h2 id="cold">凉菜</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/lc (1).jpg"></a>
							<div class="goods-info">
								<h1>鲜椒拌贡菜</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>28.00</span> <i>/ 1份</i></div>
									</div>
									<div class="goods-pr">
										<!-- 已加入购物车样式 -->
										<a href="javascript:;" class="joined"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/lc (2).jpg"></a>
							<div class="goods-info">
								<h1>韭香双仁</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>32.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/lc (3).jpg"></a>
							<div class="goods-info">
								<h1>炝拌凤尾</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>22.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/lc (4).jpg"></a>
							<div class="goods-info">
								<h1>泰式刺身虾</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>88.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/lc (7).jpg"></a>
							<div class="goods-info">
								<h1>田七拌桃仁</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>38.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<h2 id="hot">热菜</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/rc (1).jpg"></a>
							<div class="goods-info">
								<h1>蓉记姜葱香辣蟹</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>168.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/rc (2).jpg"></a>
							<div class="goods-info">
								<h1>渝记精品毛血旺</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>58.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/rc (3).jpg"></a>
							<div class="goods-info">
								<h1>烂肉豇豆</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>28.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<h2 id="soup">汤</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/t (1).jpg"></a>
							<div class="goods-info">
								<h1>金银萝卜炖排骨</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>48.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/t (2).jpg"></a>
							<div class="goods-info">
								<h1>清炖滋补甲鱼汤</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>88.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/t (3).jpg"></a>
							<div class="goods-info">
								<h1>松茸乳鸽盅</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>12.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
				<h2 id="snack">小吃</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/xc (1).jpg"></a>
							<div class="goods-info">
								<h1>寿桃</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>28.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/xc (2).jpg"></a>
							<div class="goods-info">
								<h1>瓜仁香芋饼</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>28.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/xc (3).jpg"></a>
							<div class="goods-info">
								<h1>鲜木瓜千层酥</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>48.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<h2 id="ycb">燕翅鲍</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/ybc (1).jpg"></a>
							<div class="goods-info">
								<h1>红花汁扣辽参</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>208.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/ybc (2).bmp"></a>
							<div class="goods-info">
								<h1>清汤竹荪炖血燕</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>388.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/ybc (3).jpg"></a>
							<div class="goods-info">
								<h1>清汤竹荪炖血燕</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>888.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
				<h2 id="seafood">海河鲜</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/hhx (1).jpg"></a>
							<div class="goods-info">
								<h1>泰式涮多宝</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>188.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/hhx (2).jpg"></a>
							<div class="goods-info">
								<h1>双椒多宝鱼</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>128.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/hhx (3).jpg"></a>
							<div class="goods-info">
								<h1>清蒸鲈鱼</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>68.00</span></div>
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
							<a href="<?=site_url('order/info');?>"><img src="skin/img/hhx (4).jpg"></a>
							<div class="goods-info">
								<h1>豉椒江团</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>88.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<h2 id="meal">日常套餐</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/rctc1.jpg"></a>
							<div class="goods-info">
								<h1>589系列</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>589.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<h2>婚宴套餐</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/hytc1.jpg"></a>
							<div class="goods-info">
								<h1>1314系列</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>1314.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<h2>寿宴套餐</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/sytc1.jpg"></a>
							<div class="goods-info">
								<h1>1086系列</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>1086.00</span></div>
									</div>
									<div class="goods-pr">
										<a href="javascript:;"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<h2>团拜宴套餐</h2>
				<ul class="am-avg-sm-5">
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info');?>"><img src="skin/img/tbytc1.jpg"></a>
							<div class="goods-info">
								<h1>899系列</h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格：￥<span>899.00</span></div>
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
