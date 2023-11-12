-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 08:01 AM
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
  `synopsis` longtext DEFAULT NULL,
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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `movieID`, `userID`, `rating`, `review_subject`, `review_text`, `review_date`) VALUES
(1, 9, 1, 5, 'Amazing Movie', '\"300\" is a visually stunning and action-packed epic that immerses its audience in the ancient world of Sparta. Directed by Zack Snyder, the film\'s distinctive use of stylized visuals and slow-motion sequences give it a unique and memorable cinematic quality. Gerard Butler\'s portrayal of King Leonidas is both charismatic and fierce, embodying the Spartan spirit. The film\'s battle scenes are choreographed with precision and intensity, making it a thrilling and exhilarating experience for fans of historical and action films. \"300\" stands as a testament to the power of valor and unity against overwhelming odds, making it a memorable and engaging cinematic adventure.', '2023-09-11'),
(2, 9, 2, 3, 'Ahoo Ahoo!', '\"300\" is like the ultimate bro-down in ancient Sparta! Directed by Zack Snyder, it\'s a visually extravagant spectacle that turns history into a testosterone-fueled action party. Gerard Butler flexes his way through the movie as King Leonidas, and you\'ll wonder if the real Spartans were just a bunch of gym enthusiasts. The slow-motion battles make you think, \'Is this ancient warfare or a runway show?\' But hey, when they kick someone into a pit, you can\'t help but giggle. So, if you\'re in the mood for a hilariously over-the-top history lesson with shirtless warriors, \"300\" is the way to go!', '2023-11-02'),
(3, 6, 3, 4, 'Amazing Movie', '\"Home Alone\" is the ultimate childhood fantasy brought to life on screen. Directed by Chris Columbus, it\'s a hilarious rollercoaster ride of mischief and mayhem as young Kevin McCallister takes on two bumbling burglars. Macaulay Culkin\'s performance as the pint-sized mastermind is pure comedic gold, and his booby traps make Rube Goldberg proud. This holiday classic reminds us that even the smallest family members can hold their own, and that sometimes, it\'s okay to indulge in a little mischievous fun. So, if you\'re looking for a side-splitting adventure filled with slapstick humor and heartwarming moments, \"Home Alone\" is a laugh-out-loud treat that never gets old.', '2022-12-25'),
(4, 1, 3, 5, 'SO FUNNNNYY!!', '\"Borat\" is a riotous and often cringe-inducing mockumentary that redefines the boundaries of comedy. Directed by Larry Charles and starring Sacha Baron Cohen, it\'s a wild ride through America as the fictional Kazakh journalist Borat embarks on a misguided quest. With a combination of outrageous stunts and candid interactions with unsuspecting people, the film serves up a generous helping of uncomfortable laughter. Sacha Baron Cohen\'s dedication to his character is nothing short of astonishing, as he fearlessly tackles taboo subjects and absurd situations. \"Borat\" is a comedic social experiment that leaves you gasping with laughter while raising thought-provoking questions about society and prejudice, all in a way only Sacha Baron Cohen can deliver. It\'s a satirical masterpiece that will have you both laughing and cringing in equal measure.', '2023-04-17'),
(5, 9, 3, 5, 'Very Nice!', 'In \"300,\" I become King Leonidas, the fearless Spartan leader, as I\'m thrust into the heart of ancient battle. With a chiseled six-pack and a spirit as unyielding as Spartan steel, I lead my 300 warriors against the Persian horde. Slow-motion swordplay and epic clashes are my daily routine, making me feel like an action hero. The sheer spectacle and heroic defiance against the odds turn me into an adrenaline-fueled legend, shouting \"This is Sparta!\" as I kick my foes into the abyss. \"300\" isn\'t just a movie; it\'s a warrior\'s dream, and I\'m the one leading the charge.', '2023-09-11'),
(6, 9, 8, 4, 'I like this movie!', 'In \"300,\" I step into the sandals of a Spartan warrior, ready to defend my homeland with unwavering valor. The battle cries of my comrades echo through the air as we stand shoulder to shoulder against the invading Persian army. Gerard Butler\'s King Leonidas inspires us with his indomitable spirit, and together, we face insurmountable odds. The slow-motion combat sequences make every clash feel like an epic dance of blades and shields, and as we shout \"This is Sparta!\" with all our might, I can\'t help but feel like an unstoppable force of ancient fury. \"300\" lets me experience the thrill of heroic sacrifice and fierce camaraderie on the battlefield, making it a cinematic adventure like no other.', '2023-11-02'),
(7, 4, 3, 5, 'Interesting Movie and good plot twist!', '\"Interstellar\" takes me on a mind-bending journey through the cosmos, and I find myself caught in the gravitational pull of its captivating storytelling. Christopher Nolan\'s cinematic masterpiece offers a deeply emotional exploration of love, sacrifice, and the boundless mysteries of the universe. As I join Matthew McConaughey\'s character Cooper on a quest to save humanity, I\'m swept away by the awe-inspiring visuals and profound scientific concepts. The intricate blend of science fiction and human drama keeps me on the edge of my seat, and Hans Zimmer\'s haunting score resonates in my very soul. \"Interstellar\" is a mesmerizing odyssey that left me pondering the mysteries of space and time long after the credits rolled, making it an unforgettable cinematic experience.', '2022-12-25'),
(8, 4, 1, 5, 'SPEEEECHLESS!', '\"In \'Interstellar,\' I embarked on a mind-bending journey through the cosmos alongside Matthew McConaughey\'s Cooper, and it was nothing short of awe-inspiring. The film\'s captivating blend of science and emotion takes me to the edge of a black hole and the depths of human connection simultaneously. Christopher Nolan\'s direction weaves a narrative that transcends space and time, leaving me with a sense of wonder and existential contemplation. Hans Zimmer\'s haunting score adds another layer to the experience, tugging at my heartstrings. \'Interstellar\' isn\'t just a space odyssey; it\'s a profound exploration of love, sacrifice, and the limitless possibilities of the universe, leaving me with a feeling of cosmic insignificance and boundless hope all at once.\"', '2023-04-17');

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
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `email`, `password`, `role`, `birthday`, `profile_picture`, `created_at`) VALUES
(1, 'AaronJay30', 'aaron@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2018-11-11'),
(2, 'ArjayHagid10', 'arjay@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2021-07-12'),
(3, 'JayneVernice20', 'jayne@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2015-09-22'),
(4, 'IvanInigo40', 'ivan@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2018-08-15'),
(5, 'StephenCurry30', 'stephen@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2023-07-09'),
(6, 'LebanonJames69', 'lebanon@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2023-11-08'),
(7, 'IceTrae50', 'trae@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2023-06-20'),
(8, 'LukaMagic100', 'luka@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'User', '2002-06-01', 'sample.webp', '2021-03-09');

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
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
