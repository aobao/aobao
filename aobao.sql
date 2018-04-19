-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-04-19 11:02:40
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aobao`
--

-- --------------------------------------------------------

--
-- 表的结构 `carinfo`
--

CREATE TABLE IF NOT EXISTS `carinfo` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `type` varchar(2000) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ename` varchar(40) NOT NULL,
  `introduce` varchar(300) NOT NULL,
  `eintro` varchar(300) NOT NULL,
  `price` float(12,2) NOT NULL,
  `cid` int(11) NOT NULL,
  `des` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `carinfo`
--

INSERT INTO `carinfo` (`id`, `type`, `img`, `name`, `ename`, `introduce`, `eintro`, `price`, `cid`, `des`) VALUES
(1, '澳宝SUV', '/aobaoweb/upload/2018-04-18/1524064747.2626109086tj_11.png', '澳宝SUV 980', 'AOBAOTYPE', '非常好的车', 'ENAKIDNCHCAD', 29900000.00, 0, ''),
(2, '澳宝s2系列', '/aobaoweb/upload/2018-04-18/1524063349.8321679177tj3_03.png', '澳宝科技车', 'AOBAO TEND', '好车你值得拥有', 'EANDKIENA', 445000.00, 0, '超强动力'),
(3, '澳宝s1系列', '/aobaoweb/upload/2018-04-18/1524064731.707465271tj_13.png', '澳宝车名车', 'AOBAO TEND', '没什么可以和他像比较', 'AOBAO JEH', 2000000.00, 0, '这车神了'),
(4, 'weweq', '/aobaoweb/upload/2018-04-18/1524029626.8977637736tj_09.png', 'asdd', 'wqeew', 'ewwer', 'wewe', 12345.00, 0, 'dewqe'),
(5, '澳宝s7系列', '/aobaoweb/upload/2018-04-18/1524064548.545110073tj_11.png', '澳宝宝石车', 'AOBAOBUS', '超级好开，全自动', 'VERY GOOD', 3990000.00, 0, '没人像错过的车'),
(6, '澳宝SUV ', '/aobaoweb/upload/2018-04-18/1524064774.8411625644tj_11.png', '澳宝加长车', 'VARY LOOG', '好的不能再好', 'NICE VERY', 4990000.00, 0, '没有最好只有更好'),
(7, '奥宝汽车S1系列', '/aobaoweb/upload/2018-04-19/1524102893.6599679423car_13.png', '新奥迪S1', 'SPORTBACK E-TRON', '无', '无', 39900000.00, 1, '无'),
(8, '奥宝汽车R8系列', '/aobaoweb/upload/2018-04-19/1524103148.0644249295car_15.png', '新奥迪R8 V10', 'COUPE PERFORMANCE', '无', '无', 100000000.00, 1, '无'),
(9, '奥宝汽车RS7系列', '/aobaoweb/upload/2018-04-19/1524103216.5183407002car_17.png', '新奥迪R57', 'SPORTBACK PERFORMANCE', '无', '无', 1698800000.00, 1, '无'),
(10, '奥宝汽车RS7系列', '/aobaoweb/upload/2018-04-19/1524103216.5183407002car_17.png', '新奥迪R57', 'SPORTBACK PERFORMANCE', '无', '无', 1698800000.00, 1, '无'),
(11, '奥宝汽车RS7系列', '/aobaoweb/upload/2018-04-19/1524103216.5183407002car_17.png', '新奥迪R57', 'SPORTBACK PERFORMANCE', '无', '无', 1698800000.00, 1, '无'),
(12, '奥宝汽车S1系列', '/aobaoweb/upload/2018-04-19/1524102893.6599679423car_13.png', '新奥迪S1', 'SPORTBACK E-TRON', '无', '无', 39900000.00, 1, '无'),
(13, '奥宝汽车S1系列', '/aobaoweb/upload/2018-04-19/1524102893.6599679423car_13.png', '新奥迪S1', 'SPORTBACK E-TRON', '无', '无', 39900000.00, 1, '无'),
(14, '奥宝汽车RS7系列', '/aobaoweb/upload/2018-04-19/1524103216.5183407002car_17.png', '新奥迪R57', 'SPORTBACK PERFORMANCE', '无', '无', 1698800000.00, 1, '无'),
(15, '奥宝汽车R8系列', '/aobaoweb/upload/2018-04-19/1524103148.0644249295car_15.png', '新奥迪R8 V10', 'COUPE PERFORMANCE', '无', '无', 100000000.00, 1, '无'),
(16, '奥宝汽车S1系列', '/aobaoweb/upload/2018-04-19/1524102893.6599679423car_13.png', '新奥迪S1', 'SPORTBACK E-TRON', '无', '无', 39900000.00, 1, '无'),
(17, '奥宝汽车R8系列', '/aobaoweb/upload/2018-04-19/1524103148.0644249295car_15.png', '新奥迪R8 V10', 'COUPE PERFORMANCE', '无', '无', 100000000.00, 1, '无'),
(18, '奥宝汽车S1系列', '/aobaoweb/upload/2018-04-19/1524102893.6599679423car_13.png', '新奥迪S1', 'SPORTBACK E-TRON', '无', '无', 39900000.00, 1, '无');

-- --------------------------------------------------------

--
-- 表的结构 `concat`
--

CREATE TABLE IF NOT EXISTS `concat` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(1200) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `concat`
--

INSERT INTO `concat` (`id`, `name`, `tel`, `email`, `message`) VALUES
(2, 'dfghjkl', 11111, '1343hhhhH@h', 'nidejka'),
(3, '王', 123979174, '15735182@qq.com', '你在这里等着，我过去买个句子就回来'),
(4, '网', 1577361, '56125@qq.com', '我什么都不想说欸来');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(2000) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `des` varchar(2000) DEFAULT NULL,
  `look` int(30) NOT NULL,
  `img` varchar(2000) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` int(21) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `des`, `look`, `img`, `time`, `type`) VALUES
(1, '突破科技未来科技', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终实现可持续的低碳优质交通。此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装配流程。', 'dasdaaaaaa', 20, '/aobaoweb/upload/2018-04-19/1524100675.6522823057center_11.png', '2018-04-19 09:21:04', 0),
(2, '卓越腾飞  前进无尽', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', 'dasd', 20, '/aobaoweb/upload/2018-04-19/1524100918.915130966center_14.png', '2018-04-19 09:22:00', 0),
(3, '一直被模仿  从未被超越', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', 'dasd', 20, '/aobaoweb/upload/2018-04-19/1524100943.2895286297center_16.png', '2018-04-19 09:22:27', 0),
(6, '重装上阵  飞驰奥宝', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', 'asdasdad', 0, '/aobaoweb/upload/2018-04-19/1524100980.8436484149center_18.png', '2018-04-19 09:23:01', 0),
(7, '见车见志  奔向未来', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终实现可持续的低碳优质交通。。', 'dasdaaaaaa', 20, '/aobaoweb/upload/2018-04-19/1524101344.4414291502center_20.png', '2018-04-19 09:29:04', 0),
(8, '奥宝轻量科技', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', '始终如一，突破科技，启迪未来', 999, '/aobaoweb/upload/2018-04-19/1524101359.7563695583center_25.png', '2018-04-19 09:29:21', 1),
(10, '奥宝团队的力量', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', '如梦如初，见证奥迪推崇的动感与优雅。', 520, '/aobaoweb/upload/2018-04-19/1524101469.4196682374center_45.png', '2018-04-19 09:31:10', 1),
(11, '领先科技前沿', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', '爱如潮水，感受奥迪前沿科技', 1000, '/aobaoweb/upload/2018-04-19/1524101476.749219326center_33.png', '2018-04-19 09:31:17', 1),
(12, '突破科技未来科技', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终实现可持续的低碳优质交通。此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装配流程。', 'dasdaaaaaa', 20, '/aobaoweb/upload/2018-04-19/1524101359.7563695583center_25.png', '2018-04-19 10:37:28', 0),
(13, '卓越腾飞  前进无尽', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', 'dasd', 20, '/aobaoweb/upload/2018-04-19/1524101469.4196682374center_45.png', '2018-04-19 10:38:00', 0),
(14, '一直被模仿  从未被超越', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', 'dasd', 20, '/aobaoweb/upload/2018-04-19/1524100675.6522823057center_11.png', '2018-04-19 10:35:52', 0),
(15, '重装上阵  飞驰奥宝', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', 'asdasdad', 0, '/aobaoweb/upload/2018-04-19/1524100980.8436484149center_18.png', '2018-04-19 09:23:01', 0),
(16, '见车见志  奔向未来', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终实现可持续的低碳优质交通。。', 'dasdaaaaaa', 20, '/aobaoweb/upload/2018-04-19/1524101344.4414291502center_20.png', '2018-04-19 09:29:04', 0),
(17, '奥宝轻量科技', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', '始终如一，突破科技，启迪未来', 999, '/aobaoweb/upload/2018-04-19/1524100980.8436484149center_18.png', '2018-04-19 10:36:35', 1),
(18, '奥宝团队的力量', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', '如梦如初，见证奥迪推崇的动感与优雅。', 520, '/aobaoweb/upload/2018-04-19/1524101344.4414291502center_20.png', '2018-04-19 10:36:47', 1),
(19, '领先科技前沿', '奥宝超轻量科技象征着奥迪“突破科技，启迪未来”的品牌理念将增加一个新维度的渴望。其目的就是要以更少资源实现更多结果，以达到最有效的创意总和。要实现这一目标，需借助各项计划来强化创新力度最终此外，由于采用了铝压铸工艺使其不仅减轻了车重，还节省了材料，简化了装。', '爱如潮水，感受奥迪前沿科技', 1000, '/aobaoweb/upload/2018-04-19/1524101476.749219326center_33.png', '2018-04-19 09:31:17', 1);

-- --------------------------------------------------------

--
-- 表的结构 `try`
--

CREATE TABLE IF NOT EXISTS `try` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `xilie` varchar(50) NOT NULL,
  `province` varchar(20) NOT NULL,
  `jingxiao` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `try`
--

INSERT INTO `try` (`id`, `type`, `xilie`, `province`, `jingxiao`, `name`, `sex`, `phone`, `date`, `message`) VALUES
(1, '奥宝A3', '奥宝速腾', '太原奥宝', '太原奥宝', '张三', '男', '1234567', '2018/4/20', '希望能尽快试车'),
(2, '澳宝把', '澳宝SUV', '山西', '澳宝加成', '王者', 'on', '145361836', '2019-4-59', '波不想数日神'),
(3, '9877', '好车', '山西', '澳宝加', '王者了折', '男', '157278125', '1028=127', '我不想说');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
