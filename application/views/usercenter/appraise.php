
    <div class="center">
      <div class="personal clear">
          <div class="per-pl">
            <div class="per-nav">
              <h1><a href="<?=site_url('usercenter/personal');?>">我的主页</a></h1>
            </div>
            <div class="per-nav">
              <h1>订单中心</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/myorder');?>">我的订单</a></li>
                  <!-- <li><a href="<?=site_url('welcome/collection');?>">我的收藏</a></li> -->
                  <li><a href="<?=site_url('usercenter/appraise');?>" class="active">我的评价</a></li>
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
              
              
              <!--  评价 -->
              <div class="appraise">
                  <div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
                      <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="javascript: void(0)">我的评价</a></li>
                        <li><a href="javascript: void(0)">待评价</a></li>
                      </ul>

                      <div class="am-tabs-bd">
                        <div class="am-tab-panel am-active">
                            <table class="am-table am-table-striped am-table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">评价</th>
                                        <th style="width: 40%;">评价人</th>
                                        <th style="width: 20%;">菜品信息</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>好评</td>
                                        <td><a href="javascript:;">某某商家人</a></td>
                                        <td><a href="<?=site_url('order/info');?>" class="lcolor">尖椒回锅肉</a></td>
                                    </tr>
                                    <tr>
                                        <td>好评</td>
                                        <td><a href="javascript:;">某某商家人</a></td>
                                        <td><a href="<?=site_url('order/info');?>" class="lcolor">尖椒回锅肉</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="am-tab-panel">
                            <table class="am-table am-table-striped am-table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;">菜品信息</th>
                                        <th style="width: 30%;">金额</th>
                                        <th style="width: 20%;">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="<?=site_url('order/info');?>" class="lcolor">尖椒回锅肉</a></td>
                                        <td class="hcolor">￥30</td>
                                        <td class="wcolor"><a href="<?=site_url('welcome/orderaps');?>" class="am-btn am-btn-warning am-btn-xs am-radius">去评价</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="<?=site_url('order/info');?>" class="lcolor">尖椒回锅肉</a></td>
                                        <td class="hcolor">￥30</td>
                                        <td class="wcolor"><a href="<?=site_url('welcome/orderaps');?>" class="am-btn am-btn-warning am-btn-xs am-radius">去评价</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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