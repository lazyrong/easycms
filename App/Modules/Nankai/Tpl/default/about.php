<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <title>南开好项目</title>
    <link type="text/css" rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
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
<?php include 'part/header.html' ?>
    <!-- header end -->
<div class="container-wrapper">
    <div class="container">
        <div class="box-aside fl">
            <ul>
                <li><a href="javascript:void(0)">关于我们 </a></li>
                
                <li class="active"><a href="javascript:void(0)">联系我们 </a></li>

                <li><a href="javascript:void(0)">加入我们 </a></li>

                <li><a href="javascript:void(0)">服务与支持 </a></li>

            </ul>
            <h2>关注我们</h2>
            <hr style="color:#E5E5E5">
            <p>微信公众平台：搜索“南开好项目"<br>或"扫描下面的二维码”</p>
            <p><img src="images/wx.png"></p>
        </div>
    </div>
</div>  
    <!-- footer -->
<?php include 'part/footer.html' ?>
    <!-- footer end -->
</body>

</html>
