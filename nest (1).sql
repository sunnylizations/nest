-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 09:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT 0,
  `data` text NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0snqdjfqhq7cchu4uumlk0l90j243cp8', '::1', 1657899974, '__ci_last_regenerate|i:1657899974;'),
('5dfjh2qdmritv8t6gf8jvpeng0tb36tn', '::1', 1657906282, '__ci_last_regenerate|i:1657906282;'),
('5njsfa4pgfk8gds5fssn3hsk592bt32n', '::1', 1657905038, '__ci_last_regenerate|i:1657905038;'),
('61le0g845vkj3kmgnhjei2ti17r5qavn', '::1', 1657904708, '__ci_last_regenerate|i:1657904708;'),
('6iib3ht6olaeav500ujri8bntou70g92', '::1', 1658161627, '__ci_last_regenerate|i:1658161627;'),
('6j667r5njbm5umgpu7o7v95t3u64k1u3', '::1', 1657820064, '__ci_last_regenerate|i:1657820064;'),
('776jjqp5b5dqqcp761tp2se229mp0fp4', '::1', 1657895202, '__ci_last_regenerate|i:1657895202;'),
('7dss4mfpbnbu1f51qvtqkbhnrrnl5evc', '::1', 1657818785, '__ci_last_regenerate|i:1657818785;'),
('7dsvtvgdolmgv8he44i66p5egr9pjs2b', '::1', 1657903999, '__ci_last_regenerate|i:1657903999;'),
('86ltrr1kceh5vhkc9n4sur5i6o3hqrih', '::1', 1658156435, '__ci_last_regenerate|i:1658156435;'),
('8obls7935i1p29utula49i42gjqbk5st', '::1', 1657901404, '__ci_last_regenerate|i:1657901404;'),
('9oepej5t32ou6pijp86vnfhn60ulbs7g', '::1', 1657819739, '__ci_last_regenerate|i:1657819739;'),
('bia8av3ppbm09uafeg68ka75koh3mj2v', '::1', 1657819433, '__ci_last_regenerate|i:1657819433;'),
('c1aqueef7tc965kurv0jpnqbj5mc9vrs', '::1', 1657904315, '__ci_last_regenerate|i:1657904315;'),
('cgog9vpe9skmijemce6lssc72fihitca', '::1', 1660375353, '__ci_last_regenerate|i:1660375353;user|s:5:\"admin\";loginuser|s:15:\"guddu@gmail.com\";loginpass|s:2:\"oo\";nestuser|s:15:\"guddu@gmail.com\";'),
('ecfdn0drioror2m8kkh65862nmh9kekk', '::1', 1657902070, '__ci_last_regenerate|i:1657902070;'),
('ehqb5q49o5a3elpthahtjvd92j4ikhtq', '::1', 1657900423, '__ci_last_regenerate|i:1657900423;'),
('fs9rigdtieegsl0s6lcdhem80s7sto75', '::1', 1660373897, '__ci_last_regenerate|i:1660373897;'),
('geuvrscsa84i65tinvi9stf3rdui1hra', '::1', 1660374664, '__ci_last_regenerate|i:1660374664;user|s:5:\"admin\";loginuser|s:15:\"guddu@gmail.com\";loginpass|s:2:\"oo\";nestuser|s:15:\"guddu@gmail.com\";cart_contents|a:4:{s:10:\"cart_total\";d:61;s:11:\"total_items\";d:2;s:32:\"dd9909e4f7c10f6f069575939c8081bc\";a:7:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:49:\"Seeds of Change Organic Quinoa, Brown, & Red Rice\";s:5:\"price\";d:29;s:3:\"qty\";d:1;s:7:\"options\";a:2:{s:5:\"image\";s:58:\"http://localhost/nest/media/images/product/product-1-1.jpg\";s:3:\"url\";s:82:\"http://localhost/nest/product-detail/seeds-of-change-organic-quinoa-brown-red-rice\";}s:5:\"rowid\";s:32:\"dd9909e4f7c10f6f069575939c8081bc\";s:8:\"subtotal\";d:29;}s:32:\"69e74329bbb477cd0761a7fec24ab690\";a:7:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:51:\"Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g\";s:5:\"price\";d:32;s:3:\"qty\";d:1;s:7:\"options\";a:2:{s:5:\"image\";s:58:\"http://localhost/nest/media/images/product/product-7-1.jpg\";s:3:\"url\";s:80:\"http://localhost/nest/product-detail/canada-dry-ginger-ale-2-l-bottle-200ml-400g\";}s:5:\"rowid\";s:32:\"69e74329bbb477cd0761a7fec24ab690\";s:8:\"subtotal\";d:32;}}'),
('h91tu3qdh3gkr6pcg8frkb52tbllohnb', '::1', 1660375424, '__ci_last_regenerate|i:1660375353;user|s:5:\"admin\";loginuser|s:15:\"guddu@gmail.com\";loginpass|s:2:\"oo\";'),
('i33o0oh7dhitt7hpqbcebd8ul6aqotbi', '::1', 1657907811, '__ci_last_regenerate|i:1657907811;'),
('i9dqm8ali0m7sbk7v5tmilcpvbun7nt9', '::1', 1657902414, '__ci_last_regenerate|i:1657902414;'),
('isivrc01560g961c63irdjukv90h4fbi', '::1', 1657818478, '__ci_last_regenerate|i:1657818478;'),
('it19u99akaj1sjtv7fsv0dbu96j8cjkq', '::1', 1657898344, '__ci_last_regenerate|i:1657898344;'),
('j1lpfakmii2bgk84ba0fiqf5s97ra0tv', '::1', 1657902832, '__ci_last_regenerate|i:1657902832;'),
('jpdilct7otj003fajtqnn2306afbor39', '::1', 1657906680, '__ci_last_regenerate|i:1657906680;'),
('kf95mv3fokes70mrigaa9077ird1gh2d', '::1', 1657905342, '__ci_last_regenerate|i:1657905342;'),
('kgkkqm4cj15h9tvfuuvp0rd6i01nvv5s', '::1', 1657901717, '__ci_last_regenerate|i:1657901717;'),
('klo1bcdvjdk7gfsekntpm8t81pvv9lh1', '::1', 1660374982, '__ci_last_regenerate|i:1660374982;user|s:5:\"admin\";loginuser|s:15:\"guddu@gmail.com\";loginpass|s:2:\"oo\";nestuser|s:15:\"guddu@gmail.com\";'),
('knnqvb54ogc51t2d0ia7cb7rb8o2vlfs', '::1', 1657907022, '__ci_last_regenerate|i:1657907022;'),
('lram657dl59s4t7h54o5igcfte6quskb', '::1', 1660374245, '__ci_last_regenerate|i:1660374245;user|s:5:\"admin\";loginuser|s:15:\"guddu@gmail.com\";loginpass|s:2:\"oo\";nestuser|s:15:\"guddu@gmail.com\";cart_contents|a:3:{s:10:\"cart_total\";d:29;s:11:\"total_items\";d:1;s:32:\"dd9909e4f7c10f6f069575939c8081bc\";a:7:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:49:\"Seeds of Change Organic Quinoa, Brown, & Red Rice\";s:5:\"price\";d:29;s:3:\"qty\";d:1;s:7:\"options\";a:2:{s:5:\"image\";s:58:\"http://localhost/nest/media/images/product/product-1-1.jpg\";s:3:\"url\";s:82:\"http://localhost/nest/product-detail/seeds-of-change-organic-quinoa-brown-red-rice\";}s:5:\"rowid\";s:32:\"dd9909e4f7c10f6f069575939c8081bc\";s:8:\"subtotal\";d:29;}}flash|s:1:\"1\";__ci_vars|a:1:{s:5:\"flash\";i:1660374247;}'),
('msakt2jb01017d7i1e93kthaejacqqpn', '::1', 1657907434, '__ci_last_regenerate|i:1657907434;'),
('o0760un76n5elqvqib8kvqnuju4iq65s', '::1', 1657819100, '__ci_last_regenerate|i:1657819100;'),
('ol79sfoonn0643i9oad37ki8n91q9b0f', '::1', 1657908121, '__ci_last_regenerate|i:1657908121;'),
('rrb4g8a6mrof0d7k9a945iscfghq7ab7', '::1', 1657900724, '__ci_last_regenerate|i:1657900724;'),
('s5tcq1o1as2p8u3pjhg5670vqtfp0apn', '::1', 1657903198, '__ci_last_regenerate|i:1657903198;'),
('sloamo8mqn7csu5rgq84eeenofedhrnp', '::1', 1657903521, '__ci_last_regenerate|i:1657903521;'),
('u6j4vle45j6h1vht6e7uupqq89a9pjvt', '::1', 1657899353, '__ci_last_regenerate|i:1657899353;');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_url` varchar(255) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_url`, `comment_id`, `name`, `email`, `comment`, `time`) VALUES
(1, 'angie-s-boomchickapop-sweet-salty-kettle-corn', 0, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt?', 'June 30, 2022 at 06:29 pm'),
(2, 'angie-s-boomchickapop-sweet-salty-kettle-corn', 1, 'vivek', 'rohit@gmail.com', 'hii Guddu', '06 30 2022 06:11 19 pm'),
(3, 'angie-s-boomchickapop-sweet-salty-kettle-corn', 1, 'rohit ', 'rohit@gmail.com', 'hii vivek', 'June 30, 2022 at 06:29 pm'),
(4, 'angie-s-boomchickapop-sweet-salty-kettle-corn', 0, 'MUKUL', 'mukul@gmail.com', 'NICE PRODUCT', 'June 30, 2022 at 06:29 pm'),
(5, 'seeds-of-change-organic-quinoa-brown-red-rice', 0, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 'hii seeds', 'June 30, 2022 at 06:29 pm'),
(6, 'seeds-of-change-organic-quinoa-brown-red-rice', 5, 'rohit ', 'sharmaguddu@gmai.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt?', 'June 30, 2022 at 06:30 pm'),
(7, 'seeds-of-change-organic-quinoa-brown-red-rice', 0, 'jatin', 'sss@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt?', 'June 30, 2022 at 06:30 pm'),
(8, 'angie-s-boomchickapop-sweet-salty-kettle-corn', 0, 'GURU ', 'sharmaguddu7510@gmail.com', 'hi all of you', 'June 30, 2022 at 06:41 pm'),
(9, 'angie-s-boomchickapop-sweet-salty-kettle-corn', 8, 'rohit ', 'mukul@gmail.com', 'hii GURU i am rohit', 'June 30, 2022 at 06:43 pm'),
(10, 'f-change-organic-quinoa-brown-red-rice/all-natural-italian-style-chicken-meatballs', 0, 'GUDDU KUMAR', 'mukul@gmail.com', 'hii all natural', 'July 15, 2022 at 11:22 pm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `recived` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `recived`) VALUES
(1, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 956019049, 'course', 'hii', '2022-04-18 09:44:03'),
(2, 'rohit ', 'rohit@gmail.com', 950190498, 'course', 'hii', '2022-04-18 09:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `order_no` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `product_url` varchar(255) DEFAULT NULL,
  `recived_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_no`, `image`, `product_name`, `price`, `quantity`, `total`, `customer_name`, `email`, `mobile`, `address`, `status`, `product_url`, `recived_time`) VALUES
(1, 66550, 'http://localhost/nest/media/images/product/product-1-1.jpg', 'Seeds of Change Organic Quinoa, Brown, & Red Rice', 29, 1, 29, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 9560190498, '3522 Interstate 75 Business Spur, Sault Ste. Marie, MI 49783 New York', 2, 'http://localhost/nest/product-detail/seeds-of-change-organic-quinoa-brown-red-rice', '2022-06-28 10:51:40'),
(2, 66550, 'http://localhost/nest/media/images/product/product-2-1.jpg', 'All Natural Italian-Style Chicken Meatballs', 53, 1, 53, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 9560190498, '3522 Interstate 75 Business Spur, Sault Ste. Marie, MI 49783 New York', 1, 'http://localhost/nest/product-detail/all-natural-italian-style-chicken-meatballs', '2022-06-28 10:51:41'),
(3, 66550, 'http://localhost/nest/media/images/product/product-3-1.jpg', 'Angie’s Boomchickapop Sweet & Salty Kettle Corn', 48, 1, 48, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 9560190498, '3522 Interstate 75 Business Spur, Sault Ste. Marie, MI 49783 New York', 4, 'http://localhost/nest/product-detail/angie-s-boomchickapop-sweet-salty-kettle-corn', '2022-06-28 10:51:41'),
(4, 86675, 'http://localhost/nest/media/images/product/product-1-1.jpg', 'Seeds of Change Organic Quinoa, Brown, & Red Rice', 29, 1, 29, 'guddu@gmail.com', 'guddu@gmail.com', 123467890, 'delhi india', 1, 'http://localhost/nest/product-detail/seeds-of-change-organic-quinoa-brown-red-rice', '2022-08-13 12:43:07'),
(5, 86675, 'http://localhost/nest/media/images/product/product-7-1.jpg', 'Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g', 32, 1, 32, 'guddu@gmail.com', 'guddu@gmail.com', 123467890, 'delhi india', 1, 'http://localhost/nest/product-detail/canada-dry-ginger-ale-2-l-bottle-200ml-400g', '2022-08-13 12:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `product_info` longtext DEFAULT NULL,
  `additional_info` longtext DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orignal_price` int(255) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `popular` tinyint(1) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL,
  `off` text DEFAULT NULL,
  `showhome` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `heading`, `description`, `product_info`, `additional_info`, `quantity`, `orignal_price`, `selling_price`, `category`, `url`, `sale`, `popular`, `hot`, `new`, `off`, `showhome`, `status`, `added`, `updated`) VALUES
(1, 'Seeds of Change Organic Quinoa, Brown, & Red Rice', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 10, 33, 29, '1,13', 'seeds-of-change-organic-quinoa-brown-red-rice', NULL, 1, NULL, NULL, '13', 1, 1, '0000-00-00 00:00:00', '2022-07-03 12:55:51'),
(2, 'All Natural Italian-Style Chicken Meatballs', 'orem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 10, 56, 53, '3', 'all-natural-italian-style-chicken-meatballs', 1, 1, NULL, NULL, '6', 1, 1, '2022-04-17 09:54:50', '0000-00-00 00:00:00'),
(3, 'Angie’s Boomchickapop Sweet & Salty Kettle Corn', 'orem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 5, 52, 48, '5', 'angie-s-boomchickapop-sweet-salty-kettle-corn', NULL, 1, NULL, 1, '8', 1, 1, '2022-04-17 10:06:36', '0000-00-00 00:00:00'),
(4, 'Foster Farms Takeout Crispy Classic Buffalo Wings', '<span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.</span>', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 10, 20, 17, '6', 'foster-farms-takeout-crispy-classic-buffalo-wings', NULL, 1, NULL, NULL, '15', 1, 1, '2022-04-17 01:16:59', '0000-00-00 00:00:00'),
(5, 'Blue Diamond Almonds Lightly Salted Vegetables', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 5, 25, 22, '1', 'blue-diamond-almonds-lightly-salted-vegetables', NULL, 1, NULL, NULL, '12', 1, 1, '2022-04-17 01:20:44', '0000-00-00 00:00:00');
INSERT INTO `product` (`id`, `heading`, `description`, `product_info`, `additional_info`, `quantity`, `orignal_price`, `selling_price`, `category`, `url`, `sale`, `popular`, `hot`, `new`, `off`, `showhome`, `status`, `added`, `updated`) VALUES
(6, 'Chobani Complete Vanilla Greek Yogurt', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 10, 55, 54, '1', 'chobani-complete-vanilla-greek-yogurt', NULL, 1, NULL, NULL, '2', 1, 1, '2022-04-17 01:22:05', '0000-00-00 00:00:00'),
(7, 'Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 10, 33, 32, '5', 'canada-dry-ginger-ale-2-l-bottle-200ml-400g', NULL, 1, NULL, NULL, '4', 1, 1, '2022-04-17 01:23:32', '0000-00-00 00:00:00'),
(8, 'Encore Seafoods Stuffed Alaskan Salmon', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 5, 38, 32, '9', 'encore-seafoods-stuffed-alaskan-salmon', 1, 1, NULL, NULL, '16', 1, 1, '2022-04-17 01:24:43', '0000-00-00 00:00:00'),
(9, 'Gorton’s Beer Battered Fish Fillets with soft paper', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 10, 25, 22, '10', 'gorton-s-beer-battered-fish-fillets-with-soft-paper', NULL, 1, 1, NULL, '12', NULL, 1, '2022-04-17 01:25:45', '0000-00-00 00:00:00'),
(10, 'Haagen-Dazs Caramel Cone Ice Cream Ketchup', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.', '<p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>\n<p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>\n<ul class=\"product-more-infor mt-30\">\n<li><span>Type Of Packing</span>Bottle</li>\n<li><span>Color</span>Green, Pink, Powder Blue, Purple</li>\n<li><span>Quantity Per Case</span>100ml</li>\n<li><span>Ethyl Alcohol</span>70%</li>\n<li><span>Piece In One</span>Carton</li>\n</ul>\n<hr class=\"wp-block-separator is-style-dots\" />\n<p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>\n<h4 class=\"mt-30\">Packaging &amp; Delivery</h4>\n<hr class=\"wp-block-separator is-style-wide\" />\n<p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>\n<p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>\n<h4 class=\"mt-30\">Suggested Use</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Refrigeration not necessary.</li>\n<li>Stir before serving</li>\n</ul>\n<h4 class=\"mt-30\">Other Ingredients</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Organic raw pecans, organic raw cashews.</li>\n<li>This butter was produced using a LTG (Low Temperature Grinding) process</li>\n<li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>\n</ul>\n<h4 class=\"mt-30\">Warnings</h4>\n<ul class=\"product-more-infor mt-30\">\n<li>Oil separation occurs naturally. May contain pieces of shell.</li>\n</ul>', ' <table class=\"font-md\">\n                                            <tbody>\n                                                <tr class=\"stand-up\">\n                                                    <th>Stand Up</th>\n                                                    <td>\n                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-wo-wheels\">\n                                                    <th>Folded (w/o wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 18.5″W x 16.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"folded-w-wheels\">\n                                                    <th>Folded (w/ wheels)</th>\n                                                    <td>\n                                                        <p>32.5″L x 24″W x 18.5″H</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"door-pass-through\">\n                                                    <th>Door Pass Through</th>\n                                                    <td>\n                                                        <p>24</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"frame\">\n                                                    <th>Frame</th>\n                                                    <td>\n                                                        <p>Aluminum</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-wo-wheels\">\n                                                    <th>Weight (w/o wheels)</th>\n                                                    <td>\n                                                        <p>20 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"weight-capacity\">\n                                                    <th>Weight Capacity</th>\n                                                    <td>\n                                                        <p>60 LBS</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"width\">\n                                                    <th>Width</th>\n                                                    <td>\n                                                        <p>24″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"handle-height-ground-to-handle\">\n                                                    <th>Handle height (ground to handle)</th>\n                                                    <td>\n                                                        <p>37-45″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"wheels\">\n                                                    <th>Wheels</th>\n                                                    <td>\n                                                        <p>12″ air / wide track slick tread</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"seat-back-height\">\n                                                    <th>Seat back height</th>\n                                                    <td>\n                                                        <p>21.5″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"head-room-inside-canopy\">\n                                                    <th>Head room (inside canopy)</th>\n                                                    <td>\n                                                        <p>25″</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_color\">\n                                                    <th>Color</th>\n                                                    <td>\n                                                        <p>Black, Blue, Red, White</p>\n                                                    </td>\n                                                </tr>\n                                                <tr class=\"pa_size\">\n                                                    <th>Size</th>\n                                                    <td>\n                                                        <p>M, S</p>\n                                                    </td>\n                                                </tr>\n                                            </tbody>\n                                        </table>', 3, 25, 22, '2', 'haagen-dazs-caramel-cone-ice-cream-ketchup', NULL, 1, NULL, NULL, '12', 1, 1, '2022-04-17 01:28:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `parent_category` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `parent_category`, `category`, `url`, `image`, `added`, `updated`) VALUES
(1, 13, 'Cake & Milk', 'cake-milk', 'cat-13.png', '2022-04-14 11:36:58', '2022-07-02 10:15:52'),
(2, 12, 'Organic Kiwi', 'organic-kiwi', 'cat-12.png', '2022-04-14 11:39:47', '2022-07-02 10:13:33'),
(3, 12, 'Peach', 'peach', 'cat-11.png', '2022-04-14 11:40:16', '2022-07-02 10:13:41'),
(4, 12, 'Red Apple', 'red-apple', 'cat-9.png', '2022-04-14 11:40:53', '2022-07-02 10:13:52'),
(5, 13, 'Snack', 'snack', 'cat-3.png', '2022-04-14 11:45:06', '2022-07-02 10:16:03'),
(6, 12, 'Vegetables', 'vegetables', 'cat-1.png', '2022-04-15 12:04:23', '2022-07-02 10:14:18'),
(7, 13, 'Strawberry', 'strawberry', 'cat-2.png', '2022-04-17 09:49:52', '2022-07-02 10:16:12'),
(8, 13, 'Black Plum', 'black-plum', 'cat-4.png', '2022-04-17 01:10:12', '2022-07-02 10:16:23'),
(9, 12, 'Custard Apple', 'custard-apple', 'cat-5.png', '2022-04-17 01:11:17', '2022-07-02 10:14:34'),
(10, 13, 'Coffe & Tea', 'coffe-tea', 'cat-14.png', '2022-04-17 01:12:55', '2022-07-02 10:16:31'),
(11, 14, 'Headphone', 'headphone', 'cat-15.png', '2022-04-17 01:13:18', '2022-07-02 10:19:54'),
(12, 0, 'Fruits and Vegetables', 'fruits-and-vegetables', 'category-1.svg', '2022-07-02 10:09:36', '0000-00-00 00:00:00'),
(13, 0, 'Breakfast & Dairy', 'breakfast-dairy', 'category-2.svg', '2022-07-02 10:15:31', '0000-00-00 00:00:00'),
(14, 0, 'Electronic & Headphone', 'electronic-headphone', 'cat-151.png', '2022-07-02 10:19:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `images`, `status`, `added`, `updated`) VALUES
(1, 1, 'product-1-1.jpg', 1, '2022-04-15 10:13:08', '0000-00-00 00:00:00'),
(2, 1, 'product-1-2.jpg', 1, '2022-04-15 10:17:53', '0000-00-00 00:00:00'),
(3, 2, 'product-2-1.jpg', 1, '2022-04-17 10:07:30', '0000-00-00 00:00:00'),
(4, 2, 'product-2-2.jpg', 1, '2022-04-17 10:07:56', '0000-00-00 00:00:00'),
(5, 3, 'product-3-1.jpg', 1, '2022-04-17 10:09:44', '0000-00-00 00:00:00'),
(6, 3, 'product-3-2.jpg', 1, '2022-04-17 10:10:02', '2022-04-17 01:02:34'),
(7, 4, 'product-4-1.jpg', 1, '2022-04-17 02:08:55', '0000-00-00 00:00:00'),
(8, 4, 'product-4-2.jpg', 1, '2022-04-17 02:09:09', '0000-00-00 00:00:00'),
(9, 5, 'product-5-1.jpg', 1, '2022-04-17 02:09:25', '0000-00-00 00:00:00'),
(10, 5, 'product-5-2.jpg', 1, '2022-04-17 02:09:56', '2022-04-17 02:11:30'),
(11, 6, 'product-6-1.jpg', 1, '2022-04-17 02:12:22', '0000-00-00 00:00:00'),
(12, 6, 'product-6-2.jpg', 1, '2022-04-17 02:12:44', '0000-00-00 00:00:00'),
(13, 7, 'product-7-1.jpg', 1, '2022-04-17 02:13:21', '0000-00-00 00:00:00'),
(14, 7, 'product-7-2.jpg', 1, '2022-04-17 02:13:51', '0000-00-00 00:00:00'),
(15, 8, 'product-8-1.jpg', 1, '2022-04-17 02:14:12', '0000-00-00 00:00:00'),
(16, 8, 'product-8-2.jpg', 1, '2022-04-17 02:14:28', '0000-00-00 00:00:00'),
(17, 9, 'product-9-1.jpg', 1, '2022-04-17 02:15:49', '0000-00-00 00:00:00'),
(18, 9, 'product-9-2.jpg', 1, '2022-04-17 02:16:07', '0000-00-00 00:00:00'),
(19, 10, 'product-10-1.jpg', 1, '2022-04-17 02:16:19', '0000-00-00 00:00:00'),
(20, 10, 'product-10-2.jpg', 1, '2022-04-17 02:16:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logo_update` datetime DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `mobile_update` datetime DEFAULT NULL,
  `tollfree1` varchar(20) DEFAULT NULL,
  `tollfree1_update` datetime DEFAULT NULL,
  `tollfree2` varchar(20) DEFAULT NULL,
  `tollfree2_update` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_update` datetime DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_link` varchar(255) DEFAULT NULL,
  `address_update` datetime DEFAULT NULL,
  `timing_hours` varchar(255) DEFAULT NULL,
  `timing_hour_update` datetime DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `facebook_update` timestamp NULL DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `instagram_update` datetime DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `twitter_update` datetime DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `youtube_update` datetime DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `pinterest_update` datetime DEFAULT NULL,
  `playstore` varchar(255) DEFAULT NULL,
  `playstore_update` datetime DEFAULT NULL,
  `appstore` varchar(255) DEFAULT NULL,
  `appstore_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `logo_update`, `mobile`, `mobile_update`, `tollfree1`, `tollfree1_update`, `tollfree2`, `tollfree2_update`, `email`, `email_update`, `address`, `address_link`, `address_update`, `timing_hours`, `timing_hour_update`, `facebook`, `facebook_update`, `instagram`, `instagram_update`, `twitter`, `twitter_update`, `youtube`, `youtube_update`, `pinterest`, `pinterest_update`, `playstore`, `playstore_update`, `appstore`, `appstore_update`) VALUES
(1, 'logo.svg', '2022-04-14 08:36:23', 956019049, '2022-04-14 08:24:02', '1900-8888', '2022-04-14 08:24:12', '1900-9999', '2022-04-14 08:24:19', 'sharmaguddu7510@gmail.com', '2022-04-14 08:05:39', '5171 W Campbell Ave undefined Kent, Utah 53127 United States', 'map.com', '2022-04-14 08:25:46', '10:00 - 18:00, Mon - Sat', '2022-04-14 08:26:41', 'www.facebook.com', '2022-04-14 02:57:01', 'www.instagram.com', '2022-04-14 08:29:52', 'www.instagram.com', '2022-04-14 08:27:25', 'www.youtube.com', '2022-04-14 08:30:09', 'www.pinterest.com', '2022-04-14 08:30:55', 'www.playstore.com', '2022-04-14 08:30:55', 'www.playstore.com', '2022-04-14 08:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `heading`, `description`, `url`, `added`, `updated`) VALUES
(1, 'slider-1.png', 'Don’t miss amazing <br>  grocery deals', 'Sign up for the daily newsletter', 'html', '2022-04-14 09:17:13', '2022-04-14 10:05:29'),
(2, 'slider-2.png', 'Fresh Vegetables <br> Big discount', 'Save up to 50% off on your first order', 'some.link', '2022-04-14 10:07:22', '2022-04-14 10:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `today_deal`
--

CREATE TABLE `today_deal` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `deal` tinyint(1) DEFAULT NULL,
  `top_selling` tinyint(1) DEFAULT NULL,
  `trending` tinyint(1) DEFAULT NULL,
  `top_rated` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `today_deal`
--

INSERT INTO `today_deal` (`id`, `product_id`, `deal`, `top_selling`, `trending`, `top_rated`, `status`, `time`) VALUES
(1, 1, 1, 1, NULL, 1, 1, '2022-04-19 09:43:13'),
(2, 3, NULL, 1, 1, 1, 1, '2022-04-19 13:46:51'),
(3, 7, NULL, 1, 1, 1, 1, '2022-04-18 08:13:59'),
(4, 5, 1, NULL, 1, NULL, 1, '2022-04-19 12:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `added`, `updated`) VALUES
(1, 'sharmaguddu@gmai.com', 'hh', '2022-06-24 11:39:05', '2022-06-25 12:39:29'),
(2, 'rohit@gmail.com', 'rr', '2022-06-28 01:08:21', '0000-00-00 00:00:00'),
(3, 'guddu@gmail.com', 'oo', '2022-08-13 12:32:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `shiping_address` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `mobile`, `shiping_address`, `billing_address`, `added`, `updated`) VALUES
(1, 'GUDDU KUMAR', 'sharmaguddu@gmai.com', 9560190498, '3522 Interstate 75 Business Spur, Sault Ste. Marie, MI 49783 New York', '4299 Express Lane Sarasota, FL 34249 USA Phone: 1.941.227.4444 Sarasota', '2022-06-25 12:39:53', '0000-00-00 00:00:00'),
(2, 'rohit@gmail.com', 'rohit@gmail.com', 0, '', '', '2022-06-28 01:08:21', '0000-00-00 00:00:00'),
(3, 'GUDDU KUMAR', 'guddu@gmail.com', 123467890, 'delhi india', 'rohini delhi india', '2022-08-13 12:53:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `since` int(11) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `store_link` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `total_product` int(11) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user`, `product_id`, `image`, `name`, `price`, `url`) VALUES
(4, 'rohit@gmail.com', 9, 'http://localhost/nest/media/images/product/product-9-1.jpg', 'Gorton’s Beer Battered Fish Fillets with soft paper', 22, 'http://localhost/nest/product-detail/gorton-s-beer-battered-fish-fillets-with-soft-paper'),
(12, 'sharmaguddu@gmai.com', 2, 'http://localhost/nest/media/images/product/product-2-1.jpg', 'All Natural Italian-Style Chicken Meatballs', 53, 'http://localhost/nest/product-detail/all-natural-italian-style-chicken-meatballs'),
(17, 'guddu@gmail.com', 4, 'http://localhost/nest/media/images/product/product-4-1.jpg', 'Foster Farms Takeout Crispy Classic Buffalo Wings', 17, 'http://localhost/nest/product-detail/foster-farms-takeout-crispy-classic-buffalo-wings'),
(18, 'guddu@gmail.com', 2, 'http://localhost/nest/media/images/product/product-2-1.jpg', 'All Natural Italian-Style Chicken Meatballs', 53, 'http://localhost/nest/product-detail/all-natural-italian-style-chicken-meatballs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `today_deal`
--
ALTER TABLE `today_deal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `today_deal`
--
ALTER TABLE `today_deal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
