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

	// 加
	for (var i = 0; i < oJia.length; i++) {
		oJia[i].i = i;
		oJia[i].onclick = function(){
			ad = this.i;
			var valueshu = ++oValue[ad].value;
				if (valueshu >= 99) {
					oValue[ad].value = 99;
				}
			// 改变总价
			var p1shu = parseFloat(oP1span[ad].innerHTML);
			oP2span[ad].innerHTML =  (parseFloat(p1shu*valueshu)).toFixed(2);
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
			if (valueshu <= 0) {
				oValue[ad].value = 0;
			}
		// 改变总价
		var p1shu = parseInt(oP1span[ad].innerHTML);
		oP2span[ad].innerHTML =  p1shu*valueshu + '.00';
			if (p1shu*valueshu<=0) {
				oP2span[ad].innerHTML = 0+'.00';
			}
			// 调用合计
			count();
		}		
	}

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
			if (this.className === 'cheyouall nihao') {
				for (var k = 0; k < ochecklist.length; k++) {
					ochecklist[k].checked = this.checked;
				}
			}
			if (this.checked == false) {
				n=0;
			}else if(this.checked == true){
				n = ochecklist.length;
			}
		count();
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



	

 

