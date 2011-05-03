-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: 97.74.31.71
-- Generation Time: Feb 18, 2010 at 10:31 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fppool`
--
CREATE DATABASE `fppool` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fppool`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) unsigned NOT NULL auto_increment,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `event` tinyint(1) NOT NULL default '1',
  `calendar` tinyint(1) NOT NULL,
  `displ` tinyint(1) NOT NULL default '1',
  `lessons` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='List of evenst and calendar  entries' AUTO_INCREMENT=16 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` VALUES(1, '2010-04-03', 'Work Party, 8AM -1PM', 1, 0, 1, 0);
INSERT INTO `events` VALUES(2, '2010-04-17', 'Grand Reopening ', 1, 0, 1, 0);
INSERT INTO `events` VALUES(3, '2010-05-22', 'Open House', 1, 0, 0, 0);
INSERT INTO `events` VALUES(4, '2010-07-04', 'Fourth of July BBQ Pot Luck', 1, 0, 1, 0);
INSERT INTO `events` VALUES(5, '2010-07-09', 'Buddy Night, Pool closes 5PM', 1, 0, 1, 0);
INSERT INTO `events` VALUES(6, '2010-07-30', 'Pot Luck. Pasta Feed', 1, 0, 1, 0);
INSERT INTO `events` VALUES(7, '2010-07-09', 'Pot Luck, Pasta Feed', 1, 0, 1, 0);
INSERT INTO `events` VALUES(8, '2010-06-05', 'Summer Bash, Open House', 1, 0, 0, 0);
INSERT INTO `events` VALUES(9, '2010-09-10', 'FPSA Yard Sale', 1, 0, 1, 0);
INSERT INTO `events` VALUES(10, '2010-09-11', 'FPSA Yard Sale..', 1, 0, 1, 0);
INSERT INTO `events` VALUES(11, '2010-08-05', 'Pot Luck, Potato Bar ', 1, 0, 1, 0);
INSERT INTO `events` VALUES(12, '2010-08-11', 'Fiesta Night', 1, 0, 1, 0);
INSERT INTO `events` VALUES(13, '2010-10-02', 'Work Party, 8AM-1PM', 1, 0, 1, 0);
INSERT INTO `events` VALUES(14, '2010-10-16', 'Halloween Party ', 1, 0, 1, 0);
INSERT INTO `events` VALUES(15, '2010-02-27', 'Work Party, 8AM -1PM', 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) unsigned NOT NULL auto_increment,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(7) NOT NULL,
  `disp_email` tinyint(1) NOT NULL default '1',
  `disp_phone` tinyint(1) NOT NULL default '1',
  `hide_all` tinyint(1) NOT NULL default '0' COMMENT 'for people who are paranoid',
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(1, 'Debbie', 'Stofer', 'dstofer@hotmail.com', '6863812', 1, 1, 0);
INSERT INTO `members` VALUES(2, 'Beth', 'Offield', 'offield3@att.net', '6807343', 1, 1, 0);
INSERT INTO `members` VALUES(3, 'Sandy', 'Cheer', 'Sandra.cheer@sbcglobal.net', '7981513', 1, 1, 0);
INSERT INTO `members` VALUES(4, 'Allan', 'Sayre', 'tatms@astound.net', '2880379', 1, 1, 0);
INSERT INTO `members` VALUES(5, 'Sarah', 'Mead', 'pudgeo@aol.com', '2028584', 1, 1, 0);
INSERT INTO `members` VALUES(6, 'Catherine', 'Deburca', 'deburca3@comcast.net', '3956660', 1, 1, 0);
INSERT INTO `members` VALUES(7, 'Paul', 'Vanhoven', 'vanhovend@astound.net', '8902384', 1, 1, 0);
INSERT INTO `members` VALUES(8, 'Joe', 'Drozda', 'suzette.drozda@kp.org', '6762030', 1, 1, 0);
INSERT INTO `members` VALUES(9, 'Doug', 'Jenevein', 'djenevein@yahoo.com', '6898551', 1, 1, 0);
INSERT INTO `members` VALUES(10, 'Eric', 'Kohlmeyer', 'wakejunkies@comcast.net', '6865895', 1, 1, 0);
INSERT INTO `members` VALUES(11, 'Nick', 'Mraovich', 'mraov5@yahoo.com', '6863317', 1, 1, 0);
INSERT INTO `members` VALUES(12, 'OPEN', '', '', '', 0, 0, 0);
INSERT INTO `members` VALUES(13, 'Incognito', '', 'forest.park.pool@sbcglobal.net', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_to_member_lu`
--

CREATE TABLE `role_to_member_lu` (
  `role_id` int(10) unsigned NOT NULL,
  `member_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`role_id`,`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Lookup tabe for club roles to mebers 1 to many';

--
-- Dumping data for table `role_to_member_lu`
--

INSERT INTO `role_to_member_lu` VALUES(1, 11);
INSERT INTO `role_to_member_lu` VALUES(2, 2);
INSERT INTO `role_to_member_lu` VALUES(3, 3);
INSERT INTO `role_to_member_lu` VALUES(4, 4);
INSERT INTO `role_to_member_lu` VALUES(5, 1);
INSERT INTO `role_to_member_lu` VALUES(6, 5);
INSERT INTO `role_to_member_lu` VALUES(7, 6);
INSERT INTO `role_to_member_lu` VALUES(8, 8);
INSERT INTO `role_to_member_lu` VALUES(8, 9);
INSERT INTO `role_to_member_lu` VALUES(8, 10);
INSERT INTO `role_to_member_lu` VALUES(9, 13);
INSERT INTO `role_to_member_lu` VALUES(10, 13);
INSERT INTO `role_to_member_lu` VALUES(11, 5);
INSERT INTO `role_to_member_lu` VALUES(12, 7);
INSERT INTO `role_to_member_lu` VALUES(13, 12);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) unsigned NOT NULL auto_increment,
  `role_name` varchar(30) NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='holds the various roles board members have' AUTO_INCREMENT=100 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` VALUES(1, 'President', 1);
INSERT INTO `roles` VALUES(2, 'Treasurer', 200);
INSERT INTO `roles` VALUES(3, 'Secretary', 300);
INSERT INTO `roles` VALUES(4, 'Pool & Facilities', 400);
INSERT INTO `roles` VALUES(5, 'Membership', 500);
INSERT INTO `roles` VALUES(6, 'Swim Lessons', 600);
INSERT INTO `roles` VALUES(7, 'Social Activities', 700);
INSERT INTO `roles` VALUES(8, 'Buildings & Grounds', 800);
INSERT INTO `roles` VALUES(9, 'Personnel & Lifeguard', 900);
INSERT INTO `roles` VALUES(10, 'Gate Keeping', 1000);
INSERT INTO `roles` VALUES(11, 'Marketing', 1100);
INSERT INTO `roles` VALUES(12, 'Swim Team Rep', 1200);
INSERT INTO `roles` VALUES(13, 'Assistant Treasurer', 1300);
