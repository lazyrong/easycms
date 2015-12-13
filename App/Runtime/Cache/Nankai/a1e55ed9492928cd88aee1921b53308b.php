<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<base href="__ROOT__/" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >



<title><?php echo ($article["title"]); ?>-<?php echo R('Siteinfo/info',array('title'),'Widget');?></title>
<meta name="description" content="<?php echo ($article["summary"]); ?>" />
<meta name="keywords" content="<?php echo ($article["keyword"]); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="../Public/Css/bootstrap.min.css" rel="stylesheet" media="screen">

<link href="../Public/Css/style.css" rel="stylesheet" media="screen">
<script src="../Public/Js/jquery.js"></script>
<script src="../Public/Js/bootstrap.min.js"></script>
</head>
<body id="body">
<header> 
  <!-- 导航开始 -->
      <!-- header -->
    <script>
    $(function() {
        $("li").hover(function() {
                if( $(this).children("ul").length > 0 ) {
                    $(this).children("ul").addClass('pop');
                    }
            },
            function() {
                 if( $(this).children().length > 0 ) {
                    $(this).children("ul").removeClass('pop');
                    }
            });
    })
    </script>
    <div class="header">
        <div class="wrapper">
            <div class="web-logo">
                <h1><a href="<?php echo U('Index/Index/index');?>"><span class="glyphicon glyphicon-send"></span></a>南开好项目</h1>
            </div>
            <div class="navbar fl">
                <ul>
                    <li><a  href="<?php echo U('Nankai/Index/index');?>">首页</a></li>
                   
                   <?php if(is_array($cats)): foreach($cats as $key=>$cats): ?><li>
                                <a <?php if((count($cats['children']) > 0)): ?>href='<?php echo U('Nankai/List/index', array('catsid'=>$cats['children'][0]['id']));?>'

<?php else: ?>
href='<?php echo U('Nankai/List/index', array('catsid'=>$cats['id']));?>'<?php endif; ?>
                                >
                                <?php echo ($cats["name"]); ?></a>
                            <?php if((count($cats['children']) > 1)): ?><ul class="pop-up-wrapper pop-up">
                                <?php if(is_array($cats['children'])): foreach($cats['children'] as $key=>$vo): ?><li>
                                    <a href="<?php echo U('Nankai/List/index', array('catsid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>

                                </li><?php endforeach; endif; ?>
                                </ul><?php endif; ?>
                            </li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="navbar fr">
                <div class="login fl">
                    <a href="javascript:;" class="nav-btn" id="nav-btn-login">登录</a>
                </div>
                <div class="line fl"></div>
                <div class="reg fr">
                    <a href="javascript:;" class="nav-btn" id="nav-btn-reg">注册</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
  <!-- 导航结束 --> 
</header>
<div class="container">
  <article itemscope itemtype="http://schema.org/Article">
    <div class="col-lg-12 col-md-12 content">
      <div class="clean"></div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="pull-left" itemprop="name"><?php echo ($article["title"]); ?></h1>
          <div class="pull-right"> 
          	<!--qr二维码开始-->
          	<div style="float:left;position:relative" id="qr">
          		 <a  class="btn btn-default btn-sm pull-left"> <span class="glyphicon glyphicon-thumbs-up"></span>“扫一扫”二维码分享给朋友</a>&nbsp;&nbsp;
          		<div class="hm"  style="margin-top:14px;display:none;position:absolute;z-index:1">
          			<img z-index=999 src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&choe=UTF-8&chld=L|4&chl=<?php echo ($qrcode); ?>"/>
          		</div>
          	</div>
          	<script>
          		$(function(){
          			$('#qr').hover(function(){
						$(this).children('.hm').toggle();
					});	
				});
          	</script>
          	<!--qr二维码结束-->
            <!--前台文章标题右侧钩子，position=1开始-->
            <?php if(is_array($plugin1)): foreach($plugin1 as $key=>$plugin1Val): echo R('Index/Baidushare/info',array(),'Widget'); endforeach; endif; ?>
            <!--前台文章标题右侧钩子，position=1结束-->
            
          </div>
          <div class="clean"></div>
        </div>
        <div itemprop="articleBody" class="panel-body">
	<!-- 图片幻灯开始 -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php if(is_array($imgs)): $imgsKey = 0; $__LIST__ = array_slice($imgs,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$imgsValue): $mod = ($imgsKey % 2 );++$imgsKey;?><li data-target="#myCarousel" data-slide-to="<?php echo ($imgsKey); ?>" class="active"></li><?php endforeach; endif; else: echo "" ;endif; ?>
      	<?php if(is_array($imgs)): $imgsKey = 0; $__LIST__ = array_slice($imgs,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$imgsValue): $mod = ($imgsKey % 2 );++$imgsKey;?><li data-target="#myCarousel" data-slide-to="<?php echo ($imgsKey); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
      <div class="carousel-inner">
        <?php if(is_array($imgs)): $imgsKey = 0; $__LIST__ = array_slice($imgs,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$imgsValue): $mod = ($imgsKey % 2 );++$imgsKey;?><div class="item active">
          		<img style="margin:0 auto;max-height:400px;" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" src="<?php echo ($imgsValue); ?>" alt="First slide">
        	</div><?php endforeach; endif; else: echo "" ;endif; ?>
      	<?php if(is_array($imgs)): $imgsKey = 0; $__LIST__ = array_slice($imgs,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$imgsValue): $mod = ($imgsKey % 2 );++$imgsKey;?><div class="item">
          		<img style="margin:0 auto;max-height:400px;" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" src="<?php echo ($imgsValue); ?>" alt="First slide">
        	</div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- 图片幻灯结束-->
         <!-- <?php echo ($article["content"]); ?> -->
        </div>
        <div>
          <div class="pull-left text-success" >
            <?php if($preArticle != null): ?>上一篇：<a href="<?php echo U('Index/Article/index',array('articleid'=>$preArticle['article_id']));?>" ><span><?php echo ($preArticle["title"]); ?></span></a>
            <?php else: ?>
               没有上一篇了<?php endif; ?>
          </div>
          <div class="pull-right text-danger" >
            <?php if($nextArticle != null): ?>下一篇：<a href="<?php echo U('Index/Article/index',array('articleid'=>$nextArticle['article_id']));?>" ><span><?php echo ($nextArticle["title"]); ?></span></a>
            <?php else: ?>
               没有下一篇了<?php endif; ?>
          </div>
        </div><div style="clear:both"></div>
        <div style="border-top:1px solid #ddd;"></div>
        <div class="panel-footer">
         <div class="text-muted"> 本文在
            <time itemprop="datePublished" datetime="<?php echo (date("Y-m-d H:i:s",$article["pubtime"])); ?> "><?php echo (date("Y-m-d H:i:s",$article["pubtime"])); ?></time>
            发布在 <span itemprop="articleSection"><a href="<?php echo U('Index/List/index',array('catsid'=>$article['tid']));?>"><?php echo ($article["name"]); ?></a></span>  </div>
        </div>
      </div>
<?php if($article["iscommend"] == 1): ?><!--评论开始-->
<iframe class="col-lg-12 col-md-12" scrolling="no"  src="<?php echo U('Index/Comment/comments_article',array('aid'=>$aid));?>" frameborder="0"  style="max-width:730px;min-height:540px;padding:0;margin:0 auto;"></iframe>
	<!--评论结束--><?php endif; ?>

<!--图片类型文章评论左侧边栏显示开始-->
 <div class="col-lg-4 col-md-4 sidebar">
    <div class="clean"></div>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class=""> <span class="glyphicon glyphicon-thumbs-down mr10"></span> <span itemprop="name">最受争议的5篇文章</span> </a> </h3>
        </div>
        <div  class="panel-collapse in" style="height: auto;">
        	<?php if(is_array($sidebar2)): foreach($sidebar2 as $key=>$sidebar2Val): ?><a href="<?php echo U('Index/Article/index',array('articleid'=>$sidebar2Val['article_id']));?>" class="list-group-item"><span><?php echo ($sidebar2Val["title"]); ?></span></a><?php endforeach; endif; ?>
        </div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class=""> <span class="glyphicon glyphicon-pushpin mr10"></span> <span itemprop="name">随机推荐5篇文章</span> </a> </h3>
        </div>
        <div  class="panel-collapse in" style="height: auto;"> 
			   <?php if(is_array($sidebar3)): foreach($sidebar3 as $key=>$sidebar3Val): ?><a href="<?php echo U('Index/Article/index',array('articleid'=>$sidebar3Val['article_id']));?>" class="list-group-item"><span><?php echo ($sidebar3Val["title"]); ?></span></a><?php endforeach; endif; ?>
        </div>
      </div>
<!--图片类型文章评论左侧边栏显示结束-->
   
    <script>var ad=$('#ad'),st;var sd=$('.sidebar'),st;ad.attr('data-offset-top',ad.offset().top+ad.innerWidth());var wd=sd.innerWidth()-30;ad.attr({style:'width:'+wd+'px'});</script> 
  </div>
    </div>
  </article>

  <div class="clean"></div>
</div>
<div class="footer">
			<div class="wrapper">
				<div class="footer-icons">
					<div class="wx-img"><img src="images/wx.png"/></div>
					<a  id="wx" href="javascript:void(0);"><span class="icon icon-wx"></span></a>
					<a target="_blank" href="#"><span class="icon icon-wb"></span></a>
					<a target="_blank" href="#"><span class="icon icon-qq"></span></a>
				</div>
				<div class="footer-links">
					<a href="#" target="_blank" style="border-left:none;">关于我们</a>
					<a href="#" target="_blank">联系我们</a>
					<a href="#" target="_blank">加入我们</a>
					<a href="#" target="_blank">服务与支持</a>
					<a href="#" target="_blank">隐私保护</a>
				</div>
				<div class="footer-copyright">© 2014 Lazytech, Inc. <a style="color:#909090 !important;" href="#" target="_blank">粤ICP备14080286号</a></div>
			</div>
		</div>
		<script>
		$(function(){
			$("#wx").hover(function(){
				$(".wx-img").css("visibility","visible");
			},function(){
				$(".wx-img").css("visibility","hidden");
			});
		})
		</script>
<div class="btn-group-vertical floatButton">
  <button type="button" class="btn btn-default" id="goTop" title="去顶部"><span class="glyphicon glyphicon-arrow-up"></span></button>
  <button type="button" class="btn btn-default" id="refresh" title="刷新"><span class="glyphicon glyphicon-repeat"></span></button>
  <button type="button" class="btn btn-default" id="goComments" title="评论"><span class="glyphicon glyphicon-align-justify"></span></button>
  <button type="button" class="btn btn-default" id="goBottom" title="去底部"><span class="glyphicon glyphicon-arrow-down"></span></button>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
  $('#goTop').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
  $('#goBottom').click(function(){$('html,body').animate({scrollTop:$('#footer').offset().top}, 800);});
  $('#goComments').click(function(){$('html,body').animate({scrollTop:$('#comments').offset().top}, 800);});
  $('#refresh').click(function(){location.reload();});
});
</script>
</body>
</html>