-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2017 at 12:57 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz_new`
--
CREATE DATABASE IF NOT EXISTS `quiz_new` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz_new`;

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE IF NOT EXISTS `mst_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id`, `loginid`, `pass`) VALUES
(1, 'sandip', 'sandip');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(1500) DEFAULT NULL,
  `ans1` varchar(750) DEFAULT NULL,
  `ans2` varchar(750) DEFAULT NULL,
  `ans3` varchar(750) DEFAULT NULL,
  `ans4` varchar(750) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(53, 25, 'Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'rem = 3.14 % 2.1;', 'rem = modf(3.14, 2.1);', 'rem = fmod(3.14, 2.1);', 'Remainder cannot be obtain in floating point division.', 3),
(54, 25, 'Which of the following special symbol allowed in a variable name?', '* (asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', 4),
(55, 25, 'Is the following statement a declaration or definition?\r\nextern int i;', 'Declaration', 'Definition', 'Function', 'Error', 1),
(56, 25, '	\r\nIdentify which of the following are declarations\r\n1 :	extern int x;\r\n2 :	float square ( float x ) { ... }\r\n3 :	double pow(double, double);', '1', '2', '1 and 3', '3', 3),
(57, 25, 'What will be the output of the program?\r\n\r\n#include<stdio.h>\r\n#include<stdarg.h>\r\nvoid dumplist(int, ...);\r\n\r\nint main()\r\n{\r\n    dumplist(2, 4, 8);\r\n    dumplist(3, 6, 9, 7);\r\n    return 0;\r\n}\r\nvoid dumplist(int n, ...)\r\n{\r\n    va_list p; int i;\r\n    va_start(p, n);\r\n\r\n    while(n-->0)\r\n    {\r\n        i = va_arg(p, int);\r\n        printf("%d", i);\r\n    }\r\n    va_end(p);\r\n    printf("\n");\r\n}', '2 4 3 6', '2 4 8 3, 6, 9, 7', '4 8 6 9 7', '1 1 1 1 1 1 1', 3),
(58, 25, 'How will you free the allocated memory ?', 'remove(var-name);', 'free(var-name);', 'delete(var-name);', 'dalloc(var-name);', 2),
(59, 25, 'What is the similarity between a structure, union and enumeration?', 'All of them let you define new values', 'All of them let you define new data types', 'All of them let you define new pointers', 'All of them let you define new structures', 2),
(60, 25, 'What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'The element will be set to 0.', 'The compiler would report an error.', 'The program may crash if some important data gets overwritten.', 'The array size would appropriately grow.', 3),
(61, 25, 'What does the following declaration mean?\r\nint (*ptr)[10];', 'ptr is array of pointers to 10 integers', 'ptr is a pointer to an array of 10 integers', 'ptr is an array of 10 integers', 'ptr is an pointer to array', 2),
(62, 25, '	\r\nIn C, if you pass an array as an argument to a function, what actually gets passed?', 'Value of elements in array', 'First element of the array', 'Base address of the array', 'Address of the last element of array', 3),
(63, 25, 'What will the function rewind() do?', 'Reposition the file pointer to a character reverse.', 'Reposition the file pointer stream to end of file.', 'Reposition the file pointer to begining of that line.', 'Reposition the file pointer to begining of file.', 4),
(64, 25, 'Input/output function prototypes and macros are defined in which header file?', 'conio.h', 'stdlib.h', 'stdio.h', 'dos.h', 3),
(65, 25, 'Which standard library function will you use to find the last occurance of a character in a string in C?', 'strnchar()', 'strchar()', 'strrchar()', 'strrchr()', 4),
(66, 25, 'What is stderr ?', 'standard error', 'standard error types', 'standard error streams', 'standard error definitions', 3),
(67, 25, 'What is the purpose of fflush() function.', 'flushes all streams and specified streams.', 'flushes only specified stream.', 'flushes input/output buffer.', 'flushes file buffer.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('ankur', 11, '0000-00-00', 0),
('raj', 24, '0000-00-00', 8),
('sandip', 25, '0000-00-00', 6),
('sandip', 25, '0000-00-00', 7),
('sandip', 25, '0000-00-00', 15);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(12, 'C Programming'),
(13, 'C++'),
(14, 'JAVA'),
(15, 'Operating System'),
(16, 'DBMS'),
(17, 'UNIX');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(25, 12, 'CTest_15', '15');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE IF NOT EXISTS `mst_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(15, 'sandip', 'sandip', 'Sandipan Ghorai', 'Tollygunge', 'Kolkata', 2147483647, 'sandipan.ghorai93@gmail.com'),
(16, 'mirza', 'mirza', 'Mijanur Rahaman', 'Baghajatin', 'Kolkata', 86700000, 'mijanur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'rem = 3.14 % 2.1;', 'rem = modf(3.14, 2.1);', 'rem = fmod(3.14, 2.1);', 'Remainder cannot be obtain in floating point divis', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'Which of the following special symbol allowed in a variable name?', '* (asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', 4, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'Is the following statement a declaration or definition?\r\nextern int i;', 'Declaration', 'Definition', 'Function', 'Error', 1, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, '	\r\nIdentify which of the following are declarations\r\n1 :	extern int x;\r\n2 :	float square ( float x ) { ... }\r\n3 :	double pow(double, double);', '1', '2', '1 and 3', '3', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What will be the output of the program?\r\n\r\n#include<stdio.h>\r\n#include<stdarg.h>\r\nvoid dumplist(int, ...);\r\n\r\nint main()\r\n{\r\n    dumplist(2, 4, 8);\r\n    dumplist(3, 6, 9, 7);\r\n    return 0;\r\n}\r\nvoid d', '2 4 3 6', '2 4 8 3, 6, 9, 7', '4 8 6 9 7', '1 1 1 1 1 1 1', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'How will you free the allocated memory ?', 'remove(var-name);', 'free(var-name);', 'delete(var-name);', 'dalloc(var-name);', 2, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What is the similarity between a structure, union and enumeration?', 'All of them let you define new values', 'All of them let you define new data types', 'All of them let you define new pointers', 'All of them let you define new structures', 2, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'The element will be set to 0.', 'The compiler would report an error.', 'The program may crash if some important data gets ', 'The array size would appropriately grow.', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What does the following declaration mean?\r\nint (*ptr)[10];', 'ptr is array of pointers to 10 integers', 'ptr is a pointer to an array of 10 integers', 'ptr is an array of 10 integers', 'ptr is an pointer to array', 2, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, '	\r\nIn C, if you pass an array as an argument to a function, what actually gets passed?', 'Value of elements in array', 'First element of the array', 'Base address of the array', 'Address of the last element of array', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What will the function rewind() do?', 'Reposition the file pointer to a character reverse', 'Reposition the file pointer stream to end of file.', 'Reposition the file pointer to begining of that li', 'Reposition the file pointer to begining of file.', 4, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'Input/output function prototypes and macros are defined in which header file?', 'conio.h', 'stdlib.h', 'stdio.h', 'dos.h', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'Which standard library function will you use to find the last occurance of a character in a string in C?', 'strnchar()', 'strchar()', 'strrchar()', 'strrchr()', 4, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What is stderr ?', 'standard error', 'standard error types', 'standard error streams', 'standard error definitions', 3, 3),
('92828j3s0e0b3nj6fbhqgam4b6', 25, 'What is the purpose of fflush() function.', 'flushes all streams and specified streams.', 'flushes only specified stream.', 'flushes input/output buffer.', 'flushes file buffer.', 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
