

<link href="skin/css/shopcar.css" rel="stylesheet">

	<!-- main -->
	<div class="main">
          <!-- 指引 -->
          <!-- <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
          <li><a href="<?=site_url('welcome/add');?>">点菜</a></li>
          <li class="am-active">购物车</li>
        </ol> -->
		<!-- biaoti -->
		<div class="biaoti">
			<a class="quanbu" href="javascript:;"><span>全部商品</span></a>
			<!-- <a href="javascript:;" style="color: #999">优惠商品</a> -->
		</div>
		<form id="youform">
		<!-- xuanze -->
		<div class="xuanze">
			<span class="xunze_left">
				<label class="am-checkbox am-danger cheall"><input type ="checkbox" name ="selected" value ="" class="cheyouall" data-am-ucheck  /></label>
				<a href="javascript:;">全选</a>
				<a href="javascript:;">项目</a>
			</span>
			<span class="xunze_right">
				<a href="javascript:;">价格</a>
				<a href="javascript:;">数量</a>
				<a href="javascript:;">小计</a>
			</span>
		</div>
		<!-- 商品详情 -->
		<div class="shangpinlist">
			<ul id="youul">
				<li><h4 class="am-text-primary">点菜</h4></li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<a href="<?=site_url('welcome/info');?>">
						<img src="skin/img/caipintu.jpg" alt="">
					</a>
					<span>
						<a href="<?=site_url('welcome/info');?>"><b>回锅肉，</b>口味独特,色泽红亮,肥而不腻入口浓香.简单搞定<br/> 身体必备营养物质</a>
					</span>
					<p class="p1">￥<span class="p1span">30.45</span></p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="p2">￥ <span class="p2span">0.00</span> </p>
					<a href="<?=site_url('welcome/exchange');?>">换一换</a>
					<a href="javascript:;" class="you_a">删除</a>
				</li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<a href="<?=site_url('welcome/info');?>">
						<img src="skin/img/caipintu.jpg" alt="">
					</a>
					<span>
						<a href="<?=site_url('welcome/info');?>"><b>回锅肉，</b>口味独特,色泽红亮,肥而不腻入口浓香.简单搞定<br/> 身体必备营养物质</a>
					</span>
					<p class="p1">￥<span class="p1span">30.45</span></p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="p2">￥ <span class="p2span">0.00</span> </p>
					<a href="<?=site_url('welcome/exchange');?>">换一换</a>
					<a href="javascript:;" class="you_a">删除</a>
				</li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<a href="<?=site_url('welcome/info');?>">
						<img src="skin/img/caipintu.jpg" alt="">
					</a>
					<span>
						<a href="<?=site_url('welcome/info');?>"><b>回锅肉，</b>口味独特,色泽红亮,肥而不腻入口浓香.简单搞定<br/> 身体必备营养物质</a>
					</span>
					<p class="p1">￥<span class="p1span">30.45</span></p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="p2">￥ <span class="p2span">0.00</span> </p>
					<a href="<?=site_url('welcome/exchange');?>">换一换</a>
					<a href="javascript:;" class="you_a">删除</a>
				</li>
				<li><h4 class="am-text-primary">套餐</h4></li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<a href="<?=site_url('welcome/info');?>">
						<img src="skin/img/caipintu.jpg" alt="">
					</a>
					<span>
						<a href="<?=site_url('welcome/info');?>"><b>回锅肉，</b>口味独特,色泽红亮,肥而不腻入口浓香.简单搞定<br/> 身体必备营养物质</a>
					</span>
					<p class="p1">￥<span class="p1span">30.45</span></p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="p2">￥ <span class="p2span">0.00</span> </p>
					<a href="javascript:;" class="you_a">删除</a>
				</li>
				<li><h4 class="am-text-primary">服务员</h4></li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input id="fuwuyuan" class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<a href="javascript:;" class="waiter">
						<img src="skin/img/caipintu.jpg" alt="">
					</a>
					<span>
						<!-- <a href="<?=site_url('welcome/info');?>"><b>回锅肉，</b>口味独特,色泽红亮,肥而不腻入口浓香.简单搞定<br/> 身体必备营养物质</a> -->
						 正式开餐前，按照领班安排认真做好桌椅、餐厅卫生，餐厅铺台，准备好各种用品，确保正常营业使用
					</span>
					<p class="p1">￥<span class="p1span">30.45</span></p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="p2">￥ <span class="p2span">0.00</span> </p>
					<a href="javascript:;" class="you_a">删除</a>					
				</li>
			</ul>
			<!-- 结算 -->
			<div class="jiesuan">
				<p class="p3 service"><span style="color: #999">服务费 :</span> ￥<span id="service">60.00</span></p>
				<p class="p3"><span style="color: #000">合计：</span>￥<span id="p3span">0.00</span></p>
				<p>
				<!-- <input type="submit" value="去付款" class="am-btn am-btn-danger am-radius" /> -->
				<a href="<?=site_url('shopcar/defray');?>" class="am-btn am-btn-danger am-radius">去付款</a>
				</p>
			</div>
		</div>
		</form>
		<!-- 购买人信息 -->
		<!-- <div class="peoplexinxi">
			<form class="am-form">
				<p>
					<span class="xinxi_span">收货人姓名</span><input type="text" name="shname" />
				</p>
				<p>
					<span class="xinxi_span">手机号码</span><input type="text" name="sjname" />
				</p>
				<p>
					<span class="xinxi_span">详细地址</span><textarea></textarea> 
				</p>
				<div>
					<label class="am-checkbox am-danger"><input type="checkbox"  data-am-ucheck> 设置为默认地址</label>
					<input type="submit" value="保存" class="am-btn am-btn-danger am-radius" />
				</div>
			</form>
		</div> -->

	</div>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/shopcar.js"></script>
