
/** 初始化一个空数组用来存放已经添加的ID */
var ids = new Array();
/** 自增ID */
var tempId = 0;
/** 总份数*/
// var fens = document.getElementById("fen");
//var fen = parseFloat(fens.value); 
// var fen = parseFloat(fens.innerHTML);
var allmoney = document.getElementById("allmoney"); 
/** 总价格 */
var paymoney = parseFloat(allmoney.innerHTML);
var curCount;
var num = 0; 
window.onload=function(){
    var servTotal = document.getElementById('servTotal');
	var ordFen = document.getElementsByClassName('numTxt');
	var ordPrice = document.getElementsByClassName('price');
	fen = 0;
	paymoney = 0;
	for(var i = 0;i < ordFen.length;i++){
		// fen += parseInt(ordFen[i].value);
		paymoney += parseFloat(parseInt(ordFen[i].value)*parseFloat(ordPrice[i].innerHTML));
		console.log(paymoney)
	}
 
	console.log(paymoney)
	// fens.innerHTML = fen;
	allmoney.innerHTML = paymoney.toFixed(2);
}

function IsNum(e) {
            var k = window.event ? e.keyCode : e.which;
            if (((k >= 48) && (k <= 57)) || k == 8 || k == 0) {
            } else {
                if (window.event) {
                    window.event.returnValue = false;
                }
                else {
                    e.preventDefault(); //for firefox 
                }
            }
        } 

function blurWrite(input){
	if(input.value == '' || input.value == NaN ||input.value == 0){
		input.value = num;
	}else{
		num = input.value;
	}
	
	console.log(num)
}
function ueserWrite(obj){
   curCount = obj.value;
 if(!/^[0-9]*[1-9][0-9]*$/.test(obj.value) || curCount ==''|| curCount>=200){
 	alert("请输入大于0的整数哟！");
 	obj.focus();
 	obj.value=num;
 	return false;
 }
 var prices = obj.parentNode.parentNode.parentNode.getElementsByClassName("price")[0].innerHTML;
    // alert(prices);
     console.log(fen);
    // fen +=(parseFloat(curCount) - num);
    // fens.innerHTML = fen;
    paymoney += (parseFloat(curCount) - num)*prices;
    allmoney.innerHTML= paymoney.toFixed(2);
}

function handle(self, isAdd){
    var countEl = self.parentNode.childNodes[3];
        curCount = parseFloat(countEl.value); 
    var unit = self.parentNode.parentNode.getElementsByClassName("unit")[0].value;
	var reduce = self.parentNode.childNodes[1];
	var price = self.parentNode.parentNode.parentNode.getElementsByClassName("price")[0].innerHTML; /* 获取价格 */
//	var foodname = self.parentNode.parentNode.getElementsByClassName("foodname")[0].innerHTML; /* 获取食物名 */
	var foodId = self.parentNode.parentNode.childNodes[1].value;

    if(isAdd){
		curCount= curCount+parseInt(unit);
		console.log(curCount);
		// fen=fen+parseInt(unit);
		reduce.style.display="inline-block";
		countEl.style.display="inline-block";
		paymoney += parseFloat(price)*unit;
		// prabola();
	}else{ 
		curCount=curCount-parseInt(unit);
		console.log(curCount);
		// fen=fen-parseInt(unit);
		if(curCount <1){
			curCount = 0; 
			paymoney =paymoney-parseFloat(price)*unit;
			reduce.style.display="none";
			countEl.style.display="none";

		}else
			paymoney -= parseFloat(price)*unit;
	}

	// fens.innerHTML=fen;
    countEl.value=curCount;
	allmoney.innerHTML= paymoney.toFixed(2);
}


