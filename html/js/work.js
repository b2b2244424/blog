$(function(){
	//从底部上升的遮罩效果开始
	$(".con").hover(function(){
		$(this).find(".txt").stop().animate({height:"198px"},200);
		$(this).find(".txt h3").stop().animate({paddingTop:"60px"},200);
	},function(){
		$(this).find(".txt").stop().animate({height:"45px"},200);
		$(this).find(".txt h3").stop().animate({paddingTop:"0px"},200);
	})
	//从左侧显示遮罩效果 结束
	//图片放大效果 开始
	$(".con-five").hover(function() {
		$(this).find(".conimg").stop().animate({"width":357,"height":210});
	}, function() {
		$(this).find(".conimg").stop().animate({"width":347,"height":198});
	})
	//图片放大效果 结束
	//图片放大效果伴随蒙版文字出现 开始
	$(".con-six").hover(function() {
		$(this).find(".conimg-two").stop().animate({"width":310,"height":210});
		$(this).find(".txt-six").css("display","block");
	}, function() {
		$(this).find(".conimg-two").stop().animate({"width":297,"height":198});
		$(this).find(".txt-six").css("display","none");
	})
	//图片放大效果伴随蒙版文字出现 结束
});