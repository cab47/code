-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 11:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_mngt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cab_info`
--

CREATE TABLE `cab_info` (
  `Cab_No` varchar(20) NOT NULL,
  `Cab_Type` varchar(20) NOT NULL,
  `No_Seats` int(11) NOT NULL,
  `Seats_Occ` int(11) NOT NULL,
  `D_ID` int(6) NOT NULL,
  `V_ID` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cab_info`
--

INSERT INTO `cab_info` (`Cab_No`, `Cab_Type`, `No_Seats`, `Seats_Occ`, `D_ID`, `V_ID`) VALUES
('DL11AF9013', 'Scheduled', 4, 3, 1, 'V001'),
('DL12AF9012', 'Scheduled', 7, 5, 2, 'V001'),
('DL13AF9013', 'UnScheduled', 4, 0, 3, 'V004'),
('DL14AF9013', 'Scheduled', 7, 3, 4, 'V001'),
('DL11AF9016', 'UnScheduled', 7, 0, 5, 'V003'),
('DL11FF9013', 'Scheduled', 7, 0, 6, 'V002'),
('DL11ZF9013', 'Scheduled', 4, 0, 7, 'V002');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `D_ID` int(11) NOT NULL,
  `D_Name` varchar(20) NOT NULL,
  `D_Contact` int(10) NOT NULL,
  `D_Location` varchar(50) NOT NULL,
  `V_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Quick_ID` varchar(20) NOT NULL,
  `E_Name` varchar(20) NOT NULL,
  `E_Address` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `E_Mail` varchar(50) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `E_Gender` char(50) NOT NULL DEFAULT 'M',
  `E_Contact` varchar(10) NOT NULL,
  `Status` char(1) NOT NULL DEFAULT 'P',
  `Cab_Fact` varchar(100) NOT NULL DEFAULT 'N',
  `E_Shift` varchar(6) NOT NULL DEFAULT '10-7PM',
  `M_ID` varchar(100) NOT NULL,
  `O_ID` varchar(10) NOT NULL,
  `Cab_ID` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Quick_ID`, `E_Name`, `E_Address`, `Pincode`, `E_Mail`, `Dept`, `E_Gender`, `E_Contact`, `Status`, `Cab_Fact`, `E_Shift`, `M_ID`, `O_ID`, `Cab_ID`) VALUES
('AG250444', 'aditya garg', 'shivaji nagar Gurugram', 122001, 'gargaditya0@gmail.com', 'cpq', 'Male', '8527435201', '', 'Y', '10-7PM', 'tarun jain', '', ''),
('NB250260', 'Nikita Bajaj', '  Ashok Vihar Delhi', 110052, 'nikita.b@gmail.com', 'Data Analytics', 'Female', '9874657478', '', 'Y', '10-7PM', 'Parag', '', ''),
('PA250144', 'Prashant Aggarwal', 'D Block, Sangam Vihar Delhi', 110080, 'prashant.1223aggarwal@gmail.com', 'Incident Management', 'Male', '9897638282', '', 'Y', '10-7PM', 'Peeyush Raghav', '', ''),
('NA250134', 'Nitin Duggal', '3/49  Ramesh Nagar Delhi', 110015, 'nitinduggal93@gmail.com', 'Incident Management', 'Male', '8285560677', '', 'Y', '10-7PM', 'Pankaj Arora', '', ''),
('AA250677', 'Akansha Aggarwal', 'A Block Shalimar Garden, Extn-2 Sahibabad Delhi', 201005, 'akansha9305@gmail.com', 'Portals', 'Female', '7503398033', '', 'Y', '10-7PM', 'Sanjeev Singh', '', ''),
('RC250342', 'Rohit Chandiok', 'BA-282 Tagore Garden New Delhi Delhi', 110027, 'rohit.chandiok@gmail.com', 'Operations Sales', 'Male', '9911142782', '', 'Y', '10-7PM', 'Mr. Rupesh Kumar Arora', '', ''),
('SK250842', 'Sushant ', '157B Street No.5 Najafgarh Delhi', 110043, 'sushant@gmail.com', 'PSA', 'Male', '1242332578', '', 'Y', '10-7PM', 'Rahul Khera', '', ''),
('ST250765', 'Sandeep Thattil', '45  Dilshad Garden Delhi', 110028, 'sandeepthattil@gmail.com', 'Jai mata Di', 'Male', '7634521983', '', 'Y', '10-7PM', 'jai mata di', '', ''),
('NM250290', 'Neeraj Malik', 'D Block, Surya Kunj colony Najafgarh Delhi', 110043, 'neerajmalik681@gmail.com', 'Incident Management', 'Male', '7503573443', '', 'Y', '10-7PM', 'Mr. Yashwant birla', '', ''),
('G5250332', 'Govind Sharma', 'C-109 Block - C Sector 39 Noida', 201301, 'govindsharma00709@gmail.com', 'Order Management', 'Male', '9717661096', '', 'Y', '7-4PM', 'Mr. Som Dutt Tiwari', '', ''),
('ZQ250015', 'Zeba Qureshi', 'J-3/31, A- top floor Khirki Extn Malviya Nagar Delhi', 110017, 'zeba.qureshi0786@gmail.com', 'Managed Services', 'Female', '9711963730', '', 'Y', '10-7PM', 'Dhiraj Chaliya', '', ''),
('GS250331', 'Gulshan Sharma', 'C-367 Shalimar Garden Extension -2 Sahibabad Delhi', 201005, 'gsharma52@gmail.com', 'Middleware', 'Male', '9650318932', '', 'Y', '10-7PM', 'Mukesh', '', ''),
('dp250322', 'deepak  pandey', 'l/389 11 mahipalpur Delhi', 110037, 'wedtorque@gmail.com', 'sales and marketing', 'Male', '7838349893', '', 'Y', '7-4PM', 'harjan singh', '', ''),
('US250051', 'Upmanyu Sharma', '7D, Century Apar.  Sec-100 Noida', 201304, 'upmayu@gmail.com', 'Information Security', 'Male', '9650327646', '', 'Y', '10-7PM', 'Heema Gupta', '', ''),
('AS251124', 'Ankita Singla', 'A-77  Shastri Nagar Delhi', 110052, 'ankita.singla7@gmail.com', 'Incident Management', 'Female', '8447976534', '', 'Y', '10-7PM', 'Peeyush Raghav', '', ''),
('YK239820', 'Yogesh Kumar', 'H-763 Strret No.5 Pandav nagar Delhi', 110092, 'yogesh@gmail.com', 'Product Engineering', 'Male', '3981263654', '', 'Y', '10-7PM', 'Nikhil Nitesh', '', ''),
('UJ250007', 'Urvashi Jain', '152A Pocket-B  Mayur Vihar phase-2 Delhi', 110091, 'urvashijain6@gmail.com', 'Information Security', 'Female', '9873315802', '', 'Y', '10-7PM', 'Hema Gupta', '', ''),
('nj250100', 'Nancy Jain', 'A-41 3 New krishna nagar Delhi', 110051, 'jain.nancy94@gmail.com', 'Analytics and Reporting', 'Female', '9711450983', '', 'Y', '10-7PM', 'Parag Sikka', '', ''),
('nm250123', 'Nyanop Moithak', 'lohit 210 JNU Campus South Delhi Delhi', 110067, 'nyanop.moithak@gmail.com', 'Products and engineering', 'Female', '9560929747', '', 'Y', '10-7PM', 'Nikhil Nitesh', '', ''),
('RM250531', 'Revti Mahajan', '1/9031 street no-1 Shahdara Delhi', 110032, 'revti95@gmail.com', 'Managed services', 'Female', '9910503868', '', 'Y', '10-7PM', 'Madhu Sudan kumar', '', ''),
('kd185057', 'Kapil deo', '5444  Faridabad Delhi', 12345, 'kd185057@ncr.com', 'Services', 'Male', '9953714275', '', 'Y', '12-9PM', 'Navneet Gupta', '', ''),
('SK250841', 'Shobhit KP', 'B-370  mohan garden, uttam nagar Delhi', 110059, 'shobhit.sreejith@gmail.com', 'logistics and opprations', 'Male', '9711486760', '', 'Y', '10-7PM', 'Neeraj neema', '', ''),
('bc250212', 'Bharti Chauhan', 'w99-a  patel nagar Delhi', 110008, 'bhartichauhan@gmail.com', 'Technology and infrastructure', 'Female', '9717538595', '', 'Y', '7-4PM', 'Pradeep Saroha', '', ''),
('BM250294', 'Bindu Mudgil', '202 3 suraksha appt,plot no-335/336,mahavir enclave,palam-dabri road  Delhi', 110045, 'mudgil.bindu@gmail.com', 'Operations', 'Female', '8826480991', '', 'Y', '10-7PM', 'Harpreet Bhutani', '', ''),
('YG250096', 'Yukti  gupta', 'x/1184 Rajgarh Colony Geeta Colony Delhi', 110031, 'yuktigupta802@gmail.com', 'configure price quote', 'Female', '9650555125', '', 'Y', '10-7PM', 'tarun jain', '', ''),
('pk250285', 'Prateeksha Kharal', 'c-404  paschim Vihar(west) Delhi', 110063, 'pratee.613@gmail.com', 'Sales and Compensation', 'Female', '8802230376', '', 'Y', '10-7PM', 'Sakshi Anand', '', ''),
('sa250234', 'Shubham arora', '252/521 4 shantinagar Gurugram', 122001, 'shubhamarora.er@gmail.com', 'Field Operations', 'Male', '7073837500', '', 'Y', '10-7PM', 'Rajeev Kumar Dave', '', ''),
('MK250597', 'Manindra Nath Kole', 'L49A Mahavir Enclave South West Delhi', 110045, 'manindrankole@gmail.com', 'Middleware', 'Male', '7827957354', '', 'Y', '10-7PM', 'Srinivas Karnati', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `Quick_ID` int(6) NOT NULL,
  `I_Type` varchar(15) NOT NULL,
  `Pu_Time` varchar(6) NOT NULL,
  `Pu_Loc` varchar(50) NOT NULL,
  `Dp_Loc` varchar(50) NOT NULL,
  `New_Shift` varchar(6) NOT NULL DEFAULT '10-7PM',
  `I_Date` date NOT NULL,
  `I_Time` varchar(6) NOT NULL,
  `From_Date` date NOT NULL,
  `To_Date` date NOT NULL,
  `Reason` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lat_long`
--

CREATE TABLE `lat_long` (
  `Lat` double NOT NULL,
  `Longi` double NOT NULL,
  `Quick_ID` int(6) NOT NULL,
  `Cluster` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `V_ID` varchar(6) NOT NULL,
  `V_Name` varchar(20) NOT NULL,
  `V_Contact` varchar(10) NOT NULL,
  `V_Loc` varchar(50) NOT NULL,
  `No_of_Cabs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`V_ID`, `V_Name`, `V_Contact`, `V_Loc`, `No_of_Cabs`) VALUES
('V001', 'vendor1', '9876543210', 'Gurugram', 15),
('V002', 'vendor2', '8765430987', 'delhi', 16),
('V003', 'vendor3', '7890654321', 'noida', 16),
('V004', 'vendor4', '8790654327', 'Ghaziabad', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cab_info`
--
ALTER TABLE `cab_info`
  ADD PRIMARY KEY (`Cab_No`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`D_ID`),
  ADD UNIQUE KEY `D_Contact` (`D_Contact`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Quick_ID`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`Quick_ID`,`I_Type`);

--
-- Indexes for table `lat_long`
--
ALTER TABLE `lat_long`
  ADD PRIMARY KEY (`Longi`,`Lat`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`V_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
