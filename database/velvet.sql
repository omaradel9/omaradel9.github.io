-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 10:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velvet`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `place_id`, `comment`, `date`) VALUES
(3, 1, 1, 'safsdfsaf', '2019-06-12'),
(4, 3, 3, 'cantopen it ', '2019-06-13'),
(5, 3, 2, '', '2019-06-13'),
(7, 3, 2, '', '2019-06-13'),
(8, 3, 2, '', '2019-06-13'),
(9, 3, 2, '', '2019-06-13'),
(10, 3, 2, '', '2019-06-13'),
(11, 3, 2, '', '2019-06-13'),
(12, 3, 2, '', '2019-06-13'),
(13, 1, 1, '', '2019-06-13'),
(14, 1, 1, 'sgsdgsdfg', '2019-06-13'),
(15, 1, 1, '', '2019-06-13'),
(16, 3, 2, 'dfghdf', '2019-06-13'),
(17, 3, 2, '', '2019-06-13'),
(18, 3, 2, '', '2019-06-13'),
(19, 3, 2, '', '2019-06-13'),
(20, 3, 2, '', '2019-06-13'),
(21, 3, 2, '', '2019-06-13'),
(22, 3, 2, '', '2019-06-13'),
(23, 3, 2, '', '2019-06-13'),
(24, 3, 2, '', '2019-06-13'),
(25, 3, 2, '', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`user_id`, `user_name`, `password`, `Email`, `gender`, `age`) VALUES
(1, 'magdy', '1111', 'magdy@velvet.com', 'male', 20),
(3, 'MALEK', '123456', 'malek@velvet.com', 'male', 23),
(4, 'AHMED', '12345', 'ahmed@velvet.com', 'male', 25),
(5, 'mahmoud', '1234567', 'mahmoud@velvet.com', 'male', 19),
(6, 'karim', '12345', 'karim@velvet.com', 'male', 23);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(100) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `place_location` varchar(100) NOT NULL,
  `place_category` varchar(100) NOT NULL,
  `place_picture` mediumtext NOT NULL,
  `place_details` varchar(100) NOT NULL,
  `place_season` varchar(100) NOT NULL,
  `in_place` varchar(100) NOT NULL,
  `place_theme` varchar(100) NOT NULL,
  `place_range` varchar(100) NOT NULL,
  `place_stay` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `place_location`, `place_category`, `place_picture`, `place_details`, `place_season`, `in_place`, `place_theme`, `place_range`, `place_stay`, `date`) VALUES
(1, 'Pyramids', 'Egypt', 'Romantic', 'Capture12.PNG', 'safwef', 'Summer', 'Indoor / Outdoor activites', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-11'),
(2, 'Aswan', 'Egypt', 'Romantic', 'm-blog-2.jpg', '14545bhch', 'Winter', 'Shopping', 'culture and art', 'between 500 and 1500', 'Youth hostel stays', '2019-06-12'),
(3, 'luxur', 'Egypt', 'Relaxation', 'm-blog-1.jpg', 'nmklgbkm', 'Winter', 'Indoor / Outdoor activites', 'historical sites', 'more than 4000', 'Youth hostel stays', '2019-06-12'),
(4, 'alex', 'Egypt', 'Camping', 'm-blog-5.jpg', 'wdfesrg', 'Summer', 'Indoor / Outdoor activites', 'culture and art', 'between 1500 and 2500', 'Home stays', '2019-06-12'),
(6, 'Pyramids ', 'Egypt', 'Family', 'Ø§Ù„Ù‚Ø§Ù‡Ø±Ø©.jpg', 'The Great Pyramid of Giza is the oldest and largest of the three pyramids in the Giza pyramid comple', 'Summer', 'Sightseeing', 'historical sites', 'between 500 and 1500', 'All inclusive stays', '2019-06-13'),
(7, 'The Egyptian Museum', 'Egypt', 'Family', 'Ø§Ù„Ù…ØªØ­Ù-Ø§Ù„Ù…ØµØ±ÙŠ.jpg', 'The Grand Egyptian Museum, also known as the Giza Museum, is a planned museum of artifacts of ancien', 'Summer', 'Sightseeing', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-13'),
(8, 'The Coptic Museum', 'Egypt', 'Family', 'the coptic musim.jpg', 'The Coptic Museum is a museum in Coptic Cairo, Egypt with the largest collection of Egyptian Christi', 'Summer', 'Indoor / Outdoor activites', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-13'),
(9, 'Abdeen Palace', 'Egypt', 'Family', 'abdeen palace.jpg', 'Abdeen Palace is a historic Cairo palace, and one of the official residences and the principal workp', 'Summer', 'Indoor / Outdoor activites', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-13'),
(10, 'Amr ibn al-Aas Mosque', 'Egypt', 'Family', 'amr ebn el aas.jpg', 'The Mosque of Amr ibn al-As, also called the Mosque of Amr, was originally built in 641â€“642 AD, as', 'Winter', 'Indoor / Outdoor activites', 'historical sites', 'less than 500', 'Home stays', '2019-06-13'),
(11, 'Saladin Citadel', 'Egypt', 'Family', 'Ù‚Ù„Ø¹Ø©-ØµÙ„Ø§Ø­-Ø§Ù„Ø¯ÙŠÙ†.jpg', 'The Saladin Citadel of Cairo is a medieval Islamic fortification in Cairo, Egypt. The location, on M', 'Summer', 'Sightseeing', 'historical sites', 'less than 500', 'All inclusive stays', '2019-06-13'),
(12, 'Baron Palace', 'Egypt', 'Family', 'Baron Palace.jpg', 'The Baron Empain Palace, better known as Le Palais Hindou, is a distinctive and historic Indian-insp', 'Winter', 'Sightseeing', 'historical sites', 'between 1500 and 2500', 'All inclusive stays', '2019-06-13'),
(13, 'International Park', 'Egypt', 'Family', 'International Park.jpg', 'Address: Ø·Ø±ÙŠÙ‚ Ø§Ù„Ø¹Ø¨Ø§Ø³ Ø§Ù„Ø¹Ù‚Ø§Ø¯ØŒØŒ Nasr City, Cairo Governorate\r\nHours: \r\nThursday	8AMâ', 'Summer', 'Indoor / Outdoor activites', 'hot springs', 'between 500 and 1500', 'Other', '2019-06-13'),
(14, 'Liberty Park', 'Egypt', 'Family', 'Liberty Park.jpg', 'Address: Montazah Al Giza, Giza Governorate\r\nHours: \r\nThursday	9AMâ€“7PM\r\nFriday	9AMâ€“7PM\r\nSaturday', 'Winter', 'Sightseeing', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-13'),
(15, 'El-Andalus Park', 'Egypt', 'Family', 'El-Andalus Park.jpg', 'Address: Zamalek Governorate Cairo EgyptØŒ Cairo Governorate\r\nHours: \r\nThursday	8AMâ€“12:30AM\r\nFrida', 'Summer', 'Sightseeing', 'culture and art', 'between 500 and 1500', 'All inclusive stays', '2019-06-13'),
(16, 'Maryland Park', 'Egypt', 'Relaxation', 'AddresMyroland.jpg', 'Address: El-Montaza, Heliopolis, Cairo Governorate\r\nHours: \r\nThursday	9AMâ€“11PM\r\nFriday	9AMâ€“11PM\r', 'Summer', 'Indoor / Outdoor activites', 'hot springs', 'between 500 and 1500', 'All inclusive stays', '2019-06-13'),
(17, 'KEE Action Sports Paintball', 'Egypt', 'Adventure', 'KEE Action Sports Paintball.jpg', 'Address: Family MallØŒ Giza Governorate\r\nHours: \r\nThursday	2â€“11PM\r\nFriday	2â€“11PM\r\nSaturday	2â€“1', 'Summer', 'Sports activity', 'hot springs', 'between 1500 and 2500', 'Youth hostel stays', '2019-06-13'),
(18, 'Downtown', 'Egypt', 'Relaxation', 'Downtown.jpg', 'Address: Area A-City Center, 5th District, Road 90ØŒ Cairo Governorate\r\nHours: \r\nThursday	9AMâ€“12AM', '', 'Shopping', 'shopping', 'between 1500 and 2500', 'Home stays', '2019-06-13'),
(19, 'Alexandria ', 'Egypt', 'Relaxation', 'Alex.jpg', 'Alexandria is a Mediterranean port city in Egypt. During the Hellenistic period, it was home to a li', 'Winter', 'Indoor / Outdoor activites', 'beach', 'between 500 and 1500', 'Youth hostel stays', '2019-06-13'),
(20, 'Bibliotheca Alexandrina', 'Egypt', 'Relaxation', 'Ù…ÙƒØªØ¨Ø©-Ø§Ù„Ø¥Ø³ÙƒÙ†Ø¯Ø±ÙŠØ©-1.jpg', 'The Great Library of Alexandria in Alexandria, Egypt, was one of the largest and most significant li', 'Winter', 'Sightseeing', 'culture and art', 'between 1500 and 2500', 'Youth hostel stays', '2019-06-13'),
(21, 'Ghibli Raceway', 'Egypt', 'Adventure', 'Ghibli Raceway.jpg', 'Address: Qesm Sharm Ash Sheikh, South Sinai Governorate', 'Summer', 'Sports activity', 'hot springs', 'more than 4000', 'All inclusive stays', '2019-06-13'),
(22, 'Glass-bottom boat', 'Egypt', 'Adventure', 'glass.jpg', 'A glass-bottom boat is a boat with one or more sections of glass, or other suitable transparent mate', 'Summer', 'Sightseeing', 'natural beauty', 'between 2500 and 4000', 'All inclusive stays', '2019-06-13'),
(23, 'Ras Muhammad National Park', 'Egypt', 'Adventure', 'Ras Muhammad National Park.jpg', 'Ras Muhammad National Park\r\nRas Mohammad is a national park in Egypt at the southern extreme of the ', 'Summer', 'Sightseeing', 'natural beauty', 'between 1500 and 2500', 'All inclusive stays', '2019-06-13'),
(24, 'Blue Lagoon', 'Egypt', 'Adventure', 'blue lagoon.jpg', 'Address: Ø·Ø±ÙŠÙ‚ Ù‡Ø§Ù„ÙˆÙ…Ù‰ØŒ Ø®Ù„ÙŠØ¬ Ù†Ø¹Ù…Ø©ØŒ Ø´Ø±Ù… Ø§Ù„Ø´ÙŠØ®ØŒ South Sinai Governorate', 'Summer', 'Sports activity', 'natural beauty', 'between 1500 and 2500', 'Youth hostel stays', '2019-06-13'),
(25, 'Safari', 'Egypt', 'Camping', 'Ø±Ø­Ù„Ø§Øª-Ø³ÙØ§Ø±ÙŠ.jpg', 'Desert Safari & Adventure Tours in Sharm El Sheikh. Colored Canyon Excursion â€“ Sharm El Sheikh. De', 'Summer', 'Clubbing/partying', 'beach', 'between 2500 and 4000', 'All inclusive stays', '2019-06-13'),
(26, 'The Peace Icon Memorial', 'Egypt', 'Family', 'Memorial.jpg', 'Siraj lighting awarded, design, Supply & installation, The new installation work testing & commissio', 'Summer', 'Sightseeing', 'culture and art', 'between 500 and 1500', 'Home stays', '2019-06-13'),
(27, 'MalÃ© Atoll', 'Maldives', 'Romantic', 'MalÃ© Atoll.jpg', 'Narizlandia is a group of natural atolls in the Republic of Maldives. It consists of two separate at', 'Summer', 'Relaxing/Spa', 'island', 'between 2500 and 4000', 'Other', '2019-06-13'),
(28, 'Phuket', 'Thailand', 'Romantic', 'Ø¬Ø²ÙŠØ±Ø©_Ø¨ÙˆÙƒÙŠØª.jpg', 'Phuket, a rainforested, mountainous island in the Andaman Sea, has some of Thailandâ€™s most popular', 'Summer', 'Relaxing/Spa', 'island', 'between 2500 and 4000', 'All inclusive stays', '2019-06-13'),
(29, 'Hua Hin District', 'Thailand', 'Romantic', 'Ø¬Ø²ÙŠØ±Ø©_Ù‡ÙˆØ§Ù‡ÙŠÙ†.jpg', 'Hua Hin is a seaside resort on the Gulf of Thailand, in the southern Thai province of Prachuap Khiri', 'Winter', 'Relaxing/Spa', 'beach', 'more than 4000', 'All inclusive stays', '2019-06-13'),
(30, 'Santorini', 'Greece', 'Romantic', 'Santorini.jpg', 'Santorini is one of the Cyclades islands in the Aegean Sea. It was devastated by a volcanic eruption', 'Summer', 'Relaxing/Spa', 'island', '', 'Home stays', '2019-06-13'),
(31, 'Corfu Island', 'Greece', 'Romantic', 'Corfu Island.jpg', 'Corfu, an island off Greeceâ€™s northwest coast in the Ionian Sea, is defined by rugged mountains an', 'Winter', 'Relaxing/Spa', 'natural beauty', 'between 2500 and 4000', 'Home stays', '2019-06-14'),
(34, 'Bali', 'Thailand', 'Relaxation', 'Bali.jpg', 'Bali is an Indonesian island known for its forested volcanic mountains, iconic rice paddies, beaches', 'Summer', 'Indoor / Outdoor activites', 'hot springs', 'between 1500 and 2500', 'All inclusive stays', '2019-06-14'),
(35, 'Wat Arun Ratchawararam (Temple of Dawn)', 'Thailand', 'Adventure', 'arm.jpg', 'Wat Arun Ratchawararam Ratchawaramahawihan or Wat Arun is a Buddhist temple in Bangkok Yai district ', 'Winter', 'Sightseeing', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-14'),
(36, 'Grand Palace', 'Thailand', 'Adventure', 'Grand Palace.jpg', 'The Grand Palace is a complex of buildings at the heart of Bangkok, Thailand. The palace has been th', 'Summer', 'Indoor / Outdoor activites', 'historical sites', 'less than 500', 'All inclusive stays', '2019-06-14'),
(37, 'Chatuchak Market', 'Thailand', 'Adventure', 'Chatuchak Market.jpg', 'The Chatuchak Weekend Market, on Kamphaeng Phet 2 Road, Chatuchak, Bangkok, is the largest market in', 'Summer', 'Shopping', 'shopping', 'more than 4000', 'All inclusive stays', '2019-06-14'),
(38, 'Patong beach', 'Thailand', 'Relaxation', 'Ù…Ø±Ø³Ù‰-Ø¹Ù„Ù….jpg', 'Patong is a beach resort town on the west coast of Phuket Island, facing the Andaman Sea in the sout', 'Summer', 'Clubbing/partying', 'beach', 'between 2500 and 4000', 'All inclusive stays', '2019-06-14'),
(39, 'Big Buddha', 'Thailand', 'Relaxation', 'Big Buddha.jpg', 'Phuket Big Buddha, or The Great Buddha of Phuket, is a seated Maravija Buddha statue in Phuket, Thai', 'Summer', 'Sightseeing', 'historical sites', 'between 500 and 1500', 'All inclusive stays', '2019-06-14'),
(40, 'Phuket FantaSea', 'Thailand', 'Relaxation', 'Phuket FantaSea.jpg', 'Cultural theme park offering elaborate shows with elephants, a buffet, an animal exhibit & shopping.', 'Winter', 'Clubbing/partying', 'culture and art', 'between 500 and 1500', '', '2019-06-14'),
(41, 'Nong Nooch Tropical Botanical Garden', 'Thailand', 'Camping', 'Nong Nooch Tropical Botanical Garden.jpg', 'Cultural theme park offering elaborate shows with elephants, a buffet, an animal exhibit & shopping.', 'Summer', 'Sports activity', 'hot springs', 'between 500 and 1500', 'Other', '2019-06-14'),
(42, 'Phi Phi Islands', 'Thailand', 'Camping', 'Phi Phi Islands.jpg', 'The Phi Phi Islands are an island group in Thailand, between the large island of Phuket and the Stra', 'Summer', 'Clubbing/partying', 'beach', 'between 500 and 1500', 'Youth hostel stays', '2019-06-14'),
(43, 'Railay Beach', 'Thailand', 'Romantic', 'Railay Beach.jpg', 'Railay Beach also known as Rai Leh, is a large peninsula between the city of Krabi and Ao Nang in Th', 'Summer', 'Clubbing/partying', 'beach', 'between 1500 and 2500', 'Other', '2019-06-14'),
(44, 'Alif Alif Atoll', 'Maldives', 'Romantic', 'Alif Alif Atoll.jpg', 'Alif Alif Atoll is an administrative division of the Maldives. It was created on March 1, 1984 combi', 'Summer', 'Clubbing/partying', 'island', 'between 2500 and 4000', 'Other', '2019-06-14'),
(45, 'Alimathaa', 'Maldives', 'Camping', 'Alimathaa.jpg', 'Alimathaa Island Tourism: TripAdvisor has 1998 reviews of Alimathaa Island Hotels, Attractions, and ', 'Summer', 'Indoor / Outdoor activites', 'island', 'between 2500 and 4000', 'Camping', '2019-06-14'),
(46, 'Baa Atoll', 'Maldives', 'Camping', 'Baa Atoll.jpg', 'Baa Atoll is an administrative division of the Maldives. It consists of three separate natural atoll', 'Summer', 'Indoor / Outdoor activites', 'island', 'more than 4000', 'Home stays', '2019-06-14'),
(47, 'Acropolis of Athens', 'Greece', 'Camping', 'Acropolis of Athens.jpg', 'The Acropolis of Athens is an ancient citadel located on a rocky outcrop above the city of Athens an', 'Winter', 'Sightseeing', 'historical sites', 'between 500 and 1500', 'Youth hostel stays', '2019-06-14'),
(48, 'Acropolis Museum', 'Greece', 'Camping', 'Acropolis Museum.jpg', 'The Acropolis Museum is an archaeological museum focused on the findings of the archaeological site ', 'Winter', 'Sightseeing', 'culture and art', 'less than 500', 'All inclusive stays', '2019-06-14'),
(49, 'Lindos Acropolis', 'Greece', 'Camping', 'Lindos Acropolis.jpg', 'Aristotelous Square is the main city square of Thessaloniki, Greece and is located on Nikis avenue, ', 'Winter', 'Indoor / Outdoor activites', 'historical sites', 'less than 500', 'All inclusive stays', '2019-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `user_id` varchar(100) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `q7` varchar(100) NOT NULL,
  `q8` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `idd` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`user_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `date`, `idd`) VALUES
('1', '2', '20', 'Romantic', 'Winter', 'Clubbing/partying', 'historical sites', 'Home stays', 'less than 500', '2019-06-13', 1),
('3', '10', '36', 'Relaxation', 'Winter', 'Relaxing/Spa', 'beach', 'All inclusive stays', 'less than 500', '2019-06-13', 3),
('5', '35456', '2+65', 'Camping', 'Winter', 'Relaxing/Spa', 'historical sites', 'Youth hostel stays', 'between 1500 and 2500', '2019-06-13', 4),
('6', '5', '5', 'Camping', 'Summer', 'Relaxing/Spa', 'historical sites', 'All inclusive stays', 'between 500 and 1500', '2019-06-14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `place_id` int(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `user_id`, `place_id`, `rate`, `date`) VALUES
(1, 1, 1, '', '2019-06-13'),
(2, 1, 1, '5', '2019-06-13'),
(3, 3, 2, '5', '2019-06-13'),
(4, 3, 2, '5', '2019-06-13'),
(5, 3, 2, '3', '2019-06-13'),
(6, 3, 2, '', '2019-06-13'),
(7, 3, 2, '5', '2019-06-13'),
(8, 3, 2, '5', '2019-06-13'),
(9, 3, 2, '1', '2019-06-13'),
(10, 3, 2, '1', '2019-06-13'),
(11, 3, 2, '1', '2019-06-13'),
(12, 3, 2, '5', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `share_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `place_id` int(100) NOT NULL,
  `shared` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`share_id`, `user_id`, `place_id`, `shared`, `date`) VALUES
(2, 1, 1, 'shared', '2019-06-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`share_id`),
  ADD KEY `place_id` (`place_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `identity`
--
ALTER TABLE `identity`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `idd` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `share_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `identity` (`user_id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`place_id`) REFERENCES `place` (`place_id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `identity` (`user_id`),
  ADD CONSTRAINT `rate_ibfk_3` FOREIGN KEY (`place_id`) REFERENCES `place` (`place_id`);

--
-- Constraints for table `share`
--
ALTER TABLE `share`
  ADD CONSTRAINT `share_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`place_id`),
  ADD CONSTRAINT `share_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `identity` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
