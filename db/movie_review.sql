-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 10:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `poster` varchar(255) NOT NULL,
  `synopsis` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `average_rating` int(11) DEFAULT NULL,
  `total_review_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieID`, `title`, `director`, `cast`, `genre`, `poster`, `synopsis`, `year`, `average_rating`, `total_review_count`) VALUES
(1, 'Borat', 'Larry Charles', 'Sacha Baron Cohen, Ken Davitian, Luenell', 'Comedy', 'borat.jpg', 'Borat Sagdiyev is a TV reporter of a popular show in Kazakhstan as Kazakhstan\'s sixth most famous man and a leading journalist. He is sent from his home to America by his government to make a documentary about American society and culture. Borat takes a c', 2006, 95, 5),
(2, 'Barbie', 'Greta Gerwig', 'Margot Robbie, Ryan Gosling, Issa Rae', 'Adventure, Comedy, Fantasy', 'barbie.png', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 2023, 58, 19),
(3, 'Five Nights at Freddy\'s', 'Emma Tammi', 'Josh Hutcherson, Piper Rubio, Elizabeth Lail', 'Horror, Thriller', 'fnaf.jpg', 'A troubled security guard begins working at Freddy Fazbear\'s Pizzeria. While spending his first night on the job, he realizes the late shift at Freddy\'s won\'t be so easy to make it through.', 2023, 34, 7),
(4, 'Interstellar', 'Christopher Nolan', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain', 'Adventure, Drama, Sci-fi', 'interstellar.jpg', 'Earth\'s future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind\'s survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man', 2014, 100, 31),
(5, 'The Dictator', 'Larry Charles', 'Sacha Baron Cohen, Anna Faris, John C. Reilly', 'Comedy', 'dictator.webp', 'The Republic of Wadiya is ruled by an eccentric and oppressive leader named Hafez Aladeen. Aladeen is summoned to New York to a UN assembly to address concerns about his country\'s nuclear weapons program, but the trip goes awry', 2012, 69, 8),
(6, 'Home Alone', 'Chris Columbus', 'Macaulay Culkin, Joe Pesci, Daniel Stern', 'Comedy, Christmas', 'homealone.jpg', 'It is Christmas time and the McCallister family is preparing for a vacation in Paris, France. But the youngest in the family, Kevin (Macaulay Culkin), got into a scuffle with his older brother Buzz (Devin Ratray) and was sent to his room, which is on the ', 1990, 75, 42),
(7, 'Ralph Breaks the Internet', 'Phil Johnston, Rich Moore', 'John C. Reilly, Sarah Silverman, Gal Gadot', 'Animation, Adventure, Comedy, Family, Fantasy, Sci-Fi', 'wreckitralph.jpg', 'Taking place six years after saving the arcade from Turbo\'s vengeance, the Sugar Rush arcade cabinet has broken, forcing Ralph and Vanellope to travel to the Internet via the newly-installed Wi-Fi router in Litwak\'s Arcade to retrieve the piece capable of', 2018, 82, 24),
(8, 'Godzilla Minus One', 'Takashi Yamazaki', 'Ryunosuke Kamiki, Minami Hamabe, Yuki Yamada', 'Action, Adventure, Drama, Horror, Sci-Fi', 'godzillaminusone.jpg', 'Post war Japan is at its lowest point when a new crisis emerges in the form of a giant monster, baptized in the horrific power of the atomic bomb.', 2023, 74, 26),
(9, '300', 'Zack Snyder', 'Gerard Butler, Lena Headey, David Wenham', 'Action, Drama', '300.jpg', 'In the Battle of Thermopylae of 480 BC an alliance of Greek city-states fought the invading Persian army in the mountain pass of Thermopylae. Vastly outnumbered, the Greeks held back the enemy in one of the most famous last stands of history. Persian King', 2006, 91, 48),
(10, 'Man in Love', 'Chen-Hao Yin', 'Roy Chiu, Wei-Ning Hsu, Xiao-Ying Bai', 'Drama, Romance', 'maninlove.jpg', 'A Cheng is a kind-hearted debt collector who meets the debt-ridden Hao Ting. A Cheng becomes deeply attracted to her after seeing her uncomplainingly care for her ailing father and learning that she is shouldering the debt on her own. He eases her burden ', 2021, 75, 24),
(11, 'Taylor Swift: The Eras Tour', 'Sam Wrench', 'Taylor Swift, Amanda Balen, Taylor Banks', 'Documentary, Music', 'taylorerastour.jpg', 'The cultural phenomenon continues on the big screen! Immerse yourself in this once-in-a-lifetime concert film experience with a breathtaking, cinematic view of the history-making tour. Taylor Swift Eras attire and friendship bracelets are strongly encoura', 2023, 99, 78);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `movieID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_subject` varchar(255) NOT NULL,
  `review_text` longtext DEFAULT NULL,
  `review_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'User',
  `birthday` date DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `movieID` (`movieID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`movieID`) REFERENCES `movie` (`movieID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
