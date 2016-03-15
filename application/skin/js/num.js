/** 总价格 */
var paymoney = 0;
/** 初始化一个空数组用来存放已经添加的ID */
var ids = new Array();
/** 自增ID */
var tempId = 0;
/** 总份数*/
var fen = parseInt(document.getElementById("fen").value); 
// if(fen = 0){
	
// }
function handle(self, isAdd){
    var countEl = self.parentNode.childNodes[3];
    var curCount = parseInt(countEl.value); 
	var allmoney = document.getElementById("allmoney"); 
	var reduce = self.parentNode.childNodes[1];
	var price = self.parentNode.parentNode.getElementsByClassName("price")[0].innerHTML; /* 获取价格 */
	var foodname = self.parentNode.parentNode.getElementsByClassName("foodname")[0].innerHTML; /* 获取食物名 */
	var foodId = self.parentNode.parentNode.childNodes[1].value;

    if(isAdd){
		curCount++;
		fen++;
		reduce.style.display="inline-block";
		countEl.style.display="inline-block";
		paymoney += parseInt(price);
		
	}else{
		curCount--;
		fen--;
		if(curCount <1){
			curCount = 0; 
			paymoney =paymoney-parseInt(price)*1;
			reduce.style.display="none";
			countEl.style.display="none";

		}else
			paymoney -= parseInt(price);
	}
	document.getElementById("fen").value=fen;
    countEl.value=curCount;
    
	if(self.parentNode.id == "")
		self.parentNode.id = "numId-" + (tempId++);
	var foodtotal=parseInt(price)*curCount;
	//handleHidden(self.parentNode.id,foodname, curCount,foodtotal, foodId);
	allmoney.value= paymoney;
}

// function handleHidden(id,name, count,total, fid){
// 	var hiddens = document.getElementById("hiddens");
// 	for(var i = 0; i < ids.length; i++){
// 		if(ids[i] == id){
// 			var hiddenInput0 = hiddens.childNodes[i * 4 ];
// 			var hiddenInput1 = hiddens.childNodes[i * 4 + 1];
// 			var hiddenInput2 = hiddens.childNodes[i * 4 + 2];
// 			var hiddenInput3 = hiddens.childNodes[i * 4 + 3];
// 			if(count == 0){
// 				hiddens.removeChild(hiddenInput0);
// 				hiddens.removeChild(hiddenInput1); /** 移除该元素 */
// 				hiddens.removeChild(hiddenInput2);
// 				hiddens.removeChild(hiddenInput3);
// 				ids.splice(i, 1); /** 从数组中移除ID */
// 			}else
// 				hiddenInput1.value = name;
// 				hiddenInput2.value = count+"份";
// 				hiddenInput3.value = "￥"+total;
// 			return;
// 		}	
// 	}

// 	if(count > 0 ){
// 		addHiddenChild(hiddens, id,name, count,total, fid);
// 		ids.push(id); /** 向数组中添加ID */
// 	}
// }

// function addHiddenChild(hiddens, id,name, count,total, fid){
// 	var hiId = document.createElement( "input");
// 	var hiName = document.createElement( "input");
// 	var hiNum = document.createElement( "input");
// 	var hiTotal = document.createElement( "input");
// 	hiId.setAttribute( "type", "hidden");
//     hiName.setAttribute( "type", "hidden");
//     hiNum.setAttribute( "type", "hidden");
//     hiTotal.setAttribute( "type", "hidden");
//     hiId.name = "foodIds[]";
//     hiName.name = "foodlist[]";
//     hiNum.name = "foodNum[]";
//     hiTotal.name = "foodTotal[]";
//     hiId.value = fid;
//     hiName.value = name;
//     hiNum.value = count+"份"; 
//     hiTotal.value = "￥"+total; 
//     hiddens.appendChild(hiId); 
//     hiddens.appendChild(hiName);
//     hiddens.appendChild(hiNum);
//     hiddens.appendChild(hiTotal); 
// }