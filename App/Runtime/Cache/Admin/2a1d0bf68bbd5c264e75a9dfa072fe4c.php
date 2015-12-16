<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__URL__/update/dialogId/dialogid/callbackType/closeCurrent" enctype="multipart/form-data" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, dialogAjaxDone);" ><?php  ?>
	
		<div class="pageFormContent" layoutH="60">
			<dl>
			<dt>标题：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title" value="<?php echo ($vo["title"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>排序：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="sort" value="<?php echo ($vo["sort"]); ?>" /></dd>
			</dl>

			<dl>
				<dt>图片上传:</dt>
				<dd>
					<input type="file" style="width:100%" name="url" value="<?php echo ($vo["urll"]); ?>" />
				</dd>
			</dl>
			<p style="color:red; padding-left:5px; ">PS:banner图尺寸为750*400px，或按此比例上传图片，否则会变形！	</p>			
			<dl style="height:80px!important;">
				<dt>原图片</dt>
				<dd><img  src="<?php echo ($vo["url"]); ?>" style="width:150px; height:auto;"/></dd>
			</dl>
			<dl>
				<dt>是否显示：</dt>
				<dd>
					<input type="radio" name="isshow" value="1" <?php if($vo["isshow"] == 1): ?>checked<?php endif; ?> />显示
					<input type="radio" name="isshow" value="0" <?php if($vo["isshow"] == 0): ?>checked<?php endif; ?>/>不显示
				</dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>