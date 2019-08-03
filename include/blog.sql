-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 08:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `postid` mediumtext,
  `name` varchar(10000) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `postid`, `name`, `message`) VALUES
(11, '14', 'Biggi Droid', 'I love Bishop David Oyedepo'),
(14, '21', 'Biggi Droid', 'Nice'),
(15, '12', 'Biggi Droid', 'Very good'),
(16, '11', 'Biggi Droid', 'Nice'),
(17, '21', 'Adeleye Ayodeji', 'How did you know'),
(18, '12', 'Adeleye Ayodeji', 'Haaa! Lie lie'),
(19, '11', 'Adeleye Ayodeji', 'Shut up!'),
(20, '22', 'Adeleye  Ayodeji', 'Chuks kee'),
(21, '23', 'Biggi Droid', 'I love this post'),
(22, '23', 'Adeleye  Ayodeji', 'Really'),
(23, '21', 'Cool guy', 'I love this post'),
(24, '21', 'baba studio', 'This boom!'),
(25, '14', 'Isreal ', 'Wow!'),
(26, '25', 'Obi Faith', 'LWhat a lovely post!');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE `pics` (
  `id` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `image`, `text`) VALUES
(4, 'coding-dojo.png', 'sdsadasdsadsd asdsadsadsadwdwbbdwubdw wkduwuidiwudniuwniudnwd wdiuwiudwiudwnbdbwdwdiuwddwdwd'),
(5, 'Capture.PNG', 'asdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd'),
(6, 'nigeriantech.PNG', 'sadsadsadasdsasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd'),
(7, 'nigeriantech.PNG', 'sadsadsadasdsasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd'),
(8, 'nigeriantech.PNG', 'sadsadsadasdsasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `search` varchar(10000) DEFAULT NULL,
  `category` longtext,
  `title` longtext,
  `text` longtext,
  `image` longtext,
  `date` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `search`, `category`, `title`, `text`, `image`, `date`) VALUES
(11, 'My', 'Programming', 'My Strategy and Skills', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'FB_IMG_15359946402223797.jpg', 'May 18, 2019'),
(12, 'Ni', 'Technology', 'Nigerian Technology', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'betterdaysguesthouse.PNG', 'May 18, 2019'),
(14, 'Bo', 'Lifestyle', 'Book with pleasure', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Bishop-Oyedepo-Speaks.jpg', 'May 18, 2019'),
(16, 'Da', 'Sport', 'Dayo Nigga 7777', '		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '39728048-learning-wallpapers.jpg', 'May 28, 2019'),
(19, 'Ho', 'Programming', 'How to code a program', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '20190608_180521.jpg', 'June 22, 2019'),
(20, 'Le', 'Programming', 'Learn to CODE', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'download.jpg', 'June 22, 2019'),
(21, NULL, 'Programming', 'BiggiDroid Simple PHP', '      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n      		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n      		          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n      		          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n      		          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n      		          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '485120-learn-to-code.jpg', 'June 24, 2019'),
(22, NULL, 'Lifestyle', 'Chuks the Hacker', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '_DSC6198.JPG.jpeg', 'June 25, 2019'),
(23, NULL, 'Technology', 'Simple PHP CMS  ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n   				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n   				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n   				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'code.jpg', 'June 25, 2019'),
(25, NULL, 'Technology', 'Been a good friend', '		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '_DSC6185.JPG_cr.jpg', 'July 20, 2019'),
(31, NULL, 'Technology', 'How to code a program', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                  		     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                  		     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                  		     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                  		     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                  		     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'dims.jpg', 'August 2, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `sitedetails`
--

CREATE TABLE `sitedetails` (
  `id` int(11) NOT NULL,
  `sitelogo` mediumtext,
  `sitetitle` mediumtext,
  `sitetagline` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitedetails`
--

INSERT INTO `sitedetails` (`id`, `sitelogo`, `sitetitle`, `sitetagline`) VALUES
(1, 'p.png', 'BiggiDroid Simple PHP CMS', 'Anybody can CODE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first` varchar(10000) DEFAULT NULL,
  `last` varchar(10000) DEFAULT NULL,
  `username` varchar(10000) DEFAULT NULL,
  `password` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `username`, `password`) VALUES
(1, 'Admin', 'Page', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitedetails`
--
ALTER TABLE `sitedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sitedetails`
--
ALTER TABLE `sitedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
