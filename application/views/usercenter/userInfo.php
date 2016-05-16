
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
                  <!-- <li><a href="<?=site_url('usercenter/collection');?>">我的收藏</a></li> -->
                  <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li>
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('usercenter/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('usercenter/coupon');?>">优惠劵</a></li>
                  <li><a href="<?=site_url('usercenter/member');?>">会员卡</a></li>
              </ul>
            </div>
            <div class="per-nav per-last">
              <h1>设置</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/userInfo');?>" class="active">个人信息</a></li>
                  <li><a href="<?=site_url('usercenter/address');?>">收货地址</a></li>
              </ul>
            </div>
          </div>
          <div class="per-pr bgc">
              
              <!--  个人信息 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">个人信息</li>
                    </ul> 
                  </div>
                  <div class="per-center">
                     <p class="am-margin-top-sm am-margin-left-sm">亲爱的<span class="username">XXX</span>,填写你的信息，增加你的魅力值吧！</p> 

                    <!-- 信息修改表单 -->
                     <form action="" method="" class="am-form am-u-lg-9" data-am-validator>
                        <fieldset>

                          <div class="am-form-group">
                            <label for="doc-vld-ta-2">头像（<span>点击编辑头像</span>）：</label>
                            <style>
                               .wx_type_img{
                                  position: relative;
                                }
                                label{
                                  font-weight:400;
                                }
                                .wx_type_img input#imgUpload{
                                  margin: 0;
                                  cursor: pointer;
                                  position: absolute;
                                  top: 0;
                                  left: 0;
                                  height: 100%;
                                  opacity: 0;
                                  filter: alpha(opacity=0);
                                }
                                .am-checkbox-inline,.am-radio-inline{
                                  margin-top: 0;
                                }

                            </style>
                            <div class="wx_type_img">
                              <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                              <!-- 图片实时预览 -->
                              <div id="preview"> <img style="border-radius: 3px;" src="skin/img/user.jpg" alt="选择图片"> 
                               </div>
                            </div>
                          </div>

                          <div class="am-form-group">
                            <label for="doc-vld-name-2">* 昵称</label>
                            <input type="text" id="doc-vld-name-2" minlength="3" placeholder="输入用户名（至少 3 个字符）" required/>
                          </div>

                          <div class="am-form-group">
                            <label for="doc-vld-email-2">真实姓名：</label>
                            <input type="text" id="doc-vld-email-2" placeholder="真实姓名"/>
                          </div>

                          <div class="am-form-group">
                            <label class="am-form-label">菜品爱好：</label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="川菜" name="docVlCb" data-am-ucheck> 川菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="湘菜" name="docVlCb" data-am-ucheck> 湘菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="豫菜" name="docVlCb" data-am-ucheck> 豫菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="粤菜" name="docVlCb" data-am-ucheck> 粤菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="鲁菜" name="docVlCb" data-am-ucheck> 鲁菜
                            </label>
                          </div>

                          <div class="am-form-group">
                            <label>* 性别： </label>
                            <label class="am-radio-inline am-radio">
                              <input type="radio"  value="" name="docVlGender" data-am-ucheck checked required> 男
                            </label>
                            <label class="am-radio-inline am-radio">
                              <input type="radio" name="docVlGender" data-am-ucheck> 女
                            </label>
                          </div>

                          <div class="am-form-group">
                            <label for="doc-select-1">生日</label>
                            <p><input type="text" class="am-form-field" placeholder="日期选择" data-am-datepicker="{theme: 'success'}" readonly/></p>
                            <span class="am-form-caret"></span>
                          </div>  
                          <button class="am-btn am-btn-secondary save" type="submit">提交</button>
                        </fieldset>
                      </form>
                  </div>
              </div> 
          </div>
      </div>
      </div>
  </div>

<script src="skin/js/imgup.js"></script>
<script src="skin/js/jquery.min.js"></script>
