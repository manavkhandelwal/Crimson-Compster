-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 04:21 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `duedate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `userid`, `title`, `sport`, `link`, `type`, `status`, `duedate`) VALUES
(1, 4, 'Men''s Water Polo Takes Third at CWPA Championships', 'Men''s Water Polo', 'http://www.thecrimson.com/article/2015/11/24/cwpa-championships-2015/', 'Call In', 2, ''),
(2, 6, 'Men''s Soccer Heads to Columbia Looking For Win', 'Men''s Soccer', 'http://www.thecrimson.com/article/2015/11/5/columbia-harvard-mens-soccer-2015/', 'Preview', 2, ''),
(3, 4, 'Winning Easterns', 'Swimming', '', 'Preview', 3, '2015-12-14'),
(4, 41, 'Shelton-Mosley Leads Freshmen in Voting', 'Football', '', 'Feature', 3, '2015-12-18'),
(5, 4, 'Corey Johnson Leads Crimson Past Northeastern', 'Men''s Basketball', 'www.thecrimson.com', 'Live Gamer', 2, '2015-12-11'),
(6, 6, 'Women''s Ice Hockey Shuts Down UNH, 4-0', 'Women''s Ice Hockey', 'http://www.thecrimson.com/article/2015/11/19/womens-harvard-hockey-unh-shutout/', 'Call In', 2, ''),
(8, 41, 'Dershwitz Wins World Junior Saber Championships', 'Fencing', '', 'Call In', 3, '12-15-2015'),
(9, 4, 'Men''s Basketball Plays Northeastern', 'Men''s Basketball', '', 'Live Gamer', 3, '12-12-2015'),
(10, 51, 'Devan Peterson Wins Game for Crimson with Walk-Off', 'Baseball', 'thecrimson.com/peterson-wins-game-with-walkoff', 'Live Gamer', 2, '12-15-2015'),
(11, 0, 'Athlete of the Week Runner-Ups', 'Cross-Sport', '', 'Blog Post', 0, '12-19-2015'),
(12, 41, 'Women''s Tennis Sweeps in Final Invite of Semester', 'Women''s Tennis', 'http://www.thecrimson.com/article/2015/11/9/womens-tennis-harvard-syracuse-bu-pittsburgh-invite/', 'Call In', 2, ''),
(13, 51, 'Harvard Basketball Falls in Heartbreaker to Kansas', 'Men''s Basketball', 'thecrimson.com/harvard-basketball-falls-to-kansas', 'Call In', 2, '2015-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`) VALUES
(1, 'Baseball'),
(2, 'Men''s Basketball'),
(3, 'Women''s Basketball'),
(4, 'Men''s Lightweight Crew'),
(5, 'Men''s Cross Country'),
(6, 'Fencing'),
(7, 'Football'),
(8, 'Men''s Golf'),
(9, 'Men''s Ice Hockey'),
(10, 'Men''s Lacrosse'),
(11, 'Women''s Lacrosse'),
(12, 'Skiing'),
(13, 'Men''s Soccer'),
(14, 'Men''s Squash'),
(15, 'Men''s Swimming & Diving'),
(16, 'Men''s Tennis'),
(17, 'Men''s Track & Field'),
(18, 'Men''s Volleyball'),
(19, 'Men''s Water Polo'),
(20, 'Wrestling'),
(21, 'Sailing'),
(22, 'Women''s Heavyweight Crew'),
(23, 'Women''s Lightweight Crew'),
(24, 'Women''s Cross Country'),
(25, 'Field Hockey'),
(26, 'Women''s Golf'),
(27, 'Women''s Ice Hockey'),
(29, 'Women''s Soccer'),
(30, 'Softball'),
(31, 'Women''s Squash'),
(32, 'Women''s Swimming & Diving'),
(33, 'Women''s Tennis'),
(34, 'Women''s Track & Field'),
(35, 'Women''s Volleyball'),
(36, 'Women''s Water Polo'),
(37, 'Cross-Sport'),
(38, 'Men''s Heavyweight Crew');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `huid` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell_number` varchar(20) NOT NULL,
  `role` char(10) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `hash`, `name`, `huid`, `email`, `cell_number`, `role`) VALUES
(4, 'manavkhandelwal', '$2y$10$fN.WKhhlb5XAWhP9XxtJaeM9BApLcNRSiGePpGbDKNsfW8O1oKjV.', 'Manav Khandelwal', 60978166, 'manavkhandelwal@college.harvard.edu', '6109528808', 'COMPER'),
(5, 'manojkhandelwal', '$2y$10$7GjLlUqASgoBdEAsEsLBf.ma75xH7ug8w4NRkkrUrYcIIcces4uxe', 'Manoj Khandelwal', 12345678, 'mkhandelwal@college.harvard.edu', '6099228258', 'DIRECTOR'),
(6, 'jchen', '$2y$10$qd0R0ojfuWnaLR7tltVzA.fCboDu2Y7W9VRogbYYE5FubtVVfJRCS', 'Jamie Chen', 12345679, 'chen@college.harvard.edu', '1234567899', 'COMPER'),
(41, 'ghu', '$2y$10$qSaCESSUXHxxNFCsAsl.3eWrn3aKu4b1Z.UgCiTQ02ZNYirIqLWMa', 'George Hu', 44444444, 'georgehu@college.harvard.edu', '2152152158', 'COMPER'),
(45, 'queenlin', '$2y$10$VUm/wp5auCoTvDw31siM8eMJAj3/S.vLt3iENNqmf9nm2q3Z0oIUO', 'Samantha Lin', 12345678, 'samantha.lin@college.harvard.edu', '2102040887', 'DIRECTOR'),
(46, 'dsteinbach', '$2y$10$lZkVEuHJBMh4ySbQmwRn5uelvRFNj4KXtgijdFDJsToU9z7r.GTuy', 'David Steinbach', 12345431, 'dsteinbach@college.harvard.edu', '2024223877', 'DIRECTOR'),
(51, 'djm', '$2y$10$Vp605sZ9HGJ/2aroHMZBcelYNOhQbWe16/nmz5C5pxREE7qQ7ytQy', 'David J Malan', 12345678, 'djm@college.harvard.edu', '5309028623', 'COMPER'),
(52, 'deankhurana', '$2y$10$tzqcYk64LUZ.cb7sZ9hJnuxRshhr2OXkdnf1XQBQpsj4Bots9CUiK', 'Rakesh Khurana', 12345678, 'rakeshkhurana@college.harvard.edu', '6006006000', 'DIRECTOR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
