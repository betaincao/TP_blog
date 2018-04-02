<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <title>Rain_Blog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="/Public/home/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
    <script type="text/javascript" src="/Public/home/js/cufon-yui.js"></script>
    <script type="text/javascript" src="/Public/home/js/cuf_run.js"></script>
    <link href="/Public/home/css/style2.css" rel="stylesheet">
    <link href="/Public/home/css/media.css" rel="stylesheet">
    <!-- CuFon ends -->
</head>
<body>
<div class="main" >
    <link href="/Public/home/css/style.css" rel="stylesheet" type="text/css" />
<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ($menu["show"]); ?>"><a href="<?php echo ($menu["href"]); ?>"><?php echo ($menu["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="clr"></div>
      <br>
      <br>
      <br>

      <div class="logo"><h1><a href="/index.php"><span>Rain_Blog</span></a> <small>   </small></h1></div>
      <div class="clr"></div>
    </div>
  </div>






    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="content_resize">
            <div class="mainbar">
                <div class="ibody">
                    <article align="center">
                        <div class="index_about">
                            <h2 class="c_titile"><?php echo ($article["a_title"]); ?></h2>
                            <p class="box_c"><span class="d_time">发布时间：<?php echo ($article["a_adddate"]); ?></span><span>编辑：<?php echo ($article["a_adduser"]); ?></span>
                                <span>浏览（<?php echo ($article["a_visit"]); ?>）</span><span>评论（<?php echo ($article["a_comment"]); ?>）</span>
                            <p class="box_c"><span>关键字词</span>：<?php echo ($article["a_type"]); ?></p>
                            </p>

                            <ul class="infos">
                                <!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>HTML Preview(markdown to html) - Editor.md examples</title>
        <link rel="stylesheet" href="/lib/css/style.css" />
        <link rel="stylesheet" href="/css/editormd.preview.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
        <style>            
            .editormd-html-preview {
                width: 90%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div id="layout">
            <div id="test-editormd-view2">
                <textarea id="append-test" style="display:none;">
                <?php echo ($article["a_text"]); ?>
                    ![](http://www.rainweb.site/wp-content/uploads/2017/02/email5.png)
                </textarea>
            </div>
        </div>
        <!-- <script src="js/zepto.min.js"></script>
		<script>		
			var jQuery = Zepto;  // 为了避免修改flowChart.js和sequence-diagram.js的源码，所以使用Zepto.js时想支持flowChart/sequenceDiagram就得加上这一句
		</script> -->
        <script src="/lib/js/jquery.min.js"></script>
        <script src="/lib/marked.min.js"></script>
        <script src="/lib/prettify.min.js"></script>
        
        <script src="/lib/raphael.min.js"></script>
        <script src="/lib/underscore.min.js"></script>
        <script src="/lib/sequence-diagram.min.js"></script>
        <script src="/lib/flowchart.min.js"></script>
        <script src="/lib/jquery.flowchart.min.js"></script>

        <script src="/editormd.js"></script>
        <script type="text/javascript">
            $(function() {
                var testEditormdView, testEditormdView2;
                
                $.get("test.md", function(markdown) {
                    
				    testEditormdView = editormd.markdownToHTML("test-editormd-view", {
                        markdown        : markdown ,//+ "\r\n" + $("#append-test").text(),
                        //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
                        htmlDecode      : "style,script,iframe",  // you can filter tags decode
                        //toc             : false,
                        tocm            : true,    // Using [TOCM]
                        //tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
                        //gfm             : false,
                        //tocDropdown     : true,
                        // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
                        emoji           : true,
                        taskList        : true,
                        tex             : true,  // 默认不解析
                        flowChart       : true,  // 默认不解析
                        sequenceDiagram : true,  // 默认不解析
                    });
                    
                    //console.log("返回一个 jQuery 实例 =>", testEditormdView);
                    
                    // 获取Markdown源码
                    //console.log(testEditormdView.getMarkdown());
                    
                    //alert(testEditormdView.getMarkdown());
                });
                    
                testEditormdView2 = editormd.markdownToHTML("test-editormd-view2", {
                    htmlDecode      : "style,script,iframe",  // you can filter tags decode
                    emoji           : true,
                    taskList        : true,
                    tex             : true,  // 默认不解析
                    flowChart       : true,  // 默认不解析
                    sequenceDiagram : true,  // 默认不解析
                });
            });
        </script>
    </body>
</html>
                            </ul>
                        </div>
                    </article>
                        </div>
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