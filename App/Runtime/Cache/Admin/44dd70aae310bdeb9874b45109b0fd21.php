<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__URL__/insert/dialogId/dialogid/callbackType/closeCurrent" enctype="multipart/form-data" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, dialogAjaxDone);" ><?php  ?>
	
		<div class="pageFormContent" layoutH="60">
			<dl>
			<dt>标题：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"/></dd>
			</dl>
			<dl>
				<dt>排序：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="sort" value="100"/></dd>
			</dl>

			<dl>
				<dt>图片上传:</dt>
				<dd>
					<input type="file" style="width:100%" name="url" />
				</dd>
			</dl>
			<p style="color:red; padding-left:5px; ">PS:banner图尺寸为750*400px，或按此比例上传图片，否则会变形！	</p>			

			<dl>
				<dt>图片链接</dt>
				<dd><input type="text"  style="width:100%" name="link" /></dd>
			</dl>
			<dl>
				<dt>是否显示：</dt>
				<dd>
					<input type="radio" name="isshow" value="1" checked />显示
					<input type="radio" name="isshow" value="0" />不显示
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