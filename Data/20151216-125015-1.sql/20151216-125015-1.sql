-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 3306
-- Database : easycms
-- 
-- Part : #1
-- Date : 2015-12-16 12:50:15
-- -----------------------------

SET FOREIGN_KEY_CHECKS = 0;


-- -----------------------------
-- Table structure for `easy_access`
-- -----------------------------
DROP TABLE IF EXISTS `easy_access`;
CREATE TABLE `easy_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_access`
-- -----------------------------
INSERT INTO `easy_access` VALUES ('7', '57', '3', '');
INSERT INTO `easy_access` VALUES ('7', '56', '2', '');
INSERT INTO `easy_access` VALUES ('7', '15', '3', '');
INSERT INTO `easy_access` VALUES ('7', '2', '2', '');
INSERT INTO `easy_access` VALUES ('7', '19', '3', '');
INSERT INTO `easy_access` VALUES ('7', '3', '2', '');
INSERT INTO `easy_access` VALUES ('7', '24', '3', '');
INSERT INTO `easy_access` VALUES ('7', '4', '2', '');
INSERT INTO `easy_access` VALUES ('7', '32', '3', '');
INSERT INTO `easy_access` VALUES ('7', '7', '2', '');
INSERT INTO `easy_access` VALUES ('7', '35', '3', '');
INSERT INTO `easy_access` VALUES ('7', '8', '2', '');
INSERT INTO `easy_access` VALUES ('7', '39', '3', '');
INSERT INTO `easy_access` VALUES ('7', '9', '2', '');
INSERT INTO `easy_access` VALUES ('7', '46', '3', '');
INSERT INTO `easy_access` VALUES ('7', '10', '2', '');
INSERT INTO `easy_access` VALUES ('7', '47', '3', '');
INSERT INTO `easy_access` VALUES ('7', '11', '2', '');
INSERT INTO `easy_access` VALUES ('7', '62', '2', '');
INSERT INTO `easy_access` VALUES ('7', '1', '1', '');

-- -----------------------------
-- Table structure for `easy_article`
-- -----------------------------
DROP TABLE IF EXISTS `easy_article`;
CREATE TABLE `easy_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL,
  `title` varchar(40) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `pubtime` int(10) unsigned NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `iscommend` tinyint(1) unsigned NOT NULL,
  `ispush` tinyint(1) unsigned NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL,
  `sort` int(6) DEFAULT '10000',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_article`
-- -----------------------------
INSERT INTO `easy_article` VALUES ('43', '0', '11111111111111', '11111111111', '1449901113', '11111111111111111111', '11111111111111111111111111					', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('44', '93', '234234', '324324324', '1449902395', '23423423', '4234234234										', '1', '1', '0', '30');
INSERT INTO `easy_article` VALUES ('46', '88', '1', '1', '1449905010', '11', '<div class=\"row\"><div class=\"col about-description-image col-margin-left-10\"><img src=\"http://www.ueee.cn/assets/images/about-home.jpg\" alt=\"\" height=\"159\" width=\"299\" /><img src=\"http://www.ueee.cn/assets/images/gywm_2.jpg\" alt=\"\" /><img src=\"http://www.ueee.cn/assets/images/gywm_3.jpg\" alt=\"\" /></div></div><div class=\"description-title\"><label>深圳市聚电网络科技有限公司</label></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳聚电网络科技有限公司（简称“聚电”），是一家内生“互联网+”基因的智能硬件企业。从2014年起在全国铺设电动汽车充电点和充电站，并依托强大的互联网技术将这些充电点连成全方位立体网络，是为电动车主提供便捷充电服务的专业充电网络建设和服务运营商，也是国内为数不多的能够通过软件App实现一站式充电服务的企业。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;聚电为国内研发出第一个能够通过手机App一站式解决所有充电相关问题的软件管理系统，通过手机App聚电桩，车主可以轻松实现充电桩的监控、查找、预约、充电、断电、付费结算及申请安装和服务求助等服务及即时沟通功能，且兼容微信、支付宝、银联和各个电力运营商的电力卡等多种手机支付方式。借助强大的移动互联网技术改造，聚电重新定义了充电桩这个传统的电力产品，使其成为一个能够实现与人、与手机及其他充电桩和移动服务终端互动的智能硬件。自此，聚电完成了汽车充电领域的革新，使得电动汽车在中国发展的充电瓶颈有了一体化的智能解决捷径。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;借助互联网技术与电力自动化技术的融合，聚电率先为广大电动汽车运营商提供了充电运营的一体化解决方案，产品覆盖充电桩后台监控系统、桩主管理软件、聚电桩App和适配国标和欧美标准的交直流充电桩，同时还有可以实现道路救援的智能充电车，完美解决车主的旅程焦虑和突发电量不足问题。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前聚电与合作伙伴共同建设了上海第一座民营光伏充电站， 北京CBD地区亚洲最大的充电站，充电服务遍布北京、上海、广州、深圳、沈阳、昆明、东莞多地，正在全国所有的城市发起充电桩众筹行动，聚集民间力量共同解决电动汽车充电基础设施不足的瓶颈，让更多的有识之士和合作伙伴参与到新能源汽车的发展中来。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;聚电将与各位合作伙伴一道，利用光伏、储能和电动汽车等技术创造零耗能、零污染的绿色生活方式，持续为中国的新能源战略助力，为广大电动汽车车主的绿色出行提供充电基础，打造智慧城市的智慧交通基础设施合作伙伴。										', '0', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('47', '89', '', '', '1449906218', '', '<div class=\"pages-wrap\"><div class=\"main-section\"><div class=\"content-wrapper focus-edition\"><article class=\"single-post\"><section class=\"article english-wrap\"><h3 id=\"toc_0\">36氪，专注互联网创业。</h3><p>36氪是北京协力筑成金融信息服务有限公司旗下网站。</p><p>2010年12月8日，36氪作为科技媒体正式上线，其名字源于元素周期表的第36号元素“氪”，化学符号为 Kr，一个稳定、独立，不易与其他其他物质发生化学作用的元素。传说中的氪星是超人的故乡。</p><p>经历四年成长，36氪不仅有备受顶级投资机构关注的高效互联网融资平台（36氪融资http://rong.36kr.com），还有专注于互联网创业项目孵化的氪空间（Kr Space），在全中国首创了“不收费、不占股、全球资本，平台服务”的新型孵化器模式。同时，36氪的科技媒体，已然成为最前沿科技资讯的平台，也是互联网创业者寻求报道，接洽资本的首选入口。由媒体、氪加和氪空间三条产品线，构成了36氪专注互联网创业的生态圈模式。</p><p>创始人兼CEO刘成城（Liu CC），1988年出生在江苏盐城。中国科学院硕士，在2013年被《福布斯》评为“中国30岁以下的创业者前30名”之一 。</p><p>36氪从4个创始人到现在100人，90%的员工都是85后，平均年龄25岁，我们更了解年轻人，我们更了解创业者，我们更了解创投的生态环境。年轻开放的团队，从早午餐到下午茶，从每周健康按摩到集体出境旅行，让每位员工的付出与福利同步前进。</p><h3 id=\"toc_1\">我们的产品</h3><p>36氪融资：让融资快过烧钱不是我们的目的，成就更多优秀的创业者才是我们的使命。这是36氪从创业观察者到践行者的升级，从媒体到平台到延伸。我们认为，只有存在更活跃、透明的投融资对接市场，投资人才能够最有效地发现创业者的优秀价值。融资团队由资深媒体记者、产品技术开发团队、专业财务顾问、数据库人才组成。同时，在这一平台内也活跃着逾千名国内外专业投资人，以及数以万计的互联网创业者。</p><p>36氪融资的理念在于，创造一个为创业者展示项目，吸引融资的平台，筛选并匹配优秀专业的投资机构和投资人。截止2015年4月为止，已有131个项目在平台挂牌融资，其中40+个已经完成融资，同时在后台申请挂牌的项目也已经超过3000家，这个数字每天都在被不断刷新。</p><ul><li>氪空间</li></ul><p>专业专注的创业项目线下孵化器。自2014年4月份上线以来，报名申请入驻氪空间的创业项目超过5000个。到2014年10月为止，已有29家团队入驻过氪空间。第一批项目共12个，其中11个完成融资并孵化成功。全部项目总融资额达到 5000 万人民币，最大单笔融资 1000 万，入驻后平均融资周期仅为1个月 。</p><ul><li>36氪主站 www.36kr.com</li></ul><p>自2010年年底主站上线至今，36氪媒体获得了高速的成长。目前主站单月UV超过500万，PV达到1000万以上。36氪的科技媒体部门坚持不收车马费，不发软文，自觉做最有原则的科技媒体。</p><h3 id=\"toc_2\">36氪的各种线下活动</h3><ul><li>36氪开放日</li></ul><p>从2011到2014年，8大国内外城市（北京、上海、杭州、广州、深圳、成都、香港、硅谷），36氪共举办了33场开放日，为万千优质初创产品提供一战成名的舞台。截止2014年9月，共有251个创业团队在36氪开放日的平台上展示自己的项目；超过1800位投资人到现场参与、点评项目；超过20000名观众，8000名创业者到场。</p><ul><li>WISE 互联网创业者大会</li></ul><p>WISE 1.0 互联网创业者大会于2014年10月在北京国家会议中心举办，会程两天总共到场观众近4000人。其中创业者的比例占到了43%，投资人接近15%，互联网从业者28％。可以说有接近9成的观众都是专注于互联网创业的专业人士。</p><ul><li>WISE Talk 主题沙龙</li></ul><p>着眼于科技与人文交融的跨界式小型沙龙活动。</p><ul><li>创业者酒会</li></ul><p>为创业者和投资人营造封闭的交流空间，促进投融资的意向交流。</p><ul><li>氪空间路演日 Space Day</li></ul><p>氪空间项目集中路演，为待融资项目提供展示舞台。</p><ul><li>氪空间毕业礼</li></ul><p>定期为氪空间毕业团队举办的毕业派对。对毕业项目的融资情况、团队成长、产品进步进行总结，并邀请投资人和媒体人一同关注这些毕业团队。毕业礼上氪空间新一期入驻团队们也会一同亮相，与毕业团队一起见证、传承氪空间创业文化。</p><h3 id=\"toc_3\">获得荣誉</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.&nbsp; 2012年6月30日，36氪获得2012（首届）中国新媒体峰会“中国新媒体30强”荣誉<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. 2012年10月30日，36氪获得第六届”2012 ChinaVenture中国投资年会”“最具影响力创业媒体”荣誉称号；<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. 2012年12月27日，36氪获得“2012搜狐移动新媒体年度成就奖”荣誉称号；<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. 2013年5月24日，36氪获得中关村授予的“创新型孵化器”；<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. 2014年1月15日，36氪获得“2013中关村十大新锐品牌”。<h3 id=\"toc_4\">我们所做的一切，只为让创业变得更加简单。</h3>              <p>你可以在这里找到我们： 新浪微博：@36氪；腾讯微博：@36氪；微信公众平台：搜索“36氪”或扫描下面的二维码：</p>              <p>氪星正在招募包括全职作者在内的多个职位人才，如果你喜欢研究和分享新产品，对互联网创业感觉兴趣，欢迎加入我们。具体请查看加入我们。</p>            </section></article></div></div></div>															', '0', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('48', '92', '徐小平', '天使投资人', '1449910600', 'DCM资本成立于1996年，DCM资本是一家风险投资公司，管理着超过25亿美元的资金。从 1996 年以来，在美国和亚洲地区已投资超过200家高科技企业。\r\n该机构主要投资于移动技术、消费者互联网、软件与服务领域的种子期、早期和中期的创业公司。', '', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('49', '92', '徐小平', 'adfasf阿萨德飞洒发的', '1449912012', '是多发发斯蒂芬阿斯顿发生打发第三方阿斯蒂芬阿斯蒂芬阿斯蒂芬阿斯顿发送到发斯蒂芬阿斯蒂芬阿斯蒂芬阿斯蒂芬啥地方啥地方阿斯蒂芬阿斯蒂芬啥地方 ', '&nbsp;阿迪司法所德国大使馆按时到岗水果时代时代啥地方大师傅阿斯蒂芬阿斯蒂芬					', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('50', '88', '', '', '1449950709', '', '沙发斯蒂芬啥地方啥地方啥地方啥地方啥地方					', '0', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('51', '93', '123123', '213123', '1449955753', '123123', '12312312										', '1', '1', '0', '20');
INSERT INTO `easy_article` VALUES ('52', '93', '12312', '1231231', '1449957500', '123123', '123123										', '1', '1', '0', '10');
INSERT INTO `easy_article` VALUES ('53', '93', '啥地方啥地方', '啥地方啥地方', '1449959457', '打发斯蒂芬', '沙发斯蒂芬										', '1', '1', '0', '10');
INSERT INTO `easy_article` VALUES ('54', '76', '在哪里寻找相关关键词，关键词工具如何使用？', '2222', '1450015278', '众所周知搜索推广账户是由账户、推广计划、推广单元和关键词/创意四个层级构成的。今天我们来讲讲关键词方面的问题：在哪里可以找到相关关键词和关键词工具如何使用？', '<span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">众所周知搜索推广账户是由账户、推广计划、推广单元和关键词/创意四个层级构成的。今天我们来讲讲关键词方面的问题：在哪里可以找到相关关键词和关键词工具如何使用？</span><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　先介绍下什么是关键词：</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　关键词是您精心挑选的、用以定位潜在客户的字词。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　网民在搜索时会使用一些特定的字词，称之为搜索词。这些搜索词体现了网民对信息的需求，可能涵盖了工作、生活的方方面面，您可以将其中蕴含商业价值的字词挑选出来，作为关键词提交到搜索推广系统中。而这些词我们就称为关键词。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　<strong>　在哪里可以找到相关关键词？</strong></span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　您可以通过以下几个入口进入关键词工具：</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　第一， 在您新建计划/单元过程中，系统会引导您进入关键词工具的页面；</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　第二，您可以从百度推广账户首页进入“搜索推广”，然后在“工具栏”中进入“关键词工具”；</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　第三，您可以进入已有的某个推广单元，点击页面的“添加关键词”按钮，使用关键词工具。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　另外，您还可以在推广助手平台中使用关键词工具。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　<strong>如何使用关键词工具</strong></span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　工具栏点击“关键词工具”，即可开始使用关键词工具。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　您也可以在关键词/创意列表中点击“添加关键词”按钮使用。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　对于关键词结果，您可以修改选定地域、设置高级查询，并进行排序、下载、添加关键词等操作。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　对于关键词结果，您可以：</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　1.修改选定地域</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　搜索结果是根据您为账户设置的推广地域量身定制的。例如，您的推广地域是北京、上海，系统将根据这两个城市的日均搜索量和竞争激烈程度为您寻找关键词。此时，某关键词的日均搜索量即最近七天内北京、上海两个城市的网民日均搜索次数之和。如有需要，您可以方便地点击结果上方的链接，调整结果所参照的地域。</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　2.设置高级条件的查询</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　点击关键词输入框右侧的“高级查询”链接，您可以设置两个过滤条件：否定词和地域拓展词并查看“最高搜索量出现月份”数据</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　3.按某一指标排序</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　点击“关键词”、“日均搜索量”、“竞争激烈程度”等指标，对关键词进行排序</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　4.下载选中的关键词</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　选择全部关键词（勾选“关键词”左侧的方框）或多个关键词，点击“下载关键词”链接来下载关键词列表</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　5.添加至现有的推广计划/推广单元</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　1） 选择您希望添加的关键词，点击“添加”链接，或同时选择多个关键词，点击上方的“添加关键词”</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">　　2） 为关键词选择匹配方式，将关键词保存到指定的推广计划和推广单元中即可</span></p><p style=\"line-height: 2em; margin-bottom: 15px;\"><span style=\"font-family:微软雅黑, \'Microsoft YaHei\';font-size: 14px;\">&nbsp; &nbsp; &nbsp; &nbsp;下一节将会讲到：<a href=\"http://www.baituibao.com/baike/semjjzs/20151211/705.shtml\" target=\"_blank\">SEM关键词分类如何做才合理？</a></span></p>					', '0', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('37', '76', '马鑫VS江良元', '是的', '1449712008', '《每日新闻》是日本6大主流报系中反安倍色彩较浓的报纸，它在5-6日实施了一次全国舆论调查，结果发现，安倍内阁的支持率已经超过不支持率，达到了43%，实现了今年7月以来的大逆转，显示安倍政权即使在反安倍的阵营中，也获得了很高的人气。', '<span style=\"font-family:SimSun;font-size: 14px;\">《每日新闻》是日本6大主流报系中反安倍色彩较浓的报纸，它在5-6日实施了一次全国舆论调查，结果发现，安倍内阁的支持率已经超过不支持率，达到了43%，实现了今年7月以来的大逆转，显示安倍政权即使在反安倍的阵营中，也获得了很高的人气。</span><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　安倍当首相还能当到什么时候？谁也无法预计。理论上，他作为自民党总裁，在今年9月刚刚获得连任后，至少可以保证自己把首相当到2018年。但是，安倍首相本人也许更期望能够在2020年的<a href=\"http://blog.sina.com.cn/lm/z/sakura/\" class=\"yinghua_a\" target=\"_blank\">东京</a>奥运会开幕式上，能够以首相的身份主持。这样一算的话，安倍至少还想当5年。当然，自己想当，和政局是否允许他当，那是完全的两码事。也就是说，安倍首相在2016年突然辞职的可能性也不能否定。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\"><br /></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><a href=\"http://photo.blog.sina.com.cn/showpic.html#blogid=4cd1c1670102vyok&amp;url=http://album.sina.com.cn/pic/001pdJDVgy6XAWgjReof8\" target=\"_blank\"><img src=\"http://s9.sinaimg.cn/mw690/001pdJDVgy6XAWgjReof8&amp;690\" style=\"margin: 0pt auto;display:block\" name=\"image_operate_75721449503427964\" alt=\"日本人最期望谁当下届首相？\" title=\"日本人最期望谁当下届首相？\" height=\"502\" width=\"690\" /></a><br /><br /></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　虽然安倍首相的支持率在出现回升，但是日本的一些八卦媒体也不断爆出“安倍病危”的消息，似乎是期望他早早下台，甚至希望他得什么恶病。不过，即使平时繁忙的工作都以分钟算，安倍首相看上去还是比较健康，距离下台似乎还有很长一段路要走。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　不管安倍首相是不是期望自己如何长期执政，日本的媒体已经开始为他“安排后事”。日本另一家著名的报纸《朝日新闻》，最近对自民党所属的500多名国会议员进行了一次问卷调查：你认为谁最适合当下一届的首相？结果显示，期望安倍继续当首相的比例仅为7%，而排在他前面的，是他的政治对手石破茂，比例高达18%，名列第一。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\"><br /></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><a href=\"http://photo.blog.sina.com.cn/showpic.html#blogid=4cd1c1670102vyok&amp;url=http://album.sina.com.cn/pic/001pdJDVgy6XAWzSL11bb\" target=\"_blank\"><img src=\"http://s12.sinaimg.cn/mw690/001pdJDVgy6XAWzSL11bb&amp;690\" style=\"margin: 0pt auto;display:block\" name=\"image_operate_28831449503428503\" alt=\"日本人最期望谁当下届首相？\" title=\"日本人最期望谁当下届首相？\" height=\"1125\" width=\"690\" /></a><br /><br /></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　日本人为何希望石破茂来接替安倍当首相呢？首先是石破茂的性格稳定性让大家有一种安定感。石破茂虽然担任过两届的防卫大臣，属于鹰派的政治家，但是无论是在日美安保，还是日中关系，他都坚持不偏不倚的立场与观点，尤其是他说话的语气一直是稳稳当当，因此让许多人认为，石破茂当首相，不会像安倍那样冒进和激昂。其二，石破茂由于其说话中肯，观点新颖，因此一直是日本各大电视台的第一嘉宾，虽然眼睛有些斜视，但是仍然获得许多观众的喜爱，知名度很高。其三，石破茂担任过执政的自民党干事长，并协助安倍首相取得了众议院和参议院大选的胜利，是安倍政权建立的功劳者。也就是说，安倍首相有今天，离不开石破茂的努力。但是，安倍首相在解除他的干事长职务后，给了他一个难有建树且吃力不讨好的职位－－地方创生大臣，被舆论认为是安倍首相刻意架空石破茂政治影响力的一种做法，因此许多人对他颇有同情之感。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\"><br /></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><a href=\"http://photo.blog.sina.com.cn/showpic.html#blogid=4cd1c1670102vyok&amp;url=http://album.sina.com.cn/pic/001pdJDVgy6XAWioimD63\" target=\"_blank\"><img src=\"http://s4.sinaimg.cn/mw690/001pdJDVgy6XAWioimD63&amp;690\" style=\"margin: 0pt auto;display:block\" name=\"image_operate_98391449503429869\" alt=\"日本人最期望谁当下届首相？\" title=\"日本人最期望谁当下届首相？\" height=\"920\" width=\"690\" /></a></p><div style=\"text-align: center;\"><span style=\"line-height: normal; -webkit-text-stroke-width: initial;\">野心勃勃的石破茂</span></div><br /><br /><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　石破茂在今年9月已经组建了自己的党内派阀，明确表示将要接安倍的班。即使如此，民众也没有对他赤裸裸的野心表示反感，反而觉得他做人光明磊落。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　除石破茂之外，另一位与安倍首相并列第二位的政治家，是一位年近33岁的少壮派人物，名叫“小泉进次郎”。小泉进次郎是日本前首相小泉纯一郎的儿子，他接替父亲的选区当选众议员议员后，一直以敢说敢言，独行独立的“小泉家风”从事政治活动，在日本国民中人气十足，被称为是“自民党王子”。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　小泉进次郎担任过自民党青年局长，此后担任过安倍第二次内阁的复兴副大臣。在今年9月的安倍内阁改造中，安倍首相原计划起用小泉进次郎首进内阁担任大臣，但是没有想到，小泉认为自己还太年轻，还不具备当大臣的资格，因此拒绝了安倍首相的邀请。小泉进次郎的这一决定，让日本民众对他刮目相看－－这个人心很大，不会计较个人荣誉得失。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　在小泉进次郎拒绝出任大臣之后，安倍首相任命他出任自民党的农林水产部会部会长。这一职务看起来很小，但是是自民党历代首相大多担任过的一个“出道”职位。而对于安倍政权来说，因为面临日本加盟TPP引发的农副产品关税问题在国会的辩论与决断，因此这一个职位是自民党目前最为重要的职务之一，部会长担负着与中央各相关机关的协调和平息党内不满势力的重任，是一个很锻炼人的岗位。安倍首相的这一安倍，也被认为是他刻意培养自己政治兄长的儿子将来接任首相位子的一个重要举措。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\"><br /></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><a href=\"http://photo.blog.sina.com.cn/showpic.html#blogid=4cd1c1670102vyok&amp;url=http://album.sina.com.cn/pic/001pdJDVgy6XAWpc8Tnf9\" target=\"_blank\"><img src=\"http://s10.sinaimg.cn/mw690/001pdJDVgy6XAWpc8Tnf9&amp;690\" style=\"margin: 0pt auto;display:block\" name=\"image_operate_78021449503430706\" alt=\"日本人最期望谁当下届首相？\" title=\"日本人最期望谁当下届首相？\" height=\"460\" width=\"690\" /></a></p><div style=\"text-align: center;\"><span style=\"line-height: normal; -webkit-text-stroke-width: initial;\">青年俊才小泉进次郎</span></div><br /><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　自然，小泉进次郎由于太年轻，不可能成为安倍首相的接班人。但是，石破茂成为“安倍后”的第一首相候选人，应该是不争的事实。不过，石破茂也不能太过于乐观，如果他领导的政治势力与安倍领导的政治势力出现对立的话，一定有人会渔翁得利，这个人就是现任自民党干事长的谷垣祯一。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　这位性格沉稳，人生悲情的政治家，在自民党于2009年下野时，无人收拾自民党残局，他临危受命，出任自民党总裁。而在自民党重新夺取政权时，夫人病故，因此好事都没有轮到过他，颇受党内各派人士同情。即使当过党总裁，又屈任党干事长，谷垣祯一毫无怨言，而且对安倍对石破茂都是一碗水端平，被认为是党内最佳的“和事佬”。前几天，他还带领日本执政党代表团访问北京。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\"><br /></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><a href=\"http://photo.blog.sina.com.cn/showpic.html#blogid=4cd1c1670102vyok&amp;url=http://album.sina.com.cn/pic/001pdJDVgy6XAWslnyo08\" target=\"_blank\"><img src=\"http://s9.sinaimg.cn/mw690/001pdJDVgy6XAWslnyo08&amp;690\" style=\"margin: 0pt auto;display:block\" name=\"image_operate_82531449503431607\" alt=\"日本人最期望谁当下届首相？\" title=\"日本人最期望谁当下届首相？\" height=\"907\" width=\"690\" /></a></p><div style=\"text-align: center;\"><span style=\"line-height: normal; -webkit-text-stroke-width: initial;\">好男人石垣祯一</span></div><br /><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\">　　许多的推测只有在安倍下台后才能得到验证，但是民意和议员的政治恳望，也能让我们看到安倍之后将会有谁来掌控日本这一邻国。候选人就这么几个，我们不妨可以先做些和谐外交工作，提前沟通，预热友谊，也许会更有利于中日两国关系的改善与发展。</span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:SimSun;font-size: 14px;\"><br /></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:\'Hiragino Kaku Gothic pro\';font-size:16px;color:#323333;line-height: 23.11111068725586px; -webkit-text-stroke-color: rgb(50, 51, 51); background-color: rgb(255, 255, 255);\">&nbsp;<wbr> &nbsp;<wbr></wbr></wbr></span> <span style=\"font-family:\'Hiragino Kaku Gothic pro\';color:#323333;line-height: 23.11111068725586px; -webkit-text-stroke-color: rgb(50, 51, 51); background-color: rgb(255, 255, 255);\"><span style=\"font-size: 14px;\">&nbsp;<wbr>【荐读徐静波立体解读当今日本社会与日本人的最新著作《静观日本》，华文出版社出版，网上有售】</wbr></span></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><span style=\"font-family:\'Hiragino Kaku Gothic pro\';color:#323333;line-height: 23.11111068725586px; -webkit-text-stroke-color: rgb(50, 51, 51); background-color: rgb(255, 255, 255);\"><span style=\"font-size: 14px;\"><br /></span></span></p><p style=\"margin: 0px; line-height: normal; -webkit-text-stroke-color: rgb(0, 0, 0); -webkit-text-stroke-width: initial;\"><a href=\"http://photo.blog.sina.com.cn/showpic.html#blogid=4cd1c1670102vyok&amp;url=http://album.sina.com.cn/pic/001pdJDVgy6XBp5xxrd03\" target=\"_blank\"><img src=\"http://s4.sinaimg.cn/mw690/001pdJDVgy6XBp5xxrd03&amp;690\" style=\"margin: 0pt auto;display:block\" name=\"image_operate_34051449528240027\" alt=\"日本人最期望谁当下届首相？\" title=\"日本人最期望谁当下届首相？\" height=\"920\" width=\"690\" /></a></p>										', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('38', '77', '你知道我知道你不知道', '知道', '1449723944', '你知道我知道你不知道', '你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道你知道我知道你不知道															', '1', '1', '0', '11');
INSERT INTO `easy_article` VALUES ('39', '85', '阿斯顿发斯蒂芬', '啊发生地方', '1449865532', '阿斯顿法师打发斯蒂芬按时', '撒的发生大法师打发斯蒂芬					', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('40', '87', '1111111', '22222222222', '1449867508', '333333333', '4444444444															', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('41', '76', '13213', '123123123', '1449872292', '123123123', '123123123123					', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('42', '76', '3123', '123123123', '1449872310', '12312312312', '123123123123					', '1', '0', '0', '10');
INSERT INTO `easy_article` VALUES ('55', '78', 'O2O客户中心产品选型指南:环信移动客服让O2O从“重”变“轻”', '11111111111', '1450020411', '11月26日至27日，O2O行业盛会“2015上门O2O创业者峰会”在国家会议中心举行。环信移动客服作为全球首创全媒体智能云客服平台受邀参展本次盛会，同时环信CEO刘俊彦在主会场给大家带来主题演讲《环信移动客服，让O2O从“重”变“轻”》，分享了环信移动客服在O2O行业的探索，也给与会的100多家O2O企业客服中心产品选型方向上提出了建议', '<div class=\"main-content\">                            <p>11月26日至27日，O2O行业盛会“2015上门O2O创业者峰会”在国家会议中心举行。<a href=\"http://www.easemob.com/services\" target=\"_blank\">环信移动客服</a>作为全球首创全媒体智能云客服平台受邀参展本次盛会，同时环信CEO刘俊彦在主会场给大家带来主题演讲《<a href=\"http://www.easemob.com/services\" target=\"_blank\">环信移动客服</a>，让O2O从“重”变“轻”》，分享了<a href=\"http://www.easemob.com/services\" target=\"_blank\">环信移动客服</a>在O2O行业的探索，也给与会的100多家O2O企业客服中心产品选型方向上提出了建议。</p>                            <p style=\"text-align: center;\"><img src=\"http://www.easemob.com/event/o2o_selection_guide/img/content/1I3235262-0.png\" alt=\"\" /></p>                            <p>客户服务作为O2O行业很重的一环，随着国家互联网+战略的不断深化，国内以环信为典型代表的SaaS客服企业的迅速崛起，借助科技的力量，O2O行业将乘着SaaS客服的东风从“重”变“轻”。</p>                            <p>环信作为战斗在第一线的客服软件提供商，深切的感受到互联网+时代O2O行业的巨大改变，环信CEO刘俊彦认为这其中有三大趋势：</p>                            <p><strong>1. 移动为先。5.94亿手机网民，通过移动端使用O2O服务将成为趋势。</strong></p>                            <p>我们经常说，客户在哪，客户服务就要跟到哪。现在客户都去哪了?客户已经去了移动端，如果不做好移动端的客户服务，不但订单会丢失，客户会丢失，甚至公司也可能被那些更重视移动端的用户服务体验的公司，更能迅速把握时代大趋势的公司所颠覆。</p>                            <p><strong>2. 全媒体全渠道。信息渠道分散，客服人员要同时在不同渠道中切换，耗时耗力。</strong></p>                            <p>一个O2O企业根据不同渠道配备几套不同客服产品的时代将一去不复返，<a href=\"http://www.easemob.com/services\" target=\"_blank\">环信移动客服</a>可以将网页在线客服(包括H5)、社交媒体客服(微博、微信)、移动端客服和呼叫中心等多种渠道统一接入到一个客服后台管理，而且相互间的数据互通。环信认为在语音呼叫中心集成到客户中心这个领域，还处于刚刚起步的阶段，刚刚看到有零星的客户做这方面的尝试。但预计到明年上半年结束的时候，这个可能会成为客服行业的标配。</p>                            <p><strong>3. 智能客服机器人。客服人员每天重复高频重复性的问题，是对人力的浪费。</strong></p>                            <p>业务工具型机器人配合知识库能够帮助消费者解答80%的常见问题，剩下的20%中可能是之前没有出现在训练数据中的特殊问题，也可能有刚刚出现的新的知识，这部分问题依然需要人工干预，而人工干预这部分问题的过程又会产生新的训练机器人用的有效数据，可以进一步提高机器人的应答范围和准确率，使用新的数据训练和修正过的机器人就可以解答更多更新的问题。如此循环，在机器和人工的协作配合之下，高效低耗的解决客户的问题，同时不断的更新和提升自己的能力和效率，这才是最高效的工作方式。</p>                            <p>结合以上三大趋势，环信CEO接着给现场1500多名观众分享了在线客服智能机器人技术在O2O行业的最佳实践：</p>                            <p>机器人能做好什么?</p>                            <p style=\"text-align: center;\"><img src=\"http://www.easemob.com/event/o2o_selection_guide/img/content/1I32325B-1.png\" alt=\"\" /></p>                            <ol><li>在狭小闭域下问题的精准匹配；</li><li>文字IVR；</li><li>其他辅助手段。如辅助搜索，辅助回答；</li><li>其他一些局部的封闭环境下的机器人应用，如客服满意度调查时的用户不满意时的原因录入或唤起人工。</li></ol>                            <p>最后，环信CEO详解了O2O行业客户中心产品选型细节：</p>                            <p>1.移动端技术。</p>                            <p style=\"text-align: center;\"><img src=\"http://www.easemob.com/event/o2o_selection_guide/img/content/1I323I64-2.png\" alt=\"\" /></p>                            <p>2.全媒体，全渠道。</p>                            <p style=\"text-align: center;\"><img src=\"http://www.easemob.com/event/o2o_selection_guide/img/content/1I3232Z5-3.png\" alt=\"\" /></p>                            <p>3.智能客服机器人。</p>                            <p style=\"text-align: center;\"><img src=\"http://www.easemob.com/event/o2o_selection_guide/img/content/1I323J57-4.png\" alt=\"\" /></p>                            <p>刘俊彦最后总结到：“机器人不是万能的，但没有机器人是万万不能的。O2O企业客服产品应该契合移动、全媒体、智能三大趋势，不断补强自己的产品短板，方能让O2O从“重”变“轻”，在行业竞争中拔得头筹。”</p>                        </div>										', '0', '1', '0', '10');
INSERT INTO `easy_article` VALUES ('56', '76', '111', '111', '1450116811', '111', '11111111111111					', '0', '0', '0', '10000');
INSERT INTO `easy_article` VALUES ('57', '76', '111', '111', '1450116819', ' 111', '111					', '0', '0', '0', '10000');
INSERT INTO `easy_article` VALUES ('58', '76', '111', '111', '1450116836', '111', '111					', '0', '0', '0', '10000');
INSERT INTO `easy_article` VALUES ('59', '76', '111111', '', '1450116843', '111111', '111111111111					', '0', '0', '0', '10000');
INSERT INTO `easy_article` VALUES ('60', '76', '111111111', '111111', '1450116852', '111111', '111111					', '0', '0', '0', '10000');
INSERT INTO `easy_article` VALUES ('65', '76', '啥地方 ', ' 啥地方', '1450241151', '沙发斯蒂芬', '防守打法					', '0', '0', '0', '10000');
INSERT INTO `easy_article` VALUES ('62', '93', '1111', '', '1450118399', '22', '323213123123					', '0', '1', '0', '10000');
INSERT INTO `easy_article` VALUES ('63', '93', '23123123', '', '1450118407', '12312', '1231231231233					', '0', '1', '0', '10000');
INSERT INTO `easy_article` VALUES ('64', '93', '123舒服舒服', '', '1450118417', '12312', '12 大使馆发大水										', '0', '1', '0', '10000');

-- -----------------------------
-- Table structure for `easy_banner`
-- -----------------------------
DROP TABLE IF EXISTS `easy_banner`;
CREATE TABLE `easy_banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `sort` int(6) NOT NULL DEFAULT '10',
  `url` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_banner`
-- -----------------------------
INSERT INTO `easy_banner` VALUES ('50', '模拟卷', '100', './Uploads/Picture/banner/566cafbec2d37.jpg', '', '1');
INSERT INTO `easy_banner` VALUES ('49', '打发斯蒂芬', '10', './Uploads/Picture/banner/566caf2860bb9.jpg', '', '1');
INSERT INTO `easy_banner` VALUES ('56', '111', '100', './Uploads/Picture/banner/566f0b63322aa.png', '', '1');
INSERT INTO `easy_banner` VALUES ('57', '2322', '100', './Uploads/Picture/banner/566f0b6cd408a.jpg', '', '1');
INSERT INTO `easy_banner` VALUES ('58', '1122', '100', './Uploads/Picture/banner/566f0b7766550.jpg', '', '1');
INSERT INTO `easy_banner` VALUES ('59', '1123', '100', './Uploads/Picture/banner/566f0b81eac41.jpg', '', '1');

-- -----------------------------
-- Table structure for `easy_category`
-- -----------------------------
DROP TABLE IF EXISTS `easy_category`;
CREATE TABLE `easy_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(6) NOT NULL DEFAULT '100',
  `modelid` tinyint(1) NOT NULL DEFAULT '0',
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  `isverify` tinyint(1) NOT NULL DEFAULT '1',
  `ispush` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_category`
-- -----------------------------
INSERT INTO `easy_category` VALUES ('71', '南开好项目', '0', '20', '0', '1', '1', '0');
INSERT INTO `easy_category` VALUES ('72', '私董会', '0', '56', '1', '1', '1', '0');
INSERT INTO `easy_category` VALUES ('73', '投资机构', '0', '40', '1', '1', '1', '0');
INSERT INTO `easy_category` VALUES ('74', '创投学院', '0', '50', '0', '1', '1', '0');
INSERT INTO `easy_category` VALUES ('75', '赛区', '0', '60', '0', '1', '1', '0');
INSERT INTO `easy_category` VALUES ('76', '创投学院', '74', '10', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('77', '媒体资讯', '74', '20', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('78', '深圳', '75', '10', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('79', '天津', '75', '20', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('80', '上海', '75', '30', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('81', '郑州', '75', '40', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('82', '大连', '75', '50', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('83', '成都', '75', '60', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('84', '昆明', '75', '70', '0', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('85', '媒体机构', '73', '20', '1', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('86', '关于我们', '0', '70', '2', '1', '1', '0');
INSERT INTO `easy_category` VALUES ('87', '投资机构', '73', '10', '1', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('88', '关于我们', '86', '10', '2', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('89', '联系我们', '86', '20', '2', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('90', '加入我们', '86', '30', '2', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('91', '服务与支持', '86', '40', '2', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('92', '私董会', '72', '100', '1', '0', '1', '0');
INSERT INTO `easy_category` VALUES ('93', '南开好项目', '71', '100', '0', '0', '1', '0');

-- -----------------------------
-- Table structure for `easy_comment`
-- -----------------------------
DROP TABLE IF EXISTS `easy_comment`;
CREATE TABLE `easy_comment` (
  `commend_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL,
  `pubtime` int(11) NOT NULL,
  PRIMARY KEY (`commend_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_comment`
-- -----------------------------
INSERT INTO `easy_comment` VALUES ('1', '1', '12', '很受用，学习了哦', '0', '1395025593');
INSERT INTO `easy_comment` VALUES ('2', '1', '12', '以后一定要避免呀', '0', '1395025898');
INSERT INTO `easy_comment` VALUES ('3', '1', '12', '测试一下态度方法', '0', '1395025947');
INSERT INTO `easy_comment` VALUES ('4', '1', '12', '继续进行态度测试', '0', '1395025991');
INSERT INTO `easy_comment` VALUES ('5', '1', '12', '继续测试吧', '0', '1395026059');
INSERT INTO `easy_comment` VALUES ('6', '1', '12', '测试加1', '0', '1395026108');
INSERT INTO `easy_comment` VALUES ('7', '1', '12', '支持一下', '0', '1395026145');
INSERT INTO `easy_comment` VALUES ('8', '1', '12', '不喜欢，反对', '0', '1395026174');
INSERT INTO `easy_comment` VALUES ('9', '1', '12', '我喜欢这个', '0', '1395026221');
INSERT INTO `easy_comment` VALUES ('10', '1', '12', '特别喜欢这篇文章', '0', '1395026258');
INSERT INTO `easy_comment` VALUES ('11', '1', '29', '第一次看到辽阔的大海 内心是非常的欢乐高兴', '0', '1395026308');
INSERT INTO `easy_comment` VALUES ('12', '1', '29', '爱大海', '0', '1395026315');
INSERT INTO `easy_comment` VALUES ('13', '1', '29', '特别喜欢大海', '0', '1395026913');
INSERT INTO `easy_comment` VALUES ('14', '1', '29', '大海的感觉就是干净', '0', '1395026949');
INSERT INTO `easy_comment` VALUES ('15', '1', '31', '特别喜欢', '0', '1395034556');
INSERT INTO `easy_comment` VALUES ('16', '4', '17', '我是asdf发表的评论', '1', '1395057066');
INSERT INTO `easy_comment` VALUES ('17', '12', '16', '我喜欢你', '0', '1395057095');
INSERT INTO `easy_comment` VALUES ('18', '4', '17', '我是asdf发表的评论', '0', '1395057107');
INSERT INTO `easy_comment` VALUES ('19', '12', '16', '你好啊 啊啊', '0', '1395057125');
INSERT INTO `easy_comment` VALUES ('20', '13', '29', '这是一个号好文章', '0', '1395057128');
INSERT INTO `easy_comment` VALUES ('21', '14', '29', 'easycms正式上线', '0', '1395057217');
INSERT INTO `easy_comment` VALUES ('22', '12', '17', '好开心啊', '0', '1395057222');
INSERT INTO `easy_comment` VALUES ('23', '12', '11', '好开心啊啊啊啊啊', '0', '1395057236');
INSERT INTO `easy_comment` VALUES ('24', '15', '11', '真他妈的长', '0', '1395057304');
INSERT INTO `easy_comment` VALUES ('30', '20', '31', '方巾阔服', '0', '1395060071');
INSERT INTO `easy_comment` VALUES ('31', '1', '35', '我操你没', '0', '1395062109');

-- -----------------------------
-- Table structure for `easy_fields`
-- -----------------------------
DROP TABLE IF EXISTS `easy_fields`;
CREATE TABLE `easy_fields` (
  `fields_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `issystem` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fields_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_fields`
-- -----------------------------
INSERT INTO `easy_fields` VALUES ('1', 'title', 'EasyCMS测试站', '1');
INSERT INTO `easy_fields` VALUES ('2', 'description', 'EasyCMS是轻量级可扩展的开源内容管理程序，遵循Apache2开源协议发布', '1');
INSERT INTO `easy_fields` VALUES ('3', 'copyright', '© 2014EasyCMS  版权所有 ', '1');
INSERT INTO `easy_fields` VALUES ('4', 'announcement', 'EasyCMS是轻量级可扩展的开源内容管理程序，<span style=\"color: rgb(34, 34, 34); font-family: Consolas, \'Lucida Console\', monospace; white-space: pre-wrap;\"><strong>遵循Apache2开源协议发布</strong></span><br />本站是EasyCMS的测试站<br />EasyCMS源码下载地址：<a href=\"http://d.easycms.cc/\">http://d.easycms.cc/</a><br /><p><span style=\"color:#999999;\">开发人员：&nbsp;</span></p><p><span style=\"color:#999999;\">陈捷c@easycms.cc</span></p><p><span style=\"color:#999999;\">石武浩s@easycms.cc</span></p><p><span style=\"color:#999999;\">柳杰彬l@easycms.cc</span></p>', '1');
INSERT INTO `easy_fields` VALUES ('5', 'ad', '', '1');

-- -----------------------------
-- Table structure for `easy_link`
-- -----------------------------
DROP TABLE IF EXISTS `easy_link`;
CREATE TABLE `easy_link` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `isverify` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


-- -----------------------------
-- Table structure for `easy_member_user`
-- -----------------------------
DROP TABLE IF EXISTS `easy_member_user`;
CREATE TABLE `easy_member_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL,
  `photo` char(100) NOT NULL,
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `regip` char(15) NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_member_user`
-- -----------------------------
INSERT INTO `easy_member_user` VALUES ('1', 'chenjie', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@163.com', '1', '1395054738_3708650.jpg', '1394962254', '127.0.0.1', '1');
INSERT INTO `easy_member_user` VALUES ('2', '海浪', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@163.com', '1', '', '1395056767', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('3', '柳杰斌', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxc@qq.com', '1', '1395056798_5209489.jpeg', '1395056770', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('4', 'asdf', 'c44a471bd78cc6c2fea32b9fe028d30a', 'asdf@qq.com', '1', '1395056935_8331581.jpg', '1395056795', '192.168.191.3', '0');
INSERT INTO `easy_member_user` VALUES ('5', '水熊', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@126.com', '1', '', '1395056809', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('6', '枯叶', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxc@qq.com', '1', '1395056855_5534524.jpg', '1395056840', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('7', 'hello', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@gmail.com', '1', '', '1395056845', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('8', '爱美女', '86c09978e5d437ea471363219a52cfde', 'c@chenjie.info', '1', '1395056902_8751554.jpg', '1395056890', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('9', 'kaka', 'ecb97ffafc1798cd2f67fcbc37226761', '215483018@qq.com', '1', '1395056954_2445532.jpg', '1395056932', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('10', '活雷锋', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@126.com', '1', '1395056950_8144819.jpg', '1395056939', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('11', 'kaixin', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@163.com', '1', '1395056999_1254422.jpg', '1395056991', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('12', '喜欢你', '86c09978e5d437ea471363219a52cfde', 'chenjiesuper@163.com', '1', '', '1395057068', '192.168.191.2', '0');
INSERT INTO `easy_member_user` VALUES ('13', 'deadleaves', 'ecb97ffafc1798cd2f67fcbc37226761', '215483018@qq.com', '1', '1395057087_7248337.jpeg', '1395057074', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('14', '石武浩', 'c44a471bd78cc6c2fea32b9fe028d30a', 'asdf@qq.com', '1', '', '1395057168', '192.168.191.3', '0');
INSERT INTO `easy_member_user` VALUES ('15', '明天会更好', 'a8f5f167f44f4964e6c998dee827110c', '215483018@qq.com', '1', '1395057225_2360808.jpg', '1395057199', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('17', '柳杰彬', 'ecb97ffafc1798cd2f67fcbc37226761', '215483018@qq.com', '1', '1395057673_5745327.JPG', '1395057618', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('18', 'xx', 'c44a471bd78cc6c2fea32b9fe028d30a', 'xx@qq.com', '1', '1395057675_2935838.jpg', '1395057657', '192.168.191.3', '0');
INSERT INTO `easy_member_user` VALUES ('19', '妈妈说我很乖', 'ecb97ffafc1798cd2f67fcbc37226761', 'zxc@qq.com', '1', '1395057944_1834329.jpg', '1395057925', '192.168.191.1', '0');
INSERT INTO `easy_member_user` VALUES ('20', 'dead', 'ecb97ffafc1798cd2f67fcbc37226761', '215483018@qq.com', '1', '1395059700_2302750.JPG', '1395059351', '192.168.191.1', '1');
INSERT INTO `easy_member_user` VALUES ('21', '啊啊啊啊啊', 'e09c80c42fda55f9d992e59ca6b3307d', '916402586@qq.com', '1', '', '1395153974', '120.192.231.89', '0');
INSERT INTO `easy_member_user` VALUES ('22', '601301724@qq.co', '25f9e794323b453885f5181f1b624d0b', '601301724@qq.com', '1', '1395381637_2639038.png', '1395381599', '123.161.203.252', '0');
INSERT INTO `easy_member_user` VALUES ('23', 'zhangjmy', 'e10adc3949ba59abbe56e057f20f883e', 'zhangjmy@163.com', '1', '', '1395386778', '14.18.54.240', '0');
INSERT INTO `easy_member_user` VALUES ('24', 'eysajan', '877024855c92288d16c1df4bd1b647c6', '409766792@qq.com', '1', '', '1395408984', '49.113.234.226', '0');
INSERT INTO `easy_member_user` VALUES ('25', 'a123456', 'edeb1e9ed54c7692c9c4ba413848efc9', 'sadasa@qq.com', '1', '1395476310_7538268.jpg', '1395476257', '27.14.188.67', '0');
INSERT INTO `easy_member_user` VALUES ('26', 'mike33', '88e665b0518ec8418af4d49a2dad9694', '10579272@qq.com', '1', '', '1395495311', '122.241.143.64', '0');
INSERT INTO `easy_member_user` VALUES ('27', 'liphidge', '41506481820b3265f5053e8c9dd614c1', 'long8782@126.com', '1', '', '1395497554', '119.181.154.249', '0');
INSERT INTO `easy_member_user` VALUES ('28', 'eric', 'e10adc3949ba59abbe56e057f20f883e', '2448290642@qq.com', '1', '', '1395501532', '110.210.30.106', '0');

-- -----------------------------
-- Table structure for `easy_node`
-- -----------------------------
DROP TABLE IF EXISTS `easy_node`;
CREATE TABLE `easy_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_node`
-- -----------------------------
INSERT INTO `easy_node` VALUES ('1', 'Admin', '后台应用', '1', '后台应用', '0', '0', '1');
INSERT INTO `easy_node` VALUES ('2', 'Rbacuser', 'RBAC用户管理', '1', 'RBAC用户管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('3', 'Rbacrole', 'RBAC角色管理', '1', 'RBAC角色管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('4', 'Rbacnode', 'RBAC节点管理', '1', 'RBAC节点管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('5', 'Rbacaccess', 'RBAC权限分配', '1', 'RBAC权限分配', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('62', 'Database', '数据库管理', '1', '数据库管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('7', 'Link', '友情连接管理', '1', '友情连接管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('8', 'Plugin', '插件管理', '1', '插件管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('9', 'Comment', '文章评论管理', '1', '文章评论管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('10', 'Articlem', '文章内容管理', '1', '文章内容管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('11', 'Category', '文章分类管理', '1', '文章分类管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('12', 'add', '添加用户', '1', '添加用户', '0', '2', '3');
INSERT INTO `easy_node` VALUES ('13', 'edit', '修改用户', '1', '修改用户', '0', '2', '3');
INSERT INTO `easy_node` VALUES ('14', 'delete', '删除用户', '1', '删除用户', '0', '2', '3');
INSERT INTO `easy_node` VALUES ('15', 'index', '浏览系统用户', '1', '浏览系统用户', '0', '2', '3');
INSERT INTO `easy_node` VALUES ('16', 'edit', '修改角色', '1', '修改角色', '0', '3', '3');
INSERT INTO `easy_node` VALUES ('17', 'delete', '删除角色', '1', '删除角色', '0', '3', '3');
INSERT INTO `easy_node` VALUES ('18', 'add', '添加角色', '1', '添加角色', '0', '3', '3');
INSERT INTO `easy_node` VALUES ('19', 'index', '浏览角色', '1', '浏览角色', '0', '3', '3');
INSERT INTO `easy_node` VALUES ('20', 'editpwd', '修改密码', '1', '修改密码', '0', '4', '3');
INSERT INTO `easy_node` VALUES ('21', 'edit', '修改用户', '1', '修改用户', '0', '4', '3');
INSERT INTO `easy_node` VALUES ('22', 'delete', '删除用户', '1', '删除用户', '0', '4', '3');
INSERT INTO `easy_node` VALUES ('23', 'add', '添加用户', '1', '添加用户', '0', '4', '3');
INSERT INTO `easy_node` VALUES ('24', 'index', '浏览节点', '1', '浏览节点', '0', '4', '3');
INSERT INTO `easy_node` VALUES ('25', 'edit', '权限浏览', '1', '权限浏览', '0', '5', '3');
INSERT INTO `easy_node` VALUES ('56', 'User', '会员管理', '1', '会员管理', '0', '1', '2');
INSERT INTO `easy_node` VALUES ('63', 'index', '数据还原', '1', '数据还原', '0', '62', '3');
INSERT INTO `easy_node` VALUES ('29', 'add', '添加连接', '1', '添加连接', '0', '7', '3');
INSERT INTO `easy_node` VALUES ('30', 'edit', '修改连接', '1', '修改连接', '0', '7', '3');
INSERT INTO `easy_node` VALUES ('31', 'delete', '删除连接', '1', '删除连接', '0', '7', '3');
INSERT INTO `easy_node` VALUES ('32', 'index', '浏览友情连接', '1', '浏览友情连接', '0', '7', '3');
INSERT INTO `easy_node` VALUES ('33', 'changeInstall', '安装卸载', '1', '安装卸载', '0', '8', '3');
INSERT INTO `easy_node` VALUES ('34', 'edit', '插件配置', '1', '插件配置', '0', '8', '3');
INSERT INTO `easy_node` VALUES ('35', 'index', '插件浏览', '1', '插件浏览', '0', '8', '3');
INSERT INTO `easy_node` VALUES ('36', 'changeState', '回收评论', '1', '回收评论', '0', '9', '3');
INSERT INTO `easy_node` VALUES ('37', 'rubAll', '批量回收', '1', '批量回收', '0', '9', '3');
INSERT INTO `easy_node` VALUES ('38', 'delAll', '批量删除', '1', '批量删除', '0', '9', '3');
INSERT INTO `easy_node` VALUES ('39', 'index', '浏览评论', '1', '浏览评论', '0', '9', '3');
INSERT INTO `easy_node` VALUES ('40', 'add', '添加文章', '1', '添加文章', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('41', 'edit', '修改文章', '1', '修改文章', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('42', 'changeState', '回收文章', '1', '回收文章', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('43', 'rubAll', '批量回收', '1', '批量回收', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('44', 'recAll', '批量恢复', '1', '批量恢复', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('45', 'delAll', '永久删除', '1', '永久删除', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('46', 'index', '浏览文章', '1', '浏览文章', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('47', 'index', '浏览分类', '1', '浏览分类', '0', '11', '3');
INSERT INTO `easy_node` VALUES ('48', 'add', '添加分类', '1', '添加分类', '0', '11', '3');
INSERT INTO `easy_node` VALUES ('49', 'edit', '修改分类', '1', '修改分类', '0', '11', '3');
INSERT INTO `easy_node` VALUES ('50', 'delete', '删除分类', '1', '删除分类', '0', '11', '3');
INSERT INTO `easy_node` VALUES ('51', 'changeState', '状态操作', '1', '状态操作', '0', '11', '3');
INSERT INTO `easy_node` VALUES ('52', 'Index', '前端应用', '1', '前端应用', '0', '0', '1');
INSERT INTO `easy_node` VALUES ('53', 'rubbish', '文章回收站', '1', '文章回收站', '0', '10', '3');
INSERT INTO `easy_node` VALUES ('54', 'rubbish', '评论回收站', '1', '评论回收站', '0', '9', '3');
INSERT INTO `easy_node` VALUES ('55', 'recAll', '批量恢复', '1', '批量恢复', '0', '9', '3');
INSERT INTO `easy_node` VALUES ('57', 'index', '浏览会员', '1', '浏览会员', '0', '56', '3');
INSERT INTO `easy_node` VALUES ('58', 'add', '添加会员', '1', '添加会员', '0', '56', '3');
INSERT INTO `easy_node` VALUES ('59', 'delete', '删除会员', '1', '删除会员', '0', '56', '3');
INSERT INTO `easy_node` VALUES ('60', 'delAll', '批量删除', '1', '批量删除', '0', '56', '3');
INSERT INTO `easy_node` VALUES ('61', 'editpwd', '修改密码', '1', '修改密码', '0', '56', '3');

-- -----------------------------
-- Table structure for `easy_plugin`
-- -----------------------------
DROP TABLE IF EXISTS `easy_plugin`;
CREATE TABLE `easy_plugin` (
  `plugin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT '无',
  `method` varchar(255) NOT NULL,
  `isinstalled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `position` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`plugin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_plugin`
-- -----------------------------
INSERT INTO `easy_plugin` VALUES ('7', 'Baidushare', '百度分享', 'Index/Baidushare/info', '1', '1');

-- -----------------------------
-- Table structure for `easy_role`
-- -----------------------------
DROP TABLE IF EXISTS `easy_role`;
CREATE TABLE `easy_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_role`
-- -----------------------------
INSERT INTO `easy_role` VALUES ('7', '测试帐号', '0', '1', '测试帐号');

-- -----------------------------
-- Table structure for `easy_role_user`
-- -----------------------------
DROP TABLE IF EXISTS `easy_role_user`;
CREATE TABLE `easy_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_role_user`
-- -----------------------------
INSERT INTO `easy_role_user` VALUES ('3', '7');
INSERT INTO `easy_role_user` VALUES ('4', '8');
INSERT INTO `easy_role_user` VALUES ('3', '9');
INSERT INTO `easy_role_user` VALUES ('5', '10');
INSERT INTO `easy_role_user` VALUES ('5', '11');
INSERT INTO `easy_role_user` VALUES ('6', '12');
INSERT INTO `easy_role_user` VALUES ('7', '13');

-- -----------------------------
-- Table structure for `easy_user`
-- -----------------------------
DROP TABLE IF EXISTS `easy_user`;
CREATE TABLE `easy_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `easy_user`
-- -----------------------------
INSERT INTO `easy_user` VALUES ('6', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1450240975', '0.0.0.0', '0');
INSERT INTO `easy_user` VALUES ('13', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '1396106659', '127.0.0.1', '0');
