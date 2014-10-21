<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_update.js"></script>
</head>
<body>
<h2><a href="?a=brand">返回品牌列表</a>商品 -- 修改品牌</h2>
<form method="post" action="?a=brand&m=runUpdate&id={$oneBrand->id}" name="add" id="updateForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		<dd>品牌名称： {$oneBrand->name}</dd>
		<dd>
			<label for="type">品牌类型：</label>
			<select id="type" name="type"><option value="0">--请选择一个类型</option>
				{html_options options=$allMainNavs selected=$oneBrand->type}
			</select><span>（*不得为空）</span>
		</dd>
		<dd>
		<label for="name">网站地址：</label>
			<input type="text" id="url" name="url" value="{$oneBrand->url}" class="text"/><span>（*不得为空且不得大于40位）</span>
		</dd>
		<dd>
		<label for="info">品牌信息：</label>
			<textarea name="info" id="info">{$oneBrand->info}</textarea><span>（*小于200位）</span>
		</dd>
		<dd><input type="submit" name="send" value="修改品牌"/></dd>
	</dl>
</form>

</body>
</html>