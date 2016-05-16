
      <div class="center">
      <div class="personal clear">
          <div class="per-pl">
            <div class="per-nav">
              <h1><a href="<?=site_url('usercenter/personal');?>">我的主页</a></h1>
            </div>
            <div class="per-nav">
              <h1>订单中心</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/myorder');?>" class="active">我的订单</a></li>
                  <!-- <li><a href="<?=site_url('welcome/collection');?>">我的收藏</a></li> -->
                  <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li>
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('welcome/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('usercenter/coupon');?>">优惠劵</a></li>
                  <li><a href="<?=site_url('usercenter/member');?>">会员卡</a></li>
              </ul>
            </div>
            <div class="per-nav per-last">
              <h1>设置</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/userInfo');?>">个人信息</a></li>
                  <li><a href="<?=site_url('usercenter/address');?>">收货地址</a></li>
              </ul>
            </div>
          </div>
          <div class="per-pr">
              
              <!--  最近订单 -->
              <div class="per-ctt">
                  <div class="order-tit clear">
                    <ul class="clear">
                        <li class="active"><a href="javascript:;">所有订单</a></li>
                        <li><a href="javascript:;">待付款</a></li>
                        <li><a href="javascript:;">待服务</a></li>
                        <li><a href="javascript:;">服务中</a></li>
                        <li><a href="javascript:;">待评价</a></li>
                    </ul>
                  </div>
                  <div class="per-center">
                      <div class="per-basket">
                      <!-- 没有订单的时候 -->
                          <!-- <p><img src="skin/img/clz.png"> 您的菜篮子空空的哦，现在就去 <a href="javascript:;">订餐</a> 吧~</p> -->
                        <table class="am-table am-table-striped am-table-hover middle">
                        <tbody>
                            <tr class="per-table">
                                <td class="old-food"><img src="skin/img/orderimg_03.png"></td>
                                <td>
                                    <h2>尖椒回锅肉</h2>
                                    <p>订单号:25644448557</p>
                                </td>
                                <td>
                                    <p>厨师:王大厨</p>
                                    <p>服务员:张三</p>
                                </td>
                                <td><span class="grey">已评价</span></td>
                                <td><a href="<?=site_url('order/info');?>" class="am-btn am-btn-danger am-radius">再来一单</a></td>
                            </tr>

                            <!-- 待付款 -->
                            
                            <tr class="per-table">
                                <td class="old-food"><img src="skin/img/orderimg_03.png"></td>
                                <td>
                                    <h2>尖椒回锅肉</h2>
                                    <p>订单号:25644448557</p>
                                </td>
                                <td>
                                    <span class="hcolor am-text-xl">￥ 32</span>
                                </td>
                                <td>
                                    <a href="javascript:;" class="am-text-sm am-link-muted">取消订单</a>
                                </td>
                                <td><a href="<?=site_url('shopcar/defray');?>" class="am-btn am-btn-danger am-radius">去付款</a></td>
                            </tr>

                            <!-- 待评价 -->

                            <tr class="per-table">
                                <td class="old-food"><img src="skin/img/orderimg_03.png"></td>
                                <td>
                                    <h2>尖椒回锅肉</h2>
                                    <p>订单号:25644448557</p>
                                </td>
                                <td>
                                    <p>厨师:王大厨</p>
                                    <p>服务员:张三</p>
                                </td>
                                <td>
                                    <span class="hcolor am-text-xl">￥ 32</span>
                                </td>
                                <td><a href="<?=site_url('welcome/orderaps');?>" class="am-btn am-btn-success am-radius">评价</a></td>
                            </tr>

                            <!-- 服务中 -->

                            <tr class="per-table">
                                <td class="old-food"><img src="skin/img/orderimg_03.png"></td>
                                <td>
                                    <h2>尖椒回锅肉</h2>
                                    <p>订单号:25644448557</p>
                                </td>
                                <td>
                                    <p>厨师:王大厨</p>
                                    <p>服务员:张三</p>
                                </td>
                                <td>
                                    <span class="hcolor am-text-xl">￥ 32</span>
                                </td>
                                <td><span class="grey">服务中</span></td>
                            </tr>

                            <!-- 待服务 -->

                            <tr class="per-table">
                                <td class="old-food"><img src="skin/img/orderimg_03.png"></td>
                                <td>
                                    <h2>尖椒回锅肉</h2>
                                    <p>订单号:25644448557</p>
                                </td>
                                <td>
                                    <p>厨师:王大厨</p>
                                    <p>服务员:张三</p>
                                </td>
                                <td>
                                    <span class="hcolor am-text-xl">￥ 32</span>
                                </td>
                                <td><a href="javascript:;" class="am-btn am-btn-default am-radius">退款</a></td>
                            </tr>

                        </tbody>
                        </table>
                      </div>
                  </div>
              </div>
              <!-- 足迹 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">美食足迹</li>
                    </ul>
                  </div>
                  <ul class="am-avg-sm-4 footmarks">
                      <li>
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      </div>
  </div>


<script src="skin/js/jquery.min.js"></script>