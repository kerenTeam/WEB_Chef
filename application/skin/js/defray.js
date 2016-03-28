$(function(){
	var input = $(".shuzhi");
	input.each(function(){
		var price = $(this).parentsUntil("tbody").find(".price").html();
		var total = $(this).parentsUntil("tbody").find(".total");
		total.html((parseFloat($(this).val()*price)).toFixed(2));
	});
	count();
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
	var sum = $("#sum");
	var count = 0;
	$(".total").each(function(i){
		// console.log(parseFloat($(this).html()));
		count += parseFloat($(this).html());
		sum.html(count.toFixed(2));
	});

}


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



