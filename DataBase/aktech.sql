-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 05:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aktech1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `usrename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usreemail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `usrename`, `usreemail`, `password`, `privilege`) VALUES
(0, 'admin', '', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `id` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `details` varchar(50000) NOT NULL,
  `cv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `job`, `name`, `email`, `phone`, `details`, `cv`) VALUES
(1, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adfads', 'uploadsCV/REMAZ BADRALDEEN 1_1.pdf'),
(2, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adfads', '/uploadsCVREMAZ BADRALDEEN 1_1.pdf'),
(3, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adfads', 'uploadsCV/REMAZ BADRALDEEN 1_1.pdf'),
(4, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'asdf', 'uploadsCV/AKTECH Profile 2022_02.png'),
(5, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'asdf', 'uploadsCV/AKTECH Profile 2022_02.png'),
(6, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adsf', 'uploadsCV/large Domain.pdf'),
(7, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adsf', 'uploadsCV/large Domain.pdf'),
(8, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adsf', 'uploadsCV/large Domain.pdf'),
(9, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adsf', 'uploadsCV/large Domain.pdf'),
(10, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adsf', 'uploadsCV/large Domain.pdf'),
(11, 'Delivery Head - Information Security and GRC\r\n', 'ibrahim adam', 'ibrahim651219@gmail.com', '0535676203', 'adsf', 'uploadsCV/large Domain.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `img`) VALUES
(1, 'images/clients/c1.png', 'assets/images/clients/c1.png'),
(2, 'images/clients/c1.png', 'assets/images/clients/c2.png'),
(3, '', 'assets/images/clients/c3.png'),
(4, '', 'assets/images/clients/c4.png'),
(5, '', 'assets/images/clients/c5.png'),
(6, '', 'assets/images/clients/c6.png'),
(7, '', 'assets/images/clients/c7.png'),
(8, '', 'assets/images/clients/c8.png'),
(9, '', 'assets/images/clients/c9.png'),
(10, '', 'assets/images/clients/c10.png'),
(11, '', 'assets/images/clients/c11.png'),
(12, '', 'assets/images/clients/c12.png'),
(13, '', 'assets/images/clients/c13.png'),
(14, '', 'assets/images/clients/c14.png'),
(15, '', 'assets/images/clients/c15.png'),
(17, '', 'assets/images/clients/c17.png'),
(18, '', 'assets/images/clients/c18.png'),
(19, '', 'assets/images/clients/c19.png'),
(20, '', 'assets/images/clients/c20.png'),
(21, '', 'assets/images/clients/c21.png'),
(22, '', 'assets/images/clients/c22.png'),
(23, '', 'assets/images/clients/c23.png'),
(24, 'Sultan bin Nayef Al-Dawish Law Firm and Legal Consultations', 'assets/images/clients/c24.png'),
(25, '', 'assets/images/clients/c25.png'),
(26, '', 'assets/images/clients/c26.png'),
(27, '', 'assets/images/clients/c27.png'),
(28, '', 'assets/images/clients/c28.png'),
(29, '', 'assets/images/clients/c29.png'),
(30, '', 'assets/images/clients/c30.png'),
(31, '', 'assets/images/clients/c31.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactfrom`
--

CREATE TABLE `contactfrom` (
  `mesid` int(11) NOT NULL,
  `mesname` mediumtext COLLATE utf8_general_nopad_ci NOT NULL,
  `mseemail` varchar(50) COLLATE utf8_general_nopad_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_general_nopad_ci NOT NULL,
  `messubject` varchar(100) COLLATE utf8_general_nopad_ci NOT NULL,
  `mescontent` longtext COLLATE utf8_general_nopad_ci NOT NULL,
  `mesdate` date NOT NULL DEFAULT current_timestamp(),
  `location` varchar(50) COLLATE utf8_general_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `idcontent` int(50) NOT NULL,
  `name` text NOT NULL,
  `detiles` longtext NOT NULL,
  `detiles2` varchar(50000) NOT NULL,
  `detiles3` varchar(10000) NOT NULL,
  `detiles4` varchar(1000) NOT NULL,
  `detiles5` varchar(1000) NOT NULL,
  `detiles6` varchar(1000) NOT NULL,
  `detiles7` varchar(1000) NOT NULL,
  `detiles8` varchar(1000) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`idcontent`, `name`, `detiles`, `detiles2`, `detiles3`, `detiles4`, `detiles5`, `detiles6`, `detiles7`, `detiles8`, `user`) VALUES
(1, 'about us', 'AKTECH as a dynamic EPC (Engineering, Procurement, and Construction) company dedicated to driving innovation and excellence in the oil and gas sector. With a rich history of delivering successful projects and exceeding client expectations, we have established ourselves as a trusted partner in the industry.', 'At AKTECH, our core values of integrity, collaboration, and excellence guide everything we do. With a team of experienced professionals and experts in project management, engineering design, and procurement services, we are committed to delivering world-class solutions that meet the unique needs of each project.', 'Driven by a passion for excellence, we adhere to the PMI PMP standard and best practices in the field of project management. This ensures that every project we undertake is executed with precision, efficiency, and the highest standards of quality. By leveraging cutting-edge technology and innovative methodologies, we strive to continuously improve our processes and deliver outstanding results for our clients.', 'By undertaking all engineering-design services in-house, AKTECH ensures adaptability and quick and precise responses to inevitable project adjustments; furthermore, it gives us the edge to offer top of line service at a competitive rate. We never cut corners and always aim to maintain the highest standards in safety, quality, ethics, and environmental responsibility.', '', '', '', '', 0),
(2, 'Vision', '\"To create a globally unified and reliable network of trade, innovation, and long-term growth.\"', 'Offering all required EPC services out of one hand, hence providing a single-point-of-responsibility solutions and services for the engineering, construction for the oil & gas, mining, and infrastructure fields.', 'Consistently exceeding client expectations by delivering projects of exceptional quality.', 'Ensuring projects are completed on time and within budget, every time.', 'Striving for excellence in everything we do', 'Empowering our teams to achieve their full potential and contribute to our collective success.', 'Creating enduring value for our clients, stakeholders, and the communities in which we operate.', 'Playing a vital role in shaping a more resilient, prosperous, and sustainable future for generations to come.', 0),
(3, 'Mission', '\" We believe high-quality trade should be easy, seamless, and rapidly sourced directly to the people. Our mission is to remove the mediators, empower our clients, and deliver the most trustworthy trade experience for our stakeholders.\"', '', '', '', '', '', '', '', 0),
(5, 'BRAND PROMISE', '\"Our central promise at Cotrade is to cultivate long-term,symbiotic, and empowered relationships with merchants; todeliver an exceptional trade experience and establish oursignificant contribution to the global export industry.\"', '', '', '', '', '', '', '', 0),
(6, 'VALUE PROPOSITION', 'Service innovation is at the core of every decision we make at Cotrade and ourcustomers are not just a source of income, they are part of a shared vision to createthe most reliable, trusted, and unified network of global trade .\nWe provide the most customer-focused trade experience that prioritizes peoplebefore profit and delivers:\nSeamless & expedited trade\nData-driven logistics & strategy\nHigh-quality & organic products\nExceptional service & consistency\nIf you'\'re ready to cultivate long-term growth and collaborate with an established,uncompromising, and trustworthy leader within the global export industry...', '', '', '', '', '', '', '', 0),
(7, 'POSITIONING STATEMENT', 'Cotrade is to be the example of bold, uncompromising, and customer-focusedimport and export. We do not limit the size, scope, or scale of businesses,merchants, and stakeholders we work with, and we are committed to elevating theglobal awareness and impact of the clients we serve.', '', '', '', '', '', '', '', 0),
(8, 'TRUSTWORTHY', 'We are honorable with our intentions and deliberatewith our words. Every customer is part of our company story and weunderstand that trust is the most vital component of creating ourvision for the future.', '', '', '', '', '', '', '', 0),
(9, 'BOLD', 'We are no longer willing to remain the \"best-kept secret\" ofcustomer-focused trade and we'\'re determined to amplify the globalawareness of our reputation as a major player within the exportindustry.', '', '', '', '', '', '', '', 0),
(10, 'COMMUNITYDRIVEN', 'Our farmers, stakeholders, and customers arethe foundation of our mission and the fuel that drives us to innovateand cultivate long-term business relationships.', '', '', '', '', '', '', '', 0),
(11, 'SEAMLESS', 'Transforming the difficult into easy and turning thecomplex into simple is the customer journey we provide and thepromise we make to our farmers and stakeholders.', '', '', '', '', '', '', '', 0),
(12, 'DELIBERATE', 'We have a clear vision and direction for the impact ofour business, the value we provide, and are deeply rooted in the why of behind every action and decision.', '', '', '', '', '', '', '', 0),
(13, 'COTRADE IS A COMPANY THAT THINKS LOCALLY AND ACTS GLOBALLY', 'Empowering farmers with knowledge and resources\nDelivering consistent and profitable outcomes for stakeholders', '', '', '', '', '', '', '', 0),
(14, 'COTRADE IS COMMITTED TO ELEVATING THE GLOBAL AWARENESS & IMPACT OF OURSIGNIFICANT CONTRIBUTION TO GLOBAL TRADE', 'We are the # 1 exporter of sesame seeds in the world\r\nWe are the # 3 exporter of peanuts in the world', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `type`, `company`, `experience`, `end`) VALUES
(1, 'Delivery Head - Information Security and GRC\r\n', 'Full Time', 'ISYX Security Agency LLC', ' 0 - 5', '2024-02-06'),
(2, 'Delivery Head - Information Security and GRC', 'Full Time', 'ISYX Security Agency LLC', ' 0 - 3', '2024-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `newstitle` varchar(5000) NOT NULL,
  `newscontent1` varchar(5000) NOT NULL,
  `newscontent2` varchar(5000) NOT NULL,
  `newsdate` date NOT NULL DEFAULT current_timestamp(),
  `newsimg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newstitle`, `newscontent1`, `newscontent2`, `newsdate`, `newsimg`) VALUES
(1, 'asd', 'ASDF', 'ASDF', '2024-01-01', '../../../assets/img/news/CashewNuts1.png'),
(2, 'asd2', 'ASDF2', 'ASDF2', '2024-01-01', '../../../assets/img/news/ArabicGumd1.png');

-- --------------------------------------------------------

--
-- Table structure for table `ourservices`
--

CREATE TABLE `ourservices` (
  `id` int(11) NOT NULL,
  `details` varchar(100) NOT NULL,
  `Servicestitel` varchar(100) NOT NULL,
  `details1` varchar(100) NOT NULL,
  `details2` varchar(100) NOT NULL,
  `details3` varchar(100) NOT NULL,
  `details4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourservices`
--

INSERT INTO `ourservices` (`id`, `details`, `Servicestitel`, `details1`, `details2`, `details3`, `details4`) VALUES
(1, 'As a general EPC contractor for infrastructure projects and turnkey industrial plants, we offer all ', '', '', '', '', ''),
(2, '', 'Investment Planning', 'Technical & commercial concept.', 'Feasibility studies', 'Conceptual studies', ''),
(3, '', 'Engineering Design', 'Process Development', '(Extended) Basic Engineering.', 'Front End Engineering Design (FEED).', 'Detailed Engineering.'),
(4, '', 'Procurement', 'Tendering / Awarding.', 'Technical Evaluation of offers.', 'Supply of equipment.', ''),
(5, '', 'Construction', 'Construction / Installation Supervision.', 'Documentation management.', 'Quality Assurance/Quality Control Management.', ''),
(6, '', 'Commissioning & Operation', 'Training.', 'Revamping.', 'After-Sales Services / Maintenance.', 'Pre-commissioning & Commissioning.');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `prodectname` varchar(500) NOT NULL,
  `prodecttype` varchar(500) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `prodectdetails` varchar(1000) NOT NULL,
  `prodectdetails1` longtext NOT NULL,
  `productsimg1` varchar(100) NOT NULL,
  `productsimg2` varchar(100) NOT NULL,
  `productsimg3` varchar(100) NOT NULL,
  `productsimg4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `prodectname`, `prodecttype`, `Location`, `Date`, `prodectdetails`, `prodectdetails1`, `productsimg1`, `productsimg2`, `productsimg3`, `productsimg4`) VALUES
(1, 'Power China / Sinohydro,\nNEOM', 'Provision of engineering services for NEOM\ntemporary water supply for construction.', 'Saudi Arabia', 'February 2022', 'Sesame, or sesamum, is native to savanna area in sub-Saharan Africa and it is widely naturalized in tropical regions around the world and is cultivated for its edible seeds. \r\nCotrade provides a premium sesame seed which contains a considerable amount of oil, proteins, carbohydrates, essential minerals, a high amount of methionine and tryptophan, fibers as well as secondary metabolites such as lignans, saponins, flavonoids, and phenolic compounds. \r\nCotrade supplies the whitish grade from Sudan, Nigeria, and Tanzania which are highly acclaimed for their sweeter flavor and nutty texture compared to other sesame seeds of different origins and variants, they are utilized in the food industry in both savory and sweet dishes.\r\n', 'Cotrade provides a premium sesame seed which contains a considerable amount of oil, proteins, carbohydrates, essential minerals, a high amount of methionine and tryptophan, fibers as well as secondary metabolites such as lignans, saponins, flavonoids, and phenolic compounds.  Cotrade supplies the whitish grade from Sudan, Nigeria, and Tanzania which are highly acclaimed for their sweeter flavor and nutty texture compared to other sesame seeds of different origins and variants, they are utilized in the food industry in both savory and sweet dishes.', 'assets/images/index/project/p1.png', 'assets/images/index/project/p2.png', 'assets/images/index/project/p3.png', 'assets/images/index/project/p4.png'),
(2, 'Redrock Mining Co. “MANUB”,\nManagem International for\nMining Co. Ltd', 'Project management, engineering,\npre-commissioning and commissioning\nservices for MANAGEM water pipeline.', 'Sudan', 'February 2020', 'Groundnut are one of the most important crops of oilseeds, as they are an important source of concentrated calories needed for human and animal food. it used in many food industries, and it is one of the most important crops from which oils are extracted. \r\nWe source groundnut from trusted originators. We have a long-standing reputation as a dependable partner committed to high standards. We aim to build long-term relationships with our partners and focus on adding value to our supply chain.\r\n', 'it used in many food industries, and it is one of the most important crops from which oils are extracted.  We source groundnut from trusted originators. We have a long-standing reputation as a dependable partner committed to high standards. We aim to build long-term relationships with our partners and focus on adding value to our supply chain.', 'assets/images/index/project/pp1.png', 'assets/images/index/project/pp2.png', 'assets/images/index/project/pp3.png', '0'),
(3, 'EXICO Petroleum Services\nCo. Ltd, GPOC/2BOPCO', 'EPCC for UNITY FPF rehabilitation phase 2.', 'South Sudan', 'February 2020', 'Hibiscus, a plant with colorful flowers, has been used for centuries for decorative and medicinal purposes. It is widely used it to make extracts, teas, beverages, and supplements. Cotrade has established strong relationships with leading suppliers and originators who are pioneers in the product, having assets at the origins in addition to an extensive network of information which assists us in procuring the right product. Our objective is to deal with reliable suppliers, ensuring good quality with smooth execution.', 'Cotrade has established strong relationships with leading suppliers and originators who are pioneers in the product, having assets at the origins in addition to an extensive network of information which assists us in procuring the right product. Our objective is to deal with reliable suppliers, ensuring good quality with smooth execution.', '	\nassets/images/index/project/ppp1.png', 'assets/images/index/project/ppp2.png', '', '0'),
(4, 'ASAWER Oil & Gas, 2B OPCO\nfor Crude Oil Ltd', 'Engineering design services for\nreplacement of Obsolete Heglig CPF\nSWGR & MCCs / HPP MCCs.', 'Sudan', 'August 2022', 'Gum arabic, also sometimes called acacia gum or acacia powder, is a fibrous product made from the natural hardened sap of two types of wild Acacia trees. It is used as a stabilizer, binder, emulsifier, or a viscosity-increasing agent in confectionery, soft drinks, and dietary fiber. It is also used in non-food products such as pharmaceuticals, cosmetics, printing, ceramics, photosensitive chemicals, textiles, paper, ink, paints, and adhesives. Cotrade General Trading LLC offers a wide variety of the product with the highest quality. The company also provides detailed information on the origin and quality grade to ensure that customers are getting the best product.', ' It is used as a stabilizer, binder, emulsifier, or a viscosity-increasing agent in confectionery, soft drinks, and dietary fiber. It is also used in non-food products such as pharmaceuticals, cosmetics, printing, ceramics, photosensitive chemicals, textiles, paper, ink, paints, and adhesives. Cotrade General Trading LLC offers a wide variety of the product with the highest quality. The company also provides detailed information on the origin and quality grade to ensure that customers are getting the best product.', 'assets/images/index/project/pppp1.png', '', '', '0'),
(5, 'RAM Energy, Petro-Energy\nE&P Operating Company\n(CNPC-Sudan)', 'Provision of engineering services for HADIDA\nand SUFYAN power upgrading project.', 'Sudan', 'November 2020', 'Watermelon seeds are one of the most nutrient-dense varieties of seeds. They are a rich source of proteins, vitamins, omega 3 and omega 6 fatty acids, magnesium, zinc, copper, potassium and more. These seeds are high in calories though, so you need to mindful of your portions. One cup of roasted watermelon seeds contains roughly 600 calories.\r\nCotrade General Trading LLC offers watermelon seeds with the highest quality. The company also provides detailed information on the origin and quality grade of the watermelon seeds to ensure that customers are getting the best product.\r\n', 'Watermelon seeds are one of the most nutrient-dense varieties of seeds. They are a rich source of proteins, vitamins, omega 3 and omega 6 fatty acids, magnesium, zinc, copper, potassium and more. These seeds are high in calories though, so you need to mindful of your portions. One cup of roasted watermelon seeds contains roughly 600 calories. Cotrade General Trading LLC offers watermelon seeds with the highest quality. The company also provides detailed information on the origin and quality grade of the watermelon seeds to ensure that customers are getting the best product.', 'assets/images/index/project/pppp2.png', '', '', '0'),
(6, 'ASAWER Oil & Gas, 2B OPCO\nFor Crude Oil Ltd', 'Provision of engineering services for upgrade\nof PETCO pipeline pressure and temperature\nmonitoring system.', 'Sudan', 'September 2021', 'Frankincense is a hardened gum-like material that comes from the trunk of the Boswellia tree. It is commonly used as a fragrance in soaps, lotions, and perfumes as well as it used to help manage arthritis, asthma, and other health conditions. Cotrade General Trading LLC prudently source different classes of Frankincense from trusted partners across major exporting regions, helping us to efficiently address the rising demand and create a significant presence.', ' It is commonly used as a fragrance in soaps, lotions, and perfumes as well as it used to help manage arthritis, asthma, and other health conditions. Cotrade General Trading LLC prudently source different classes of Frankincense from trusted partners across major exporting regions, helping us to efficiently address the rising demand and create a significant presence.', 'assets/images/index/project/ppppp1.png\n', '', '', '0'),
(7, 'EXICO Petroleum Services\nCo. Ltd, GPOC/2BOPCO', 'Provision of engineering services of heater\ntreater burners replacement at BAMBOO FPF.', 'Sudan', 'March 2021', 'Senna is the fruit (pod) or leaf of the plant Senna alexandrina. It is approved in the US as a laxative for short-term treatment of constipation. We source Senna from trusted originators. We have a clear vision and direction for the impact of our business and the value we provide to source the best quality ever for our customers. ', 'We source Senna from trusted originators. We have a clear vision and direction for the impact of our business and the value we provide to source the best quality ever for our customers. ', 'assets/images/index/project/ppppp2.png', '', '', '0'),
(8, 'Star Contracting Oil & Gas\nLimited, DPOC', 'Provision of engineering services for\noutgoing feeder reconfiguration at\nsubstation of PALOUGE power plant-2.', 'South Sudan', 'September 2018', 'Soybean is an annual legume of the pea family and its edible seed. The soybean is economically the most important bean in the world, providing vegetable protein for millions of people and ingredients for hundreds of chemical products. The soybean is one of the richest and cheapest sources of protein and is a staple in the diets of people and animals in numerous parts of the world. The seed contains 17 percent oil and 63 percent meal, 50 percent of which is protein. Because soybeans contain no starch, they are a good source of protein for diabetics. \r\nCotrade General Trading offers a wide variety of the products with the highest quality and we believe in adding value to our customers across all points of the supply chain process and pride ourselves on our efficient, professional and customer centric services.\r\n', 'Soybean is an annual legume of the pea family and its edible seed. The soybean is economically the most important bean in the world, providing vegetable protein for millions of people and ingredients for hundreds of chemical products. The soybean is one of the richest and cheapest sources of protein and is a staple in the diets of people and animals in numerous parts of the world. The seed contains 17 percent oil and 63 percent meal, 50 percent of which is protein. Because soybeans contain no starch, they are a good source of protein for diabetics.  Cotrade General Trading offers a wide variety of the products with the highest quality and we believe in adding value to our customers across all points of the supply chain process and pride ourselves on our efficient, professional and customer centric services.', 'assets/images/index/project/pppppp1.png', '', '', '0'),
(9, 'Petrolines for\nCrude Oil Ltd', 'Provision of safety relief valves servicing,\ncalibration and certification at all pump\nstation, metering station and MT.', 'Sudan', 'October 2022', 'A coffee bean is a fruit from the Coffea plant and the source for coffee. The two most economically important varieties of coffee plants are the Arabica and the Robusta; approximately 60% of the coffee produced worldwide is Arabica and 40% is Robusta. Arabica beans consist of 0.8–1.4% caffeine and Robusta beans consist of 1.7–4.0% caffeine. We at Cotrade Trading offer both types from trusted partners across major exporting regions. We will ensure to get the right choice for your needs.', 'approximately 60% of the coffee produced worldwide is Arabica and 40% is Robusta. Arabica beans consist of 0.8–1.4% caffeine and Robusta beans consist of 1.7–4.0% caffeine. We at Cotrade Trading offer both types from trusted partners across major exporting regions. We will ensure to get the right choice for your needs.', 'assets/images/index/project/pppppp2.png\n', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `qhsepolicy`
--

CREATE TABLE `qhsepolicy` (
  `id` int(11) NOT NULL,
  `content` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qhsepolicy`
--

INSERT INTO `qhsepolicy` (`id`, `content`) VALUES
(1, 'We will work diligently to create and maintain working conditions that ensure safety. To this end, we will observe all applicable regulatory requirements as well as client safety requirements. In the event that there is any con?ict between these, AKTECH subcontractor safety requirements and AKTECH’s safety requirements, the more stringent will apply.'),
(2, 'All levels of management will re?ect their commitment to safety and environment by ensuring adherence to all applicable rules and requirements as an integral part of the everyday work routine.'),
(3, 'AKTECH is committed to comply with local statutory requirements, relevant safety legislation, regulation, prevention of pollution and continual improvement.'),
(4, 'Management must be vocal, visible, and vigilant in meeting this commitment from top management down to front-line managers. These responsibilities may not be delegated.'),
(5, 'Every AKTECH employee and subcontractor to AKTECH is responsible and accountable for his or her own as well as his or her co-worker(s) safety and for the environment, which the work may affect. Individual safety responsibility and accountability are a condition of employment at AKTECH.'),
(6, 'Every AKTECH employee will have access to this QHSE Policy. In addition, they and all AKTECH subcontractors will also receive training on the AKTECH Corporate QHSE Plan. Further training will take place, as applicable, to provide site-speci?c QHSE training.'),
(7, 'This Policy and the Corporate QHSE Plan are complemented by many standards, procedures and related documents which will be provided for all AKTECH employees on AKTECH’s website and in hard copy, as required.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `servicesid` int(11) NOT NULL,
  `servicesName` mediumtext NOT NULL,
  `servicedet` varchar(50000) NOT NULL,
  `servicedettitel` varchar(50) NOT NULL,
  `servicedet2` varchar(1000) NOT NULL,
  `servicedet3` varchar(1000) NOT NULL,
  `servicedettitel2` varchar(50) NOT NULL,
  `servicedettitel4` varchar(50) NOT NULL,
  `servicedet4` varchar(1000) NOT NULL,
  `servicedettitel5` varchar(1000) NOT NULL,
  `servicedet5` varchar(1000) NOT NULL,
  `servicedettitel6` varchar(50) NOT NULL,
  `servicedet6` varchar(1000) NOT NULL,
  `servicedettitel7` varchar(50) NOT NULL,
  `servicedet7` varchar(1000) NOT NULL,
  `servicedettitel8` varchar(50) NOT NULL,
  `servicedet8` varchar(1000) NOT NULL,
  `servicedettitel9` varchar(50) NOT NULL,
  `servicedet9` varchar(1000) NOT NULL,
  `servicedettitel10` varchar(50) NOT NULL,
  `servicedet10` varchar(1000) NOT NULL,
  `servicedettitel11` varchar(50) NOT NULL,
  `servicedet11` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`servicesid`, `servicesName`, `servicedet`, `servicedettitel`, `servicedet2`, `servicedet3`, `servicedettitel2`, `servicedettitel4`, `servicedet4`, `servicedettitel5`, `servicedet5`, `servicedettitel6`, `servicedet6`, `servicedettitel7`, `servicedet7`, `servicedettitel8`, `servicedet8`, `servicedettitel9`, `servicedet9`, `servicedettitel10`, `servicedet10`, `servicedettitel11`, `servicedet11`) VALUES
(1, 'Project Management', 'We offer pre-investment fully integrated engineering services (Conceptual design + Financial Analysis = Feasibility studies) to customers in several fields including Oil & Gas, Mining, Energy, Industrial/Manufacturing & Infrastructures. Our engineers are capable and equipped with the required know-how and tools (software packages; HYSYS, PIPESIM, PIPENET, PIPELINE-STUDIO, etc.) to support our client’s projects from conceptual level to detailed engineering, fabrication/construction, commissioning, and operations.', '', 'We meticulously define project scope, objectives, and deliverables to ensure alignment with client expectations and project goals. Through careful scope management, we mitigate risks, prevent scope creep, and maintain project focus throughout the execution phase.', 'Our project management teams develop detailed project schedules, identifying key milestones, dependencies, and critical paths. By proactively monitoring progress and identifying potential bottlenecks, we ensure timely completion of project phases and adherence to project timelines.', '', '', 'Cost Management: Cost control is fundamental to the success of EPC projects. Our project management team employs robust cost management techniques to accurately estimate project budgets, monitor expenditures, and identify cost-saving opportunities without compromising quality or safety standards.', '', 'Risk Management: EPC projects are inherently risky, with numerous variables and uncertainties that can impact project outcomes. Our dedicated risk management strategies identify, assess, and mitigate project risks early in the project lifecycle, safeguarding against potential disruptions and minimizing adverse effects on project performance.', '', 'Quality Management: Quality is non-negotiable in EPC projects, especially within the oil and gas sector where safety and compliance standards are paramount. Our rigorous quality management processes ensure adherence to industry regulations, standards, and best practices, delivering projects of the highest quality and reliability.', '', 'Procurement Management: Effective procurement management is critical to securing the necessary resources, materials, and services required for project execution. Our procurement experts streamline the procurement process, from vendor selection and contract negotiations to supplier performance evaluation, ensuring optimal value and timely delivery of materials and services.', '', 'Stakeholder Management: Successful EPC projects require effective communication and collaboration among diverse stakeholders, including clients, contractors, suppliers, and regulatory authorities. Our project managers foster positive relationships, facilitate transparent communication, and address stakeholder concerns to ensure alignment with project objectives and expectations.', '', 'At AKTECH, our commitment to excellence in project management is unwavering. With a proven track record of delivering successful EPC projects, we are your trusted partner in navigating the complexities of the oil and gas sector, from concept to completion.', '', '', '', ''),
(2, 'Engineering Services', 'Our Engineers have a proven track record of delivering comprehensive and competitive engineering solutions to (the Oil & Gas facilities, Mining Industry, Industrial/Manufacturing sectors, among others). The company has broad spectrum of experience ranging from conceptual and Front-End Engineering “FEED” to basic and detailed engineering reinforced by cutting edge technology/equipment, and the sophisticated software tools.', 'Conceptual Design & Feasibility Studies', 'Our conceptual design and feasibility studies lay the foundation for successful project development. Leveraging industry-leading tools and methodologies, our experts conduct thorough assessments, feasibility studies, and conceptual designs to evaluate project viability, identify potential challenges, and explore optimal solutions. this include provision of the following services/activities', '•	Conceptual Design. •	Feasibility Study. •	Process Design. •	Basic Engineering. •	PFD & P&ID Development. •	Heat and Material Balance “HMB”. •	Conceptual Layouts. •	Operation and Control Philosophy', 'Front End Engineering Design', 'Detailed Design', 'Our detailed design services encompass a wide range of disciplines, including process engineering, mechanical, piping, civil, electrical, instrumentation, and control. Through meticulous planning and adequate interdisciplinary coordination, we develop detailed engineering drawings, specifications, and calculations tailored to meet project requirements and regulatory standards.', 'Process Engineering', 'Our process engineers utilize advanced simulation software and modeling techniques to optimize process flows, enhance efficiency, and maximize production yields.', 'Process Safety', 'Our process safety experts conduct hazard assessments, safety audits, and risk analyses to ensure compliance with regulatory standards and mitigate potential hazards throughout the project lifecycle.', 'Mechanical Engineering', 'From equipment selection and sizing to mechanical analysis and design, our mechanical engineers ensure optimal performance and reliability of mechanical systems and components.', 'Piping Engineering/Pipeline Engineering', 'Our piping engineers design and layout piping systems, ensuring compliance with safety standards, material specifications, and project requirements.', 'Electrical Engineering', 'Our electrical engineers design power generation, transmission and distribution systems, cabling systems, earthing & lightning protection systems, lighting systems, protection and control systems, ensuring reliable and efficient electrical infrastructure.', 'Instrumentation and Control', 'Our instrumentation and control engineers design and implement control systems, instrumentation, and automation solutions to optimize process control and enhance operational efficiency.', '', ''),
(3, 'Turnkey EPC Solutions', 'At AKTECH, we specialize in providing turnkey EPC solutions tailored to meet the diverse needs of clients in the oil and gas, infrastructure and utilities sectors. Our comprehensive approach encompasses all stages of project development, from initial concept to final delivery, offering clients a seamless and hassle-free experience.', 'Engineering Excellence', 'Our turnkey EPC solutions begin with innovative engineering designs tailored to meet project requirements and exceed industry standards. Leveraging our multidisciplinary expertise, we develop comprehensive engineering solutions that optimize efficiency, minimize risks, and enhance project outcomes.', 'As part of our turnkey EPC solutions, we handle all aspects of procurement, from vendor selection and contract negotiation to material sourcing and logistics management. Our procurement experts leverage strategic partnerships and global networks to ensure timely delivery of quality materials and services, while adhering to budgetary constraints and project timelines.', 'Procurement Expertise', 'Construction Management', 'Our experienced construction management team oversees every aspect of the construction phase, ensuring adherence to quality, safety, and environmental standards. From site preparation to commissioning, we manage resources, schedules, and subcontractors to ensure smooth project execution and on-time delivery.', 'Integrated Project Controls', 'We employ advanced project management techniques and tools to monitor progress, manage risks, and optimize project performance. Through comprehensive project controls, we provide clients with real-time visibility into project status, budgetary compliance, and schedule adherence, enabling informed decision-making and proactive problem-solving.', 'Quality Assurance and Compliance', 'Quality is at the forefront of everything we do. Our dedicated quality assurance teams implement robust inspection, testing, and certification processes to ensure that all project deliverables meet or exceed regulatory requirements and client expectations. We are committed to delivering projects of the highest quality, safety, and reliability.', 'Client-Centric Approach', 'At AKTECH, client satisfaction is our top priority. We work closely with clients to understand their unique needs, objectives, and constraints, providing tailored solutions that deliver maximum value and exceed expectations. Our collaborative approach fosters open communication, transparency, and trust, building lasting partnerships based on mutual respect and shared success.', '', 'With our turnkey EPC solutions, clients can rest assured that their projects are in capable hands. From concept to completion, we are committed to delivering excellence, innovation, and value at every stage of the project lifecycle. Partner with AKTECH for turnkey EPC solutions that drive success and exceed expectations.', '', '', '', '', '', ''),
(4, 'Asset Integrity & Mechanical Inspection', 'At AKTECH, we understand the critical importance of maintaining the mechanical integrity of static equipment in industrial facilities. Our mechanical integrity services are designed to assess, monitor, and ensure the safe and reliable operation of pressure vessels, storage tanks, heat exchangers, and other static equipment.', 'Assessment and Evaluation', 'Our experienced engineers conduct thorough assessments and evaluations of mechanical static equipment to identify potential integrity issues, corrosion damage, and structural weaknesses. Using advanced inspection techniques and non-destructive testing methods, we assess the condition of equipment components, welds, and materials to determine compliance with regulatory standards and industry best practices.', 'We employ risk-based inspection methodologies to prioritize inspection activities based on the likelihood and consequences of equipment failure. By analyzing risk factors such as equipment age, operating conditions, and historical performance data, we develop customized inspection plans that optimize resources and mitigate potential safety and environmental risks.', 'Risk-Based Inspection (RBI)', 'Fitness-for-Service Assessment', 'Our fitness-for-service assessments evaluate the structural integrity and fitness for continued service of mechanical static equipment that may exhibit signs of degradation, damage, or deterioration. Through detailed analysis and engineering calculations, we determine the remaining useful life of equipment components and recommend appropriate repair, replacement, or mitigation measures to ensure safe and reliable operation.', 'Pipeline Integrity Management', 'In addition to static equipment, we offer comprehensive mechanical inspection services for piping, pipelines, and mechanical equipment to ensure compliance with regulatory requirements and industry standards. Our certified inspectors conduct visual inspections, dimensional measurements, and non-destructive testing to assess the condition, integrity, and performance of mechanical assets.Our pipeline integrity management services help operators identify and mitigate risks associated with pipeline corrosion, fatigue, and external damage. Through comprehensive inspections, integrity assessments, and monitoring programs, we help safeguard pipeline assets, prevent costly failures, and ensure regulatory compliance.', 'Mechanical Inspection Services', 'In addition to static equipment, we offer comprehensive mechanical inspection services for piping, pipelines, and mechanical equipment to ensure compliance with regulatory requirements and industry standards. Our certified inspectors conduct visual inspections, dimensional measurements, and non-destructive testing to assess the condition, integrity, and performance of mechanical assets. Mechanical Inspection services includes :', '', '', '', '', '', '', '', '', '', ''),
(5, 'Electrical Testing & Commissioning Services ', 'At AKTECH, we own a complete set of electrical testing and pre-commissioning equipment, including advanced testing instruments, diagnostic tools, and specialized testing facilities. Our experienced technicians and engineers conduct all testing and commissioning services utilizing industry-leading practices and standards to ensure the highest level of quality, accuracy, and safety.', 'Engineering Excellence', 'we offer comprehensive electrical testing and commissioning services designed to ensure the safe and reliable operation of electrical equipment in oil and gas facilities, industrial facilities, power plants, and infrastructure projects. Our team of skilled technicians and engineers specializes in testing, commissioning, and troubleshooting a wide range of electrical assets, including:', 'Our electrical testing and commissioning services include comprehensive testing and commissioning of transformers to verify performance, efficiency, and reliability. We conduct insulation resistance tests, transformer turns ratio tests, winding resistance tests, and insulation oil analysis to ensure optimal transformer operation and longevity.', 'Transformers Testing and Commissioning', 'MV and LV Switchgears Commissioning', 'We specialize in the commissioning of MV and LV switchgears to ensure proper functionality, coordination, and protection of electrical distribution systems. Our experts conduct insulation resistance tests, circuit breaker testing, relay testing, and functional checks to verify the performance and reliability of switchgear components.', 'Protection Relays and Instrument Transformers Testing', 'Our electrical testing services encompass comprehensive testing and calibration of protection relays, current transformers, and voltage transformers to ensure accurate and reliable protection of electrical systems against faults and abnormalities. We perform relay testing, CT ratio tests, CT saturation tests, and VT ratio tests to verify proper operation and coordination of protection schemes.', 'Rotating Equipment Testing', 'We offer motor testing services to assess the performance, efficiency, and condition of electric motors used in various industrial applications. Our motor testing includes insulation resistance testing, winding resistance testing, insulation resistance polarization index (PI) testing to identify potential issues and ensure optimal motor performance and reliability.', 'Cable Testing', 'We specialize in high voltage testing and cable testing to assess the insulation integrity and performance of electrical cables and accessories. Our testing services include high voltage testing, insulation resistance testing, core identification and continuity testing.', 'Earthing System Testing and Analysis', 'Our electrical testing services include comprehensive testing and analysis of earthing systems to ensure proper grounding and electrical safety. We conduct earth resistance testing, to verify the effectiveness of earthing systems and mitigate the risk of electrical hazards.  AKTECH Technical Services relies on the following owned assets to achieve Electrical Testing and Commissioning Services:', ' ', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `useremail`, `date`) VALUES
(1, 'sad@asd.xom', '2024-01-01 00:22:49'),
(2, 'sad@asd.xom', '2024-01-01 03:12:11'),
(3, 'ibrahim651219@gmail.com', '2024-03-01 16:10:52'),
(4, 'ibrahim651219@gmail.com', '2024-03-01 16:25:11'),
(5, '', '2024-03-01 18:03:00'),
(6, '', '2024-03-01 18:03:15'),
(7, '', '2024-03-01 18:04:50'),
(8, '', '2024-03-01 18:05:31'),
(9, '', '2024-03-01 18:21:25'),
(10, '', '2024-03-01 18:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `Testimonialname` varchar(50) NOT NULL,
  `Testimoniatestpostion` varchar(50) NOT NULL,
  `Testimonialcontent` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `Testimonialname`, `Testimoniatestpostion`, `Testimonialcontent`) VALUES
(4, '    Symash Petel', 'CEO-Aliner', 'CotradeBusicon has been around for more than adecade. It’s a trusted social media tool for businesses of all shapes and sizes.');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `content`) VALUES
(1, 'Delivering innovative EPC solutions that drive positive change and sustainable growth.'),
(2, 'Offering all required EPC services out of one hand, hence providing a single-point-of-responsibility solutions and services for the engineering, construction for the oil & gas, mining, and infrastructure fields.'),
(3, 'Consistently exceeding client expectations by delivering projects of exceptional quality.'),
(4, 'Ensuring projects are completed on time and within budget, every time.'),
(5, 'Striving for excellence in everything we do'),
(6, 'Empowering our teams to achieve their full potential and contribute to our collective success.'),
(7, 'Creating enduring value for our clients, stakeholders, and the communities in which we operate.'),
(8, 'Playing a vital role in shaping a more resilient, prosperous, and sustainable future for generations to come.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactfrom`
--
ALTER TABLE `contactfrom`
  ADD PRIMARY KEY (`mesid`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`idcontent`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qhsepolicy`
--
ALTER TABLE `qhsepolicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`servicesid`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contactfrom`
--
ALTER TABLE `contactfrom`
  MODIFY `mesid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `idcontent` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qhsepolicy`
--
ALTER TABLE `qhsepolicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `servicesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
