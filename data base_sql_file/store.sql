-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 05:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `admin_details` ()   BEGIN
SELECT *FROM admin;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `customer_details` ()   BEGIN
SELECT * FROM customer;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dealing_shop_details` ()   BEGIN
SELECT *FROM dealings_shop;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_products` (IN `id` VARCHAR(5))   BEGIN
DELETE FROM products 
WHERE QR_id=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `edit_products` (IN `id` VARCHAR(5), IN `am` INT(12))   BEGIN
UPDATE products as i
SET 
i.Price=am WHERE i.QR_id=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `edit_products_row` (IN `pid` VARCHAR(5))   BEGIN
SELECT * FROM products
WHERE QR_id  =pid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `empoyee_details` ()   BEGIN
SELECT *FROM employee;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_admin` (IN `id` VARCHAR(5), IN `p` VARCHAR(12))   BEGIN
insert into admin (Id_admin , Passwords)
values (id, p ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_customer` (IN `cid` VARCHAR(5), IN `na` VARCHAR(5), IN `pn` INT(10), IN `am` INT(50), IN `eid` VARCHAR(5), IN `qid` VARCHAR(5))   BEGIN
insert into customer (customer_id, Name, P_number,buy_total_amunt,employee_id,QR_id) values (cid, na, pn, am, eid, qid ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_dealing` (IN `sid` VARCHAR(5), IN `qid` VARCHAR(5), IN `did` VARCHAR(5), IN `pn` INT(10), IN `sn` VARCHAR(15))   BEGIN
insert into dealings_shop (Shop_id ,QR_id,dealer_id ,p_number,shop_name)
values (sid, qid, did, pn, sn ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_employee` (IN `ssn` VARCHAR(5), IN `fn` VARCHAR(12), IN `ln` VARCHAR(15), IN `sa` VARCHAR(15), IN `pn` INT(10), IN `ad` VARCHAR(15))   BEGIN
insert into employee (Ssn, FirstName,LastName,Salary,P_number,Address)
values (ssn, fn, ln, sa, pn, ad ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product` (IN `qid` VARCHAR(5), IN `dna` VARCHAR(15), IN `tid` VARCHAR(5), IN `tna` VARCHAR(15), IN `pr` INT(15))   BEGIN
INSERT INTO products(QR_id ,DressName,Tailor_id,Tailor_Name,Price) VALUES(qid,dna,tid,tna,pr);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_sales` (IN `qid` VARCHAR(5), IN `bid` VARCHAR(5), IN `sid` VARCHAR(5), IN `pr` INT(50), IN `d` DATE)   BEGIN
insert into sales_history (QR_id , buyer_id, Seller_id,	price,date) values (qid,bid,sid,pr,d) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Login` (IN `id` VARCHAR(5), IN `p` VARCHAR(12))   BEGIN
SELECT * FROM admin
WHERE id = Id_admin AND p =Passwords;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `product_details` ()   BEGIN
SELECT *FROM products;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `s_history` ()   BEGIN
SELECT * FROM sales_history;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` varchar(5) NOT NULL,
  `Passwords` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `Passwords`) VALUES
('EA003', '2021'),
('EA004', '1998');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `P_number` int(10) NOT NULL,
  `buy_total_amunt` int(50) NOT NULL,
  `employee_id` varchar(5) NOT NULL,
  `QR_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `Name`, `P_number`, `buy_total_amunt`, `employee_id`, `QR_id`) VALUES
('CA001', 'tharu', 774536, 25000, 'EA007', 'M003C'),
('CA002', 'vithu', 774536, 40000, 'EA001', 'M003C');

-- --------------------------------------------------------

--
-- Table structure for table `dealings_shop`
--

CREATE TABLE `dealings_shop` (
  `Shop_id` varchar(5) NOT NULL,
  `QR_id` varchar(5) NOT NULL,
  `dealer_id` varchar(5) NOT NULL,
  `p_number` int(10) NOT NULL,
  `shop_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealings_shop`
--

INSERT INTO `dealings_shop` (`Shop_id`, `QR_id`, `dealer_id`, `p_number`, `shop_name`) VALUES
('EA003', 'M004C', 'EA003', 777123456, 'bamini'),
('SA001', 'M003C', 'EA004', 774536, 'bamini'),
('SA003', 'M005C', 'EA003', 774536, 'machchi');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Ssn` varchar(5) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `P_number` int(10) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Ssn`, `FirstName`, `LastName`, `Salary`, `P_number`, `Address`) VALUES
('EA001', 'MATHU', 'shan', 30000, 773393, 'VAVUNIYA'),
('EA002', 'GOWSI', 'KAN', 15000, 774536, 'trico'),
('EA003', 'CROOS', 'THANSTAN', 22000, 7734256, 'trico'),
('EA004', 'issath', 'isaa', 23000, 77453647, 'trinco'),
('EA005', 'vithu', 'shan', 13000, 7743647, 'vavuniya'),
('EA006', 'kishi', 'kan', 25000, 7734526, 'mullaithivu'),
('EA007', 'sha', 'karan', 25000, 7734256, 'mullaithivu'),
('EA008', 'subas', 'har', 15000, 77436547, 'trinco'),
('EA009', 'rishi', 'kashan', 18000, 77436247, 'trinco'),
('EA010', 'banu', 'sow', 28000, 774362417, 'trinco'),
('EA011', 'tharu', '0775464', 25000, 775464, 'jaffna');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `QR_id` varchar(5) NOT NULL,
  `DressName` varchar(10) NOT NULL,
  `Tailor_id` varchar(5) NOT NULL,
  `Tailor_Name` varchar(10) DEFAULT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`QR_id`, `DressName`, `Tailor_id`, `Tailor_Name`, `Price`) VALUES
('M009C', 'T-shirt', 'EA007', 'sha', 5000),
('M010C', 'T-shirt', 'EA007', 'vithu', 5000),
('M011C', 'T-shirt', 'EA003', 'mathu', 2100),
('M012C', 'T-shirt', 'EA005', 'jathu', 3000),
('M013C', 'T-shirt', 'EA007', 'vithu', 2100),
('M014C', 'jeans', 'EA003', 'mathu', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `sales_history`
--

CREATE TABLE `sales_history` (
  `QR_id` varchar(5) NOT NULL,
  `buyer_id` varchar(5) NOT NULL,
  `Seller_id` varchar(5) NOT NULL,
  `price` int(50) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_history`
--

INSERT INTO `sales_history` (`QR_id`, `buyer_id`, `Seller_id`, `price`, `date`) VALUES
('M001C', 'CA001', 'EA003', 3600, '2022-11-16'),
('M002C', 'CA003', 'EA003', 5000, '2022-11-14'),
('M003C', 'CA001', 'EA003', 3600, '2022-11-06'),
('M004C', 'CA003', 'EA005', 5000, '2022-11-01'),
('M005C', 'CA001', 'EA004', 3600, '2022-11-01'),
('M006C', 'CA001', 'EA001', 2100, '2022-11-12'),
('M007C', 'CA003', 'EA005', 5000, '2022-11-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `QR_id` (`QR_id`);

--
-- Indexes for table `dealings_shop`
--
ALTER TABLE `dealings_shop`
  ADD PRIMARY KEY (`Shop_id`),
  ADD KEY `dealings_shop_ibfk_3` (`QR_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Ssn`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`QR_id`),
  ADD KEY `Tailor_id` (`Tailor_id`);

--
-- Indexes for table `sales_history`
--
ALTER TABLE `sales_history`
  ADD PRIMARY KEY (`QR_id`),
  ADD KEY `Seller_id` (`Seller_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `employee` (`Ssn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`QR_id`) REFERENCES `sales_history` (`QR_id`);

--
-- Constraints for table `dealings_shop`
--
ALTER TABLE `dealings_shop`
  ADD CONSTRAINT `dealings_shop_ibfk_3` FOREIGN KEY (`QR_id`) REFERENCES `sales_history` (`QR_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Tailor_id`) REFERENCES `employee` (`Ssn`);

--
-- Constraints for table `sales_history`
--
ALTER TABLE `sales_history`
  ADD CONSTRAINT `sales_history_ibfk_2` FOREIGN KEY (`Seller_id`) REFERENCES `employee` (`Ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
