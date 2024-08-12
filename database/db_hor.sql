-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 04:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`, `gmail`) VALUES
(1, 'Razel', 'Francisco', 'Vitalicio', 'Bigaa,Virac,Catandianes', '09876543212', 'razelfvitalicio@gmail.com'),
(2, 'Razel', 'Francisco', 'Vitalicio', 'Bigaa,Virac,Catandianes', '09876543212', 'razelfvitalicio@gmail.com'),
(3, 'Razel', 'Francisco', 'Vitalicio', 'Bigaa,Virac,Catandianes', '09876543212', 'razelfvitalicio@gmail.com'),
(4, 'Razel', 'Francisco', 'vitalicio', 'Bigaa,Virac,Catandianes', '09876543212', 'razelfvitalicio@gmail.com'),
(5, 'razel', 'Francisco', 'Vitalicio', 'Bigaa,Virac,Catandianes', '09876543212', 'razelfvitalicio@gmail.com'),
(6, 'bhnj', 'vtbyhn', 'tvybun', 'tgyh', '09876543211', 'kyletomon.914@gmail.com'),
(7, 'hjnk ', 'ygvbuhnj', 'yvgubhn', 'vtybhnj', '0876543211', 'kyletomon.914@gmail.com'),
(8, 'Razel', 'Francisco', 'Chavez', 'Bigaa,Virac,Catandianes', '09876543212', 'razelfvitalicio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `available` int(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`, `available`, `description`) VALUES
(1, 'Standard', '2000', '1.jpg', 1, 'Welcome to our cozy Standard Room. This room type provides a comfortable and welcoming space for your stay. The room features a comfortable queen-size bed, a small seating area with a table and chairs, and a private bathroom with a shower. You\'ll also find essential amenities like a flat-screen TV, a mini-fridge, a coffee maker, and complimentary Wi-Fi access. The decor is warm and inviting, making it a perfect retreat after a day of exploring or business meetings. We hope you enjoy your stay in our Standard Room.\n\n\n\n\n'),
(2, 'Queen Size Bed Room B', '5399', '4.jpg', 5, 'Welcome to our Queen Size Bed Room B. This room offers a spacious retreat with a comfortable queen-size bed, ideal for a restful night\'s sleep. It is thoughtfully designed to provide you with a relaxing atmosphere during your stay. The room comes with modern amenities, including a flat-screen TV, a mini-fridge, and an en-suite bathroom with a shower. Stay connected with complimentary Wi-Fi, and unwind in style in this tastefully appointed room.'),
(3, 'Super Deluxe', '2800', '4.jpg', 4, 'Step into our Super Deluxe room, where comfort and luxury harmonize to create an unforgettable experience. This room is perfect for those seeking a touch of elegance during their stay. Enjoy a plush king-size bed and a well-appointed seating area, along with a private bathroom and a spa-like shower. Your room also comes with a flat-screen TV, mini-fridge, and complimentary Wi-Fi access. Immerse yourself in the ambiance of relaxation and sophistication.'),
(4, 'Jr. Suite', '3800', '5.jpg', 5, 'Indulge in our Jr. Suite, a spacious and stylish choice for your stay. This room offers a separate living area and bedroom for added comfort and privacy. The bedroom features a king-size bed, while the living area is equipped with a cozy seating arrangement. The private bathroom is equipped with a relaxing bathtub and shower. You\'ll also find a flat-screen TV, mini-fridge, and complimentary Wi-Fi, making it an ideal choice for those seeking a little extra space and luxury.'),
(5, 'Executive Suite', '4000', '6.jpg', 5, 'Experience the pinnacle of luxury in our Executive Suite. This room is designed for those who demand the very best during their stay. With a grand king-size bed, a separate living area, and a spacious bathroom, this suite offers unparalleled comfort and space. The bathroom boasts a rejuvenating bathtub and a separate shower. Enjoy in-room entertainment with a flat-screen TV, and stay connected with complimentary Wi-Fi. This suite is perfect for guests who desire the utmost in style and elegance during their stay.'),
(6, 'Single Room', '5', '5.jpg', 5, 'Hello Sample'),
(7, 'Single Room', '5', '1.jpg', 9, 'This is a sample description'),
(8, 'Single Room', '1111', '1.jpg', 11, 'hi'),
(9, 'Double Deck Bed', '222', '4.jpg', 22, 'dick'),
(10, 'Twin Bed', '67', 'payment.jpg', 5, 'hello kidoan');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL,
  `proof` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`, `proof`) VALUES
(6, 6, 1, 1, 0, 'Check Out', 1, '2023-11-10', '12:30:25', '0000-00-00', '12:43:22', ' 2,000.00', 'payment.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
