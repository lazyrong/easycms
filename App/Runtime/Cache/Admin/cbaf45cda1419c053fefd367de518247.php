<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listarticle/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="tid" value="<?php echo ($catinfo["id"]); ?>">
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>名片分类：</dt>
				<dd><?php echo ($catinfo["name"]); ?></dd>
			</dl>
			<dl>
				<dt>姓名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"/></dd>
			</dl>
			<dl>
				<dt>职位（身份）：</dt>
				<dd><input type="text" class="required" style="width:100%" name="keyword"/></dd>
			</dl>
			 	<dl>
				<dt>是否加入回收站：</dt>
				<dd>
					<input type="radio" name="islock" value="1" />是
					<input type="radio" name="islock" value="0" checked/>否
				</dd>
			</dl>
			<dl>
				<dt>头像上传:</dt>
				<dd>
					<input type="file" style="width:100%" name="url" />
				</dd>
			</dl>
			<p style="color:red; padding-left:5px; ">PS:banner图尺寸为750*400px，或按此比例上传图片，否则会变形！	</p>

<!--  
			<dl>
				<dt>是否允许评论：</dt>
				<dd>
					<input type="radio" name="iscommend" value="1" checked/>允许
					<input type="radio" name="iscommend" value="0"/>不允许
				</dd>
			</dl>
			<dl>
				<dt>是否首页幻灯：</dt>
				<dd>
					<input type="radio" name="isslides" value="1" />是
					<input type="radio" name="isslides" value="0" checked/>否
				</dd>
			</dl>

 -->			
			<dl>
				<dt>是否首页推荐：</dt>
				<dd>
					<input type="radio" name="ispush" value="1" <?php if($vo["ispush"] == 1): ?>checked<?php endif; ?>/>推荐
					<input type="radio" name="ispush" value="0" <?php if($vo["ispush"] == 0): ?>checked<?php endif; ?>/>不推荐
				</dd>
			</dl>
			<dl class="nowrap">
				<dt>名片简介：</dt>
				<dd><textarea class="required"  style="width:100%" name="summary"></textarea></dd>
			</dl>
			<dl  class="nowrap">
				<dt>详细介绍：</dt>
				<dd>
					<textarea id="elm1" name="content"  style="width:100%;display: none;" rows="20" >
					</textarea>
					<script>
						$('#elm1').xheditor({width:880,height:600,upLinkUrl:"__URL__/upload",upLinkExt:"zip,rar,txt",upImgUrl:"__URL__/upload",upImgExt:"jpg,jpeg,gif,png",upFlashUrl:"__URL__/upload",upFlashExt:"swf",upMediaUrl:"__URL__/upload",upMediaExt:"avi",urlBase:'__ROOT__/'});
					</script>
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