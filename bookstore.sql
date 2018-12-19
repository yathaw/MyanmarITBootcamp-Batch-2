-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 04:51 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_profile` varchar(255) NOT NULL,
  `author_gender` varchar(255) NOT NULL,
  `author_place` varchar(255) NOT NULL,
  `author_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_profile`, `author_gender`, `author_place`, `author_bio`) VALUES
(1, 'Stephenie Meyer', 'image/author/Stephenie_Meyer.jpg', 'Female', 'Hartford, Connecticut, U.S.', 'Stephenie Meyer was born in <a href=\"https://en.wikipedia.org/wiki/Hartford,_Connecticut\" title=\"Hartford, Connecticut\">Hartford, Connecticut</a> as the second of six children to Stephen and Candy Morgan. She was raised in <a href=\"https://en.wikipedia.org/wiki/Phoenix,_Arizona\" title=\"Phoenix, Arizona\">Phoenix, Arizona</a>, with five siblings: Seth, Emily, Jacob, Paul, and Heidi. Meyer attended <a href=\"https://en.wikipedia.org/wiki/Chaparral_High_School_(Arizona)\" title=\"Chaparral High School (Arizona)\">Chaparral High School</a> in <a href=\"https://en.wikipedia.org/wiki/Scottsdale,_Arizona\" title=\"Scottsdale, Arizona\">Scottsdale, Arizona</a>, where her former English teacher remembered her as \"bright but not overly so.\" She attended <a href=\"https://en.wikipedia.org/wiki/Brigham_Young_University\" title=\"Brigham Young University\">Brigham Young University</a> in <a href=\"https://en.wikipedia.org/wiki/Provo,_Utah\" title=\"Provo, Utah\">Provo, Utah</a>, where she received a BA in English in 1997. Meyer met her husband, Christian, when she was four years old in \r\nArizona, and married him in 1994 when they were both 20. Together they \r\nhave three sons. Christian Meyer, formerly an auditor, has now retired \r\nto take care of the children.\r\n<ul> <li> Twilight Series </li> <li> The Host </li> <li> The Chemist </li>  </ul>'),
(5, 'ddddd', '<p>You did not select a file to upload.</p>', 'Female', 'ddddd', 'ddddd'),
(6, 'eeeee', '<p>You did not select a file to upload.</p>', 'Male', 'eeeee', 'eeeee'),
(7, 'E. L. James', 'image/author/330px-E._L._James_(cropped).jpg', 'Female', 'Willesden, London, England, UK', 'Erika Leonard (née Mitchell; born 7 March 1963) known by her pen name E. L. James, is an English author. She wrote the bestselling erotic romance trilogy Fifty Shades of Grey, Fifty Shades Darker, and Fifty Shades Freed, along with the companion novels Grey: Fifty Shades of Grey as Told by Christian and Darker: Fifty Shades Darker as Told by Christian; and under the name Snowqueen\'s Icedragon the Twilight fan fiction \"Master of the Universe\" that was the basis for the Fifty Shades trilogy. '),
(8, 'J.K. Rowling', 'image/author/330px-J.K._Rowling_2010-10-24.jpg', 'Female', 'Yate, Gloucestershire, England', 'Although she writes under the pen name J. K. Rowling, her name, before her remarriage, was Joanne Rowling. Anticipating that the target audience of young boys might not want to read a book written by a woman, her publishers asked that she use two initials rather than her full name. As she had no middle name, she chose K (for Kathleen) as the second initial of her pen name, from her paternal grandmother. She calls herself Jo. Following her remarriage, she has sometimes used the name Joanne Murray when conducting personal business. During the Leveson Inquiry she gave evidence under the name of Joanne Kathleen Rowling[18] and her entry in Who\'s Who lists her name also as Joanne Kathleen Rowling.'),
(9, 'Frederick Forsyth', 'image/author/375px-Frederick_Forsyth_-_01.jpg', 'Male', 'Ashford, Kent, England', 'Frederick McCarthy Forsyth, CBE (born 25 August 1938) is an English author, journalist for the Daily Express, spy, and occasional political commentator. He is best known for thrillers such as The Day of the Jackal, The Odessa File, The Fourth Protocol, The Dogs of War, The Devil\'s Alternative, The Fist of God, Icon, The Veteran, Avenger, The Afghan, The Cobra and The Kill List. ');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_cover` varchar(255) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_description` text NOT NULL,
  `book_authorid` int(11) NOT NULL,
  `book_categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Love');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
