
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
 	var ochecklist = document.getElementById("youul").getElementsByClassName("cheyou");
 	var oUl = document.getElementById("youul");
 	var oLi_a = document.getElementById("youul").getElementsByClassName("you_a");
 	
	// 删除
	for (var i = 0; i < oLi_a.length; i++) {
		oLi_a[i].onclick = function(){
			 var conf = confirm('确定要删除吗？');
			 if (conf) {
			 oUl.removeChild(this.parentNode);
			 if (oLi_a.length == 0) {
			 	oCheyouall[0].setAttribute("disabled","disabled");
			 	oCheyouall[0].checked = false;
			 }
			 count();
			 n--;
			}
		}
	}

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
		var oNumbernode = index.parentNode.parentNode.getElementsByClassName("shuzhi")[0];
		var oNumber = parseInt(oNumbernode.value);
		var subprice = index.parentNode.parentNode.getElementsByClassName("p1span")[0].innerHTML;
		var subcountnode = index.parentNode.parentNode.getElementsByClassName("p2span")[0];
		subcountnode.innerHTML = (parseFloat(subprice*oNumber)).toFixed(2);
	}

	// 加
	for (var i = 0; i < oJia.length; i++) {
		oJia[i].onclick = function(){
			var oNumbernode = this.parentNode.parentNode.getElementsByClassName("shuzhi")[0];
			var oNumber = ++oNumbernode.value;
				if (oNumber >= 1000) {
					oNumbernode.value = 1000;
				}
			// 调用小计
			subtotal(this);
			// 调用合计
			count();
			}
		}
	// 减
	for (var i = 0; i < oJian.length; i++) {
	oJian[i].onclick = function(){
		var oNumbernode = this.parentNode.parentNode.getElementsByClassName("shuzhi")[0];
		var oNumber = --oNumbernode.value;
		if (oNumber <=0) {
			oNumbernode.value = 1; 
		}
			// 调用小计
			subtotal(this);
			// 调用合计
			count();
		}		
	}

	// 输入事件
 	for (var i = 0; i < oValue.length; i++) {
 		oValue[i].onkeyup = function(){
 		var oNumbernode = this.parentNode.parentNode.getElementsByClassName("shuzhi")[0];
 		var oNumber = parseInt(oNumbernode.value);
 			if ( isNaN(oNumber) || oNumber <= 0) {
 				oNumber = 1;
 		 	}
 		 	if (oNumbernode.value != oNumber) {
                oNumbernode.value = oNumber;
            }
			if (oNumber >= 1000) {
				oNumbernode.value = 1000;
			}

 		// 调用小计
 		subtotal(this);
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
			}
		}
	// 遍历输入框,全选按钮
	var oCheyouall = document.getElementsByClassName("cheyouall");
	for (var i = 0; i < oCheyouall.length; i++) {
		oCheyouall[i].onclick = function(){
				for (var k = 0; k < ochecklist.length; k++) {
					ochecklist[k].checked = this.checked;
				}
			
			if (this.checked == false) {
				n=0;
			}else if(this.checked == true){
				n = ochecklist.length;
			}
		count();
		}
	}
	
	// 初始化
 	for (var i = 0; i < oP2span.length; i++) {
 		oP2span[i].innerHTML = parseFloat(oValue[i].value*oP1span[i].innerHTML).toFixed(2);
 	}
	oCheyouall[0].checked = true;
 	oCheyouall[0].onclick();
} 



	

 

