<?php /* Smarty version Smarty-3.1.17, created on 2014-06-29 09:10:39
         compiled from "D:\wamp\www\web\shop\view\admin\public\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29962536c6e9599dd10-61833045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c8b108159185577dc95baec9501fb75197de4a' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\public\\admin.tpl',
      1 => 1403512623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29962536c6e9599dd10-61833045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536c6e95a0ce08_96610867',
  'variables' => 
  array (
    'oneManage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536c6e95a0ce08_96610867')) {function content_536c6e95a0ce08_96610867($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<script type="text/javascript" src="view/admin/js/iframe.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
</head>
<body>
<div id="header">
	<p>您好，<?php echo $_smarty_tpl->tpl_vars['oneManage']->value['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['oneManage']->value['level'];?>
] [<a href="?a=admin">去首页</a>] [<a href="?a=admin&m=loginOut">退出</a>]</p>
	<ul>
		<li class="first" onclick="javascript:channel(0)"><a href="#">起始页</a></li>
		<li><a href="#" onclick="javascript:channel(1)">商品</a></li>
		<li><a href="#" onclick="javascript:channel(2)">订单</a></li>
		<li><a href="#" onclick="javascript:channel(3)">会员</a></li>
		<li><a href="#" onclick="javascript:channel(4)">系统</a></li>
	</ul>
</div>
<div id="sidebar">
	<dl style="display:block">
		<dt>起始页</dt>
		<dd><a href="?a=admin&m=main" target="in">系统信息</a></dd>
		<dd><a href="#">网站公告</a></dd>
		<dd><a href="#">首页轮播器</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>商品</dt>
		<dd><a href="?a=nav" target="in">导航条列表</a></dd>
		<dd><a href="?a=goods" target="in">商品列表</a></dd>
		<dd><a href="?a=brand" target="in">品牌列表</a></dd>
		<dd><a href="?a=attr" target="in">自定义属性列表</a></dd>
		<dd><a href="?a=price" target="in">价格区间列表</a></dd>
		<dd><a href="?a=service" target="in">售后服务列表</a></dd>
		<dd><a href="?a=commend" target="in">评论列表</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>订单</dt>
		<dd><a href="?a=order" target="in">订单列表</a></dd>
		<dd><a href="?a=delivery" target="in">物流配送列表</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>会员</dt>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>系统</dt>
		<dd><a href="?a=manage" target="in">管理员列表</a></dd>
		<dd><a href="#">等级列表</a></dd>
		<dd><a href="#">权限设定</a></dd>
		<dd><a href="?a=edit" target="in">模版编辑</a></dd>
		<dd><a href="?a=pic" target="in">图片管理</a></dd>		
	</dl>
</div>
<div id="main">
	<iframe frameborder='0' src="?a=admin&m=main" name="in"></iframe>
</div>
</body>
</html><?php }} ?>
