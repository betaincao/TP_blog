<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理界面</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Public/admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="http://cdn.bootcss.com/echarts/3.3.2/echarts.min.js"></script>
    <link rel="stylesheet" href="/Public/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/admin/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/Public/admin/css/app.css">
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>

</head>

<body data-type="index">
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
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
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
                <div class="row  am-cf">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-head am-cf">
                            <div class="widget-title am-fl">
                                日志数
                            </div>
                            <br>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    27,294
                                </div>

                                <div class="widget-fluctuation-description-text">
                                    <br>今日有 <strong>2593</strong>
                                </div>
                                <span class="widget-statistic-icon am-icon-gears"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-head am-cf">
                            <div class="widget-title am-fl">
                                文章数量
                            </div>
                            <br>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    27,294
                                </div>

                                <div class="widget-fluctuation-description-text">
                                    <br>今日有 <strong>2593</strong>
                                </div>
                                <span class="widget-statistic-icon am-icon-navicon"></span>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-head am-cf">
                            <div class="widget-title am-fl">
                                随记数量
                            </div>
                            <br>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    27,294
                                </div>

                                <div class="widget-fluctuation-description-text">
                                    <br>今日有 <strong>2593</strong>
                                </div>
                                <span class="widget-statistic-icon am-icon-pencil-square"></span>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-head am-cf">
                            <div class="widget-title am-fl">
                                相册数量
                            </div>
                            <br>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    27,294
                                </div>

                                <div class="widget-fluctuation-description-text">
                                    <br>今日有 <strong>2593</strong>
                                </div>
                                <span class="widget-statistic-icon am-icon-photo"></span>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-head am-cf">
                            <div class="widget-title am-fl">
                                留言数
                            </div>
                            <br>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    27,294
                                </div>

                                <div class="widget-fluctuation-description-text">
                                    <br>今日有 <strong>2593</strong>
                                </div>
                                <span class="widget-statistic-icon am-icon-comment"></span>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="widget widget-head am-cf">
                            <div class="widget-title am-fl">
                                访问量
                            </div>
                            <br>
                            <div class="widget-statistic-body">
                                <div class="widget-statistic-value">
                                    27,294
                                </div>

                                <div class="widget-fluctuation-description-text">
                                    <br>今日有 <strong>2593</strong>
                                </div>
                                <span class="widget-statistic-icon am-icon-eye"></span>
                            </div>
                        </div>
                    </div>

                <div class="row am-cf">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4 widget-margin-bottom-lg ">
                        <div class="tpl-user-card am-text-center widget-body-lg">
                            <div class="tpl-user-card-title">
                                禁言小张
                            </div>
                            <div class="achievement-subheading">
                                月度最佳员工
                            </div>
                            <img class="achievement-image" src="/Public/admin/img/user07.png" alt="">
                            <div class="achievement-description">
                                禁言小张在
                                <strong>30天内</strong> 禁言了
                                <strong>200多</strong>人。
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-8 widget-margin-bottom-lg">

                        <div class="widget am-cf widget-body-lg">

                            <div class="widget-body  am-fr">
                                <div class="am-scrollable-horizontal ">
                                    <table width="100%" class="am-table am-table-compact am-text-nowrap tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>文章标题</th>
                                                <th>作者</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeX">
                                                <td>新加坡大数据初创公司 Latize 获 150 万美元风险融资</td>
                                                <td>张鹏飞</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>自拍的“政治角色”：观众背对希拉里自拍合影表示“支持”</td>
                                                <td>天纵之人</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>关于创新管理，我想和你当面聊聊。</td>
                                                <td>王宽师</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>究竟是趋势带动投资，还是投资引领趋势？</td>
                                                <td>着迷</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>Docker领域再添一员，网易云发布“蜂巢”，加入云计算之争</td>
                                                <td>醉里挑灯看键</td>
                                                <td>2016-09-26</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="http://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
    <script src="/Public/admin/js/amazeui.datatables.min.js"></script>
    <script src="/Public/admin/js/dataTables.responsive.min.js"></script>
    <script src="/Public/admin/js/app.js"></script>

</body>

</html>