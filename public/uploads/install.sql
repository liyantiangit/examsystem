/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : examadmin

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 03/11/2019 16:11:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ex_answer
-- ----------------------------
DROP TABLE IF EXISTS `ex_answer`;
CREATE TABLE `ex_answer`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uid` int(10) NOT NULL COMMENT '会员名',
  `tp_id` int(10) NOT NULL COMMENT '试卷id',
  `question_id` int(10) NOT NULL COMMENT '题目id',
  `score` int(3) NOT NULL COMMENT '题目分数',
  `frequency` int(2) NOT NULL DEFAULT 1 COMMENT '考试次数',
  `linktime` int(11) NOT NULL COMMENT '单题答题时间',
  `creattime` int(10) NOT NULL COMMENT '创建时间',
  `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '答题答案',
  `type` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '题目类型',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ex_config
-- ----------------------------
DROP TABLE IF EXISTS `ex_config`;
CREATE TABLE `ex_config`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量名',
  `group` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '分组',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量标题',
  `tip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量描述',
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '类型:string,text,int,bool,array,datetime,date,file',
  `value` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '变量值',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '变量字典数据',
  `rule` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '验证规则',
  `extend` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '扩展属性',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '系统配置' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ex_fraction
-- ----------------------------
DROP TABLE IF EXISTS `ex_fraction`;
CREATE TABLE `ex_fraction`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `tp_id` int(10) NOT NULL COMMENT '试卷id',
  `uid` int(10) NOT NULL COMMENT '会员名',
  `sum` int(10) NOT NULL COMMENT '分数',
  `creat_time` int(11) NULL DEFAULT NULL COMMENT '交卷时间',
  `test_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '考试用时',
  `frequency` int(10) NULL DEFAULT NULL COMMENT '次数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ex_group
-- ----------------------------
DROP TABLE IF EXISTS `ex_group`;
CREATE TABLE `ex_group`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `pid` int(10) NULL DEFAULT NULL COMMENT '父ID',
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '部门名称',
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '描述',
  `creattime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NOT NULL DEFAULT 1000 COMMENT '更新时间',
  `weigh` int(10) NULL DEFAULT NULL COMMENT '权重',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ex_group
-- ----------------------------
INSERT INTO `ex_group` VALUES (1, 1, '普通考试', '考试', '123', NULL, 1000, NULL, NULL);
INSERT INTO `ex_group` VALUES (2, NULL, '视频考试', '考试', '456', NULL, 1000, NULL, NULL);

-- ----------------------------
-- Table structure for ex_news
-- ----------------------------
DROP TABLE IF EXISTS `ex_news`;
CREATE TABLE `ex_news`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公告消息标题',
  `tp_id` int(10) NULL DEFAULT NULL COMMENT '试卷标题',
  `type` tinyint(2) NOT NULL COMMENT '级别',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公告消息内容',
  `creattime` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '答题连接',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ex_question
-- ----------------------------
DROP TABLE IF EXISTS `ex_question`;
CREATE TABLE `ex_question`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `tp_id` int(10) NOT NULL COMMENT '试卷标题',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '题目标题',
  `intro` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '题目描述',
  `is_must` tinyint(2) NOT NULL DEFAULT 0 COMMENT '是否必填',
  `extra` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '参数',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '题目类型',
  `sort` int(10) NOT NULL COMMENT '排序号',
  `score` int(10) NOT NULL COMMENT '分值',
  `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标准答案',
  `creattime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ex_question
-- ----------------------------
INSERT INTO `ex_question` VALUES (1, 1, '第一题', '123', 0, '12', '1', 1, 10, '10', NULL);

-- ----------------------------
-- Table structure for ex_tpaper
-- ----------------------------
DROP TABLE IF EXISTS `ex_tpaper`;
CREATE TABLE `ex_tpaper`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `g_id` int(10) NULL DEFAULT NULL COMMENT '部门',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '试卷标题',
  `creat_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '出卷人',
  `pattern` tinyint(2) NOT NULL COMMENT '考试模式',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '考试密码',
  `rule` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '考试规则',
  `frequency` int(10) NOT NULL COMMENT '考试次数',
  `astrict` tinyint(2) NOT NULL DEFAULT 0 COMMENT '关注状态',
  `states` tinyint(2) NOT NULL COMMENT '提示答案',
  `type` tinyint(2) NOT NULL COMMENT '是否重做',
  `go_time` int(11) NOT NULL COMMENT '开始考试时间',
  `end_time` int(11) NOT NULL COMMENT '结束考试时间',
  `ing_time` int(11) NOT NULL COMMENT '有效考试时间',
  `visits` int(11) NULL DEFAULT NULL COMMENT '总访问量',
  `creat_time` int(11) NULL DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ex_tpaper
-- ----------------------------
INSERT INTO `ex_tpaper` VALUES (1, 0, '计算机模拟考试', '12', 1, '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- ----------------------------
-- Table structure for ex_users
-- ----------------------------
DROP TABLE IF EXISTS `ex_users`;
CREATE TABLE `ex_users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码',
  `salt` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码盐',
  `nickname` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '昵称',
  `avatar` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '头像',
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电子邮箱',
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '手机号码',
  `g_id` int(10) NULL COMMENT '部门',
  `type` tinyint(2) NOT NULL COMMENT '身份',
  `loginfailure` tinyint(1) NULL DEFAULT NULL COMMENT '失败次数',
  `logintime` int(10) NULL DEFAULT NULL COMMENT '登录时间',
  `ip` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ip地址',
  `creat_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `status` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ex_users
-- ----------------------------
INSERT INTO `ex_users` VALUES (1, 'admin', 'admin', 'fds12', '测试', 'touxiang', '0109@qq.com', '1521746375', 1, 2, 123, 123, NULL, 123, 123, NULL);
INSERT INTO `ex_users` VALUES (2, '123', '123', '123', '132', 'fdsf', '101@baidu.com', '151515111', 1, 2, 1, 123, NULL, 123, 123, NULL);

-- ----------------------------
-- Table structure for ex_version
-- ----------------------------
DROP TABLE IF EXISTS `ex_version`;
CREATE TABLE `ex_version`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `oldversion` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '旧版本号',
  `newversion` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '新版本号',
  `packagesize` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '包大小',
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '升级内容',
  `downloadurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '下载地址',
  `enforce` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '强制更新',
  `createtime` int(10) NOT NULL DEFAULT 0 COMMENT '创建时间',
  `updatetime` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT 0 COMMENT '权重',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '版本表' ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
