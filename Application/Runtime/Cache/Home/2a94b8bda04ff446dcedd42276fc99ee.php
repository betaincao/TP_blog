<?php if (!defined('THINK_PATH')) exit(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Rain_Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="/Public/home/css/style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="/Public/home/js/cufon-yui.js"></script>
<script type="text/javascript" src="/Public/home/js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>

	<div class="main">
        <link href="/Public/home/css/style.css" rel="stylesheet" type="text/css" />
<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ($menu["show"]); ?>"><a href="<?php echo ($menu["href"]); ?>"><?php echo ($menu["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo"><h1><a href="/index.php"><span>Rain_Blog</span></a> <small>   </small></h1></div>
      <div class="clr"></div>
    </div>
  </div>






		<br>
		<br>
		<br>
		<br>
		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">
						<p>
							<span class="date">2017-1-19</span> 1
						</p>
						<h2>
							<span>自己写的博客，有兴趣的朋友可以互相交流</span> 
						</h2>
						<div class="clr"></div>
						<img src="/Public/home/images/img2.jpg" width="625" height="205" alt="image" />
						<p></p>
						
					</div>
					<div class="article">
						<p>
							<span class="date">2017-1-20</span> 2
						</p>
						<h2>
							<span>NY & Rain</span>
						</h2>
						<div class="clr"></div>
						<img src="/Public/home/images/psb.jpg" width="625" height="205" alt="image" />
						<p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
						<p class="spec">
							<a href="article_show_List.php" class="rm">更多文章 &raquo;</a>
						</p>
					</div>
				</div>
				<div class="sidebar">
					<div class="searchform">
						<form id="formsearch" name="formsearch" method="post" action="">
							<span><input name="editbox_search" class="editbox_search"
								id="editbox_search" maxlength="80" value="Search our ste:"
								type="text" /></span> <input name="button_search"
								src="/Public/home/images/search_btn.gif" class="button_search" type="image" />
						</form>
					</div>
					<div class="gadget">
						<h2 class="star">
							<span>Blog_</span> Menu
						</h2>
						<div class="clr"></div>
						<ul class="sb_menu">
							
<?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ($menu["show"]); ?>"><a href="<?php echo ($menu["href"]); ?>"><?php echo ($menu["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
 </ul>
 </div>
 <div class="gadget">
     <h2 class="star">
         <span>Introduce</span>
     </h2>
     <div class="clr"></div>
     <ul class="ex_menu">
         <li>网站：<br>
             Rain_Blog&nbsp;&nbsp;&nbsp;&nbsp; <br />
         </li>
         <li>职业：<br />
             程序员</li>
         <li>技能：<br />
             PHP,Java,Python</li>
         <li>联系方式：<br />
             请点击下方我的主页</li>
						</ul>
					</div>
				</div>
				<div class="clr"></div>
			</div>
		</div>
		<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>常用网站</span></h2>
        <a target="_blank" href="http://www.w3school.com.cn/index.html"><img src="/Public/home/images/w3.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="http://www.icourse163.org/"><img src="/Public/home/images/mooc.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="http://www.imooc.com/"><img src="/Public/home/images/mw.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="https://github.com/"><img src="/Public/home/images/github.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="http://www.csdn.net/"><img src="/Public/home/images/csdn.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="https://www.nowcoder.com/"><img src="/Public/home/images/nk.jpg" width="58" height="58" alt="pix" /></a>
      </div>
      <div class="col c3">
        <h2><span>语言工具</span></h2>
        <img src="/Public/home/images/c.jpg" width="58" height="58" alt="pix" />
        <img src="/Public/home/images/js.jpg" width="58" height="58" alt="pix" />
        <img src="/Public/home/images/java.jpg" width="58" height="58" alt="pix" />
        <br>
        <img src="/Public/home/images/python.jpg" width="58" height="58" alt="pix" />
        <img src="/Public/home/images/php.jpg" width="58" height="58" alt="pix" />
        <img src="/Public/home/images/mysql.jpg" width="58" height="58" alt="pix" />
     
      </div>
      <div class="col c3">
        <h2><span>我的主页</span></h2>
        <a target="_blank" href="http://weibo.com/5842719435/profile?topnav=1&wvr=6&is_all=1"><img src="/Public/home/images/wb.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="https://www.zhihu.com/people/rain_web/activities"><img src="/Public/home/images/zh.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="http://blog.csdn.net/rain_web"><img src="/Public/home/images/csdn.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="https://note.wiz.cn/pages/manage/biz/applyInvited.html?code=lmrbxp"><img src="/Public/home/images/wz.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="mailto:nylrain@163.com"><img src="/Public/home/images/wy.jpg" width="58" height="58" alt="pix" /></a>
        <a target="_blank" href="mailto:641351484@qq.com"><img src="/Public/home/images/qq.jpg" width="58" height="58" alt="pix" /></a>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div  align="center">
   @版权所有 ￥<a href="mailto:641351484@qq.com"> 联系我
  </div>
	</div>
</body>
</html>