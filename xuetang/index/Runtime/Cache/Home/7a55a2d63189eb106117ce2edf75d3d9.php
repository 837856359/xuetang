<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head dir="ltr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
   学堂在线--PPT
</title>
  <script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.min.397754ba49e9.js"></script>
<link rel="icon" type="image/x-icon" href="/xuetang/Public/images/favicon.ico" />
<link href="/xuetang/Public/css/lms-style-vendor.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-app.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-app-extend1.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-app-extend2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/xuetang/Public/js/lms-main_vendor.js" charset="utf-8"></script>
<script type="text/javascript" src="/xuetang/Public/js/require-config-lms.js"></script>
<link href="/xuetang/Public/css/lms-style-course-vendor.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-course.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/xuetang/Public/js/split.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.truncate.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.ajaxfileupload.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.Converter.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.Sanitizer.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.Editor.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.autocomplete.3bd10d7510d2.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.timeago.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.timeago.locale.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/mustache.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/URI.min.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/backbone-min.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/tooltip_manager.js"></script>
<link href="/xuetang/Public/css/jquery.autocomplete.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css" />
<link href="http://s.xuetangx.com/resource/css/googlefonts.css" rel='stylesheet' type='text/css'>

<div id="ieversion"></div>
<div id="ie-banner"></div>
  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>
  <meta name="path_prefix" content="">
</head>
<body class="ltr courseware  lang_zh-cn">
  <div class="window-wrap" dir="ltr" style="overflow:hidden;position:relative;">
    <a class="nav-skip" href="#course-content">跳过本内容页</a>
  <header class="global slim" aria-label="全局导航">
  <nav>
  <h1 class="logo">
    <a href="/xuetang">
  <img src="/xuetang/Public/img/logo.png" height="60" alt="Home Page" id="tsinghua-logo"/>
  <style>
  .home>header{
    background-image: url("/xuetang/Public/img/logo.png");
  }
  </style>
    </a>
  </h1>
        <h2>
            <span class="provider">课程名称：</span>
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
          <span class="sr">控制面板： </span><?php echo (session('username')); ?>
        </a>
      </li>
      <li class="primary">
        <a href="#" class="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr">更多选择下拉列表</span> &#9662;</a>
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
<nav class="courseware wrapper-course-material">
  <div class="course-material">
        <ol class="course-tabs">
        <li> <a href="/xuetang/index.php/Home/Studyadout/syllabus">教学大纲</a></li>
          <li style="background:000;"><a href="/xuetang/index.php/Home/Courseware/ware">微视频</a></li>
          <li><a href="/xuetang/index.php/Home/Studyadout/ppt"  class="active">PPT</a></li>
          <li><a href="/xuetang/index.php/Home/Courseinfo/info" >资料</a></li>
          <li><a href="/xuetang/index.php/Home/Studyadout/topic">试题检测</a></li>
          <li><a href="/xuetang/index.php/Home/Discuss/discuss" >讨论区</a></li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="course-wrapper">
    <div class="course-index" role="navigation">
      <header id="open_close_accordion">
        <a href="#">关闭</a>
      </header>
      <div id="accordion" style="display: none">
        <nav aria-label="课程导航">
      <?php foreach($arr as $v){?>
        <?php if($v['ch_id'] == $ch_id){?>
        <div class="chapter is_open">
        <?php }else{?>
        <div class="chapter">
        <?php }?>
        <h3  aria-label="<?php echo ($v["ch_name"]); ?>">
            <a href="javascript:void(0)" onclick="change_ppt(<?php echo $v['ch_id']?>)"><?php echo ($v["ch_name"]); ?></a>
        </h3>
        <ul>
          <?php foreach($v['know'] as $key=> $val){?>

              <li class="">
                  <a  href="javascript:void(0)"><p><?php echo $val; ?></p><p class="subtitle"> </p></a>
              </li>
          <?php }?>
      </ul>
  </div>
	<?php
 } ?>
        </nav>
      </div>
    </div>
    <section class="course-content" id="course-content" style="margin:0;padding:5px;">
        <script>
            function change_ppt(ch_id){
                $.ajax({
                    url:"sel_swf",
                    type:'post',
                    data:{'ch_id':ch_id},
                    dataType:'text',
                    success:function(rst){
                        if(rst != ''){
                            var str='<a id="viewerPlaceHolder" style="width:890px;height:1000px;display:block"></a>';
                            str += "<script type='text/javascript'> ";
                            str += "var fp = new FlexPaperViewer(";
                            str += "'FlexPaperViewer',";
                            str += "'viewerPlaceHolder', { config : {";
                            str += "SwfFile : escape('"+rst+"'),";
                            str += "Scale : 0.6,";
                            str += "ZoomTransition : 'easeOut',";
                            str += "ZoomTime : 0.5,";
                            str += "ZoomInterval : 0.2,";
                            str += "FitPageOnLoad : true,";
                            str += "FitWidthOnLoad : true,";
                            str += "FullScreenAsMaxWindow : false,";
                            str += "ProgressiveLoading : false,";
                            str += "MinZoomSize : 0.2,";
                            str += "MaxZoomSize : 5,";
                            str += "SearchMatchAll : false,";
                            str += "InitViewMode : 'Portrait',";
                            str += "PrintPaperAsBitmap : false,";
                            str += "ViewModeToolsVisible : true,";
                            str += "ZoomToolsVisible : true,";
                            str += "NavToolsVisible : true,";
                            str += "CursorToolsVisible : true,";
                            str += "SearchToolsVisible : true,";
                            str += "localeChain: 'en_US'";
                            str += "}});";
                            str += "<\/script>";
                            $("#ppt_swf").empty().html(str);
                        }else{
                           $("#ppt_swf").empty().html('没有找到ppt信息！'); 
                        }
                    }
                })
            }
           
        </script>
<p style="margin:0;padding:0;">
  <?php if($swf_path){?>          
    <script type="text/javascript" src="/xuetang/Public/js/flexpaper_flash.js"></script>
    <div id="ppt_swf" style="margin:0;padding:0px;">
	        <a id="viewerPlaceHolder" style="width:890px;height:1000px;display:block"></a>
	        <script type="text/javascript"> 
				var fp = new FlexPaperViewer(	
						 'FlexPaperViewer',
						 'viewerPlaceHolder', { config : {
						 SwfFile : escape("<?php echo $swf_path;?>"),
						 Scale : 0.6, 
						 ZoomTransition : 'easeOut',
						 ZoomTime : 0.5,
						 ZoomInterval : 0.2,
						 FitPageOnLoad : true,
						 FitWidthOnLoad : true,
						 FullScreenAsMaxWindow : false,
						 ProgressiveLoading : false,
						 MinZoomSize : 0.2,
						 MaxZoomSize : 5,
						 SearchMatchAll : false,
						 InitViewMode : 'Portrait',
						 PrintPaperAsBitmap : false,
						 
						 ViewModeToolsVisible : true,
						 ZoomToolsVisible : true,
						 NavToolsVisible : true,
						 CursorToolsVisible : true,
						 SearchToolsVisible : true,
  						
  						 localeChain: 'en_US'
						 }});
	        </script>
        </div>
<?php }else{?>
    没有找到ppt信息！
<?php }?>
</p>
    </section>
  </div>
</div>
<nav class="nav-utilities ">
  <h2 class="sr nav-utilities-title">课程工具引导</h2>
</nav>
<div id="accessibile-confirm-modal" class="modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="accessibile-confirm-title">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2 id="accessibile-confirm-title">
          确认
        <span class="sr">,
          模式打开
        </span>
      </h2>
    </header>
    <div role="dialogalert" class="status message" tabindex="-1">
        <p class="message-title"></p>
    </div>
    <hr aria-hidden="true" />
    <div class="actions">
        <button class="dismiss ok-button">是的</button>
        <button class="dismiss cancel-button" data-dismiss="leanModal">取消</button>
    </div>
  </div>
  <a href="#accessibile-confirm-modal" rel="leanModal" id="confirm_open_button" style="display:none">打开</a>
</div>

<script type="text/javascript">
var accessible_confirm = function(message, callback) {
    $("#accessibile-confirm-modal .cancel-button").click(function(){
        $("#accessibile-confirm-modal .close-modal").click();
    });
    $("#accessibile-confirm-modal .ok-button").click(function(){
        $("#accessibile-confirm-modal .close-modal").click();
        callback();
    });

    accessible_modal("#accessibile-confirm-modal #confirm_open_button", "#accessibile-confirm-modal .close-modal", "#accessibile-confirm-modal", ".content-wrapper");
    $("#accessibile-confirm-modal #confirm_open_button").click();
    $("#accessibile-confirm-modal .message-title").html(message);
};
//跳转 传值
function tiao(id,type){
        var kid=id;
        alert(kid);
        location.href="/xuetang/index.php/Home/Studyadout/detail?id="+kid+"&type="+type;
}
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
  <html xmlns:wb="http://open.weibo.com/wb">
  <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
                <div class="colophon" style="width:100%;">
                    <nav class="nav-colophon">
                        <ol>
                            <li><a href="/about#about">关于我们</a></li>
                            <li><a href="/about#question">常见问题</a></li>
                            <li><a href="/about#contact">联系我们</a></li>
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
<script type="text/javascript" src="/xuetang/Public/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.flot.d3d45ff0c6a8.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/codemirror-compressed.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/lms-courseware.js" charset="utf-8"></script>
<script type="text/javascript" src="/xuetang/Public/js/discussion.js" charset="utf-8"></script>
<script type="text/javascript">
    var $$course_id = "TsinghuaX/00740043_2X/2015_T1";

    $(function(){
        $(".ui-accordion-header a, .ui-accordion-content .subtitle").each(function() {
          var elemText = $(this).text().replace(/^\s+|\s+$/g,''); // Strip leading and trailing whitespace
          var wordArray = elemText.split(" ");
          var finalTitle = "";
          if (wordArray.length > 0) {
            for (i=0;i<=wordArray.length-1;i++) {
              finalTitle += wordArray[i];
              if (i == (wordArray.length-2)) {
                finalTitle += "&nbsp;";
              } else if (i == (wordArray.length-1)) {
                // Do nothing
              } else {
                finalTitle += " ";
              }
            }
          }
          $(this).html(finalTitle);
        });
      });
  </script>
  
  <div style="display:none;"></div>
</body>
</html>