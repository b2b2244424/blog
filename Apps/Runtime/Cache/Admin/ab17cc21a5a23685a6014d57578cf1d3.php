<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="IE=11.0000" http-equiv="X-UA-Compatible">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>登录页面</title> 
<script src="/Blog/Public/admin/js/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/Blog/Public/css/login.css" type="text/css"></link>
<link rel="stylesheet" href="/Blog/Public/css/sweetalert.css" type="text/css" />
     
<script>
$(function(){
	//得到焦点
	$("#password").focus(function(){
		$("#left_hand").animate({
			left: "150",
			top: " -38"
		},{step: function(){
			if(parseInt($("#left_hand").css("left"))>140){
				$("#left_hand").attr("class","left_hand");
			}
		}}, 2000);
		$("#right_hand").animate({
			right: "-64",
			top: "-38px"
		},{step: function(){
			if(parseInt($("#right_hand").css("right"))> -70){
				$("#right_hand").attr("class","right_hand");
			}
		}}, 2000);
	});
	//失去焦点
	$("#password").blur(function(){
		$("#left_hand").attr("class","initial_left_hand");
		$("#left_hand").attr("style","left:100px;top:-12px;");
		$("#right_hand").attr("class","initial_right_hand");
		$("#right_hand").attr("style","right:-112px;top:-12px");
	});
});
</script>
<script src="/Blog/Public/js/sweetalert.min.js"></script>
<script src="/Blog/Public/js/angular.min.js"></script>
<script src="/Blog/Public/admin/login/app.js"></script>
<body ng-app="loginApp" ng-controller="loginCrtl">
<div class="top_div"></div>
	<div style="background: rgb(255, 255, 255); margin: -150px auto auto; border: 1px solid rgb(231, 231, 231); border-image: none; width: 400px; height: 300px; text-align: center;border-radius: 4PX;">
		<div style="width: 165px; height: 96px; position: absolute;">
			<div class="tou"></div>
			<div class="initial_left_hand" id="left_hand"></div>
			<div class="initial_right_hand" id="right_hand"></div>
		</div>
		<p style="padding: 30px 0px 10px; position: relative;">
			<span class="u_logo"></span>
			<input class="ipt" type="text" name="username" ng-model="loginData.username" required placeholder="请输入用户名或邮箱"> 
    	</P>
		<p style="position: relative;">
			<span class="p_logo"></span>         
			<input class="ipt" id="password" name="password" ng-model="loginData.password" type="password" placeholder="请输入密码">   
  		</p>
  		<p style="padding: 10px 0px 10px;position: relative;">
  			<input class="ipt" id="verify" name="verify" ng-model="loginData.verify" type="text" placeholder="请输入验证码">
  		</p>
  		<p style="position: relative;padding: 5px 0px 10px">
  			<img style="height:45px;width:84%" src="<?php echo U('Login/verify');?>" class="CaptchaImg" onClick="this.src=this.src+'?'+Math.random();" title="点击更换验证码。">
  		</p>
		<div style="height: 50px; line-height: 50px; margin-top: 10px; border-top-color: rgb(231, 231, 231); border-top-width: 1px; border-top-style: solid;">
			<p style="margin: 0px 35px 20px 45px;">
				<span style="float: left;"><a style="color: rgb(204, 204, 204);" href="#">忘记密码?</a></span>
				<span style="float: left;padding-left: 10px;">
					<a href="<?php echo U('/index');?>" style="color: rgb(204,204,204);">访问首页</a>
				</span>
           		<span style="float: right;">
                	<input data-ng-disabled="loginForm.$invalid" type="submit" ng-click="login(loginData)" style="background: rgb(0, 142, 173); padding: 7px 10px; border-radius: 4px; border: 1px solid rgb(26, 117, 152); border-image: none; color: rgb(255, 255, 255); font-weight: bold;" value="登录">
           		</span>
           	</p>
        </div>
    </div>
</body>
</html>