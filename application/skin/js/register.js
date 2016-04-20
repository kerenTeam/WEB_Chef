$(function(){
	
		var ts = $(".yz_ts");
	$(".reg_sbm").bind("submit",function(){
		var phone = $("#phone");
		var psw = $("#password");
		var code = $("#phoneCode");
		if(phone.val() == ''){
			ts.html("<div>请输入手机号</div>");
		}else if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone.val()))){
			ts.html("<div>请输入正确的手机号</div>");
		}else{
			if(code.val() == ''){
				ts.html("<div>请输入验证码</div>");
			}else{
				if(psw.val() == ''){
					ts.html("<div>请输入密码</div>");
				}else if(!(/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,20}$/.test(psw.val()))){
					ts.html("<div>请输入6~20个字符密码</div>");
				}else{
					if($(".reg_check").is(':checked')){
						ts.children("div").remove();
						return true;
					}else{
						ts.html("<div>请同意用户手册</div>");
					}
				}
			}
		}
		
		return false;
	});
	$("#yzm_bt").bind("click",function(){
		var phone = $("#phone");
		if(phone.val() == ''){
			ts.html("<div>请输入手机号</div>");
		}else if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone.val()))){
			ts.html("<div>请输入正确的手机号</div>");
		}else{
			console.log(13);
			ts.children("div").remove();
			gotime();
		}
	});

	var wait=60;  
	function gotime() {  
	        if (wait == 0) {  
	           document.getElementById("yzm_bt").removeAttribute("disabled");            
	            document.getElementById("yzm_bt").value="获取验证码";  
	            wait = 60;  
	        } else {  
	            document.getElementById("yzm_bt").setAttribute("disabled", true);  
	            document.getElementById("yzm_bt").value="重新发送(" + wait + ")";  
	            wait--;  
	            setTimeout(function() {  
	                gotime()  
	            },  
	            1000)  
	        }  
	    }  
});
function notLogin(){
    alert('暂未开通');
}