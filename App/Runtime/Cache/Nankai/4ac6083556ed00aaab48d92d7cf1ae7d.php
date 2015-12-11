<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
                    <li class="first-child"><a target="_blank" href="#">苹果或将在明年春节前引入Apple</a></li>
                    <li class=""><a target="_blank"  href="#">苹果或将在明年春节电子支付服务!</a></li>
                    <li class=""><a href="#">苹果或将在明年春 Pay电子支付服务!</a></li>
                    <li class="first-child"><a target="_blank" href="#">苹果或将在明年春节前引入Apple</a></li>
                    <li class=""><a target="_blank"  href="#">苹果或将在明年春节电子支付服务!</a></li>
                    <li class=""><a href="#">苹果或将在明年春 Pay电子支付服务!</a></li>
                                        <li class=""><a href="#">苹果或将在明年春 Pay电子支付服务!</a></li>

                </ul>
            </div>
            <div class="fr banner-wrapper">
                <!-- banner slider -->
                <!-- http://44mkhh.axshare.com -->
                <div id="playBox">
                    <div class="pre"></div>
                    <div class="next"></div>
                    <div class="smalltitle">
                        <ul>
                            <li class="thistitle"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <ul class="oUlplay">
                        <li>
                            <a href="#" target="_blank"><img src="../Public/images/1.jpg"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="../Public/images/2.jpg"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="../Public/images/3.jpg"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="../Public/images/4.jpg"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="../Public/images/5.jpg"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img src="../Public/images/6.jpg"></a>
                        </li>
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
            <li class="project-unit">
                <a href="#"><img src="../Public/images/project1.jpg" alt=""></a>
                <p class="project-text">
                    私银贵族是中国第一家互联网私人银行，专注于为高净值客户提供线上线下财富综合管理，以及研发高端定制的非金融产品，是高净值客户经理的业务撮合和移动展业平台。 
                </p>
            </li>


                        <li class="project-unit">
                <a href="#"><img src="../Public/images/project1.jpg" alt=""></a>
                <p class="project-text">
                    私银贵族是中国第一家互联网私人银行，专注于为高净值客户提供线上线下财富综合管理，以及研发高端定制的非金融产品，是高净值客户经理的业务撮合和移动展业平台。 
                </p>
            </li>

                        <li class="project-unit">
                <a href="#"><img src="../Public/images/project1.jpg" alt=""></a>
                <p class="project-text">
                    私银贵族是中国第一家互联网私人银行，专注于为高净值客户提供线上线下财富综合管理，以及研发高端定制的非金融产品，是高净值客户经理的业务撮合和移动展业平台。 
                </p>
            </li>
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
                    <h1>投资机构</h1>
                    <a href="#" class="fr" style="color:#4cc"> +MORE</a>
                    <div class="clear"></div>
                    <hr>
                </div>
                                  
            </div>
            <ul class="logo-list">
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/investor-logo-1.jpg" alt=""/></a></li>
            </ul>

        </div>
    </div>
    <!-- 投资机构  end-->

<!-- 合作媒体-->
    <div class="container-wrapper">
        <div class="container">
            <div class="head">
                <div class="head-title">
                    <h1>合作媒体</h1>
                    <a href="#" class="fr" style="color:#4cc"> +MORE</a>
                    <div class="clear"></div>
                    <hr>
                </div>

            </div>
            <ul class="logo-list">
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>
              <li><a href="#" target="_blank"><img src="../Public/images/media-logo-1.jpg" alt=""/></a></li>

            </ul>

        </div>
    </div>
    <!-- 合作媒体 end-->
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

</html>'