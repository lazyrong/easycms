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
                            <?php if((count($cats['children']) > 0)): ?><ul class="pop-up-wrapper pop-up">
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


<div class="container-wrapper">
    <div class="container">
        <div class="box-aside fl">
            <ul>
            <?php if(is_array($menu)): foreach($menu as $key=>$m): ?><li <?php if($catName == $m['name']): ?>class="active"<?php endif; ?>><a href="<?php echo U('Nankai/List/index',array('catsid'=>$m['id']));?>"><?php echo ($m["name"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
            <h2>关注我们</h2>
            <hr style="color:#E5E5E5">
            <p>微信公众平台：搜索“南开好项目"<br>或"扫描下面的二维码”</p>
            <p><img src="../Public/images/wx.png"></p>
        </div>
        <!-- 主内容区 -->
        <div class="box-main fl">
            <div class="head"><h3>最新资讯</h3></div>
            <!-- 文章列表-->
            <div class="article-list">
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><!-- 文章 -->
                <div class="article-unit">
                    <div class="article-info">
                        <a href="__SELF__" class=""><?php echo ($catName); ?></a>
                        <span><?php echo (date("Y-m-d",$list["pubtime"])); ?></span>
                    </div>
                    <div class="article-brief">
                        <div class="image"><a href="<?php echo U('Nankai/Article/index',array('articleid'=>$list['article_id']));?>"><img src="../Public/images/article.jpg"></a></div>
                        <div class="article-brief-con">
                            <div class="title"><a href="<?php echo U('Nankai/Article/index',array('articleid'=>$list['article_id']));?>" class="text-decoration"><?php echo ($list["title"]); ?></a></div>
                            <div class="text" style="height:60px;text-overflow:ellipsis;overflow:hidden;font-size:12px !important;"><?php echo ($list["summary"]); ?></div>
                        </div>
                    </div>
                </div>
                <!-- 文章 结束--><?php endforeach; endif; ?>
            </div>
            <!-- 文章列表 结束-->
            <div class="more">
                <a href="javascript:void(0)" class="btn-more">查看更多</a>
            </div>

        </div>
        <!-- 主内容区 结束-->
    </div>
</div>  
    <!-- footer -->
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
    <!-- footer end -->
</body>

</html>