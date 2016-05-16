
				<div class="center">
          		<div class="service">
          			<div class="am-g">
          				<div class="am-u-sm-8">
          					<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
							  <ul class="am-slides">
							    <li><a href="<?=site_url('service/lifeInfo2');?>" title=""><img src="skin/img/banner1.png" /></a></li>
							    <li><a href="<?=site_url('service/lifeInfo2');?>" title=""><img src="skin/img/banner2.png" /></a></li>
							    <li><a href="<?=site_url('service/lifeInfo2');?>" title=""><img src="skin/img/banner3.png" /></a></li>
							  </ul>
							</div>
          				</div>
          				<div class="am-u-sm-4">
          					<div class="serviceForm">
	          					<form class="am-form">
	          						<h3>服务员<span class="red am-icon-cny fr">80<span class="gray"> /位</span></span></h3>
	          						<p>微笑、速度、诚信、技巧、专业</p>
	          						<div class="am-g am-text-center">
										<div class="am-u-sm-6">
											<img src="skin/img/boy.png">
											<div class="num-btn">
												<span class="subtract"><img src="skin/img/jian.png"></span>
												<input value="0">
												<span class="plus"><img src="skin/img/jia.jpg"></span>
											</div>
										</div>
	          							<div class="am-u-sm-6">
	          								<img src="skin/img/girl.png">
											<div class="num-btn">
												<span class="subtract"><img src="skin/img/jian.png"></span>
												<input value="0">
												<span class="plus"><img src="skin/img/jia.jpg"></span>
											</div>
	          							</div>
	          						</div>
	          						<button type="button" class="am-btn am-btn-danger">加入购物车</button>
	          					</form>
          					</div>
          				</div>
          			</div>
          			<!-- content -->
          			<div class="serviceCtt">
          				<h2>服务标准</h2>
          				<p>1. 接到跟单安排时，跟单人员积极热情</p>
          				<p>2．客户进入展厅，跟单人员立即微笑迎上去 </p>
          				<p>3．跟单人员应主动与客户交流，了解客户需求 </p>
          				<p>4．在跟单过程中，应做到热情、周到、大方</p>
          				<h2>服务流程</h2>
          				<p>1．迎客—服务员应微笑点头问好</p>
          				<p>2．点菜—详细仔细服务 </p>
          				<p>3．餐桌服务—详细服务顾客的饮食习惯 </p>
          				<p>4．餐后整理—顾客用餐后，服务员善后</p>
          			</div>

          		<!-- 评价 -->
          		<div class="food-appraise-tit clear">
                  <h2>消费评价</h2>
              	</div>
              	<div class="pingjia">
				<div class="am-shadow">
					<header class="am-comment-hd">
						<!--<h3 class="am-comment-title">评论标题</h3>-->
						<div class="am-comment-meta">
							<a href="#link-to-user" class="am-comment-author"><img src="skin/img/user.jpg" class="am-circle comimg" alt="">157****4450</a>
							<span class="am-fr"><time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12</time></span>
						</div>
					</header>
					<div class="am-comment-bd am-text-xs combo">
						味道很不错,服务人员很耐心
					</div>
					<ul data-am-widget="gallery" class="am-gallery am-avg-sm-12 am-gallery-default am-no-layout" data-am-gallery="{ pureview: true }">
						<li>
							<div class="am-gallery-item">
								<a href="skin/img/food_info_03.png" class="">
									<img src="skin/img/food_info_03.png">
								</a>
							</div>
						</li>
						<li>
							<div class="am-gallery-item">
								<a href="skin/img/food_info_03.png" class="">
									<img src="skin/img/food_info_03.png">
								</a>
							</div>
						</li>
					</ul>
				</div>
          		</div>
          		</div>
			</div>
		</div>

<script src="skin/js/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var remove = $(".subtract");
        var add = $(".plus");
        var num = $('.num-btn input')
        remove.bind('click',nums);
        add.bind('click',nums);
        function nums(){
            var count = $(this).parent().parent().find('input').val();
            if($(this).attr('class') == "subtract"){
                if(count <= 0){
                    return false;
                }else{
                  count--;
                }
            }else{
                if(count >= 99){
                    return false;
                }else{
                    count++;
                }
            }
            $(this).parent().parent().find('input').val(count);
        }
        num.keyup(function(){
          var oNumber = $(this).val();
            if ($(this).val() != oNumber) {
              $(this).val(oNumber);
            }
            if ( isNaN(oNumber) || oNumber <= 0) {
              $(this).val(1);
            }
            if (oNumber >= 1000) {
              $(this).val(1000);
            }
        })
    });
</script>

