<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <title>南开好项目</title>
    <link type="text/css" rel="stylesheet" href="../Public/Css/base.css">
    <link rel="stylesheet" rel="stylesheet" href="../Public/Css/style.css">
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

    <!-- container -->
    <div class="container-wrapper">
        <!-- containertion  -->
        <div class="container">
            <!-- latest news -->
            <div class="head fl">
                <div class="head-title">
                    <h1 class="fl">最新动态</h1>
                    <a href="#" class="fr" style="color:#4cc"> +MORE</a>
                </div>
                <ul class="news-list">
                <?php if(is_array($recArticle)): foreach($recArticle as $key=>$ra): ?><li class=""><a target="_blank" href="<?php echo U('Nankai/Article/index',array('articleid'=>$ra['article_id']));?>"><?php echo ($ra["title"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="fr banner-wrapper">
                <!-- banner slider -->
                <div id="playBox">
                    <div class="pre"></div>
                    <div class="next"></div>
                    <div class="smalltitle" >
                        <ul style="width:<?php echo ($ulWidth); ?>px;">
                            <?php if(is_array($banner)): foreach($banner as $key=>$b): ?><li class=""></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <ul class="oUlplay">
                    <?php if(is_array($banner)): foreach($banner as $key=>$b): ?><li>
                            <a href="#" target="_blank"><img src="<?php echo ($b['url']); ?>"></a>
                        </li><?php endforeach; endif; ?>   
                    </ul>
                </div>
                <!-- banner slider end -->
            </div>
        </div>
    </div>
    <!-- container end -->


    <!-- 项目 -->
    <div class="container-wrapper ">
        <div class="container">
            <div class="head">
                <div class="head-title">
                    <h1 class="fl">南开好项目</h1>
                    <a href="#" class="fr" style="color:#4cc"> +MORE</a>
                    <div class="clear"></div>
                    <hr>
                </div>
                                  
            </div>
            <div class="project-wrapper">
        <ul class="project-list">

        <?php if(is_array($recProject)): foreach($recProject as $key=>$rp): ?><li class="project-unit">
                <a href="<?php echo U('Nankai/Article/index',array('articleid'=>$rp['article_id']));?>"><img src="../Public/images/project1.jpg" alt=""></a>
                <p class="project-text">
                   <?php echo ($rp["summary"]); ?> 
                </p>
            </li><?php endforeach; endif; ?>
            </ul>
        </div>
        </div>
    </div>
    <!-- 项目 结束 -->



    <!-- 投资机构-->
    <div class="container-wrapper">
        <div class="container">
            <div class="head">
                <div class="head-title">
                    <h1 class="fl">投资机构</h1>
                    <a href="#" class="fr" style="color:#4cc"> +MORE</a>
                    <div class="clear"></div>
                    <hr>
                </div>                
            </div>
<div style="overflow:auto; width:1150px; margin:0 auto; margin-top:25px;">
        <!-- 投资机构填充 -->
        <?php if(is_array($recOrg)): foreach($recOrg as $key=>$ro): ?><div class="angel-unit fl">
            <div class="angel-info">
                <div class="image fl"><a href="<?php echo U('Nankai/Article/index',array('articleid'=>$ro['article_id']));?>"><img src="../Public/images/avatar.jpg" alt=""></a></div>
                <div class="angel-name fl">
                    <a href="<?php echo U('Nankai/Article/index',array('articleid'=>$ro['article_id']));?>"><?php echo ($ro["title"]); ?></a>
                    <p><?php echo ($ro["keyword"]); ?></p>
                </div>    
            </div>
            <div class="angel-desc"><p><strong>简介：</strong>
                <?php echo ($ro["summary"]); ?>
            <a href="<?php echo U('Nankai/Article/index',array('articleid'=>$ro['article_id']));?>">更多>></a></p></div>
            </div><?php endforeach; endif; ?>
</div>

        </div>
    </div>
    <!-- 投资机构  end-->

<!-- 合作媒体-->
    <div class="container-wrapper">
        <div class="container">
            <div class="head">
                <div class="head-title">
                    <h1 class="fl">合作媒体</h1>
                    <a href="#" class="fr" style="color:#4cc"> +MORE</a>
                    <div class="clear"></div>
                    <hr>
                </div>

            </div>
            <ul class="logo-list">
                <?php if(is_array($recMedia)): foreach($recMedia as $key=>$rm): ?><li><a href="<?php echo U('Nankai/Article/index',array('articleid'=>$rm['article_id']));?>" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li><?php endforeach; endif; ?>
            </ul>

        </div>
    </div>
    <!-- 合作媒体 end-->
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

</html>'