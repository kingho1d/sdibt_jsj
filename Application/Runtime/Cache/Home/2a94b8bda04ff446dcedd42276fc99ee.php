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

<div class="wrapper row2">
  <div id="hpage_featured" class="clear">
   
    <div id="featured_slide">
      <ul>
        <li><img src="/sdibt_jsj/Public/images1/1.jpg" alt="" />
          <div class="panel-overlay">
            <h2>The Spring </h2>
            <p>山东工商学院的春天的早晨<a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>
        <li><img src="/sdibt_jsj/Public/images1/2.jpg" alt="" /></li>
        <li><img src="/sdibt_jsj/Public/images1/3.jpg" alt="" />
          <div class="panel-overlay">
            <h2>ACM</h2>
            <p>ACM程序设计大赛<a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>
        <li><img src="/sdibt_jsj/Public/images1/4.jpg" alt="" />
          <div class="panel-overlay">
            <h2>Basketball Game</h2>
            <p>山东工商学院篮球比赛 <a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>
      </ul>
    </div>
    
    <!-- ###### -->
    <div class="intro clear">
    
      <div class="welcome clear"><img class="imgl" src="/sdibt_jsj/Public/images1/5.png" alt="" />    
          <h2 style="font-style:normal;float:left; width:283px"><b>欢迎来到计算机科学与技术学院</b></h2>
          <p>计算机科学与技术学院属于山东工商学院的二级学院，现有计算机科学与技术、数字媒体技术、通信工程、网络工程4个本科专业，在校本科生923人。</p>
      </div>
      
      <div class="popular"><br/><br/><br/>
        <h2 style="font-style:normal ;">&raquo;<b>快速导航</b></h2>
        <ul class="clear">
          <li><a href="#">&raquo; Visiting the University</a></li>
          <li><a href="#">&raquo; Undergraduate Courses</a></li>
          <li><a href="#">&raquo; Graduate Courses</a></li>
          <li><a href="#">&raquo; Postgraduate Research</a></li>
          <li><a href="#">&raquo; Postgraduate Taught</a></li>
          <li><a href="#">&raquo; International Students</a></li>
        </ul>
      </div>
    </div>
  </div>

</div>



<div class="wrapper row3">
  <div id="container" class="clear">
    
    <div id="homepage" class="clear">
      <!-- ###### -->
      <div id="content">
        <!-- width=300px <div id="top_featured" class="clear">
        </div> -->
        <div id="latestnews">
          <h2 style="font-style:normal">&raquo;<b>学院新闻</b>
          <a href="/sdibt_jsj/index.php/Home/HomePage/showPage?type_id=1">
          <img src="/sdibt_jsj/Public/image/more2.gif" style="width:30px;height:20px; margin:0 0 -10px 280px"/>
          </a></h2>
          <ul>
            <?php if(is_array($result2)): $i = 0; $__LIST__ = $result2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><li>
              <p><strong><?php echo ($res['title']); ?></strong><br />
                <?php echo (substr(htmlspecialchars_decode($res['content']),0,57)); ?>&hellip;</p>
              <p class="readmore"><a href="/sdibt_jsj/index.php/Home/HomePage/showPageContent?type_id=<?php echo ($res['type_id']); ?>&news_id=<?php echo ($res['news_id']); ?>">Read The Full Story &raquo;</a></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
 
          </ul>
         </div>
        
      <?php if(is_array($result4)): $i = 0; $__LIST__ = $result4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><div id="quicklinks" >
	          <h2 style="font-style:normal">&raquo;<b><?php echo ($res['title']); ?></b>
	          <a href="/sdibt_jsj/index.php/Home/HomePage/showPage?type_id=<?php echo ($res['news_id']); ?>">
	          <img src="/sdibt_jsj/Public/image/more2.gif" style="width:30px;height:20px; margin:0 0 -10px 140px;"/></a></h2>
	          <ul>
	          <?php if(is_array($result3[$res['news_id']])): $i = 0; $__LIST__ = $result3[$res['news_id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Res): $mod = ($i % 2 );++$i;?><li>
	              <p><a href="/sdibt_jsj/index.php/Home/HomePage/showPageContent?type_id=<?php echo ($Res['type_id']); ?>&news_id=<?php echo ($Res['news_id']); ?>"><?php echo (substr($Res['title'],0,36)); ?></a><span style="float:right"><?php echo (substr($Res['addtime'],0,10)); ?></span></p>
	            </li><?php endforeach; endif; else: echo "" ;endif; ?>	
	          </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
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