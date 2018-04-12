<?php
return array(
	//'配置项'=>'配置值'
    DEFAULT_MODULE => Index , //默认模块
    URL_MODEL      => 2,      //URL模式
    // 'LAYOUT_ON'        => true,
    // 'LAYOUT_NAME'      => 'layout',
    // 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.aiermart.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'sales@aiermart.com',//你的邮箱名
    'MAIL_FROM' =>'sales@aiermart.com',//发件人地址
    'MAIL_FROMNAME'=>'AIERMART',//发件人姓名
    'MAIL_PASSWORD' =>'hqwscy53371508',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE // 是否HTML格式邮件
);
