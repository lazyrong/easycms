<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__/<?php echo ($navTabUrl); ?>" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($currentPage)?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<style type="text/css" media="screen">
    .imgs{text-align:center; vertical-align: middle;}
    .imgs div{height:80px!important; padding:10px!important;}
</style>
<script>
	function updateSort(obj){
		$id=$(obj).attr('name');
		$value=$(obj).attr('value');
		$.post('__URL__/update/navTabId/listbanner/callbackType/closeCurrent' , {'banner_id':$id,'sort':$value} , function(){
			$(obj).html($value);
		});
		navTabPageBreak();
	}

</script>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ($currentPage); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="__URL__/add" target="dialog" rel="dialogid" width="550" height="380"  title="添加Banner图片"><span>添加</span></a></li>
			<li><a  target="selectedTodo" target="dialog" rel="ids[]" href="__URL__/delAll" class="delete" ><span>删除</span></a></li>
			<li><a class="edit" href="__URL__/edit/banner_id/{item_id}"   width="550" height="380" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl"></th>
				<th width="30">标题</th>
				<th width="30">排序</th>
				<th width="40">图片内容</th>
				<th width="40">图片链接</th>
				<th width="50">是否显示</th>
				<th width="40">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["banner_id"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['banner_id']); ?>" type="checkbox">:<?php echo ($vo["banner_id"]); ?></td>
					<td><?php echo ($vo["title"]); ?></td>
					<td >
					<input onblur="updateSort(this);" type="text" style="width:30px;border:0;" name="<?php echo ($vo["banner_id"]); ?>" value="<?php echo ($vo["sort"]); ?>" > 
					</td>
					<td class="imgs"><img style="width:100%; height:100%;" src="<?php echo ($vo['url']); ?>" /></td>
					<td><?php echo ($vo["link"]); ?></td>
					<td><?php echo (isok($vo["isshow"])); ?></td>
					<td>
						<a href="__URL__/edit/banner_id/<?php echo ($vo["banner_id"]); ?>" target="dialog">修改</a>
					</td>

				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>