<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($currentPage)?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
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
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--姣忛〉鏄剧ず澶氬皯鏉�-->
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="__URL__/add" target="dialog" rel="dialogid" width="550" height="380"  title="娣诲姞Banner鍥剧墖"><span>娣诲姞</span></a></li>
			<li><a  target="selectedTodo" target="dialog" rel="ids[]" href="__URL__/delAll" class="delete" ><span>鍒犻櫎</span></a></li>
			<li><a class="edit" href="__URL__/edit/banner_id/{item_id}"   width="550" height="380" target="dialog"><span>淇敼</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl"></th>
				<th width="30">鏍囬</th>
				<th width="30">鎺掑簭</th>
				<th width="40">鍥剧墖鍐呭</th>
				<th width="40">鍥剧墖閾炬帴</th>
				<th width="50">鏄惁鏄剧ず</th>
				<th width="40">鎿嶄綔</th>
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
						<a href="__URL__/edit/banner_id/<?php echo ($vo["banner_id"]); ?>" target="dialog">淇敼</a>
					</td>

				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>鍏�<?php echo ($totalCount); ?>鏉�</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>