

		<link href="skin/css/city.css" rel="stylesheet" type="text/css" />
	    <style type="text/css">
	        .infolist .liststyle span{
	          width: 30%;
	        }
	        .liststyle>span>i{
	          color: #494949;
	        }
	    </style>
<div class="center">
				<div class="defray">
					<h1>订单支付</h1>
					<form class="am-form am-form-horizontal pay">
						<table class="am-table defr_tab middle">
							<thead>
								<tr>
									<th>菜品</th>
									<th>单价</th>
									<th>数量</th>
									<th>总价</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><div class="defr_tit">尖椒回锅肉，营养最佳搭配</div></td>
									<td>￥ <span class="price">30.25</span></td>
									<td><div class="jiajian">
										<!-- <img class="jian" src="skin/img/jian.png"> -->
										<input class="shuzhi" value="3" readonly>
										<!-- <img class="jia" src="skin/img/jia.jpg"> -->
									</div>
								</td>
								<td class="defr_sum">￥ <span class="total">30.25</span></td>
							</tr>
							<tr>
								<td><div class="defr_tit">尖椒回锅肉，营养最佳搭配</div></td>
								<td>￥ <span class="price">30.34</span></td>
								<td><div class="jiajian">
									<!-- <img class="jian" src="skin/img/jian.png"> -->
									<input class="shuzhi" value="5" readonly>
									<!-- <img class="jia" src="skin/img/jia.jpg"> -->
								</div>
							</td>
							<td class="defr_sum">￥ <span class="total">30.34</span></td>
						</tr>
					</tbody>
				</table>
				<!-- <div class="defr_info clear">
						<p>您的手机</p>
						<div class="defr_shouji">
								<p>收单请先验证手机号</p>
								<div class="am-form-group">
								<label class="am-u-sm-2 am-form-label">手机号：</label>
								<div class="am-u-sm-10">
									<input type="text" placeholder="手机号" id="phone" required>
									<div class="prompt"></div>
								</div>
							</div>
							<div class="am-form-group">
								<div class="am-u-sm-offset-2 am-u-sm-10">
									<div class="checkbox">
												<input type="button" class="am-btn am-btn-default" id="yzm_bt" value="获取手机动态码" />
									</div>
								</div>
							</div>
							<div class="am-form-group">
								<label class="am-u-sm-2 am-form-label">验证码：</label>
								<div class="am-u-sm-10">
									<input type="text" placeholder="验证码">
								</div>
							</div>
						</div>
				</div> -->
				<div class="defr_info clear">
						<p>选择支付方式</p>
						<div class="payment">
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck> Apple Pay
								</label> 
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck> 微信支付
								</label>
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck> 支付宝支付
								</label>
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck checked> 线下支付
								</label>
						</div>
				</div>
				<div class="defr_info clear">
					<p>服务地址 <a href="javascript:;" class="fr" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 800}">添加地址</a></p>
					<div class="payment">
						<table class="am-table am-table-striped am-table-hover myback">
							<thead>
								<tr>
									<th> </th>
									<th>收货人</th>
									<th>所在地区</th>
									<th>详细地址</th>
									<th>手机</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<label class="am-radio am-danger">
											<input type="radio" name="radio3" value="" data-am-ucheck checked>
										</label>
									</td>
									<td>张某某</td>
									<td>成都金牛区</td>
									<td>西安路街道20街道某某巷子</td>
									<td>15608097597</td>
									<td class="adr_cz"><a href="javascript:;" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 800}">修改</a>/<a href="javascript:;">删除</a></td>
								</tr>
								<tr>
									<td>
										<label class="am-radio am-danger">
											<input type="radio" name="radio3" value="" data-am-ucheck>
										</label>
									</td>
									<td>张某某</td>
									<td>成都金牛区</td>
									<td>西安路街道20街道某某巷子</td>
									<td>15608097597</td>
									<td class="adr_cz"><a href="javascript:;" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 800}">修改</a>/<a href="javascript:;">删除</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="home_buy">
					<p><span>优惠方式</span></p>
					<!-- <label class="am-checkbox am-danger xz_yhj">
						<input type="checkbox" value="" data-am-ucheck> <p><img src="skin/img/xzzf_03.png">您有三张饭票可用</p>
					</label> -->
					<div class="payment">
						<div class="am-panel-group" id="accordion">
							<div class="am-panel am-panel-default">
								<div class="am-panel-hd">
									<h4 class="am-panel-title" data-am-collapse="{target: '#do-not-say-1'}">
									使用饭票
									</h4>
								</div>
								<div id="do-not-say-1" class="am-panel-collapse am-collapse">
									<div class="am-panel-bd">
										<ul class="am-avg-sm-4 defray_cart">
											<li>
												<label class="am-checkbox am-danger">
													<input type="radio" name="conpon" value="" data-am-ucheck>
													<div class="coupon_bg coupon_pic1">
														<h1>￥<span>5</span></h1>
														<p>菜品: 套餐系列</p>
														<p>使用条件: 满30.00</p>
														<p>有效时间: 2016.3.21-2016.3.24</p>
													</div>
												</label>
												
											</li>
											<li>
												<label class="am-checkbox am-danger">
													<input type="radio" name="conpon" value="" data-am-ucheck>
													<div class="coupon_bg coupon_pic1">
														<h1>￥<span>5</span></h1>
														<p>菜品: 套餐系列</p>
														<p>使用条件: 满30.00</p>
														<p>有效时间: 2016.3.21-2016.3.24</p>
													</div>
												</label>
											</li>
											<li>
												<label class="am-checkbox am-danger">
													<input type="radio" name="conpon" value="" data-am-ucheck>
													<div class="coupon_bg coupon_pic1">
														<h1>￥<span>5</span></h1>
														<p>菜品: 套餐系列</p>
														<p>使用条件: 满30.00</p>
														<p>有效时间: 2016.3.21-2016.3.24</p>
													</div>
												</label>
											</li>
										</ul>
										
									</div>
								</div>
							</div>
							<div class="am-panel am-panel-default">
								<div class="am-panel-hd">
									<h4 class="am-panel-title" data-am-collapse="{target: '#do-not-say-2'}">
									使用积分
									</h4>
								</div>
								<div id="do-not-say-2" class="am-panel-collapse am-collapse">
									<div class="am-panel-bd">
										<label class="am-checkbox am-danger">
											<input type="checkbox" name="conpon" value="" data-am-ucheck>
											<span class="am-text-danger">使用200积分可抵￥30</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<!-- <ul class="am-avg-sm-5">
							<li>
								<div class="coupon_bg coupon_pic1">
									<h1>￥<span>5</span></h1>
									<p>菜品: 套餐系列</p>
									<p>使用条件: 满30.00</p>
									<p>有效时间: 2016.3.21-2016.3.24</p>
								</div>
								
							</li>
							<li>
								<div class="coupon_bg coupon_pic1">
									<h1>￥<span>5</span></h1>
									<p>菜品: 套餐系列</p>
									<p>使用条件: 满30.00</p>
									<p>有效时间: 2016.3.21-2016.3.24</p>
								</div>
								
							</li>
							<li>
								<div class="coupon_bg coupon_pic1">
									<h1>￥<span>5</span></h1>
									<p>菜品: 套餐系列</p>
									<p>使用条件: 满30.00</p>
									<p>有效时间: 2016.3.21-2016.3.24</p>
								</div>
								
							</li>
						</ul> -->
					</div>
				</div>
				<p class="defr_he">应付金额: <span>￥<i id="sum">60.59</i></span></p>
				<p class="txt-r ord_buy">
					<!-- <input type="submit" value="付款" class="am-btn am-btn-danger am-radius big-btn" /> -->
					<a href="<?=site_url('shopcar/succeed');?>" class="am-btn am-btn-danger am-radius big-btn">付款</a>
					<br/>
					<a href="<?=site_url('shopcar/car');?>">返回修改订单</a>
				</p>
			</form>
		</div>
	</div>
<!-- 添加地址弹出框 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
	<div class="am-modal-dialog">
		<div class="am-modal-hd txt-l"> <b>添加地址</b>
			<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
		</div>
		<div class="am-modal-bd">
			<form class=" am-form clear phone_yz">
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 姓名</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="text" required />
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 所在地区</label>
					<div class="am-u-sm-9 txt-l">
						<div class="demo">
                            <div class="infolist">
                              <div class="liststyle">
                                <span id="Province" style="display:none;">
                                  <i>请选择省份</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Province" value="请选择省份">
                                </span>
                                <span id="City">
                                  <i>请选择城市</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_City" value="请选择城市">
                                </span>
                                <span id="Area">
                                  <i>请选择地区</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Area" value="请选择地区" >
                                </span>
                                <span id="Insurer">
                                  <i>请选择乡镇街道</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                                </span>
                              </div>
                            </div>
                          </div>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 详细地址</label>
					<div class="am-u-sm-9 txt-l">
						<textarea rows="5" required></textarea>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 手机号</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="tel" required class="phone" />
						<span></span>
					</div>
				</div>
				<div class="am-form-group">
					<div class="am-u-sm-9 am-u-sm-offset-3 txt-l">
						<button type="submit" class="am-btn am-btn-secondary">保存</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- 修改地址弹出框 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
	<div class="am-modal-dialog">
		<div class="am-modal-hd txt-l"> <b>添加地址</b>
			<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
		</div>
		<div class="am-modal-bd">
			<form class=" am-form clear phone_yz">
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 姓名</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="text" required value="张某某" />
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 所在地区</label>
					<div class="am-u-sm-9 txt-l">
						<div class="demo">
                            <div class="infolist">
                              <div class="liststyle">
                                <span id="Province1" style="display:none;">
                                  <i>请选择省份</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Province" value="请选择省份">
                                </span>
                                <span id="City1">
                                  <i>请选择城市</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_City" value="请选择城市">
                                </span>
                                <span id="Area1">
                                  <i>请选择地区</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Area" value="请选择地区">
                                </span>
                                <span id="Insurer1">
                                  <i>请选择乡镇街道</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                                </span>
                              </div>
                            </div>
                          </div>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 详细地址</label>
					<div class="am-u-sm-9 txt-l">
						<textarea rows="5" required>西安路街道20街道某某巷子</textarea>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 手机号</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="tel" required value="15608097597" class="phone" />
						<span></span>
					</div>
				</div>
				<div class="am-form-group">
					<div class="am-u-sm-9 am-u-sm-offset-3 txt-l">
						<button type="submit" class="am-btn am-btn-secondary">保存</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="skin/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="skin/js/defray.js"></script>
<script type="text/javascript" src="skin/js/city4.city.js"></script>
<script type="text/javascript" src="skin/js/city4.js"></script>
<script type="text/javascript">
$(function(){
  $.fn.citySelect({setId:['#Province1' , '#City1' , '#Area1','#Insurer1']})
})
</script>
