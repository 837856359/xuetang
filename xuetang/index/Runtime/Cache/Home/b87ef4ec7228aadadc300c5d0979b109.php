<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns:wb="http://open.weibo.com/wb">
<meta property="og:image" content="示例图片1" />
<html lang="zh-cn"><!--<![endif]--><head dir="ltr">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>
       主页 | 学堂在线
      </title>
  <script src="/xuetang/Public/htm/v.htm" charset="utf-8"></script><script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>

  <script type="text/javascript" src="/xuetang/Public/swf/a"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery_002.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/user_track_norequire.js"></script>
  <link rel="icon" type="image/x-icon" href="/index.php/static/images/favicon.e0c76d09021e.ico">
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


<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css">
<link href="/xuetang/Public/css/googlefonts.css" rel="stylesheet" type="text/css">
</head><body class="ltr view-dashboard is-authenticated lang_zh-cn"><div id="ieversion"></div>
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
    <a class="nav-skip" href="#my-courses">跳过本内容页</a>

    
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

    












  <header class="global" aria-label="全局导航">
  <nav>

  <h1 class="logo">
    <a href="/index.php/">
      
  <img src="/xuetang/Public/img/logo.png" alt="Home Page" id="tsinghua-logo" height="60">
  <style>
  .home>header{
    background-image: url("/xuetang/Public/img/logo.png");
  }
  </style>

    </a>
  </h1>


    <ol class="left nav-global authenticated">

    </ol>
    <ol class="user">
      <li class="primary">
        <a href="/index.php/home/dashboard" class="user-link">
          <span class="avatar"></span>
          <span class="sr">控制面板： </span><?php echo session('username'); ?>
        </a>
      </li>
      <li class="primary">
        <a href="#" class="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr">更多选择下拉列表</span> ▾</a>
        <ul class="dropdown-menu" aria-label="More Options" role="menu">
          
          <li><a href="/index.php/home/index/loginout" role="menuitem">退出</a></li>
        </ul>
      </li>
    </ol>
  </nav>
</header>



    <div class="content-wrapper" id="content">


<script type="text/template" id="donation-tpl"></script>
  <div class="donation-error-msg" />
<!--<form class="nav-item donate-form">
    <span class="monetary-symbol">$</span>
    <input class="amount" type="text" name="amount" value="5" />
    <button class="btn action-primary action-donate" type="submit" name="Donate"><%- gettext('Donate') %></button>
</form>-->
<form class="payment-form"></form>
<style>
.content-wrapper .submit input[type='submit'] {
        border-radius: 3px;
        border: 1px solid #260035;
        border-bottom: 1px solid #1d000c;
        border-radius: 5px;
        box-shadow: inset 0 1px 0 0 #c04f92;
        color: #fff;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        background-color: #9b3286;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9b3286), color-stop(50%, #630065), color-stop(50%, #450056), color-stop(100%, #4c0058));
        background-image: -webkit-linear-gradient(top, #9b3286 0%, #630065 50%, #450056 50%, #4c0058 100%);
        background-image: linear-gradient(to bottom, #9b3286 0%, #630065 50%, #450056 50%, #4c0058 100%);
        padding: 8px 20px;
        text-align: center;
        text-decoration: none;
        text-shadow: 0 -1px 1px #0f0014;
        font: normal 1.2rem/1.6rem "Source Sans", "STHeiti", "Microsoft YaHei", "SimHei", "Open Sans", Verdana, Geneva, sans-serif, sans-serif;
        letter-spacing: 1px;
        padding: 4px 20px;
        text-transform: uppercase;
        vertical-align: top;
        -webkit-font-smoothing: antialiased;
    }
    
    .content-wrapper .submit input[type="submit"]:hover:not(:disabled),
    .content-wrapper .submit input[type="button"]:hover:not(:disabled),
    .content-wrapper .submit button:hover:not(:disabled),
    .content-wrapper .submit .button:hover:not(:disabled) {
        cursor: pointer;
        background-color: #8e2374;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #8e2374), color-stop(50%, #590053), color-stop(50%, #3e0044), color-stop(100%, #450047));
        background-image: -webkit-linear-gradient(top, #8e2374 0%, #590053 50%, #3e0044 50%, #450047 100%);
        background-image: linear-gradient(to bottom, #8e2374 0%, #590053 50%, #3e0044 50%, #450047 100%);
    }
 .dashboard .my-courses .course .info>hgroup h3 a, .dashboard .my-courses .course .info>hgroup h3 span{width: 500px;}
</style>
<section class="container dashboard" id="dashboard-main">

  <section class="profile-sidebar">
    <header class="profile">
        <h1 class="user-name">
           <?php echo session('username'); ?>
        </h1>
    </header>
    <section class="user-info">
      <ul>
        <li class="info--username">
          <span class="title"><div class="icon name-icon">4</div><div>全名
              <?php if($ls['username']=='' ): ?><span class="data" style="font-size:13px;"><a href="#apply_name_change" rel="leanModal" class="edit-name">编辑真实姓名</a> </span>
              <?php else: ?>
              
                         (<a  href="#apply_name_change" rel="leanModal" class="edit-name">编辑</a>)</span>
           
            <span class="data"><?php echo $ls['username']?></span><?php endif; ?>
          </div>
        </span></li>
        <li class="info--email">
          <span class="title"><div class="icon email-icon">c</div>电子邮件
          </span>
              <span class="data" style="font-size:13px;"><a href="/index.php/home/Dashboard/email">绑定新邮箱</a> </span>
        </li>
        <li class="info--phone">
          <span class="title"><div class="icon">M</div>手机号
              </span>
              <span class="data" style="font-size:13px;"><a href="/index.php/home/Dashboard/phone" target="_blank">绑定手机号</a> </span>
        </li>
        <li class="messagebox">
            <span class="title"><div class="icon">%</div>消息提醒</span>
            <span class="data">
            <span class="message-item clearfix">
              <a href="/index.php/home/dashboard/message?type=mess" style="font-size:13px;">站内消息</a>
            </span>
            <span class="message-item clearfix">
                <a href="/index.php/home/dashboard/message?type=debate" style="font-size:13px;">我的讨论</a>
            </span>

            </span>
        </li>

        <li class="invite--friends">
            <span class="title"><div class="icon">Q</div>邀请好友(<a href="/index.php/home/Dashboard/invitees">详细</a>)</span>
            <ul style="float:left;list-style:none"> 
        
          <li style="float:left"><script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
          <wb:share-button addition="simple" type="button" default_text="我正在【学堂在线】学习，你也快来哦 http://www.xtzx.com/index.php/home/index/Login/Register/uid/<?php echo ($uid); ?>" pic="http%3A%2F%2Fwww.xtzx.com%2Fpublic%2Fimg%2Flogo.png"></wb:share-button></li>
        </ul>
        </li>
        <li class="oauth--bind">
          <span class="title"><div class="icon">+</div>第三方账号</span>
          <span class="data">
              <a style="cursor: pointer;" href="javascript:void(0)" class="weibo bind" id="weibo_bind_button">r</a>
              <a style="cursor: pointer;" href="#unbind_section" class="qq unbind" rel="leanModal" id="qq_unbind_button">p</a>
              <a style="cursor: pointer;" href="javascript:void(0)" class="weixin bind" id="weixin_bind_button">B</a>
          </span>
        </li>
        <li class="controls--account">
          <span class="title"><div class="icon"></div>
                  <a href="/index.php/home/dashboard/password_reset" target="_blank">设置新密码</a>
          </span>
        </li>

        




      </ul>
    </section>

  </section>
  
  <section class="my-courses" id="my-courses">
   <header>
      <h2>我的课程&nbsp;|&nbsp;</h2>
    </header>
    <ul class="message-bar class-collection  ">

      <li class="on"><a href="#started">已关注课程（<?php echo ($count); ?>）</a></li>

    </ul>
      <ul style="display: none;" class="listing-courses">

<?php if(is_array($course)): foreach($course as $key=>$vo): ?><li class="course-item">
  <article class="course">
        <a class="cover">
        <img src="<?php echo ($vo["cimg"]); ?>" alt="">
      </a>
    <section class="info">
      <hgroup>
        <p class="date-block">
        课程开始时间 - <?php echo ($vo["addtime"]); ?>
        </p>
        <h2 class="university">八维学院</h2>
        <h3>
            <a href="/index.php/courses/TsinghuaX/00740043_2X/2015_T1/info"><?php echo ($vo["title"]); ?></a>
        </h3>


      </hgroup>

        <div class="message message-status is-shown">
          <p class="message-copy">
            <span style="font-weight:bold;">课程名称：<?php echo ($vo["cname"]); ?></span><br><br>           
      <?php echo ($vo["intro"]); ?>
          </p>
        </div>

          <a href="/xuetang/index.php/home/detail/detail_list/cid/<?php echo ($vo["cid"]); ?>" class="enter-course">查看课程</a>

  <a class="unenroll" href="/index.php/home/dashboard/del/cid/<?php echo ($vo["cid"]); ?>">退出课程</a>
  </section>
</article>
</li><?php endforeach; endif; ?>


 <script>

           $( document ).ready(function() {

               if("False" == "True"){
                   $( "#unregister_block_course" ).click(function() {
                       $('.disable-look-unregister').click();
                   });
               }
           });
 </script>

      </ul>


    <script type="text/javascript">
        var courseType = new Array(4);
        var hashList = {
          started: 0,
          not_yet_started: 1,
          ended: 2,
          follow: 3,
          wait_refund: 4
        };
        courseType[0] = 1;
        courseType[1] = 0;
        courseType[2] = 0;
        courseType[3] = 0;
        courseType[4] = 0;
        var tab = $('.class-collection').find('li');
        var courseList = $('.listing-courses');
        var emptyCourse = $('.empty-course');
        var emptyFollow = $('.empty-follow');
        if( courseType[0] ){
            courseList.hide().eq(0).show();
            emptyCourse.hide();
            emptyFollow.hide();
        }else{
            emptyCourse.show();
            courseList.hide();
            emptyFollow.hide();
        }

        tab.click(function(){
          $(this).addClass("on").siblings().removeClass();
          if(courseType[tab.index(this)]){
            emptyCourse.hide();
            emptyFollow.hide();
            courseList.hide().eq(tab.index(this)).show();
          }else{
             courseList.hide();
             if(tab.index(this)==3){
                emptyCourse.hide();
                emptyFollow.show();
             }else{
                emptyFollow.hide();
                emptyCourse.show();
             }
          }
        });
        var thisHash = location.hash.substring(1);
        tab.eq(hashList[thisHash]).trigger('click');
        (function(){
          $('.cancel_follow').on('click', function(){
            var $t = $(this);
            $.ajax({
              url: '/change_enrollment',
              type: 'post',
              data:{
                course_id: $t.data('course_id'),
                enrollment_action: 'unfollow'
              }
            }).done(function(){
              location.reload();
            }).fail(function(){
              alert("连接服务器失败")
            })
          })
        })();
    </script>

    <script type="text/javascript">
        function setJiaThis(title, org, pic, url) {
            seUrl = window.location.origin;
            var summary_tsina = "我正在#学堂在线#学习来自 " + org + " 的课程《" + title + "》，来和我一起学习吧！";
            var summary_renren = "我正在学堂在线学习来自 " + org + " 的课程《" + title + "》，来和我一起学习吧！";
            var summary_weixin = "我正在#学堂在线#学习来自 " + org + " 的课程《" + title + "》，来和我一起学习吧！";
            var summary_tqq = "我正在#学堂在线#学习来自 " + org + " 的课程《" + title + "》，来和我一起学习吧！";
            var encodedPic;
            var encodedUrl;
            if (pic.search('^([^:]+:)?//')>=0) {
                encodedPic = encodeURIComponent(pic);
            } else {
                encodedPic = encodeURIComponent(location.protocol+ '//' + location.host + pic);
            }
            if (url.search('^([^:]+:)?//')>=0) {
                encodedUrl = encodeURIComponent(url);
            } else {
                encodedUrl = encodeURIComponent(location.protocol+ '//' + location.host + url);
            }
            title = encodeURIComponent("学堂在线 " + title);
            org = encodeURIComponent(org);
            summary_tsina = encodeURIComponent(summary_tsina);
            summary_renren = encodeURIComponent(summary_renren);
            summary_weixin = encodeURIComponent(summary_weixin);
            summary_tqq = encodeURIComponent(summary_tqq);
            $(".jiathis_button.tsina").attr("href","http://www.jiathis.com/send/?webid=tsina&url="+encodedUrl+"&pic="+encodedPic+"&summary="+summary_tsina);
            $(".jiathis_button.renren").attr("href","http://www.jiathis.com/send/?webid=renren&url="+encodedUrl+"&title="+title+"&pic="+encodedPic+"&summary="+summary_renren);
            $(".jiathis_button.weixin").attr("href","http://www.jiathis.com/send/?webid=weixin&url="+encodedUrl+"&title="+title+"&pic="+encodedPic+"&summary="+summary_weixin);
            $(".jiathis_button.tqq").attr("href","http://www.jiathis.com/send/?webid=tqq&url="+encodedUrl+"&pic="+encodedPic+"&summary="+summary_tqq);
            }
    </script>

  </section>

</section>

<section id="email-settings-modal" class="modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="email-settings-title">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2 id="email-settings-title">
        <span id="email_settings_course_number"></span>的电子邮件设置
        <span class="sr">,
          窗口打开
        </span>
      </h2>
      <hr>
    </header>

    <form id="email_settings_form" method="post">
      <input name="course_id" id="email_settings_course_id" type="hidden">
      <label>接收课程邮件 <input id="receive_emails" name="receive_emails" type="checkbox"></label>
      <div class="submit">
        <input id="submit" value="保存设置" type="submit">
      </div>
    </form>
  </div>
</section>



<section id="password_reset_complete" class="modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="password-reset-email">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2 id="password-reset-email">
        密码重置邮件已发送
        <span class="sr">,
          窗口打开
        </span>
      </h2>
      <hr>
    </header>
    <div>
      <form> <!-- Here for styling reasons -->
        <section>
          <p>一封邮件已经被发送至 None，请通过点击邮件中的链接更改你的密码。</p>
        </section>
      </form>
    </div>
  </div>
</section>

<section id="unbind_section" class="modal  unbind_modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="unbind_dig">
    <button class="unbind_close close-modal">✕ <span class="sr">关闭模式</span></button>

    <header>
      <h2 id="unbind_dig">解绑微博账号<span class="sr">, 模式打开</span></h2>
      <hr>
    </header>
    <div id="unbind_body">
      <form id="unbind_form" class="unbind_form">
        <section>
         <div id="unbind_error" class="modal-form-error"> </div>
          <br>
          <fieldset>
            <div class="input-group">
              <label>新浪微博账号</label>
              <input id="name_field" disabled="disabled" type="text">
              <a href="javascript:void(0)" class="unbind_link" id="weibo">解除绑定</a>
            </div>
          </fieldset>
        </section>
      </form>
    </div>
  </div>
</section>
<section id="change_email" class="modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="change_email_title">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2>
        <span id="change_email_title">更换邮箱</span>
        <span class="sr">,
          窗口打开
        </span>
      </h2>
      <hr>
    </header>
    <div id="change_email_body">
      <form id="change_email_form">
        <div id="change_email_error" class="modal-form-error"> </div>
        <fieldset>
          <div class="input-group">
            <label>请输入新的邮箱地址：</label>
            <input id="new_email_field" type="email">
            <label>请确认您的密码：</label>
            <input id="new_email_password" value="" type="password">
          </div>
          <section>
            <p>在我们处理过程中，将发送确认邮件到你的新邮箱。</p>
          </section>
          <div class="submit">
            <input id="submit_email_change" value="更换邮箱" type="submit">
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</section>
<section id="change_phone" class="modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="unbind_phone">
    <button class="close-modal">✕ <span class="sr">关闭模式</span></button>

    <header>
      <h2 id="unbind_phone">编辑手机号<span class="sr">, 模式打开</span></h2>
      <hr>
    </header>
    <div id="phone_body">
      <form id="phone_form" class="phone_form" action="" method="post">
        <section>
         <div id="phone_error" class="modal-form-error"> </div>
          <br>
          <fieldset>
            <div class="input-group">
              <label>手机号</label>
              <input id="name_field" value="None" disabled="disabled" type="text">
            </div>
            <div class="submit"><input id="submit_phone" value="更换手机号" type="submit"></div>
          </fieldset>
        </section>
      </form>
    </div>
  </div>
</section>






<section id="change_language" class="modal modal-settings-language" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="change_language_title">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2>
        <span id="change_language_title">更改常用语言</span>
        <span class="sr">,
          窗口打开
        </span>
      </h2>
      <hr>
    </header>
    <div id="change_language_body">
      <form action="/i18n/setlang/" method="post" class="settings-language-form" id="settings-form">
      <input name="csrfmiddlewaretoken" value="i4yiNtiBFueGdFvd4dBcuPHPFVJgj7XY" type="hidden">
        <ol class="list-input">
          <li class="field text settings-language-select" id="settings-language-select">
            <label class="label sr" for="settings-language-value">请选择您偏好的语言</label>
            <select class="input select" id="settings-language-value" name="language">
            </select>
          </li>
        </ol>

        <div class="submit">
          <input id="submit-lang" value="保存语言设置" type="submit">
        </div>
      </form>

      <ul class="list list-actions actions-supplemental">
        <li class="list-actions-item">
        没找到您的常用语言？<a class=" action action-volunteer" rel="external" target="_blank" href="https://github.com/edx/edx-platform/blob/master/docs/en_us/developers/source/i18n_translators_guide.rst">欢迎志愿成为一个翻译人员!</a>
        </li>
      </ul>
    </div>
  </div>
</section>


<section id="apply_name_change" class="modal" aria-hidden="true">
 <!--编辑姓名弹出的模板-->
  <div class="inner-wrapper" role="dialog" aria-labelledby="change-name-title">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2 id="change-name-title">
        更改您的姓名
        <span class="sr">,
          窗口打开
        </span>
      </h2>
      <hr>
    </header>
    <div id="change_name_body">
      <form  id="change_name_form">
        
        <div style="display: none;"class="modal-form-error">需要姓名</div>
        <p>为了支持学堂在线 证书的可信度，所有姓名变更都将被记录和保存下来。</p>
        <br>
        <fieldset>
          <div class="input-group">
            <label>输入您的全名（将出现在学堂在线 证书上）：</label>
            <input  type="text" name="username" id="username">
            <label>更改名字原因：</label>
            <textarea  value="" name="text_reason" id="text_reason"></textarea>
          </div>
          <div class="submit">
            <input value="更改我的名字" type="submit" onclick="dian()">
          </div>
        </fieldset>
      </form>
    </div>
  </div>
<!-- //////////-->
</section>

<section id="unenroll-modal" class="modal unenroll-modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="unenrollment-modal-title">
    <button class="close-modal">
      <i class="icon fa fa-remove"></i>
      <span class="sr">
        关闭
      </span>
    </button>

    <header>
      <h2 id="unenrollment-modal-title">
        <span id="track-info"></span>
        <span id="unenroll_course_number"></span>?
        <span id="refund-info"></span>
        <span class="sr">,
          窗口打开
        </span>
      </h2>
      <hr>
    </header>
    <div id="unenroll_error" class="modal-form-error"></div>
    <form id="unenroll_form" method="post" data-remote="true" action="/change_enrollment">
      <input name="course_id" id="unenroll_course_id" type="hidden">
      <input name="enrollment_action" value="unenroll" type="hidden">
      <div class="submit">
        <input name="submit" value="退出课程" type="submit">
      </div>
    </form>
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
                <div class="colophon" style="width:100%;">
                    <nav class="nav-colophon">
                        <ol>
                            <li><a href="/index.php/about#about">关于我们</a></li>
                            <li><a href="/index.php/about#question">常见问题</a></li>
                            <li><a href="/index.php/about#contact">联系我们</a></li>
                        </ol>
                        <div id="weibo-follow-btn"><iframe id="sina-btn" scrolling="no" src="/xuetang/Public/htm/followbutton.htm" frameborder="0"></iframe></div>
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



  
  <link rel="stylesheet" href="/xuetang/Public/css/darktooltip.css">
  <link href="/xuetang/Public/css/modal.css" rel="stylesheet">
  <link href="/xuetang/Public/css/jiathis_xuetang.css" rel="stylesheet">
  <link href="/xuetang/Public/css/ui.css" rel="stylesheet">
  <script src="/xuetang/Public/js/jquery.js"></script>
  <script src="/xuetang/Public/js/ZeroClipboard.js"></script>
  <script src="/xuetang/Public/js/modalPlus.js"></script>

  
    <script type="text/javascript" src="/xuetang/Public/js/dashboard.js" charset="utf-8"></script>
<!--  邮箱绑定  -->
 <script>
    function dian(){
      var username=$('#username').val()
      var text_reason=$('#text_reason').val()
      $.ajax({
        url:"/index.php/Home/Dashboard/add_name",
        data:{"username":username,"text_reason":text_reason},
        type:"post",
        success:function(e){
          if(e=='200'){
              alert('更改成功');location.href='/index.php/Home/Dashboard/index'
          }else{
              alert('更改失败');
          }

        }
      })
    }
    </script>  <script type="text/javascript">
    $(document).ready(function() {
      edx.dashboard.legacy.init({
        dashboard: "/dashboard",
        signInUser: "/login",
        passwordReset: "/password_reset/",
        changeEmail: "/change_email",
        changeEmailSettings: "/change_email_settings",
        changeName: "/change_name",
        verifyToggleBannerFailedOff: "/verify_student/toggle_failed_banner_off",
      });
    });

  (function() {
    var oauth ={
      "weibo":"微博",
      "qq":"qq",
      "weixin":"微信"
    };
    var newWindow = null;
    var makeNewWindow = function(url) {
        if (!newWindow || newWindow.closed) {
            var width = 800;
            var height = 500;
            var left = parseInt((screen.availWidth/2) -15 - (width/2));//屏幕居中
            var top = parseInt((screen.availHeight/2) - 5 - (height/2));
            var windowFeatures = "width=" + width + ",height=" + height + ",resizable=no,left=" + left + ",top=" + top +',menubar=no,toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=yes';
            newWindow = window.open(url, "subWind", windowFeatures);
        } else {
            // window is already open, so bring it to the front
            newWindow.focus();
        }
    }
    var oauth_id = "";
    var oauth_inner = $.parseJSON('{"qq": {"bind": true, "name": "    u91cau03c9u6000i"}, "weibo": {"bind": false, "name": ""}, "renren": {"bind": false, "name": ""}, "douban-oauth2": {"bind": false, "name": ""}, "weixin": {"bind": false, "name": ""}, "baidu": {"bind": false, "name": ""}}');
    var can_bind = false;
    $(".bind").each(function(){
      for(var o in oauth){
        if ($(this).hasClass(o)){
          oauth_id = o;
        }
      }
      var oauthTip1 ={
        opacity: 0.9, //0 – 1
        content: '绑定'+oauth[oauth_id]+'账号', //could be html or text
        size: 'small', //small, medium, large
        gravity: 'south', //south, west, north, east
        offsetX: 0,
        offsetY: -5,
        theme: 'dark', //dark, light
        trigger: 'hover', //hover, click. When null the tooltip always show up
        animation: 'none', //none, flipIn, fadeIn
        confirm: false, //yes no
        yes: 'Yes',
        no: 'No',
        finalMessage: '', //A message that appears at the end of the action for the confirm
        finalMessageDuration: 2, // Duration of the final message in m
        onYes: function() {},
        onNo: function() {}
      }
      $(this).darkTooltip(oauthTip1);
      $(this).click(function(){
        for(var o in oauth){
          if ($(this).hasClass(o)){
            var url = "/bind/"+o+"/";
            makeNewWindow(url);
          }
        }
      })
    })



    var unBind  = function(oName){
      if(can_bind){
        $('#unbind_dig').html('解绑'+oauth[oName]+'账号<span class="sr">, 模式打开</span>');
        $('#unbind_form').html('<section><p>解绑后，将无法使用用户名（'+oauth[oName]+'账号）登录！</p><br/><div class="submit"><input type="submit" id="submit_unbind" value="继续解绑'+oauth[oName]+'账号"/></div><div class="submit"><input type="button" id="cancel" class="unbind_close" value="保留账号"/></div></fieldset></section>');
        $("#cancel").click(function(){
          $("#unbind_section").hide();
          $("#lean_overlay").hide();
        })
        $("#submit_unbind").click(function(){
            $.post('/unbind/'+oName+'/',
                     {},
                     function(data) {
                       if (data.success) {
                            $("#unbind_section").hide();
                            $("#lean_overlay").hide();
                            bindSuccess(oauth[oName]+"解绑成功");
                            setTimeout('window.location.reload()', 1000);


                       } else {
                         $("#unbind_error").html("发生未知错误，请稍后重试").stop().css("display", "block");
                       }
                     });
            return false;
        });
      }else{
        $('#unbind_error').html('无法解绑，请绑定邮箱或其他第三方账号后重试。'
        ).stop().css("display", "block");
      }

    }
    $(".unbind").each(function(){
      for(var o in oauth){
          if ($(this).hasClass(o)){
            oauth_id = o;
          }
        }
      var oauthTip ={
        opacity: 0.9, //0 – 1
        content: '编辑'+oauth[oauth_id]+'账号', //could be html or text
        size: 'small', //small, medium, large
        gravity: 'south', //south, west, north, east
        offsetX: 0,
        offsetY: -5,
        theme: 'dark', //dark, light
        trigger: 'hover', //hover, click. When null the tooltip always show up
        animation: 'none', //none, flipIn, fadeIn
        confirm: false, //yes no
        yes: 'Yes',
        no: 'No',
        finalMessage: '', //A message that appears at the end of the action for the confirm
        finalMessageDuration: 2, // Duration of the final message in m
        onYes: function() {},
        onNo: function() {}
      }
      $(this).darkTooltip(oauthTip);
      $(this).click(function(){
        for(var o in oauth){
          if ($(this).hasClass(o)){
            oauth_id = o;
          }
        }
        $('#unbind_dig').html('编辑'+oauth[oauth_id]+'账号<span class="sr">, 模式打开</span>');
        $('#unbind_form').html('<section><div id="unbind_error" class="modal-form-error"> </div><br/><fieldset><div class="input-group" ><label>'+oauth[oauth_id]+'账号</label><input id="name_field" value="'+oauth_inner[oauth_id]['name']+'" type="text"  disabled="disabled" /><a href="javascript:void(0)" class="unbind_link" id="'+oauth_id+'">解除绑定</a></div></fieldset></section>');
        $(".unbind_link").click(function(){
          unBind(oauth_id);
        });
      })
    })
    $(".edit-phone").click(function(){
      $('#unbind_phone').html('编辑手机号<span class="sr">, 模式打开</span>');
        $('#phone_form').html('<section><div id="phone_error" class="modal-form-error"> </div><br/><fieldset><div class="input-group" ><label>手机号</label><input id="name_field" value="None" type="text"  disabled="disabled" /></div><div class="submit"><input type="submit" id="submit_phone" value="更换手机号"/></div></fieldset></section>');
      $('#phone_error').css("display", "none");
      $("#submit_phone").click(function(){
          $('#unbind_phone').html('用户身份验证<span class="sr">, 模式打开</span>');
          $('#phone_form').html('<section><div id="phone_error" class="modal-form-error"> </div><br/><fieldset><div class="input-group" ><label>    释ω怀i登录中，为确保账号安全请输入登录密码！</label><input id="verify_field" placeholder="登录密码" type="text" /></div><div class="submit"><input type="submit" id="submit_verify" value="确认身份"/></div></fieldset></section>');
            $("#submit_verify").click(function(e){
              e.preventDefault();
              var veri =  $('#verify_field').val();
              if(veri){
                $.post("/change_phone/",{"password":veri},function(data){
                  if(data.success){
                    location.href = data.messages.change_phone_url;
                  }else{
                    $('#phone_error').html('密码错误。'
                       ).stop().css("display", "block");
                  }
                })
              }else{
                $('#phone_error').html('请输入密码。'
                   ).stop().css("display", "block");
              }
              return false;
            });
      })
    })

    var wait=60;
    function time(o) {
            if (wait == 0) {
                o.css({
                  "color":"#f67b31",
                  "cursor":"pointer"                 });
                o.text("再发一封");
                wait = 60;
            } else {
                o.css({
                  "color":"#c1bebe",
                  "cursor":"text",
                  "text-decoration":"none"
                  });
                o.text(  wait + "秒后可以重新发送");
                wait--;
                setTimeout(function() {
                    time(o)
                },
                1000)
            }
        }
    $('#send_activemail_button').mouseenter(function(e) {
        if(wait==60){
            $(this).css("text-decoration","underline");
        }
    });
    $('#send_activemail_button').mouseleave(function(e) {
            $(this).css("text-decoration","none");
    });
    $('#send_activemail_button').click(function(event) {
        if(wait == 60){
              $.post('/reactivation_email',
                       {"email"  : 'None'},
                       function(data){
                       });
          time($(this));
        }
    });
  })(this);

  function bindSuccess(htmlInner){
    $.modalPlus({
      type: 'hint',
      HTML: htmlInner
    });
  }
  $(function(){
    accessible_modal(".edit-phone", "#change_phone .close-modal", "#change_phone", "#dashboard-main");
    accessible_modal(".unbind", "#unbind_section .unbind_close", "#unbind_section", "#dashboard-main");

    $(".unenroll").each(function(index){
      $(this).attr("id", "email-settings-" + index);
      // a bit of a hack, but gets the unique selector for the modal trigger
      var trigger = "#" + $(this).attr("id");
      accessible_modal(trigger, "#unenroll-modal .close-modal", "#unenroll-modal", "#dashboard-main");
    });
  });
    ZeroClipboard.setDefaults({
      moviePath: "/static/js/plugin/jquery/ZeroClipboard/ZeroClipboard.74a4d061ace5.swf"
    });
    var tip={
      opacity: 0.9, //0 – 1
      content: '复制成功！', //could be html or text
      size: 'small', //small, medium, large
      gravity: 'south', //south, west, north, east
      offsetX: 0,
      offsetY: -5,
      theme: 'dark', //dark, light
      trigger: '', //hover, click. When null the tooltip always show up
      animation: 'none', //none, flipIn, fadeIn
      confirm: false, //yes no
      yes: 'Yes',
      no: 'No',
      finalMessage: '', //A message that appears at the end of the action for the confirm
      finalMessageDuration: 2, // Duration of the final message in m
      onYes: function() {},
      onNo: function() {}
    }
    $(function() {
        var clip=new ZeroClipboard($("#copy-button").add("#copy-button2"));
        clip.on('complete',function(){
          $(this).darkTooltip(tip);
          setTimeout(function(){
            $(".dark-tooltip").animate({opacity:0});
          }, 1000);
        });
        clip.on( 'dataRequested', function (client, args) {
          clip.setText("/index.php/home/index/register?uid=" + 705980);
        });
    });
  </script><!-- <ins style="opacity: 0.9;" class="dark-tooltip dark small south"><div>绑定微博账号</div><div class="tip"></div></ins><ins style="opacity: 0.9;" class="dark-tooltip dark small south"><div>绑定微信账号</div><div class="tip"></div></ins><ins style="opacity: 0.9;" class="dark-tooltip dark small south"><div>编辑qq账号</div><div class="tip"></div></ins> -->


  <div style="display:none;"><script type="text/javascript" src="/xuetang/Public/js/analyse.js"></script><script src="/xuetang/Public/js/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=32d56203d9a79a16a032531755dad60e" target="_blank"><img src="/xuetang/Public/img/21.gif" border="0" width="20" height="20"></a></div>




<div id="lean_overlay"></div><div id="reader-feedback" class="sr" style="display:none" aria-hidden="false" aria-atomic="true" aria-live="assertive"></div><div style="position: absolute; left: -9999px; top: -9999px; width: 15px; height: 15px; z-index: 9999;" data-clipboard-ready="true" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/static/js/plugin/jquery/ZeroClipboard/ZeroClipboard.74a4d061ace5.swf?nocache=1434886274978">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="">         <embed src="/xuetang/Public/swf/ZeroClipboard.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="" scale="exactfit" width="100%" height="100%">                </object></div></body></html>