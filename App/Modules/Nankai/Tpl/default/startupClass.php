<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
   <title><{$catName}>-<{:R('Siteinfo/info',array('title'),'Widget')}></title>
<meta property="og:description" content=""/>
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
                <li class="active"><a href="javascript:void(0)">创投学院 </a></li>
                
                <li><a href="javascript:void(0)">媒体资讯 </a></li>

            </ul>
            <h2>关注我们</h2>
            <hr style="color:#E5E5E5">
            <p>微信公众平台：搜索“南开好项目"<br>或"扫描下面的二维码”</p>
            <p><img src="images/wx.png"></p>
        </div>
        <!-- 主内容区 -->
        <div class="box-main fl">
            <div class="head"><h3>最新资讯</h3></div>
            <!-- 文章列表-->
            <div class="article-list">
    <foreach name="list" item="list" >
                <!-- 文章 -->
                <div class="article-unit">
                    <div class="article-info">
                        <a href="#" class="">创投学院</a>
                        <span><time itemprop="datePublished" datetime="<{$article.pubtime|date="Y-m-d H:i:s",###}> "></span>
                    </div>
                    <div class="article-brief">
                        <div class="image"><a href="<{:U('Nankai/Article/index',array('articleid'=>$list['article_id']))}>"><img src="images/article.jpg"></a></div>
                        <div class="article-brief-con">
                            <div class="title"><a href="/news/detail/262.htm" class="text-decoration"><{$list.title}></a></div>
                            <div class="text" style="height:60px;text-overflow:ellipsis;overflow:hidden;font-size:12px !important;"><{$list.summary}></div>
                        </div>
                    </div>
                </div>
                <!-- 文章 结束-->
    </foreach>
            </div>
            <!-- 文章列表 结束-->
            <div class="article-more">
                <a href="javascript:void(0)" class="btn-more">查看更多</a>
            </div>

        </div>
        <!-- 主内容区 结束-->
    </div>
</div>  
    <!-- footer -->
<?php include 'part/footer.html' ?>
    <!-- footer end -->
</body>

</html>
