<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>

<link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/reset.css" />
<link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/main.css" />
<script type="text/javascript" src="/sdibt_jsj/Public/scripts/jquery-2.1.4.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar login_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#"><img src="/sdibt_jsj/Public/image/logo2.png" alt="logo" style="height:70px"></a>
			</div>
			<h3 class="welcome_title">欢迎登陆</h3>
		</div>
	</div>
</div>
<div class="loginBox">
	<div class="login_cont">
	<form method="post" action="<?php echo U('Home/Login/do_login');?>" >
		<ul class="login">
			<li class="l_tit"><strong>用户名:</strong></li>
			<li class="mb_10"><input type="text"  name="username" placeholder="请输入用户名" class="login_input user_icon"></li>
			<li class="l_tit"><strong>密码:</strong></li>
			<li class="mb_10"><input type="password" name="password" class="login_input user_icon"></li>
			<li class="l_tit"><strong>验证码:</strong></li>
			<li class="mb_10" id="captcha-container"><input type="text" name="verify" class="login_input user_icon">
			<img onclick="showVerify(this)" title="点击刷新" src="<?php echo U('Home/Login/verify',array());?>"  /></li>
			<script type="text/javascript">
				function showVerify(obj)
				{
					// 点击刷新验证码 
					var captcha_img = $('#captcha-container').find('img')  
					var verifyimg = captcha_img.attr("src"); 
					
					captcha_img.attr('title', '点击刷新');  
					captcha_img.click(function(){  
					    if( verifyimg.indexOf('?')>0){  
					        $(this).attr("src", verifyimg+'&random='+Math.random());  
					    }else{  
					        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
					    }  
					}); 
					/* window.location.href=location.href;	 */
				}
			</script>
			<li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登陆</label></li>
			<li><input type="submit" value="登      陆" class="login_btn"></li>
		</ul>
		</form>
	</div>
	<a class="reg_link" href="#"></a>
</div>
<div class="hr_25"></div>

</body>
</html>