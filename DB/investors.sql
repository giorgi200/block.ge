
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
(1, 1, 'GOLDEN TULIP DESIGN HOTEL TBILISI', 'Construction/Golden Tulip/GT surati.png', 0, '$15 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]'),
(2, 2, 'AMERICAN HOSPITAL TBILISI', 'Construction/American Hospital/hastane-1.jpg', 0, '$45 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services, Golden Tulip hotels offer outstanding stays. What \n \n is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi. Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]'),
(3, 1, 'HOSPITAL AMERICAN TBILISI', 'Construction/American Hospital/hastane-1.jpg', 1, '$35 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]'),
(4, 2, 'HOSPITAL AMERICAN TBILISI', 'Construction/American Hospital/hastane-1.jpg', 0, '$35 million', 'Tbilisi, Gorgia', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE `csr` (
  `title_ka` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `text_ka` text COLLATE utf8_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `short_ka` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `short_en` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `csr`
--

INSERT INTO `csr` (`title_ka`, `title_en`, `text_ka`, `text_en`, `short_ka`, `short_en`, `img`, `ID`) VALUES
('კორპორატ\\nი\r\nსოციალური\r\nრეაგირება', 'CORPORATE\nSOCIAL\nRESPONSIBILITY', '1960-იანი წლებიდან კორპორატიული სოციალური პასუხისმგებლობა ყურადღებას ამახვილებდა სხვადასხვა ბიზნესისა და დაინტერესებული მხარეებისგან.\r\nჩვენ მიგვაჩნია, რომ მიზნების მისაღწევად, ჩვენ უნდა ჩაერთოს CSR ძალისხმევას ამავე დროს.\r\nდღევანდელი კომპანიები ფართო სპექტრს ქმნიან, სადაც მათ შეუძლიათ განსხვავება.\r\nბლოკ ჯგუფი ცდილობდა სხვადასხვა სფეროში სამოქალაქო სექტორის პრაქტიკაში გატარება და სამომავლო საქმიანობა მომავალშიც გააგრძელოს.', 'Since the 1960s, corporate social responsibility has attracted attention from a range of businesses and stakeholders. \r\nWe believe that while achieving targets, we should engage in CSR efforts at the same time. \r\nToday companies have wide-range of opportunities where they can make difference. \r\nBlock Group has been trying to practice CSR in different fields and will continue its involvement for the higher aim in future as well.', 'კსპ', 'CSR', 'CSRBG.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hero_articles`
--

CREATE TABLE `hero_articles` (
  `ID` int(1) NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hero_articles`
--

INSERT INTO `hero_articles` (`ID`, `img`, `title`, `text`) VALUES
(1, 'main_2.png', 'SINCE 2006, BLOCK HAS BECOME ONE OF THE MAJOR INVESTMENT COMPANIES', 'Having successfully completed several investment projects, and having built the largest healthcare company in the region, today the company has a very strong reputation both on international and local markets. Block has expanded in different sectors in Georgia and Latin America, and is currently realizing projects with a total value of $250 million. The company has quadrupled its Net Asset Value in the last 10 years'),
(2, 'main.png', 'WITH MORE THAN 25 YEARS OF EXPERIENCE', 'Block has realized over 50 construction projects worth more than $200 million, both for public and private sectors. Today Block owns and operates Block Georgia, which is a pure construction company, and BAUM Constructions, which is a construction management company.'),
(3, 'main_3.png', 'WE CHANGE FUTURE', 'The goal of our company is to develop bussiness in georgia and caucasus, to make good working environment and give people opportunity to work on interesting projects.');

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `ID` int(4) NOT NULL,
  `category_id` smallint(4) NOT NULL,
  `label` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `label_ka` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `progress` tinyint(1) NOT NULL,
  `value` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `location_ka` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `about_ka` text COLLATE utf8_unicode_ci NOT NULL,
  `about_en` text COLLATE utf8_unicode_ci NOT NULL,
  `web_link` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `web_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `slide_imgs` text COLLATE utf8_unicode_ci NOT NULL,
  `Shareholding` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`ID`, `category_id`, `label`, `label_ka`, `img`, `progress`, `value`, `location`, `location_ka`, `about_ka`, `about_en`, `web_link`, `web_name`, `icon`, `slide_imgs`, `Shareholding`) VALUES
(1, 1, 'GOLDEN TULIP DESIGN HOTEL TBILISI', '', 'Construction/Golden Tulip/GT surati.png', 0, '$15 million', 'Tbilisi, Gorgia', '', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]', 10),
(2, 2, 'AMERICAN HOSPITAL TBILISI', '', 'Construction/American Hospital/hastane-1.jpg', 1, '$45 million', 'Tbilisi, Gorgia', '', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services, Golden Tulip hotels offer outstanding stays. What \n \n is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi. Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]', 56),
(3, 1, 'HOSPITAL AMERICAN TBILISI', '', 'Construction/American Hospital/hastane-1.jpg', 1, '$35 million', 'Tbilisi, Gorgia', '', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]', 0),
(4, 2, 'HOSPITAL AMERICAN TBILISI', '', 'Construction/American Hospital/hastane-1.jpg', 0, '$35 million', 'Tbilisi, Gorgia', '', 'ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს, მისი წაითხვა კი შეუძლებელია. დღეს უამრავი პერსონალური საგამომცემლო პროგრამა და ვებგვერდი იყენებს Lorem Ipsum-ს, როგორც დროებით ტექსტს წყობის შესავსებად; Lorem Ipsum-ის მოძებნისას კი საძიებო სისტემები ბევრ დაუსრულებელ გვერდს გვიჩვენებენ. წლების მანძილზე ამ ტექსტის უამრავი ვერსია გამოჩნდა, ზოგი შემთხვევით დაშვებული შეცდომის გამო, ზოგი კი — განზრახ, ხუმრობით.', 'In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features. Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places. We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi.  Hotel will be operated by Louvre Hotel Group.', 'https://ka.lipsum.com/', 'Lorem Ipsum', 'Investments/Primed/Новый.png', '[{\"img\":\"Investments/Kazbegi Towers/23-.jpg\"},{\"img\":\"Investments/Kazbegi Towers/34.jpg\"},{\"img\":\"Investments/Kazbegi Towers/8995.jpg\"}]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `name`, `surname`, `sex`) VALUES
(1, 'giorgi', 'qochiashvili', 1),
(2, 'avto', 'doishvili', 1),
(3, 'mirian', 'chxvimiani', 1);

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
-- Indexes for table `csr`
--
ALTER TABLE `csr`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hero_articles`
--
ALTER TABLE `hero_articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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

--
-- AUTO_INCREMENT for table `csr`
--
ALTER TABLE `csr`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_articles`
--
ALTER TABLE `hero_articles`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
