-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 11:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiber`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcustdb`
--

CREATE TABLE `addcustdb` (
  `ccompanyid` int(50) NOT NULL,
  `ccompany` varchar(255) NOT NULL,
  `ccontactperson` varchar(255) NOT NULL,
  `cmobile` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `serial_idnum` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcustdb`
--

INSERT INTO `addcustdb` (`ccompanyid`, `ccompany`, `ccontactperson`, `cmobile`, `cemail`, `serial_idnum`, `user_id`) VALUES
(1, 'Sephora Sdn. Bhd', 'Maylia', '014-5576789', 'maylia@sephora.net.my', 'FCN/DM/FSFMF/001072019', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `role` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin', 'admin@fibrecomm.net', '123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE `complaint_tbl` (
  `id` int(50) NOT NULL,
  `complainer_id` varchar(255) NOT NULL,
  `complainer_uname` varchar(255) NOT NULL,
  `typeofcmplaint` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `details_complaint` varchar(255) NOT NULL,
  `date_complaint` varchar(255) NOT NULL,
  `ref_num` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custdb`
--

CREATE TABLE `custdb` (
  `CCompanyID` int(50) NOT NULL,
  `CCompany` varchar(255) NOT NULL,
  `CContactPerson` varchar(255) NOT NULL,
  `CMobile` varchar(255) NOT NULL,
  `CEmail` varchar(255) NOT NULL,
  `CComment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custdb`
--

INSERT INTO `custdb` (`CCompanyID`, `CCompany`, `CContactPerson`, `CMobile`, `CEmail`, `CComment`) VALUES
(62, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(63, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(64, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(65, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(66, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(67, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(68, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'c', '0134490629', 'chan@pfizermalaysia.net.my', ''),
(69, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(70, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(71, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(72, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '0134490629', 'chan@pfizermalaysia.net.my', ''),
(73, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(74, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(75, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(76, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(77, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(78, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(79, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(80, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(81, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(82, 'Pfizer Malaysia  Sdn Bhd (HQ-KL)', 'c', '03-22816000', 'chan@pfizermalaysia.net.my', ''),
(83, 'Atsa Architect Sdn. Bhd', 'Mr. Chan', '03-22816000', 'chan@pfizermalaysia.net.my', '');

-- --------------------------------------------------------

--
-- Table structure for table `custlist`
--

CREATE TABLE `custlist` (
  `id` int(150) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `companylist` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_logs`
--

CREATE TABLE `customer_logs` (
  `id` int(11) NOT NULL,
  `logs` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_newproducts`
--

CREATE TABLE `item_newproducts` (
  `id` int(11) NOT NULL,
  `newproducts` varchar(255) NOT NULL,
  `id_newproducts` varchar(255) NOT NULL,
  `date_newcreated` varchar(255) NOT NULL,
  `date_newmodified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_products`
--

CREATE TABLE `item_products` (
  `id` int(50) NOT NULL,
  `product_services` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_products`
--

INSERT INTO `item_products` (`id`, `product_services`, `id_product`, `date_created`, `date_modified`) VALUES
(2, 'DPLC', 2, '16/5/2019', '29/6/2019'),
(3, 'IPLC', 2, '16/5/2019', '26/6/2019'),
(4, 'EPLC', 2, '16/5/2019', '26/6/2019'),
(5, 'MetroE', 2, '16/5/2019', '26/6/2019'),
(6, 'Dedicated Internet Access', 5, '16/5/2019', '26/6/2019'),
(7, 'IP Transit', 5, '15/5/2019', '26/6/2019'),
(8, 'IPVPN', 5, '15/5/2019', '26/6/2019'),
(9, 'Co-location', 3, '15/4/2019', '26/6/2019'),
(10, 'Project management & consultancy', 4, '15/4/2019', '26/6/2019'),
(11, 'Wavelength', 1, '2/4/2018', '12/6/2019');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(50) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newproduct`
--

CREATE TABLE `newproduct` (
  `idnewproducts` int(11) NOT NULL,
  `newproducts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newproduct`
--

INSERT INTO `newproduct` (`idnewproducts`, `newproducts`) VALUES
(1, 'Wavelength'),
(2, 'Bandwidth'),
(3, 'Internet Access'),
(4, 'Infrastructure'),
(5, 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `newproduct_orders`
--

CREATE TABLE `newproduct_orders` (
  `idnew` int(11) NOT NULL,
  `type_new` varchar(255) NOT NULL,
  `newservices` varchar(255) NOT NULL,
  `new_from` varchar(255) NOT NULL,
  `new_to` varchar(255) NOT NULL,
  `newsla` varchar(255) NOT NULL,
  `newcapacity` varchar(255) NOT NULL,
  `new_annualcharges` varchar(255) NOT NULL,
  `new_otc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `notes_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `customer_id`, `notes_user`) VALUES
(1, 27, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li>\r\n              </ol>\r\n            '),
(2, 26, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li><li>fsfmf</li>\r\n              </ol>\r\n            '),
(3, 28, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li><li>Fibrecomm Network</li>\r\n              </ol>\r\n            '),
(4, 34, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li><li>fibrecomm network</li>\r\n              </ol>\r\n            '),
(5, 35, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li><li>fibrecomm network sdn. bhd</li>\r\n              </ol>\r\n            '),
(6, 36, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li>\r\n              </ol>\r\n            '),
(7, 38, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li><li>fibrecomm</li>\r\n              </ol>\r\n            '),
(8, 1, '              <ol>\r\n                <li>The price quoted is valid for one (1) month from the date of this quotation.</li>\r\n                <li>The price is not inclusive of any Government Tax and Cross connect charges.</li>\r\n                <li>Payment shall be made within thirty (30) days upon issuance of invoice.</li>\r\n                <li>Early termination will incur penalty of 100% of the remaining contract value.</li>\r\n                <li>Fibrecomm reserves the right to adjust the price due to unforeseen circumstances at anytime.</li>\r\n              </ol>\r\n            ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(50) NOT NULL,
  `products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `products`) VALUES
(1, 'Wavelength'),
(2, 'Bandwidth'),
(3, 'Infrastructure'),
(4, 'Services'),
(5, 'Internet Access');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `services_products` varchar(255) NOT NULL,
  `from_to` varchar(255) NOT NULL,
  `to_from` varchar(255) NOT NULL,
  `sla` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `annual_charges` varchar(255) NOT NULL,
  `otcharges` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `type`, `services_products`, `from_to`, `to_from`, `sla`, `capacity`, `annual_charges`, `otcharges`, `customer_id`) VALUES
(1, 'Wavelength', 'Wavelength', 'sg.besi', 'putra', '2%', '10GB', '100', '2000', 29),
(8, 'Services', 'Project management & consultancy', 'Shah Alam', 'Putrajaya', '98%', '10,000 GB', '400,000', '280000000', 0),
(9, 'Infrastructure', 'Co-location', 'Sungai Besi', 'putra', '2%', '10,000 GB', '400,000', '280000000', 0),
(10, 'Infrastructure', 'Co-location', 'Sungai Besi', 'putra', '2%', '10,000 GB', '400,000', '280000000', 0),
(11, 'Infrastructure', 'Co-location', 'Sungai Besi', 'putra', '2%', '10,000 GB', '400,000', '280000000', 0),
(12, 'Bandwidth', 'MetroE', 'Sungai Besi', 'putra', '98.00', '10,000 GB', '400,000', '280000000', 27),
(13, 'Internet Access', 'IPVPN', 'Sungai Besi', 'Putrajaya', '98.00', '10,000 GB', '400,000', '2000', 27),
(14, 'Bandwidth', 'MetroE', 'Shah Alam', 'Putrajaya', '78%', '10,000 GB', '400,000', '280000000', 28),
(15, 'Bandwidth', 'MetroE', 'Shah Alam', 'Seremban', '78%', '2', '400,000', '280000000', 26),
(16, 'Infrastructure', 'Co-location', 'Shah Alam', 'Putrajaya', '78%', '10GB', 'RM 10k (per month)', '280000000', 26),
(18, 'Bandwidth', 'MetroE', 'Shah Alam', 'Sg. Petani', '98%', '10GB', '400,000', '280000000', 34),
(19, 'Internet Access', 'Dedicated Internet Access', 'Shah Alam', 'Seremban', '78%', '10GB', '400,000', '2000', 35),
(20, 'Internet Access', 'Dedicated Internet Access', 'Shah Alam', 'Seremban', '78%', '10GB', '400,000', '2000', 36),
(21, 'Infrastructure', 'Co-location', 'Sungai Besi', 'Seremban', '80%', '10GB', 'RM 10k (per month)', '280000000', 37),
(22, 'Bandwidth', 'EPLC', 'Shah Alam', 'Putrajaya', '98%', '20GB', '400,000', '4, 000, 000', 38),
(23, 'Infrastructure', 'Co-location', 'Sungai Besi', 'Putrajaya', '80%', '20GB', '100', '4, 000, 000', 38),
(24, 'Bandwidth', 'EPLC', 'Shah Alam', 'Putrajaya', '78%', '20GB', '400,000', '280000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `Location1` varchar(255) NOT NULL,
  `Location2` varchar(255) NOT NULL,
  `sla` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `annualcharge` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `services`, `Location1`, `Location2`, `sla`, `capacity`, `annualcharge`, `total`) VALUES
(32, '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `staffid` varchar(50) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `initialname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `staffid`, `role`, `name`, `initialname`, `username`, `email`, `division`, `mobile`, `password`) VALUES
(100, 'A001', 'admin', 'JAAFAR BIN ISMAIL', 'JI', 'JaafarIsmail', 'jaafar@fibrecomm.net.my', 'Admin', '013-2343456', '123'),
(101, 'A002', 'admin', 'NAIM BIN ABDULLAH', 'NA', 'NaimDollah', 'Naim@fibrecomm.net.my', 'Admin', '011-23424567', '123'),
(1011, 'A103', 'admin', 'NABILAH BINTI HJ FUAD', 'NF', 'BellaFuad', 'Nabilah@fibrecomm.net.my', 'Admin', '017-4327862', '123'),
(1149, 'T149', 'staff', 'FARAH SYASYA FAKHIRA BINTI MOHD FATHI', 'FSFMF', 'FarahSyasya', 'farah.fathi@fibrecomm.net.my', 'TRAINEE', '013 4490629', 'FSF001'),
(8412, 'E008', 'staff', 'MAZLINA BINTI MOHD SHRIF', 'MMS', 'MazlinaShrif', 'mazlina@fibrecomm.net.my', 'HEAD - SALES & DATA MANAGEMENT', '019 2772778', 'MS001'),
(8414, 'E162', 'staff', 'DESMOND CHAI YI CHAN', 'DCYC', 'Desmond.C', 'desmond@fibrecomm.net.my', 'HEAD - SALES & CUSTOMER EXPERIENCE', '012 8959922', 'DC001'),
(8415, 'S022', 'staff', 'AZEEM BIN SULAIMAN', 'AS', 'AzeemSulaiman', 'azeem@fibrecom.net.my', 'CHIEF MARKETING OFFICER', '019 3197162', 'AS001'),
(8416, 'S103', 'staff', 'WIDYAWATI BINTI MOHD NOR', 'WMN', 'WidyawatiMNor', 'widyawati@fibrecomm.net', 'ACCOUNT MANAGER - RESELLER & SME SERVICES', '019 2160068', 'WMN001'),
(8417, 'E261', 'staff', 'DHANESSWARAN A/L R.NAGARAJAN', 'DRN', 'Dhanesswaran', 'dhanesswaran.nagarajan@fibrecomm.net.my', 'ACCOUNT MANAGER - STRATEGIC SALES', '017 4728656', 'DN001'),
(8418, 'E259', 'staff', 'AINUR AFIAH BINTI BURHANORDIN', 'AAB', 'AinurAfiah', 'ainurafiah.burhanordin@fibrecomm.net.my', 'ACCOUNT MANAGER - TELCO SERVICES', '017 4399294', 'AA001'),
(8487, 'E054', 'staff', 'ZARITA BINTI ZAINORIN', 'ZZ', 'ZaritaZainorin', 'zarita@fibrecomm.net.my', 'EXECUTIVE - MARKETING COMMUNICATION', '019 2132375', 'JJ001'),
(8535, 'S025', 'staff', 'MOHD FAKHRURRAZI BIN IBRAHIM', 'MFI', 'FakhrurraziIbrahim', 'fakhrurrazi@fibrecomm.net.my', 'MANAGER - STRATEGIC PROJECTS', '019 2740808', 'FI001'),
(8547, 'S112', 'staff', 'JAAFAR BIN ISMAIL', 'JI', 'JaafarIsmail', 'jaafar@fibrecomm.net.my', 'HEAD - SALES & BUSINESS EXPERIENCE', '019 2777233', 'JI001'),
(8549, 'S108', 'staff', 'MOHD DZULKIFLI BIN SUHAIMI', 'MDS', 'DzulkifliSuhaimi', 'dzulkifli@fibrecomm.net.my', 'ACCOUNT MANAGER - REGIONAL SALES 1', '019 2277332', 'DS001'),
(8586, 'E251', 'staff', 'MOHAMMAD FIRHAIDHIR EMEIR BIN SHAHARUDDIN', 'MFES', 'EmeirShaharuddin', 'emeir.shah@fibrecomm.net.my', 'ACCOUNT MANAGER - REGIONAL SALES 2', '014 8196988', 'ES001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcustdb`
--
ALTER TABLE `addcustdb`
  ADD PRIMARY KEY (`ccompanyid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custdb`
--
ALTER TABLE `custdb`
  ADD PRIMARY KEY (`CCompanyID`);

--
-- Indexes for table `custlist`
--
ALTER TABLE `custlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_logs`
--
ALTER TABLE `customer_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_newproducts`
--
ALTER TABLE `item_newproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_products`
--
ALTER TABLE `item_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newproduct`
--
ALTER TABLE `newproduct`
  ADD PRIMARY KEY (`idnewproducts`);

--
-- Indexes for table `newproduct_orders`
--
ALTER TABLE `newproduct_orders`
  ADD PRIMARY KEY (`idnew`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcustdb`
--
ALTER TABLE `addcustdb`
  MODIFY `ccompanyid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custdb`
--
ALTER TABLE `custdb`
  MODIFY `CCompanyID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `customer_logs`
--
ALTER TABLE `customer_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_newproducts`
--
ALTER TABLE `item_newproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_products`
--
ALTER TABLE `item_products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newproduct`
--
ALTER TABLE `newproduct`
  MODIFY `idnewproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newproduct_orders`
--
ALTER TABLE `newproduct_orders`
  MODIFY `idnew` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8587;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
