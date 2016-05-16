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
    <link rel="stylesheet" type="text/css" href="skin/css/custom.css">
  </head>
  <body class="price_bg">
    <!-- header -->
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
    <!-- content -->
    <div class="content">
      <!-- center -->
      <div class="center">
        <div class="content-tit price_tit clear">
          <!-- 指引 -->
          <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
          <li><a href="<?=site_url('welcome/price');?>">菜价</a></li>
          <li class="am-active">菜价详情</li>
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
        <!-- 中间部分 -->
        <div class="c_middle pc_middle">
          <h3 class="am-margin-top-lg"><span>西兰花</span></h3>
          <p>三月</p>
          <script src="skin/js/Chart.js"></script>
          <div class="chart">
             <p class="unit">单位：元</p>
             <canvas id="myChart" width="800" height="400"></canvas>
             <br><br>
             <div class="am-u-lg-6 am-text-right">最高价格：<span class="am-icon-cny">5.7</span></div>
             <div class="am-u-lg-6 am-text-left">最低价格：<span class="am-icon-cny">3.6</span></div>
          </div>
          <script>
    //曲线图
    var data = {
        labels: ["11", "12", "13", "14","15", "16", "17", "18", "19", "20", "21","22"],
        datasets: [
            {//后面的曲线
                fillColor: "rgba(220,220,220,0.1)",//背景填充色，最后一个是透明度
                strokeColor: "rgba(220,220,220,1)",//曲线颜色
                pointColor: "rgba(220,220,220,1)",//点中心颜色
                pointStrokeColor: "#fff",//点边框颜色
                data: [5.0,4.4,4.8,3.6,5.7,3.6, 5.0, 4.9, 5.1, 5.1, 5.5, 4.0]//图表数据
            } 
        ]
    }
    var options = {//图表参数

        //Boolean - If we show the scale above the chart data
        scaleOverlay : false,

        //是否使用自定义格式
        scaleOverride : false,

        //** 当scaleOverride为true时必须要写下面三个值并且只有为true时下面三个值可用，默认都为NULL **
        //图表纵轴行数
        scaleSteps : 10,
        //图表纵轴单位长度
        scaleStepWidth : 1,
        //图表纵轴最小值
        scaleStartValue : 0,

        //坐标轴颜色
        scaleLineColor : "rgba(0,0,0,0.1",

        //坐标轴宽度
        scaleLineWidth : 2,

        //是否显示纵轴数值标记
        scaleShowLabels : true,

        //Interpolated JS string - can access value
        scaleLabel : "<%=value%>",

        //坐标轴字体
        scaleFontFamily : "'微软雅黑'",

        //坐标轴文字大小，单位为像素
        scaleFontSize : 16,

        //坐标轴字体的粗细,可能的值为normal、bold、bolder、lighter或100-900
        scaleFontStyle : "normal",

        //坐标轴文字颜色
        scaleFontColor : "rgba(0,0,0,0.4)",

        //是否显示网格线
        scaleShowGridLines : false,

        //网格线颜色
        scaleGridLineColor : "rgba(0,0,0,0)",

        //网格线宽度
        scaleGridLineWidth : 0,

        //连接线是否为曲线
        bezierCurve : true,

        //是否在线上显示点
        pointDot : true,

        //点半径，单位像素
        pointDotRadius : 3,

        //点外的环半径，单位像素
        pointDotStrokeWidth : 1,

        //Boolean - Whether to show a stroke for datasets
        datasetStroke : true,

        //线宽，单位像素
        datasetStrokeWidth : 2,

        //是否填充颜色
        datasetFill : false,

        //是否显示动画
        animation : true,

        //动画分多少步完成
        animationSteps : 60,

        //动画过度效果，具体值看Chart.js第494行
        animationEasing : "easeOutQuart",

        //动画进行中
        //onAnimationProgress: function(){},

        //动画结束后
        onAnimationComplete : null//function(){}
    };
    //Get the context of the canvas element we want to select
    var ctx = document.getElementById("myChart").getContext("2d");
    new Chart(ctx).Line(data,options);
</script>
        </div>
        <!-- 中间部分结束 -->
      </div>
    </div>
 
    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>
    <style>
    canvas{
    background:white;
    margin:auto;
    display:block;
    }
    </style>
  </body>
</html>