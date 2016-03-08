<?php if (!defined('THINK_PATH')) exit();?><!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7" lang="zh-cn"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="zh-cn"><![endif]-->
<!--[if gt IE 9]><!-->
<html lang="zh-cn"><!--<![endif]--><head dir="ltr">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">











    

  
      <title>
       学堂在线--讨论区
      </title>
  

  <script src="/xuetang/Public/html/v.htm" charset="utf-8"></script><script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>

  <script type="text/javascript" src="/xuetang/Public/qt/a"></script>
 
  <script type="text/javascript" src="/xuetang/Public/js/user_track_norequire.js"></script>
  <link rel="icon" type="image/x-icon" href="http://www.xuetangx.com/static/images/favicon.e0c76d09021e.ico">

  
  

    <link href="/xuetang/Public/css/lms-style-vendor.css" rel="stylesheet" type="text/css">



  
  

    <link href="/xuetang/Public/css/lms-style-app.css" rel="stylesheet" type="text/css">



  
  

    <link href="/xuetang/Public/css/lms-style-app-extend1.css" rel="stylesheet" type="text/css">



  
  

    <link href="/xuetang/Public/css/lms-style-app-extend2.css" rel="stylesheet" type="text/css">




    
    <script type="text/javascript" src="/xuetang/Public/js/lms-main_vendor.js" charset="utf-8"></script>



  <script>
    window.baseUrl = "/static/";
    (function (require) {
        var urlArgs = "v=555ca34";
      require.config({
          baseUrl: baseUrl,
          urlArgs: urlArgs
      });
    }).call(this, require || RequireJS.require);
  </script>
  <script type="text/javascript" src="/xuetang/Public/js/require-config-lms.js"></script>

  

  

    <link href="/xuetang/Public/css/lms-style-course-vendor.css" rel="stylesheet" type="text/css">




  

    <link href="/xuetang/Public/css/lms-style-course.css" rel="stylesheet" type="text/css">






<script type="text/javascript" src="/xuetang/Public/js/split.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery_003.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery_004.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown_002.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown_003.js"></script>


<script type="text/javascript" src="/xuetang/Public/js/jquery_006.js"></script>


<script type="text/javascript" src="/xuetang/Public/js/jquery.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery_002.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/mustache.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/URI.js"></script>

<script type="text/javascript" src="/xuetang/Public/js/tooltip_manager.js"></script>

<link href="/xuetang/Public/css/jquery.css" rel="stylesheet" type="text/css">




  

    


<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css">
<link href="/xuetang/Public/css/googlefonts.css" rel="stylesheet" type="text/css">
<style type="text/css">.MathJax_Hover_Frame {border-radius: .25em; -webkit-border-radius: .25em; -moz-border-radius: .25em; -khtml-border-radius: .25em; box-shadow: 0px 0px 15px #83A; -webkit-box-shadow: 0px 0px 15px #83A; -moz-box-shadow: 0px 0px 15px #83A; -khtml-box-shadow: 0px 0px 15px #83A; border: 1px solid #A6D ! important; display: inline-block; position: absolute}
.MathJax_Hover_Arrow {position: absolute; width: 15px; height: 11px; cursor: pointer}
</style><style type="text/css">#MathJax_About {position: fixed; left: 50%; width: auto; text-align: center; border: 3px outset; padding: 1em 2em; background-color: #DDDDDD; color: black; cursor: default; font-family: message-box; font-size: 120%; font-style: normal; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_Menu {position: absolute; background-color: white; color: black; width: auto; padding: 2px; border: 1px solid #CCCCCC; margin: 0; cursor: default; font: menu; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_MenuItem {padding: 2px 2em; background: transparent}
.MathJax_MenuArrow {position: absolute; right: .5em; color: #666666}
.MathJax_MenuActive .MathJax_MenuArrow {color: white}
.MathJax_MenuCheck {position: absolute; left: .7em}
.MathJax_MenuRadioCheck {position: absolute; left: 1em}
.MathJax_MenuLabel {padding: 2px 2em 4px 1.33em; font-style: italic}
.MathJax_MenuRule {border-top: 1px solid #CCCCCC; margin: 4px 1px 0px}
.MathJax_MenuDisabled {color: GrayText}
.MathJax_MenuActive {background-color: Highlight; color: HighlightText}
.MathJax_Menu_Close {position: absolute; width: 31px; height: 31px; top: -15px; left: -15px}
</style><style type="text/css">#MathJax_Zoom {position: absolute; background-color: #F0F0F0; overflow: auto; display: block; z-index: 301; padding: .5em; border: 1px solid black; margin: 0; font-weight: normal; font-style: normal; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; box-shadow: 5px 5px 15px #AAAAAA; -webkit-box-shadow: 5px 5px 15px #AAAAAA; -moz-box-shadow: 5px 5px 15px #AAAAAA; -khtml-box-shadow: 5px 5px 15px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_ZoomOverlay {position: absolute; left: 0; top: 0; z-index: 300; display: inline-block; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
#MathJax_ZoomFrame {position: relative; display: inline-block; height: 0; width: 0}
#MathJax_ZoomEventTrap {position: absolute; left: 0; top: 0; z-index: 302; display: inline-block; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
</style><style type="text/css">.MathJax_Preview {color: #888}
#MathJax_Message {position: fixed; left: 1px; bottom: 2px; background-color: #E6E6E6; border: 1px solid #959595; margin: 0px; padding: 2px 8px; z-index: 102; color: black; font-size: 80%; width: auto; white-space: nowrap}
#MathJax_MSIE_Frame {position: absolute; top: 0; left: 0; width: 0px; z-index: 101; border: 0px; margin: 0px; padding: 0px}
.MathJax_Error {color: #CC0000; font-style: italic}
</style><style type="text/css">DIV.MathJax_MathML {text-align: center; margin: .75em 0px}
.MathJax_MathML {font-style: normal; font-weight: normal; line-height: normal; font-size: 100%; font-size-adjust: none; text-indent: 0; text-align: left; text-transform: none; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; direction: ltr; border: 0; padding: 0; margin: 0}
span.MathJax_MathML {display: inline}
div.MathJax_MathML {display: block}
.MathJax_mmlExBox {display: block; overflow: hidden; height: 1px; width: 60ex; padding: 0; border: 0; margin: 0}
[mathvariant="double-struck"] {font-family: MathJax_AMS, MathJax_AMS-WEB}
[mathvariant="script"] {font-family: MathJax_Script, MathJax_Script-WEB}
[mathvariant="fraktur"] {font-family: MathJax_Fraktur, MathJax_Fraktur-WEB}
[mathvariant="bold-script"] {font-family: MathJax_Script, MathJax_Caligraphic-WEB; font-weight: bold}
[mathvariant="bold-fraktur"] {font-family: MathJax_Fraktur, MathJax_Fraktur-WEB; font-weight: bold}
[mathvariant="monospace"] {font-family: monospace}
[mathvariant="sans-serif"] {font-family: sans-serif}
[mathvariant="bold-sans-serif"] {font-family: sans-serif; font-weight: bold}
[mathvariant="sans-serif-italic"] {font-family: sans-serif; font-style: italic}
[mathvariant="sans-serif-bold-italic"] {font-family: sans-serif; font-style: italic; font-weight: bold}
[class="MJX-tex-oldstyle"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB}
[class="MJX-tex-oldstyle-bold"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB; font-weight: bold}
[class="MJX-tex-caligraphic"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB}
[class="MJX-tex-caligraphic-bold"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB; font-weight: bold}
@font-face /*1*/ {font-family: MathJax_AMS-WEB; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_AMS-Regular.otf')}
@font-face /*2*/ {font-family: MathJax_Script-WEB; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Script-Regular.otf')}
@font-face /*3*/ {font-family: MathJax_Fraktur-WEB; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Fraktur-Regular.otf')}
@font-face /*4*/ {font-family: MathJax_Caligraphic-WEB; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Caligraphic-Regular.otf')}
@font-face /*5*/ {font-family: MathJax_Fraktur-WEB; font-weight: bold; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Fraktur-Bold.otf')}
@font-face /*6*/ {font-family: MathJax_Caligraphic-WEB; font-weight: bold; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Caligraphic-Bold.otf')}
</style><style type="text/css">.MathJax_Display {text-align: center; margin: 1em 0em; position: relative; display: block; width: 100%}
.MathJax .merror {background-color: #FFFF88; color: #CC0000; border: 1px solid #CC0000; padding: 1px 3px; font-style: normal; font-size: 90%}
#MathJax_Tooltip {background-color: InfoBackground; color: InfoText; border: 1px solid black; box-shadow: 2px 2px 5px #AAAAAA; -webkit-box-shadow: 2px 2px 5px #AAAAAA; -moz-box-shadow: 2px 2px 5px #AAAAAA; -khtml-box-shadow: 2px 2px 5px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true'); padding: 3px 4px; z-index: 401; position: absolute; left: 0; top: 0; width: auto; height: auto; display: none}
.MathJax {display: inline; font-style: normal; font-weight: normal; line-height: normal; font-size: 100%; font-size-adjust: none; text-indent: 0; text-align: left; text-transform: none; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; direction: ltr; border: 0; padding: 0; margin: 0}
.MathJax img, .MathJax nobr, .MathJax a {border: 0; padding: 0; margin: 0; max-width: none; max-height: none; vertical-align: 0; line-height: normal; text-decoration: none}
img.MathJax_strut {border: 0 !important; padding: 0 !important; margin: 0 !important; vertical-align: 0 !important}
.MathJax span {display: inline; position: static; border: 0; padding: 0; margin: 0; vertical-align: 0; line-height: normal; text-decoration: none}
.MathJax nobr {white-space: nowrap ! important}
.MathJax img {display: inline ! important; float: none ! important}
.MathJax * {transition: none; -webkit-transition: none; -moz-transition: none; -ms-transition: none; -o-transition: none}
.MathJax_Processing {visibility: hidden; position: fixed; width: 0; height: 0; overflow: hidden}
.MathJax_Processed {display: none!important}
.MathJax_ExBox {display: block; overflow: hidden; width: 1px; height: 60ex}
.MathJax .MathJax_EmBox {display: block; overflow: hidden; width: 1px; height: 60em}
.MathJax .MathJax_HitBox {cursor: text; background: white; opacity: 0; filter: alpha(opacity=0)}
.MathJax .MathJax_HitBox * {filter: none; opacity: 1; background: transparent}
#MathJax_Tooltip * {filter: none; opacity: 1; background: transparent}
@font-face {font-family: MathJax_Main; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Main-Regular.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Main-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Main; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Main-Bold.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Main-Bold.otf') format('opentype'); font-weight: bold}
@font-face {font-family: MathJax_Main; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Main-Italic.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Main-Italic.otf') format('opentype'); font-style: italic}
@font-face {font-family: MathJax_Math; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Math-Italic.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Math-Italic.otf') format('opentype'); font-style: italic}
@font-face {font-family: MathJax_Caligraphic; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Caligraphic-Regular.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Caligraphic-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size1; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size1-Regular.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size1-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size2; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size2-Regular.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size2-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size3; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size3-Regular.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size3-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size4; src: url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size4-Regular.woff') format('woff'), url('http://s.xuetangx.com/resource/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size4-Regular.otf') format('opentype')}
.MathJax .noError {vertical-align: ; font-size: 90%; text-align: left; color: black; padding: 1px 3px; border: 1px solid}
</style></head><body class="ltr discussion lang_zh-cn"><div style="visibility: hidden; overflow: hidden; position: absolute; top: 0px; height: 1px; width: auto; padding: 0px; border: 0px none; margin: 0px; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal;"><div id="MathJax_Hidden"></div></div><div style="display: none;" id="MathJax_Message"></div><div id="ieversion"></div>
<div id="ie-banner"></div>

  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>



  <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.0ce8f355891c.js"></script>
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







  <div class="window-wrap" dir="ltr" style="overflow:hidden;position:relative;">
    <a class="nav-skip" href="#discussion-container">跳过本内容页</a>

    
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
    <a href="http://www.xuetangx.com/">
      
  <img src="/xuetang/Public/images/tsinghua-T-logo2.png" alt="Home Page" id="tsinghua-logo" height="60">
  <style>
  .home>header{
    background-image: url("/static/images/tsinghua/tsinghua-pano.jpg");
  }
  </style>

    </a>
  </h1>

        <h2>
            <span class="provider">NCTU:</span>
              
            <?php echo ($cname); ?>

        </h2>

    <ol class="left nav-global authenticated">
      
  <li class="nav-global-01">
    <a href="http://www.xuetangx.com/about">关于我们</a>
  </li>
  <li class="nav-global-02">
    <a href="http://www.xuetangx.com/courses">查找课程</a>
  </li>

    </ol>
    <ol class="user">
      <li class="primary">
        <a href="/xuetang/index.php/Home/dashboard/index" class="user-link">
          <span class="avatar"></span>
          <span class="sr">控制面板： </span><?php echo (session('username')); ?>
        </a>
      </li>
      <li class="primary">
        <a href="#" class="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr">更多选择下拉列表</span> ▾</a>
        <ul class="dropdown-menu" aria-label="More Options" role="menu">
          
          <li><a href="/xuetang/index.php/Home/Index/loginout" role="menuitem">登出</a></li>
        </ul>
      </li>
    </ol>
  </nav>
</header>
<!--[if lte IE 8]>
<div class="ie-banner" aria-hidden="true"><strong>警告:</strong> 你的浏览器不能完全支持全部功能. 我们强烈建议您使用 <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> 或 <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>.</div>
<![endif]-->
















    <div class="content-wrapper" id="content">
      


























<nav class="discussion wrapper-course-material">
  <div class="course-material">
    <ol class="course-tabs">
        
          <li>
             <a href="/xuetang/index.php/Home/Courseware/ware" class="">
                 课件
             </a>
          </li>
        
          <li>
             <a href="/xuetang/index.php/Home/Courseinfo/info" class="">
                 课程信息
             </a>
          </li>
        
          <li>
             <a href="/xuetang/index.php/Home/Discuss/discuss" class="active">
                 讨论区
                   <span class="sr">, current location</span>
             </a>
          </li>
        
          <li>
             <a href="/xuetang/index.php/Home/Courserate/rate" class="">
                 进度
             </a>
          </li>
        
          
        
         
      
    <li class="right"><a href="/xuetang/index.php/Home/Discuss/addCard" class="new-post-btn" role="button"><span class="icon fa fa-edit new-post-icon"></span>新的帖子</a></li>

    </ol>
  </div>
</nav>



<section class="discussion container" id="discussion-container" data-roles="{&quot;Moderator&quot;: [], &quot;Administrator&quot;: [28252, 573005, 595875], &quot;Community TA&quot;: [84490, 86666, 217471, 248602]}" data-course-id="NCTU/nctucmszb/2015_T1" data-user-info="{&quot;username&quot;: &quot;-u8584u3001u51c9&quot;, &quot;follower_ids&quot;: [], &quot;default_sort_key&quot;: &quot;date&quot;, &quot;nickname&quot;: &quot;-u8584u3001u51c9&quot;, &quot;downvoted_ids&quot;: [], &quot;subscribed_thread_ids&quot;: [&quot;558a9dd6f605ab69ed0013fa&quot;], &quot;upvoted_ids&quot;: [], &quot;external_id&quot;: &quot;701120&quot;, &quot;id&quot;: &quot;701120&quot;, &quot;subscribed_user_ids&quot;: [], &quot;subscribed_commentable_ids&quot;: []}" data-threads="[{&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 3, &quot;updated_at&quot;: &quot;2015-05-27T02:45:25Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/b54355ec24ff40899392004256d79106&quot;, &quot;id&quot;: &quot;&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;[\u6c42\u95ee] \u59cb\u8ba1\u7bc7\u3001\u4f5c\u6218\u7bc7\u3001\u8c0b\u653b\u7bc7\u3001\u519b\u5f62\u7bc7\u3001\u5175\u52bf\u7bc7\u3001\u865a\u5b9e\u7bc7\u3001\u519b\u4e89\u7bc7\u4f5c\u4e1a\u91ca\u7591\u5e16\uff01&quot;, &quot;commentable_id&quot;: &quot;e5cb9d0aaff744b6add0e5a5d135f654&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u671f\u4e2d\u8003\u524d\u7684\u4f5c\u4e1a\u5982\u679c\u6709\u7591\u95ee\u7684\uff0c\u8bf7\u7edf\u4e00\u53d1\u5728\u8fd9\u4e2a\u5e16\u5b50\u91cc\u5537\u2026\n\u8bf7\u5177\u4f53\u63cf\u8ff0\u60a8\u7684\u7591\u95ee\u4ee5\u53ca\u7406\u7531\u5537\u2026\n\n\n\u7bc7\u7ae0\u540d\uff1a\n\n\u7591\u95ee\u63cf\u8ff0\uff1a&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-27T02:27:52Z&quot;, &quot;courseware_title&quot;: &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a / \u4f5c\u4e1a\u91ca\u7591\u8ba8\u8bba\u533a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 6, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 50, &quot;updated_at&quot;: &quot;2015-05-27T02:45:13Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/b54355ec24ff40899392004256d79106&quot;, &quot;id&quot;: &quot;55652a82f605ab36c8003690&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 1, &quot;down_count&quot;: 0, &quot;point&quot;: 1, &quot;up_count&quot;: 1}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;[\u6c42\u95ee] \u671f\u4e2d\u8003\u91ca\u7591\u5e16\uff01&quot;, &quot;commentable_id&quot;: &quot;e5cb9d0aaff744b6add0e5a5d135f654&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u671f\u4e2d\u8003\u5df2\u7ecf\u987a\u5229\u7ed3\u675f\u4e86\uff0c\u5927\u5bb6\u7ec8\u65bc\u53ef\u4ee5\u5f00\u59cb\u5927\u65b9\u7684\u8ba8\u8bba\u4e86\u3002\n\u5982\u679c\u4f60\u6709\u4efb\u4f55\u7684\u95ee\u9898\uff0c\u8bf7\u7edf\u4e00\u53d1\u5728\u8fd9\u4e2a\u5e16\u5b50\u91cc\u3002\n\u8bf7\u5177\u4f53\u63cf\u8ff0\u4f60\u7684\u7591\u95ee\u4ee5\u53ca\u7406\u7531\u5537\u2026\n\n\u9898\u76ee\uff1a\n\n\u7591\u95ee\u63cf\u8ff0\uff1a&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-27T02:22:58Z&quot;, &quot;courseware_title&quot;: &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a / \u4f5c\u4e1a\u91ca\u7591\u8ba8\u8bba\u533a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 50, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 9, &quot;updated_at&quot;: &quot;2015-05-26T03:04:03Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;5563db46f605aba4ef0032d4&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 3, &quot;down_count&quot;: 0, &quot;point&quot;: 3, &quot;up_count&quot;: 3}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;\u4e00\u8def\u767c\u767c\u767c\uff0116888\u2026&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;![\u6b64\u5904\u8f93\u5165\u56fe\u50cf\u7684\u63cf\u8ff0][1]\n\n\n  [1]: http://storage.xuetangx.com/discussion/user/572770/discussion-20150526102334png_20150526102334\n\n\u732a\u811a\u59ca\u59ca\u6211\u771f\u7684\u89c9\u5f97\u4e2d\u6587\u662f\u4e00\u4e2a\u5f88\u6709\u8da3\u7684\u8bed\u8a00\uff0c\u6211\u4eec\u5e38\u5e38\u795d\u798f\u4e00\u8def\u53d1\u53d1\u53d1\uff0c\u6570\u5b57\u5c31\u53ef\u4ee5\u7b80\u5199\u621016888\uff0c\u597d\u542c\u53c8\u5409\u7965\uff0c\u591a\u68d2\u5436\uff01\n\n\u54b1\u4eec\u8fd9\u8bfe\u76ee\u524d\u9009\u8bfe\u4eba\u6570\u5df2\u7ecf\u8d85\u8fc715K\uff0c\u5728\u8bfe\u7a0b\u62a5\u540d\u7ed3\u675f\u524d\uff082015.06.30\uff09\uff0c\u4e0d\u77e5\u9053\u6709\u6ca1\u6709\u673a\u4f1a\u770b\u5230\u8d85\u8fc716888\u7684\u62a5\u540d\u4eba\u6570\uff08\u610f\u601d\u5c31\u662f\u8bf4\uff0c\u5982\u679c\u60a8\u89c9\u5f97\u8bfe\u7a0b\u4e0d\u9519\uff0c\u6b22\u8fce\u9080\u8bf7\u4eb2\u670b\u597d\u53cb\u6765\u542c\u8bfe\u2026\uff09\uff01\uff1f\u54c8\u54c8\u54c8\u2026\n\n\u5230\u65f6\u5019\u622a\u5230\u9009\u8bfe\u4eba\u657016888\u56fe\u7247\u7684\u4eba\u53ef\u4ee5\u8d34\u4e0a\u6765\u795e\u6c14\u4e00\u756a\u2026XDDD\n\n\n\u5982\u679c\u8d85\u8fc7\u7684\u8bdd\uff0c\u732a\u811a\u59ca\u59ca\u4e2a\u4eba\u63d0\u4f9b\u4e00\u4efd\u5956\u54c1\uff0c\u865e\u5b5d\u6210\u8001\u5e08\u7684\u7e41\u4f53\u8457\u4e66\uff1a\u5b59\u5b50\u5175\u6cd5\u4e0e\u7ade\u4e89\u4f18\u52bf\uff0c\u5c31\u4ece\u6709\u586b\u8fc73\u6b21\u4f5c\u4e1a\u4ee5\u4e0a\u6216\u662f\u671f\u4e2d\u8003\u3001\u671f\u672b\u8003\u7684\u540d\u5355\u91cc\u62bd\uff0c\u5982\u4f55\uff1f&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-26T02:32:38Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 9, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 13, &quot;updated_at&quot;: &quot;2015-05-04T14:39:53Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/7b4f1ed980b745dbb17461f17f4c8c9b&quot;, &quot;id&quot;: &quot;5547838af605ab910f000caa&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 2, &quot;down_count&quot;: 0, &quot;point&quot;: 2, &quot;up_count&quot;: 2}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;\u5b59\u5b50\u5175\u6cd5 \u91d1\u7389\u826f\u8a00 \u5206\u4eab\u5e16&quot;, &quot;commentable_id&quot;: &quot;0443f23d2b6f4c9b98b7f4f842c38deb&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5206\u4eab\u683c\u5f0f\u5982\u4e0b\uff1a\n\n**\u539f\u53e5 [\u7bc7\u540d]**\n\n\u5fc3\u5f97\u611f\u60f3\uff1a\n\n\n------\u996d\u7c92\u5206\u9694\u7ebf------\n\n**\u6545\u5584\u6218\u8005 \u6c42\u4e4b\u4e8e\u52bf \u4e0d\u8d23\u4e8e\u4eba [\u5b59\u5b50\u5175\u6cd5 \u5175\u52bf\u7bc7]**\n\n\u5fc3\u5f97\u611f\u60f3\uff1a\n\u73b0\u5728\u5b66\u4e60\u7684\u76ee\u7684\uff0c\u4e3b\u8981\u662f\u6c72\u53d6\u5176\u4e2d\u6709\u7528\u7684\u7406\u5ff5\n\u6bd4\u5982\u672c\u8bfe\u7684\u7406\u5ff5\u4e4b\u4e00\uff1a\u6c42\u4e4b\u4e8e\u52bf\uff0c\u4e0d\u8d23\u4e8e\u4eba\uff0c\u6211\u662f\u523b\u5728\u5fc3\u4e2d\u4e86&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-04T14:34:50Z&quot;, &quot;courseware_title&quot;: &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a / \u5176\u4ed6\u8ba8\u8bba\u533a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 13, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-04-27T02:08:43Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;553d98ed459f085cb500c7fc&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;\u8bf7\u4f9d\u7167\u5206\u533a\u53d1\u5e03\u5e16\u5b50\uff01&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u54ce\u5440\uff0c\u968f\u7740\u5e16\u5b50\u6570\u589e\u52a0\uff0c\u732a\u811a\u4eec\u90a3\u300c\u4e0d\u6574\u9f50\u4e0d\u8212\u670d\u300d\u7684\u75c7\u72b6\u53c8\u53d1\u4f5c\u4e86\uff5e\n\n\u4f46\u662f\u76ee\u524d\u5b66\u5802\u6682\u4e0d\u652f\u63f4\u79fb\u52a8\u65e2\u6709\u8ba8\u8bba\u4e32\u7684\u5206\u7c7b\uff0c\u6240\u4ee5\u63a5\u4e0b\u6765\u8981\u8bf7\u5927\u5bb6\u53d1\u6587\u8981\u9009\u62e9\u6b63\u786e\u7684\u5206\u533a\u5537\u20263QQ\n\n![\u6b64\u5904\u8f93\u5165\u56fe\u50cf\u7684\u63cf\u8ff0][1]\n\n\n  [1]: http://storage.xuetangx.com/discussion/user/572770/discussion-20150427100251png_20150427100251\n\nps.\u8bb0\u5f97\u8981\u52fe\u9009\u8bfe\u7a0b\u540c\u610f\u4e66\u5537\u2026&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-04-27T02:03:25Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 2, &quot;updated_at&quot;: &quot;2015-04-27T02:00:06Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;552fba02f605ab257a00ad5f&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;\u8bf7\u8bb0\u5f97\u52fe\u9009\u300c\u5b59\u5b50\u5175\u6cd5\u4e0e\u4f01\u4e1a\u7ecf\u8425\u300d\u8bfe\u7a0b\u540c\u610f\u4e66\u2026&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u8fd9\u4efd\u540c\u610f\u4e66\u662f\u57fa\u4e8e\u53d6\u5f97\u6570\u636e\u5206\u6790\u7684\u5408\u7406\u6b63\u5f53\u6027\u4e0e\u77e5\u60c5\u540c\u610f\u800c\u8bbe\u8ba1\u7684\uff0c\u60a8\u7684\u53c2\u4e0e\u53ca\u8d21\u732e\u662f\u6211\u4eec\u7684\u8363\u5e78\u4e0e\u798f\u62a5\uff0c\u8c22\u8c22\uff01^_^\n\n\u8fd9\u4efd\u540c\u610f\u4e66\uff0c\u5b8c\u5168\u4e0d\u4f1a\u5f71\u54cd\u4efb\u4f55\u4eba\u7684 \u4fee\u8bfe\u4e0e\u5426 \u6216\u662f \u901a\u8fc7\u4e0e\u5426\uff0c\u8bf7\u653e\u5fc3\uff01\n\n\u5b83\u5c31\u5728\u7b2c\u4e00\u5468\u7684\u7b2c\u4e00\u4e2a\u6587\u6863\u7684\u4f4d\u7f6e\u4e0a^_^\u3002\n\nhttp://www.xuetangx.com/courses/NCTU/nctucmszb/2015_T1/courseware/bce0c2dc52fa464984204571997a5d3a/ce2addb25d194f179ec5f0ab15a0f8ce/\n\n![\u6b64\u5904\u8f93\u5165\u56fe\u50cf\u7684\u63cf\u8ff0][1]\n\n\n  [1]: http://storage.xuetangx.com/discussion/user/572770/discussion-20150416213315png_20150416213315&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-04-16T13:32:50Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 2, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 9, &quot;updated_at&quot;: &quot;2015-04-27T01:59:54Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;552d27ec459f08fd0000a8d7&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;QQ\u7fa4 - \u53f0\u6e7e\u4ea4\u901a\u5927\u5b66 \u5b59\u5b50\u5175\u6cd5\u4e0e\u4f01\u4e1a\u7ecf\u8425\u8bfe\u7a0b\u7814\u4fee\u7fa4&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;**330430945\nMOOC-\u5b59\u5b50\u5175\u6cd5\u4f01\u4e1a\u7ecf\u8425**\n\n\u7533\u8bf7\u5165\u7fa4\uff0c\u8bf7\u5199\u901a\u5173\u5bc6\u8bed**\u300c2015\u5b59\u5b50\u5175\u6cd5\u5b66\u5802\u5728\u7ebf\u73ed - \u6211\u662fXXX\u300d**\n\n1. \u53d1\u8a00\u8bf7\u5408\u7406\u3001\u5408\u793c\u3001\u5408\u5b9c\u3002\n2. \u667a\u8d22\u6743\uff1a\u8bf7\u52ff\u7d22\u8ba8\u4e0e\u8f6c\u53d1\u5f71\u7247\u539f\u6863\u53ca\u94fe\u63a5\u3002\n3. \u516c\u5e73\u6027\uff1a\u8bf7\u52ff\u7d22\u8ba8\u6216\u6563\u5e03\u6d4b\u9a8c\u6b63\u89e3\u3002\n\n\u8fd9\u662f\u5b59\u5b50\u5175\u6cd5\u7b2c\u4e00\u6b21\u5f00\u8bfe\u65f6\uff0c\u5b66\u5458\u4eec\u81ea\u53d1\u7ec4\u7ec7\u7684QQ\u7fa4\uff0c\u6709\u9700\u8981\u7684\u4eba\u53ef\u4ee5\u7533\u8bf7\u52a0\u5165\uff01\n\n**\u5728\u7fa4\u91cc\u8bf7\u9075\u5b88\u7fa4\u89c4\uff0c\u82e5\u53d1\u73b0\u4e0d\u5f53\u4e8b\u5b9c\uff0c\u6211\u4eec\u4f1a\u5220\u6587\u6216\u662f\u8e22\u4eba\u5537\u2026**\n\n\u6211\u4eec\u77e5\u9053\u5f88\u591a\u5b66\u5458\u559c\u6b22\u4f7f\u7528QQ\u7fa4\uff0c\u4f46\u662f\u5fc5\u987b\u5148\u58f0\u660e\uff0cQQ\u7fa4\u7684\u6d17\u7248\u901f\u5ea6\u5f88\u5feb\uff0c\u732a\u811a\u4eec\u4e5f\u65e0\u6cd5\u65e0\u65f6\u65e0\u523b\u90fd\u6302Q\uff0c\u56e0\u4e3a\u6211\u4eec\u4e5f\u662f\u8981\u5ff5\u4e66\u4e0e\u5de5\u4f5cder\uff5e\u6240\u4ee5\u5982\u679c\u60a8\u6709\u4efb\u4f55\u7684\u8bfe\u7a0b\u5185\u5bb9\u95ee\u9898\uff0c\u5efa\u8baepo\u5728\u8ba8\u8bba\u533a\uff0c\u8fd9\u6837\u6211\u4eec\u53ef\u4ee5\u6311\u9009\u5408\u5b9c\u7684\u65f6\u95f4\u6765\u56de\u590d\uff0c\u800c\u4e14\u8fd9\u6837\u6765\u5230\u8bfe\u5802\u4e2d\u7684\u4eba\u90fd\u53ef\u4ee5\u770b\u5230\u53d1\u6587\u5462\u2026&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-04-14T14:45:00Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 9, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 82, &quot;updated_at&quot;: &quot;2015-04-27T01:59:51Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;552d24aa459f08d7ea00a8c5&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 9, &quot;down_count&quot;: 0, &quot;point&quot;: 9, &quot;up_count&quot;: 9}, &quot;user_id&quot;: &quot;572770&quot;, &quot;title&quot;: &quot;\u8acb\u4f86\u9019\u908a\u7559\u4e0b\u60a8\u7684\u722a\u5370\uff5eXD (\u5831\u5230\u5e16\u2026)&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u54c7\u54c8\u54c8\u2026\n\u9019\u5c31\u662f\u8eab\u70ba\u8c6c\u8173\u7684\u597d\u8655\uff0c\u7d55\u5c0d\u53ef\u4ee5\u6436\u5230\u9996\u767c\u2026\n\n\u5feb\u4f86\u7c3d\u5230\u5504\u2026\n\u8acb\u76e1\u91cf\u4e0d\u8981\u516c\u5e03\u592a\u591a\u81ea\u5df1\u7684\u96b1\u79c1\u6216\u5bc6\u7167\u5537\u2026\n\nps.\u6211\u5011\u662f\u53f0\u7063\u7684\u5718\u968a\uff0c\u6163\u7528\u7e41\u9ad4\u4e2d\u6587\u5537\u2026\n\n---\n\u501f\u7528\u4e00\u9996\u5361\u901a\u7684\u4e3b\u984c\u66f2\uff0c\u4f86\u8868\u9054\u6b61\u8fce\u4e4b\u610f\uff01\nhttp://v.youku.com/v_show/id_XMzAxMDEzNjc2.html\n\n\u6b61\u8fce\u4f86\u6211\u5011\u9019\u4e00\u5bb6 \u5145\u6eff\u6b61\u6a02\u7684\u4e00\u5bb6\n\u5915\u967d\u4f9d\u820a\u591a\u90a3\u9ebd\u7f8e\u9e97 \u660e\u5929\u9084\u662f\u597d\u5929\u6c23\n\u5915\u967d\u4f9d\u820a\u591a\u90a3\u9ebd\u7f8e\u9e97 \u660e\u5929\u9084\u662f\u597d\u5929\u6c23&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-04-14T14:31:06Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Dawn_Wu&quot;, &quot;comments_count&quot;: 82, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-24T16:31:56Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/7b4f1ed980b745dbb17461f17f4c8c9b&quot;, &quot;id&quot;: &quot;558adb7c459f088730001453&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;590580&quot;, &quot;title&quot;: &quot;\u8003\u8bd5\u591a\u5c11\u5206\u624d\u4f1a\u6709\u8bc1\u4e66\uff1f&quot;, &quot;commentable_id&quot;: &quot;0443f23d2b6f4c9b98b7f4f842c38deb&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u8003\u8bd5\u591a\u5c11\u5206\u6570\u624d\u4f1a\u6709\u8bc1\u4e66\uff1f\n&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-24T16:31:56Z&quot;, &quot;courseware_title&quot;: &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a / \u5176\u4ed6\u8ba8\u8bba\u533a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;albertpower&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-24T15:17:43Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/7b4f1ed980b745dbb17461f17f4c8c9b&quot;, &quot;id&quot;: &quot;558aca17459f08e0fd00125a&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;287193&quot;, &quot;title&quot;: &quot;\u671f\u4e2d\u8003\u8bd5\u4e5f\u662f\u53d8\u6210\u4e86\u5f88\u4f4e\u5206\uff1f\uff1f\u662f\u6570\u636e\u5e93\u51fa\u95ee\u9898\u4e86\u5417\uff1f&quot;, &quot;commentable_id&quot;: &quot;0443f23d2b6f4c9b98b7f4f842c38deb&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u8fd8\u80fd\u7ea0\u6b63\u5417\uff1f\u6709\u79cd\u6280\u672f\u4e0d\u8fc7\u5173\u611f\u89c9\u3002\u3002\u3002\u3002\u3002\u3002\u3002\u3002\u6709\u6ca1\u6709\u5907\u4efd\u6570\u636e\u5e93\u5462\uff1f&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-24T15:17:43Z&quot;, &quot;courseware_title&quot;: &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a / \u5176\u4ed6\u8ba8\u8bba\u533a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;zengjiaweizzz&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-24T15:16:11Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;558ac9bbf605ab6114001353&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;287193&quot;, &quot;title&quot;: &quot;\u671f\u672b\u8003\u8bd5\u51fa\u95ee\u9898\u5566\uff01&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6211\u660e\u660e\u4f5c\u5bf9\u4e86\u5f88\u591a\u7684\uff0c\u73b0\u5728\u53ea\u663e\u793a\u51e0\u4e2a\u5bf9\u4e86\u3002\u3002\u3002\u3002\u3002\u3002\u3002\u3002\u8bf7\u95ee\u662f\u4ec0\u4e48 \u95ee\u9898\u5440\uff1f\uff1f\uff1f\uff1f\uff1f\uff1f\uff1f\uff1f\uff1f\u90a3\u6211\u4eec\u8fd8\u7ee7\u7eed\u505a\u671f\u672b\u8003\u8bd5\u8bd5\u9898\u4e86\u5417\uff1f\uff1f\uff1f\uff1f&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-24T15:16:11Z&quot;, &quot;thread_type&quot;: &quot;question&quot;, &quot;username&quot;: &quot;zengjiaweizzz&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-24T13:46:41Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;558ab4c1f605ab611400134b&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;522606&quot;, &quot;title&quot;: &quot;\u6211\u7684\u671f\u4e2d\u8003\u8bd5\u5206\u6570\u7adf\u7136\u53d8\u6210\u4e866\u5206\uff0c\u8fd9\u60c5\u4f55\u4ee5\u582a\u554a&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6211\u7684\u671f\u4e2d\u8003\u8bd5\u5206\u6570\u7adf\u7136\u53d8\u6210\u4e866\u5206\uff0c\u8fd9\u60c5\u4f55\u4ee5\u582a\u554a\u3002\u8f9b\u82e6\u505a\u4e86\uff0c\u4eca\u5929\u4e00\u770b\u662f6\u5206\uff0c\u54ce\uff0c\u4e0d\u77e5\u9053\u4ec0\u4e48\u65f6\u5019\u53d8\u56de\u539f\u6765\u7684\u5206\u6570\u3002\n\u521a\u505a\u5b8c\u671f\u672b\u8003\u8bd5\uff0c\u4f46\u613f\u4e0d\u8981\u51fa\u73b0\u8fd9\u4e2a\u60c5\u51b5\u4e86\u3002&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-24T13:46:41Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;\u9ec4\u5bb6\u8001\u5c4b&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-24T08:15:57Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;558a673d459f088d4b001485&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 2, &quot;down_count&quot;: 0, &quot;point&quot;: 2, &quot;up_count&quot;: 2}, &quot;user_id&quot;: &quot;139912&quot;, &quot;title&quot;: &quot;\u671f\u4e2d\u548c\u671f\u672b\u8003\u8bd5\u7684BUG&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u671f\u4e2d\u548c\u671f\u672b\u8003\u8bd5\u90fd\u51fa\u73b0\u4e86\u540c\u6837\u7684\u95ee\u9898\uff1a\u63d0\u4ea4\u540e\uff0c\u5355\u9009\u9898\u5c31\u663e\u793a\u672a\u505a\u7b54\uff0c\u7ed3\u679c\u5355\u9009\u9898\u90fd\u53d8\u6210\u4e86\u96f6\u5206\u3002\u3002\u4e0d\u77e5\u9053\u5927\u5bb6\u6709\u6ca1\u6709\u51fa\u73b0\u540c\u6837\u7684\u95ee\u9898\u3002&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-24T08:15:57Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Calvin_Fu&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-24T01:48:13Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;558a0c5d459f08e9810011de&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 1, &quot;down_count&quot;: 0, &quot;point&quot;: 1, &quot;up_count&quot;: 1}, &quot;user_id&quot;: &quot;213615&quot;, &quot;title&quot;: &quot;\u4e3a\u4ec0\u4e48\u6211\u7684\u671f\u4e2d\u6d4b\u8bd5\u6210\u7ee9\u51fa\u9519\u4e86&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u4e4b\u524d\u671f\u4e2d\u8003\u8bd5\u63d0\u4ea4\u7684\u6210\u7ee9\u4e00\u76f4\u90fd\u663e\u793a\u7684\u662f\u6ee1\u5206\uff0c\u4eca\u5929\u767b\u5f55\u65f6\u53d1\u73b0\u6210\u7ee9\u53d8\u6210\u4e86\u7b2c\u4e8c\u6b21\u7684\u63d0\u4ea4\u6210\u7ee9\uff0c\u5e0c\u671b\u8001\u5e08\u80fd\u7ed9\u4e2a\u7b54\u590d&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-24T01:48:13Z&quot;, &quot;thread_type&quot;: &quot;question&quot;, &quot;username&quot;: &quot;shenhaimuyu&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-23T16:01:46Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;558982ea459f08e0fd0011d6&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;10647&quot;, &quot;title&quot;: &quot;\u671f\u4e2d\u8003\u8bd5\u6210\u7ee9\u95ee\u9898&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u4eca\u5929\u7a81\u7136\u53d1\u73b0\u671f\u4e2d\u8003\u8bd5\u6210\u7ee9\u600e\u4e48\u53d8\u5f97\u7279\u522b\u5c11\u5462\uff1f\uff1f\uff1f\u8bb0\u5f97\u521a\u8003\u5b8c\u90a3\u4f1a\u513f\u6210\u7ee9\u662f90\u591a\u5206\u554a\uff1f\u73b0\u5728\u600e\u4e48\u624d\u662f40\u5206\u5462\uff1f\u5927\u5bb6\u6709\u6ca1\u6709\u9047\u5230\u7c7b\u4f3c\u95ee\u9898\u5462\uff1f\u6c42\u89e3\u7b54\uff01&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-23T16:01:46Z&quot;, &quot;thread_type&quot;: &quot;question&quot;, &quot;username&quot;: &quot;shangjin&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-23T15:58:21Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;5589821df605ab240c0011ef&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 1, &quot;down_count&quot;: 0, &quot;point&quot;: 1, &quot;up_count&quot;: 1}, &quot;user_id&quot;: &quot;339537&quot;, &quot;title&quot;: &quot;\u671f\u4e2d\u8003\u6210\u7ee9\u53d8\u4e86&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6211\u7684\u671f\u4e2d\u8003\u6210\u7ee9\u660e\u660e\u662f\u6ee1\u5206\uff0c\u4e3a\u4f55\u73b0\u5728\u6210\u4e8645\u5206\uff01\u597d\u6c14\u6124\uff01&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-23T15:58:21Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Asura95&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-23T14:31:16Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;55896db4459f08e9810011b9&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;297893&quot;, &quot;title&quot;: &quot;\u7cfb\u7edf\u662f\u4e0d\u662f\u51fa\u95ee\u9898\u4e86&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u7cfb\u7edf\u662f\u4e0d\u662f\u51fa\u95ee\u9898\u4e86\uff0c\u671f\u4e2d\u8003\u8bd5\u6700\u540e\u63d0\u4ea4\u6211\u9519\u4e86\u4e00\u9053\u9898\uff0c\u4e4b\u524d\u7684\u8fdb\u5ea6\u6761\u6628\u5929\u770b\u4e5f\u662f\u6b63\u5e38\u7684\u3002\u7ed3\u679c\u4eca\u5929\u7684\u4e00\u770b\u671f\u4e2d\u8003\u8bd5\u5206\u6570\u600e\u4e48\u53ea\u6709\u767e\u5206\u4e4b40\uff0c\u8fd4\u56de\u671f\u4e2d\u8003\u8bd5\u4e00\u770b\u53d1\u73b0\u662f\u6309\u7b2c\u4e00\u6b21\u63d0\u4ea4\u8bb0\u7684\u6210\u7ee9\uff0c\u600e\u4e48\u4f1a\u7a81\u7136\u51fa\u73b0\u8fd9\u79cd\u95ee\u9898\u5462&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-23T14:31:16Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Victoriadidi&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-23T13:36:06Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/b54355ec24ff40899392004256d79106&quot;, &quot;id&quot;: &quot;558960c6f605ab61140012c3&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;562928&quot;, &quot;title&quot;: &quot;[\u6c42\u52a9]&lt;\u4e5d\u5730\u7bc7&gt;\u5982\u4f55\u80fd\u53d1\u6325\u6218\u7565\u5730\u7406\u7684\u4f18\u52bf\uff1f&quot;, &quot;commentable_id&quot;: &quot;e5cb9d0aaff744b6add0e5a5d135f654&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;[\u6c42\u52a9]&lt;\u4e5d\u5730\u7bc7&gt;\u5982\u4f55\u80fd\u53d1\u6325\u6218\u7565\u5730\u7406\u7684\u4f18\u52bf\uff1f\u591a\u9009\u6c42\u52a9\uff01\uff01&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-23T13:36:06Z&quot;, &quot;courseware_title&quot;: &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a / \u4f5c\u4e1a\u91ca\u7591\u8ba8\u8bba\u533a&quot;, &quot;thread_type&quot;: &quot;question&quot;, &quot;username&quot;: &quot;\u6728\u68c9-\u7ae5&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 11, &quot;updated_at&quot;: &quot;2015-06-23T06:52:16Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;55890220f605ab240c00118d&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 1, &quot;down_count&quot;: 0, &quot;point&quot;: 1, &quot;up_count&quot;: 1}, &quot;user_id&quot;: &quot;308034&quot;, &quot;title&quot;: &quot;\u671f\u4e2d\u8003\u8bd5\u6210\u7ee9\u6df7\u4e71~&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u8001\u5e08\uff1a\n   \u8bf7\u67e5\u770b\u4e00\u4e0b\uff0c\u8bfe\u4ef6\u4e2d\u6211\u7684\u671f\u4e2d\u8003\u8bd5\u6210\u7ee9\u7ed3\u679c\u6df7\u4e71\u4e86\uff0c\u53c2\u52a0\u8003\u8bd5\u7684\u65f6\u5019\u662f\u53ea\u6709\u4e24\u9898\u9519\u8bef\uff0c\u800c\u73b0\u5728\u5168\u90fd\u6df7\u4e71\u4e86\u3002\n   \u8c22\u8c22\uff0c\u8bf7\u53ca\u65f6\u4fee\u590d\u8fd9\u4e2abug\u3002\n&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-23T06:52:16Z&quot;, &quot;thread_type&quot;: &quot;question&quot;, &quot;username&quot;: &quot;RoyHZ&quot;, &quot;comments_count&quot;: 11, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-22T12:21:53Z&quot;, &quot;course_id&quot;: &quot;NCTU/nctucmszb/2015_T1&quot;, &quot;id&quot;: &quot;5587fde1f605ab69ed0012a7&quot;, &quot;pinned&quot;: false, &quot;votes&quot;: {&quot;count&quot;: 1, &quot;down_count&quot;: 0, &quot;point&quot;: 1, &quot;up_count&quot;: 1}, &quot;user_id&quot;: &quot;420551&quot;, &quot;title&quot;: &quot;\u5b59\u5b50\u5175\u6cd5\u7684\u6240\u5f97&quot;, &quot;commentable_id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u7b2c\u4e00\uff1a\u614e\u6218\n\u7b2c\u4e8c\uff1a\u60c5\u62a5\n\u7b2c\u4e09\uff1a\u4f5c\u6218\u3002\n\u591a\u6b21\u9605\u8bfb\u6625\u79cb\u6218\u56fd\uff0c\u6df1\u611f\u5176\u667a\u6167\u548c\u7cbe\u9ad3\u4e4b\u4f1f\u5927&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-22T12:21:53Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Moreinterests&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}]" data-thread-pages="8" data-content-info="{&quot;558ac9bbf605ab6114001353&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5589821df605ab240c0011ef&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;552d24aa459f08d7ea00a8c5&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;553d98ed459f085cb500c7fc&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;55896db4459f08e9810011b9&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;552fba02f605ab257a00ad5f&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558a673d459f088d4b001485&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;55652a82f605ab36c8003690&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558ab4c1f605ab611400134b&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558960c6f605ab61140012c3&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558982ea459f08e0fd0011d6&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5547838af605ab910f000caa&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558adb7c459f088730001453&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;552d27ec459f08fd0000a8d7&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5587fde1f605ab69ed0012a7&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558aca17459f08e0fd00125a&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5563db46f605aba4ef0032d4&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;55890220f605ab240c00118d&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558a0c5d459f08e9810011de&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}}" data-sort-preference="date" data-flag-moderator="False" data-user-cohort-id="None" data-course-settings="{&quot;is_cohorted&quot;: false, &quot;allow_anonymous_to_peers&quot;: false, &quot;allow_anonymous&quot;: false, &quot;category_map&quot;: {&quot;subcategories&quot;: {&quot;u8ba8u8bbau3001u5206u4eabu533a&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot; \u5185\u5bb9\u91ca\u7591\u8ba8\u8bba\u533a &quot;, &quot;\u7b14\u8bb0\u5206\u4eab\u533a&quot;, &quot;\u4f5c\u4e1a\u91ca\u7591\u8ba8\u8bba\u533a&quot;, &quot;\u5176\u4ed6\u8ba8\u8bba\u533a&quot;], &quot;entries&quot;: {&quot; u5185u5bb9u91cau7591u8ba8u8bbau533a &quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;d2b130c9eb214c6f97925831b3848f65&quot;}, &quot;\u7b14\u8bb0\u5206\u4eab\u533a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;971b2859eca54abda9b545be260d53dc&quot;}, &quot;\u4f5c\u4e1a\u91ca\u7591\u8ba8\u8bba\u533a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;e5cb9d0aaff744b6add0e5a5d135f654&quot;}, &quot;\u5176\u4ed6\u8ba8\u8bba\u533a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;0443f23d2b6f4c9b98b7f4f842c38deb&quot;}}}, &quot;\u7b2c\u4e00\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u4e60\u9898\u4e00\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u4e60u9898u4e00u8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;fe2b8133db1a4218b1a221cec6db62ba&quot;}}}}, &quot;children&quot;: [&quot;General&quot;, &quot;\u7b2c\u4e00\u7ae0&quot;, &quot;\u8ba8\u8bba\u3001\u5206\u4eab\u533a&quot;], &quot;entries&quot;: {&quot;General&quot;: {&quot;sort_key&quot;: &quot;General&quot;, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;i4x-NCTU-nctucmszb-course-2015_T1&quot;}}}, &quot;cohorts&quot;: []}">
    <div class="discussion-body">
        <div style="top: 0px; height: 440px;" class="forum-nav">
    <div class="forum-nav-header">
        <a href="javascript:void(0)" class="forum-nav-browse" aria-haspopup="true" onclick="allcard()" id="allcard">
            <i class="icon fa fa-reorder"></i><span class="sr">讨论主题；当前选中的是:</span><span class="forum-nav-browse-current">所有讨论</span><span class="forum-nav-browse-drop-arrow">▾</span>
        </a>
        <form class="forum-nav-search">
            <div class="forum-nav-search-ff-position-fix" style="display:none">
                <label>
                    <span class="sr">搜索</span>
                    <input class="forum-nav-search-input" placeholder="查找所有帖子" type="text" id="key">
                    <i class="icon fa fa-search" onclick="search_key()"></i>
                </label>
            </div>
        </form>
    </div>
    








<div class="forum-nav-browse-menu-wrapper" style="display: none;" id="theme">
    <form style="" class="forum-nav-browse-filter">
        <label>
            <span class="sr">过滤主题</span>
            <input class="forum-nav-browse-filter-input" placeholder="过滤主题" type="text">
            <i class="icon fa fa-filter"></i>
        </label>
    </form>
    <ul style="height: 387px;" class="forum-nav-browse-menu">
        <li class="forum-nav-browse-menu-item forum-nav-browse-menu-all">
            <a href="#" class="forum-nav-browse-title">所有讨论</a>
        </li>
        <li class="forum-nav-browse-menu-item forum-nav-browse-menu-following">
            <a href="#" class="forum-nav-browse-title"><i class="icon fa fa-star"></i>我参与的讨论帖</a>
        </li>
        
    
<?php if(is_array($xly)): $i = 0; $__LIST__ = $xly;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$allcard): $mod = ($i % 2 );++$i;?><li class="forum-nav-browse-menu-item">
        <a href="javascript:void(0)" onclick="search_chapter_card(<?php echo ($allcard["ch_id"]); ?>)" class="forum-nav-browse-title"><?php echo ($allcard["ch_name"]); ?></a>
        <ul class="forum-nav-browse-submenu">
<?php if(is_array($allcard['know'])): $i = 0; $__LIST__ = $allcard['know'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="forum-nav-browse-menu-item" data-discussion-id="fe2b8133db1a4218b1a221cec6db62ba" data-cohorted="false">
        <a href="javascript:void(0)" onclick="search_know_card(<?php echo ($key); ?>)" class="forum-nav-browse-title"><?php echo ($val); ?></a>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
</div>


<script type="text/javascript">
	$("#allcard").toggle(
	  function () {
		$("#theme").show();
		$("#rank").hide();
	  },
	  function () {
		$("#theme").hide();
		$("#rank").show();
	  }
	); 


	function search_chapter_card(ch_id){
		$("#theme").hide();
		$("#rank").show();
		$.ajax({
			url:'/xuetang/index.php/Home/Discuss/searchChapterCard',
			data:{'ch_id':ch_id},
			dataType:'json',
			type:'post',
			success:function(e){
				var op="";
				$.each(e,function(i,v){
					op+="<li data-id='558cbd22459f089ec900009f' class='forum-nav-thread is-unread'>  <a href='/xuetang/index.php/Home/Discuss/cardDetail?id="+v.card_id+"'class='forum-nav-thread-link'><div class='forum-nav-thread-wrapper-0'> <span class='sr'><?php if(v.type +'eq'+ 'question'): ?>问题<?php elseif(v.type +'eq'+ 'discussion'): ?>讨论<?php endif; ?></span><i class='icon fa fa-comments'></i></div><div class='forum-nav-thread-wrapper-1'><span class='forum-nav-thread-title'>"+v.title+"</span><ul class='forum-nav-thread-labels'><!--<li class='post-label-pinned'><i class='icon fa fa-thumb-tack'></i>置顶</li><li class='post-label-by-staff'><i class='icon fa fa-user'></i>由: 教员</li> <li class='post-label-by-community-ta'><i class='icon fa fa-user'></i>由: 社区助教</li> --></ul> </div><div class='forum-nav-thread-wrapper-2'><span class='forum-nav-thread-votes-count'>+"+v.vote+"<span class='sr'> 投票 </span></span><span style='display: inline-block;' data-tooltip='"+v.reply_num+" 条新评论' class='forum-nav-thread-comments-count is-unread'> "+v.reply_num+"  <span class='sr'>评论 ("+v.reply_num+" 未读评论)</span></span> </div></a></li>";
					//op+='<option value="'+v.s_id+'" class="s_id">'+v.type+'</option>';
				})
				$("#list").html(op);
			}
		})
	}
	function search_know_card(kid){
		  $("#theme").hide();
		  $("#rank").show();
			$.ajax({
			url:'/xuetang/index.php/Home/Discuss/searchKnowCard',
			data:{'kid':kid},
			dataType:'json',
			type:'post',
			success:function(e){
				var op="";
				$.each(e,function(i,v){
					op+="<li data-id='558cbd22459f089ec900009f' class='forum-nav-thread is-unread'>  <a href='/xuetang/index.php/Home/Discuss/cardDetail?id="+v.card_id+"'class='forum-nav-thread-link'><div class='forum-nav-thread-wrapper-0'> <span class='sr'><?php if(v.type +'eq'+ 'question'): ?>问题<?php elseif(v.type +'eq'+ 'discussion'): ?>讨论<?php endif; ?></span><i class='icon fa fa-comments'></i></div><div class='forum-nav-thread-wrapper-1'><span class='forum-nav-thread-title'>"+v.title+"</span><ul class='forum-nav-thread-labels'><!--<li class='post-label-pinned'><i class='icon fa fa-thumb-tack'></i>置顶</li><li class='post-label-by-staff'><i class='icon fa fa-user'></i>由: 教员</li> <li class='post-label-by-community-ta'><i class='icon fa fa-user'></i>由: 社区助教</li> --></ul> </div><div class='forum-nav-thread-wrapper-2'><span class='forum-nav-thread-votes-count'>+"+v.vote+"<span class='sr'> 投票 </span></span><span style='display: inline-block;' data-tooltip='"+v.reply_num+" 条新评论' class='forum-nav-thread-comments-count is-unread'> "+v.reply_num+"  <span class='sr'>评论 ("+v.reply_num+" 未读评论)</span></span> </div></a></li>";
					//op+='<option value="'+v.s_id+'" class="s_id">'+v.type+'</option>';
				})
				$("#list").html(op);

				//alert(e);
			}
		})

	}
</script>

    <div style="display: block;" class="forum-nav-thread-list-wrapper" id="rank">
        <div style="" class="forum-nav-refine-bar">
            <label class="forum-nav-filter-main">
                <span class="sr">筛选:</span>
                <select class="forum-nav-filter-main-control"   onchange="filterrank(this.value)">
                    <option  value="1">显示全部</option>
                    <option value="2">未读</option>
                    <option value="3">未答复</option>
                </select>
            </label><label class="forum-nav-sort">
                <span class="sr">排列:</span>
                <select class="forum-nav-sort-control"  onchange="filterrank(this.value)">
                    <option value="4">最近活动排序</option>
                    <option value="5">最多活动排序</option>
                    <option value="6">最多投票排序</option>
                </select>
            </label>
        </div>
        <div class="search-alerts"></div>

  <ul style="height: 338px;" class="forum-nav-thread-list">
  
<div id="list">
  <?php if(is_array($data)): foreach($data as $key=>$val): ?><li data-id="558cbd22459f089ec900009f" class="forum-nav-thread is-unread">
    <a href="/xuetang/index.php/Home/Discuss/cardDetail?id=<?php echo ($val["card_id"]); ?>" class="forum-nav-thread-link">
      <div class="forum-nav-thread-wrapper-0">
        
        <span class="sr">
			<?php if($val["type"] == 'question'): ?>问题
			<?php elseif($val["type"] == 'discussion'): ?>讨论<?php endif; ?>
		</span>
        <i class="icon fa fa-comments"></i>
      </div><div class="forum-nav-thread-wrapper-1">
        <span class="forum-nav-thread-title"><?php echo ($val["title"]); ?></span>
        
        <ul class="forum-nav-thread-labels"><!--<li class="post-label-pinned"><i class="icon fa fa-thumb-tack"></i>置顶</li> 
		
		<li class="post-label-by-staff"><i class="icon fa fa-user"></i>由: 教员</li> <li class="post-label-by-community-ta"><i class="icon fa fa-user"></i>由: 社区助教</li> -->
		
		</ul>
      </div><div class="forum-nav-thread-wrapper-2">
        
        <span class="forum-nav-thread-votes-count">+<?php echo ($val["vote"]); ?><span class="sr"> 投票 </span></span>
        
        <span style="display: inline-block;" data-tooltip="<?php echo ($val["reply_num"]); ?>条新评论" class="forum-nav-thread-comments-count is-unread">
            <?php echo ($val["reply_num"]); ?> <span class="sr">评论 (<?php echo ($val["reply_num"]); ?> 未读评论)</span>
        </span>
      </div>
    </a>
  </li><?php endforeach; endif; ?>
  </div>
</ul>




    </div>
</div>


<script type="text/javascript">
//筛选
function filterrank(key){
	$.ajax({
		url:'/xuetang/index.php/Home/Discuss/cardFilter',
		data:{'key':key},
		dataType:'json',
		type:'post',
		success:function(e){
			var op="";
			$.each(e,function(i,v){
				op+="<li data-id='558cbd22459f089ec900009f' class='forum-nav-thread is-unread'>  <a href='/xuetang/index.php/Home/Discuss/cardDetail?id="+v.card_id+"'class='forum-nav-thread-link'><div class='forum-nav-thread-wrapper-0'> <span class='sr'><?php if(v.type +'eq'+ 'question'): ?>问题<?php elseif(v.type +'eq'+ 'discussion'): ?>讨论<?php endif; ?></span><i class='icon fa fa-comments'></i></div><div class='forum-nav-thread-wrapper-1'><span class='forum-nav-thread-title'>"+v.title+"</span><ul class='forum-nav-thread-labels'><!--<li class='post-label-pinned'><i class='icon fa fa-thumb-tack'></i>置顶</li><li class='post-label-by-staff'><i class='icon fa fa-user'></i>由: 教员</li> <li class='post-label-by-community-ta'><i class='icon fa fa-user'></i>由: 社区助教</li> --></ul> </div><div class='forum-nav-thread-wrapper-2'><span class='forum-nav-thread-votes-count'>+"+v.vote+"<span class='sr'> 投票 </span></span><span style='display: inline-block;' data-tooltip='"+v.reply_num+"  条新评论' class='forum-nav-thread-comments-count is-unread'>"+v.reply_num+"  <span class='sr'>评论 ("+v.reply_num+" 未读评论)</span></span> </div></a></li>";
				//op+='<option value="'+v.s_id+'" class="s_id">'+v.type+'</option>';
			})
			$("#list").html(op);
			
		}
	})
}


</script>

        <div class="discussion-column">
          <article class="new-post-article" style="display: none;">
    <form class="forum-new-post-form">
        <ul class="post-errors" style="display: none"></ul>
        <div class="forum-new-post-form-wrapper">
    <div class="post-field">
        <div class="field-label">
            <span class="field-label-text">
                帖子类型: 
            </span><fieldset class="field-input">
                <input name="form-25-post-type" class="post-type-input" id="form-25-post-type-question" value="question" type="radio">
                <label for="form-25-post-type-question" class="post-type-label">
                    <i class="icon fa fa-question"></i>
                    问题
                </label>
                <input name="form-25-post-type" class="post-type-input" id="form-25-post-type-discussion" value="discussion" checked="checked" type="radio">
                <label for="form-25-post-type-discussion" class="post-type-label">
                    <i class="icon fa fa-comments"></i>
                    讨论区
                </label>
            </fieldset>
        </div><span class="field-help">
            问题是发布需要回答的问题. 讨论是分享点子和展开对话讨论. 
        </span>
    </div>
<div class="post-field">
    <div class="field-label">
        <span class="field-label-text">主题范围:</span><div class="field-input post-topic">
            <a href="#" class="post-topic-button">
                <span class="sr">讨论主题；当前选中的是:</span>
                <span class="js-selected-topic">General</span>
                <span class="drop-arrow" aria-hidden="true">▾</span>
            </a>
            <div style="display: none;" class="topic-menu-wrapper">
                <label class="topic-filter-label">
                    <span class="sr">筛选主题</span>
                    <input class="topic-filter-input" placeholder="筛选主题" type="text">
                </label>
                <ul class="topic-menu" role="menu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="i4x-NCTU-nctucmszb-course-2015_T1" data-cohorted="false">General</a>
    </li>
<volist>
    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第一章</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="fe2b8133db1a4218b1a221cec6db62ba" data-cohorted="false">习题一讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">讨论、分享区</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="d2b130c9eb214c6f97925831b3848f65" data-cohorted="false"> 内容释疑讨论区 </a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="971b2859eca54abda9b545be260d53dc" data-cohorted="false">笔记分享区</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="e5cb9d0aaff744b6add0e5a5d135f654" data-cohorted="false">作业释疑讨论区</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="0443f23d2b6f4c9b98b7f4f842c38deb" data-cohorted="false">其他讨论区</a>
    </li>
</ul>
    </li>
</ul>
           </div>
       </div>
    </div><span class="field-help">
        添加你的帖子到相关主题用以帮助他人找到它. 
    </span>
</div></div>
        
        <div class="post-field">
            <label class="field-label">
                <span class="sr">标题:</span>
                <input class="field-input js-post-title" name="title" placeholder="标题" type="text">
            </label><span class="field-help">
                添加一个清晰明了的标题来激励大家参与.
            </span>
        </div>
        <div class="post-field js-post-body editor" name="body" data-placeholder="输入你的问题或评论"><div class="wmd-panel"><div id="wmd-button-bar-js-post-body-undefined"><div class="wmd-button-row" id="wmd-button-row-js-post-body-undefined" role="toolbar"><span title="粗体(Ctrl+B)" id="wmd-bold-button-js-post-body-undefined" style="left: 0px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: 0px 0px;"></span></span><span title="斜体(Ctrl+I)" id="wmd-italic-button-js-post-body-undefined" style="left: 25px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -20px 0px;"></span></span><span id="wmd-spacer1-js-post-body-undefined" class="wmd-spacer wmd-spacer1" role="separator"></span><span title="超链接(Ctrl+L)" id="wmd-link-button-js-post-body-undefined" style="left: 75px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -40px 0px;"></span></span><span title="引用(Ctrl+Q)" id="wmd-quote-button-js-post-body-undefined" style="left: 100px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -60px 0px;"></span></span><span title="代码示例(Ctrl+K)" id="wmd-code-button-js-post-body-undefined" style="left: 125px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -80px 0px;"></span></span><span title="图片(Ctrl+G)" id="wmd-image-button-js-post-body-undefined" style="left: 150px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -100px 0px;"></span></span><span id="wmd-spacer2-js-post-body-undefined" class="wmd-spacer wmd-spacer2" role="separator"></span><span title="有序列表(Ctrl+O)" id="wmd-olist-button-js-post-body-undefined" style="left: 200px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -120px 0px;"></span></span><span title="符号列表(Ctrl+U)" id="wmd-ulist-button-js-post-body-undefined" style="left: 225px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -140px 0px;"></span></span><span title="标题(Ctrl+H)" id="wmd-heading-button-js-post-body-undefined" style="left: 250px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -160px 0px;"></span></span><span title="水平线(Ctrl+R)" id="wmd-hr-button-js-post-body-undefined" style="left: 275px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -180px 0px;"></span></span><span title="撤销 (Ctrl+Z)" id="wmd-undo-button-js-post-body-undefined" style="left: 300px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -200px -20px;"></span></span><span title="重做 (Ctrl+Y)" id="wmd-redo-button-js-post-body-undefined" style="left: 325px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -220px -20px;"></span></span><span title="公式 (Ctrl+E)" id="wmd-equation-button-js-post-body-undefined" style="left: 350px;" class="wmd-button" tabindex="0" role="button"><span style="background-position: -260px 0px;"></span></span><input value="test" id="equation-text" type="hidden"></div></div><label for="wmd-input-js-post-body-undefined" class="sr">帖子内容</label><textarea placeholder="输入你的问题或评论" id="wmd-input-js-post-body-undefined" class="wmd-input"></textarea><div class="wmd-preview-container"><div class="wmd-preview-label">预览</div><div class="wmd-panel wmd-preview" id="wmd-preview-js-post-body-undefined"></div></div></div></div>
        <div class="post-options">
            <label class="post-option is-enabled">
                <input name="follow" class="post-option-input js-follow" checked="checked" type="checkbox">
                <i class="icon fa fa-star"></i>跟踪这个帖子
            </label>
            
            
        </div>
        <div>
            <input class="submit" value="添加帖子" type="submit">
            <a href="#" class="cancel">取消</a>
        </div>
    </form>
</article>
          <div style="display: block;" class="forum-content">
    <article class="discussion-article" data-id="558adb7c459f088730001453">
        <div class="thread-wrapper">
            <div class="forum-thread-main-wrapper">
                <div class="thread-content-wrapper">
    <div class="discussion-post">
    <header>
        <div class="group-visibility-label">
            
                这个帖子对所有人可见. 
            
        </div>

<?php if(is_array($arr)): foreach($arr as $key=>$val): ?><div class="post-header-content">
            <h1><?php echo ($val["title"]); ?></h1>
            <p class="posted-details">
            
            <?php echo ($val["type"]); ?> 在 <span class="timeago" title="2015-06-24T16:31:56Z"><?php echo ($val["addtime"]); ?></span> 被 
    
    <a href="http://www.xuetangx.com/courses/NCTU/nctucmszb/2015_T1/discussion/forum/users/590580" class="username"><?php echo ($val["username"]); ?></a>
        
    
 发布
            </p>
			<input type="hidden" name="card_id" value="<?php echo ($val["card_id"]); ?>" id="card_id">
            <div class="post-labels">
                <span class="post-label-pinned is-hidden"><i class="icon fa fa-thumb-tack"></i>置顶</span>
                <span class="post-label-reported is-hidden"><i class="icon fa fa-flag"></i>举报</span>
                <span class="post-label-closed is-hidden"><i class="icon fa fa-lock"></i>已关闭</span>
            </div>
        </div>


        <div class="post-header-actions post-extended-content">
            
    <ul class="post-actions-list">
        
    <li class="actions-item">
        <span style="display: none;" aria-hidden="true" class="display-vote">
          <span class="vote-count">0 票</span>
        </span>
        <a href="#" class="action-button action-vote" role="checkbox" aria-checked="false">
            <span class="sr">投票</span>
            <span class="action-label" aria-hidden="true">
              
            
			<?php if($vote == 0 ): ?><span class="vote-count"  id="vote" onclick="vote()"><?php echo ($vote_num); ?>票</span>
			<?php else: ?> 
				 <span class="vote-count" id="canclevote" onclick="canclevote()">已投票</span><?php endif; ?>
			</span>
            <span class="action-icon" aria-hidden="true">
                <i class="icon fa fa-plus"></i>
            </span>
        </a>
    </li>

        <li class="actions-item">
            <a href="javascript:void(0)" class="action-button action-follow" role="checkbox" aria-checked="false">
                <span class="sr" onclick="follow()">关注</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked" onclick="follow()" id="follow">关注</span>
                    <span class="label-checked" onclick="cancle()" id="cancle">取消关注</span>
                </span>
                <span class="action-icon"><i class="icon fa fa-star"></i></span>
            </a>
        </li>
 <li class="actions-item">
            <a href="javascript:void(0)" class="action-button action-follow" role="checkbox" aria-checked="false">
                <span class="sr" onclick="tip()">举报辱骂</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked" onclick="tip()" id="tip">举报</span>
                    <span class="label-checked" onclick="cancletip()" id="cancletip">取消举报</span>
                </span>
                <span class="action-icon"><i class="icon fa fa-star"></i></span>
            </a>
 </li>
    </ul>

        </div>
    </header>

    <div class="post-body"><p><?php echo ($val["desc"]); ?></p></div><?php endforeach; endif; ?> 
    <script type="text/javascript">
//关注
function follow(){
	$("#cancle").show();
	$("#follow").hide();
}
//取消关注
function cancle(){
	$("#cancle").hide();
	$("#follow").show();
}


//举报
function tip(){
	$("#cancletip").show();
	$("#tip").hide();
}
function cancletip(){
	$("#tip").show();
	$("#cancletip").hide();
}


//投票
function vote(){
	var card_id=$("#card_id").val();
	 $.ajax({
		 url:"/xuetang/index.php/Home/Discuss/haveclick",    
		 data:{"card_id":card_id},
		 type:"post",
		 success:function(e){
			 if(e==200){ 
				   location.href="";
				}
			}
	   });
	   
}
//取消投票
  function canclevote(){
	    var card_id=$("#card_id").val();       
	     $.ajax({
			 url:"/xuetang/index.php/Home/Discuss/cancelclick",    
			 data:{"card_id":card_id},
			 type:"post",
			 success:function(e){
				   if(e==2000){ 
				       location.href="";
				    }
			    }
		   });
		   
}
</script>    
        <div class="post-context">
            (这是关于<a href="http://www.xuetangx.com/courses/NCTU/nctucmszb/2015_T1/jump_to/i4x://NCTU/nctucmszb/discussion/7b4f1ed980b745dbb17461f17f4c8c9b">讨论、分享区 / 其他讨论区</a>的消息)
        </div>
    
</div>

</div>
                <div class="post-extended-content">
                    <ol class="responses js-marked-answer-list"></ol>
                </div>
            </div>
            <div class="post-extended-content">
                <div class="response-count">0条响应</div>
                <form class="discussion-reply-new" data-id="558adb7c459f088730001453" method="post" action="/xuetang/index.php/Home/Discuss/addReplyPro">
                    <h4>回复：</h4>
                    <ul class="discussion-errors"></ul>
                    <div class="reply-body" data-id="558adb7c459f088730001453"><div class="wmd-panel"><div id="wmd-button-bar-reply-body-558adb7c459f088730001453"></div><label for="wmd-input-reply-body-558adb7c459f088730001453" class="sr">帖子内容</label>
					
					<textarea id="wmd-input-reply-body-558adb7c459f088730001453" name="content" class="wmd-input"></textarea>
					
					<div class="wmd-preview-container"><div class="wmd-preview-label">预览</div><div class="wmd-panel wmd-preview" id="wmd-preview-reply-body-558adb7c459f088730001453"></div></div></div></div>
					<input type="hidden" name="card_id" value="<?php echo ($card_id); ?>">
                    <div class="reply-post-control">
						<input type="submit" class="discussion-submit-post control-button" value="提交">
                    </div>
                </form>
            </div>
        </div>
        <div style="display: none;" class="post-tools">
            <a href="javascript:void(0)" class="forum-thread-expand"><span class="icon fa fa-plus"></span> 展开讨论</a>
            <a href="javascript:void(0)" class="forum-thread-collapse"><span class="icon fa fa-minus"></span> 折叠讨论</a>
        </div>
    </article>
</div>
        </div>
    </div>
</section>







<script aria-hidden="true" type="text/template" id="thread-template">
    <article class="discussion-article" data-id="<%- id %>">
        <div class="thread-wrapper">
            <div class="forum-thread-main-wrapper">
                <div class="thread-content-wrapper"></div>
                <div class="post-extended-content">
                    <ol class="responses js-marked-answer-list"></ol>
                </div>
            </div>
            <div class="post-extended-content">
                <div class="response-count"/>
                <div class="add-response">
                    <button class="button add-response-btn">
                        <i class="icon fa fa-reply"></i>
                        <span class="add-response-btn-text">添加回复</span>
                    </button>
                </div>
                <ol class="responses js-response-list"/>
                <div class="response-pagination"/>
                <div class="post-status-closed bottom-post-status" style="display: none">
                  这个帖子已经关闭。
                </div>
                <form class="discussion-reply-new" data-id="<%- id %>">
                    <h4>回复：</h4>
                    <ul class="discussion-errors"></ul>
                    <div class="reply-body" data-id="<%- id %>"></div>
                    <div class="reply-post-control">
                        <a class="discussion-submit-post control-button" href="#">提交</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="post-tools">
            <a href="javascript:void(0)" class="forum-thread-expand"><span class="icon fa fa-plus"/> 展开讨论</a>
            <a href="javascript:void(0)" class="forum-thread-collapse"><span class="icon fa fa-minus"/> 折叠讨论</a>
        </div>
    </article>
</script>

<script aria-hidden="true" type="text/template" id="thread-show-template">
    <div class="discussion-post">
    <header>
        <div class="group-visibility-label">
            <% if (obj.group_name) { %>
                <%-
                interpolate(
                    gettext('This post is visible only to %(group_name)s.'),
                    {group_name: obj.group_name},
                    true
                )
                %>
            <% } else { %>
                <%- gettext('This post is visible to everyone.') %>
            <% } %>
        </div>

        <div class="post-header-content">
            <h1><%- title %></h1>
            <p class="posted-details">
            <%
            var timeAgoHtml = interpolate(
                '<span class="timeago" title="%(created_at)s">%(created_at)s</span>',
                {created_at: created_at},
                true
            );
            %>
            <%=
            interpolate(
                // Translators: post_type describes the kind of post this is (e.g. "question" or "discussion");
                // time_ago is how much time has passed since the post was created (e.g. "4 hours ago")
                _.escape(gettext('%(post_type)s posted %(time_ago)s by %(author)s')),
                {post_type: thread_type, time_ago: timeAgoHtml, author: author_display},
                true
            )
            %>
            </p>
            <div class="post-labels">
                <span class="post-label-pinned"><i class="icon fa fa-thumb-tack"></i><%- gettext("Pinned") %></span>
                <span class="post-label-reported"><i class="icon fa fa-flag"></i><%- gettext("Reported") %></span>
                <span class="post-label-closed"><i class="icon fa fa-lock"></i><%- gettext("Closed") %></span>
            </div>
        </div>
        <div class="post-header-actions post-extended-content">
            <%=
            _.template(
                $('#forum-actions').html(),
                {
                    contentId: cid,
                    contentType: 'post',
                    primaryActions: ['vote', 'follow'],
                    secondaryActions: ['pin', 'edit', 'delete', 'report', 'close']
                }
            )
            %>
        </div>
    </header>

    <div class="post-body"><%- body %></div>

    <% if (mode == "tab" && obj.courseware_url) { %>
        <%
        var courseware_title_linked = interpolate(
            '<a href="%(courseware_url)s">%(courseware_title)s</a>',
            {courseware_url: courseware_url, courseware_title: _.escape(courseware_title)},
            true
        );
        %>
        <div class="post-context">
            <%=
            interpolate(
                _.escape(gettext('(this post is about %(courseware_title_linked)s)')),
                {courseware_title_linked: courseware_title_linked},
                true
            )
            %>
        </div>
    <% } %>
</div>

</script>

<script aria-hidden="true" type="text/template" id="thread-edit-template">
    <h1>编辑帖子</h1>
    <ul class="post-errors"></ul>
    <div class="forum-edit-post-form-wrapper"></div>
    <div class="form-row">
      <label class="sr" for="edit-post-title">编辑文章标题</label>
      <input type="text" id="edit-post-title" class="edit-post-title" name="title" value="<%-title %>" placeholder="标题">
    </div>
    <div class="form-row">
      <div class="edit-post-body" name="body"><%- body %></div>
    </div>
    <input type="submit" id="edit-post-submit" class="post-update" value="更新帖子">
    <a href="#" class="post-cancel">取消</a>
</script>

<script aria-hidden="true" type="text/template" id="thread-response-template">
    <div class="discussion-response"></div>
    <a href="#" class="action-show-comments">
        <%- interpolate('显示评论 (%(num_comments)s)', {num_comments: comments.length}, true) %>
        <i class="icon fa fa-caret-down"></i>
    </a>
    <ol class="comments">
        <li class="new-comment">
            <form class="comment-form" data-id="<%- wmdId %>">
                <ul class="discussion-errors"></ul>
                <label class="sr" for="add-new-comment">添加评论</label>
                <div class="comment-body" id="add-new-comment" data-id="<%- wmdId %>"
                data-placeholder="添加评论"></div>
                <div class="comment-post-control">
                    <a class="discussion-submit-comment control-button" href="#">提交</a>
                </div>
            </form>
        </li>
    </ol>
</script>

<script aria-hidden="true" type="text/template" id="thread-response-show-template">
    <header>
      <div class="response-header-content">
        <%= author_display %>
        <p class="posted-details">
            <span class="timeago" title="<%= created_at %>"><%= created_at %></span>
            
              <% if (obj.endorsement) { %> - <%=
                interpolate(
                    thread.get("thread_type") == "question" ?
                      (endorsement.username ? " %(time_ago)s 被%(user)s标记为答案" : "标记为答案 %(time_ago)s") :
                      (endorsement.username ? "%(time_ago)s %(user)s点赞 " : "%(time_ago)s点赞 "),
                    {
                        'time_ago': '<span class="timeago" title="' + endorsement.time + '">' + endorsement.time + '</span>',
                        'user': endorser_display
                    },
                    true
                )%><% } %>
          </p>
          <div class="post-labels">
              <span class="post-label-reported"><i class="icon fa fa-flag"></i>举报</span>
          </div>
          </div>
          <div class="response-header-actions">
            <%=
                _.template(
                    $('#forum-actions').html(),
                    {
                        contentId: cid,
                        contentType: 'response',
                        primaryActions: ['vote', thread.get('thread_type') == 'question' ? 'answer' : 'endorse'],
                        secondaryActions: ['edit', 'delete', 'report']
                    }
                )
            %>
          </div>
    </header>

    <div class="response-body"><%- body %></div>
</script>

<script aria-hidden="true" type="text/template" id="thread-response-edit-template">
  <div class="edit-post-form">
    <h1>编辑回复</h1>
    <ul class="edit-post-form-errors"></ul>
    <div class="form-row">
      <div class="edit-post-body" name="body" data-id="<%- id %>"><%- body %></div>
    </div>
    <input type="submit" id="edit-response-submit"class="post-update" value="更新回复">
    <a href="#" class="post-cancel">取消</a>
  </div>
</script>

<script aria-hidden="true" type="text/template" id="response-comment-show-template">
  <div id="comment_<%- id %>">
    <div class="response-body"><%- body %></div>
    <%=
        _.template(
            $('#forum-actions').html(),
            {
                contentId: cid,
                contentType: 'comment',
                primaryActions: [],
                secondaryActions: ['edit', 'delete', 'report']
            }
        )
    %>
    
    <p class="posted-details">
    <%=
      interpolate(
        '发布 %(time_ago)s by %(author)s',
        {'time_ago': '<span class="timeago" title="' + created_at + '">' + created_at + '</span>', 'author': author_display},
        true
      )%>
    </p>
    <div class="post-labels">
      <span class="post-label-reported"><i class="icon fa fa-flag"></i>举报</span>
    </div>
  </div>
</script>

<script aria-hidden="true" type="text/template" id="response-comment-edit-template">
  <div class="edit-post-form" id="comment_<%- id %>">
    <h1>编辑注释</h1>
    <ul class="edit-comment-form-errors"></ul>
    <div class="form-row">
      <div class="edit-comment-body" name="body" data-id="<%- id %>"><%- body %></div>
    </div>
    <input type="submit" id="edit-comment-submit" class="post-update" value="更新注释">
    <a href="#" class="post-cancel">取消</a>
  </div>
</script>

<script aria-hidden="true" type="text/template" id="thread-list-item-template">
  <li data-id="<%- id %>" class="forum-nav-thread<% if (typeof(read) != "undefined" && !read) { %> is-unread<% } %>">
    <a href="#" class="forum-nav-thread-link">
      <div class="forum-nav-thread-wrapper-0">
        <%
        var icon_class, sr_text;
        if (thread_type == "discussion") {
            icon_class = "fa-comments";
            sr_text = "讨论";
        } else if (endorsed) {
            icon_class = "fa-check-square-o";
            sr_text = "已被回答的问题";
        } else {
            icon_class = "fa-question";
            sr_text = "未回答的问题";
        }
        %>
        <span class="sr"><%= sr_text %></span>
        <i class="icon fa <%= icon_class %>"></i>
      </div><div class="forum-nav-thread-wrapper-1">
        <span class="forum-nav-thread-title"><%- title %></span>
        
        <%
        var labels = "";
        if (pinned) {
            labels += '<li class="post-label-pinned"><i class="icon fa fa-thumb-tack"></i>置顶</li> ';
        }
        if (typeof(subscribed) != "undefined" && subscribed) {
            labels += '<li class="post-label-following"><i class="icon fa fa-star"></i>关注</li> ';
        }
        if (staff_authored) {
            labels += '<li class="post-label-by-staff"><i class="icon fa fa-user"></i>由: 教员</li> ';
        }
        if (community_ta_authored) {
            labels += '<li class="post-label-by-community-ta"><i class="icon fa fa-user"></i>由: 社区助教</li> ';
        }
        if (labels != "") {
            print('<ul class="forum-nav-thread-labels">' + labels + '</ul>');
        }
        %>
      </div><div class="forum-nav-thread-wrapper-2">
        
        <span class="forum-nav-thread-votes-count">+<%=
            interpolate(
                '%(votes_up_count)s%(span_sr_open)s 投票 %(span_close)s',
                {'span_sr_open': '<span class="sr">', 'span_close': '</span>', 'votes_up_count': votes['up_count']},
                true
                )
        %></span>
        
        <span class="forum-nav-thread-comments-count <% if (unread_comments_count > 0) { %>is-unread<% } %>">
            <%
        var fmt;
        // Counts in data do not include the post itself, but the UI should
        var data = {
            'span_sr_open': '<span class="sr">',
            'span_close': '</span>',
            'unread_comments_count': unread_comments_count + (read ? 0 : 1),
            'comments_count': comments_count + 1
            };
        if (unread_comments_count > 0) {
            fmt = '%(comments_count)s %(span_sr_open)s评论 (%(unread_comments_count)s 未读评论)%(span_close)s';
        } else {
            fmt = '%(comments_count)s %(span_sr_open)s评论 %(span_close)s';
        }
        print(interpolate(fmt, data, true));
        %>
        </span>
      </div>
    </a>
  </li>
</script>

<script aria-hidden="true" type="text/template" id="discussion-home">
  <div class="discussion-article blank-slate">
    <section class="home-header">
      <span class="label">讨论空间:</span>
        <h1 class="home-title">孙子兵法与企业经营</h1>
    </section>

        <span class="label label-settings">
          怎么使用 学堂在线 的讨论功能
        </span>
        <table class="home-helpgrid">
          <tr class="helpgrid-row helpgrid-row-navigation">
            <td class="row-title">搜索讨论</td>
            <td class="row-item">
              <i class="icon fa fa-reorder"></i>
              <span class="row-description">关注特殊话题</span>
            </td>
            <td class="row-item">
              <i class="icon fa fa-search"></i>
              <span class="row-description">搜索特殊话题</span>
            </td>
            <td class="row-item">
              <i class="icon fa fa-sort"></i>
              <span class="row-description">按照日期，投票或评论排序</span>
            </td>
          </tr>
          <tr class="helpgrid-row helpgrid-row-participation">
            <td class="row-title">发布预订</td>
            <td class="row-item">
              <i class="icon fa fa-plus"></i>
              <span class="row-description">更新发布与良性反馈</span>
            </td>
            <td class="row-item">
              <i class="icon fa fa-flag"></i>
              <span class="row-description">举报恶意灌水</span>
            </td>
            <td class="row-item">
              <i class="icon fa fa-star"></i>
              <span class="row-description">关注发布更新</span>
            </td>
          </tr>
          <tr class="helpgrid-row helpgrid-row-notification">
            <td class="row-title">接收更新</td>
            <td class="row-item-full" colspan="3">
              <label for="email-setting-checkbox">
                <span class="sr">切换通知设置</span>
                <span class="notification-checkbox">
                  <input type="checkbox" id="email-setting-checkbox" class="email-setting" name="email-notification"/>
                  <i class="icon fa fa-envelope"></i>
                </span>
              </label>
              <span class="row-description">勾选此选项，每天一次接收文摘邮件来提醒你关注的最新活动消息发布。</span>
            </td>
          </tr>
        </table>
     </div>
</script>

<script aria-hidden="true" type="text/template" id="search-alert-template">
    <div class="search-alert" id="search-alert-<%- cid %>">
        <div class="search-alert-content">
          <p class="message"><%= message %></p>
        </div>

        <div class="search-alert-controls">
          <a href="#" class="dismiss control control-dismiss"><i class="icon fa fa-remove"></i></a>
        </div>
    </div>
</script>

<script aria-hidden="true" type="text/template" id="new-post-template">
    <form class="forum-new-post-form">
        <ul class="post-errors" style="display: none"></ul>
        <div class="forum-new-post-form-wrapper"></div>
        <% if (cohort_options) { %>
        <div class="post-field">
            <label class="field-label">
                <span class="field-label-text">
                    可见 :
                </span><select class="field-input js-group-select" name="group_id" <% if (!is_commentable_cohorted) { %>disabled<% } %>>
                    <option value="">所有分组</option>
                    <% _.each(cohort_options, function(opt) { %>
                    <option value="<%= opt.value %>" <% if (opt.selected) { %>selected<% } %>><%- opt.text %></option>
                    <% }); %>
                 </select>
            </label><div class="field-help">
                讨论区管理员, 版主和助教可以使他们的帖子对所有学生可见或只对特定队列可见. 
            </div>
        </div>
        <% } %>
        <div class="post-field">
            <label class="field-label">
                <span class="sr">标题:</span>
                <input type="text" class="field-input js-post-title" name="title" placeholder="标题">
            </label><span class="field-help">
                添加一个清晰明了的标题来激励大家参与.
            </span>
        </div>
        <div class="post-field js-post-body editor" name="body" data-placeholder="输入你的问题或评论"></div>
        <div class="post-options">
            <label class="post-option is-enabled">
                <input type="checkbox" name="follow" class="post-option-input js-follow" checked>
                <i class="icon fa fa-star"></i>跟踪这个帖子
            </label>
            <% if (allow_anonymous) { %>
            <label class="post-option">
                <input type="checkbox" name="anonymous" class="post-option-input js-anon">
                匿名发帖
            </label>
            <% } %>
            <% if (allow_anonymous_to_peers) { %>
            <label class="post-option">
                <input type="checkbox" name="anonymous_to_peers" class="post-option-input js-anon-peers">
                向同学匿名发帖
            </label>
            <% } %>
        </div>
        <div>
            <input type="submit" class="submit" value="添加帖子">
            <a href="#" class="cancel">取消</a>
        </div>
    </form>
</script>

<script aria-hidden="true" type="text/template" id="thread-type-template">
    <div class="post-field">
        <div class="field-label">
            <span class="field-label-text">
                帖子类型: 
            </span><fieldset class="field-input">
                <input type="radio" name="<%= form_id %>-post-type" class="post-type-input" id="<%= form_id %>-post-type-question" value="question">
                <label for="<%= form_id %>-post-type-question" class="post-type-label">
                    <i class="icon fa fa-question"></i>
                    问题
                </label>
                <input type="radio" name="<%= form_id %>-post-type" class="post-type-input" id="<%= form_id %>-post-type-discussion" value="discussion" checked>
                <label for="<%= form_id %>-post-type-discussion" class="post-type-label">
                    <i class="icon fa fa-comments"></i>
                    讨论区
                </label>
            </fieldset>
        </div><span class="field-help">
            问题是发布需要回答的问题. 讨论是分享点子和展开对话讨论. 
        </span>
    </div>
</script>

<script aria-hidden="true" type="text/template" id="new-post-menu-entry-template">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="<%- id %>" data-cohorted="<%- is_cohorted %>"><%- text %></a>
    </li>
</script>

<script aria-hidden="true" type="text/template" id="new-post-menu-category-template">
    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title"><%- text %></span>
        <ul role="menu" class="topic-submenu"><%= entries %></ul>
    </li>
</script>

<script aria-hidden="true" type="text/template" id="topic-template">
    <div class="field-label">
        <span class="field-label-text">主题范围:</span><div class="field-input post-topic">
            <a href="#" class="post-topic-button">
                <span class="sr">讨论主题；当前选中的是:</span>
                <span class="js-selected-topic"></span>
                <span class="drop-arrow" aria-hidden="true">▾</span>
            </a>
            <div class="topic-menu-wrapper">
                <label class="topic-filter-label">
                    <span class="sr">筛选主题</span>
                    <input type="text" class="topic-filter-input" placeholder="筛选主题">
                </label>
                <ul class="topic-menu" role="menu"><%= topics_html %></ul>
           </div>
       </div>
    </div><span class="field-help">
        添加你的帖子到相关主题用以帮助他人找到它. 
    </span>
</script>




    <script type="text/template" id="forum-action-endorse">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-button action-endorse" role="checkbox" aria-checked="false">
                <span class="sr">点赞</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked">点赞</span>
                    <span class="label-checked">取消点赞</span>
                </span>
                <span class="action-icon"><i class="icon fa fa-ok"></i></span>
            </a>
        </li>
    </script>


    <script type="text/template" id="forum-action-answer">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-button action-answer" role="checkbox" aria-checked="false">
                <span class="sr">标记为答案</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked">标记为答案</span>
                    <span class="label-checked">取消标记为答案</span>
                </span>
                <span class="action-icon"><i class="icon fa fa-ok"></i></span>
            </a>
        </li>
    </script>


    <script type="text/template" id="forum-action-follow">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-button action-follow" role="checkbox" aria-checked="false">
                <span class="sr">关注</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked">关注</span>
                    <span class="label-checked">取消关注</span>
                </span>
                <span class="action-icon"><i class="icon fa fa-star"></i></span>
            </a>
        </li>
    </script>


<script type="text/template" id="forum-action-vote">
    <li class="actions-item">
        <span aria-hidden="true" class="display-vote" >
          <span class="vote-count"></span>
        </span>
        <a href="#" class="action-button action-vote" role="checkbox" aria-checked="false">
            <span class="sr">投票</span>
            <span class="sr js-sr-vote-count"></span>

            <span class="action-label" aria-hidden="true">
              <span class="vote-count"></span>
            </span>

            <span class="action-icon" aria-hidden="true">
                <i class="icon fa fa-plus"></i>
            </span>
        </a>
    </li>
</script>




    <script type="text/template" id="forum-action-report">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-list-item action-report" role="checkbox" aria-checked="false">
                <span class="sr">举报辱骂</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked">举报</span>
                    <span class="label-checked">取消举报</span>
                </span>
                <span class="action-icon">
                  <i class="icon fa fa-flag"></i>
                </span>
            </a>
        </li>
    </script>


    <script type="text/template" id="forum-action-pin">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-list-item action-pin" role="checkbox" aria-checked="false">
                <span class="sr">置顶</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked">置顶</span>
                    <span class="label-checked">取消置顶</span>
                </span>
                <span class="action-icon">
                  <i class="icon fa fa-thumb-tack"></i>
                </span>
            </a>
        </li>
    </script>


    <script type="text/template" id="forum-action-close">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-list-item action-close" role="checkbox" aria-checked="false">
                <span class="sr">关闭</span>
                <span class="action-label" aria-hidden="true">
                    <span class="label-unchecked">关闭</span>
                    <span class="label-checked">打开</span>
                </span>
                <span class="action-icon">
                  <i class="icon fa fa-lock"></i>
                </span>
            </a>
        </li>
    </script>





    <script type="text/template" id="forum-action-edit">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-list-item action-edit" role="button">
                <span class="action-label">编辑</span>
                <span class="action-icon"><i class="icon fa fa-pencil-square-o"></i></span>
            </a>
        </li>
    </script>


    <script type="text/template" id="forum-action-delete">
        <li class="actions-item">
            <a href="javascript:void(0)" class="action-list-item action-delete" role="button">
                <span class="action-label">删除</span>
                <span class="action-icon"><i class="icon fa fa-remove"></i></span>
            </a>
        </li>
    </script>


<script type="text/template" id="forum-actions">
    <ul class="<%= contentType %>-actions-list">
        <% _.each(primaryActions, function(action) { print(_.template($('#forum-action-' + action).html(), {})) }) %>
        <li class="actions-item is-visible">
            <div class="more-wrapper">
                <a href="javascript:void(0)" class="action-button action-more" role="button" aria-haspopup="true" aria-controls="action-menu-<%= contentId %>">
                    <span class="action-label">更多</span>
                    <span class="action-icon"><i class="icon fa fa-ellipsis-h"></i></span>
                </a>
                <div class="actions-dropdown" id="action-menu-<%= contentType %>" aria-expanded="false">
                  <ul class="actions-dropdown-list">
                    <% _.each(secondaryActions, function(action) { print(_.template($('#forum-action-' + action).html(), {})) }) %>
                  </ul>
                </div>
            </div>
        </li>
    </ul>
</script>

<script aria-hidden="true" type="text/template" id="post-user-display-template">
    <% if (username) { %>
    <a href="<%- user_url %>" class="username"><%- username %></a>
        <% if (is_community_ta) { %>
        <span class="user-label-community-ta">社区助教</span>
        <% } else if (is_staff) { %>
        <span class="user-label-staff">老师</span>
        <% } %>
    <% } else { %>
    匿名
    <% } %>
</script>


<script type="text/template" id="thread-list-template">
    <div class="forum-nav-header">
        <a href="#" class="forum-nav-browse" aria-haspopup="true">
            <i class="icon fa fa-reorder"></i><span class="sr">讨论主题；当前选中的是:</span><span class="forum-nav-browse-current">所有讨论</span><span class="forum-nav-browse-drop-arrow">▾</span>
        </a>
        <form class="forum-nav-search">
            <div class="forum-nav-search-ff-position-fix">
                <label>
                    <span class="sr">搜索</span>
                    <input class="forum-nav-search-input" type="text" placeholder="查找所有帖子">
                    <i class="icon fa fa-search"></i>
                </label>
            </div>
        </form>
    </div>
    








<div class="forum-nav-browse-menu-wrapper" style="display: none">
    <form class="forum-nav-browse-filter">
        <label>
            <span class="sr">过滤主题</span>
            <input type="text" class="forum-nav-browse-filter-input" placeholder="过滤主题">
            <i class="icon fa fa-filter"></i>
        </label>
    </form>
    <ul class="forum-nav-browse-menu">
        <li class="forum-nav-browse-menu-item forum-nav-browse-menu-all">
            <a href="#" class="forum-nav-browse-title">所有讨论</a>
        </li>
        <li class="forum-nav-browse-menu-item forum-nav-browse-menu-following">
            <a href="#" class="forum-nav-browse-title"><i class="icon fa fa-star"></i>我参与的讨论帖</a>
        </li>
        
            
    <li
        class="forum-nav-browse-menu-item"
        data-discussion-id='i4x-NCTU-nctucmszb-course-2015_T1'
        data-cohorted="false"
    >
        <a href="#" class="forum-nav-browse-title">General</a>
    </li>

            
    <li class="forum-nav-browse-menu-item">
        <a href="#" class="forum-nav-browse-title">第一章</a>
        <ul class="forum-nav-browse-submenu">
            
            
    <li
        class="forum-nav-browse-menu-item"
        data-discussion-id='fe2b8133db1a4218b1a221cec6db62ba'
        data-cohorted="false"
    >
        <a href="#" class="forum-nav-browse-title">习题一讨论</a>
    </li>


        </ul>
    </li>

            
    <li class="forum-nav-browse-menu-item">
        <a href="#" class="forum-nav-browse-title">讨论、分享区</a>
        <ul class="forum-nav-browse-submenu">
            
            
    <li
        class="forum-nav-browse-menu-item"
        data-discussion-id='d2b130c9eb214c6f97925831b3848f65'
        data-cohorted="false"
    >
        <a href="#" class="forum-nav-browse-title"> 内容释疑讨论区 </a>
    </li>

            
    <li
        class="forum-nav-browse-menu-item"
        data-discussion-id='971b2859eca54abda9b545be260d53dc'
        data-cohorted="false"
    >
        <a href="#" class="forum-nav-browse-title">笔记分享区</a>
    </li>

            
    <li
        class="forum-nav-browse-menu-item"
        data-discussion-id='e5cb9d0aaff744b6add0e5a5d135f654'
        data-cohorted="false"
    >
        <a href="#" class="forum-nav-browse-title">作业释疑讨论区</a>
    </li>

            
    <li
        class="forum-nav-browse-menu-item"
        data-discussion-id='0443f23d2b6f4c9b98b7f4f842c38deb'
        data-cohorted="false"
    >
        <a href="#" class="forum-nav-browse-title">其他讨论区</a>
    </li>


        </ul>
    </li>


    </ul>
</div>

    <div class="forum-nav-thread-list-wrapper">
        <div class="forum-nav-refine-bar">
            <label class="forum-nav-filter-main">
                <span class="sr">筛选:</span>
                <select class="forum-nav-filter-main-control">
                    <option value="all">显示全部</option>
                    <option value="unread">未读</option>
                    <option value="unanswered">未答复</option>
                </select>
            </label><% if (isCohorted && isPrivilegedUser) { %><label class="forum-nav-filter-cohort">
                <span class="sr">队列:</span>
                <select class="forum-nav-filter-cohort-control">
                    <option value="">所有队列</option>
                </select>
            </label><% } %><label class="forum-nav-sort">
                <span class="sr">排列:</span>
                <select class="forum-nav-sort-control">
                    <option value="date">最近活动排序</option>
                    <option value="comments">最多活动排序</option>
                    <option value="votes">最多投票排序</option>
                </select>
            </label>
        </div>
        <div class="search-alerts"></div>
        <ul class="forum-nav-thread-list"></ul>
    </div>
</script>


      
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
                <div class="colophon" style="width:100%;">
                    <nav class="nav-colophon">
                        <ol>
                            <li><a href="http://www.xuetangx.com/about#about">关于我们</a></li>
                            <li><a href="http://www.xuetangx.com/about#question">常见问题</a></li>
                            <li><a href="http://www.xuetangx.com/about#contact">联系我们</a></li>
                        </ol>
                        <div id="weibo-follow-btn"><iframe id="sina-btn" scrolling="no" src="/xuetang/Public/html/followbutton.htm" frameborder="0"></iframe></div>
                    </nav>
                </div>
            </footer>
            <script type="text/javascript" charset="utf-8">
            if ("http:" == document.location.protocol) {
                document.getElementById('weibo-follow-btn').innerHTML = '<iframe id="sina-btn" frameborder="0" scrolling="no" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&style=3&uid=5149707292&width=100%&height=24&language=zh_cn"></iframe>';
            }
            </script>
        </div>
        <div id="tu-footer">
            <div class="tu-container">
                <div class="pull-left">
                    <img src="/xuetang/Public/images/logo-tsinghua-studio-white-footer.png" alt="Home Page" height="60">
                </div>
                <div class="pull-right">
                    <span>地址：北京市海淀区清华科技园 科技大厦A座11层</span>
                    <br>
                    <span>版权所有：学堂在线</span>
                </div>
            </div>
        </div>
    

  </div>

    
    <script type="text/javascript" src="/xuetang/Public/js/lms-application.js" charset="utf-8"></script>


    
    <script type="text/javascript" src="/xuetang/Public/js/lms-modules.js" charset="utf-8"></script>



  




<script type="text/x-mathjax-config;executed=true">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [
        ["\\(","\\)"],
        ['[mathjaxinline]','[/mathjaxinline]']
      ],
      displayMath: [
        ["\\[","\\]"],
        ['[mathjax]','[/mathjax]']
      ]
    }
  });
</script>

<!-- This must appear after all mathjax-config blocks, so it is after the imports from the other templates.
     It can't be run through static.url because MathJax uses crazy url introspection to do lazy loading of
     MathJax extension libraries -->
<script type="text/javascript" src="/xuetang/Public/js/MathJax.js"></script>

<script type="text/template" id="_profile_thread">

<article class="discussion-article" data-id="{{id}}">
    <div class="discussion-post">
        <header>
            <h3>{{title}}</h3>
            <p class="posted-details">                
                {{#user}}
                <a href="{{user_url}}" class="username">{{username}}</a>
                {{/user}}
                {{^user}}
                匿名
                {{/user}}

                <span class="timeago" title="{{created_at}}">{{created_at}}</span>
                <span class="post-status-closed top-post-status" style="display: none">
                    &bull; 这个帖子已经关闭。
                </span>
            </p>
        </header>
        <div class="post-body">{{abbreviatedBody | r}}</div>
        <div class="my-reply-body">
            <h4>回复</h4>
            <ul><ul>
        </div>
    </div>
    <div class="post-tools">
        <a href="{{permalink}}">查看讨论</a>
    </div>

</article>
</script>
<script type="text/template" id="_user_profile">

<h2>活动的帖子</h2>
<section class="discussion">
    {{#threads}}
        <article class="discussion-thread" id="thread_{{id}}"/>
    {{/threads}}
</section>
<section class="pagination"/>
</script>
<script type="text/template" id="_pagination">

<nav class="discussion-{{discussiontype}}-paginator discussion-paginator">
    <ol>
        {{#previous}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">&lt; 上一个</a></li>
        {{/previous}}
        {{#first}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="1">1</a></li>
        {{/first}}
        {{#leftdots}}
        <li>…</li>
        {{/leftdots}}

        {{#lowPages}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">{{number}}</a></li>
        {{/lowPages}}
        <li class="current-page"><span>{{page}}</span></li>
        {{#highPages}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">{{number}}</a></li>
        {{/highPages}}

        {{#rightdots}}
        <li>…</li>
        {{/rightdots}}
        {{#last}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">{{number}}</a></li>
        {{/last}}
        {{#next}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">下一个 &gt;</a></li>
        {{/next}}
    </ol>
</nav>

</script>
<script type="text/template" id="_inline_discussion">

<section class="discussion" data-discussion-id="{{discussionId}}">
    <article class="new-post-article"></article>

    <section class="threads">
        {{#threads}}
            <article class="discussion-thread" id="thread_{{id}}">
            </article>
        {{/threads}}
    </section>

    <section class="pagination">
    </section>
</section>
</script>


    <script type="text/javascript" src="/xuetang/Public/js/discussion.js" charset="utf-8"></script>




  <div style="display:none;"><script type="text/javascript" src="/xuetang/Public/js/analyse.js"></script><script src="/xuetang/Public/js/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=32d56203d9a79a16a032531755dad60e" target="_blank"><img src="/xuetang/Public/images/21.gif" border="0" width="20" height="20"></a></div>




<div style="display: none; opacity: 0; left: 371.5px; top: 634px;" class="tooltip">1 条新评论</div><div id="reader-feedback" class="sr" style="display:none" aria-hidden="false" aria-atomic="true" aria-live="assertive"></div><div style="display: none;" id="mathjax_delay_buffer0"></div><div style="position: absolute; visibility: hidden; top: 0px; left: 0px; width: auto; padding: 0px; border: 0px none; margin: 0px; white-space: nowrap; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; font-size: 40px; font-weight: normal; font-style: normal; font-size-adjust: none; font-family: &quot;MathJax_Size1&quot;,sans-serif;" id="MathJax_Font_Test"></div><div style="display: none;" id="mathjax_delay_buffer1"></div><div style="display: none;" id="mathjax_delay_buffer2"></div><div style="display: none;" id="mathjax_delay_buffer3"></div><div style="display: none;" id="mathjax_delay_buffer4"></div><div style="display: none;" id="mathjax_delay_buffer5"></div><div style="display: none;" id="mathjax_delay_buffer6"></div><div style="display: none;" id="mathjax_delay_buffer7"></div><div style="display: none;" id="mathjax_delay_buffer8"></div><div style="display: none;" id="mathjax_delay_buffer9"></div><div style="display: none;" id="mathjax_delay_buffer10"></div><div style="display: none;" id="mathjax_delay_buffer11"></div><div style="display: none;" id="mathjax_delay_buffer12"></div><div style="display: none;" id="mathjax_delay_buffer13"></div><div style="display: none;" id="mathjax_delay_buffer14"></div><div style="display: none;" id="mathjax_delay_buffer15"></div><div style="display: none;" id="mathjax_delay_buffer16"></div><div style="display: none;" id="mathjax_delay_buffer17"></div><div style="display: none;" id="mathjax_delay_buffer18"></div><div style="display: none;" id="mathjax_delay_buffer19"></div><div style="display: none;" id="mathjax_delay_buffer20"></div><div style="display: none;" id="mathjax_delay_buffer21"></div><div style="display: none;" id="mathjax_delay_buffer22"></div><div style="display: none;" id="mathjax_delay_buffer23"></div><div style="display: none;" id="mathjax_delay_buffer24"></div><div style="display: none;" id="mathjax_delay_buffer25"></div><div style="display: none;" id="mathjax_delay_buffer26"></div><div style="display: none;" id="mathjax_delay_buffer27"></div><div style="display: none;" id="mathjax_delay_buffer28"></div><div style="display: none;" id="mathjax_delay_buffer29"></div><div style="display: none;" id="mathjax_delay_buffer30"></div><div style="display: none;" id="mathjax_delay_buffer31"></div><div style="display: none;" id="mathjax_delay_buffer32"></div><div style="display: none;" id="mathjax_delay_buffer33"></div><div style="display: none;" id="mathjax_delay_buffer34"></div><div style="display: none;" id="mathjax_delay_buffer35"></div><div style="display: none;" id="mathjax_delay_buffer36"></div><div style="display: none;" id="mathjax_delay_buffer37"></div><div style="display: none;" id="mathjax_delay_buffer38"></div><div style="display: none;" id="mathjax_delay_buffer39"></div><div style="display: none;" id="mathjax_delay_buffer40"></div><div style="display: none;" id="mathjax_delay_buffer41"></div><div style="display: none;" id="mathjax_delay_buffer42"></div><div style="display: none;" id="mathjax_delay_buffer43"></div><div style="display: none;" id="mathjax_delay_buffer44"></div><div style="display: none;" id="mathjax_delay_buffer45"></div><div style="display: none;" id="mathjax_delay_buffer46"></div><div style="display: none;" id="mathjax_delay_buffer47"></div><div style="display: none;" id="mathjax_delay_buffer48"></div><div style="display: none;" id="mathjax_delay_buffer49"></div><div style="display: none;" id="mathjax_delay_buffer50"></div><div style="display: none;" id="mathjax_delay_buffer51"></div><div style="display: none;" id="mathjax_delay_buffer52"></div><div style="display: none;" id="mathjax_delay_buffer53"></div><div style="display: none;" id="mathjax_delay_buffer54"></div><div style="display: none;" id="mathjax_delay_buffer55"></div><div style="display: none;" id="mathjax_delay_buffer56"></div><div style="display: none;" id="mathjax_delay_buffer57"></div><div style="display: none;" id="mathjax_delay_buffer58"></div><div style="display: none;" id="mathjax_delay_buffer59"></div><div style="display: none;" id="mathjax_delay_buffer60"></div><div style="display: none;" id="mathjax_delay_buffer61"></div><div style="display: none;" id="mathjax_delay_buffer62"></div><div style="display: none;" id="mathjax_delay_buffer63"></div><div style="display: none;" id="mathjax_delay_buffer64"></div><div style="display: none;" id="mathjax_delay_buffer65"></div><div style="display: none;" id="mathjax_delay_buffer66"></div><div style="display: none;" id="mathjax_delay_buffer67"></div><div style="display: none;" id="mathjax_delay_buffer68"></div><div style="display: none;" id="mathjax_delay_buffer69"></div><div style="display: none;" id="mathjax_delay_buffer70"></div><div style="display: none;" id="mathjax_delay_buffer71"></div><div style="display: none;" id="mathjax_delay_buffer72"></div><div style="display: none;" id="mathjax_delay_buffer73"></div><div style="display: none;" id="mathjax_delay_buffer74"></div><div style="display: none;" id="mathjax_delay_buffer75"></div><div style="display: none;" id="mathjax_delay_buffer76"></div><div style="display: none;" id="mathjax_delay_buffer77"></div><div style="display: none;" id="mathjax_delay_buffer78"></div><div style="display: none;" id="mathjax_delay_buffer79"></div><div style="display: none;" id="mathjax_delay_buffer80"></div><div style="display: none;" id="mathjax_delay_buffer81"></div><div style="display: none;" id="mathjax_delay_buffer82"></div><div style="display: none;" id="mathjax_delay_buffer83"></div><div style="display: none;" id="mathjax_delay_buffer84"></div><div style="display: none;" id="mathjax_delay_buffer85"></div><div style="display: none;" id="mathjax_delay_buffer86"></div><div style="display: none;" id="mathjax_delay_buffer87"></div></body></html>