-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 06:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k_mdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `employeed` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `gender`, `employeed`, `country`, `subject`, `message`) VALUES
(9, 'Arbesa Musliu', 'am46107@ubt-uni.net ', 'female', 'Student, Profesor', 'Kosova', 'create a contact', 'User: Arbesë Musliu wants to send u a message'),
(12, 'Arbesa Musliu', 'arbesemusliu@gmail.om', 'female', 'Student', 'Kosova', 'Rreth Projektit WEB', 'I wanna send u the project on WEB - Konnect Media'),
(13, 'Arbesa Musliu', 'arbese', 'female', 'Student', 'Kosova', 'Projekti WEB', 'New updates in project are coming'),
(14, 'Arbes', 'musliuarbese@gmail.com', 'female', 'Student, Profesor', 'Kosova', 'New contact', 'The Project Konnect Media is updated and im lovin in it so im sharing the news with u.'),
(23, 'betim', 'betim@gmail.com', 'male', 'Profesor', 'Kosova', 'New contact', 'Show me the project ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET latin1 NOT NULL,
  `subtitle` varchar(500) CHARACTER SET latin1 NOT NULL,
  `content` longtext CHARACTER SET latin1 NOT NULL,
  `photo` text NOT NULL,
  `post_author` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `title`, `subtitle`, `content`, `photo`, `post_author`) VALUES
(14, 'Scrum', 'Using Acile Scrum for WEB', 'Scrum is a framework of agile. And we used it to build our projects', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRHZzRWojm-Cq4simCJsL9kOKkBY39SOmb1-A&usqp=CAU', 'Admin'),
(15, 'Web Design', 'We Design our Website', 'We make the best design for our Company, and that\'S the way how we work', 'data:image/jpeg;base64,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', 'Admin'),
(16, 'TeamWork', 'We Work Hard', 'Check website for latest pricing and availability', 'https://previews.123rf.com/images/vectorlab/vectorlab2001/vectorlab200100393/137233639-teamwork-process-website-landing-page-set-agile-business-team-of-programmers-working-and-make-some-p.jpg', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET latin1 NOT NULL,
  `icon` text NOT NULL,
  `content` longtext CHARACTER SET latin1 NOT NULL,
  `services_author` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `title`, `icon`, `content`, `services_author`) VALUES
(1, 'Arbesa Musliu', 'img/ball.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Admin'),
(2, 'What is Lorem Ipsum', 'img/icon.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.software like Aldus PageMaker including versions of Lorem Ipsum.', 'Admin'),
(14, 'Social Media Management', 'img/facebook.png', 'Engage with fans on Facebook, Twitter, Pinterest, LinkedIn, Instagram, and more. Social media is one of the most popular ways to connect, and when you market there, you\'re advertising to a gold mine of potential customers. is a popular free social networking website that allows registered users to create profiles, upload photos and video, send messages and keep in touch with friends, family and colleagues.Facebook is a website which allows users, who sign-up for free profiles, to connect with friends, work colleagues or people they don\'t know, online. It allows users to share pictures, music, videos, and articles, as well as their own thoughts ', 'Admin'),
(15, 'Website Design', 'img/web-development.png', 'A website designed uniquely for your company. Web design is one of the most important parts of your business. Our award-winning designers will help you welcome new customers with a clean, professional website.Web design is the process of creating websites. It encompasses several different aspects, including webpage layout, content production, and graphic design. While the terms web design and web development are often used interchangeably, web design is technically a subset of the broader category of web development.Websites are created using a markup language called HTML. Web designers build webpages.', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `username`, `name`, `email`, `password`, `role`) VALUES
(6, 'Admin', 'ArbesaAdmin', 'admin@konnect.com ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(13, 'Arbesa', 'Arbesa Musliu ', 'arbese@gmail.com ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2),
(14, 'Arbo', 'Arbesa Musliu', 'am46107@ubt-uni.net ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2),
(20, 'arbeessa', 'arbesa', 'arbesamusliu9@gmail.com ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2),
(40, 'Arbojaa', 'Arbesa Musliu', 'arbese@gmail.com ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;