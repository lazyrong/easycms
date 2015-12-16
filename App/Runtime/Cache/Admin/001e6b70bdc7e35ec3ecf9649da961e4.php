<?php if (!defined('THINK_PATH')) exit();?>
<form id="pagerForm" action="__URL__/<?php echo ($navTabUrl); ?>" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($currentPage)?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<style type="text/css" media="screen">
    .imgs{text-align:center; vertical-align: middle;}
    .imgs div{height:80px!important; padding:10px!important;}
</style>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [标题]
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="__URL__/addTo/catsid/<?php echo ($catsid); ?>" target="dialog"  width="1080" height="600"  rel="user_msg" title="选择内容分类"><span>添加</span></a></li>
			<li><a  target="selectedTodo" target="dialog" rel="ids[]" href="__URL__/rubAll" class="delete" ><span>批量放入回收站</span></a></li>
			<li><a class="edit" href="__URL__/edit/article_id/{item_id}"   width="1080" height="600" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon" href="javascript:navTabPageBreak()" ><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl"></th>
				<th width="30">分类</th>
				<th width="30">姓名 or 媒体名称)</th>
				<th width="40">身份(媒体可以不填)</th>
				<th width="40">头像 or Logo</th>
<!-- 				<th width="40">发布时间</th> -->
				<!-- about页面不显示 -->
				<?php if($catsid != 86): ?><th width="50">是否首页推荐</th><?php endif; ?>
				<th width="40">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["article_id"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['article_id']); ?>" type="checkbox">:<?php echo ($vo["article_id"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php echo ($vo["title"]); ?></td>
					<td><?php echo ($vo["keyword"]); ?></td>
					<td class="imgs"><img style="width:100%; height:100%;" src="<?php echo ($vo['url']); ?>" /></td>
<!-- 					<td><?php echo (date("Y-m-d H:m:s",$vo["pubtime"])); ?></td> -->
				<!-- about页面不显示 -->				
				<?php if($catsid != 86): ?><td><?php echo (isok($vo["ispush"])); ?></td><?php endif; ?>
					<td>
					<?php echo (rubbish($vo["islock"],$vo['article_id'])); ?>
					</td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if($numPerPage == 10 ): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15 ): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20 ): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25 ): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30 ): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>