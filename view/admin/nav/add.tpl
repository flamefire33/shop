<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">返回导航列表</a>商品 -- 新增导航条</h2>
<form method="post" action="?a=nav&m=runAdd" name="add" id="navForm">
	{if $oneNav}<input type="hidden" name="sid" value="{$oneNav[0]->id}"/>{/if}
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		{if $oneNav}<dd>父类名称：{$oneNav[0]->name}</dd>{/if}
		<dd>
		<label for="name">导航名称：</label>
		<input type="text" id="name" name="name" class="text"/><span>（*2-4位之间）</span>
		</dd>
		<dd>
		<label for="info">导航信息：</label>
		<textarea name="info" id="info"></textarea><span>（*小于200位）</span>
		</dd>
		{if $oneNav}
		<dd>
			品　　牌：
			{html_checkboxes name='brand' options=$allBrands selected='1'}
		</dd>
		{/if}
		<dd>价格区间：{html_checkboxes name='price' options=$allPrice}
		</dd>
		<dd><input type="submit" name="send" value="新增导航"/></dd>
	</dl>
</form>

</body>
</html>