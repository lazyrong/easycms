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
    <div>
        <h2>私董会</h2>
        <hr>
    </div>
        <!--私董会名片 -->
        <div class="row">
            <div class="angel-unit fl">
            <div class="angel-info">
                <div class="image fl"><a href="#"><img src="images/avatar.jpg" alt=""></a></div>
                <div class="angel-name fl">
                    <a href="#"><h2>徐小平</h2></a>
                    <a href="#"><h3>著名天使投资人</h3></a>
                </div>    
            </div>
            <div class="angel-desc"><p><strong>简介：</strong>新东方创始人，著名留学、签证、职业规划和人生发展咨询专家，现创“真格”天使投资基金。
曾任新东方教育科技集团董事、新东方文化发展研究院院长。是新东方留学、签证、出国咨询事业的创始人...</p></div>
            </div>

                        <div class="angel-unit fl">
            <div class="angel-info">
                <div class="image fl"><a href="#"><img src="images/avatar.jpg" alt=""></a></div>
                <div class="angel-name fl">
                    <a href="#"><h2>徐小平</h2></a>
                    <a href="#"><h3>著名天使投资人</h3></a>
                </div>    
            </div>
            <div class="angel-desc"><p><strong>简介：</strong>新东方创始人，著名留学、签证、职业规划和人生发展咨询专家，现创“真格”天使投资基金。
曾任新东方教育科技集团董事、新东方文化发展研究院院长。是新东方留学、签证、出国咨询事业的创始人...</p></div>
            </div>

                        <div class="angel-unit fl">
            <div class="angel-info">
                <div class="image fl"><a href="#"><img src="images/avatar.jpg" alt=""></a></div>
                <div class="angel-name fl">
                    <a href="#"><h2>徐小平</h2></a>
                    <a href="#"><h3>著名天使投资人</h3></a>
                </div>    
            </div>
            <div class="angel-desc"><p><strong>简介：</strong>新东方创始人，著名留学、签证、职业规划和人生发展咨询专家，现创“真格”天使投资基金。
曾任新东方教育科技集团董事、新东方文化发展研究院院长。是新东方留学、签证、出国咨询事业的创始人...</p></div>
            </div>
        </div>
        <!--私董会名片 -->


          <div class="more">
                <a href="javascript:void(0)" class="btn-more">查看更多</a>
            </div>

        </div>
        <!-- 合作媒体名片列表 -->
    </div>
</div>  

    <!-- footer -->
<?php include 'part/footer.html' ?>
    <!-- footer end -->
</body>

</html>
