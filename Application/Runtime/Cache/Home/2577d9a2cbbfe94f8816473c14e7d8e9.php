<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head >
<title>Education Board</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="/sdibt_jsj/Public/styles1/3_column.css" type="text/css" />
<link rel="stylesheet" href="/sdibt_jsj/Public/styles1/layout.css" type="text/css" />
<link rel="stylesheet" href="/sdibt_jsj/Public/styles1/xiala.css" type="text/css" />
<!-- <link rel="stylesheet" type="text/css" href="/sdibt_jsj/Public/Css/page.css" /> -->
<!-- Homepage Specific Elements -->
<script type="text/javascript" src="/sdibt_jsj/Public/scripts1/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="/sdibt_jsj/Public/scripts1/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/sdibt_jsj/Public/scripts1/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="/sdibt_jsj/Public/scripts1/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="/sdibt_jsj/Public/scripts1/jquery.galleryview.setup.js"></script>
<!-- End Homepage Specific Elements -->

</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <img src="/sdibt_jsj/Public/image/logo2.png" alt="" style = "width:80px;height:80px;margin:10px 0 0 0"/>
    	<img src="/sdibt_jsj/Public/image/jsjlogo.png" alt=""  style = "width:500px;height:50px;margin:0 0 20px 10px"/>
    </div>
    <div class="fl_right">
      <form action="#" method="post" id="sitesearch">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="image" src="/sdibt_jsj/Public/images1/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
    </div>
    <div id="topnav" class = "menu">  
      <ul >
        <li class="active"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
        	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><li><a href="/sdibt_jsj/index.php/Home/Navigation/showNav/?type_id=<?php echo ($res['news_id']); ?>&news_id=1"><?php echo ($res['title']); ?></a>
		        <ul>
		        	<?php if(is_array($result1[$res['news_id']])): $i = 0; $__LIST__ = $result1[$res['news_id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res1): $mod = ($i % 2 );++$i;?><li><a href="/sdibt_jsj/index.php/Home/Navigation/showNav?type_id=<?php echo ($res['news_id']); ?>&news_id=<?php echo ($res1['news_id']); ?>" ><?php echo ($res1['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>  
		         </ul>
		         </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="left_column" >
      <div class="holder" >
        <h2 class="title" style="font-style:normal"><b><?php echo ($Title1['title']); ?>&nbsp;&nbsp;&raquo;</b></h2>
        <ul class="nostart" style="margin-left:60px;font-size:16px">
          <?php if(is_array($Title)): $i = 0; $__LIST__ = $Title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><li><a href="/sdibt_jsj/index.php/Home/Navigation/showNav/?type_id=<?php echo ($t['type_id']); ?>&news_id=<?php echo ($t['news_id']); ?>"><?php echo ($t['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <!-- ############ -->
    <div id="content" style="width:600px;margin:20px 0 0 100px">
      <h1 class="title" style="font-style:normal;" align="center"><b> <?php echo ($Con['title']); ?></b></h1>
      <p align="center">发布时间:<?php echo ($Con['addtime']); ?></p>
      <p><?php echo (htmlspecialchars_decode($Con['content'])); ?>
      </p>
    </div>
  </div>
</div>

<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left" style="margin-left:300px">Copyright &copy; 2015   山东工商学院计算机科学与技术学院 </p>
  </div>
</div>
</body>
</html>