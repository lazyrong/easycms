<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
   <title><?php echo ($catName); ?>-<?php echo R('Siteinfo/info',array('title'),'Widget');?></title>
<meta property="og:description" content=""/>
    <link type="text/css" rel="stylesheet" href="../Public/css/base.css">
    <link rel="stylesheet" rel="stylesheet" href="../Public/css/style.css">
    <script type="text/javascript" src="../Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="../Public/js/slider.js"></script>
    <script>
    $(function() {
        $("li#zone").hover(function() {
                $(".pop-up").addClass('pop');
            },
            function() {
                $(".pop-up").removeClass('pop');
            });
    })
    </script>
    <style>
    /*ul:first-child { border-top: 1px solid #E5E5E5;}  */
    </style>
</head>

<body>
    <!-- header -->
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
    <!-- header end -->

<!-- 开始 -->
 <div class="container">
    <div class="title">
        <h3><?php echo ($catName); ?></h3>
    </div>
    <div class="clearfix"></div>
    <div style="overflow:auto; width:1150px; margin:0 auto; margin-top:25px;">

<?php if(is_array($list)): foreach($list as $key=>$vo): ?><!--私董会名片 -->
        <div class="angel-unit fl">
            <div class="angel-info">
                <div class="image fl"><a href="#"><img src="../Public/images/avatar.jpg" alt=""></a></div>
                <div class="angel-name fl">
                    <a href="#"><?php echo ($vo["title"]); ?></a>
                    <p><?php echo ($vo["keyword"]); ?></p>
                </div>    
            </div>
            <div class="angel-desc"><p><strong>简介：</strong>
                <?php echo (substr($vo['summary'],0,260)); ?>...
            <a href="<?php echo U('Nankai/Article/index',array('articleid'=>$vo['article_id']));?>">更多>></a></p></div>
            </div><?php endforeach; endif; ?>
    <!--私董会名片结束 -->
    
    </div>
    <div class="clearfix"></div>
    <div class="more">
         <a href="javascript:void(0)" class="btn-more">查看更多</a>
    </div>
    </div>
        <!-- 结束-->

    <!-- footer -->
  <div class="footer" style="position:relative; z-index:100;">
			<div class="wrapper">
				<div class="footer-icons">
					<div class="wx-img"><img width="130px" height="130px" src="../Public/images/wx.png"/></div>
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
    <!-- footer end -->
</body>

</html>