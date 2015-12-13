<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listcate/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="tid" value="<?php echo ($catinfo["id"]); ?>">
		<div class="pageFormContent" layoutH="60">
			<dl  class="nowrap">
				<dt>内容：</dt>
				<dd>
					<textarea id="elm1" name="content"  style="width:100%;display: none;" rows="20" >
					</textarea>
					<script>
						$('#elm1').xheditor({upLinkUrl:"__URL__/upload",upLinkExt:"zip,rar,txt",upImgUrl:"__URL__/upload",upImgExt:"jpg,jpeg,gif,png",upFlashUrl:"__URL__/upload",upFlashExt:"swf",upMediaUrl:"__URL__/upload",upMediaExt:"avi",urlBase:'__ROOT__/'});
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