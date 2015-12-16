<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="__URL__/update/navTabId/listarticle/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);">
		<input type="hidden" name="article_id" value="<?php echo ($vo["article_id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
				<dt>是否首页推荐：</dt>
				<dd>
					<input type="radio" name="ispush" value="1" <?php if($vo["ispush"] == 1): ?>checked<?php endif; ?>/>推荐
					<input type="radio" name="ispush" value="0" <?php if($vo["ispush"] == 0): ?>checked<?php endif; ?>/>不推荐
				</dd>
			</dl>
			<dl  class="nowrap">
				<dt>内容：</dt>
				<dd>
					<textarea id="elm1" name="content"  style="width:100%;display: none;" rows="20" ><?php echo ($vo["content"]); ?>
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