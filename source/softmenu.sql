-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2015 at 10:12 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `softmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL auto_increment,
  `employeecodeno` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `employeecodeno`, `username`, `password`, `status`) VALUES
(3, 'exxxx1', 'kipkip', 22222222, 1),
(4, 'e33333', 'kipsang', 123456789, 0),
(14, 'e1010', 'lennarmilgo', 703987829, 1),
(8, 'e763443', 'bettkip', 1234567, 1),
(9, 'e1321423', 'weldonbett', 716844016, 1),
(10, 'e63478265734', 'lennarmilgoh', 12345, 1),
(11, 'e63478265734', 'lennarmilgoh', 12345, 1),
(12, 'e43534', 'drmetto', 2222, 1),
(15, 'e213424', 'wel', 10041004, 1);

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `id` int(200) NOT NULL auto_increment,
  `xxx` int(100) NOT NULL,
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id`, `xxx`, `food`, `price`) VALUES
(1, 0, 'White tea', 150),
(2, 0, 'Black coffee', 90),
(3, 0, 'Black tea', 50),
(4, 0, 'Lemon tea', 270),
(5, 0, 'White coffee', 90),
(6, 0, 'Ice tea', 70),
(7, 1, 'Sour porridge', 150),
(8, 1, 'Porridge', 45),
(9, 0, 'Capuccino', 677890),
(10, 1, 'Hot milk', 50),
(11, 1, 'Cold milk', 45),
(12, 1, 'Pink tea', 200),
(14, 1, 'Chocolate milk', 150),
(15, 1, 'Cocoa tea', 100),
(16, 0, 'Tangawizi tea', 2342),
(17, 1, 'Sirlanca tea', 360),
(39, 1, 'milk shake coffee', 70),
(40, 1, 'Soft capuccino', 120);

-- --------------------------------------------------------

--
-- Table structure for table `cuttlery`
--

CREATE TABLE `cuttlery` (
  `id` int(3) NOT NULL auto_increment,
  `spoons` text NOT NULL,
  `sss` int(23) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cuttlery`
--

INSERT INTO `cuttlery` (`id`, `spoons`, `sss`) VALUES
(1, 'Soup spoon', 1),
(2, 'Fish knife', 1),
(3, 'Dinner fork', 1),
(4, 'Dessert fork', 1),
(5, 'Dinner knife', 1),
(6, 'Runners', 1),
(7, 'Souviets', 1),
(8, 'Tooth pick', 1),
(9, 'Small bowl', 1),
(10, 'Tea spoon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(100) NOT NULL auto_increment,
  `xxx` int(200) NOT NULL,
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `xxx`, `food`, `price`) VALUES
(1, 1, 'Pepsi', 150),
(2, 1, 'Yoghurt', 200),
(3, 1, 'Strawberry', 280),
(4, 1, 'Fanta 5OOml', 56),
(5, 1, 'Milk shake', 90),
(6, 1, 'Grape vine', 500),
(7, 1, 'Novida', 150),
(8, 1, 'Alvaro', 160),
(9, 1, 'Mix delmonte', 500),
(10, 1, 'Mango delmonte\r\n', 450),
(11, 1, 'Sprite', 120),
(12, 1, 'Dasani water ', 200),
(13, 1, 'Pineable juice', 300),
(14, 1, 'Banana juice', 200),
(15, 1, 'Sour milk', 200),
(24, 1, 'Peach sorbet', 450);

-- --------------------------------------------------------

--
-- Table structure for table `evening`
--

CREATE TABLE `evening` (
  `id` int(200) NOT NULL auto_increment,
  `xxx` int(200) NOT NULL,
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `evening`
--

INSERT INTO `evening` (`id`, `xxx`, `food`, `price`) VALUES
(1, 1, 'Minced meat/ Ugali', 560),
(2, 1, 'Fried beef', 240),
(3, 1, 'Baked ugali', 120),
(4, 1, 'Sauted spinach', 80),
(5, 1, 'Boiled potato cassavs', 300),
(6, 1, 'Tropical rice', 200),
(7, 1, 'Berbeque sauce', 150),
(8, 1, 'Roast beef/ brown rice', 450),
(9, 1, 'Fried turkey full', 790),
(10, 1, 'Fried eggs /ugali', 200),
(11, 0, 'Mutton fry ', 150),
(12, 1, 'Cheese', 150),
(13, 1, 'Gamishes full ', 230),
(14, 1, 'Fish roast and Ugali', 350);

-- --------------------------------------------------------

--
-- Table structure for table `k`
--

CREATE TABLE `k` (
  `id` int(2) NOT NULL,
  `type` varchar(89) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `k`
--

INSERT INTO `k` (`id`, `type`) VALUES
(1, 'lunch'),
(2, 'evening'),
(3, 'drinks'),
(4, 'breakfast'),
(0, 'desserts');

-- --------------------------------------------------------

--
-- Table structure for table `kip`
--

CREATE TABLE `kip` (
  `id` int(200) NOT NULL auto_increment,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kip`
--


-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(200) NOT NULL auto_increment,
  `xxx` int(10) NOT NULL default '1',
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `xxx`, `food`, `price`) VALUES
(1, 1, 'Special pilau', 250),
(2, 1, 'Fish fry full', 450),
(3, 1, 'Stew/ugali', 280),
(4, 1, 'Spagheti/ stew', 400),
(5, 1, 'Nyamachoma/brown ugali', 470),
(6, 1, 'Minced meat/rice', 230),
(7, 1, 'Beans/spagheti', 300),
(8, 1, 'Chicken fry full/ugali', 700),
(9, 1, 'Meat fry/sweet potato', 400),
(10, 1, 'Sweet potatoes', 255),
(11, 1, 'Pork meat', 300),
(12, 1, 'Cabbages/ Ugali', 230),
(13, 1, 'French beans/chapati', 400),
(14, 1, 'Chips/sausage', 250),
(15, 1, 'Pizza', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `id` int(100) NOT NULL auto_increment,
  `food` text NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `tableno` varchar(200) NOT NULL,
  `serve` int(2) NOT NULL,
  `cust` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=594 ;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `food`, `quantity`, `price`, `tableno`, `serve`, `cust`, `date`) VALUES
(567, 'Fried beef', 2, 480, '2a', 0, 'BKp', '0000-00-00'),
(566, 'Cheese', 4, 600, '1a', 0, 'BKp', '0000-00-00'),
(565, 'Cheese', 1, 150, '1a', 0, 'BKp', '0000-00-00'),
(564, 'Cocoa tea', 1, 100, '1a', 0, 'dXB', '0000-00-00'),
(563, '3245242', 4, 0, '2b', 1, 'fXB', '0000-00-00'),
(562, '3245242', 3, 0, '2b', 1, 'R7D', '0000-00-00'),
(561, 'Alvaro', 4, 640, '2a', 1, 'j6k', '0000-00-00'),
(560, 'Bread croutons', 3, 210, '2a', 0, 'N8c', '0000-00-00'),
(559, 'Grape vine', 3, 1500, '1a', 1, 'r3C', '0000-00-00'),
(558, 'Banana juice', 4, 800, '1a', 1, 'r3C', '0000-00-00'),
(557, 'Dasani water ', 1, 200, '2a', 1, '73T', '0000-00-00'),
(556, 'Chocolate milk', 1, 150, '1a', 1, 'Z9k', '0000-00-00'),
(555, 'Sausages ', 5, 600, '3c', 1, 'TXB', '0000-00-00'),
(554, 'Mash cakes', 5, 450, '3d', 1, 'TXB', '0000-00-00'),
(553, 'Brown chapati', 4, 280, '2c', 1, 'TXB', '0000-00-00'),
(552, 'Doughnuts', 5, 225, '3d', 1, 'TXB', '0000-00-00'),
(551, 'Berbeque sauce', 3, 450, '3b', 1, 'TXB', '0000-00-00'),
(550, 'Boiled potato cassavs', 3, 900, '2c', 1, 'TXB', '0000-00-00'),
(549, 'Gamishes full ', 1, 230, '1a', 1, 'TXB', '0000-00-00'),
(548, 'Chips/sausage', 3, 750, '2b', 1, 'TXB', '0000-00-00'),
(547, 'Cabbages/ Ugali', 3, 690, '2b', 1, 'TXB', '0000-00-00'),
(546, 'Meat fry/sweet potato', 4, 1600, '2b', 1, 'TXB', '0000-00-00'),
(545, 'Doughnuts', 4, 180, '1b', 1, 'QhY', '0000-00-00'),
(544, 'Cocoa tea', 2, 200, '1b', 1, 'QhY', '0000-00-00'),
(543, 'Chips/sausage', 4, 1000, '1a', 1, 'pxX', '0000-00-00'),
(542, 'Minced meat/rice', 4, 920, '3b', 1, 'pxX', '0000-00-00'),
(541, 'Cold milk', 2, 90, '2a', 1, '8pd', '0000-00-00'),
(540, 'Chocolate milk', 4, 600, '2c', 1, '8pd', '0000-00-00'),
(539, 'milk shake coffee', 4, 280, '1a', 1, 'mzk', '0000-00-00'),
(538, 'Chocolate milk', 1, 150, '1a', 1, 'mzk', '0000-00-00'),
(537, 'Bread croutons', 2, 140, '1b', 1, 'Zt9', '0000-00-00'),
(536, 'Alvaro', 1, 160, '1a', 1, 'dRw', '0000-00-00'),
(535, 'Alvaro', 1, 160, '1a', 1, 'dRw', '0000-00-00'),
(534, 'Chocolate milk', 1, 150, '1a', 1, 'tKw', '0000-00-00'),
(533, 'Brown chapati', 2, 140, '2a', 1, 'rWj', '0000-00-00'),
(532, 'Baked ugali', 1, 120, '1c', 1, 'rWj', '0000-00-00'),
(531, 'Beans/spagheti', 5, 1500, '3d', 1, 'xHR', '0000-00-00'),
(530, 'Beans/spagheti', 5, 1500, '1a', 1, 'xHR', '0000-00-00'),
(529, 'Alvaro', 5, 800, '3d', 1, 'xHR', '0000-00-00'),
(528, 'Chocolate milk', 5, 750, '3d', 1, 'Ppv', '0000-00-00'),
(527, 'Cocoa tea', 4, 400, '2b', 1, 'NZn', '0000-00-00'),
(524, 'Hot milk', 4, 200, '2a', 1, 'LfY', '0000-00-00'),
(523, 'Chocolate milk', 1, 150, '1a', 1, 'LfY', '0000-00-00'),
(522, 'Alvaro', 3, 480, '1a', 1, '4p2', '0000-00-00'),
(521, 'Fanta 5OOml', 1, 56, '2c', 1, 'KwF', '0000-00-00'),
(520, 'Pink tea', 4, 800, '3b', 1, 'KwF', '0000-00-00'),
(519, 'Fanta 5OOml', 1, 56, '2c', 1, 'KwF', '0000-00-00'),
(518, 'Banana juice', 4, 800, '1a', 1, 'KwF', '0000-00-00'),
(517, 'Alvaro', 1, 160, '1a', 1, 'KwF', '0000-00-00'),
(525, 'milk shake coffee', 1, 70, '2a', 1, 'kyD', '0000-00-00'),
(526, 'Chocolate milk', 1, 150, '1a', 1, 'RpL', '0000-00-00'),
(516, 'Hot milk', 1, 50, '1a', 1, '6DC', '0000-00-00'),
(515, 'Chocolate milk', 5, 750, '2d', 1, '6DC', '0000-00-00'),
(508, 'Hot milk', 5, 250, '2c', 1, '1ln', '0000-00-00'),
(509, 'Chocolate milk', 5, 750, '3c', 1, 'v29', '0000-00-00'),
(510, 'Pink tea', 1, 200, '1a', 1, 'v29', '0000-00-00'),
(511, 'Soft capuccino', 1, 120, '1a', 1, 'v29', '0000-00-00'),
(512, 'milk shake coffee', 4, 280, '2b', 1, 'v29', '0000-00-00'),
(513, 'milk shake coffee', 4, 280, '2b', 1, 'v29', '0000-00-00'),
(514, 'Hot milk', 1, 50, '1a', 1, 'v29', '0000-00-00'),
(568, 'Bread rolls', 2, 120, '1c', 0, 'Lkh', '0000-00-00'),
(569, 'Alvaro', 5, 800, '1a', 0, 'KB8', '0000-00-00'),
(570, 'Fanta 5OOml', 5, 280, '1a', 0, 'KB8', '0000-00-00'),
(571, 'Fish fry full', 3, 1350, '3a', 0, 'TmZ', '2014-02-14'),
(572, 'Alvaro', 1, 160, '1a', 0, 'Yzv', '2014-02-14'),
(573, 'Banana juice', 1, 200, '1a', 0, 'Yzv', '2014-02-14'),
(574, 'Hot milk', 3, 150, '2b', 0, 'ZhT', '2014-02-14'),
(575, 'Soft capuccino', 5, 600, '3d', 0, 'ZhT', '2014-03-10'),
(576, 'Porridge', 1, 45, '1a', 0, 'ZhT', '2010-03-14'),
(577, 'Porridge', 2, 90, '1a', 0, 'ZhT', '2010-03-14'),
(578, 'Porridge', 4, 180, '2a', 0, 'gvC', '2012-03-14'),
(579, 'Hot milk', 1, 50, '2b', 0, 'gvC', '2012-03-14'),
(580, 'Chocolate cakes', 4, 600, '2a', 0, 'gvC', '2012-03-14'),
(581, 'Brown chapati', 3, 210, '2a', 0, 'gvC', '2012-03-14'),
(582, 'Chocolate milk', 5, 750, '3d', 0, 'WVg', '2003-12-14'),
(583, 'Cocoa tea', 5, 500, '3d', 0, 'WVg', '2003-12-14'),
(584, 'Cold milk', 4, 180, '3d', 0, 'WVg', '2014-03-12'),
(585, 'Hot milk', 4, 200, '3b', 0, 'WVg', '2014-03-12'),
(586, 'Fanta 5OOml', 1, 56, '1a', 0, 'WVg', '2014-03-12'),
(587, 'Mango delmonte\r\n', 4, 1800, '2a', 0, 'WVg', '2014-03-12'),
(588, 'Mix delmonte', 4, 2000, '3a', 0, 'WVg', '2014-03-12'),
(589, 'Pepsi', 4, 600, '2c', 0, 'WVg', '2014-03-12'),
(590, 'Fried eggs /ugali', 1, 200, '1c', 0, 'WVg', '2014-03-12'),
(591, 'Fried beef', 4, 960, '1a', 0, 'WVg', '2014-03-12'),
(592, 'Chicken fry full/ugali', 5, 3500, '3b', 0, 'LYk', '2014-04-30'),
(593, 'Fanta 5OOml', 1, 56, '1a', 0, '7vK', '2014-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(34) NOT NULL auto_increment,
  `name` text NOT NULL,
  `chairno` varchar(23) NOT NULL,
  `serve` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `chairno`, `serve`) VALUES
(1, 'Brown sugar', '3a', 1),
(2, 'Brown sugar', '3a', 1),
(3, 'Brown sugar', '3a', 1),
(4, 'Brown sugar', '3a', 1),
(5, 'Brown sugar', '3a', 1),
(6, 'Brown sugar', '3a', 1),
(7, 'Dessert fork', '1a', 1),
(8, 'Dessert fork', '2b', 1),
(9, 'Dinner knife', '2c', 1),
(10, 'Brown sugar', '3a', 1),
(11, 'Castors', '3b', 1),
(12, 'Chilli sauce', '1a', 1),
(13, 'Souviets', '1a', 1),
(14, 'Brown sugar', '1a', 1),
(15, 'Brown sugar', '2b', 1),
(16, 'Brown sugar', '2b', 1),
(17, 'Brown sugar', '3d', 1),
(18, 'Dessert fork', '3c', 1),
(19, 'Dessert fork', '1a', 1),
(20, 'Brown sugar', '2b', 1),
(21, 'Crack nuts', '1a', 1),
(22, 'Chilli sauce', '2c', 1),
(23, 'Castors', '2a', 1),
(24, 'Castors', '2b', 1),
(25, 'Chocolate sauce', '2a', 1),
(26, 'Crack nuts', '2d', 0),
(27, 'Chilli sauce', '2a', 1),
(28, 'Honey ', '3b', 0),
(29, 'Honey ', '3b', 0),
(30, 'Castors', '2a', 1),
(31, 'Buttermilk', '2d', 0),
(32, 'Dessert fork', '1a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(200) NOT NULL auto_increment,
  `ussername` varchar(100) NOT NULL,
  `password` varchar(110) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `ussername`, `password`) VALUES
(1, 'admin', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `ses`
--

CREATE TABLE `ses` (
  `id` int(20) NOT NULL auto_increment,
  `cust` varchar(20) collate latin1_general_ci NOT NULL,
  `sta` varchar(20) collate latin1_general_ci NOT NULL default '0',
  `use` varchar(30) collate latin1_general_ci NOT NULL default '3',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ses`
--

INSERT INTO `ses` (`id`, `cust`, `sta`, `use`) VALUES
(1, '12', '0', '3'),
(2, '13', '0', '3'),
(3, '1', '1', '3'),
(4, '2', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(13) NOT NULL auto_increment,
  `xxx` int(2) NOT NULL,
  `food` text NOT NULL,
  `price` int(34) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `xxx`, `food`, `price`) VALUES
(1, 1, 'Bread croutons', 70),
(2, 1, 'Scones', 45),
(3, 1, 'Bread rolls', 60),
(4, 1, 'crips', 100),
(5, 1, 'Mash cakes', 90),
(6, 1, 'Chocolate cakes', 150),
(7, 1, 'Brown chapati', 70),
(8, 1, 'Doughnuts', 45),
(9, 1, 'Ndazi', 60),
(10, 1, 'Fried eggs', 100),
(11, 1, 'Sausages ', 120),
(12, 1, 'Ginger biscuits', 50),
(13, 1, 'Coiled cakes', 150);

-- --------------------------------------------------------

--
-- Table structure for table `spices`
--

CREATE TABLE `spices` (
  `id` int(3) NOT NULL auto_increment,
  `spice` text NOT NULL,
  `ss` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `spices`
--

INSERT INTO `spices` (`id`, `spice`, `ss`) VALUES
(1, 'Chilli sauce', 1),
(2, 'Trilled soup', 1),
(3, 'Salt', 1),
(4, 'Crack nuts', 1),
(5, 'smash coconuts', 1),
(6, 'Chocolate sauce', 1),
(7, 'Suitanas', 1),
(8, 'Honey ', 1),
(9, 'Golden syrup', 1),
(10, 'Brown sugar', 1),
(11, 'Cube sugar', 1),
(12, 'Castors', 1),
(13, 'Buttermilk', 1),
(14, 'Soy sauce', 1),
(15, 'Margarine', 1);
