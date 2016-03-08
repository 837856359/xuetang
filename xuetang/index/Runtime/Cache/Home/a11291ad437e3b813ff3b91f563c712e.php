<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7" lang="zh-cn"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="zh-cn"><![endif]-->
<!--[if gt IE 9]><!--><html lang="zh-cn"><!--<![endif]-->

<head dir="ltr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">











    

  
      <title>
       学堂在线--课程信息
      </title>
  

  <script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>

  <script type="text/javascript" src="/jsi18n/"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery.min.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/user_track_norequire.js"></script>
  <link rel="icon" type="image/x-icon" href="/xuetang/Public/images/favicon.ico" />

  
  

    <link href="/xuetang/Public/css/lms-style-vendor.css" rel="stylesheet" type="text/css" />



  
  

    <link href="/xuetang/Public/css/lms-style-app.css" rel="stylesheet" type="text/css" />



  
  

    <link href="/xuetang/Public/css/lms-style-app-extend1.css" rel="stylesheet" type="text/css" />



  
  

    <link href="/xuetang/Public/css/lms-style-app-extend2.css" rel="stylesheet" type="text/css" />




    
    <script type="text/javascript" src="/xuetang/Public/js/lms-main_vendor.js" charset="utf-8"></script>



  <script>
    window.baseUrl = "/xuetang/Public/";
    (function (require) {
        var urlArgs = "v=555ca34";
      require.config({
          baseUrl: baseUrl,
          urlArgs: urlArgs
      });
    }).call(this, require || RequireJS.require);
  </script>
  <script type="text/javascript" src="/xuetang/Public/js/require-config-lms.js"></script>

  

  

    <link href="/xuetang/Public/css/lms-style-course-vendor.css" rel="stylesheet" type="text/css" />




  

    <link href="/xuetang/Public/css/lms-style-course.css" rel="stylesheet" type="text/css" />






  

    


<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css" />
<link href="http://s.xuetangx.com/resource/css/googlefonts.css" rel='stylesheet' type='text/css'>
<div id="ieversion"></div>
<div id="ie-banner"></div>

  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>



  <!--[if lt IE 9]>
    <script src="/xuetang/Public/js/html5shiv.0ce8f355891c.js"></script>
  <![endif]-->

  
  <!-- dummy segment.io -->
<script type="text/javascript">
  var analytics = {
    track: function() { return; },
    trackLink: function() { return; },
    pageview: function() { return; },
    page: function() { return; }
  };
</script>
<!-- end dummy segment.io -->


  <meta name="path_prefix" content="">

  <!-- dummy segment.io -->
<script type="text/javascript">
  var analytics = {
    track: function() { return; },
    trackLink: function() { return; },
    pageview: function() { return; },
    page: function() { return; }
  };
</script>
<!-- end dummy segment.io -->



<style type="text/css">
	#pages{font-size:150%;margin-left:100px;}
	#pages a{margin-left:20px;}
</style>
</head>

<body class="ltr  lang_zh-cn">
  <div class="window-wrap" dir="ltr" style="overflow:hidden;position:relative;">
    <a class="nav-skip" href="#content">跳过本内容页</a>

    
<!--[if IE]>
<div class="sr message-accessibility message" id="mathjax-accessibility-message" aria-hidden="true">
	<p class="copy">这个页面采用MathJax技术来显示数学公式。为了使数学式可用，我们建议使用MathPlayer插件。请访问<a href="//www.dessci.com/en/products/mathplayer/download.htm">MathPlayer下载页面</a> 来为你的浏览器下载插件。</p>
</div>
<div class="sr message-accessibility message" id="mathplayer-browser-message" aria-hidden="true">
	<p class="copy">
	 你的浏览器不支持MathPlayer插件。为了使用MathPlayer，请使用IE6到9兼容浏览器。
	 </p>
</div>
<![endif]-->

    












  <header class="global slim" aria-label="全局导航">
  <nav>

  <h1 class="logo">
    <a href="http://172.27.0.200/xuetang">
      
  <img src="/xuetang/Public/img/logo.png" height="60" alt="Home Page" id="tsinghua-logo"/>
  <style>
  .home>header{
    background-image: url("/xuetang/Public/img/logo.png");
  }
  </style>

    </a>
  </h1>

        <h2>
            <span class="provider">课程名称:</span>
              
            <?php echo ($cname); ?>

        </h2>

    <ol class="left nav-global authenticated">
      
  <li class="nav-global-01">
    <a href="/about">关于我们</a>
  </li>
  <li class="nav-global-02">
    <a href="/courses">查找课程</a>
  </li>

    </ol>
    <ol class="user">
      <li class="primary">
        <a href="/xuetang/index.php/Home/dashboard/index" class="user-link">
          <span class="avatar"></span>
          <span class="sr">控制面板:</span> <?php echo (session('username')); ?>
        </a>
      </li>
      <li class="primary">
        <a href="#" class="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr">更多选择下拉列表</span> &#9662;</a>
        <ul class="dropdown-menu" aria-label="More Options" role="menu">
          
          <li><a href="/xuetang/index.php/Home/Index/loginout" role="menuitem">退出</a></li>
        </ul>
      </li>
    </ol>
  </nav>
</header>
<!--[if lte IE 8]>
<div class="ie-banner" aria-hidden="true"><strong>警告:</strong> 你的浏览器不能完全支持全部功能. 我们强烈建议您使用 <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> 或 <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>.</div>
<![endif]-->
















    <div class="content-wrapper" id="content">
      



























<nav class="info wrapper-course-material">
  <div class="course-material">
        <ol class="course-tabs">
        
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/syllabus">
             教学大纲
             </a>
          </li>
          <li style="background:000;">
             <a href="/xuetang/index.php/Home/Courseware/ware">
                 微视频
				 <span class="sr">, current location</span>
             </a>
          </li>
          <li>
             <a href="/xuetang/index.php/Home/Studyadout/ppt">
             PPT
             </a>
          </li>
          <li>
             <a href="/xuetang/index.php/Home/Courseinfo/info"   class="active" >
                 资料
             </a>
          </li>
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/topic">
             试题检测
             </a>
          </li>
          <li>
             <a href="/xuetang/index.php/Home/Discuss/discuss" >
                 讨论区
             </a>
          </li>

    </ol>
  </div>
</nav>

<section class="container">
  <div class="info-wrapper">
    <section class="updates">

      <h1>课程更新与新闻</h1>
      
	  <?php if(is_array($chapter_name)): foreach($chapter_name as $key=>$vo): ?><section>
		<article><pre>
			<b><?php echo ($vo["ch_name"]); ?></b>
			<?php echo ($vo["notice"]); ?>
			</pre>
			<h2><?php echo ($vo["addtime"]); ?></h2>
			</article>
			</section><?php endforeach; endif; ?>
			<?php echo ($page); ?>
			</section>

    
	
	
	
	
	
	<section aria-label="讲义导航" class="handouts">
      <h1>课程讲义</h1>
      <p><b>提纲</b></p>
	  <?php if(is_array($chapter_other)): foreach($chapter_other as $key=>$vo): ?><ol><pre><a href="/xuetang/index.php/Home/Courseinfo/info_down?type=1&file_name=<?php echo ($vo["outline_url"]); ?>" onclick=" return confirm('这将会下载此文件，确定吗？')">【提纲】<?php echo ($vo["outline_url"]); ?></a></pre></ol><?php endforeach; endif; ?>






	<p><b>课件</b></p>
		<?php if(is_array($chapter_other)): foreach($chapter_other as $key=>$vo): ?><ol><pre><a href="/xuetang/index.php/Home/Courseinfo/info_down?type=2&file_name=<?php echo ($vo["ware_url"]); ?>" onclick=" return confirm('这将会下载此文件，确定吗？')">【课件】<?php echo ($vo["ware_url"]); ?></a></pre></ol><?php endforeach; endif; ?>




	<p><b>课程代码</b></p>
		<?php if(is_array($chapter_other)): foreach($chapter_other as $key=>$vo): ?><ol><pre><a href="/xuetang/index.php/Home/Courseinfo/info_down?type=3&file_name=<?php echo ($vo["code_url"]); ?>" onclick=" return confirm('这将会下载此文件，确定吗？')">【课程代码】<?php echo ($vo["code_url"]); ?></a></pre></ol><?php endforeach; endif; ?>





    </section>
	</div>
	</section>

      
    </div>

    
        <div class="wrapper-footer">
            <style tyep="text/css">
            cite.intro_data {
                display: none;
            }
            
            .follow_name.name_bold {
                margin-top: 2px;
            }
            
            iframe#sina-btn {
                height: 22px;
                float: right;
                width: 222px;
            }
            
            .outside-app p a,
            .outside-app p a:link:hover,
            .outside-app p a:link:focus,
            .outside-app p a:visited:hover,
            .outside-app p a:visited:focus {
                color: #9b3286;
            }
            
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>a:hover,
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads div.info-wrapper section.handouts ol li .video-download-button>div.hitarea:hover+h4,
            div.info-wrapper section.handouts ol li .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>div.hitarea:hover+h4,
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads div.info-wrapper section.handouts ol li .video-download-button>div.hitarea:focus+h4,
            div.info-wrapper section.handouts ol li .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>div.hitarea:focus+h4,
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>a:focus {
                background: #9b3286;
            }
            
            .light-button:focus:not(:disabled),
            div.history-controls input[type="submit"]:focus:not(:disabled),
            a.light-button:focus:not(:disabled),
            .gray-button:focus:not(:disabled),
            input[type="reset"]:focus:not(:disabled),
            input[type="submit"]:focus:not(:disabled),
            input[type="button"]:focus:not(:disabled),
            button:focus:not(:disabled),
            .button:focus:not(:disabled),
            .xmodule_display.xmodule_LTIModule div.lti .wrapper-lti-link .lti-link .link_lti_new_window:focus:not(:disabled) {
                border: none;
                box-shadow: none;
                text-decoration: none;
            }
            
            .light-button:active:not(:disabled),
            div.history-controls input[type="submit"]:active:not(:disabled),
            a.light-button:active:not(:disabled),
            .gray-button:active:not(:disabled),
            input[type="reset"]:active:not(:disabled),
            input[type="submit"]:active:not(:disabled),
            input[type="button"]:active:not(:disabled),
            button:active:not(:disabled),
            .button:active:not(:disabled),
            .xmodule_display.xmodule_LTIModule div.lti .wrapper-lti-link .lti-link .link_lti_new_window:active:not(:disabled) {
                border: 1px solid #cacaca;
                box-shadow: inset 0 0 8px 4px #c3c3c3, inset 0 0 8px 4px #c3c3c3, 0 1px 1px 0 #eee;
            }
            
            header.global .nav-courseware li .cta:hover,
            header.global .nav-courseware div .cta:hover,
            .view-partial-mktgregister .action.action-register:hover,
            .view-partial-mktgregister .action.access-courseware:hover,
            header.global .nav-courseware li .cta:active,
            header.global .nav-courseware div .cta:active,
            .view-partial-mktgregister .action.action-register:active,
            .view-partial-mktgregister .action.access-courseware:active,
            header.global .nav-courseware li .cta:focus,
            header.global .nav-courseware div .cta:focus,
            .view-partial-mktgregister .action.action-register:focus,
            .view-partial-mktgregister .action.access-courseware:focus {
                background: #9b3286;
            }
            
            header.global .nav-courseware li .cta:focus,
            header.global .nav-courseware div .cta:focus,
            .view-partial-mktgregister .action.action-register:focus,
            .view-partial-mktgregister .action.access-courseware:focus {
                box-shadow: 0 0 6px 0 #9b3286;
            }
            
            header.global ol.user ul.dropdown-menu li>a {
                color: #9b3286;
            }
            
            .slick-header-column.ui-state-default {
                height: 20px;
                line-height: 20px;
            }
            
            div,
            ul,
            ol,
            li,
            span,
            a {
                outline: none!important;
            }
            </style>
            <footer>
            <html xmlns:wb="http://open.weibo.com/wb">
            <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
                <div class="colophon" style="width:100%;">
                    <nav class="nav-colophon">
                        <ol>
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">常见问题</a></li>
                            <li><a href="#">联系我们</a></li>
                        </ol>
                        <div id="weibo-follow-btn">
                            <wb:follow-button uid="5327955295" type="red_3" width="100%" height="24" ></wb:follow-button>
                        </div>
                    </nav>
                </div>
            </footer>
            <script type="text/javascript" charset="utf-8">
            if ("http:" == document.location.protocol) {
                document.getElementById('weibo-follow-btn').innerHTML = '<wb:follow-button uid="5327955295" type="red_3" width="100%" height="24" ></wb:follow-button>';
            }
            </script>
        </div>
        <div id="tu-footer">
            <div class="tu-container">
                
                <div class="pull-left">
                  <img src="/xuetang/Public/img/edx_logo.png" height="60" alt="Home Page" />
                </div>
                <div class="pull-right">
                    <span>地址：北京市海淀区软件园南站57号</span>
                    <br/>
                    <span>版权所有：八维研修学院</span>
                </div>
           
            </div>
        </div>
    

  </div>

    
    <script type="text/javascript" src="/xuetang/Public/js/lms-application.js" charset="utf-8"></script>


    
    <script type="text/javascript" src="/xuetang/Public/js/lms-modules.js" charset="utf-8"></script>



  
  <script type="text/javascript" src="/xuetang/Public/js/jquery.treeview.js"></script>
  <script type="text/javascript" charset="utf-8">
$(document).ready(function(){
    $(".handouts").treeview({collapsed:true, unique:true/*, cookieId: "treeview-book-nav", persist: "cookie"*/});
    });
  </script>


  <div style="display:none;"><script type="text/javascript" src="/xuetang/Public/js/analyse.js"></script></div>
</body>
</html>