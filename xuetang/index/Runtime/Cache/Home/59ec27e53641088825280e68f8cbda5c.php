<?php if (!defined('THINK_PATH')) exit(); if($type == 2): ?><!--大纲显示-->
<?php if(is_array($arr)): foreach($arr as $key=>$val): ?><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="400" height="300" id="flashvars" align="center">
<param name="allowscriptAccess" value="sameDomain" />
<param name="movie" value="/xuetang/Public/swf/a.swf?xname=xvalue&xname2=xvalue2" />
<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />
<embed quality="high" bgcolor="#ffffff" width="400" src="/xuetang/Public/swf/a.swf?xname=xvalue&xname2=xvalue2" height="300" allowScriptAccess="never" allowNetworking="internal" autostart="0" name="flashvars" align="center" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>


		<?php echo ($val["kid"]); ?>
		<?php echo ($val["dagang"]); endforeach; endif; ?>
<?php elseif($type == 3): ?>
<!--ppt显示-->
<?php if(is_array($arr)): foreach($arr as $key=>$val): ?><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="400" height="300" id="flashvars" align="center">

<param name="allowscriptAccess" value="sameDomain" />

<param name="movie" value="/xuetang/Public/swf/ltqq1.swf" />

<param name="quality" value="high" />

<param name="bgcolor" value="#ffffff" />

<embed quality="high" bgcolor="#ffffff" width="1400" src="/xuetang/Public/swf/ltqq1.swf" height="900" allowScriptAccess="never" allowNetworking="internal" autostart="0" name="flashvars" align="center" type="application/x-shockwave-flash" pluginspage="http://www.xuetang.com/Public/swf/a_zzz_" />
</object><?php endforeach; endif; ?>
<?php else: ?>
<!--试题显示-->
<?php if(is_array($arr)): foreach($arr as $key=>$val): echo ($val["kid"]); ?>
		<?php echo ($val["ceshi"]); endforeach; endif; endif; ?>