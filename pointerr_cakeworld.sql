-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2022 at 04:02 AM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pointerr_cakeworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `userid` varchar(50) NOT NULL,
  `productid` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `orderid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `productid` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `delivary_address` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderid`, `userid`, `productid`, `weight`, `quantity`, `delivary_address`, `status`, `date_time`) VALUES
('order000000000', 'user1520123451234', 'cake1500063002421', '1', '3', 'POS', 'Completed', '2018-03-16 06:14:53'),
('order123453565400', 'user1520123452802', 'cake1521064614414', '3', '1', 'xyz', 'Completed', '2018-03-16 06:15:04'),
('order123453565466', 'user1520123451234', 'cake1521064614414', '2', '3', 'ABC', 'Completed', '2018-03-16 06:15:13'),
('order1521167780904', 'user1520978742802', 'cake1500063002421', '2', '3', 'asia', 'Completed', '2018-03-16 17:31:27'),
('order1521167780904', 'user1520978742802', 'cake1521063770000', '1', '1', 'asia', 'Completed', '2018-03-16 17:31:27'),
('order1521167780904', 'user1520978742802', 'cake1521064614414', '1', '2', 'asia', 'Completed', '2018-03-16 17:31:27'),
('order1521202487617', 'user1521200799053', 'cake1500063002421', '1', '1', 'Shree Shree Sharma, Near Sharma Sharma , Jaipur , 3030300', 'Pending', '2018-03-16 12:14:47'),
('order1521215907772', 'user1521200799053', 'cake1521063770000', '1', '1', 'Delhi', 'Pending', '2018-03-16 15:58:27'),
('order1521216041651', 'user1521200799053', 'cake1521063770000', '1/2', '1', '', 'Pending', '2018-03-16 16:00:41'),
('order1521216042558', 'user1520978742802', 'cake1521064614414', '2', '5', 'India', 'Pending', '2018-03-16 16:00:42'),
('order1521221352796', 'user1520978742802', 'cake1500063002421', '1', '3', 'India', 'Pending', '2018-03-16 17:29:12'),
('order1521231039998', 'user1521225710425', 'cake1500063002421', '1', '3', 'Jaipur', 'Completed', '2018-03-16 20:12:04'),
('order1521231039998', 'user1521225710425', 'cake1521063770000', '1/2', '4', 'Jaipur', 'Completed', '2018-03-16 20:12:04'),
('order1521231039998', 'user1521225710425', 'cake1521064614414', '1', '1', 'Jaipur', 'Completed', '2018-03-16 20:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` varchar(50) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `type`, `image`, `description`) VALUES
('cake1500063002421', 'Strawberry Cheese Cake', 'Cheese Cakes', 'product5.jpg', 'Creamy strawberry cheese cake is perfect for any special occasion. Send a juicy and delicious treat to your friends and family with 1kg of cake from ferns n petals. Treat them with a delicious dessert and leave them with a sweet mouth and beautiful memories.'),
('cake1521063770000', 'Blue Pink Fantasy Cupcakes', 'Diabetes Cakes', 'product1.jpg', 'The Blue & Pink Fantasy Cupcake is the specialty of Ferns N Petals. This cupcake can make you go grazy in every bite. You can order this cupcake for you or for others in various flavors like Vanilla, Chocolate, Coffee and Strawberry.\r\nPlease note: The default flavour is Chocolate. In case if you want some other flavour, please mail to partner@fnp.com within half an hour of placing your order. Do remember to mention your Order Number in the subject line.'),
('cake1521064614414', 'Chocolate Cupcake', 'Eggless Cakes', 'product4.jpg', 'The Blue & Pink Fantasy Cupcake is the specialty of Ferns N Petals. This cupcake can make you go grazy in every bite. You can order this cupcake for you or for others in various flavors like Vanilla, Chocolate, Coffee and Strawberry.\r\nPlease note: The default flavour is Chocolate. In case if you want some other flavour, please mail to partner@fnp.com within half an hour of placing your order. Do remember to mention your Order Number in the subject line.'),
('cake1521191141911', 'New cake', 'Cakes', '5aab88e5de74f9.19597631.png', 'jcJNKJSNLKKX');

-- --------------------------------------------------------

--
-- Table structure for table `product_price_weight`
--

CREATE TABLE `product_price_weight` (
  `productid` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_price_weight`
--

INSERT INTO `product_price_weight` (`productid`, `weight`, `price`) VALUES
('cake1500063002421', '1', 2299),
('cake1500063002421', '2', 3399),
('cake1521063770000', '1', 1099),
('cake1521063770000', '1/2', 699),
('cake1521063770000', '2', 1499),
('cake1521064614414', '1', 600),
('cake1521064614414', '1/2', 300),
('cake1521064614414', '2', 900),
('cake1521191141911', '1', 20),
('cake1521191141911', '1/2', 10),
('cake1521191141911', '2', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `password`, `email`, `phone`, `discount`) VALUES
('user1520123451234', 'Muktadir Anzan', '1234', 'anzan@gmail.com', '12345', 500),
('user1520123452802', 'ZAHID HOSSAIN', '1234', 'zahid@gmail.com', '12345', 0),
('user1520978742802', 'SAIF AHMED ANIK', '1234', 'saif.ahmed.anik.0@gmail.com', '01674339903', 100),
('user1521194764681', 'Zahid', '12345', 'zahidhossain3742@gmail.com', '01670898699', 0),
('user1521200799053', 'Richie Rich', 'qwer123', 'sa779181@gmail.com', '8560900986', 200),
('user1521201783360', 'zahid', '12345', 'zahid@gmail.com', '12345', 0),
('user1521225710425', 'Anila Akter', '12345', 'anilaakter2016@gmail.com', '1234578946', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`userid`,`productid`,`weight`),
  ADD KEY `userid` (`userid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderid`,`userid`,`productid`),
  ADD KEY `userid` (`userid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `product_price_weight`
--
ALTER TABLE `product_price_weight`
  ADD PRIMARY KEY (`productid`,`weight`,`price`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD CONSTRAINT `addtocart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addtocart_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordertable_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_price_weight`
--
ALTER TABLE `product_price_weight`
  ADD CONSTRAINT `product_price_weight_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
