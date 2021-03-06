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
    <link rel="stylesheet" type="text/css" href="skin/css/index.css">
</head>
<body>
<div class="banner">
    <div class="header">
        <a href="javascript:;"><img src="skin/img/log_logo.png"></a>
        <ul class="head-nav">
            <li><a href="<?=site_url('welcome/add');?>">点菜</a></li>
            <li><a href="<?=site_url('welcome/add#meal');?>">套餐</a></li>
            <li><a href="<?=site_url('order/custom');?>">宴会定制</a></li>
            <li><a href="<?=site_url('order/vegetable');?>">净菜</a></li>
            <li><a href="<?=site_url('welcome/price');?>">实时菜价</a></li>
            <!-- <li><a href="<?=site_url('welcome/recommend');?>">大厨推荐</a></li> -->
        </ul>
    </div>
</div>
<!-- 内容 -->
<div class="content">
  <div class="center">
    <div class="am-g">
        <div class="am-u-sm-6">
          <div class="zx_cx">
            <h2>最新促销</h2>
            <ul>
                <li>
                    <a href="<?=site_url('welcome/activity');?>" class="fix">
                        <span class="fl"><i class="am-icon-square"></i> 促销活动</span>
                        <span class="fr">2016-3-28</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('welcome/activity');?>" class="fix">
                        <span class="fl"><i class="am-icon-square"></i> 促销活动</span>
                        <span class="fr">2016-3-28</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('welcome/activity');?>" class="fix">
                        <span class="fl"><i class="am-icon-square"></i> 促销活动</span>
                        <span class="fr">2016-3-28</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('welcome/activity');?>" class="fix">
                        <span class="fl"><i class="am-icon-square"></i> 促销活动</span>
                        <span class="fr">2016-3-28</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('welcome/activity');?>" class="fix">
                        <span class="fl"><i class="am-icon-square"></i> 促销活动</span>
                        <span class="fr">2016-3-28</span>
                    </a>
                </li>
            </ul>
          </div>
        </div>
        <div class="am-u-sm-6">
            <div class="am-g">
              <div class="am-u-sm-7">
                <div class="ban-time">
                    <p>
                        营业时间：
                        <br/>
                         9:30—PM10:30
                    </p>
                    <span>TEL:028-0220-2454</span>
                </div>
              </div>
              <div class="am-u-sm-5">
                    <h2>热门销量</h2>
                  <ul class="cen-nav">
                      <li><a href="<?=site_url('order/info');?>">蓉记姜葱香辣蟹</a></li>
                      <li><a href="<?=site_url('order/info');?>">蓉记姜葱香辣蟹</a></li>
                      <li><a href="<?=site_url('order/info');?>">蓉记姜葱香辣蟹</a></li>
                      <li><a href="<?=site_url('order/info');?>">蓉记姜葱香辣蟹</a></li>
                      <li><a href="<?=site_url('order/info');?>">蓉记姜葱香辣蟹</a></li>
                      <li><a href="<?=site_url('order/info');?>">蓉记姜葱香辣蟹</a></li>
                  </ul>
              </div>
            </div>
            
        </div>
    </div>
    <div class="bfcp">
        <div class="am-g">
        <div class="am-u-sm-12"><h2>部分菜品</h2></div>
            
            <div class="am-u-sm-3">
                <a href="<?=site_url('order/info');?>">
                    <div class="bf_pic">
                        <img src="skin/img/home_pic_12.png">
                        <p>限量瘦肉牛排</p>
                    </div>
                </a>
            </div>
            <div class="am-u-sm-3">
                <a href="<?=site_url('order/info');?>">
                    <div class="bf_pic">
                        <img src="skin/img/home_pic_12.png">
                        <p>限量瘦肉牛排</p>
                    </div>
                </a>
            </div>
            <div class="am-u-sm-3">
                <a href="<?=site_url('order/info');?>">
                    <div class="bf_pic">
                        <img src="skin/img/home_pic_12.png">
                        <p>限量瘦肉牛排</p>
                    </div>
                </a>
            </div>
            <div class="am-u-sm-3">
                <a href="<?=site_url('order/info');?>">
                    <div class="bf_pic">
                        <img src="skin/img/home_pic_12.png">
                        <p>限量瘦肉牛排</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
  </div>
  <div class="footer">
    <p>成都市高新区天府二街蜀都中心3号楼&nbsp;&nbsp;&nbsp;Tel：400-800-8100&nbsp;&nbsp;&nbsp;Email：deeptime@qq.com</p>
    <p>&copy; 2012 成都可人软件有限公司&nbsp;&nbsp;&nbsp;蜀ICP备12007958号-1&nbsp;&nbsp;&nbsp;Powered By DeepTime</p>
</div>
</div>




<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
</body>
</html>