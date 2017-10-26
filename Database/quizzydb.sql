-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 05:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'GUEST',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `age` varchar(100) NOT NULL,
  `profile` varchar(500) DEFAULT 'User',
  `work` varchar(500) NOT NULL,
  `interests` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `gender`, `age`, `profile`, `work`, `interests`) VALUES
(1, 'Gaurav Suresh kavhar', 'gauravkavhar304@gmail.com', '1234', 'M', 'over_13', 'STUDENT', 'engineer', 'sports'),
(2, 'Akash Karan', 'akashkaran@gmail.com', '1234', 'M', 'over_13', 'STUDENT', 'engineer', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `q_id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `a_value` varchar(500) NOT NULL,
  `b_value` varchar(500) NOT NULL,
  `c_value` varchar(500) NOT NULL,
  `d_value` varchar(500) NOT NULL,
  `correct_id` varchar(1000) NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`q_id`, `question`, `a_value`, `b_value`, `c_value`, `d_value`, `correct_id`, `cat_id`) VALUES
(1, 'Squadron leader Rakesh Sharma was India''s first man to go into space. He was ____ cosmonaut to be in space in the world.', '12th', '107th', '139th', '151th', '139th', 1),
(2, 'Philology is the', 'study of bones', 'study of languages', 'study of architecture', 'study of medicines', 'study of languages', 1),
(3, 'The 2006 World Cup Football Tournament was held in', 'Germany', 'France', 'China', 'Brazil', 'Germany', 1),
(4, 'Satellite launching station is located at', 'Sriharikotta', 'Solapur\r\n', 'Salem\r\n', 'Warangal', 'Sriharikotta', 1),
(5, 'The ''Black flag'' signifies', 'danger', 'peace', 'protest', 'truce', 'protest', 1),
(6, 'Republican party is', 'One of the important parties in USA', 'the political parties which has no definite principles', 'the political party which changes with the change in the times and circumstances in the country', 'All of the above', 'All of the above', 1),
(7, 'Study of life in outer space is known as', 'endbiology', 'exobiology', 'endobiology', 'neobiology', 'exobiology', 1),
(8, 'Recession is', 'slowing down of economic activity over a limited period', 'period during which unemployment may rise and demand and output may fall, leading to slump in trade\r\n', 'period that results from accumulation of unsold goods, owing to fall in demand', 'All of the above', 'All of the above', 1),
(9, 'Pythagoras was first to ____ the universal validity of geometrical theorem.', 'give', 'prove', 'both of them', 'none of them', 'prove', 1),
(10, 'Soil acidity is generally corrected by', 'proper irrigation', 'adding sodium hydroxide', 'liming', 'adding NaCl', 'liming', 1),
(11, 'Which film is similar to A Kiss Before Dying?', 'Baazigar', 'Border', 'Dil', 'Lakshya', 'Baazigar', 2),
(12, 'Which film is similar to Disclosure?', 'Lagaan', 'Aashiqui', 'Aitraaz', 'Wake Up Sid', 'Aitraaz', 2),
(13, 'Which film is similar to Unfaithful?', 'Sanam Bewafa', 'Murder', 'Sangam', 'Leader', 'Murder', 2),
(14, 'Which film is similar to It Could Happen to You?', 'Ittefaq', 'Amar Prem', 'Billo', 'Bade Dilwala', 'Bade Dilwala', 2),
(15, 'Which film’s first half is similar to Dirty Rotten Scoundrels?', 'Bunty aur Babli', 'Khel', 'Mr.Natwarlal', 'Dostana', 'Khel', 2),
(16, 'Which film is similar to French Kiss?\r\n', 'Pyaar Tho Hona Hi Thaa\r\n', 'Anand\r\n', 'Kashmir Ki Kali\r\n', 'Red Rose ', 'Pyaar Tho Hona Hi Thaa\r\n', 2),
(17, 'Which film is similar to The Wedding Singer?\r\n', 'Saagar', 'Shaan', 'Kahiin Pyaar Na Ho Jaaye', 'Pyaar Bhara Dil', 'Kahiin Pyaar Na Ho Jaaye', 2),
(18, 'Which film is similar to Seven Brides For Seven Brothers?', 'Namak Haram\r\n', 'Kalia', 'Woh Saat Din', 'Satte Pe Satta', 'Satte Pe Satta', 2),
(19, 'Which of the following actresses was born on the Ides of March?\r\n', 'Anushka Sharma\r\n', 'Alia Bhatt\r\n', 'Ileana D’Cruz', 'Diana Penty', 'Alia Bhatt\r\n', 2),
(20, 'Which film is similar to Indecent Proposal?', 'Sauda', 'Tarana\r\n', 'Agent Vinod\r\n', 'Mission Kashmir', 'Sauda', 2),
(21, 'Who plays Joey in TV''s ''Friends''?', 'Matt Le Blanc', 'David Schwimmer', 'Matthew Perry', 'Josh Radnor', 'Matt Le Blanc', 3),
(22, 'In which TV show is Moe''s Tavern Featured?', 'The Simpsons ', 'Family Guy', 'Marty and Rick', 'Futurama', 'The Simpsons ', 3),
(23, 'Top Gear is presented by Jeremy Clarkson, Richard Hammond and who else?', 'Rod Tucker', 'Chuck Lorre', 'James May', 'Bill Prady', 'James May', 3),
(24, ' 	\r\n\r\nIn Sherlock, Benedict Cumberbatch is Sherlock Holmes but who plays Doctor Watson?', 'Morgan Freeman', 'Martin Freeman', 'Neil Patrick Harris', 'Jason Segel', 'Martin Freeman', 3),
(25, 'In ''Doctor Who'' what does TARDIS stand for?', 'Time And Relative Dimensions In Space', 'Time And Repetive Dimensions In Space', 'Time And Relative Distances In Space', 'Time And Relative Directions In Space', 'Time And Relative Dimensions In Space', 3),
(26, 'Which country is Rab C. Nesbitt from?', 'Canada', 'England', 'Australia', 'Scotland', 'Scotland', 3),
(27, 'How many dragons did Daenerys Targaryen originally have in The Game of Thrones?', 'one', 'two', 'three', 'four', 'three', 3),
(28, 'Who starred as writer and amateur detective Jessica Fletcher?', 'Angela Lansburry', 'Cobie Smulders', 'Alyson Hannigan', 'Lisa Kudrow', 'Angela Lansburry', 3),
(29, 'Complete the 1997 television series title: ''Full Circle with ...''?', 'Richard', 'Michael Palin\r\n', 'Walter Cronkite', 'Nick Jenkins', 'Michael Palin\r\n', 3),
(30, 'In The Big Bang Theory what is Sheldon Cooper’s middle name?', 'mark', 'lee', 'stan', 'chris', 'lee', 3),
(31, 'Brass gets discoloured in air because of the presence of which of the following gases in air?', 'Oxygen\r\n', 'Hydrogen sulphide\r\n', 'Carbon dioxide', 'Nitrogen', 'Hydrogen sulphide\r\n', 4),
(32, 'Which of the following is a non metal that remains liquid at room temperature?', 'Phosphorous\r\n', 'Bromine', 'Chlorine\r\n', 'Helium', 'Bromine', 4),
(33, 'Chlorophyll is a naturally occurring chelate compound in which central metal is', 'magnesium\r\n', 'copper\r\n', 'iron\r\n', 'calcium', 'magnesium\r\n', 4),
(34, 'Which of the following is used in pencils?\r\n', 'Phosphorous', 'Charcoal\r\n', 'Silicon\r\n', 'Graphite\r\n', 'Graphite\r\n', 4),
(35, 'Which of the following metals forms an amalgam with other metals?', 'Tin\r\n', 'Zinc', 'Mercury\r\n', 'Lead\r\n', 'Mercury\r\n', 4),
(36, 'The gas usually filled in the electric bulb is\r\n', 'nitrogen\r\n', 'oxygen', 'carbon dioxide', 'hydrogen', 'nitrogen\r\n', 4),
(37, 'Washing soda is the common name for\r\n', 'Calcium carbonate', 'Calcium bicarbonate\r\n', 'Sodium carbonate\r\n\r\n', 'Sodium bicarbonate\r\n\r\n', 'Sodium carbonate\r\n\r\n', 4),
(38, 'Quartz crystals normally used in quartz clocks etc. is chemically\r\n', 'sodium silicate', 'germanium oxide\r\n', 'a mixture of germanium oxide and silicon dioxide\r\n', 'silicon dioxide', 'silicon dioxide', 4),
(39, 'Which of the gas is not known as green house gas?\r\n', 'Hydrogen', 'Nitrous Oxide', 'Methane', 'Carbon dioxide\r\n', 'Methane', 4),
(40, 'Bromine is a\r\n', 'highly inflammable gas', 'colourless gas\r\n', 'red liquid', 'black solid', 'red liquid', 4),
(41, 'Former Australian captain Mark Taylor has had several nicknames over his playing career. Which of the following was NOT one of them?\r\n', 'Tubby\r\n', 'Stodgy', 'Stumpy', 'Helium Bat', 'Stodgy', 5),
(42, 'Which was the 1st non Test playing country to beat India in an international match?', 'Sri Lanka', 'East Africa\r\n', 'Canada', 'Zimbabwe', 'Sri Lanka', 5),
(43, 'Which county did Ravi Shastri play for?\r\n', 'Lancashire', 'Gloucestershire\r\n', 'Glamorgan\r\n', 'Leicestershire\r\n', 'Glamorgan\r\n', 5),
(44, 'Who was the first Indian to win the World Amateur Billiards title?', 'Geet Sethi\r\n', 'Manoj Kothari', 'Wilson Jones\r\n', 'Michael Ferreira\r\n', 'Wilson Jones\r\n', 5),
(45, 'Who is the first Indian woman to win an Asian Games gold in 400m run?\r\n', 'M.L.Valsamma\r\n', 'P.T.Usha\r\n', 'Kamaljit Sandhu\r\n', 'K.Malleshwari', 'Kamaljit Sandhu\r\n', 5),
(46, 'Which two counties did Kapil Dev play?\r\n\r\n', 'Northamptonshire & Worcestershire\r\n', 'Nottinghamshire & Warwickshire', 'Northamptonshire & Warwickshire\r\n', 'Nottinghamshire & Worcestershire\r\n', 'Northamptonshire & Worcestershire\r\n', 5),
(47, 'Who did Stone Cold Steve Austin wrestle at the 1998 edition of "Over the Edge"?\r\n', 'Cactus Jack\r\n', 'Dude Love\r\n', 'Mick Foley', 'Mankind', 'Dude Love\r\n', 5),
(48, 'Ricky Ponting is also known as what?', 'ponts', 'punter', 'rickster', 'ponter', 'punter', 5),
(49, 'How long are professional Golf Tour players allotted per shot?\r\n', '45 seconds', '25 seconds\r\n', '2 minutes', '1 minute', '45 seconds', 5),
(50, 'Which NBA player scored 8 points in the final 7 seconds of a game to lead his team to victory?', 'Baron Davis\r\n', 'Stephon Maurbury\r\n', 'Kevin Garnett\r\n', 'Reggie Miller', 'Reggie Miller', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
