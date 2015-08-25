<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理系统</title>


<script type="text/javascript" charset="utf-8" src="/sdibt_jsj/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/sdibt_jsj/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/sdibt_jsj/Public/scripts/bootstrap.js"></script>
<script type="text/javascript" src="/sdibt_jsj/Public/scripts/jquery-2.1.4.min.js"></script>



<link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/backstage.css" />
<!-- <link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/bootstrap.min.css" /> -->
<link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/page.css" />
<link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/style.css" />



</head>

<body>
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h2 class="head_text fr">计算机科学与技术学院后台管理系统</h2>
    </div>
    <div class="operation_user clearfix">
        <div class="link fl">
        <a href="<?php echo U('Home/Admin/index');?>">计科院</a>
        <span>&gt;&gt;</span>欢迎你: <?php echo $_SESSION['username']?>&nbsp;&nbsp;</div>
        <div algin='right'><a href="<?php echo U('Home/Manager/out');?>">退出</a></div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            
            <div class="cont">
                <div class="title">修改密码</div>
                <div class="details">
                    <!--表格-->
              <section class="column width6 first" style="margin-left:200px;">					
					<h3>Modify the password</h3>	
					<form id="sampleform" method="post" action="<?php echo U('Home/Manager/doUpdPassword');?>">
						<fieldset>
							<legend>Text info</legend>
							<p>
								<label class="required" for="title">原始密码</label><br/>
								<input type="password"  class="title1" value="" name="oldPassword" style="height:20px;color:#000"/>
								<small>原始密码</small>
							</p>
							<p>
								<label class="required" for="title">新密码</label><br/>
								<input type="password"  class="title1" value="" name="newPassword" style="height:20px;color:#000"/>
								<small>新的密码</small>
							</p>
							<p>
								<label class="required" for="title">确认新密码</label><br/>
								<input type="password"  class="title1" value="" name="newPasswordq" style="height:20px;color:#000"/>
								<small>确认新的密码</small>
							</p>		
							<p class="box"><input type="submit" class="btn btn-green big" value="Save"/> or 
										   <input type="reset" class="btn btn-green big" value="resetting"/>
						</fieldset>
					</form>
				</section>     
                </div>
            </div>
        </div>
 
	<!--左侧列表-->
        <div class="menu" style="height:570px">
        
            <div class="cont">
                <div class="title">管理员</div>

                <ul class="mList">
                    <li>
                        <h3 style="color:#fff"><span onclick="show('menu1','change1')" id="change1" style="color:#fff">+</span>导航栏的信息管理</h3>
                        <dl id="menu1" style="display:none;">
                        <?php if(is_array($result1)): $i = 0; $__LIST__ = $result1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><dd><a href="/sdibt_jsj/admin.php/Home/Navigation/ruKou/id/<?php echo ($res['news_id']); ?>"><?php echo ($res['title']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                        <dd><a href="<?php echo U('Home/Navigation/showSet');?>">导航设置</a></dd>
                        </dl>
                    </li>
                    
                    <li>
                        <h3 style="color:#fff"><span onclick="show('menu2','change2')" id="change2" style="color:#fff">+</span>首页信息管理</h3>
                        <dl id="menu2" style="display:;">
                            <?php if(is_array($result2)): $i = 0; $__LIST__ = $result2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><dd><a href="/sdibt_jsj/admin.php/Home/HomePage/ruKou/id/<?php echo ($res['news_id']); ?>"><?php echo ($res['title']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                        <dd><a href="<?php echo U('Home/HomePage/showSet');?>">首页设置</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 style="color:#fff"><span onclick="show('menu3','change3')" id="change3" style="color:#fff">-</span>管理员信息管理</h3>
                        <dl id="menu3" style="display:none;">
                            <dd><a href="<?php echo U('Home/Manager/showUpdPassword');?>">密码修改</a></dd>
                        </dl>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    	function show(num,change){
	    		var menu=document.getElementById(num);
	    		var change=document.getElementById(change);
	    		if(change.innerHTML=="+"){
	    				change.innerHTML="-";
	        	}else{
						change.innerHTML="+";
	            }
    		   if(menu.style.display=='none'){
    	             menu.style.display='';
    		    }else{
    		         menu.style.display='none';
    		    } 
        }
    </script>
</body>
</html>