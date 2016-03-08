<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>课程讨论 -- 讨论区</title>
  <script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>
  <script type="text/javascript" src="/xuetang/Public/qt/a"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery_006.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/user_track_norequire.js"></script>
<link rel="icon" type="image/x-icon" href="/xuetang/Public/images/favicon.ico">
<link href="/xuetang/Public/css/lms-style-vendor.css" rel="stylesheet" type="text/css">
<link href="/xuetang/Public/css/lms-style-app.css" rel="stylesheet" type="text/css">
<link href="/xuetang/Public/css/lms-style-vendor.f514c2e00e9f.css" rel="stylesheet" type="text/css">
<link href="/xuetang/Public/css/lms-style-app-extend2.335414e79d8f.css" rel="stylesheet" type="text/css">
<link href="/xuetang/Public/css/lms-style-app.b0fe05287fbf.css" rel="stylesheet" type="text/css">
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
<script type="text/javascript" src="/xuetang/Public/js/jquery.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery_002.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown_002.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/Markdown_003.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery_003.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery_004.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/mustache.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/URI.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/tooltip_manager.js"></script>
<link href="/xuetang/Public/css/jquery.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css">
<link href="/xuetang/Public/css/googlefonts.css" rel="stylesheet" type="text/css">
</head><body class="ltr discussion lang_zh-cn"><div style="visibility: hidden; overflow: hidden; position: absolute; top: 0px; height: 1px; width: auto; padding: 0px; border: 0px none; margin: 0px; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal;"><div id="MathJax_Hidden"></div></div><div style="display: none;" id="MathJax_Message"></div><div id="ieversion"></div>
<div id="ie-banner"></div>

  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>
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
    <a href="http://172.27.0.200/xuetang">
      
  <img src="/xuetang/Public/img/logo.png" alt="Home Page" id="tsinghua-logo" height="60">
  <style>
  .home>header{
    background-image: url("/static/images/tsinghua/tsinghua-pano.jpg");
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
<!--[if lte IE 8]>
<div class="ie-banner" aria-hidden="true"><strong>警告:</strong> 你的浏览器不能完全支持全部功能. 我们强烈建议您使用 <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> 或 <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>.</div>
<![endif]-->
    <div class="content-wrapper" id="content">
<nav class="discussion wrapper-course-material">
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
             <a href="/xuetang/index.php/Home/Discuss/discuss"   class="active">
                 讨论区
             </a>
          </li>

    <li class="right"><a href="/xuetang/index.php/Home/Discuss/addCard" class="new-post-btn" role="button"><span class="icon fa fa-edit new-post-icon"></span>新的帖子</a></li>

    </ol>
  </div>
</nav>
<section class="discussion container" id="discussion-container" data-roles="{&quot;Moderator&quot;: [250823, 461743, 471251, 502002, 526249], &quot;Administrator&quot;: [250823, 461743, 471251, 502002, 526249], &quot;Community TA&quot;: [250823, 259662, 461743, 471251, 502002]}" data-course-id="TsinghuaX/00740043_2X/2015_T1" data-user-info="{&quot;username&quot;: &quot;-u8584u3001u51c9&quot;, &quot;follower_ids&quot;: [], &quot;default_sort_key&quot;: &quot;comments&quot;, &quot;nickname&quot;: &quot;-u8584u3001u51c9&quot;, &quot;downvoted_ids&quot;: [], &quot;subscribed_thread_ids&quot;: [&quot;558a9dd6f605ab69ed0013fa&quot;], &quot;upvoted_ids&quot;: [], &quot;external_id&quot;: &quot;701120&quot;, &quot;id&quot;: &quot;701120&quot;, &quot;subscribed_user_ids&quot;: [], &quot;subscribed_commentable_ids&quot;: []}" data-threads="[{&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-08T03:50:31Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/5da71a2da04e44108a322bdd46f82118&quot;, &quot;id&quot;: &quot;557510eb459f088d4b000586&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u5341\u4e00\u7ae0\u3011\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;69d390f57b9a43e694adc49b4068a49d&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6b22\u8fce\u8ddf\u5e16&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-08T03:50:03Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u5341\u4e00\u7ae0 / \u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 21, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-18T11:18:31Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/3b66381b41d54bd6903491bea6db78c7&quot;, &quot;id&quot;: &quot;5558da70459f0863a1001a5e&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u4e03\u7ae0\u3011\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;ecd7ea86d24e4438bfd199cb38b319fa&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6709\u95ee\u9898\u6b22\u8fce\u8ddf\u5e16\u3002&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-17T18:14:08Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u4e03\u7ae0\u7f16\u7a0b\u4f5c\u4e1a / \u7b2c\u4e03\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 12, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-07T11:15:57Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/8b71df1535944bf8be4d365c21d11293&quot;, &quot;id&quot;: &quot;554345d5f605ab6f470004be&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u516d\u7ae0\uff08\u4e8c\uff09\u3011\u7b2c\u516d\u7ae0\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;0c9ccacd3bab4f0e87345713527087f3&quot;, &quot;abuse_flaggers&quot;: [&quot;326100&quot;], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898\uff0c\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54\uff0c\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/wiki/00740043_2X/error/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988\uff01&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-01T09:22:29Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u516d\u7ae0 / \u7b2c\u516d\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 12, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-31T22:09:23Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/b5de199c6cfd4b31839d4180492b879e&quot;, &quot;id&quot;: &quot;556b8600f605abec63000d3e&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u4e5d\u7ae0\u3011\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;7efafc7b81b34b18b9b6d1229ef5fea2&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6b22\u8fce\u8ddf\u5e16&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-31T22:06:56Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u4e5d\u7ae0 / \u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 9, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-25T10:28:25Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/c512538b2dff4df6a547d07bdaa9269b&quot;, &quot;id&quot;: &quot;5558da4b459f087ffb001a5c&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u516b\u7ae0\u3011\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;bafad850d30840b8bac4239263106b4a&quot;, &quot;abuse_flaggers&quot;: [&quot;33290&quot;], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6709\u95ee\u9898\u6b22\u8fce\u8ddf\u5e16\u3002&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-17T18:13:31Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u516b\u7ae0\u7f16\u7a0b\u4f5c\u4e1a / \u7b2c\u516b\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 6, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-25T06:52:05Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/578355d3f2644d0c85366375793f893d&quot;, &quot;id&quot;: &quot;5562c5fb459f0899e1002fe2&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u4e5d\u7ae0\u3011\u6808\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;80ce18b0b3fd4e7792f777e6bd27263d&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-25T06:49:31Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u4e5d\u7ae0 / \u6808\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 5, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-01T09:24:23Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/a3f2165a40664b32a2705e8080d44dbe&quot;, &quot;id&quot;: &quot;5541b1c4459f08196400d118&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;526249&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u516d\u7ae0\uff08\u4e8c\uff09\u3011\u5bf9\u8c61\u590d\u5236\u4e0e\u79fb\u52a8 \u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;2607cdb3b5ef47aa972b08badf6796f4&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898\uff0c\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54\uff0c\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc \n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/wiki/00740043_2X/error/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988\uff01&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-04-30T04:38:28Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u516d\u7ae0\uff08\u4e8c\uff09 / \u5bf9\u8c61\u590d\u5236\u4e0e\u79fb\u52a8\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;DepinYang&quot;, &quot;comments_count&quot;: 4, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-17T16:52:11Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/56ac6565a15b46edbd6a7d5e678455f8&quot;, &quot;id&quot;: &quot;5558c6eaf605ab6fd6001adc&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u516b\u7ae0\u3011\u865a\u51fd\u6570\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;b8eae148ace649feaaca940f99742b34&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898\uff0c\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54\uff0c\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/wiki/00740043_2X/error/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988\uff01&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-17T16:50:50Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u516b\u7ae0 / \u865a\u51fd\u6570\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 3, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-05-31T22:10:23Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/aa4f80bf17ce451fb11f6623b15f01be&quot;, &quot;id&quot;: &quot;556b85daf605ab3dec000d3d&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u5341\u7ae0\u3011\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;dd9e13e63cbf42e0bbff52a36287a5b0&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6b22\u8fce\u8ddf\u5e16&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-31T22:06:18Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u5341\u7ae0 / \u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 2, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 2, &quot;updated_at&quot;: &quot;2015-05-25T06:52:07Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/c1c69b069456495d932d1a67d933255d&quot;, &quot;id&quot;: &quot;5562c64d459f08f986002fe4&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u4e5d\u7ae0\u3011\u961f\u5217\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;0a13998a8ca3494ea15a40101d71bc30&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-25T06:50:53Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u4e5d\u7ae0 / \u961f\u5217\u7c7b\u6a21\u677f\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 2, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 2, &quot;updated_at&quot;: &quot;2015-05-17T18:15:03Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/7903ea2786a74072bb47bd539fdca3de&quot;, &quot;id&quot;: &quot;5558d9ab459f08067f001a5b&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u4e03\u7ae0\u3011\u5b9e\u9a8c\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;9973feec715b47b6af54cf1b202d9bc8&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898\uff0c\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54\uff0c\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043_2X/2015_T1/wiki/00740043_2X/error/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988\uff01&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-17T18:10:51Z&quot;, &quot;courseware_title&quot;: &quot;\u5b9e\u9a8c\u4e03 / \u7b2c\u4e03\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 2, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-26T02:47:07Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;id&quot;: &quot;558cbd22459f089ec900009f&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u671f\u672b\u8003\u8bd5\u7591\u95ee\u96c6\u4e2d\u8d34\u3011&quot;, &quot;commentable_id&quot;: &quot;i4x-TsinghuaX-00740043_2X-course-2015_T1&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5bf9\u671f\u672b\u8003\u8bd5\uff0c\u8bc1\u4e66\u76f8\u5173\u7684\u7591\u95ee\u8bf7\u56de\u590d\u5728\u4e0b\u9762\uff0c\u8c22\u8c22&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-26T02:46:58Z&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-06-07T15:40:31Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/e94d05c7e21f421f9bf7cc9b4355b48f&quot;, &quot;id&quot;: &quot;55734a29f605ab453400036a&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;526249&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u5341\u4e00\u7ae0\u3011\u5bfc\u5b66 \u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;368213d64f244e409152a418ff7488f8&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \n\n\u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^ \n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc \n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/ \n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-06T19:29:45Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u5341\u4e00\u7ae0 / \u5bfc\u5b66\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;DepinYang&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-05-31T22:10:57Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/c734f24cdbcb42c2b0a5eded40bbf230&quot;, &quot;id&quot;: &quot;556b8570459f08bdaf000da1&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u5341\u7ae0\u3011\u51fd\u6570\u5bf9\u8c61\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;d21c6c5022264e8b92ef6cbcaff703b6&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^ \u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc http://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/ \u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-31T22:04:32Z&quot;, &quot;courseware_title&quot;: &quot;\u51fd\u6570\u5bf9\u8c61 / \u7b2c\u5341\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-05-31T22:11:12Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/3de51f1d760445bfb36757ad8c2d7875&quot;, &quot;id&quot;: &quot;556b810b459f08d88a000d9e&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u5341\u7ae0\u3011\u5bb9\u5668\u7684\u57fa\u672c\u529f\u80fd\u4e0e\u5206\u7c7b&quot;, &quot;commentable_id&quot;: &quot;51927c96d5c74fb8962c90254aef9774&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^ \u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc \n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/ \n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-31T21:45:47Z&quot;, &quot;courseware_title&quot;: &quot;\u5bb9\u5668\u7684\u57fa\u672c\u529f\u80fd\u4e0e\u5206\u7c7b / \u7b2c\u5341\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-05-31T22:11:20Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/450119c3219e4f0da3cad351db0a797b&quot;, &quot;id&quot;: &quot;556a58e8f605ab8690000960&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u4e5d\u7ae0\u3011\u67e5\u627e&quot;, &quot;commentable_id&quot;: &quot;bd650159f6e5454fb292ba5206dcb73e&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^ \u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-31T00:42:16Z&quot;, &quot;courseware_title&quot;: &quot;\u67e5\u627e / \u7b2c\u4e5d\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 1, &quot;updated_at&quot;: &quot;2015-05-31T11:45:22Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/61273d2f645e442a87b74ef619cbc32c&quot;, &quot;id&quot;: &quot;5568763cf605abf3aa0005e6&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;461743&quot;, &quot;title&quot;: &quot;\u3010\u7b2c\u5341\u7ae0\u3011\u5bfc\u5b66\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;47c353d5af8d4ad78499579a33fa48aa&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc \nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/\n\n\u611f\u8c22\u70ed\u5fc3\u540c\u5b66\u7684\u53cd\u9988!&quot;, &quot;read&quot;: false, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-05-29T14:22:52Z&quot;, &quot;courseware_title&quot;: &quot;\u5bfc\u5b66 / \u7b2c\u5341\u7ae0&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;Jie-Shao&quot;, &quot;comments_count&quot;: 1, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-15T04:00:40Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/0777d87a7b554c3a9fb3b13b60fa1f7e&quot;, &quot;id&quot;: &quot;557e4ccf459f088730000aea&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 1, &quot;down_count&quot;: 0, &quot;point&quot;: 1, &quot;up_count&quot;: 1}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u5341\u4e8c\u7ae0\u3011\u7f16\u7a0b\u4f5c\u4e1a\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;fb7d0b66e143487ab4cf2690763e58e0&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u6b22\u8fce\u8ddf\u5e16\u3002&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-15T03:55:59Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u5341\u4e8c\u7ae0 / \u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-15T04:00:45Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/d2a10197332043b5b9228a36d7d84d0f&quot;, &quot;id&quot;: &quot;557e4ca0f605ab4534000aa1&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u5341\u4e8c\u7ae0\u3011\u5c0f\u7ed3\u8ba8\u8bba\u533a&quot;, &quot;commentable_id&quot;: &quot;8ef24535b4ee42db950ff35571f976d2&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-15T03:55:12Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u5341\u4e8c\u7ae0 / \u7b2c12\u7ae0\u5c0f\u7ed3\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}, {&quot;anonymous_to_peers&quot;: false, &quot;unread_comments_count&quot;: 0, &quot;updated_at&quot;: &quot;2015-06-15T04:00:48Z&quot;, &quot;course_id&quot;: &quot;TsinghuaX/00740043_2X/2015_T1&quot;, &quot;courseware_url&quot;: &quot;/courses/TsinghuaX/00740043_2X/2015_T1/jump_to/i4x://TsinghuaX/00740043_2X/discussion/395e28bc78e14358808491b5f0ad9126&quot;, &quot;id&quot;: &quot;557e4c61459f088d4b000b68&quot;, &quot;pinned&quot;: true, &quot;votes&quot;: {&quot;count&quot;: 0, &quot;down_count&quot;: 0, &quot;point&quot;: 0, &quot;up_count&quot;: 0}, &quot;user_id&quot;: &quot;250823&quot;, &quot;title&quot;: &quot;\u3010\u5341\u4e8c\u7ae0\u3011\u5f02\u5e38\u5904\u7406\u7684\u601d\u60f3\u4e0e\u7a0b\u5e8f\u5b9e\u73b0&quot;, &quot;commentable_id&quot;: &quot;aa818ff868c449918b3f4a357338bc1f&quot;, &quot;abuse_flaggers&quot;: [], &quot;closed&quot;: false, &quot;at_position_list&quot;: [], &quot;type&quot;: &quot;thread&quot;, &quot;body&quot;: &quot;\u5927\u5bb6\u4ee5\u540e\u6709\u5173\u4e8e\u672c\u5c0f\u8282\u89c6\u9891\u76f8\u5173\u7684\u95ee\u9898,\u8bf7\u5728\u8fd9\u4e2a\u533a\u57df\u5f00\u8d34\u95ee\u7b54,\u4e5f\u6b22\u8fce\u540c\u5b66\u4eec\u76f8\u4e92\u95ee\u7b54\u3002 \u795d\u540c\u5b66\u4eec\u5b66\u4e60\u6109\u5feb ^_^\n\n\u7ea0\u9519\u4fe1\u606f\u8bf7\u586b\u5728\u8fd9\u91cc\n\nhttp://www.xuetangx.com/courses/TsinghuaX/00740043X/2015_T1/wiki/00740043X/final_video_srt_problem/&quot;, &quot;read&quot;: true, &quot;anonymous&quot;: false, &quot;created_at&quot;: &quot;2015-06-15T03:54:09Z&quot;, &quot;courseware_title&quot;: &quot;\u7b2c\u5341\u4e8c\u7ae0 / \u5f02\u5e38\u5904\u7406\u7684\u601d\u60f3\u4e0e\u7a0b\u5e8f\u5b9e\u73b0\u8ba8\u8bba&quot;, &quot;thread_type&quot;: &quot;discussion&quot;, &quot;username&quot;: &quot;kdd&quot;, &quot;comments_count&quot;: 0, &quot;endorsed&quot;: false}]" data-thread-pages="14" data-content-info="{&quot;557e4c61459f088d4b000b68&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;557510eb459f088d4b000586&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;556b85daf605ab3dec000d3d&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;554345d5f605ab6f470004be&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5562c5fb459f0899e1002fe2&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;558cbd22459f089ec900009f&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5541b1c4459f08196400d118&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;556b810b459f08d88a000d9e&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5558da4b459f087ffb001a5c&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5568763cf605abf3aa0005e6&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;556b8600f605abec63000d3e&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5558da70459f0863a1001a5e&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;556b8570459f08bdaf000da1&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;557e4ccf459f088730000aea&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5558d9ab459f08067f001a5b&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5562c64d459f08f986002fe4&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;55734a29f605ab453400036a&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;556a58e8f605ab8690000960&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;557e4ca0f605ab4534000aa1&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}, &quot;5558c6eaf605ab6fd6001adc&quot;: {&quot;voted&quot;: &quot;&quot;, &quot;subscribed&quot;: false, &quot;ability&quot;: {&quot;can_reply&quot;: true, &quot;editable&quot;: false, &quot;can_openclose&quot;: false, &quot;can_delete&quot;: false, &quot;can_vote&quot;: true}}}" data-sort-preference="comments" data-flag-moderator="False" data-user-cohort-id="None" data-course-settings="{&quot;is_cohorted&quot;: false, &quot;allow_anonymous_to_peers&quot;: false, &quot;allow_anonymous&quot;: false, &quot;category_map&quot;: {&quot;subcategories&quot;: {&quot;u7b2cu4e03u7ae0uff08u4e00uff09&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u5bfc\u5b66\u8ba8\u8bba&quot;, &quot;\u7ee7\u627f\u7684\u57fa\u672c\u6982\u5ff5\u548c\u8bed\u6cd5\u8ba8\u8bba&quot;, &quot;\u5c0f\u7ed3\u8ba8\u8bba&quot;, &quot;\u6d3e\u751f\u7c7b\u7684\u6784\u9020\u548c\u6790\u6784\u8ba8\u8bba&quot;, &quot;\u7ee7\u627f\u65b9\u5f0f\u8ba8\u8bba&quot;, &quot;\u7c7b\u578b\u8f6c\u6362\u8ba8\u8bba&quot;, &quot;\u6d3e\u751f\u7c7b\u6210\u5458\u7684\u6807\u8bc6\u4e0e\u8bbf\u95ee\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u5bfcu5b66u8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;3f9450690f634847a181ab6f04fd6d4f&quot;}, &quot;\u7ee7\u627f\u7684\u57fa\u672c\u6982\u5ff5\u548c\u8bed\u6cd5\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;68ed16fdbed643e9b64dd81370272d63&quot;}, &quot;\u5c0f\u7ed3\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;d4e07047d3a94e3190cb5f1b35ed4d2d&quot;}, &quot;\u6d3e\u751f\u7c7b\u7684\u6784\u9020\u548c\u6790\u6784\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;8b7c7e3091e1476bb02fac212f61a5ca&quot;}, &quot;\u7ee7\u627f\u65b9\u5f0f\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;577fcd2ebb5f4b6fbf0182126f058f98&quot;}, &quot;\u7c7b\u578b\u8f6c\u6362\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;ab83aa92e830475c85cecbb3e0b84c2b&quot;}, &quot;\u6d3e\u751f\u7c7b\u6210\u5458\u7684\u6807\u8bc6\u4e0e\u8bbf\u95ee\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;d662a45bcbc845bca1dd325c97523304&quot;}}}, &quot;\u7b2c\u516b\u7ae0\u7f16\u7a0b\u4f5c\u4e1a&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u516b\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu516bu7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;bafad850d30840b8bac4239263106b4a&quot;}}}, &quot;\u5b9e\u9a8c\u4e03&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u4e03\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu4e03u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;9973feec715b47b6af54cf1b202d9bc8&quot;}}}, &quot;\u7b2c\u5341\u4e00\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;I/O\u6d41\u7684\u6982\u5ff5\u548c\u6d41\u7c7b\u5e93\u7ed3\u6784\u8ba8\u8bba&quot;, &quot;\u5c0f\u7ed3\u8ba8\u8bba&quot;, &quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;\u8f93\u51fa\u6d41\u8ba8\u8bba&quot;, &quot;\u8f93\u5165/\u8f93\u51fa\u6d41&quot;, &quot;\u8f93\u5165\u6d41&quot;, &quot;\u5bfc\u5b66\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;I/Ou6d41u7684u6982u5ff5u548cu6d41u7c7bu5e93u7ed3u6784u8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;3d252d0c48e24609af8df79ec42d2625&quot;}, &quot;\u5c0f\u7ed3\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;74f8a1047f8246c9aeb61ce9f3a1b6e6&quot;}, &quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;69d390f57b9a43e694adc49b4068a49d&quot;}, &quot;\u8f93\u51fa\u6d41\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;490bbc4584d14218885545fe32c5fb3c&quot;}, &quot;\u8f93\u5165/\u8f93\u51fa\u6d41&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;dd0c04a4982741f08356c2a5ffa887bf&quot;}, &quot;\u8f93\u5165\u6d41&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;ce68c136cfec4db9b9bafff1179d5436&quot;}, &quot;\u5bfc\u5b66\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;368213d64f244e409152a418ff7488f8&quot;}}}, &quot;\u5bfc\u5b66&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;47c353d5af8d4ad78499579a33fa48aa&quot;}}}, &quot;\u67e5\u627e&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u4e5d\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu4e5du7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;bd650159f6e5454fb292ba5206dcb73e&quot;}}}, &quot;\u7b2c\u516b\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;override\u4e0efinal\u8ba8\u8bba&quot;, &quot;\u7b2c\u516b\u7ae0&quot;, &quot;\u5bfc\u5b66\u8ba8\u8bba&quot;, &quot;\u865a\u51fd\u6570\u8ba8\u8bba&quot;, &quot;\u7b2c\u516b\u7ae0\u5c0f\u7ed3\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;overrideu4e0efinalu8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;5f219aa61397445996e82617dc535304&quot;}, &quot;\u7b2c\u516b\u7ae0\u5c0f\u7ed3\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;97a71dca3a9d47538e781eec0b987178&quot;}, &quot;\u5bfc\u5b66\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;822da6e4c13245559ae0bf69d58b2a03&quot;}, &quot;\u865a\u51fd\u6570\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;b8eae148ace649feaaca940f99742b34&quot;}, &quot;\u7b2c\u516b\u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;0aa375c0cba9400399564eeecb3c9e76&quot;}}}, &quot;\u7b2c\u516d\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u516d\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu516du7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;634cdc0e827042058660c92a2bc6edb1&quot;}}}, &quot;\u7b2c\u5341\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u5b9e\u9a8c\u5341&quot;, &quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;], &quot;entries&quot;: {&quot;u5b9eu9a8cu5341&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;cb137a445d5d49809724644b771f5a75&quot;}, &quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;dd9e13e63cbf42e0bbff52a36287a5b0&quot;}}}, &quot;\u7b2c\u4e5d\u7ae0\uff08\u4e00\uff09&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7ebf\u6027\u7fa4\u4f53\u8ba8\u8bba&quot;, &quot;\u6570\u7ec4\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u7ebfu6027u7fa4u4f53u8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;31c72306ba7441c8907ac64dfed5f851&quot;}, &quot;\u6570\u7ec4\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;2f9cc02c880e448ca4eb507c16146ff1&quot;}}}, &quot;\u51fd\u6570\u5bf9\u8c61&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;d21c6c5022264e8b92ef6cbcaff703b6&quot;}}}, &quot;\u7b2c\u4e5d\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u4e5d\u7ae0&quot;, &quot;\u6808\u8ba8\u8bba&quot;, &quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;\u961f\u5217\u7c7b\u6a21\u677f\u8ba8\u8bba&quot;, &quot;\u6392\u5e8f\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u7b2cu4e5du7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;4a58a5b9fdd04dd68e5baef54892cf7b&quot;}, &quot;\u6808\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;80ce18b0b3fd4e7792f777e6bd27263d&quot;}, &quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;7efafc7b81b34b18b9b6d1229ef5fea2&quot;}, &quot;\u961f\u5217\u7c7b\u6a21\u677f\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;0a13998a8ca3494ea15a40101d71bc30&quot;}, &quot;\u6392\u5e8f\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;a90da78e04b94f02b4dd54c3bb3b358b&quot;}}}, &quot;\u5b9e\u9a8c\u4e5d&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u5b9e\u9a8c&quot;], &quot;entries&quot;: {&quot;u5b9eu9a8c&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;7ade299bbc954fda9b59a65d21ebac2b&quot;}}}, &quot;\u7b2c\u5341\u4e8c\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;\u5f02\u5e38\u5904\u7406\u7684\u601d\u60f3\u4e0e\u7a0b\u5e8f\u5b9e\u73b0\u8ba8\u8bba&quot;, &quot;\u7b2c12\u7ae0\u5c0f\u7ed3\u8ba8\u8bba&quot;, &quot;\u5bfc\u5b66&quot;, &quot;\u5f02\u5e38\u5904\u7406\u4e2d\u7684\u6784\u9020\u4e0e\u6790\u6784\u8ba8\u8bba&quot;, &quot;\u6807\u51c6\u7a0b\u5e8f\u5e93\u5f02\u5e38\u5904\u7406\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u7f16u7a0bu4f5cu4e1a&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;fb7d0b66e143487ab4cf2690763e58e0&quot;}, &quot;\u5f02\u5e38\u5904\u7406\u7684\u601d\u60f3\u4e0e\u7a0b\u5e8f\u5b9e\u73b0\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;aa818ff868c449918b3f4a357338bc1f&quot;}, &quot;\u7b2c12\u7ae0\u5c0f\u7ed3\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;8ef24535b4ee42db950ff35571f976d2&quot;}, &quot;\u5bfc\u5b66&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;a5e75d91d6854ff8a83c3cf0035e245e&quot;}, &quot;\u5f02\u5e38\u5904\u7406\u4e2d\u7684\u6784\u9020\u4e0e\u6790\u6784\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;3027c381b3bc4cbfa42b6e8238797eb1&quot;}, &quot;\u6807\u51c6\u7a0b\u5e8f\u5e93\u5f02\u5e38\u5904\u7406\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;1c02cf78877a4f95bc5ede95c8b9981f&quot;}}}, &quot;\u5173\u8054\u5bb9\u5668&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;5e2153b7e8f347308f7211db7f81ccf4&quot;}}}, &quot;\u5c0f\u7ed3&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;6dc62a6dc4e64491b65f6c876010dcd8&quot;}}}, &quot;\u8fed\u4ee3\u5668&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;96b67fc6033a4ca6b5eabc417d6824a8&quot;}}}, &quot;\u7b97\u6cd5&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;e03350cc920f49d4aee7d4f2cbd74e5b&quot;}}}, &quot;\u7b2c\u4e03\u7ae0\u7f16\u7a0b\u4f5c\u4e1a&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u4e03\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu4e03u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;ecd7ea86d24e4438bfd199cb38b319fa&quot;}}}, &quot;\u7b2c\u516d\u7ae0\uff08\u4e8c\uff09&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;vector\u5bf9\u8c61\u8ba8\u8bba&quot;, &quot;\u5bf9\u8c61\u590d\u5236\u4e0e\u79fb\u52a8\u8ba8\u8bba&quot;, &quot;\u667a\u80fd\u6307\u9488\u8ba8\u8bba&quot;, &quot;\u6307\u9488\u4e0e\u51fd\u6570\u8ba8\u8bba&quot;, &quot;\u5c0f\u7ed3\u8ba8\u8bba&quot;, &quot;\u52a8\u6001\u5185\u5b58\u5206\u914d\u8ba8\u8bba&quot;, &quot;\u5b57\u7b26\u4e32\u8ba8\u8bba&quot;, &quot;\u6307\u9488\u4e0e\u6570\u7ec4\u8ba8\u8bba&quot;, &quot;\u5bf9\u8c61\u6307\u9488\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;vectoru5bf9u8c61u8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;207d718c8b5d4b61910ae3dcf9bad079&quot;}, &quot;\u5bf9\u8c61\u590d\u5236\u4e0e\u79fb\u52a8\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;2607cdb3b5ef47aa972b08badf6796f4&quot;}, &quot;\u667a\u80fd\u6307\u9488\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;c39073fae6e640b3bbffadd5cf3ef5fe&quot;}, &quot;\u6307\u9488\u4e0e\u51fd\u6570\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;6d2896181c6c4c4bab1ef7701fe7bf49&quot;}, &quot;\u5c0f\u7ed3\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;f7dffa6ab9ea455495ca907e1fe31b49&quot;}, &quot;\u52a8\u6001\u5185\u5b58\u5206\u914d\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;7963c875add74bd0adffbe63b38a5edb&quot;}, &quot;\u5b57\u7b26\u4e32\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;064b023ea46e4f2189747152e1d036fc&quot;}, &quot;\u6307\u9488\u4e0e\u6570\u7ec4\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;bcc287607636415f9bdf88c79d9b0739&quot;}, &quot;\u5bf9\u8c61\u6307\u9488\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;5b1fe12dcddb4d378630e4ea7725809d&quot;}}}, &quot;\u7b2c\u4e00\u7ae0&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u4e60\u9898\u4e00\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u4e60u9898u4e00u8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;f7d67b363c074da48fd3c2cf40e37aae&quot;}}}, &quot;\u987a\u5e8f\u5bb9\u5668&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;12d17d88e2f8438e9d13fae1d6326981&quot;}}}, &quot;\u5bb9\u5668\u7684\u57fa\u672c\u529f\u80fd\u4e0e\u5206\u7c7b&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;51927c96d5c74fb8962c90254aef9774&quot;}}}, &quot;\u5b9e\u9a8c\u516b&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u5b9e\u9a8c&quot;], &quot;entries&quot;: {&quot;u5b9eu9a8c&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;6106c79dd4974c298c559e6fd9eb2f7f&quot;}}}, &quot;\u5b9e\u9a8c\u516d&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u5b9e\u9a8c&quot;], &quot;entries&quot;: {&quot;u5b9eu9a8c&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;d9a9c9b2e8064ff596e9d54a1cbeb110&quot;}}}, &quot;\u7b2c\u516d\u7ae0\uff08\u4e00\uff09&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u57fa\u4e8e\u8303\u56f4\u7684for\u5faa\u73af\u8ba8\u8bba&quot;, &quot;\u5bfc\u5b66\u8ba8\u8bba&quot;, &quot;\u6307\u9488\u7684\u5b9a\u4e49\u548c\u8fd0\u7b97\u8ba8\u8bba&quot;, &quot;\u6570\u7ec4\u7684\u5b9a\u4e49\u4e0e\u521d\u59cb\u5316\u8ba8\u8bba&quot;, &quot;\u5bf9\u8c61\u6570\u7ec4\u8ba8\u8bba&quot;, &quot;\u6570\u7ec4\u4f5c\u4e3a\u51fd\u6570\u53c2\u6570\u8ba8\u8bba&quot;], &quot;entries&quot;: {&quot;u57fau4e8eu8303u56f4u7684foru5faau73afu8ba8u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;6cef458336fc4fa6924437b957514019&quot;}, &quot;\u5bfc\u5b66\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;ee72c014710b45f299af2986af4489ef&quot;}, &quot;\u6307\u9488\u7684\u5b9a\u4e49\u548c\u8fd0\u7b97\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;66f10447e6ae47e6a61722e28a40f4cd&quot;}, &quot;\u6570\u7ec4\u7684\u5b9a\u4e49\u4e0e\u521d\u59cb\u5316\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;de24a69add10475f97c47f8cb2632d86&quot;}, &quot;\u5bf9\u8c61\u6570\u7ec4\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;d847eee81f42402082706da3a465119a&quot;}, &quot;\u6570\u7ec4\u4f5c\u4e3a\u51fd\u6570\u53c2\u6570\u8ba8\u8bba&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;1ba41d3bfbdc4452a71a2b246b018a68&quot;}}}, &quot;\u6cdb\u578b\u7a0b\u5e8f\u8bbe\u8ba1\u53caSTL&quot;: {&quot;subcategories&quot;: {}, &quot;children&quot;: [&quot;\u7b2c\u5341\u7ae0&quot;], &quot;entries&quot;: {&quot;u7b2cu5341u7ae0&quot;: {&quot;sort_key&quot;: null, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;87b44b233d0a4f5a9b97fe4b36c3faea&quot;}}}}, &quot;children&quot;: [&quot;General&quot;, &quot;\u5173\u8054\u5bb9\u5668&quot;, &quot;\u51fd\u6570\u5bf9\u8c61&quot;, &quot;\u5b9e\u9a8c\u4e03&quot;, &quot;\u5b9e\u9a8c\u4e5d&quot;, &quot;\u5b9e\u9a8c\u516b&quot;, &quot;\u5b9e\u9a8c\u516d&quot;, &quot;\u5bb9\u5668\u7684\u57fa\u672c\u529f\u80fd\u4e0e\u5206\u7c7b&quot;, &quot;\u5bfc\u5b66&quot;, &quot;\u5c0f\u7ed3&quot;, &quot;\u67e5\u627e&quot;, &quot;\u6cdb\u578b\u7a0b\u5e8f\u8bbe\u8ba1\u53caSTL&quot;, &quot;\u7b2c\u4e00\u7ae0&quot;, &quot;\u7b2c\u4e03\u7ae0\u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;\u7b2c\u4e03\u7ae0\uff08\u4e00\uff09&quot;, &quot;\u7b2c\u4e5d\u7ae0&quot;, &quot;\u7b2c\u4e5d\u7ae0\uff08\u4e00\uff09&quot;, &quot;\u7b2c\u516b\u7ae0&quot;, &quot;\u7b2c\u516b\u7ae0\u7f16\u7a0b\u4f5c\u4e1a&quot;, &quot;\u7b2c\u516d\u7ae0&quot;, &quot;\u7b2c\u516d\u7ae0\uff08\u4e00\uff09&quot;, &quot;\u7b2c\u516d\u7ae0\uff08\u4e8c\uff09&quot;, &quot;\u7b2c\u5341\u4e00\u7ae0&quot;, &quot;\u7b2c\u5341\u4e8c\u7ae0&quot;, &quot;\u7b2c\u5341\u7ae0&quot;, &quot;\u7b97\u6cd5&quot;, &quot;\u8fed\u4ee3\u5668&quot;, &quot;\u987a\u5e8f\u5bb9\u5668&quot;], &quot;entries&quot;: {&quot;General&quot;: {&quot;sort_key&quot;: &quot;General&quot;, &quot;is_cohorted&quot;: false, &quot;id&quot;: &quot;i4x-TsinghuaX-00740043_2X-course-2015_T1&quot;}}}, &quot;cohorts&quot;: []}">
    <div class="discussion-body">
        <div style="top: 0px; height: 409px;" class="forum-nav">
      <div class="forum-nav-header">
        <a href="javascript:void(0)" class="forum-nav-browse" aria-haspopup="true" onclick="allcard()" id="allcard">
            <i class="icon fa fa-reorder"></i><span class="sr">讨论主题；当前选中的是:</span><span class="forum-nav-browse-current">所有讨论</span><span class="forum-nav-browse-drop-arrow">▾</span>
        </a>
        <form class="forum-nav-search">
            <div class="forum-nav-search-ff-position-fix" style="display:none">
                <label>
                    <span class="sr">搜索</span>
                    <input class="forum-nav-search-input" placeholder="查找所有帖子" type="text" id="key"s>
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

    <div class="forum-nav-thread-list-wrapper" id="rank">
        <div class="forum-nav-refine-bar">
            <label class="forum-nav-filter-main">
                <span class="sr">筛选:</span>
                <select class="forum-nav-filter-main-control" onchange="filterrank(this.value)">
                    <option value="1">显示全部</option>
                    <option value="2">未读</option>
                    <option value="3">未答复</option>
                </select>

            </label><label class="forum-nav-sort">
                <span class="sr">排列:</span>
                <select class="forum-nav-sort-control" onchange="filterrank(this.value)">
                    <option value="4">最近活动排序</option>
                    <option  value="5">最多活动排序</option>
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
        
        <ul class="forum-nav-thread-labels">
		<!--<li class="post-label-pinned"><i class="icon fa fa-thumb-tack"></i>置顶</li> -->
		
		<!--<li class="post-label-by-staff"><i class="icon fa fa-user"></i>由: 教员</li> <li class="post-label-by-community-ta"><i class="icon fa fa-user"></i>由: 社区助教</li> -->
		
		</ul>
      </div><div class="forum-nav-thread-wrapper-2">
        
        <span class="forum-nav-thread-votes-count">+<?php echo ($val["vote"]); ?><span class="sr"> 投票 </span></span>
        
        <span style="display: inline-block;" data-tooltip="<?php echo ($val["reply_num"]); ?> 条新评论" class="forum-nav-thread-comments-count is-unread">
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
				op+="<li data-id='558cbd22459f089ec900009f' class='forum-nav-thread is-unread'>  <a href='/xuetang/index.php/Home/Discuss/cardDetail?id="+v.card_id+"'class='forum-nav-thread-link'><div class='forum-nav-thread-wrapper-0'> <span class='sr'><?php if(v.type +'eq'+ 'question'): ?>问题<?php elseif(v.type +'eq'+ 'discussion'): ?>讨论<?php endif; ?></span><i class='icon fa fa-comments'></i></div><div class='forum-nav-thread-wrapper-1'><span class='forum-nav-thread-title'>"+v.title+"</span><ul class='forum-nav-thread-labels'><!--<li class='post-label-pinned'><i class='icon fa fa-thumb-tack'></i>置顶</li><li class='post-label-by-staff'><i class='icon fa fa-user'></i>由: 教员</li> <li class='post-label-by-community-ta'><i class='icon fa fa-user'></i>由: 社区助教</li> --></ul> </div><div class='forum-nav-thread-wrapper-2'><span class='forum-nav-thread-votes-count'>+"+v.vote+"<span class='sr'> 投票 </span></span><span style='display: inline-block;' data-tooltip='"+v.reply_num+" 条新评论' class='forum-nav-thread-comments-count is-unread'> "+v.reply_num+" <span class='sr'>评论 ("+v.reply_num+" 未读评论)</span></span> </div></a></li>";
				//op+='<option value="'+v.s_id+'" class="s_id">'+v.type+'</option>';
			})
			$("#list").html(op);
			//alert(e);
		}
	})
}


</script>
        <div class="discussion-column">
          <article class="new-post-article" style="display: none">
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
        <a href="#" class="topic-title" data-discussion-id="i4x-TsinghuaX-00740043_2X-course-2015_T1" data-cohorted="false">General</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">关联容器</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="5e2153b7e8f347308f7211db7f81ccf4" data-cohorted="false">第十章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">函数对象</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="d21c6c5022264e8b92ef6cbcaff703b6" data-cohorted="false">第十章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">实验七</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="9973feec715b47b6af54cf1b202d9bc8" data-cohorted="false">第七章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">实验九</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="7ade299bbc954fda9b59a65d21ebac2b" data-cohorted="false">实验</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">实验八</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="6106c79dd4974c298c559e6fd9eb2f7f" data-cohorted="false">实验</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">实验六</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="d9a9c9b2e8064ff596e9d54a1cbeb110" data-cohorted="false">实验</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">容器的基本功能与分类</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="51927c96d5c74fb8962c90254aef9774" data-cohorted="false">第十章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">导学</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="47c353d5af8d4ad78499579a33fa48aa" data-cohorted="false">第十章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">小结</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="6dc62a6dc4e64491b65f6c876010dcd8" data-cohorted="false">第十章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">查找</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="bd650159f6e5454fb292ba5206dcb73e" data-cohorted="false">第九章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">泛型程序设计及STL</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="87b44b233d0a4f5a9b97fe4b36c3faea" data-cohorted="false">第十章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第一章</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="f7d67b363c074da48fd3c2cf40e37aae" data-cohorted="false">习题一讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第七章编程作业</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="ecd7ea86d24e4438bfd199cb38b319fa" data-cohorted="false">第七章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第七章（一）</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="3f9450690f634847a181ab6f04fd6d4f" data-cohorted="false">导学讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="68ed16fdbed643e9b64dd81370272d63" data-cohorted="false">继承的基本概念和语法讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="d4e07047d3a94e3190cb5f1b35ed4d2d" data-cohorted="false">小结讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="8b7c7e3091e1476bb02fac212f61a5ca" data-cohorted="false">派生类的构造和析构讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="577fcd2ebb5f4b6fbf0182126f058f98" data-cohorted="false">继承方式讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="ab83aa92e830475c85cecbb3e0b84c2b" data-cohorted="false">类型转换讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="d662a45bcbc845bca1dd325c97523304" data-cohorted="false">派生类成员的标识与访问讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第九章</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="4a58a5b9fdd04dd68e5baef54892cf7b" data-cohorted="false">第九章</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="80ce18b0b3fd4e7792f777e6bd27263d" data-cohorted="false">栈讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="7efafc7b81b34b18b9b6d1229ef5fea2" data-cohorted="false">编程作业</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="0a13998a8ca3494ea15a40101d71bc30" data-cohorted="false">队列类模板讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="a90da78e04b94f02b4dd54c3bb3b358b" data-cohorted="false">排序讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第九章（一）</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="31c72306ba7441c8907ac64dfed5f851" data-cohorted="false">线性群体讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="2f9cc02c880e448ca4eb507c16146ff1" data-cohorted="false">数组讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第八章</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="5f219aa61397445996e82617dc535304" data-cohorted="false">override与final讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="0aa375c0cba9400399564eeecb3c9e76" data-cohorted="false">第八章</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="822da6e4c13245559ae0bf69d58b2a03" data-cohorted="false">导学讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="b8eae148ace649feaaca940f99742b34" data-cohorted="false">虚函数讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="97a71dca3a9d47538e781eec0b987178" data-cohorted="false">第八章小结讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第八章编程作业</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="bafad850d30840b8bac4239263106b4a" data-cohorted="false">第八章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第六章</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="634cdc0e827042058660c92a2bc6edb1" data-cohorted="false">第六章</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第六章（一）</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="6cef458336fc4fa6924437b957514019" data-cohorted="false">基于范围的for循环讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="ee72c014710b45f299af2986af4489ef" data-cohorted="false">导学讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="66f10447e6ae47e6a61722e28a40f4cd" data-cohorted="false">指针的定义和运算讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="de24a69add10475f97c47f8cb2632d86" data-cohorted="false">数组的定义与初始化讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="d847eee81f42402082706da3a465119a" data-cohorted="false">对象数组讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="1ba41d3bfbdc4452a71a2b246b018a68" data-cohorted="false">数组作为函数参数讨论</a>
    </li>
</ul>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <span class="topic-title">第六章（二）</span>
        <ul role="menu" class="topic-submenu">
    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="207d718c8b5d4b61910ae3dcf9bad079" data-cohorted="false">vector对象讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="2607cdb3b5ef47aa972b08badf6796f4" data-cohorted="false">对象复制与移动讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="c39073fae6e640b3bbffadd5cf3ef5fe" data-cohorted="false">智能指针讨论</a>
    </li>

    <li role="menuitem" class="topic-menu-item">
        <a href="#" class="topic-title" data-discussion-id="6d2896181c6c4c4bab1ef7701fe7bf49" data-cohorted="false">指针与函数讨论</a>
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
          <div class="forum-content">
  <div class="discussion-article blank-slate">
    <section class="home-header">
      <span class="label">讨论空间:</span>
        <h1 class="home-title"><?php echo ($cname); ?></h1>
    </section>

        <span class="label label-settings">
          怎么使用 学堂在线 的讨论功能
        </span>
        <table class="home-helpgrid">
          <tbody><tr class="helpgrid-row helpgrid-row-navigation">
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
                  <input id="email-setting-checkbox" class="email-setting" name="email-notification" type="checkbox">
                  <i class="icon fa fa-envelope"></i>
                </span>
              </label>
              <span class="row-description">勾选此选项，每天一次接收文摘邮件来提醒你关注的最新活动消息发布。</span>
            </td>
          </tr>
        </tbody></table>
     </div>
</div>
        </div>
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
<script type="text/javascript" src="/xuetang/Public/js/jquery.flot.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/codemirror-compressed.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/lms-courseware.js" charset="utf-8"></script>
<script type="text/javascript" src="/xuetang/Public/js/discussion.js" charset="utf-8"></script>
</body></html>