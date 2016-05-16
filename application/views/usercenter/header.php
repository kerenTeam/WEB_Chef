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
<body>
<div class="header">
    <div class="center">
      <ul class="clear">
        <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
        <li><a href="<?=site_url('welcome/personal');?>">我的订单</a></li>
        <!-- <li><a href="<?=site_url('welcome/recommend');?>">我的大厨</a></li> -->
        <li><a href="<?=site_url('welcome/help');?>">联系我们</a></li>
        <li><a href="<?=site_url('welcome/car');?>">购物篮</a></li>
        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
      </ul>
    </div>
  </div>
  <div class="content">
        <div class="content-tit clear">
          <!-- 指引 -->
        <div class="center">
          <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
          <li class="am-active">个人中心</li>
        </ol>
        <ul class="clear">
                <li><a href="<?=site_url('welcome/add');?>">点菜</a></li>
                <li><a href="<?=site_url('welcome/custom');?>">宴席</a></li>
                <li><a href="<?=site_url('welcome/vegetable');?>">净菜</a></li>
                <li><a href="javascript:;">特色服务 <i class="am-icon-sort-desc"></i></a>
                  <div class="subMenu">
                    <a href="<?=site_url('welcome/service');?>" title="">服务</a>
                    <a href="<?=site_url('welcome/elegance');?>" title="">伴餐</a>
                    <a href="<?=site_url('service/ceremonyType');?>" title="">庆典</a>
                    <a href="<?=site_url('welcome/price');?>" title="">菜价</a>
                  </div>
                </li>
        </ul>
        </div>
        </div>