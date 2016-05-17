
var sum = $("#sum");
var totalPrice = sum.html();// 总价
var coupon = 0;//优惠券
var jifen = 0;//积分
var jifenNum = 0;//应付金额
$(function(){
	var input = $(".shuzhi");
	input.each(function(){
		var price = $(this).parentsUntil("tbody").find(".price").html();
		var total = $(this).parentsUntil("tbody").find(".total");
		total.html((parseFloat($(this).val()*price)).toFixed(2));
	});
	count();
	console.log(totalPrice);
});
// // 减
// $(".jian").bind("click",jian);
// // 加
// $(".jia").bind("click",jia);
// function jian(){
// 	var num = $(this).next("input").val();
// 	var price = $(this).parentsUntil("tbody").find(".price").html();
// 	var total = $(this).parentsUntil("tbody").find(".total");
// 	if(num < 1){
// 		$(this).parentsUntil("tbody").remove();
// 	}else if(num < 99){
// 		num--;
// 		total.html((parseFloat(num*price)).toFixed(2));
// 	}
// 	$(this).next("input").val(num);
// 	count();
// }
// function jia(){
// 	var num = $(this).prev("input").val();
// 	var price = $(this).parentsUntil("tbody").find(".price").html();
// 	var total = $(this).parentsUntil("tbody").find(".total");
// 	if(num == 99){
// 		$(this).parentsUntil("tbody").remove();
// 	}else if(num > 0){
// 		num++;
// 		total.html((parseFloat(num*price)).toFixed(2));
// 	}
// 	$(this).prev("input").val(num);
// 	count();
// }
// 合计
function count(){
	var count = 0;
	$(".total").each(function(i){
		// console.log(parseFloat($(this).html()));
		count += parseFloat($(this).html());
		totalPrice = count;
		sum.html(count.toFixed(2));
	});
}
// 积分
$('#canjifen').click(function(){
	jifen = parseFloat($(this).parent().find('.jifen').html());
	if($(this).prop('checked')){
		jifenNum = (parseFloat(totalPrice) - coupon - jifen).toFixed(2);
	}else{
		jifenNum = (parseFloat(totalPrice) - coupon).toFixed(2);
	}
	sum.html(jifenNum);
});
// 优惠券
$('.conponList').each(function(){
	$(this).click(function(){
		var allSum = parseFloat(sum.html());
		var couponList = parseFloat($(this).parent().find('.fanPrice').html());
		coupon = couponList;
		jifenNum = (parseFloat(totalPrice) - coupon - jifen).toFixed(2);
		sum.html(jifenNum);
	});
});

// 手机验证
	$(".phone_yz").bind("submit",function(){
		var phone = $(this).find(".phone"); 
		if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone.val()))){
			phone.next('span').html("请输入正确的手机号");
		}else{
			phone.next('span').html('');
			return true;
		}
		return false;
	});



