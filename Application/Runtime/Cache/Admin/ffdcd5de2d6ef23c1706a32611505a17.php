<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>文章管理</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/Public/admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="/Public/admin/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/admin/css/amazeui.datatables.min.css"/>
    <link rel="stylesheet" href="/Public/admin/css/app.css">
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>

</head>

<body data-type="widgets">
<script src="/Public/admin/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->

    <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/admin/assets/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>Amaze UI</span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admin/assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admin/assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>禁言小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 新提示 -->
                        <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a>

                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-folder-o"></i>
                                            <span> 上午开会记录存档</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            1天前
                                        </div>
                                    </a>
                                </li>


                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="javascript:;">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>

    <!-- 风格切换 -->
    <div class="tpl-skiner">
        <div class="tpl-skiner-toggle am-icon-cog"></div>
        <div class="tpl-skiner-content">
            <div class="tpl-skiner-content-title">选择主题</div>
            <div class="tpl-skiner-content-bar"><span
                    class="skiner-color skiner-white" data-color="theme-white"></span> <span
                    class="skiner-color skiner-black" data-color="theme-black"></span></div>
        </div>
    </div>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
            <!-- 用户信息 -->


            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>

                <li class="sidebar-nav-link">
                    <a href="/admin.php?c=index">
                        <i class="am-icon-dashboard sidebar-nav-link-logo"></i> 控制台

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-navicon sidebar-nav-link-logo"></i> 文章管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin.php?c=article&a=update">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 写文章
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="/admin.php?c=article">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章列表
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="/admin.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 分类列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;"  class="sidebar-nav-sub-title">
                        <i class="am-icon-pencil-square sidebar-nav-link-logo"></i> 随记管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 写随记
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 随记列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-photo sidebar-nav-link-logo"></i> 相册管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 相册列表
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章图片
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-comments sidebar-nav-link-logo"></i> 留言管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 留言板
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章留言
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-puzzle-piece sidebar-nav-link-logo"></i> 更多功能
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 功能列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_email.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 邮箱功能
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_friend.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 友链功能
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_visit.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 访问查看
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-user sidebar-nav-link-logo"></i> 用户管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户信息
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 增加用户
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-gear sidebar-nav-link-logo"></i> 博客设置
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 主页信息
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 常规设置
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 编写方式
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 阅读设置
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 留言设置
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 素材设置
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">

                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title am-fl">换行边框</div>
                            <div class="widget-function am-fr">
                                <a href="javascript:;" class="am-icon-cog"></a>
                            </div>
                        </div>
                        <div class="widget-body am-fr">

                            <form class="am-form tpl-form-border-form">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">标题 <span
                                            class="tpl-form-line-small-title">Title</span></label>
                                    <div class="am-u-sm-12">
                                        <input type="text" class="tpl-form-input am-margin-top-xs" id="user-name"
                                               placeholder="请输入标题文字">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-12 am-form-label am-text-left">发布时间 <span
                                            class="tpl-form-line-small-title">Time</span></label>
                                    <div class="am-u-sm-12">
                                        <input type="text" class="am-form-field tpl-form-no-bg am-margin-top-xs"
                                               placeholder="发布时间" data-am-datepicker="" readonly>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-12 am-form-label am-text-left">作者 <span
                                            class="tpl-form-line-small-title">Author</span></label>
                                    <div class="am-u-sm-12  am-margin-top-xs">
                                        <select data-am-selected="{searchBox: 1}" style="display: none;">
                                            <option value="a">-The.CC</option>
                                            <option value="b">夕风色</option>
                                            <option value="o">Orange</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-12 am-form-label  am-text-left">SEO关键字 <span
                                            class="tpl-form-line-small-title">SEO</span></label>
                                    <div class="am-u-sm-12">
                                        <input type="text" class="am-margin-top-xs" placeholder="输入SEO关键字">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-12 am-form-label  am-text-left">封面图 <span
                                            class="tpl-form-line-small-title">Images</span></label>
                                    <div class="am-u-sm-12 am-margin-top-xs">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" alt="">
                                            </div>
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm ">
                                                <i class="am-icon-cloud-upload"></i> 添加封面图片
                                            </button>
                                            <input id="doc-form-file" type="file" multiple>
                                        </div>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-12 am-form-label  am-text-left">添加分类 <span
                                            class="tpl-form-line-small-title">Type</span></label>
                                    <div class="am-u-sm-12">
                                        <input type="text" id="user-weibo" class="am-margin-top-xs"
                                               placeholder="请添加分类用点号隔开">
                                        <div>

                                        </div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">隐藏文章</label>
                                    <div class="am-u-sm-12">
                                        <div class="tpl-switch">
                                            <input type="checkbox"
                                                   class="ios-switch bigswitch tpl-switch-btn am-margin-top-xs"
                                                   checked="">
                                            <div class="tpl-switch-btn-view">
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-12 am-form-label  am-text-left">文章内容&nbsp;&nbsp;&nbsp;(由于MarkDown插件受限于页面布局，图片和代码插入窗口的输入框位置会往下偏差，可点击<a href="/admin.php?c=article&a=themes">独立写作</a>)</label>
                                    <div class="am-u-sm-12 am-margin-top-xs">


                                            <input type="hidden" name="a_id">

                                        <!--<textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea>-->
                                    </div>
                                </div>


                                <!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>Themes - Editor.md examples</title>
        <!--<link rel="stylesheet" href="/lib/css/style.css" />-->
        <link rel="stylesheet" href="/css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
        <style>
            /* Custom Editor.md theme css example */
            /*
            .editormd-theme-dark {
                border-color: #1a1a17;

            }

            .editormd-theme-dark .editormd-toolbar {
                background: #1A1A17;
                border-color: #1a1a17;
            }

            .editormd-theme-dark .editormd-menu > li > a {
                color: #777;
                border-color: #1a1a17;
            }

            .editormd-theme-dark .editormd-menu > li.divider {
                border-right: 1px solid #111;
            }

            .editormd-theme-dark .editormd-menu > li > a:hover, .editormd-menu > li > a.active {
                border-color: #333;
                background: #333;
            }*/
        </style>
    </head>
    <body>
        <div id="layout">
            <div id="test-editormd">
                <textarea style="display:none;">[TOC]

### Themes

#### Setting

configs:

```javascript
{
    // Editor.md theme, default or dark, change at v1.5.0
    // You can also custom css class .editormd-theme-xxxx
    theme : "default | dark",

    // Preview container theme, added v1.5.0
    // You can also custom css class .editormd-preview-theme-xxxx
    previewTheme : "default | dark",

    // Added @v1.5.0 & after version this is CodeMirror (editor area) theme
    editorTheme : editormd.editorThemes['theme-name']
}
```

functions:

```javascript
editor.setTheme('theme-name');
editor.setEditorTheme('theme-name');
editor.setPreviewTheme('theme-name');
```

#### Default theme

- Editor.md theme : `default`
- Preview area theme : `default`
- Editor area theme : `default`

> Recommend `dark` theme.

#### Recommend editor area themes

- ambiance
- eclipse
- mdn-like
- mbo
- monokai
- neat
- pastel-on-dark

#### Editor area themes

- default
- 3024-day
- 3024-night
- ambiance
- ambiance-mobile
- base16-dark
- base16-light
- blackboard
- cobalt
- eclipse
- elegant
- erlang-dark
- lesser-dark
- mbo
- mdn-like
- midnight
- monokai
- neat
- neo
- night
- paraiso-dark
- paraiso-light
- pastel-on-dark
- rubyblue
- solarized
- the-matrix
- tomorrow-night-eighties
- twilight
- vibrant-ink
- xq-dark
- xq-light
</textarea>
            </div>
        </div>
        <script src="/lib/js/jquery.min.js"></script>
        <script src="/editormd.js"></script>
        <script type="text/javascript">
			var testEditor;

            function themeSelect(id, themes, lsKey, callback)
            {
                var select = $("#" + id);

                for (var i = 0, len = themes.length; i < len; i ++)
                {
                    var theme    = themes[i];
                    var selected = (localStorage[lsKey] == theme) ? " selected=\"selected\"" : "";

                    select.append("<option value=\"" + theme + "\"" + selected + ">" + theme + "</option>");
                }

                select.bind("change", function(){
                    var theme = $(this).val();

                    if (theme === "")
                    {
                        alert("theme == \"\"");
                        return false;
                    }

                    console.log("lsKey =>", lsKey, theme);

                    localStorage[lsKey] = theme;
                    callback(select, theme);
                });

                return select;
            }

            $(function() {
                testEditor = editormd("test-editormd", {
                    width        : "90%",
                    height       : 720,

                    // Editor.md theme, default or dark, change at v1.5.0
                    // You can also custom css class .editormd-preview-theme-xxxx
                    theme        : (localStorage.theme) ? localStorage.theme : "dark",

                    // Preview container theme, added v1.5.0
                    // You can also custom css class .editormd-preview-theme-xxxx
                    previewTheme : (localStorage.previewTheme) ? localStorage.previewTheme : "dark",

                    // Added @v1.5.0 & after version is CodeMirror (editor area) theme
                    editorTheme  : (localStorage.editorTheme) ? localStorage.editorTheme : "pastel-on-dark",
                    path         : '../lib/'
                });

                themeSelect("editormd-theme-select", editormd.themes, "theme", function($this, theme) {
                    testEditor.setTheme(theme);
                });

                themeSelect("editor-area-theme-select", editormd.editorThemes, "editorTheme", function($this, theme) {
                    testEditor.setCodeMirrorTheme(theme);
                    // or testEditor.setEditorTheme(theme);
                });

                themeSelect("preview-area-theme-select", editormd.previewThemes, "previewTheme", function($this, theme) {
                    testEditor.setPreviewTheme(theme);
                });
            });
        </script>
    </body>
</html>


                                <div class="am-form-group" align="center">
                                    <div class="am-u-sm-12 am-u-sm-push-12">
                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                            提交
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
<script src="http://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="/Public/admin/js/app.js"></script>

</body>

</html>