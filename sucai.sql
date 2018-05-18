/*
Navicat MySQL Data Transfer

Source Server         : 线下
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : sucai

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-05-16 18:02:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sc_admin
-- ----------------------------
DROP TABLE IF EXISTS `sc_admin`;
CREATE TABLE `sc_admin` (
  `a_id` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `a_name` char(20) DEFAULT NULL COMMENT '管理员名称',
  `a_password` varchar(200) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_admin
-- ----------------------------
INSERT INTO `sc_admin` VALUES ('1', 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

-- ----------------------------
-- Table structure for sc_article
-- ----------------------------
DROP TABLE IF EXISTS `sc_article`;
CREATE TABLE `sc_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `article_title` varchar(200) DEFAULT NULL COMMENT '文章标题',
  `article_author` varchar(50) DEFAULT NULL COMMENT '文章作者',
  `article_keys` varchar(100) DEFAULT NULL COMMENT '文章关键字',
  `article_desc` varchar(255) DEFAULT NULL COMMENT '文章描述',
  `article_reco` int(1) DEFAULT '0' COMMENT '文章推荐（0.不推荐 1.推荐）',
  `article_content` tinyint(4) DEFAULT NULL COMMENT '文章内容',
  `cate_id` int(10) DEFAULT NULL COMMENT '栏目id',
  `article_time` varchar(50) DEFAULT NULL COMMENT '文章t添加时间',
  `article_pic` varchar(255) DEFAULT NULL COMMENT '文章缩略图',
  `collect` int(10) DEFAULT '0' COMMENT '收藏次数',
  `comment` int(10) DEFAULT '0' COMMENT '评论次数',
  `download` int(10) DEFAULT '0' COMMENT '下载次数',
  `attrtype_id` mediumint(9) DEFAULT '0' COMMENT '文章所属的属性类型id',
  `click` int(10) DEFAULT '0' COMMENT '文章的点击量',
  `points` mediumint(5) DEFAULT NULL COMMENT '下载所需积分',
  `jieya` tinyint(1) DEFAULT NULL COMMENT '0.不解压 1.解压',
  `filesrc` varchar(255) DEFAULT NULL COMMENT '文件上传路径',
  `demosrc` varchar(255) DEFAULT NULL COMMENT '演示路径',
  `resources` varchar(255) DEFAULT NULL COMMENT '压缩包路径',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_article
-- ----------------------------
INSERT INTO `sc_article` VALUES ('1', ' 纯样式轮播banner', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', '纯样式轮播banner ', '1', '0', '1', '1499669695', './Public/Uploads/article/2017-10-25/59f06219add3b.jpg', '0', '0', '0', '0', '2', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('2', '3D可视化的本地音频播放效果', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', '3D可视化的本地音频播放效果', '1', '0', '1', '1499669763', './Public/Uploads/article/2017-10-25/59f0620dc0692.jpg', '0', '0', '0', '0', '0', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('3', ' bootstrap中文自适应医疗网站模板', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', ' bootstrap中文自适应医疗网站模板', '2', '0', '1', '1499669828', './Public/Uploads/article/2017-10-25/59f062014d538.jpg', '0', '0', '0', '0', '1', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('4', '黑色皮革制品家具品牌官网手机网站模板', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', '黑色皮革制品家具品牌官网手机网站模板', '1', '0', '1', '1499669858', './Public/Uploads/article/2017-10-25/59f0624dbb3ec.jpg', '0', '0', '0', '0', '1', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('5', ' 千峰3G学院老罗安卓开发视频 ', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', ' 千峰3G学院老罗安卓开发视频 ', '0', '0', '1', '1499669884', './Public/Uploads/article/2017-10-25/59f059c28ee42.jpg', '0', '0', '0', '0', '1', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('6', 'PHP生成你的唯美姓氏', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', 'PHP生成你的唯美姓氏', '1', '0', '1', '1508749637', './Public/Uploads/article/2017-10-23/59edb32268f5e.jpg', '0', '0', '0', '0', '5', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('7', 'Thinkphp八种在线支付源码带后台', 'admin', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', 'Thinkphp八种在线支付源码带后台', '1', '0', '1', '1508750169', './Public/Uploads/article/2017-10-23/59edb680d5ba5.jpg', '0', '0', '0', '0', '5', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('12', '测试', '测试', 'css3,抽奖,游戏,3D,手机特效,其它特效', '测试', '0', '0', '1', '1508820560', './Public/Uploads/article/2017-10-25/59f059ae308db.jpg', '0', '0', '0', '13', '4', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('13', '网页特效', 'admin', '网页特效,选项卡/滑动门 ,文字特效,表单代码 ', '网页特效网页特效网页特效网页特效', '1', '0', '1', '1508912276', './Public/Uploads/article/2017-10-25/59f059a3b3f55.jpg', '0', '0', '0', '13', '9', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('16', '测试1', '测试1', '图片代码,导航菜单,选项卡/滑动门,文字特效,表单代码,悬浮层/弹出层 ', '测试1测试1测试1测试1测试1测试1测试1', '1', '0', '1', '1508921158', './Public/Uploads/article/2017-10-25/59f05997f1364.jpg', '0', '8', '0', '13', '136', null, null, null, null, null);
INSERT INTO `sc_article` VALUES ('27', 'ed2000模板', 'admin', 'ed2000模板', 'ed2000模板ed2000模板ed2000模板', '1', '0', '2', '1509080139', './Public/Uploads/article/2017-10-27/59f2bc4b03a9b.jpg', '0', '0', '1', '13', '73', '10', '1', null, 'http://127.0.0.1/sucai/Public/Uploads/resources/2017-10-27/59f2bc4b0bfee/ed2000模板/index.html', './Public/Uploads/resources_zip/2017-10-27/59f2bc4b0bfee.zip');

-- ----------------------------
-- Table structure for sc_article_attr
-- ----------------------------
DROP TABLE IF EXISTS `sc_article_attr`;
CREATE TABLE `sc_article_attr` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章属性id',
  `article_id` mediumint(9) DEFAULT NULL COMMENT '文章id',
  `attrs_id` mediumint(9) DEFAULT NULL COMMENT '属性id',
  `attrs_value` varchar(255) DEFAULT NULL COMMENT '属性值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_article_attr
-- ----------------------------
INSERT INTO `sc_article_attr` VALUES ('39', '12', '12', 'Ajax');
INSERT INTO `sc_article_attr` VALUES ('38', '12', '13', '手机');
INSERT INTO `sc_article_attr` VALUES ('37', '13', '12', 'Cur');
INSERT INTO `sc_article_attr` VALUES ('36', '13', '13', '手机');
INSERT INTO `sc_article_attr` VALUES ('40', '17', '14', 'html/css ');

-- ----------------------------
-- Table structure for sc_article_type
-- ----------------------------
DROP TABLE IF EXISTS `sc_article_type`;
CREATE TABLE `sc_article_type` (
  `type_id` int(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章类型id',
  `type_name` varchar(30) DEFAULT NULL COMMENT '文章类型',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_article_type
-- ----------------------------

-- ----------------------------
-- Table structure for sc_attr
-- ----------------------------
DROP TABLE IF EXISTS `sc_attr`;
CREATE TABLE `sc_attr` (
  `attr_di` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性id',
  `attr_name` varchar(30) DEFAULT NULL COMMENT '属性名称',
  `attr_values` varchar(255) DEFAULT NULL COMMENT '属性',
  `type_id` int(10) DEFAULT NULL COMMENT '文章类型id',
  PRIMARY KEY (`attr_di`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_attr
-- ----------------------------

-- ----------------------------
-- Table structure for sc_attrs
-- ----------------------------
DROP TABLE IF EXISTS `sc_attrs`;
CREATE TABLE `sc_attrs` (
  `attr_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性id',
  `attr_name` varchar(50) DEFAULT NULL COMMENT '属性名称',
  `attr_value` varchar(255) DEFAULT NULL COMMENT '属性值',
  `typeattr_id` mediumint(9) DEFAULT NULL COMMENT '所属类型id',
  `addtime` varchar(15) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_attrs
-- ----------------------------
INSERT INTO `sc_attrs` VALUES ('14', 'html模板', ' 表单代码,悬浮层/弹出层,日期时间,统计图,html/css ', '15', '1508922257');
INSERT INTO `sc_attrs` VALUES ('13', '特效分类', '手机,微信,其他 ', '13', '1508754005');
INSERT INTO `sc_attrs` VALUES ('12', '特效分类', 'Ajax,Cur,上传 ', '13', '1508752546');
INSERT INTO `sc_attrs` VALUES ('11', '难易程度', '入门级 ,初级,中级,高级 ', '14', '1508752511');

-- ----------------------------
-- Table structure for sc_cate
-- ----------------------------
DROP TABLE IF EXISTS `sc_cate`;
CREATE TABLE `sc_cate` (
  `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `cate_name` char(255) DEFAULT NULL COMMENT '栏目名称',
  `cate_keys` varchar(100) DEFAULT NULL COMMENT '栏目关键字',
  `cate_describe` varchar(255) DEFAULT NULL COMMENT '栏目描述',
  `cate_parentid` int(10) DEFAULT NULL COMMENT '上级id',
  `cate_type` int(2) DEFAULT NULL COMMENT '栏目类型（0.列表栏目 1.单页栏目 2.话题）',
  `cate_content` text COMMENT '栏目内容',
  `cate_sort` int(5) DEFAULT '50' COMMENT '栏目排序',
  `cate_pic` varchar(255) DEFAULT NULL COMMENT '栏目缩略图',
  `show` tinyint(1) DEFAULT '0' COMMENT '是否在前台显示（0.不显示 1.显示 默认为1）',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_cate
-- ----------------------------
INSERT INTO `sc_cate` VALUES ('1', '网页特效', '网页特效', '网页特效', '0', '0', '&lt;p&gt;网页特效&lt;/p&gt;', '1', './Public/Uploads/2017-07-16/596b52a64e7f1.png', '1');
INSERT INTO `sc_cate` VALUES ('2', '网站模板', '网站模板', '网站模板', '0', '0', '&lt;p&gt;网站模板&lt;/p&gt;', '2', './Public/Uploads/2017-07-10/59631c6151b02.png', '1');
INSERT INTO `sc_cate` VALUES ('3', '视频教程', '视频教程', '视频教程', '0', '0', '&lt;p&gt;视频教程&lt;/p&gt;', '3', './Public/Uploads/2017-07-10/59631c7b2dac1.jpg', '1');
INSERT INTO `sc_cate` VALUES ('4', '话题社区', '话题社区', '话题社区', '0', '2', '&lt;p&gt;话题社区&lt;/p&gt;', '6', './Public/Uploads/2017-07-10/59631c95d8f18.jpg', '1');
INSERT INTO `sc_cate` VALUES ('5', '图片代码', '图片代码', '图片代码', '1', '0', '&lt;p&gt;图片代码&lt;/p&gt;', '5', './Public/Uploads/2017-07-10/59631cd27a54b.jpg', '1');
INSERT INTO `sc_cate` VALUES ('6', '中文模板', '中文模板', '中文模板', '2', '1', '&lt;p&gt;&lt;a href=&quot;http://www.sucaihuo.com/templates/0-0-0-0-96-0&quot;&gt;中文模板&lt;/a&gt;&lt;/p&gt;', '6', './Public/Uploads/2017-07-10/59631d180f645.jpg', '0');
INSERT INTO `sc_cate` VALUES ('7', 'WEB前端', 'WEB前端', 'WEB前端', '3', '0', '&lt;p&gt;&lt;a href=&quot;http://www.sucaihuo.com/video/157-0-0&quot;&gt;WEB前端&lt;/a&gt;&lt;/p&gt;', '7', null, '0');
INSERT INTO `sc_cate` VALUES ('8', '求助交流', '求助交流', '求助交流', '4', '0', '&lt;p&gt;求助交流&lt;/p&gt;', '8', null, '0');
INSERT INTO `sc_cate` VALUES ('9', 'jQuery多标签页载入页面的功能插件bTabs', 'jQuery多标签页载入页面的功能插件bTabs', 'jQuery多标签页载入页面的功能插件bTabs', '5', '0', '&lt;p&gt;&lt;a target=&quot;_blank&quot; href=&quot;http://www.sucaihuo.com/js/2664.html&quot;&gt;jQuery多标签页载入页面的功能插件bTabs&lt;/a&gt;&lt;/p&gt;', '50', './Public/Uploads/2017-08-08/5989d1ca1417a.jpg', '0');
INSERT INTO `sc_cate` VALUES ('10', 'PHP/MYSQL', 'PHP/MYSQL', 'PHP/MYSQL', '0', '0', '&lt;p&gt;PHP/MYSQL&lt;/p&gt;', '4', null, '1');
INSERT INTO `sc_cate` VALUES ('11', '酷站欣赏', '酷站欣赏', '酷站欣赏', '0', '0', '&lt;p&gt;酷站欣赏&lt;/p&gt;', '5', null, '1');
INSERT INTO `sc_cate` VALUES ('12', '帮助中心', '帮助中心', '帮助中心', '0', '1', '&lt;p&gt;帮助中心&lt;/p&gt;', '7', null, '1');
INSERT INTO `sc_cate` VALUES ('13', '关于我们', '关于我们', '素材火网站是致力于网页前端开发用户的一个下载资源交流平台网站。在这里您可以找到时下最流行、最新进的网页前端脚本代码和网页设计图片素材。且融入了目前最流行微博客社交功能，您可以在这找到与您一起的同行工作者。您可以在这里发布您自己的代码和图片等素材，与别人分享。同时您也可以申请需要的素材。', '12', '1', '&lt;p&gt;素材火网站是致力于网页前端开发用户的一个下载资源交流平台网站。在这里您可以找到时下最流行、最新进的网页前端脚本代码和网页设计图片素材。且融入了目前最流行微博客社交功能，您可以在这找到与您一起的同行工作者。您可以在这里发布您自己的代码和图片等素材，与别人分享。同时您也可以申请需要的素材。&lt;/p&gt;', '50', null, '0');
INSERT INTO `sc_cate` VALUES ('14', '招贤纳士', '招贤纳士', '招贤纳士', '12', '1', '&lt;p&gt;\r\n	&lt;strong&gt;岗位职责&lt;/strong&gt; &lt;/p&gt;&lt;ol class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			负责公司平台的程序开发与维护迭代工作；		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			精通php,mysql,2年或以上PHP开发经验，具有良好和规范的代码书写习惯；		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			熟悉thinkphp框架		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			熟悉Redis或memcache等缓存技术；		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			精通HTML、DIV+CSS、AJAX、JQuery、Json等		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;\r\n	&lt;strong&gt;前端工程师两名&lt;/strong&gt; &lt;/p&gt;&lt;ol class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			精通HTML、DIV+CSS、AJAX、JQuery、Json等		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			熟悉css3、html5、jquery.mobile.js等		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;\r\n			至少两年经验		&lt;/p&gt;&lt;p&gt;\r\n	&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '50', null, '0');
INSERT INTO `sc_cate` VALUES ('15', '联系我们', '联系我们', '联系我们', '12', '1', '&lt;h1&gt;联系我们&lt;/h1&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '50', null, '0');
INSERT INTO `sc_cate` VALUES ('16', '积分获取', '积分获取', '积分获取', '12', '1', '&lt;p&gt;\r\n	目前积分获取方式：&lt;/p&gt;&lt;p&gt;\r\n	1.每天限评论5次，每次评论 &lt;strong class=&quot;red&quot;&gt;10&lt;/strong&gt; 积分&lt;/p&gt;&lt;p&gt;\r\n	2.每次签到 &lt;strong class=&quot;red&quot;&gt;5&lt;/strong&gt; 积分，一个月连续签到20天以上送 &lt;strong class=&quot;red&quot;&gt;100&lt;/strong&gt; 积分&lt;/p&gt;&lt;p&gt;\r\n	3.积分购买,1元=10积分 ，请直接联系qq 416148489，支付宝账号	&lt;/p&gt;&lt;p&gt;\r\n		1226068099@qq.com，国庆后会开通企业支付宝在线支付功能。	&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '50', null, '0');
INSERT INTO `sc_cate` VALUES ('17', '技术分享', '技术分享', '技术分享', '4', '2', '&lt;p&gt;技术分享&lt;/p&gt;', '50', null, '1');
INSERT INTO `sc_cate` VALUES ('18', '网站模板', '网站模板', '网站模板', '4', '2', '&lt;p&gt;网站模板&lt;/p&gt;', '50', null, '1');
INSERT INTO `sc_cate` VALUES ('19', '网站源码', '网站源码', '网站源码', '4', '2', '&lt;p&gt;网站源码&lt;/p&gt;', '50', null, '1');
INSERT INTO `sc_cate` VALUES ('20', '项目合作', '项目合作', '项目合作', '4', '2', '&lt;p&gt;项目合作&lt;/p&gt;', '50', './Public/Uploads/2017-10-18/59e746fd4a822.jpg', '1');
INSERT INTO `sc_cate` VALUES ('21', '招聘求职', '招聘求职', '招聘求职', '4', '2', '&lt;p&gt;招聘求职&lt;/p&gt;', '50', null, '1');
INSERT INTO `sc_cate` VALUES ('22', '其他', '其他', '其他', '4', '2', '&lt;p&gt;其他&lt;/p&gt;', '50', null, '1');

-- ----------------------------
-- Table structure for sc_collect
-- ----------------------------
DROP TABLE IF EXISTS `sc_collect`;
CREATE TABLE `sc_collect` (
  `collect_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '收藏的id',
  `member_id` int(10) DEFAULT NULL COMMENT '用户id',
  `time` varchar(30) DEFAULT NULL COMMENT '收藏时间',
  `article_id` int(10) DEFAULT NULL COMMENT '收藏文章的id',
  `collect_type` tinyint(2) DEFAULT NULL COMMENT '收藏的类型（1.文章 2.话题）',
  PRIMARY KEY (`collect_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_collect
-- ----------------------------
INSERT INTO `sc_collect` VALUES ('6', '36', '1508420122', '18', '2');
INSERT INTO `sc_collect` VALUES ('5', '36', '1508420089', '17', '2');
INSERT INTO `sc_collect` VALUES ('7', '8', '1508493456', '20', '2');
INSERT INTO `sc_collect` VALUES ('8', '36', '1508661366', '10', '2');
INSERT INTO `sc_collect` VALUES ('9', '50', '1508679795', '13', '2');
INSERT INTO `sc_collect` VALUES ('24', '50', '1509001147', '16', '1');
INSERT INTO `sc_collect` VALUES ('25', '8', '1524310939', '26', '2');

-- ----------------------------
-- Table structure for sc_comment
-- ----------------------------
DROP TABLE IF EXISTS `sc_comment`;
CREATE TABLE `sc_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `time` varchar(30) DEFAULT NULL COMMENT '评论的时间',
  `member_id` int(10) DEFAULT NULL COMMENT '用户id',
  `article_id` int(10) DEFAULT NULL COMMENT '评论文章的id',
  `type` tinyint(2) DEFAULT '1' COMMENT '评论的类型（1.文章 2.话题）',
  `pid` int(3) DEFAULT '0',
  `pidsub` int(3) DEFAULT '0',
  `tid` mediumint(10) DEFAULT '0' COMMENT '回复用户的id',
  `tuser` varchar(30) DEFAULT NULL COMMENT '回复用户的名称',
  `touid` mediumint(10) DEFAULT '0' COMMENT '多级评论所属二级评论的id',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_comment
-- ----------------------------
INSERT INTO `sc_comment` VALUES ('1', '法国恢复规划法规', '1508423865', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('2', '梵蒂冈地方个', '1508424184', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('3', '好丰阁花坊', '1508424201', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('4', '风光好风光好', '1508424293', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('5', '海关监管结果', '1508424846', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('6', '法国恢复规划法规', '1508424932', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('7', '海关监管结果[色]', '1508425021', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('8', 'iluiou', '1508469091', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('35', '我不信！', '1508495795', '8', '20', '2', '34', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('10', '第一条评论', '1508471104', '8', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('34', '我是好人！', '1508495761', '36', '20', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('12', '包括：论著，专科研究，护理管理，护理教育，中医护理，基础护理，', '1508475718', '8', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('13', 'hello，树先生！', '1508476295', '8', '16', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('14', 'hi，帅哥！', '1508476357', '8', '17', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('15', '素材火资源下载', '1508476426', '8', '19', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('40', '下车机械翅膀V型接口', '1508509871', '39', '0', '2', '34', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('17', 'admin2的评论', '1508483032', '36', '18', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('41', '年后符合法规和', '1508512793', '39', '17', '2', '14', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('30', '回复第一条评论！', '1508495384', '8', '21', '2', '29', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('37', '你爱信不信！', '1508495935', '36', '0', '2', '34', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('38', '你爱信不信！', '1508495984', '39', '0', '2', '34', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('39', '我不信！', '1508496703', '39', '0', '2', '34', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('29', '第一条评论！', '1508495337', '8', '21', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('28', '第三条评论回复！', '1508495218', '8', '20', '2', '9', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('31', '第一条回复2！', '1508495485', '8', '21', '2', '29', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('32', '我来评论你第一条评论啦！！！！', '1508495657', '36', '21', '2', '29', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('33', '我来回复你这一条评论啦！', '1508495692', '36', '20', '2', '11', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('70', '一级评论', '1508556856', '50', '10', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('43', '交换空间开黑', '1508512959', '39', '17', '2', '14', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('59', '一级评论2', '1508521403', '49', '10', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('45', '你想要怎么交流？？[示爱]', '1508513260', '39', '10', '2', '44', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('46', '该怎么甲流就怎么交流！', '1508513302', '39', '10', '2', '44', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('47', '来来来，交流！', '1508513376', '8', '10', '2', '44', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('48', '走开，跟你没有是什么好交流的！！！！[抓狂]', '1508513437', '36', '10', '2', '44', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('49', '你以为你是谁，让走就走啊！', '1508513481', '50', '10', '2', '44', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('50', '好热闹啊，我也来凑个热闹！', '1508513566', '49', '10', '2', '44', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('52', '合格机构合计', '1508518039', '49', '10', '2', '44', '45', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('71', '二级评论', '1508556901', '50', '10', '2', '70', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('72', '三级评论！', '1508557171', '50', '10', '2', '70', '71', '50', 'admin14', '71');
INSERT INTO `sc_comment` VALUES ('60', '二级评论2-2', '1508521439', '49', '10', '2', '59', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('61', '三级评论2-2-2', '1508521483', '49', '10', '2', '59', '60', '49', 'admin13', '60');
INSERT INTO `sc_comment` VALUES ('62', '你好，我是admin1，四级评论！', '1508555634', '8', '10', '2', '59', '61', '49', 'admin13', '60');
INSERT INTO `sc_comment` VALUES ('63', '那我就是五级评论了！', '1508556035', '8', '10', '2', '59', '62', '8', 'admin1', '60');
INSERT INTO `sc_comment` VALUES ('64', '那我是六级评论！', '1508556477', '36', '10', '2', '59', '63', '8', 'admin1', '60');
INSERT INTO `sc_comment` VALUES ('65', '那我就是七级评论！', '1508556509', '50', '10', '2', '59', '64', '36', 'admin2', '60');
INSERT INTO `sc_comment` VALUES ('66', '我也是三级评论！', '1508556550', '50', '10', '2', '59', '60', '49', 'admin13', '60');
INSERT INTO `sc_comment` VALUES ('73', '四级评论', '1508557203', '50', '10', '2', '70', '72', '50', 'admin14', '71');
INSERT INTO `sc_comment` VALUES ('68', '我也是二级评论！', '1508556725', '50', '10', '2', '59', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('74', '一级评论3', '1508557242', '50', '10', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('75', '一级评论！', '1508557593', '50', '13', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('76', '二级评论！', '1508557635', '50', '13', '2', '75', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('77', '三级评论', '1508557664', '50', '13', '2', '75', '76', '50', 'admin14', '76');
INSERT INTO `sc_comment` VALUES ('78', '一级评论2', '1508557676', '50', '13', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('79', '几句话话', '1508558149', '50', '13', '2', '78', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('80', '合格机构合计', '1508558157', '50', '13', '2', '78', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('81', '感觉好几个', '1508558164', '50', '13', '2', '75', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('82', 'bbbbbbbggggggggggg', '1508605505', '49', '10', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('83', '发过火父', '1508605649', '49', '10', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('84', '规划局改好价格合计', '1508605659', '49', '10', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('85', 'admin2的一级评论！', '1508645192', '36', '25', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('86', 'jgjhjkhkfghgfh', '1508662801', '36', '10', '2', '84', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('87', '美好客户', '1508662813', '36', '10', '2', '83', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('88', '几乎开黑', '1508662828', '36', '10', '2', '74', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('89', '刚刚好就感觉', '1508662847', '36', '10', '2', '84', '86', '36', 'admin2', '86');
INSERT INTO `sc_comment` VALUES ('90', '<img src=\"$nameGif\"/>有图有图<img src=\"$nameGif\"/>', '1508950070', '50', '26', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('91', '<img src=\"http://127.0.0.1/sucai/Public/emot/0.gif\"/>风光好风光好刮风<img src=\"http://127.0.0.1/sucai/Public/emot/1.gif\"/>', '1508950275', '50', '26', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('92', '<img src=\"http://127.0.0.1/sucai/Public/emot/0.gif\"/><img src=\"http://127.0.0.1/sucai/Public/emot/1.gif\"/>那哪个好几个', '1508950327', '50', '26', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('93', '发货拖后腿', '1508958577', '50', '26', '2', '92', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('94', '法规回复后', '1508958660', '50', '26', '2', '93', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('95', '宏观经济学', '1508958677', '50', '26', '2', '92', '93', '50', 'admin14', '93');
INSERT INTO `sc_comment` VALUES ('96', '进步空间比较', '1508958738', '50', '26', '2', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('104', '发过火规范化发<img src=\"http://127.0.0.1/sucai/Public/emot/1.gif\"/>', '1509000903', '50', '16', '1', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('105', '看家里金坷垃<img src=\"http://127.0.0.1/sucai/Public/emot/2.gif\"/>', '1509000937', '50', '16', '1', '104', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('106', '加快了健康<img src=\"http://127.0.0.1/sucai/Public/emot/3.gif\"/>', '1509000951', '50', '16', '1', '104', '105', '50', 'admin14', '105');
INSERT INTO `sc_comment` VALUES ('107', '有意义很干净干活', '1509000960', '50', '16', '1', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('108', 'jhjk法国红酒房管局', '1524312100', '8', '16', '1', '0', '0', '0', null, '0');
INSERT INTO `sc_comment` VALUES ('109', '发给甲方积分积分', '1524312110', '8', '16', '1', '108', '0', '0', null, '0');

-- ----------------------------
-- Table structure for sc_message
-- ----------------------------
DROP TABLE IF EXISTS `sc_message`;
CREATE TABLE `sc_message` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '消息id',
  `from_id` int(10) DEFAULT NULL COMMENT '发送人的id',
  `content` varchar(255) DEFAULT NULL COMMENT '发送内容',
  `time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '发送时间',
  `member_id` int(10) DEFAULT NULL COMMENT '收件人id',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_message
-- ----------------------------

-- ----------------------------
-- Table structure for sc_system
-- ----------------------------
DROP TABLE IF EXISTS `sc_system`;
CREATE TABLE `sc_system` (
  `sy_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '系统id',
  `sy_title` varchar(30) DEFAULT NULL COMMENT '系统标题',
  `sy_keys` varchar(50) DEFAULT NULL COMMENT '系统关键字',
  `sy_email` varchar(100) DEFAULT NULL COMMENT '联系邮箱',
  `sy_record` varchar(100) DEFAULT NULL COMMENT '备案号',
  `sy_copyright` varchar(100) DEFAULT NULL COMMENT '版权信息',
  `sy_desc` varchar(255) DEFAULT NULL COMMENT '站点描述',
  PRIMARY KEY (`sy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_system
-- ----------------------------

-- ----------------------------
-- Table structure for sc_topic
-- ----------------------------
DROP TABLE IF EXISTS `sc_topic`;
CREATE TABLE `sc_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '话题id',
  `topic_title` varchar(255) DEFAULT NULL,
  `content` text,
  `keywords` varchar(100) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL COMMENT '所属栏目',
  `attachment` varchar(100) DEFAULT NULL COMMENT '附件',
  `collect` int(10) DEFAULT '0' COMMENT '收藏数',
  `comment` int(10) DEFAULT '0' COMMENT '评论数',
  `member_id` int(10) DEFAULT NULL COMMENT '用户id',
  `time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '发布时间',
  `click` int(6) DEFAULT '0' COMMENT '浏览数量',
  `answer_sum` tinyint(5) DEFAULT '0' COMMENT '回答数量',
  `release_time` varchar(30) DEFAULT NULL COMMENT '话题发布时间',
  `update_time` varchar(30) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_topic
-- ----------------------------
INSERT INTO `sc_topic` VALUES ('10', 'js技术交流', '&lt;p&gt;js技术交流&lt;br/&gt;&lt;/p&gt;', 'JavaScript,CSS3,', '17', './Public/Uploads/Attachment/20171018/59e778f029235.zip', null, '7', '38', '2017-10-22 21:14:12', '179', '0', '1508342010', null);
INSERT INTO `sc_topic` VALUES ('13', 'Html技术交流', '&lt;p&gt;Html技术交流&lt;/p&gt;', 'Html5,Html/CSS,', '19', './Public/Uploads/Attachment/20171019/59e81ef26e57f.docx', null, '0', '36', '2017-10-22 21:45:59', '83', '0', '1508380181', null);
INSERT INTO `sc_topic` VALUES ('22', 'PHP技术交流！', '&lt;p&gt;PHP技术交流！&lt;br/&gt;&lt;/p&gt;', 'php,Ajax,Thinkphp,', '17', './Public/Uploads/Attachment/20171021/59eb65028f0f2.jpg', '0', '0', '50', '2017-10-25 21:23:09', '41', '0', '1508599059', null);
INSERT INTO `sc_topic` VALUES ('21', 'admin1', '&lt;p&gt;admin1&lt;br/&gt;&lt;/p&gt;', 'Curl,Html5,CSS3,Ajax,', '18', './Public/Uploads/Attachment/20171020/59e96ad0a5a33.jpg', '0', '0', '8', '2017-10-22 19:16:09', '22', '0', '1508469461', null);
INSERT INTO `sc_topic` VALUES ('16', '改好价格合计', '&lt;p&gt;123123&lt;br/&gt;&lt;/p&gt;', '123', '19', './Public/Uploads/Attachment/20171019/59e843794e74d.zip', '0', '5', '8', '2017-10-26 14:41:11', '40', '0', '1508393849', null);
INSERT INTO `sc_topic` VALUES ('17', '侧试3', '&lt;p&gt;侧试3&lt;/p&gt;', '侧试3', '19', './Public/Uploads/Attachment/20171019/59e844ede9248.jpg', '0', '0', '8', '2017-10-21 10:45:37', '65', '0', '1508394221', null);
INSERT INTO `sc_topic` VALUES ('19', 'ceshi5', '&lt;p&gt;ceshi5&lt;br/&gt;&lt;/p&gt;', 'ceshi5,Mysql,Curl,', '19', './Public/Uploads/Attachment/20171019/59e8460f38326.jpg', '0', '0', '8', '2017-10-22 16:46:51', '13', '0', '1508394516', null);
INSERT INTO `sc_topic` VALUES ('23', 'ajax技术交流', '&lt;p&gt;ajax技术交流ajax技术交流ajax技术交流ajax技术交流&lt;br/&gt;&lt;/p&gt;', 'Ajax,Thinkphp,php,JSON,手机,后台,', '20', './Public/Uploads/Attachment/20171022/59ec11ce5a565.zip', '0', '0', '50', '2017-10-26 02:44:10', '8', '0', '1508643315', null);
INSERT INTO `sc_topic` VALUES ('24', 'css交流', '&lt;p&gt;css交流css交流css交流&lt;br/&gt;&lt;/p&gt;', '', '22', '', '0', '0', '50', '2017-10-22 15:24:26', '1', '0', '1508644618', null);
INSERT INTO `sc_topic` VALUES ('25', 'admin2技术', '&lt;p&gt;admin2技术admin2技术admin2技术&lt;br/&gt;&lt;/p&gt;', '', '21', '', '0', '1', '36', '2017-10-26 02:44:55', '31', '0', '1508644687', null);
INSERT INTO `sc_topic` VALUES ('26', '测试发布话题跳转', '&lt;p&gt;测试发布话题跳转测试发布话题跳转&lt;br/&gt;&lt;/p&gt;', 'Mysql,Ajax,JavaScript,', '21', '', '0', '7', '36', '2018-04-21 19:44:05', '507', '0', '1508657710', null);

-- ----------------------------
-- Table structure for sc_typeattr
-- ----------------------------
DROP TABLE IF EXISTS `sc_typeattr`;
CREATE TABLE `sc_typeattr` (
  `type_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '类型id',
  `type_name` varchar(100) DEFAULT NULL COMMENT '类型名称',
  `addtime` varchar(15) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_typeattr
-- ----------------------------
INSERT INTO `sc_typeattr` VALUES ('13', '特效分类 ', '1508752469');
INSERT INTO `sc_typeattr` VALUES ('14', '难易程度', '1508752480');
INSERT INTO `sc_typeattr` VALUES ('15', '网站模板', '1508922188');

-- ----------------------------
-- Table structure for sc_user
-- ----------------------------
DROP TABLE IF EXISTS `sc_user`;
CREATE TABLE `sc_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户di',
  `username` varchar(50) DEFAULT NULL COMMENT '用户名称',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `reg_time` varchar(100) DEFAULT NULL COMMENT '注册时间',
  `lolck` tinyint(2) DEFAULT '0' COMMENT '是否被锁定（0.是1.否）',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_user
-- ----------------------------
INSERT INTO `sc_user` VALUES ('54', 'admin18', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 16:54:00', '0');
INSERT INTO `sc_user` VALUES ('36', 'admin2', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-13 23:21:17', '0');
INSERT INTO `sc_user` VALUES ('37', 'admin3', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-13 23:21:39', '0');
INSERT INTO `sc_user` VALUES ('8', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '2017-10-12 22:37:01', '0');
INSERT INTO `sc_user` VALUES ('38', 'admin4', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-13 23:22:07', '0');
INSERT INTO `sc_user` VALUES ('39', 'admin5', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-13 23:22:31', '0');
INSERT INTO `sc_user` VALUES ('40', 'admin6', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-13 23:22:56', '0');
INSERT INTO `sc_user` VALUES ('41', 'admin7', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-13 23:27:51', '0');
INSERT INTO `sc_user` VALUES ('47', 'panpan', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 11:41:11', '0');
INSERT INTO `sc_user` VALUES ('45', 'admin11', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 11:37:17', '0');
INSERT INTO `sc_user` VALUES ('48', 'admin12', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 12:05:29', '0');
INSERT INTO `sc_user` VALUES ('49', 'admin13', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 12:10:41', '0');
INSERT INTO `sc_user` VALUES ('50', 'admin14', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 12:41:11', '0');
INSERT INTO `sc_user` VALUES ('51', 'admin15', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 12:42:43', '0');
INSERT INTO `sc_user` VALUES ('52', 'admin16', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 16:01:43', '0');
INSERT INTO `sc_user` VALUES ('53', 'admin17', 'b30eb6cd4e5233bf8ecd2fb3efc01d85', '2017-10-14 16:03:15', '0');

-- ----------------------------
-- Table structure for sc_userinfo
-- ----------------------------
DROP TABLE IF EXISTS `sc_userinfo`;
CREATE TABLE `sc_userinfo` (
  `info_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户信息id',
  `sex` tinyint(1) DEFAULT '0' COMMENT '性别（0.保密 1.男 2.女）',
  `job` varchar(30) DEFAULT NULL COMMENT '工作',
  `email` varchar(150) DEFAULT NULL COMMENT '邮箱',
  `intro` varchar(255) DEFAULT NULL COMMENT '用户介绍',
  `face50` varchar(80) DEFAULT NULL,
  `face80` varchar(80) DEFAULT NULL,
  `face180` varchar(80) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL COMMENT '用户id',
  `address` varchar(255) DEFAULT NULL,
  `points` int(10) DEFAULT '0' COMMENT '会员积分',
  `login_time` varchar(50) DEFAULT '' COMMENT '最后登录时间',
  `login_ip` varchar(30) DEFAULT NULL COMMENT '最后登录的IP',
  `nickname` varchar(50) DEFAULT NULL COMMENT '用户昵称',
  `checkemail` int(1) DEFAULT '0' COMMENT '邮箱验证 0.未验证 1.已验证',
  `checkcode` varchar(50) DEFAULT NULL COMMENT '邮箱验证码',
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_userinfo
-- ----------------------------
INSERT INTO `sc_userinfo` VALUES ('24', '1', 'PHP开发工程师', 'admin2@qq.com', ' 这位童鞋很懒，什么也没有留下～～！ ', '', '', '', '36', null, '92', '2017-10-22 11:57:37', '127.0.0.1', 'admin2', '0', null);
INSERT INTO `sc_userinfo` VALUES ('6', '0', null, 'pan@qq.com', null, './Public/Uploads/Face/20171019/small_59e8719e1acac.jpg', './Public/Uploads/Face/20171019/mid_59e8719e1acac.jpg', './Public/Uploads/Face/20171019/max_59e8719e1acac.jpg', '8', null, '76', '2018-04-21 19:41:57', '0.0.0.0', 'admin1', '0', null);
INSERT INTO `sc_userinfo` VALUES ('25', '0', null, 'admin3@qq.com', null, './Public/Uploads/Face/20171014/small_59e20724d24cc.jpg', './Public/Uploads/Face/20171014/mid_59e20724d24cc.jpg', './Public/Uploads/Face/20171014/max_59e20724d24cc.jpg', '37', null, '37', '2017-10-18 23:51:22', '127.0.0.1', 'admin3', '0', null);
INSERT INTO `sc_userinfo` VALUES ('26', '0', null, 'admin4@qq.com', null, null, null, null, '38', null, '25', '2017-10-18 23:52:52', '127.0.0.1', 'admin4', '0', null);
INSERT INTO `sc_userinfo` VALUES ('27', '0', null, 'admin5@qq.com', null, null, null, null, '39', null, '25', '2017-10-20 18:39:30', '127.0.0.1', 'admin5', '0', null);
INSERT INTO `sc_userinfo` VALUES ('28', '0', null, 'admin6@qq.com', null, null, null, null, '40', null, '20', '2017-10-13 23:22:56', '127.0.0.1', 'admin6', '0', null);
INSERT INTO `sc_userinfo` VALUES ('29', '0', '技术总监', 'admin7@qq.com', '我是大帅哥！！！', null, null, null, '41', '广东,深圳,宝安区,', '25', '2017-10-14 09:18:58', '127.0.0.1', 'admin7', '0', null);
INSERT INTO `sc_userinfo` VALUES ('35', '0', null, '109672845@qq.com', null, null, null, null, '47', null, '20', '2017-10-14 11:41:11', '127.0.0.1', 'panpan', '0', '1812612321eae16bf09f7410b625cbd2');
INSERT INTO `sc_userinfo` VALUES ('33', '0', null, '1096728475@qq.com', null, null, null, null, '45', null, '20', '2017-10-14 11:37:17', '127.0.0.1', 'admin11', '0', 'fe03bb7bc754fba00f730d772daac858');
INSERT INTO `sc_userinfo` VALUES ('36', '0', null, '109672445@qq.com', null, null, null, null, '48', null, '20', '2017-10-14 12:05:29', '127.0.0.1', 'admin12', '0', '831395359a812691787111638efbc8f1');
INSERT INTO `sc_userinfo` VALUES ('37', '0', null, '109728445@qq.com', null, './Public/Uploads/Face/20171021/small_59ea23e492885.jpg', './Public/Uploads/Face/20171021/mid_59ea23e492885.jpg', './Public/Uploads/Face/20171021/max_59ea23e492885.jpg', '49', null, '37', '2017-10-22 01:02:26', '127.0.0.1', 'admin13', '1', '');
INSERT INTO `sc_userinfo` VALUES ('38', '0', null, '109678445@qq.com', null, './Public/Uploads/Face/20171021/small_59eb69b70e0f0.jpg', './Public/Uploads/Face/20171021/mid_59eb69b70e0f0.jpg', './Public/Uploads/Face/20171021/max_59eb69b70e0f0.jpg', '50', null, '870', '2017-10-27 20:13:18', '127.0.0.1', 'admin14', '1', '');
INSERT INTO `sc_userinfo` VALUES ('39', '0', null, '109678445@qq.com', null, null, null, null, '51', null, '20', '2017-10-14 12:42:43', '127.0.0.1', 'admin15', '1', '');
INSERT INTO `sc_userinfo` VALUES ('40', '0', null, '109628445@qq.com', null, null, null, null, '52', null, '20', '2017-10-14 16:01:43', '127.0.0.1', 'admin16', '0', 'a528433594240faa4b2fea1fac7c0c73');
INSERT INTO `sc_userinfo` VALUES ('41', '0', null, '106728445@qq.com', null, null, null, null, '53', null, '50', '2017-10-14 16:16:29', '127.0.0.1', 'admin17', '1', '已激活');
INSERT INTO `sc_userinfo` VALUES ('42', '0', null, '1096728445@qq.com', null, null, null, null, '54', null, '50', '2017-10-14 16:54:00', '127.0.0.1', 'admin18', '1', '已激活');
