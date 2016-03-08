<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head dir="ltr">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>学堂在线--教学大纲</title>
<link rel="icon" type="image/x-icon" href="/xuetang/Public/images/favicon.ico" />
<link href="/xuetang/Public/css/lms-style-vendor.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-app.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-app-extend1.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-app-extend2.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-course-vendor.css" rel="stylesheet" type="text/css" />
<link href="/xuetang/Public/css/lms-style-course.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css" />
<div id="ieversion"></div>
<div id="ie-banner"></div>
  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>
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
</head>

<body class="ltr courseware  lang_zh-cn">
  <div class="window-wrap" dir="ltr" style="overflow:hidden;position:relative;">
    <a class="nav-skip" href="#course-content">跳过本内容页</a>

    
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
        
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/syllabus" class="active">
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
             <a href="/xuetang/index.php/Home/Studyadout/ppt" >
             PPT
             </a>
          </li>
          <li>
             <a href="/xuetang/index.php/Home/Courseinfo/info" >
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
 
<script type="text/javascript">
(function() {

    var transitionfn = function() {
        // Bootstrap: transition.js v3.2.0

        // console.log($.support.transition); 浏览器是否支持transition

        // 兼容的transitionend 事件写法
        // $('.aaa1').on('bsTransitionEnd',function() {
        //   alert(1);
        // });
        function transitionEnd() {
            var el = document.createElement('div')

            var transEndEventNames = {
                WebkitTransition: 'webkitTransitionEnd',
                MozTransition: 'transitionend',
                OTransition: 'oTransitionEnd otransitionend',
                transition: 'transitionend'
            }

            for (var name in transEndEventNames) {
                if (el.style[name] !== undefined) {
                    return {
                        end: transEndEventNames[name]
                    }
                }
            }

            return false // explicit for ie8 (  ._.)
        }

        // http://blog.alexmaccaw.com/css-transitions
        $.fn.emulateTransitionEnd = function(duration) {
            var called = false
            var $el = this
            $(this).one('bsTransitionEnd', function() {
                called = true
            })
            var callback = function() {
                if (!called) $($el).trigger($.support.transition.end)
            }
            setTimeout(callback, duration)
            return this
        }


        $.support.transition = transitionEnd()

        if (!$.support.transition) return

        $.event.special.bsTransitionEnd = {
            bindType: $.support.transition.end,
            delegateType: $.support.transition.end,
            handle: function(e) {
                if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
            }
        }
    };
    transitionfn();

    var $doc = $(document);
    var $win = $(window);
    var $body = $('body');
    var $backupCss = $body.css('overflow');

    $.modalPlus = function(option) {

        // 如果传入的不是json，就remove对话框
        if (!$.isPlainObject(option)) {

            var $modal = $('#g_modal').addClass('g_modal_remove');

            if ($.support.transition) {
                $modal.on('bsTransitionEnd', function() {
                    $doc.trigger('modal.remove', $modal);
                    $modal.remove();
                    $doc.trigger('modal.removed', $modal);
                });
            } else {
                $doc.trigger('modal.remove', $modal);
                $modal.remove();
                $doc.trigger('modal.removed', $modal);
            }

            return false;
        }

        // 主参数
        var opt = $.extend({
            title: '',
            HTML: '做本次习题前，请先完成身份验证。',
            type: 'normal',  // normal=>正常, confirm=>确认， alert=>提示， hint=> 自动消失的提示
            color: 'purple', // purple, red, green
            btns: {}, // {color: red, text: '确定'} 多个按钮用数组
            minHeight: 100, // 最小高度
            zIndex: 151, // 默认zIndex
            className: '' // 会加在最外层的div上，供自定义样式
        }, option || {});


        if (opt.type === 'confirm') {
            opt.title = '提示信息';
            opt.btns = [{
                color: '',
                text: '取消'
            }, {
                color: 'purple',
                text: '确定'
            }];
            opt.HTML = '<div class="g_modal_plus_alert_text">' + opt.HTML + '</div>';
        } else if (opt.type === 'alert') {
            opt.title = '提示信息';
            opt.btns = [{
                color: 'purple',
                text: '确定'
            }];
            opt.HTML = '<div class="g_modal_plus_alert_text">' + opt.HTML + '</div>';
        } else if (opt.type === 'hint') {
            var hintHTML = '<div class="g_modal_hint">' + opt.HTML + '</div>';

            var $hint = $(hintHTML).appendTo('body');

            setTimeout(function() {
                $hint.stop().animate({
                    opacity: 0
                }, function() {
                    $hint.remove();
                });
            }, 2500);

            return $hint;
        }

        // 主HTML代码
        if (!$.isArray(opt.btns)) {
            opt.btns = [opt.btns];
        }

        var HTMLBtn = '';

        if (opt.btns[0].text) {
            HTMLBtn += '<div class="g_modal_plus_btns_wrap">';
            for (var i = 0, l=opt.btns.length; i < l; i++) {
                HTMLBtn += '<div class="ui button ' + opt.btns[i].color + '">' + opt.btns[i].text + '</div>';
            }
            HTMLBtn += '</div>';
        }

        var HTML = '<div class="g_modal g_modal_plus ' + opt.className + '" id="g_modal" style="z-index: ' + opt.zIndex + '">' +
                '<div class="g_modal_cell">' +
                    '<div class="g_modal_wrap ' + 'g_modal_plus_' + opt.color + '">' +
                        '<div class="g_modal_plus_title"><span class="anti_sawtooth"></span>' + opt.title + '</div>' +
                        '<div>' + opt.HTML + '</div>' +
                        '<div class="g_modal_plus_btns">' + HTMLBtn + '</div>' +
                        '<div class="g_modal_closeBtn" title="关闭"></div>' +
                    '</div>' +
                '</div>' +
            '</div>';

        var $modal = $(HTML);

        // 屏幕大于最小高度的自定义事件
        $modal.on('taller', function() {
            $modal.removeClass('g_modal_scroll');
            $modal.height('100%');
        });

        // 屏幕小于最小高度的自定义事件
        $modal.on('untaller', function() {
            var $modalWrap = $modal.find('.g_modal_wrap');
            $modal.addClass('g_modal_scroll').height($win.height()).find('.g_modal_cell').add($modalWrap).css({
                'min-height': opt.minHeight + 'px'
            });
        });

        // 触发自定义事件的事件
        $modal.on('changeStatus', function() {
            if (parseInt($win.height()) >= opt.minHeight) {
                $modal.trigger("taller");
            } else {
                $modal.trigger("untaller");
            }
        });

        // 触发一次自定义事件的事件
        $modal.trigger("changeStatus");

        // 当浏览器大小改变时再次触发
        $win.on('resize', function() {
            $modal.trigger("changeStatus");
        });

        // 触发模态框创建前的回调
        $doc.trigger("modal.create", $modal);

        $modal.appendTo("body");

        // 触发模态框创建成功的回调
        $doc.trigger("modal.created", $modal);

        var $closeBtn = $modal.find(".g_modal_closeBtn");
        var $wrap = $modal.find(".g_modal_wrap");

        // 关闭按钮事件
        $closeBtn.on('click', function(event) {
            event.stopPropagation();
            $.modalPlus();
        });

        // 点击遮罩层， 关闭modal
        $modal.on("click", function() {
            $.modalPlus();
        });

        // 点击内容区域 不关闭modal
        $wrap.on("click", function() {
            event.stopPropagation();
        });

        // 按钮点击事件
        var $btns = $modal.find('.g_modal_plus_btns_wrap').eq(0).find('.button');
        if ($btns.length) {
            $btns.on('click', function() {
                $modal.trigger('modal.btn' + $(this).index() + '.click', $(this));
            });
        }

        // modal为 confirm或alert时，点击取消按钮时的事件
        if (opt.type === 'confirm' || opt.type === 'alert') {
            $modal.on('modal.btn0.click', function() {
                $.modalPlus();
            });
        }

        return $modal;
    };

    $doc.on('modal.created', function() {
        $body.css({
            overflow: 'hidden'
        });
    });

    $doc.on('modal.removed', function() {
        $body.css({
            overflow: $backupCss
        });
    });

    $('body').on('click', '.course-wrapper a[href!="#"]', function(event) {
        var $t = $(this);
        var href = $t.attr('href');
        var index = href.search(/\/courseware\/\w+\/\w+\//i);
        if( index > 0) {
            var section_location = href.substring(index);
            event.preventDefault();
            $.ajax({
                url: "/verify_student/reverification/check/course/TsinghuaX/00740043_2X/2015_T1" + section_location,
                data: {},
                type: 'get',
                dataType: 'json'
            }).then(function(res) {
                if (res.reverify) {
                     $.modalPlus({
                        type: 'confirm',
                        HTML: res.value
                    }).on('modal.btn1.click', function() {
                        location.href = res.redirect;
                    });
                } else {
                    location.href = href;
                }
            }, function() {
                $.modalPlus({
                    type: 'alert',
                    color: 'red',
                    HTML: '网络链接失败！'
                });
            });
        }
    });
})();
</script>




<div class="container">
  <div class="course-wrapper">

    <div class="course-index" role="navigation">
      <header id="open_close_accordion">
        <a href="#">关闭</a>
      </header>

      <div id="accordion" style="display: none">
        <nav aria-label="课程导航">
            



      <?php foreach($arr as $v){?>
  <div class="chapter">

      <h3  aria-label="{$v.ch_name}">
        
          <a href="javascript:void(0)"><?php echo ($v["ch_name"]); ?></a>

      </h3>
	 
    <ul>
		
		<?php foreach($v['know'] as $key=> $val){?>
		
          <li class=" ">
              <a  href="javascript:void(0)">
              <p><?php echo $val; ?></p>
              
              <p class="subtitle"> </p>

            </a>
          </li>
		<?php }?>
		  <!--
          <li class=" graded">
            <a href="/courses/TsinghuaX/00740043_2X/2015_T1/courseware/ba791e1c511d49b8a4dc9072fa56359b/fd4a97e6545b40c2acc7e96597607c72/">
              <p>数组的定义与初始化 </p>
              
              <p class="subtitle">Homework </p>

                  <img src="/xuetang/Public/images/graded.png" alt="Graded Section">
            </a>
          </li>
		-->
    </ul>

  </div>

	<?php
 } ?>
        </nav>
      </div>
    </div>

    <section class="course-content" id="course-content" style="margin:0;padding:5px;">
      

<p style="margin:0;padding:0;">
  <?php if($swf_path){?>          
    <script type="text/javascript" src="/xuetang/Public/js/flexpaper_flash.js"></script>
    <div>
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
    没有找到大纲信息！
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
		//alert(kid);
		location.href="/xuetang/index.php/Home/Studyadout/detail?id="+kid+"&type="+type;
		
	}
</script>


      
    </div>

    
      
  
      

    
        <div class="wrapper-footer">
        <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
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
</body>
  <script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>
  <script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/syllabus.js"></script>
</html>