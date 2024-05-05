-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2024 at 12:41 PM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acmshtco_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_process`
--

CREATE TABLE `project_process` (
  `id` int(11) NOT NULL,
  `ref` varchar(30) DEFAULT NULL,
  `protype` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `etime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project_process`
--

INSERT INTO `project_process` (`id`, `ref`, `protype`, `date`, `user`, `etime`) VALUES
(39, '337595039', 'Mobile Application Development', '1714486400', 'dl@gmail.com', 'Mobile Application Development 6-12 months'),
(40, '779837040', 'Project Management Software', '1714486539', 'johnmath@gmail.com', 'Project Management Software 12-18 months'),
(41, '789557041', 'Web Development Projects', '1714486605', 'johnmath@gmail.com', 'Web Development Projects 3-9 months'),
(42, '558756042', 'Project Management Software', '1714489710', 'ifyokaemma@gmail.com', 'Project Management Software 12-18 months'),
(43, '753695043', 'Web Development Projects', '1714489730', 'ifyokaemma@gmail.com', 'Web Development Projects 3-9 months'),
(44, '327529044', 'Mobile Application Development', '1714489759', 'ifyokaemma@gmail.com', 'Mobile Application Development 6-12 months'),
(45, '421864045', 'Government Systems', '1714489826', 'ifyokaemma@gmail.com', 'Government Systems 24-36 months');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `date`) VALUES
(1, 'Pascal', 'Smith Man', 'paos@b.c', '123456', '1714383783'),
(2, 'Pans', 'Doe Math', 'johnmath@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1714383973'),
(3, 'ifeanyi', 'okafor', 'ifyokaemma@gmail.com', '202cb962ac59075b964b07152d234b70', '1714429854'),
(6, 'Daniel', 'Loman', 'dl@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1714481705'),
(7, 'Pascal', 'Smith Man', 'sps@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1714482152');

-- --------------------------------------------------------

--
-- Table structure for table `z1property`
--

CREATE TABLE `z1property` (
  `id` int(20) NOT NULL,
  `ref` varchar(20) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `z2method`
--

CREATE TABLE `z2method` (
  `id` int(11) NOT NULL,
  `ref` varchar(11) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `z2method`
--

INSERT INTO `z2method` (`id`, `ref`, `data`) VALUES
(1, '82455604', 'Waste Elimination: Lean'),
(2, '82455604', 'Cross-functional teams: Agile'),
(3, '82455604', 'Backlog grooming and prioritization: Scrum'),
(4, '82455604', 'Focus on eliminating waste and maximizing value: L'),
(5, '82455604', 'Continuous improvement (Kaizen): Lean'),
(6, '82455604', 'Continuous integration: Extreme Programming (XP)'),
(7, '82455604', 'Customer involvement throughout the development pr'),
(8, '82455604', 'Waste Elimination: Lean'),
(9, '82455604', 'Cross-functional teams: Agile'),
(10, '82455604', 'Backlog grooming and prioritization: Scrum'),
(11, '82455604', 'Focus on eliminating waste and maximizing value: L'),
(12, '82455604', 'Continuous improvement (Kaizen): Lean'),
(13, '82455604', 'Continuous integration: Extreme Programming (XP)'),
(14, '82455604', 'Customer involvement throughout the development pr'),
(15, '14612506', 'Continuous delivery and improvement: Agile'),
(16, '14612506', 'Limiting work in progress (WIP): Kanban'),
(17, '14612506', 'Continuous flow of work: Kanban'),
(18, '14612506', 'Transparency and communication through board visib'),
(19, '76486807', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(20, '76486807', 'Waste Elimination: Lean'),
(21, '76486807', 'Iterative and incremental approach: Agile'),
(22, '76486807', 'Emphasis on collaboration and customer feedback: A'),
(23, '76486807', 'Adaptive to changing requirements: Agile'),
(24, '76486807', 'Cross-functional teams: Agile'),
(25, '76486807', 'Continuous delivery and improvement: Agile'),
(26, '76486807', 'Sequential approach with distinct phases (Requirem'),
(27, '76486807', 'Emphasis on documentation: Waterfall'),
(28, '76486807', 'Little flexibility for changes after the initial p'),
(29, '76486807', 'Well-defined deliverables at each phase: Waterfall'),
(30, '76486807', 'Iterative approach with short, time-boxed iteratio'),
(31, '76486807', 'Employs roles such as Product Owner, Scrum Master,'),
(32, '76486807', 'Daily stand-up meetings (daily scrum): Scrum'),
(33, '76486807', 'Sprint planning, review, and retrospective meeting'),
(34, '76486807', 'Backlog grooming and prioritization: Scrum'),
(35, '76486807', 'Focus on eliminating waste and maximizing value: L'),
(36, '76486807', 'Continuous improvement (Kaizen): Lean'),
(37, '76486807', 'Visual management (e.g., Kanban boards): Lean, Kan'),
(38, '76486807', 'Just-in-time delivery: Lean'),
(39, '76486807', 'Empowerment of teams: Lean'),
(40, '76486807', 'Emphasis on software engineering practices (e.g., '),
(41, '76486807', 'Frequent releases: Extreme Programming (XP)'),
(42, '76486807', 'Simple design: Extreme Programming (XP)'),
(43, '76486807', 'Continuous integration: Extreme Programming (XP)'),
(44, '76486807', 'Customer involvement throughout the development pr'),
(45, '76486807', 'Visual management using Kanban boards: Kanban'),
(46, '76486807', 'Limiting work in progress (WIP): Kanban'),
(47, '76486807', 'Continuous flow of work: Kanban'),
(48, '76486807', 'Focus on cycle time optimization: Kanban'),
(49, '18528308', 'Transparency and communication through board visib'),
(50, '129548010', 'Cross-functional teams: Agile'),
(51, '129548010', 'Sequential approach with distinct phases (Requirem'),
(52, '129548010', 'Well-defined deliverables at each phase: Waterfall'),
(53, '894387012', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(54, '894387012', 'Waste Elimination: Lean'),
(55, '668547015', 'Cross-functional teams: Agile'),
(56, '668547015', 'Frequent releases: Extreme Programming (XP)'),
(57, '668547015', 'Simple design: Extreme Programming (XP)'),
(58, '668547015', 'Continuous integration: Extreme Programming (XP)'),
(59, '246316016', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(60, '246316016', 'Waste Elimination: Lean'),
(61, '246316016', 'Iterative and incremental approach: Agile'),
(62, '246316016', 'Emphasis on collaboration and customer feedback: A'),
(63, '246316016', 'Adaptive to changing requirements: Agile'),
(64, '955624017', 'Emphasis on documentation: Waterfall'),
(65, '955624017', 'Little flexibility for changes after the initial p'),
(66, '955624017', 'Well-defined deliverables at each phase: Waterfall'),
(67, '955624017', 'Continuous improvement (Kaizen): Lean'),
(68, '955624017', 'Visual management (e.g., Kanban boards): Lean, Kan'),
(69, '955624017', 'Just-in-time delivery: Lean'),
(70, '372913018', 'Waste Elimination: Lean'),
(71, '372913018', 'Visual management using Kanban boards: Kanban'),
(72, '372913018', 'Continuous flow of work: Kanban'),
(73, '372913018', 'Focus on cycle time optimization: Kanban'),
(74, '564927019', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(75, '564927019', 'Waste Elimination: Lean'),
(76, '564927019', 'Iterative and incremental approach: Agile'),
(77, '464853020', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(78, '464853020', 'Waste Elimination: Lean'),
(79, '464853020', 'Iterative and incremental approach: Agile'),
(80, '464853020', 'Emphasis on collaboration and customer feedback: A'),
(81, '212411021', 'Cross-functional teams: Agile'),
(82, '212411021', 'Sequential approach with distinct phases (Requirem'),
(83, '212411021', 'Visual management using Kanban boards: Kanban'),
(84, '783459022', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(85, '783459022', 'Waste Elimination: Lean'),
(86, '783459022', 'Iterative and incremental approach: Agile'),
(87, '783459022', 'Emphasis on collaboration and customer feedback: A'),
(88, '783459022', 'Adaptive to changing requirements: Agile'),
(89, '783459022', 'Cross-functional teams: Agile'),
(90, '783459022', 'Continuous delivery and improvement: Agile'),
(91, '783459022', 'Sequential approach with distinct phases (Requirem'),
(92, '783459022', 'Emphasis on documentation: Waterfall'),
(93, '783459022', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(94, '783459022', 'Waste Elimination: Lean'),
(95, '783459022', 'Iterative and incremental approach: Agile'),
(96, '783459022', 'Emphasis on collaboration and customer feedback: A'),
(97, '783459022', 'Adaptive to changing requirements: Agile'),
(98, '783459022', 'Cross-functional teams: Agile'),
(99, '783459022', 'Continuous delivery and improvement: Agile'),
(100, '783459022', 'Sequential approach with distinct phases (Requirem'),
(101, '783459022', 'Emphasis on documentation: Waterfall'),
(102, '814375023', 'Little flexibility for changes after the initial p'),
(103, '814375023', 'Well-defined deliverables at each phase: Waterfall'),
(104, '814375023', 'Iterative approach with short, time-boxed iteratio'),
(105, '814375023', 'Employs roles such as Product Owner, Scrum Master,'),
(106, '814375023', 'Daily stand-up meetings (daily scrum): Scrum'),
(107, '814375023', 'Sprint planning, review, and retrospective meeting'),
(108, '814375023', 'Backlog grooming and prioritization: Scrum'),
(109, '814375023', 'Focus on eliminating waste and maximizing value: L'),
(110, '814375023', 'Continuous improvement (Kaizen): Lean'),
(111, '814375023', 'Visual management (e.g., Kanban boards): Lean, Kan'),
(112, '814375023', 'Just-in-time delivery: Lean'),
(113, '814375023', 'Empowerment of teams: Lean'),
(114, '814375023', 'Continuous flow of work: Kanban'),
(115, '814375023', 'Focus on cycle time optimization: Kanban'),
(116, '814375023', 'Transparency and communication through board visib'),
(117, '814375023', 'Little flexibility for changes after the initial p'),
(118, '814375023', 'Well-defined deliverables at each phase: Waterfall'),
(119, '814375023', 'Iterative approach with short, time-boxed iteratio'),
(120, '814375023', 'Employs roles such as Product Owner, Scrum Master,'),
(121, '814375023', 'Daily stand-up meetings (daily scrum): Scrum'),
(122, '814375023', 'Sprint planning, review, and retrospective meeting'),
(123, '814375023', 'Backlog grooming and prioritization: Scrum'),
(124, '814375023', 'Focus on eliminating waste and maximizing value: L'),
(125, '814375023', 'Continuous improvement (Kaizen): Lean'),
(126, '814375023', 'Visual management (e.g., Kanban boards): Lean, Kan'),
(127, '814375023', 'Just-in-time delivery: Lean'),
(128, '814375023', 'Empowerment of teams: Lean'),
(129, '814375023', 'Continuous flow of work: Kanban'),
(130, '814375023', 'Focus on cycle time optimization: Kanban'),
(131, '814375023', 'Transparency and communication through board visib'),
(132, '688954024', 'Adaptive to changing requirements: Agile'),
(133, '688954024', 'Cross-functional teams: Agile'),
(134, '688954024', 'Little flexibility for changes after the initial p'),
(135, '688954024', 'Well-defined deliverables at each phase: Waterfall'),
(136, '688954024', 'Daily stand-up meetings (daily scrum): Scrum'),
(137, '242384028', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(138, '242384028', 'Waste Elimination: Lean'),
(139, '242384028', 'Iterative and incremental approach: Agile'),
(140, '242384028', 'Adaptive to changing requirements: Agile'),
(141, '242384028', 'Emphasis on documentation: Waterfall'),
(142, '242384028', 'Visual management using Kanban boards: Kanban'),
(143, '242384028', 'Limiting work in progress (WIP): Kanban'),
(144, '242384028', 'Transparency and communication through board visib'),
(145, '127432029', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(146, '127432029', 'Waste Elimination: Lean'),
(147, '127432029', 'Iterative and incremental approach: Agile'),
(148, '127432029', 'Emphasis on collaboration and customer feedback: A'),
(149, '127432029', 'Adaptive to changing requirements: Agile'),
(150, '127432029', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(151, '127432029', 'Waste Elimination: Lean'),
(152, '127432029', 'Iterative and incremental approach: Agile'),
(153, '127432029', 'Emphasis on collaboration and customer feedback: A'),
(154, '127432029', 'Adaptive to changing requirements: Agile'),
(155, '127432029', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(156, '127432029', 'Waste Elimination: Lean'),
(157, '127432029', 'Iterative and incremental approach: Agile'),
(158, '127432029', 'Emphasis on collaboration and customer feedback: A'),
(159, '127432029', 'Adaptive to changing requirements: Agile'),
(160, '466827030', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(161, '466827030', 'Waste Elimination: Lean'),
(162, '466827030', 'Iterative and incremental approach: Agile'),
(163, '466827030', 'Well-defined deliverables at each phase: Waterfall'),
(164, '466827030', 'Simple design: Extreme Programming (XP)'),
(165, '466827030', 'Continuous integration: Extreme Programming (XP)'),
(166, '537965031', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(167, '537965031', 'Waste Elimination: Lean'),
(168, '537965031', 'Simple design: Extreme Programming (XP)'),
(169, '537965031', 'Continuous integration: Extreme Programming (XP)'),
(170, '537965031', 'Focus on cycle time optimization: Kanban'),
(171, '537965031', 'Transparency and communication through board visib'),
(172, '685277032', 'Sprint planning, review, and retrospective meeting'),
(173, '685277032', 'Backlog grooming and prioritization: Scrum'),
(174, '685277032', 'Emphasis on software engineering practices (e.g., '),
(175, '685277032', 'Frequent releases: Extreme Programming (XP)'),
(176, '685277032', 'Simple design: Extreme Programming (XP)'),
(177, '685277032', 'Sprint planning, review, and retrospective meeting'),
(178, '685277032', 'Backlog grooming and prioritization: Scrum'),
(179, '685277032', 'Emphasis on software engineering practices (e.g., '),
(180, '685277032', 'Frequent releases: Extreme Programming (XP)'),
(181, '685277032', 'Simple design: Extreme Programming (XP)'),
(182, '229514033', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(183, '229514033', 'Waste Elimination: Lean'),
(184, '229514033', 'Continuous flow of work: Kanban'),
(185, '229514033', 'Focus on cycle time optimization: Kanban'),
(186, '284834034', 'Emphasis on documentation: Waterfall'),
(187, '284834034', 'Little flexibility for changes after the initial p'),
(188, '284834034', 'Well-defined deliverables at each phase: Waterfall'),
(189, '284834034', 'Iterative approach with short, time-boxed iteratio'),
(190, '284834034', 'Employs roles such as Product Owner, Scrum Master,'),
(191, '284834034', 'Frequent releases: Extreme Programming (XP)'),
(192, '284834034', 'Simple design: Extreme Programming (XP)'),
(193, '229514033', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(194, '229514033', 'Waste Elimination: Lean'),
(195, '229514033', 'Continuous flow of work: Kanban'),
(196, '229514033', 'Focus on cycle time optimization: Kanban'),
(197, '229514033', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(198, '229514033', 'Waste Elimination: Lean'),
(199, '229514033', 'Continuous flow of work: Kanban'),
(200, '229514033', 'Focus on cycle time optimization: Kanban'),
(201, '827746035', 'Continuous improvement (Kaizen): Lean'),
(202, '827746035', 'Just-in-time delivery: Lean'),
(203, '827746035', 'Empowerment of teams: Lean'),
(204, '827746035', 'Continuous flow of work: Kanban'),
(205, '827746035', 'Focus on cycle time optimization: Kanban'),
(206, '827746035', 'Transparency and communication through board visib'),
(207, '689446036', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(208, '689446036', 'Waste Elimination: Lean'),
(209, '757626037', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(210, '757626037', 'Waste Elimination: Lean'),
(211, '757626037', 'Iterative and incremental approach: Agile'),
(212, '757626037', 'Emphasis on collaboration and customer feedback: A'),
(213, '757626037', 'Cross-functional teams: Agile'),
(214, '757626037', 'Just-in-time delivery: Lean'),
(215, '757626037', 'Empowerment of teams: Lean'),
(216, '757626037', 'Frequent releases: Extreme Programming (XP)'),
(217, '757626037', 'Simple design: Extreme Programming (XP)'),
(218, '757626037', 'Continuous integration: Extreme Programming (XP)'),
(219, '757626037', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(220, '757626037', 'Waste Elimination: Lean'),
(221, '757626037', 'Iterative and incremental approach: Agile'),
(222, '757626037', 'Emphasis on collaboration and customer feedback: A'),
(223, '757626037', 'Cross-functional teams: Agile'),
(224, '757626037', 'Just-in-time delivery: Lean'),
(225, '757626037', 'Empowerment of teams: Lean'),
(226, '757626037', 'Frequent releases: Extreme Programming (XP)'),
(227, '757626037', 'Simple design: Extreme Programming (XP)'),
(228, '757626037', 'Continuous integration: Extreme Programming (XP)'),
(229, '337595039', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(230, '337595039', 'Waste Elimination: Lean'),
(231, '337595039', 'Continuous improvement (Kaizen): Lean'),
(232, '337595039', 'Just-in-time delivery: Lean'),
(233, '337595039', 'Empowerment of teams: Lean'),
(234, '337595039', 'Frequent releases: Extreme Programming (XP)'),
(235, '337595039', 'Simple design: Extreme Programming (XP)'),
(236, '337595039', 'Continuous integration: Extreme Programming (XP)'),
(237, '779837040', 'Sprint planning, review, and retrospective meeting'),
(238, '779837040', 'Focus on eliminating waste and maximizing value: L'),
(239, '779837040', 'Frequent releases: Extreme Programming (XP)'),
(240, '779837040', 'Customer involvement throughout the development pr'),
(241, '779837040', 'Visual management using Kanban boards: Kanban'),
(242, '779837040', 'Limiting work in progress (WIP): Kanban'),
(243, '779837040', 'Continuous flow of work: Kanban'),
(244, '779837040', 'Focus on cycle time optimization: Kanban'),
(245, '779837040', 'Transparency and communication through board visib'),
(246, '789557041', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(247, '789557041', 'Waste Elimination: Lean'),
(248, '789557041', 'Iterative and incremental approach: Agile'),
(249, '789557041', 'Emphasis on collaboration and customer feedback: A'),
(250, '789557041', 'Adaptive to changing requirements: Agile'),
(251, '789557041', 'Cross-functional teams: Agile'),
(252, '789557041', 'Continuous delivery and improvement: Agile'),
(253, '789557041', 'Sequential approach with distinct phases (Requirem'),
(254, '789557041', 'Emphasis on documentation: Waterfall'),
(255, '789557041', 'Well-defined deliverables at each phase: Waterfall'),
(256, '789557041', 'Iterative approach with short, time-boxed iteratio'),
(257, '789557041', 'Employs roles such as Product Owner, Scrum Master,'),
(258, '789557041', 'Continuous integration: Extreme Programming (XP)'),
(259, '789557041', 'Customer involvement throughout the development pr'),
(260, '753695043', 'Adaptive to changing requirements: Agile'),
(261, '753695043', 'Cross-functional teams: Agile'),
(262, '327529044', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(263, '327529044', 'Waste Elimination: Lean'),
(264, '327529044', 'Iterative and incremental approach: Agile'),
(265, '327529044', 'Emphasis on collaboration and customer feedback: A'),
(266, '327529044', 'Adaptive to changing requirements: Agile'),
(267, '327529044', 'Cross-functional teams: Agile'),
(268, '327529044', 'Continuous delivery and improvement: Agile'),
(269, '327529044', 'Sequential approach with distinct phases (Requirem'),
(270, '327529044', 'Emphasis on documentation: Waterfall'),
(271, '327529044', 'Little flexibility for changes after the initial p'),
(272, '327529044', 'Well-defined deliverables at each phase: Waterfall'),
(273, '327529044', 'Iterative approach with short, time-boxed iteratio'),
(274, '327529044', 'Employs roles such as Product Owner, Scrum Master,'),
(275, '327529044', 'Daily stand-up meetings (daily scrum): Scrum'),
(276, '327529044', 'Sprint planning, review, and retrospective meeting'),
(277, '327529044', 'Backlog grooming and prioritization: Scrum'),
(278, '327529044', 'Focus on eliminating waste and maximizing value: L'),
(279, '327529044', 'Continuous improvement (Kaizen): Lean'),
(280, '327529044', 'Visual management (e.g., Kanban boards): Lean, Kan'),
(281, '327529044', 'Just-in-time delivery: Lean'),
(282, '327529044', 'Empowerment of teams: Lean'),
(283, '327529044', 'Emphasis on software engineering practices (e.g., '),
(284, '327529044', 'Frequent releases: Extreme Programming (XP)'),
(285, '327529044', 'Simple design: Extreme Programming (XP)'),
(286, '327529044', 'Continuous integration: Extreme Programming (XP)'),
(287, '327529044', 'Customer involvement throughout the development pr'),
(288, '327529044', 'Visual management using Kanban boards: Kanban'),
(289, '327529044', 'Limiting work in progress (WIP): Kanban'),
(290, '327529044', 'Continuous flow of work: Kanban'),
(291, '327529044', 'Focus on cycle time optimization: Kanban'),
(292, '421864045', 'Continuous Feedback: Agile, Lean, Extreme Programm'),
(293, '421864045', 'Waste Elimination: Lean'),
(294, '421864045', 'Iterative and incremental approach: Agile'),
(295, '421864045', 'Emphasis on collaboration and customer feedback: A'),
(296, '421864045', 'Adaptive to changing requirements: Agile'),
(297, '421864045', 'Cross-functional teams: Agile');

-- --------------------------------------------------------

--
-- Table structure for table `z3step`
--

CREATE TABLE `z3step` (
  `id` int(11) NOT NULL,
  `ref` varchar(20) DEFAULT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_process`
--
ALTER TABLE `project_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `z1property`
--
ALTER TABLE `z1property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `z2method`
--
ALTER TABLE `z2method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `z3step`
--
ALTER TABLE `z3step`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_process`
--
ALTER TABLE `project_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `z1property`
--
ALTER TABLE `z1property`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `z2method`
--
ALTER TABLE `z2method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `z3step`
--
ALTER TABLE `z3step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
