-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2013 at 05:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `subject`, `content`) VALUES
(55, 'New subject', 'English is a West Germanic language that was first spoken in early medieval England and is now the most widely used language in the world.[4] It is spoken as a first language by the majority populations of several sovereign states, including the United Kingdom, the United States, Canada, Australia, Ireland, New Zealand and a number of Caribbean nations. It is the third-most-common native language in the world, after Mandarin Chinese and Spanish.[5] It is widely learned as a second language and is an official language of the European Union, many Commonwealth countries and the United Nations, as well as in many world organisations.\r\n\r\nEnglish arose in the Anglo-Saxon kingdoms of England and what is now southeast Scotland. Following the extensive influence of Great Britain and the United Kingdom from the 17th century to the mid-20th century, through the British Empire,[6][7][8][9] it has been widely propagated around the world, becoming the leading language of international discourse and the lingua franca in many regions.[10][11]\r\n\r\nHistorically, English originated from the fusion of closely related dialects, now collectively termed Old English, which were brought to the eastern coast of Great Britain by Germanic settlers (Anglo-Saxons) by the 5th century – with the word English being derived from the name of the Angles,[12] and ultimately from their ancestral region of Angeln (in what is now Schleswig-Holstein). A significant number of English words are constructed on the basis of roots from Latin, because Latin in some form was the lingua franca of the Christian Church and of European intellectual life.[13] The language was further influenced by the Old Norse language because of Viking invasions in the 9th and 10th centuries.\r\n\r\nThe Norman conquest of England in the 11th century gave rise to heavy borrowings from Norman French, and vocabulary and spelling conventions began to give the appearance of a close relationship with Romance languages[14][15] to what had then become Middle English. The Great Vowel Shift that began in the south of England in the 15th century is one of the historical events that mark the emergence of Modern English from Middle English.\r\n\r\nOwing to the assimilation of words from many other languages throughout history, modern English contains a very large vocabulary, with complex and irregular spelling, particularly of vowels. Modern English has not only assimilated words from other European languages, but from all over the world. The Oxford English Dictionary lists over 250,000 distinct words, not including many technical, scientific, and slang terms.[16][17]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
