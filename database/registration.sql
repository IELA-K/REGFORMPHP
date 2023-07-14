SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `region` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `barangay` varchar(500) NOT NULL,
  `zip` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `addresstype` varchar(200) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `veteranS` varchar(200) NOT NULL,
  `disability` varchar(200) NOT NULL,
  `race` varchar(200) NOT NULL,
  `terms_agree` varchar(20) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `birthdate`, `email`, `password`, `region`, `state`, `city`, `barangay`, `zip`, `gender`, `addresstype`, `resume`, `veteranS`, `disability`, `race`, `terms_agree`, `registration_date`) VALUES
(1, 'JeffreiTumbaga', '2001-10-29', 'jeff@gmail.com', 'pogiako01', 'NCR', 'Metro Manila', 'Valenzuela', 'Canumay West', '1443', 'M', 'PR', 'home.jpg', 'I am a veteran', 'I have no disability', 'Asian', 'yes', '2023-05-07 18:42:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
