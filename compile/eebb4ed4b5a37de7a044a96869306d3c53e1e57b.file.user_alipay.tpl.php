<?php /* Smarty version Smarty-3.1.17, created on 2014-07-01 14:53:48
         compiled from "D:\wamp\www\web\shop\view\default\public\user_alipay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25776539beb0bdbdbb9-78196762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eebb4ed4b5a37de7a044a96869306d3c53e1e57b' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_alipay.tpl',
      1 => 1404197587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25776539beb0bdbdbb9-78196762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539beb0be532b6_11637668',
  'variables' => 
  array (
    'hotSale' => 0,
    'key' => 0,
    'value' => 0,
    'history' => 0,
    'OneOrder' => 0,
    'oneOrder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539beb0be532b6_11637668')) {function content_539beb0be532b6_11637668($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/pay.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	当前位置：<a href="./">首页</a> &gt; 支付宝支付	
</div>

<div id="sidebar">
	<h2>当月热销</h2>
	<div style="margin:0 0 10px 0">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotSale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value<3) {?>
			<dl>
				<dt><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
				<dd class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			</dl>
			<?php }?>
		<?php } ?>
	</div>
	<h2>浏览记录</h2>
	<div style="margin:0 0 10px 0">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?>
			<dl>
				<dt><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['goodsid'];?>
"><img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumb_small'];?>
"/></a></dt>
				<dd class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['goodsid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></dd>
			</dl>
			<?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
		<p style="padding:20px;color">暂无历史记录</p>
		<?php } ?>
	</div>
</div>

<div id="main">
	<h2>在线支付</h2>
	<div class="pay">
		<?php if ($_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_state=='已取消'||$_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_pay=='已付款'||$_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_delivery=='已配货'||$_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_delivery=='已发货') {?>
		<dl><dd>此订单已被锁定！<input type="button" value="返回" onclick="javascript:history.go(-1);" /></dd></dl>
		<?php } else { ?>
		<dl>
			<dd>订 单 号：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</dd>
			<dd>总 金 额：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
/元</dd>
			<dd>订单详情：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</dd>
			<dd><input type="button" onclick="javascript:alert('由于种种原因，淘宝不予开通担保业务，故而支付接口无法实现。吆喝')" name="send" value="支付宝支付" /></dd>
		</dl>
		</form>
		<?php }?>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
