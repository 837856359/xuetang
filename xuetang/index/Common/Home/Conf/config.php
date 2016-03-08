<?php
return array(
//数据库配置信息
'URL_MODEL' =>2,       // URL访问模式,可选参数0、1、2、3,代表以下四
'DB_TYPE'   => 'mysql',// 数据库类型
'DB_HOST'   => '172.27.0.201',
'DB_NAME'   => 'xuetang', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => '83bw!03$12', // 密码
'DB_PORT'   => 3306, // 端口
//'DB_PREFIX' => 'snow_', // 数据库表前缀
'DB_CHARSET'=> 'utf8', // 字符集
'HTML_FILE_SUFFIX'     => '.html',
"WB_AKEY" => '1083169112',
"WB_SKEY" =>'cc84b3845a666200614fd95e425f5207',
"WB_CALLBACK_URL" => 'http://xt.lltoy.com/index.php/Home/Index/callback',

// 配置邮件发送服务器
'MAIL_HOST' =>'smtp.126.com',//smtp服务器的名称
'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
'MAIL_USERNAME' =>'liting5114@126.com',//你的邮箱名
'MAIL_FROM' =>'liting5114@126.com',//发件人地址
'MAIL_FROMNAME'=>'邀请码',//发件人姓名
'MAIL_PASSWORD' =>'13892442303',//邮箱密码
'MAIL_CHARSET' =>'utf-8',//设置邮件编码
'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
 'SHOW_PAGE_TRACE' =>true,    
);
