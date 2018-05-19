/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : ziyuan

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-19 09:41:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sc_ad
-- ----------------------------
DROP TABLE IF EXISTS `sc_ad`;
CREATE TABLE `sc_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(255) DEFAULT NULL,
  `type_id` varchar(255) DEFAULT NULL,
  `ad_url` varchar(255) DEFAULT NULL,
  `position_id` varchar(255) DEFAULT NULL,
  `ad_img` varchar(255) DEFAULT NULL,
  `ad_time` datetime DEFAULT NULL,
  `ad_desc` varchar(255) DEFAULT NULL,
  `ad_first` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_ad
-- ----------------------------
INSERT INTO `sc_ad` VALUES ('9', '轮播图2', '1', '', '1', '/Public/Uploads/ad/2018-05-18/5afe17ae19130.jpg', '2018-05-18 08:00:46', '&lt;p&gt;12334&lt;/p&gt;', 'active');
INSERT INTO `sc_ad` VALUES ('8', '轮播图2', '1', '', '1', '/Public/Uploads/ad/2018-05-18/5afe179a7f412.jpg', '2018-05-18 08:00:26', '&lt;p&gt;123&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('7', '首页轮播 图1', '1', '', '1', '/Public/Uploads/ad/2018-05-18/5afe178676197.jpg', '2018-05-18 08:00:06', '&lt;p&gt;第一张&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('11', '中瑞电子', '1', '234324', '2', '/Public/Uploads/ad/2018-05-18/5afe1be009327.jpg', '2018-05-18 08:18:40', '&lt;p&gt;2134&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('10', '雷士光电科技有限公司', '1', '23', '2', '/Public/Uploads/ad/2018-05-18/5afe1a24a4539.jpg', '2018-05-18 08:11:16', '&lt;p&gt;logo&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('12', '奥德照明', '1', '234234', '2', '/Public/Uploads/ad/2018-05-18/5afe1c0419331.jpg', '2018-05-18 08:19:16', '&lt;p&gt;1234大萨达&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('13', '南睿集团', '1', '123我去额', '2', '/Public/Uploads/ad/2018-05-18/5afe1c6169d47.jpg', '2018-05-18 08:20:49', '&lt;p&gt;二娃阿萨德&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('14', '羽翼防水', '1', '123', '2', '/Public/Uploads/ad/2018-05-18/5afe1c889953c.jpg', '2018-05-18 08:21:28', '&lt;p&gt;大叔反倒是&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('15', '雷曼光电', '1', '1233242', '2', '/Public/Uploads/ad/2018-05-18/5afe1ca6195cb.jpg', '2018-05-18 08:21:58', '&lt;p&gt;大叔反倒是&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('16', '雷士照明', '1', '1234324', '2', '/Public/Uploads/ad/2018-05-18/5afe1cc25bd0b.jpg', '2018-05-18 08:22:26', '&lt;p&gt;大叔&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('17', '123', '1', '123564', '3', '/Public/Uploads/ad/2018-05-18/5afe1da51e6f4.jpg', '2018-05-18 08:26:13', '&lt;p&gt;的暗示水电费&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('18', '123454', '1', '214324', '3', '/Public/Uploads/ad/2018-05-18/5afe1fbe521eb.jpg', '2018-05-18 08:35:10', '&lt;p&gt;绕弯儿&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('19', '123', '', '23445', '3', '/Public/Uploads/ad/2018-05-18/5afe1fcfca547.jpg', '2018-05-18 08:35:27', '&lt;p&gt;大范德萨&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('20', '达到', '1', '', '3', '/Public/Uploads/ad/2018-05-18/5afe1fde2336b.jpg', '2018-05-18 08:35:42', '&lt;p&gt;发送到&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('21', '电风扇', '1', '反倒是', '3', '/Public/Uploads/ad/2018-05-18/5afe1fef23c2e.jpg', '2018-05-18 08:35:59', '&lt;p&gt;反倒是躬逢盛典&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('22', '发送到', '1', '顺丰', '3', '/Public/Uploads/ad/2018-05-18/5afe1ffde38bd.png', '2018-05-18 08:36:13', '&lt;p&gt;分公司&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('23', '反倒是', '1', '发送到', '3', '/Public/Uploads/ad/2018-05-18/5afe200ea6cb9.png', '2018-05-18 08:36:30', '&lt;p&gt;反倒是&lt;/p&gt;', null);
INSERT INTO `sc_ad` VALUES ('24', '234453', '1', '213', '3', '/Public/Uploads/ad/2018-05-18/5afe204a553df.png', '2018-05-18 08:37:30', '&lt;p&gt;恶趣味&lt;/p&gt;', null);

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
-- Table structure for sc_ad_position
-- ----------------------------
DROP TABLE IF EXISTS `sc_ad_position`;
CREATE TABLE `sc_ad_position` (
  `position_id` int(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `position_name` varchar(60) NOT NULL DEFAULT '' COMMENT '广告位置名称',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '广告位宽度',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '广告位高度',
  `position_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '广告描述',
  `position_style` text COMMENT '模板',
  `is_open` tinyint(1) DEFAULT '0' COMMENT '0关闭1开启',
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sc_ad_position
-- ----------------------------
INSERT INTO `sc_ad_position` VALUES ('1', '首页顶部轮播', '123', '234', '&lt;p&gt;45345&lt;/p&gt;', null, '0');
INSERT INTO `sc_ad_position` VALUES ('2', '首页公司logo轮播展示', '1', '2', '&lt;p&gt;大叔发顺丰&lt;/p&gt;', null, '0');
INSERT INTO `sc_ad_position` VALUES ('3', '首页资质荣誉轮播展示', '12123', '23', '&lt;p&gt;微擎&lt;/p&gt;', null, '0');

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
