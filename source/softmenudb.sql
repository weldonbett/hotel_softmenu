-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2013 at 02:20 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `softmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `employeecodeno` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(12, 'e43534', 'drmetto', 2222, 1);

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE IF NOT EXISTS `breakfast` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `xxx` int(100) NOT NULL,
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id`, `xxx`, `food`, `price`) VALUES
(1, 0, 'White tea', 150),
(2, 1, 'Black coffee', 100),
(3, 0, 'Black tea', 50),
(4, 1, 'Lemon tea', 270),
(5, 0, 'White coffee', 90),
(6, 1, 'Ice tea', 70),
(7, 1, 'Sour porridge', 150),
(8, 1, 'Porridge', 45),
(9, 1, 'Capuccino', 150),
(10, 1, 'Hot milk', 50),
(11, 1, 'Cold milk', 45),
(12, 1, 'Pink tea', 200),
(13, 1, 'Pink tea', 200),
(14, 1, 'Chocolate milk', 150),
(15, 1, 'Cocoa tea', 100),
(16, 1, 'Tangawizi tea', 2342),
(17, 1, 'Sirlanca tea', 360),
(39, 1, 'milk shake coffee', 70),
(40, 1, 'Soft capuccino', 120);

-- --------------------------------------------------------

--
-- Table structure for table `cuttlery`
--

CREATE TABLE IF NOT EXISTS `cuttlery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `spoons` text NOT NULL,
  `sss` int(23) NOT NULL,
  PRIMARY KEY (`id`)
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

CREATE TABLE IF NOT EXISTS `drinks` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `xxx` int(200) NOT NULL,
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY (`id`)
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
(8, 1, 'Alvaro', 200),
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

CREATE TABLE IF NOT EXISTS `evening` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `xxx` int(200) NOT NULL,
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(13, 1, 'Gamishes full ', 230);

-- --------------------------------------------------------

--
-- Table structure for table `kip`
--

CREATE TABLE IF NOT EXISTS `kip` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kip`
--


-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE IF NOT EXISTS `lunch` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `xxx` int(10) NOT NULL DEFAULT '1',
  `food` text NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `xxx`, `food`, `price`) VALUES
(1, 0, 'Special pilau', 290),
(2, 1, 'Fish fry full', 450),
(3, 1, 'Stew/ugali', 280),
(4, 1, 'Spagheti/ stew', 400),
(5, 1, 'Nyamachoma/brown ugali', 300),
(6, 1, 'Minced meat/rice', 230),
(7, 1, 'Beans/spagheti', 300),
(8, 1, 'Chicken fry full/ugali', 700),
(9, 1, 'Meat fry/sweet potato', 400),
(10, 1, 'Sweet potatoes', 290),
(11, 1, 'Pork meat', 300),
(12, 1, 'Cabbages/ Ugali', 230),
(13, 1, 'French beans/chapati', 400),
(14, 1, 'Chips/sausage', 250),
(15, 1, 'Pizza', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `food` text NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `tableno` varchar(200) NOT NULL,
  `serve` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=469 ;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `food`, `quantity`, `price`, `tableno`, `serve`) VALUES
(463, 'Brown chapati', 3, 210, '2c', 0),
(464, 'Scones', 2, 90, '3b', 0),
(465, 'Cheese', 3, 450, '2d', 0),
(466, 'Cocoa tea', 4, 400, '3a', 0),
(467, 'Beans/spagheti', 4, 1200, '2c', 0),
(457, 'Cheese', 2, 300, '1b', 1),
(458, 'Black coffee', 1, 100, '2d', 1),
(459, 'Chocolate cakes', 5, 750, '2a', 1),
(460, 'Brown chapati', 5, 350, '2d', 1),
(446, 'Baked ugali', 4, 480, '2b', 1),
(462, 'Chocolate cakes', 4, 600, '3a', 0),
(461, 'Doughnuts', 4, 180, '2b', 1),
(456, 'Fried eggs /ugali', 3, 600, '3b', 1),
(455, 'Fried beef', 3, 720, '2a', 1),
(454, 'Baked ugali', 4, 480, '2b', 1),
(453, 'Cocoa tea', 4, 400, '2b', 1),
(452, 'Black coffee', 2, 200, '1a', 1),
(451, 'Baked ugali', 1, 120, '3c', 1),
(468, 'Fanta 5OOml', 3, 168, '1c', 0),
(450, 'Fanta 5OOml', 4, 224, '3b', 1),
(449, 'Mango delmonte\r\n', 4, 1800, '2a', 1),
(448, 'Fried eggs /ugali', 4, 800, '3a', 1),
(447, 'Boiled potato cassavs', 4, 1200, '3c', 1),
(445, 'Fried turkey full', 3, 2370, '3b', 1),
(444, 'Gamishes full ', 1, 230, '1a', 1),
(443, 'Fried eggs /ugali', 1, 200, '1a', 1),
(442, 'Fried eggs /ugali', 1, 200, '1a', 1),
(441, 'Fried beef', 1, 240, '1a', 1),
(439, 'Black coffee', 1, 100, '1a', 1),
(438, 'Black coffee', 1, 100, '1a', 1),
(437, 'Black coffee', 2, 200, '2b', 1),
(436, 'Bread croutons', 1, 70, '1a', 1),
(435, 'Bread croutons', 1, 70, '1a', 1),
(434, 'Bread croutons', 1, 70, '1a', 1),
(433, 'Chips/sausage', 3, 750, '2c', 1),
(432, 'Special pilau', 1, 290, '1a', 1),
(431, 'Cabbages/ Ugali', 1, 230, '1a', 1),
(430, 'Cabbages/ Ugali', 1, 230, '1a', 1),
(429, 'Fish fry full', 1, 450, '1a', 1),
(428, 'Fish fry full', 1, 450, '1a', 1),
(426, 'Fish fry full', 1, 450, '1a', 1),
(427, 'Minced meat/ Ugali', 1, 560, '1a', 1),
(425, 'Alvaro', 1, 200, '1a', 1),
(424, 'Beans/spagheti', 1, 300, '1a', 1),
(423, 'Beans/spagheti', 1, 300, '1a', 1),
(422, 'Minced meat/ Ugali', 4, 2240, '2b', 1),
(421, 'Minced meat/ Ugali', 4, 2240, '2b', 1),
(420, 'Minced meat/ Ugali', 1, 560, '1a', 1),
(419, 'Black coffee', 1, 100, '1a', 1),
(440, 'Berbeque sauce', 1, 150, '1a', 1),
(418, 'Alvaro', 4, 800, '2c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(34) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `chairno` varchar(23) NOT NULL,
  `serve` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
(8, 'Dessert fork', '2b', 0),
(9, 'Dinner knife', '2c', 0),
(10, 'Brown sugar', '3a', 1),
(11, 'Castors', '3b', 0),
(12, 'Chilli sauce', '1a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `ussername` varchar(100) NOT NULL,
  `password` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `ussername`, `password`) VALUES
(1, 'admin', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE IF NOT EXISTS `snacks` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `xxx` int(2) NOT NULL,
  `food` text NOT NULL,
  `price` int(34) NOT NULL,
  PRIMARY KEY (`id`)
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

CREATE TABLE IF NOT EXISTS `spices` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `spice` text NOT NULL,
  `ss` int(20) NOT NULL,
  PRIMARY KEY (`id`)
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
