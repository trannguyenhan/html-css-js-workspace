

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `parent_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` VALUES(1, 'Electronics', 0);
INSERT INTO `categories` VALUES(2, 'Toys & Games', 0);
INSERT INTO `categories` VALUES(3, 'Camera', 1);
INSERT INTO `categories` VALUES(4, 'Security', 1);
INSERT INTO `categories` VALUES(5, 'Games', 2);
INSERT INTO `categories` VALUES(6, 'Puzzles', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` VALUES(1, 3, 'Product A', '34');
INSERT INTO `products` VALUES(2, 3, 'Product B', '40');
INSERT INTO `products` VALUES(3, 4, 'Product C', '50');
INSERT INTO `products` VALUES(4, 4, 'Product D', '50');
INSERT INTO `products` VALUES(5, 5, 'Product E', '44');
INSERT INTO `products` VALUES(6, 5, 'Product F', '55');
INSERT INTO `products` VALUES(7, 6, 'Product G', '45');
INSERT INTO `products` VALUES(8, 6, 'Product H', '23');

-- --------------------------------------------------------

--
-- Table structure for table `products_tags`
--

CREATE TABLE `products_tags` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `product_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products_tags`
--

INSERT INTO `products_tags` VALUES(1, 1, 1);
INSERT INTO `products_tags` VALUES(2, 1, 2);
INSERT INTO `products_tags` VALUES(3, 1, 3);
INSERT INTO `products_tags` VALUES(4, 2, 3);
INSERT INTO `products_tags` VALUES(5, 3, 4);
INSERT INTO `products_tags` VALUES(6, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` VALUES(1, 'Tag A');
INSERT INTO `tags` VALUES(2, 'Tag B');
INSERT INTO `tags` VALUES(3, 'Tag C');
INSERT INTO `tags` VALUES(4, 'Tag D');