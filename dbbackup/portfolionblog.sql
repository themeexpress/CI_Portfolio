-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 05:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolionblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `education` varchar(255) NOT NULL,
  `interest` text NOT NULL,
  `experience` text NOT NULL,
  `achievement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Woocomerce', 'All woocommerce related projects are here. I have completed almost 500 woocommerce sites. Here are some of them. Please visit. ', 1),
(3, 'Spa ', 'All Spa related websites are listed here. ', 1),
(4, 'Restaurant ', 'All Restaurant websites are listed here. ', 1),
(5, 'Corporate', 'All corporate related websites are listed here', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_email` varchar(200) NOT NULL,
  `client_contact` varchar(200) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `client_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_email`, `client_contact`, `comments`, `client_status`) VALUES
(1, 'Brandon Do Yola', 'brandondow@gmail.com', 'Wp Monoster, USA', 'Awesome Client and Payment', 1),
(3, 'Linkon Bros', 'linkon@brosinc.com', '22/B, NY, USA', 'Big team, big company and big hearten person', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_utility`
--

CREATE TABLE `home_utility` (
  `utility_id` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE `portfolio_items` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `porfolio_description` text NOT NULL,
  `portfolio_image` varchar(255) NOT NULL,
  `live_link` varchar(255) NOT NULL,
  `github_link` varchar(255) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`portfolio_id`, `portfolio_name`, `client_id`, `category_id`, `porfolio_description`, `portfolio_image`, `live_link`, `github_link`, `duration`, `publication_status`, `comments`) VALUES
(1, 'Bicycle Woocommerce', 1, 1, '<p>Bicycle woocommerce project. It is a awesome project</p>', 'uploads/girl1.jpg', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '5', 1, 'Large project'),
(2, 'Grand Restaurant', 3, 4, '<p>Grand Restaurant project is very large project of restaurant. \r\n\r\nGrand Restaurant project is very large project of restaurant. \r\n\r\nGrand Restaurant project is very large project of restaurant. \r\n\r\nGrand Restaurant project is very large project of restaurant.\r\n\r\n</p>', 'uploads/girl2.jpg', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '25', 1, 'Very large and great project'),
(3, 'Zeet Spa', 3, 3, '<p>\r\n\r\nCodeIgniter is an<b> Application Development Framework</b> - a toolkit - for people who build web sites using <u>PHP. Its goal is to enable</u> you to develop projects much faster than you could if you were <b>writing code from scratch</b>, by providing a rich set of libraries for commonly \r\n\r\n<br></p>', 'uploads/girl21.jpg', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '20', 1, 'Big team, big company and big hearten person'),
(4, 'Futura Inc.', 1, 5, '<p>\r\n\r\n Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task. </p><p></p><ul><li> Its goal is to enable you to develop projects much faster than you could if </li><li>you were writing code from scratch, by providing a rich </li></ul><p></p><p>set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.\r\n\r\n<br></p>', 'uploads/gallery1.jpg', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '28', 1, 'Very loyal and Great'),
(5, 'Imu Restaurant', 1, 4, '<p>\r\n\r\n Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.\r\n\r\n<br></p>', 'uploads/sale.png', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '2', 0, 'Very loyal and Great'),
(6, 'Mahedi Spa Center', 3, 3, '<p><b><i>Mahedi Spa center </i></b>is a famous spa in the city. He is very professonal Beauty expert and owner of the Spa. </p>', '', 'http://mahedispa.com', 'http://www.github.com/mehedispa', '3', 1, 'Very large and great project'),
(7, 'Mahedi Spa Center', 1, 1, '<p>\r\n\r\nWhen registering a post type, always register your taxonomies using the <code>taxonomies</code>argument. If you do not, the taxonomies and post type will not be recognized as connected when using filters such as <code>parse_query</code> or <code>pre_get_posts</code>. This can lead to unexpected results and failures.\r\n\r\n<br></p>', '', 'http://mahedispa.com', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '3', 1, 'dd'),
(8, 'Mahedi Spa Center', 3, 3, '<p>\r\n\r\nWhen registering a post type, always register your taxonomies using the <code>taxonomies</code>argument. If you do not, the taxonomies and post type will not be recognized as connected when using filters such as <code>parse_query</code> or <code>pre_get_posts</code>. This can lead to unexpected results and failures.\r\n\r\n<br></p>', 'uploads/36724761_2046918735378266_672251850287742976_n.jpg', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', 'https://bitbucket.org/ProgrammerGeek007/portfolionblog/src/master/', '4', 1, 'Very loyal and Great');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Md. Kamrul Islam', 'kkislam33@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Md. Mehedi Hasan', 'mahedicsit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `home_utility`
--
ALTER TABLE `home_utility`
  ADD PRIMARY KEY (`utility_id`);

--
-- Indexes for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home_utility`
--
ALTER TABLE `home_utility`
  MODIFY `utility_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
