<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <head dir="ltr"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
  <title> <?php echo ($title[0]['know']); ?></title>

  <script charset="utf-8" src="/xuetang/Public/js/v.js"></script><script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>

  <script type="text/javascript" src="/xuetang/Public/qt/saved_resource"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery.min.397754ba49e9.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/user_track_norequire.5b8bee3635cf.js"></script>
    <link href="/xuetang/Public/css/lms-style-vendor.f514c2e00e9f.css" rel="stylesheet" type="text/css">
    <link href="/xuetang/Public/css/lms-style-app.b0fe05287fbf.css" rel="stylesheet" type="text/css">
    <link href="/xuetang/Public/css/lms-style-app-extend1.e731b6277fb0.css" rel="stylesheet" type="text/css">
    <link href="/xuetang/Public/css/lms-style-app-extend2.335414e79d8f.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/xuetang/Public/js/lms-main_vendor.c1170b9488ac.js" charset="utf-8"></script>
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
  <script type="text/javascript" src="/xuetang/Public/js/require-config-lms.da42d4d4e28b.js"></script>
    <link href="/xuetang/Public/css/lms-style-course-vendor.d65f103108eb.css" rel="stylesheet" type="text/css">
    <link href="/xuetang/Public/css/lms-style-course.d4e49e6a8147.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/xuetang/Public/js/split.1e256a271150.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.truncate.b81308a54759.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.ajaxfileupload.27e7569a4c1e.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.Converter.33f02cbe2eb8.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.Sanitizer.253c591d1f95.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.Editor.b8b792fb3f3a.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.autocomplete.3bd10d7510d2.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.timeago.9605aaf0437d.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.timeago.locale.b54a9c010cd6.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/mustache.2aa68bb79181.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/URI.min.03b89112e46e.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/backbone-min.752b6162850f.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/tooltip_manager.0df6414b1730.js"></script>
<link href="/xuetang/Public/css/jquery.autocomplete.09a0b34739a2.css" rel="stylesheet" type="text/css">
<script src="/xuetang/Public/js/html5media.min.js"></script>
<link rel="stylesheet" href="http://www.xuetangx.com/static/css/tsinghua/vendor/tu-identity.52868ed7ae41.css">
<link href="/xuetang/Public/css/googlefonts.css "rel="stylesheet" type="text/css">
</head>
<body class="ltr courseware  lang_zh-cn"><div style="visibility: hidden; overflow: hidden; position: absolute; top: 0px; height: 1px; width: auto; padding: 0px; border: 0px; margin: 0px; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal;"><div id="MathJax_Hidden"></div></div><div id="MathJax_Message" style="display: none;"></div><div id="ieversion"></div>
<div id="ie-banner"></div>

  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>
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
  <header class="global slim" aria-label="全局导航">
  <nav>

  <h1 class="logo">
    <a href="http://172.27.0.200/xuetang">
      
  <img src="/xuetang/Public/img/logo.png" height="60" alt="Home Page" id="tsinghua-logo">
  <style>
  .home>header{
    background-image: url("/xuetang/Public/img/logo.jpg");
  }
  </style>

    </a>
  </h1>
        <h2>
            <span class="provider">课程名称：</span><?php echo ($cname); ?>
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
          <span class="sr">控制面板： </span> <?php echo (session('username')); ?>
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
    <div class="content-wrapper" id="content">
<nav class="courseware wrapper-course-material">
  <div class="course-material">
        <ol class="course-tabs">
        
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/syllabus">
             教学大纲
             </a>
          </li>
          <li style="background:000;">
             <a href="/xuetang/index.php/Home/Courseware/ware"  class="active">
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
        <a href="http://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/courseware/8d1fd477f469492ba2c1297e6ace6f5d/1d1a38e6e4de487e8010376dd9265988/#">关闭</a>
      </header>

      <div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">

       <nav aria-label="课程导航">
                 
	 <?php foreach($arr as $v) { ?>
  <div class="chapter">

      <h3  aria-label="<?php echo ($v["ch_name"]); ?>">
		<a href="#"><?php echo ($v["ch_name"]); ?></a>
      </h3>
    <ul>
		<?php foreach($v['know'] as $key=>$val){?>
          <li class=" ">
            <a  href="javascript:void(0)"  onclick="tiao(<?php echo $key; ?>)">
              <p><?php echo $val; ?></p>
              
              <p class="subtitle"> </p>

            </a>
          </li>
		<?php }?>
    </ul>
  </div>

	<?php
 } ?>
       </nav>
      </div>
    </div>

    <section class="course-content" id="course-content">
      <div class="xblock xblock-student_view xmodule_display xmodule_SequenceModule xblock-initialized" data-runtime-class="LmsRuntime" data-init="XBlockToXModuleShim" data-block-type="sequential" data-request-token="017d99101b1c11e5bbb500163e000237" data-runtime-version="1" data-usage-id="i4x:;_;_TsinghuaX;_00740043_2X;_sequential;_1d1a38e6e4de487e8010376dd9265988" data-type="Sequence" data-course-id="TsinghuaX/00740043_2X/2015_T1">
    

<div id="main" class="sequence" data-id="i4x://TsinghuaX/00740043_2X/sequential/1d1a38e6e4de487e8010376dd9265988" data-position="1" data-ajax-url="/courses/TsinghuaX/00740043_2X/2015_T1/xblock/i4x:;_;_TsinghuaX;_00740043_2X;_sequential;_1d1a38e6e4de487e8010376dd9265988/handler/xmodule_handler">
  <nav class="sequence-nav">
    <ul class="sequence-nav-buttons">
      <li class="prev"><a role="button" href="http://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/courseware/8d1fd477f469492ba2c1297e6ace6f5d/1d1a38e6e4de487e8010376dd9265988/#"  aria-hidden="true">上一个</a></li>
    </ul>

    <div class="sequence-list-wrapper" >
      <ol role="tablist" aria-label="章节导航" id="sequence-list">
        <li>
			<a class="seq_problem inactive progress-none"  data-element="2" href="#" title="<?php echo ($title[0]['know']); ?>课后习题" data-page-title="<?php echo ($title[0]['know']); ?>课后习题" aria-controls="seq_contents_1" id="tab_1" tabindex="0" role="tab" >
            <p style="margin-top:15px"><?php echo ($title[0]['know']); ?></p>
			</a>
        </li>
		

        <li>
			<a href="#" class="seq_problem inactive progress-none" data-element="2" title="<?php echo ($title[0]['know']); ?>课后习题" data-page-title="<?php echo ($title[0]['know']); ?>课后习题" aria-controls="seq_contents_1" id="tab_1" tabindex="0" role="tab">
            <p style="margin-top:15px"><?php echo ($title[0]['know']); ?>课后习题</p>
			</a>
        </li>



        <li>
        <a class="seq_other inactive progress-0" data-id="i4x://TsinghuaX/00740043_2X/vertical/815928a16e1c4b6faf696b5ed416bec9" data-element="3" href="javascript:void(0);" title="<?php echo ($title[0]['know']); ?>讨论区" data-page-title="<?php echo ($title[0]['know']); ?>讨论区" aria-controls="seq_contents_2" id="tab_2" tabindex="0" role="tab">
        <p><?php echo ($title[0]['know']); ?>讨论区</p>
        </a>
        </li>
      </ol>
    <div class="left-shadow" style="opacity: 0;"></div><div class="right-shadow" style="opacity: 0;"></div></div>

    <ul class="sequence-nav-buttons">
      <li class="next"><a role="button" href="#" aria-hidden="false">下一个</a></li>
    </ul>
  </nav>

<center>
    <video id='k_video' src="/xuetang/Public/qt/<?php echo ($title[0][video_path]); ?>" width="800" height="400" controls preload></video>
  

  <nav class="sequence-bottom">
    <ul aria-label="章节导航" class="sequence-nav-buttons">
      <!--<li class="prev">
	  <a role="button" href="http://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/courseware/8d1fd477f469492ba2c1297e6ace6f5d/1d1a38e6e4de487e8010376dd9265988/#" class="disabled" aria-hidden="true">上一个</a>
      </li>-->  
      <a role="button" href="#" class="disabled" >
      <li class="prev">
           <p style="margin-top:13px; margin-left:13px;font-size:10px" aria-hidden="true">上一个</p>
      </li>
      </a>
      
   <a role="button" href="#" >
      <li class="next">
           <p style="margin-top:13px; margin-right:13px;font-size:10px" aria-hidden="false">下一个</p>
      </li>
        <span id="dianjiliang" style='float:right;margin-top:13px; font-size:25px;height:30px;line-height:30px;color:#333333;font-weight:bold'><?php echo ($num); ?></span><span style='width:150px;float:right;margin-top:13px; margin-right:0px;margin-left:200px;font-size:20px;height:30px;line-height:30px;color:#99999;'>当前点击量为：</span>
     </a>  
    </ul>
  </nav>
</div>



<script type="text/javascript">
  var sequenceNav;
  $(document).ready(function() {
    sequenceNav = new SequenceNav($('.sequence-nav'));
  });

 
 function question(kid){
		
		
		location.href="/xuetang/index.php/Home/Courseware/question?kid="+kid;
 }
</script>

</div>

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
    <hr aria-hidden="true">
    <div class="actions">
        <button class="dismiss ok-button">是的</button>
        <button class="dismiss cancel-button" data-dismiss="leanModal">取消</button>
    </div>
  </div>
  <a href="#" rel="leanModal" id="confirm_open_button" style="display:none">打开</a>
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
                            <script type="text/javascript" charset="utf-8">
                                if ("http:" == document.location.protocol) {
                                    document.getElementById('weibo-follow-btn').innerHTML = '<wb:follow-button uid="5327955295" type="red_3" width="100%" height="24" ></wb:follow-button>';
                                }
                        </script>
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
                        <div id="weibo-follow-btn"> 

                        </div>
                    </nav>
                </div>
            </footer>
            <script type="text/javascript" charset="utf-8">
            if ("http:" == document.location.protocol) {
                document.getElementById('weibo-follow-btn').innerHTML = '<iframe id="sina-btn" frameborder="0" scrolling="no" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&style=3&uid=5327955295&width=100%&height=24&language=zh_cn"></iframe>';
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
    <script type="text/javascript" src="/xuetang/Public/js/lms-application.6719ae86e047.js" charset="utf-8"></script>
    <script type="text/javascript" src="/xuetang/Public/js/lms-modules.1a55d4e40fce.js" charset="utf-8"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery.scrollTo-1.4.2-min.4aa3e2dfa312.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery.flot.d3d45ff0c6a8.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/codemirror-compressed.dd4b74f7c5fe.js"></script>
    <script type="text/javascript" src="/xuetang/Public/js/lms-courseware.45ce328973cd.js" charset="utf-8"></script>
    <script type="text/javascript" src="/xuetang/Public/js/discussion.eecb75d6f6d6.js" charset="utf-8"></script>

<!-- This must appear after all mathjax-config blocks, so it is after the imports from the other templates.
     It can't be run through static.url because MathJax uses crazy url introspection to do lazy loading of
     MathJax extension libraries -->
  <script type="text/javascript">
	  //跳转 传值
	function tiao(id){
		
		var kid=id;
		$.ajax({
			url:'get_video_url',
			type:'post',
			data:{'k_id':kid},
			dataType:'json',
			success:function(e){
				if(e['video_path'] == ''){
					$("#k_video").attr('src','');
					alert('没有找到视频文件！');
				}else{
					$("#k_video").attr('src',e['video_path']);
          $("#dianjiliang").text(e['num']);
				}
			}
		})
		//$("#k_video").attr("src","/xuetang/Public/video/a.mp4");
		
	}
    </script>
</body>
</html>