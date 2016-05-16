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
    <link rel="stylesheet" type="text/css" href="skin/css/login.css">
</head>
<body>
<div class="logMain">
  <div class="logHead">
      <a href="<?=site_url('welcome/home');?>">
          <img src="skin/img/log_logo.png">
      </a>
  </div>
  <div class="reg_content">
        <h1>使用手机注册</h1>
        <div class="reg_form">
            <form class="am-form am-form-horizontal reg_sbm">
              <div class="am-g">
              <div class="am-u-sm-7">
                    <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                        <div class="yz_ts"></div>
                      </div>
                    </div>
                    <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">手机号码</label>
                      <div class="am-u-sm-9">
                        <input type="text" id="phone" placeholder="请输入你的手机号">
                      </div>
                    </div>
                    <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">手机验证码</label>
                      <div class="am-u-sm-9">
                        <input type="text" placeholder="输入验证码" id="phone" class="reg_yz reg_yz_tex" style="width: 60%;float: left;">
                        <input type="button" id="yzm_bt" class="am-btn am-btn-default reg_yz reg_yz_btn" value="获取验证码" style="width: 38%;margin-left: 2%" />
                      </div>
                    </div>
                    <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">设置密码</label>
                      <div class="am-u-sm-9">
                        <input type="password" id="password" placeholder="密码长度6~20个字符">
                      </div>
                    </div>

                    <div class="am-form-group">
                      <div class="am-u-sm-offset-3 am-u-sm-9">
                        <div class="checkbox">
                          <label class="am-checkbox am-danger reg_cheb">
                              <input type="checkbox" class="reg_check" data-am-ucheck checked />
                              我已阅读并同意 <a href="javascript:;">《大厨到家》</a>用户手册
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                        <button type="submit" class="am-btn am-btn-danger am-radius log_btn">同意协议并注册</button>
                      </div>
                    </div>
              </div>
              <div class="am-u-sm-4">
                    <div class="reg_r">
                        <h1>已经注册过？</h1>
                        <p>请点击<a href="<?=site_url('login/index');?>">直接登录</a></p>
                        <h2>可以使用以下账号直接登录</h2>
                        <div>
                              <a href="javascript:;" class="am-icon-btn am-primary am-icon-qq" onclick="notLogin();">
                            </a>
                            <a href="javascript:;" class="am-icon-btn am-success am-icon-weixin" onclick="notLogin();">
                            </a>
                        </div>
                    </div>
              </div>
              </div>
            </form>
        </div>
  </div>
  <div class="logFoot">
      <ul>
          <li><a href="javascript:;">在线客服</a></li>
          <li><a href="javascript:;">服务协议</a></li>
          <li><a href="javascript:;">反馈我们</a></li>
      </ul>
      <p>
        增值电信业务许可证 : 沪B2-20150033 | 沪ICP备 09007032 | 上海工商行政管理 Copyright ©2008-2015 ele.me, All Rights Reserved. 
      </p>
  </div>
</div>

<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script type="text/javascript" src="skin/js/register.js"></script>
</body>
</html>