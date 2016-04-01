$(function(){
	var chefs = [
					{"id":1,"name":"张某某","title":"最佳川菜师傅","introduce":"厨师就业经验2年，最擅长川菜，加入大厨到家1年。长相帅气的他，又拥有一手好厨艺， 贴心的服务，地道的口味深受顾客喜欢。111",
					"cai":["蓉记姜葱香辣蟹1","川式豆捞","蓉记姜葱香辣蟹","川式豆捞","蓉记姜葱香辣蟹","川式豆捞"]},
					{"id":2,"name":"李某某","title":"最佳川菜师傅","introduce":"厨师就业经验2年，最擅长川菜，加入大厨到家1年。长相帅气的他，又拥有一手好厨艺， 贴心的服务，地道的口味深受顾客喜欢。222",
					"cai":["蓉记姜葱香辣蟹2","川式豆捞","川式豆捞","蓉记姜葱香辣蟹","川式豆捞"]},
					{"id":3,"name":"王某某","title":"最佳川菜师傅","introduce":"厨师就业经验2年，最擅长川菜，加入大厨到家1年。长相帅气的他，又拥有一手好厨艺， 贴心的服务，地道的口味深受顾客喜欢。333",
					"cai":["蓉记姜葱香辣蟹3","川式豆捞","蓉记姜葱香辣蟹","川式豆捞"]},
					{"id":4,"name":"陈某某","title":"最佳川菜师傅","introduce":"厨师就业经验2年，最擅长川菜，加入大厨到家1年。长相帅气的他，又拥有一手好厨艺， 贴心的服务，地道的口味深受顾客喜欢。444",
					"cai":["蓉记姜葱香辣蟹4","川式豆捞","蓉记姜葱香辣蟹","川式豆捞","川式豆捞"]},
					{"id":5,"name":"谭某某","title":"最佳川菜师傅","introduce":"厨师就业经验2年，最擅长川菜，加入大厨到家1年。长相帅气的他，又拥有一手好厨艺， 贴心的服务，地道的口味深受顾客喜欢。555",
					"cai":["蓉记姜葱香辣蟹5","川式豆捞","蓉记姜葱香辣蟹","川式豆捞","蓉记姜葱香辣蟹"]}
				];


	// 鼠标移入
	$(".chef_imgs ul li").hover(function(){
		// console.log(chefs.id);
		clearInterval(carousel);
		for(var i = 0;i < chefs.length;i++){
			if($(this).prop("id") == chefs[i].id){
				$(this).children(".zhezhao").css("opacity",0).end().siblings().children(".zhezhao").css("opacity",0.5);
				var imgsrc = $(this).children("img").prop("src");
				$(".chef_pic img").prop("src",imgsrc);
				$(".chef_tit").html(chefs[i].title+"——"+chefs[i].name);
				$(".chef_top h1").html(chefs[i].name);
				$(".chef_top p").html(chefs[i].introduce);
				// console.log(chefs[i].cai)
				var html = '';
				for(var j = 0;j<chefs[i].cai.length;j++){

				// console.log(chefs[i].cai[j])
					html += '<li><a href="javascript:;">'+chefs[i].cai[j]+'</a></li>';
				}
				$(".chef_nsc").html(html);
			}
		}
	},function(){
		$(this).siblings().children(".zhezhao").css("opacity",0.5);
		carousel = setInterval(animatePic,5000);
	});
	var carousel = setInterval(animatePic,5000);
	var lis = $(".chef_imgs ul li");
	var index = 0;
	// 小于五张停止
	if(lis.length <= 5){
		clearInterval(carousel);
	}
	// 动画
	function animatePic(){
		if(index == lis.length-5){
			index = 0;
		}else{
			index++;
		}
		$(".chef_imgs ul").css("marginLeft",-(index*163)+"px");
	};
	// next
	$("#next").click(function(){
		clearInterval(carousel);	
		var left = $(".chef_imgs ul").css("marginLeft");
		if(index == lis.length-5){
			$(".chef_imgs ul").css("marginLeft",0+"px");
			index = 0;
		}else{
			$(".chef_imgs ul").css("marginLeft",-((index+1)*163)+"px");
			index++;
		}
		carousel = setInterval(animatePic,5000);
	});
	// prev
	$("#prev").click(function(){
		clearInterval(carousel);	
		if(index == 0){
			$(".chef_imgs ul").css("marginLeft",-(163*(lis.length-5))+"px");
			index = lis.length-5;
		}else{
			$(".chef_imgs ul").css("marginLeft",-((index-1)*163)+"px");
			index--;
		}
		carousel = setInterval(animatePic,5000);
	});
});
