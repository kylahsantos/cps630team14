-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 12:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cps630`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'kylah', 'cps630'),
(2, 'tsip', 'password'),
(3, 'ecolaco', 'cps630');

-- --------------------------------------------------------

--
-- Table structure for table `closedistances`
--

CREATE TABLE `closedistances` (
  `attID` int(11) NOT NULL,
  `placeA` varchar(255) NOT NULL,
  `placeB` varchar(255) NOT NULL,
  `imageA` varchar(255) NOT NULL,
  `imageB` varchar(255) NOT NULL,
  `locA` varchar(255) NOT NULL,
  `locB` varchar(255) NOT NULL,
  `place_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `closedistances`
--

INSERT INTO `closedistances` (`attID`, `placeA`, `placeB`, `imageA`, `imageB`, `locA`, `locB`, `place_id`) VALUES
(1, 'Central Park', 'Times Square', 'images/closedistance/1a.jpg', 'images/closedistance/1b.jpg', 'New York, USA', 'New York, USA', 1),
(2, 'Navy Pier', 'Shedd Aquarium ', 'images/closedistance/2a.jpg', 'images/closedistance/2b.jpg', 'Chicago, USA', 'Chicago, USA', 2),
(3, 'Casa Loma', 'Royal Ontario Museum', 'images/closedistance/3a.jpg', 'images/closedistance/3b.jpg', 'Toronto, Canada', 'Toronto, Canada', 3),
(4, 'Skylon Tower', 'Clifton Hill', 'images/closedistance/4a.jpg', 'images/closedistance/4b.jpg', 'Niagara Falls, Canada', 'Niagara Falls, Canada', 4),
(5, 'Ipanema', 'Corcovado\r\n', 'images/closedistance/5a.jpg', 'images/closedistance/5b.jpg', 'Rio de Janeiro, Brazil', 'Rio de Janeiro, Brazil', 5),
(6, 'Ipanema', 'Corcovado\r\n', 'images/closedistance/5a.jpg', 'images/closedistance/5b.jpg', 'Rio de Janeiro, Brazil', 'Rio de Janeiro, Brazil', 6),
(7, 'Del Desierto Lake', 'Cueva de las Manos', 'images/closedistance/7a.jpg', 'images/closedistance/7b.jpg', 'Santa Cruz Province, Argentina', 'Santa Cruz Province, Argentina', 7),
(8, 'Cerro de la Gloria', 'General San Martín Park', 'images/closedistance/8a.jpg', 'images/closedistance/8b.jpg', 'Mendoza, Argentina', 'Mendoza, Argentina', 8),
(9, 'Notre-Dame de Paris', 'Arc de Triomphe', 'images/closedistance/9a.jpg', 'images/closedistance/9b.jpg', 'Paris, France', 'Paris, France', 9),
(10, 'Notre-Dame de Paris', 'Arc de Triomphe', 'images/closedistance/9a.jpg', 'images/closedistance/9b.jpg', 'Paris, France', 'Paris, France', 10),
(11, 'London Eye', 'Tower Bridge', 'images/closedistance/11a.jpg', 'images/closedistance/11b.jpg', 'London, United Kingdom', 'London, United Kingdom', 11),
(12, 'London Eye', 'Tower Bridge', 'images/closedistance/11a.jpg', 'images/closedistance/11b.jpg', 'London, United Kingdom', 'London, United Kingdom', 12),
(13, 'Agra Fort', 'Itmad-ud-Daula\r\n', 'images/closedistance/13a.jpg', 'images/closedistance/13b.jpg', 'Agra, India', 'Agra, India', 13),
(14, 'Elephanta Caves', 'Chhatrapati Shivaji Terminus', 'images/closedistance/14a.jpg', 'images/closedistance/14b.jpg', 'Mumbai, India', 'Mumbai, India', 14),
(15, 'D\'mall de Boracay', 'Diniwid Beach Road\r\n', 'images/closedistance/15a.jpg', 'images/closedistance/15b.jpg', 'Boracay, Philippines', 'Boracay, Philippines', 15),
(16, 'Panglao Island\r\n', 'Hinagdanan Cave\r\n', 'images/closedistance/16a.jpg', 'images/closedistance/16b.jpg', 'Bohol, Philippines', 'Bohol, Philippines', 16),
(17, 'Boulders Beach\r\n', 'Cape Point', 'images/closedistance/17a.jpg', 'images/closedistance/17b.jpg', 'Cape Town, South Africa', 'Cape Town, South Africa', 17),
(18, 'Boulders Beach\r\n', 'Cape Point', 'images/closedistance/17a.jpg', 'images/closedistance/17b.jpg', 'Cape Town, South Africa', 'Cape Town, South Africa', 18),
(19, 'Saqqara', 'Khufu Ship\r\n', 'images/closedistance/19a.jpg', 'images/closedistance/19b.jpg', 'Giza Governorate, Egypt', 'Giza Governorate, Egypt', 19),
(20, 'Saqqara', 'Khufu Ship\r\n', 'images/closedistance/19a.jpg', 'images/closedistance/19b.jpg', 'Giza Governorate, Egypt', 'Giza Governorate, Egypt', 20);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `place_id` int(11) NOT NULL,
  `placename` varchar(255) NOT NULL,
  `placelocation` varchar(255) NOT NULL,
  `mainimage` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`place_id`, `placename`, `placelocation`, `mainimage`, `price`) VALUES
(1, 'The Statue of Liberty', 'New York, USA', 'images/1.jpg', 256),
(2, 'Cloud Gate', 'Chicago, USA', 'images/2.jpg\r\n', 287),
(3, 'CN Tower', 'Toronto, Canada', 'images/3.jpg', 201),
(4, 'Niagara Falls', 'Niagara Falls, Canada', 'images/4.jpg', 237),
(5, 'Christ the Redeemer', 'Rio de Janeiro, Brazil', 'images/5.jpg', 892),
(6, 'Sugarloaf Mountain', 'Rio de Janeiro, Brazil', 'images/6.jpg', 736),
(7, 'Parque Nacional Los Glaciares', 'Santa Cruz Province, Argentina', 'images/7.jpg', 840),
(8, 'Aconcagua', 'Mendoza, Argentina', 'images/8.jpg', 1093),
(9, 'Eiffel Tower', 'Paris, France', 'images/9.jpg', 763),
(10, 'Louvre Museum', 'Paris, France', 'images/10.jpg', 763),
(11, 'Big Ben', 'London, United Kingdom', 'images/11.jpg', 789),
(12, 'Buckingham Palace', 'London, United Kingdom', 'images/12.jpg', 791),
(13, 'Taj Mahal', 'Agra, India', 'images/13.jpg', 1089),
(14, 'Gateway Of India Mumbai', 'Mumbai, India', 'images/14.jpg', 1192),
(15, 'Boracay', 'Boracay, Philippines', 'images/15.jpg', 1235),
(16, 'Chocolate Hills', 'Bohol, Philippines', 'images/16.jpg', 1264),
(17, 'Kruger National Park', 'South Africa', 'images/17.jpg', 1783),
(18, 'Cape of Good Hope', 'Cape Town, South Africa', 'images/18.jpg', 1827),
(19, 'Giza Necropolis', 'Giza Governorate, Egypt', 'images/19.jpg', 2313),
(20, 'Great Sphinx of Giza', 'Giza Governorate, Egypt', 'images/20.jpg', 2817);

-- --------------------------------------------------------

--
-- Table structure for table `landmarks`
--

CREATE TABLE `landmarks` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `placename` varchar(255) DEFAULT NULL,
  `placelocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landmarks`
--

INSERT INTO `landmarks` (`id`, `place_id`, `placename`, `placelocation`) VALUES
(1, 1, 'The Statue of Liberty', 'New York, USA'),
(2, 2, 'Cloud Gate', 'Chicago, USA'),
(3, 3, 'CN Tower', 'Toronto, Canada'),
(4, 4, 'Niagara Falls', 'Niagara Falls, Canada'),
(5, 5, 'Christ the Redeemer', 'Rio de Janeiro, Brazil'),
(6, 9, 'Eiffel Tower', 'Paris, France'),
(7, 11, 'Big Ben', 'London, United Kingdom'),
(8, 12, 'Buckingham Palace', 'London, United Kingdom'),
(9, 13, 'Taj Mahal', 'Agra, India'),
(10, 14, 'Gateway Of India Mumbai', 'Mumbai, India'),
(11, 19, 'Giza Necropolis', 'Giza Governorate, Egypt'),
(12, 20, 'Great Sphinx of Giza', 'Giza Governorate, Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `museums`
--

CREATE TABLE `museums` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `placename` varchar(255) DEFAULT NULL,
  `placelocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `museums`
--

INSERT INTO `museums` (`id`, `place_id`, `placename`, `placelocation`) VALUES
(1, 10, 'Louvre Museum', 'Paris, France');

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `placename` varchar(255) DEFAULT NULL,
  `placelocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`id`, `place_id`, `placename`, `placelocation`) VALUES
(1, 6, 'Sugarloaf Mountain', 'Rio de Janeiro, Brazil'),
(2, 7, 'Parque Nacional Los Glaciares', 'Santa Cruz Province, Argentina'),
(3, 8, 'Aconcagua', 'Mendoza, Argentina'),
(4, 15, 'Boracay', 'Boracay, Philippines'),
(5, 16, 'Chocolate Hills', 'Bohol, Philippines'),
(6, 17, 'Kruger National Park', 'South Africa'),
(7, 18, 'Cape of Good Hope', 'Cape Town, South Africa');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `place_id` int(11) DEFAULT NULL,
  `rev_name` varchar(255) DEFAULT NULL,
  `rev_date` date DEFAULT NULL,
  `review` varchar(4000) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `place_id`, `rev_name`, `rev_date`, `review`, `ranking`) VALUES
(1, 1, 'Alisa Hemais', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(2, 1, 'Bradie Yuso', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.',3),
(3, 2, 'Chris Dajs', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(4, 2, 'Drus Kusiad', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(5, 3, 'Erica Hrido', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5, 5),
(6, 3, 'Frank Iosu', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3, 3),
(7, 4, 'Gina Tork', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(8, 4, 'Hannah Urie', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(9, 5, 'Irwin Eris', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(10, 5, 'Jack Fread', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(11, 6, 'Kris Ryus', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(12, 6, 'Lana Peralat', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(13, 7, 'Monica Heri', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(14, 7, 'Neil Brice', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(15, 8, 'Olivia Brous', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(16, 8, 'Paul Jean', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(17, 9, 'Quen Backwell', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(18, 9, 'Rhea Test', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(19, 10, 'Sandra Tuo', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(20, 10, 'Tiana Tsud', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(21, 11, 'Ursula Vickey', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(22, 11, 'Victor Namc', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(23, 12, 'Winny Jakis', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(24, 12, 'Xena Mena', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(25, 13, 'Yousef Loius', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(26, 13, 'Zita Goiu', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(27, 14, 'Alex Yohn', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(28, 14, 'Briana Gtru', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(29, 15, 'Cria Fauls', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(30, 15, 'Diana Mams', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(31, 16, 'Elisa Arean', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(32, 16, 'Fiona Vicso', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(33, 17, 'George Shrinks', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(34, 17, 'Hector Niso', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(35, 18, 'Issy Frozzy', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(36, 18, 'John Smith', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(37, 19, 'Keisa Denis', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(38, 19, 'Liona Lewis', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3),
(39, 20, 'Mario Luigi', '2011-10-01', 'What a great time we had here! I would recommend it to all my friends and family. Please visit ASAP, 10/10 experience!', 5),
(40, 20, 'Nina Dobre', '2014-02-12', 'Experience was okay, not the best. The weather ruined it for us. Please check the weather before you go! 5/10 experience.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `travelinfo`
--

CREATE TABLE `travelinfo` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(255) DEFAULT NULL,
  `photo1` varchar(500) DEFAULT NULL,
  `photo2` varchar(500) DEFAULT NULL,
  `photo3` varchar(500) DEFAULT NULL,
  `place_desc` varchar(4000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelinfo`
--

INSERT INTO `travelinfo` (`place_id`, `place_name`, `photo1`, `photo2`, `photo3`, `place_desc`, `price`) VALUES
(1, 'Statue of Liberty', 'images/ny1.jpg', 'images/ny2.jpg', 'images/ny3.jpg', 'The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York, in the United States. The copper statue, a gift from the people of France to the people of the United States, was designed by French sculptor Frédéric Auguste Bartholdi and its metal framework was built by Gustave Eiffel. The statue was dedicated on October 28, 1886.', 256),
(2, 'Cloud Gate', 'images/ch1.jpg', 'images/ch2.jpg', 'images/ch3.jpg', 'Cloud Gate is a public sculpture by Indian-born British artist Sir Anish Kapoor, that is the centerpiece of AT&T Plaza at Millennium Park in the Loop community area of Chicago, Illinois. The sculpture and AT&T Plaza are located on top of Park Grill, between the Chase Promenade and McCormick Tribune Plaza & Ice Rink. Constructed between 2004 and 2006, the sculpture is nicknamed The Bean because of its shape.', 287),
(3, 'CN Tower', 'images/to1.jpg', 'images/to2.jpg', 'images/to3.jpg', 'The CN Tower is a 553.3 m-high (1,815.3 ft) concrete communications and observation tower located in Downtown Toronto, Ontario, Canada.  Built on the former Railway Lands, it was completed in 1976. Its name \"CN\" originally referred to Canadian National, the railway company that built the tower.', 201),
(4, 'Niagara Falls', 'images/nf1.jpg', 'images/nf2.jpg', 'images/nf3.jpg', 'Niagara Falls is a group of three waterfalls at the southern end of the Niagara Gorge, spanning the border between the US state of New York and the Canadian province of Ontario. The largest of the three is Horseshoe Falls, also known as Canadian Falls, which straddles the international border between Canada and the United States.', 237),
(5, 'Christ the Redeemer', 'images/cr1.jpg', 'images/cr2.jpg', 'images/cr3.jpg', 'Christ the Redeemer is an Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil, created by French sculptor Paul Landowski and built by Brazilian engineer Heitor da Silva Costa, in collaboration with French engineer Albert Caquot. Constructed between 1922 and 1931, the statue is 30 metres (98 ft) high, excluding its 8-metre (26 ft) pedestal.', 892),
(6, 'Sugarloaf Mountain', 'images/sm1.jpg', 'images/sm2.jpg', 'images/sm3.jpg', 'Sugarloaf Mountain is a peak situated in Rio de Janeiro, Brazil, at the mouth of Guanabara Bay on a peninsula that juts out into the Atlantic Ocean. Rising 396 m (1,299 ft) above the harbor, its name is said to refer to its resemblance to the traditional shape of concentrated refined loaf sugar.', 736),
(7, 'Parque Nacional Los Glaciares', 'images/pn1.jpg', 'images/pn2.jpg', 'images/pn3.jpg', 'Los Glaciares National Park (Spanish: Parque Nacional Los Glaciares) is a federal protected area in Santa Cruz Province, Argentina. The park covers an area of 726,927 ha (7,269.27 km2; 2,806.68 sq mi), making it the largest national park in the country. It was established on 11 May 1937.', 840),
(8, 'Aconcagua', 'images/ac1.jpg', 'images/ac2.jpg', 'images/ac3.jpg', 'Aconcagua is a mountain in the Principal Cordillera of the Andes mountain range, in Mendoza Province, Argentina. It is the highest mountain outside of Asia (although there are 189 mountains higher than it in Asia alone),  being the highest in both the Southern and Western Hemispheres with a summit elevation of 6,960.8 metres (22,837 ft).', 1093),
(9, 'Eiffel Tower', 'images/et1.jpg', 'images/et2.jpg', 'images/et3.jpg', 'The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower. Constructed from 1887 to 1889 as the entrance to the 1889 World\'s Fair, it was initially criticised by some of France\'s leading artists and intellectuals for its design, but it has become a global cultural icon of France and one of the most recognisable structures in the world.', 763),
(10, 'Louvre Museum', 'images/lm1.jpg', 'images/lm2.jpg', 'images/lm3.jpg', 'The Louvre or the Louvre Museum is the world\'s largest art museum and a historic monument in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the city\'s 1st arrondissement (district or ward). The museum opened on 10 August 1793 with an exhibition of 537 paintings, the majority of the works being royal and confiscated church property.', 763),
(11, 'Big Ben', 'images/bb1.jpg', 'images/bb2.jpg', 'images/bb3.jpg', 'Big Ben is the nickname for the Great Bell of the striking clock at the north end of the Palace of Westminster in London and is usually extended to refer to both the clock and the clock tower. The official name of the tower in which Big Ben is located was originally the Clock Tower, but it was renamed Elizabeth Tower in 2012 to mark the Diamond Jubilee of Elizabeth II. The tower was designed by Augustus Pugin in a neo-Gothic style. When completed in 1859, its clock was the largest and most accurate four-faced striking and chiming clock in the world.', 789),
(12, 'Buckingham Palace', 'images/bp1.jpg', 'images/bp2.jpg', 'images/bp3.jpg', 'Buckingham Palace is the London residence and administrative headquarters of the monarchy of the United Kingdom. Located in the City of Westminster, the palace is often at the centre of state occasions and royal hospitality. It has been a focal point for the British people at times of national rejoicing and mourning. Originally known as Buckingham House, the building at the core of today\'s palace was a large townhouse built for the Duke of Buckingham in 1703 on a site that had been in private ownership for at least 150 years.', 791),
(13, 'Taj Mahal', 'images/tm1.jpg', 'images/tm2.jpg', 'images/tm3.jpg', 'The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare (42-acre) complex, which includes a mosque and a guest house, and is set in formal gardens bounded on three sides by a crenellated wall.', 1089),
(14, 'Gateway Of India Mumbai', 'images/gi1.jpg', 'images/gi2.jpg', 'images/gi3.jpg', 'The Gateway of India is an arch-monument built in the early twentieth century in the city of Mumbai, in the Indian state of Maharashtra. It was erected to commemorate the landing in December 1911 at Apollo Bunder, Mumbai (then Bombay) of King-Emperor George V and Queen-Empress Mary, the first British monarch to visit India. At the time of the royal visit, the gateway was not yet built, and a cardboard structure greeted the monarch. The foundation stone was laid in March 1913 for a monument built in the Indo-Saracenic style, incorporating elements of 16th-century Marathi architecture. The final design of the monument by architect George Wittet was sanctioned only in 1914, and construction was completed in 1924', 1192),
(15, 'Boracay', 'images/bo1.jpg', 'images/bo2.jpg', 'images/bo3.jpg', 'Boracay is a small island in the Philippines, 7 km long and 1 km wide, located in the Western Visayas approximately 315 kilometres (196 miles) south of Manila and 2 kilometres (1.2 mi) off the northwest tip of Panay Island. Boracay has a population of 32,267 as of February 2016. The island comprises the barangays of Manoc-Manoc, Balabag, and Yapak in the municipality of Malay, in Aklan Province. The island is administered by the Boracay Inter-agency Task Force. Apart from its white sand beaches, Boracay is also famous for being one of the world\'s top destinations for relaxation.', 1235),
(16, 'Chocolate Hills', 'images/cp1.jpg', 'images/cp2.jpg', 'images/cp3.jpg', 'The Chocolate Hills are a geological formation in the Bohol province of the Philippines. There are at least 1,260 hills but there may be as many as 1,776 hills spread over an area of more than 50 square kilometres. They are covered in green grass that turns brown during the dry season, hence the name. The Chocolate Hills is a famous tourist attraction of Bohol. They are featured in the provincial flag and seal to symbolize the abundance of natural attractions in the province. They are in the Philippine Tourism Authority\'s list of tourist destinations in the Philippines; they have been declared the country\'s third National Geological Monument and proposed for inclusion in the UNESCO World Heritage List.', 1264),
(17, 'Kruger National Park', 'images/kn1.jpg', 'images/kn2.jpg', 'images/kn3.jpg', 'Kruger National Park is a South African National Park and one of the largest game reserves in Africa. It covers an area of 19,485 km in the provinces of Limpopo and Mpumalanga in northeastern South Africa, and extends 360 km from north to south and 65 km from east to west. The administrative headquarters are in Skukuza. Areas of the park were first protected by the government of the South African Republic in 1898, and it became South Africa\'s first national park in 1926.', 1783),
(18, 'Cape of Good Hope', 'images/cg1.jpg', 'images/cg2.jpg', 'images/cg3.jpg', 'The Cape of Good Hope is a rocky headland on the Atlantic coast of the Cape Peninsula in South Africa.As one of the great capes of the South Atlantic Ocean, the Cape of Good Hope has long been of special significance to sailors, many of whom refer to it simply as \"the Cape\". It is a waypoint on the Cape Route and the clipper route followed by clipper ships to the Far East and Australia, and still followed by several offshore yacht races.', 1827),
(19, 'Giza Necropolis', 'images/pg1.jpg', 'images/pg2.jpg', 'images/pg3.jpg', 'The Giza pyramid complex, also called the Giza Necropolis, is the site on the Giza Plateau in Greater Cairo, Egypt that includes the Great Pyramid of Giza, the Pyramid of Khafre, and the Pyramid of Menkaure, along with their associated pyramid complexes and the Great Sphinx of Giza. All were built during the Fourth Dynasty of the Old Kingdom of Ancient Egypt. The site also includes several cemeteries and the remains of a workers\' village.', 2313),
(20, 'Great Sphinx of Giza', 'images/gs1.jpg', 'images/gs2.jpg', 'images/gs3.jpg', 'The Great Sphinx of Giza, commonly referred to as the Sphinx of Giza or just the Sphinx, is a limestone statue of a reclining sphinx, a mythical creature with the body of a lion and the head of a human. Facing directly from West to East, it stands on the Giza Plateau on the west bank of the Nile in Giza, Egypt. The face of the Sphinx is generally believed to represent the pharaoh Khafre.', 2817);

-- --------------------------------------------------------

--
-- Table structure for table `travelplan`
--

CREATE TABLE `travelplan` (
  `id` int(11) NOT NULL,
  `tour_id` varchar(5) NOT NULL,
  `start_date` date NOT NULL,
  `trip_duration` varchar(255) NOT NULL,
  `air_fare` int(11) NOT NULL,
  `country1` varchar(255) NOT NULL,
  `country2` varchar(255) NOT NULL,
  `trip_info1` varchar(255) NOT NULL,
  `trip_info2` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelplan`
--

INSERT INTO `travelplan` (`id`, `tour_id`, `start_date`, `trip_duration`, `air_fare`, `country1`, `country2`, `trip_info1`, `trip_info2`, `total_price`) VALUES
(1, 'EUL01', '2020-07-12', '7 days', 90, 'United Kingdom', 'France', 'Big Ben AND Buckingham Palace', 'Eiffel Tower AND Louvre Museum', 1485),
(2, 'ASL01', '2020-12-03', '7 days', 508, 'India', 'Philippines', 'Taj Mahal AND Gateway of India', 'Boracay AND Chocolate Hills', 1745);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telno` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `address`, `telno`, `email`, `password`) VALUES
(3, 'testing', 'test', 'test', '1234567890', 'test@test.com', '$2y$10$2RAduCZ6QX5WQgEDd3f3O.r7urZi3HINiP.vLSB.FkKs32TboBEwK'),
(4, 'test2', 'test2', 'test2', 'test2', 'test2@test2.com', '$2y$10$ulPN7OgSn5LI8/ASMWfHpOuTvTb9SxY/W0KmarIDHlytMmyMaLCLi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `closedistances`
--
ALTER TABLE `closedistances`
  ADD PRIMARY KEY (`attID`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `landmarks`
--
ALTER TABLE `landmarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `museums`
--
ALTER TABLE `museums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelinfo`
--
ALTER TABLE `travelinfo`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `travelplan`
--
ALTER TABLE `travelplan`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `landmarks`
--
ALTER TABLE `landmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `museums`
--
ALTER TABLE `museums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `travelinfo`
--
ALTER TABLE `travelinfo`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `travelplan`
--
ALTER TABLE `travelplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `closedistances`
--
ALTER TABLE `closedistances`
  ADD CONSTRAINT `closedistances_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `home` (`place_id`);

--
-- Constraints for table `landmarks`
--
ALTER TABLE `landmarks`
  ADD CONSTRAINT `landmarks_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `home` (`place_id`);

--
-- Constraints for table `museums`
--
ALTER TABLE `museums`
  ADD CONSTRAINT `museums_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `home` (`place_id`);

--
-- Constraints for table `nature`
--
ALTER TABLE `nature`
  ADD CONSTRAINT `nature_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `home` (`place_id`);

--
-- Constraints for table `travelinfo`
--
ALTER TABLE `travelinfo`
  ADD CONSTRAINT `travelinfo_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `home` (`place_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `travelplan`
--
ALTER TABLE `travelplan`
  ADD CONSTRAINT `travelplan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `travelinfo` (`place_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
