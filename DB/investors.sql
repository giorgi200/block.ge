-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 11:59 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investors`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(4) NOT NULL,
  `category_name_en` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `category_name_ka` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `category_name_en`, `category_name_ka`) VALUES
(1, 'HOSPITALITY AND REAL ESTATE', 'HOSPITALITY AND REAL ESTATE'),
(2, 'HEALHCARE', 'HEALHCARE');

-- --------------------------------------------------------

--
-- Table structure for table `constructions`
--

CREATE TABLE `constructions` (
  `ID` int(4) NOT NULL,
  `category_id` smallint(4) NOT NULL,
  `label` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `progress` tinyint(1) NOT NULL,
  `value` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `about_ka` text COLLATE utf8_unicode_ci NOT NULL,
  `about_en` text COLLATE utf8_unicode_ci NOT NULL,
  `web_link` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `web_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `slide_imgs` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `constructions`
--

INSERT INTO `constructions` (`ID`, `category_id`, `label`, `img`, `progress`, `value`, `location`, `about_ka`, `about_en`, `web_link`, `web_name`, `icon`, `slide_imgs`) VALUES
(1, 1, 'GOLDEN TULIP DESIGN HOTEL TBILISI', 'Golden Tulip/GT surati.png', 0, '$15 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]'),
(2, 2, 'AMERICAN HOSPITAL TBILISI', 'American Hospital/hastane-1.jpg', 0, '$45 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]'),
(3, 1, 'HOSPITAL AMERICAN TBILISI', 'American Hospital/hastane-1.jpg', 1, '$35 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]'),
(4, 2, 'HOSPITAL AMERICAN TBILISI', 'American Hospital/hastane-1.jpg', 0, '$35 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `constructions`
--
ALTER TABLE `constructions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `constructions`
--
ALTER TABLE `constructions`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
