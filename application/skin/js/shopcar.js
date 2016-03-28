
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-03-17 09:45:23
 * @version $Id$
 */
 window.onload = function(){
 	// 改变数量 价格
 	var oJian = document.getElementsByClassName("jian");
 	var oJia = document.getElementsByClassName("jia");
 	var oValue = document.getElementsByClassName("shuzhi");
 	var oP1span = document.getElementsByClassName("p1span");	
 	var oP2span = document.getElementsByClassName("p2span");
 	var oP3span = document.getElementById("p3span");
 	var oInput = document.getElementsByClassName("shuzhi");
 	var ochecklist = document.getElementById("youul").getElementsByClassName("cheyou");

 	// 合计 计算
	function count(){
		var total = 0;
		for (var i = 0; i < oP2span.length; i++) {
			if (ochecklist[i].checked) {
				total += parseFloat(oP2span[i].innerHTML);
			}
		}
		oP3span.innerHTML = total.toFixed(2);
	}
	// 小计
	function subtotal(index){
		var valueshu = parseInt(oValue[index].value);
		var p1shu = parseFloat(oP1span[index].innerHTML);
		if (isNaN(valueshu) || valueshu < 1) {
			valueshu = 1;
		}
		// 确保输入为数字 ，因为oValue[index].value 中的value 必须为数字
		oValue[index].value = valueshu;
		oP2span[index].innerHTML =  (parseFloat(p1shu*valueshu)).toFixed(2);
			if (p1shu*valueshu<=0) {
				oP2span[index].innerHTML = 0+'.00';
			}
	}

	// 初始化
 	for (var i = 0; i < oP2span.length; i++) {
 		oP2span[i].innerHTML = parseFloat(oValue[i].value*oP1span[i].innerHTML).toFixed(2);
 		count();
 	}

	// 加
	for (var i = 0; i < oJia.length; i++) {
		oJia[i].i = i;
		oJia[i].onclick = function(){
			ad = this.i;
			var valueshu = ++oValue[ad].value;
				if (valueshu >= 1000) {
					oValue[ad].value = 1000;
				}
			// 调用小计
			subtotal(ad);
			// 调用合计
			count();
			}
		}
	// 减
	for (var i = 0; i < oJian.length; i++) {
	oJian[i].i = i;
	oJian[i].onclick = function(){
		ad = this.i;
		var valueshu = --oValue[ad].value;
			// 调用小计
			subtotal(ad);
			// 调用合计
			count();
		}		
	}

	// 输入事件
 	for (var i = 0; i < oInput.length; i++) {
 		oInput[i].i = i;
 		oInput[i].onkeyup = function(){
 		var ad = this.i;
 		var valueshu = oValue[ad].value;
			if (valueshu >= 1000) {
				oValue[ad].value = 1000;
			}
 		// 调用小计
 		subtotal(ad);
 		// 调用合计
 		count();
 		}
 	}

	// 遍历输入框,不包括全选按钮
	var n=0;
	for (var i = 0; i < ochecklist.length; i++) {
		ochecklist[i].onclick = function(){
			if (this.checked == false) {
				for (var i = 0; i < oCheyouall.length; i++) {
					oCheyouall[i].checked = false;
				}
				n--;
			}

			if(this.checked == true){
				n++;
			}
			if (n == ochecklist.length) {
				for (var k = 0; k < oCheyouall.length; k++) {
					oCheyouall[k].checked = true;
				}
			}
				count();
				// console.log(n);
			}
		}
	// 遍历输入框,全选按钮
	var oCheyouall = document.getElementsByClassName("cheyouall");
	for (var i = 0; i < oCheyouall.length; i++) {
		oCheyouall[i].onclick = function(){
				for (var k = 0; k < ochecklist.length; k++) {
					ochecklist[k].checked = this.checked;
					// console.log(123)
				}
			
			if (this.checked == false) {
				n=0;
			}else if(this.checked == true){
				n = ochecklist.length;
			}
		
		// console.log(n);
		}
	}
	
	// 删除
	function delet(){
		var oUl = document.getElementById("youul");
		var oLi = document.getElementById("youul").getElementsByTagName("li");
		var oLi_a = document.getElementById("youul").getElementsByClassName("you_a");

		for (var i = 0; i < oLi_a.length; i++) {
			oLi_a[i].i = i;
			oLi_a[i].onclick = function(){
				ali = this.i;
				 oUl.removeChild(oLi[ali]);
				 count();
				 delet();
				// console.log(ali);	 
			}
		}
	}
	delet();

} 



	

 

