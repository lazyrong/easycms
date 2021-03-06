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
        $(window).scroll(function() { 
          var top = $(window).scrollTop();
          if( top > 100) {
            $(".pannel-block").css({
              "position":"fixed",
              "top":"10px",
              });
            $(".box-main").css({
              "margin-left":"270px"
            });
          } else {
               $(".pannel-block").css({
              "position":"static",
              "top":""
              });
              $(".box-main").css({
              "margin-left":"10px"
            });
          }

        }); 
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


<div class="container-wrapper">
    <div class="container">
        <div class="box-aside fl">
         <div class="pannel-block">
            <ul>
            <?php if(is_array($menu)): foreach($menu as $key=>$m): ?><li <?php if($catName == $m['name']): ?>class="active"<?php endif; ?>><a href="<?php echo U('Nankai/List/index',array('catsid'=>$m['id']));?>"><?php echo ($m["name"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
            <h2>关注我们</h2>
            <hr style="color:#E5E5E5">
            <p>微信公众平台：搜索“南开好项目"<br>或"扫描下面的二维码”</p>
            <p><img src="../Public/images/wx.png"></p>
        </div>
        </div>
        <!-- 主内容区 -->
        <div class="box-main fl">
            <div>
                <?php echo ($list['0']["content"]); ?>
            </div>    
        </div>
        <!-- 主内容区 结束-->
    </div>
</div>  
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