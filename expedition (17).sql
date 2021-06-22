-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 09:17 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expedition`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_info`
--

CREATE TABLE `bill_info` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL,
  `pgk_id` int(11) NOT NULL,
  `paid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dys` int(2) NOT NULL,
  `cost` int(7) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `nights` int(2) NOT NULL,
  `location` varchar(500) NOT NULL,
  `map` varchar(500) NOT NULL,
  `img_des` text NOT NULL,
  `iternary` varbinary(10000) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `name`, `dys`, `cost`, `img`, `nights`, `location`, `map`, `img_des`, `iternary`, `link`) VALUES
(1, 'Beyt Dwarka Island Camping', 2, 2950, 'dunny-point-marine-camp-27-jan-2017-55xJCuF-360x200.jpg', 1, 'Gujarat , India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29542.600735840228!2d68.9518839800456!3d22.246714162476998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569c266399e37b%3A0xb5866e461a106e0a!2sDwarka%2C+Gujarat!5e0!3m2!1sen!2sin!4v1540524550840', 'Marine Camp is a unique type of camping where the participants stay near the coastal area for 2/3 days and explore the marine biodiversity, tides and ebbs,life of the local people, direction finding and many other creative thingsâ€¦ <br> The base camp Marine Camp is set in the north eastern area of Beyt Dwarka Island. The area is rich with sponges, jelly fish, sea feathers, sea anemones, bristle worms, corals, mollusks, barnacles, crabs, starfish, sea cucumbers, fish, marine turtles, sea snakesand many other marine mammals. ', 0x44617920310d0a4166746572206e696768742074726176656c20696e204275732c20617272697665206174204f6b6861204a657474790d0a5472616e7366657220746f204265797420447761726b612049736c616e64206279206120626f61740d0a54656e74205069746368696e672c2047726f757020416c6c6f746d656e74732026207472656b6b696e670d0a5465616d2047616d65732c2043616d70666972652c20537461722047617a696e672c20526f7574652046696e64696e672c20436f617374616c205472656b6b696e672c2053656120426174683c62723e3c62723e0d0a44617920320d0a416674657220427265616b666173742c20736e6f726b656c696e6720262062656163682047616d65730d0a52657475726e206261636b20746f204f6b6861206166746572206c756e6368200d0a566973697420746f20447761726b612054656d706c65202620476f6d746920476861740d0a44657061727475726520666f722041686d6564616261642061667465722044696e6e65723c62723e3c62723e0d0a0d0a4e6f74653a205468652063616d702077696c6c20646570617274206f6e2070726576696f757320646179206576656e696e6720692e652e20696620347468204a616e2069732073686f776e206f6e206f757220776562736974652c20746865206275732077696c6c206465706172742066726f6d2041686d656461626164206f6e20337264204a616e206576656e696e672e205363686564756c65206973207375626a65637420746f207765617468657220636f6e646974696f6e73, 'Brochure of Beyt Dwarka Island Camping.pdf'),
(2, 'Jaisalmer Desert Camping', 5, 5000, 'jaisalmer-desert-camping-06-nov-2018-HrWGE8f-360x200.JPG', 4, 'Rajasthan,India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113855.93302825281!2d70.82468989483606!3d26.90356152550636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3947bc28aa1b396b%3A0xf5ef9bd660d66ee3!2sJaisalmer%2C+Rajasthan+345001!5e0!3m2!1sen!2sin!4v1540524914699', ' To groom the youngsters in the field of adventures, aware them about the rich Indian Heritage: both natural & cultural, Invincible - The NGO presents one of its unique style of camping programme in Thar Desert. Here, the young India will explore the barren lands beauty and landscapes, and will experience the typical Rajasthani culture through interactions and exploration.  <br><br> About the Expedition<br>  During the winter season, the desert area remains comparatively cooler than the summer and it creates an appropriate situation to feel and enjoy the real Thar beauty. The Thar Desert also nicknamed as the Great Indian Desert, is the worlds 17th largest desert. It is divided among the countries India and Pakistan, with the majority part being in India. It is one of the most populated desert areas amongst the globe. In India, Thar occupies parts of Rajasthan, Gujarat, Punjab and Haryana. The region faces frequent draughts, also land degradation is major problem in the Thar Desert.<br>  The expedition has main 2 aspect of leaning:<br> <br> Exploration of Thar Desert through famous trekking trails<br> Observing and understanding the local Rajasthani culture', 0x4a616973616c6d657220446573657274205472656b6b696e672045787065646974696f6e20697320706c616e6e656420647572696e6720746865206d6f6e746873206f6620446563656d6265722d4a616e756172792d466562727561727920616e6420616c6c20657870656374656420626174636865732077696c6c20666f6c6c6f77207468652062656c6f77206d656e74696f6e6564207363686564756c652e0d0a3c62723e3c62723e0d0a0d0a0d0a44617920313a204172726976616c206174204a616973616c6d6572206561726c79206d6f726e696e672c206166746572206f7665722d6e6967687420627573206a6f75726e65792e20536967687420536565696e67206174204b756c64686172612c207472656b20746f2053616d2053616e642044756e65732020616e6420205365742075702063616d70206174204261726e61203c62723e0d0a44617920323a20447269766520746f20537564617361726920616e64207472656b20746f204261726e612056696c6c6167652e206f7665726e696768742063616d70696e67206174204261726e612056696c6c61676520616e642063756c747572616c2070726f6772616d2e3c62723e0d0a44617920333a2043616d656c205269646520746f204b686f6f72692064657365727420616e64207472656b206174204d616c616e2042616973612054656d706c652c206261636b20746f204a616973616c6d657220636974793c62723e0d0a44617920343a20467265652044617920666f7220736967687420736565696e67206174204a616973616c6d65722c2064657061727420666f722041686d65646162616420696e206576656e696e673c62723e0d0a44617920353a2052656163682041686d656461626164206561726c79206d6f726e696e673c62723e0d0a0d0a0d0a3c62723e0d0a546865207363686564756c65206973207375626a65637420746f206368616e67652061732070657220746865207765617468657220636f6e646974696f6e732e20416e79206368616e676520696e207363686564756c65206f722063616e63656c6c6174696f6e206f6620746865207472656b2063616e20626520646f6e6520776974686f757420676976696e6720616e79207072696f7220696e666f726d6174696f6e2e20, 'Brochure of Jaisalmer Desert Camping.pdf'),
(3, 'Dalhousie Winter Trekking Expedition', 8, 7000, 'dalhousie-winter-trekking-expedition-06-jan-2017-Kyt5Cqc-360x200.JPG', 7, 'Himachal Pradesh, India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53815.52763199856!2d75.93857754825392!3d32.54028674714488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391c9138637f1ae1%3A0xbac8f1954c198c20!2sDalhousie%2C+Himachal+Pradesh!5e0!3m2!1sen!2sin!4v1540024548751', 'Snow Trekking in Dalhousie<br><br>  Dalhousie Winter Trekking Expedition is especially planned to project the young citizens into the less explored field of snow trekking and snow crafts. During the months of December-January, the nearby area of Dalhousie remains covered with snow and it gives an opportunity to explore the untouched beauty of snow clad Himalayas.<br><br>  Due to its unique geographical situation, while all other hill stations of India are not easily accessible in winters, Dalhousie can be reached very easily and it is only 3 hour drive from Pathankot. Keeping the town as road head, base camp is set in Kalatop and height gain is done up to Dainkund Top (9700 ft), the highest point of the whole Chamba District. Going through the scattered snow patches in Dalhousie, it leads to 5 feet thick snow in higher reaches. Besides all these, staying in the typical Himalayan huts and knowing about the local culture is covered under -Home Stay Program.', 0x0d0a5468652070726f706f736564206974696e657261727920666f7220746869732063616d70732077696c6c2072656d61696e2073616d6520616e6420697320657870656374656420617320756e646572e280a63c62723e0d0a0d0a44617920313a204465706172747572652066726f6d2041686d6564616261642061742031313a323020414d2c206f7665726e6967687420747261696e206a6f75726e65792028547261696e3a2031393232332f4a616d6d7520546177692045787072657373293c62723e0d0a0d0a44617920323a204172726976616c2061742050617468616e6b6f742c2044657061727475726520666f722044616c686f75736965206279206275732e3c62723e0d0a0d0a44696e6e65722026204163636f6d6d6f646174696f6e206174207468652044616c686f7573696520486f74656c2f446f726d69746f72792028332f362073686172696e67206261736973292e3c62723e0d0a0d0a44617920333a20204163636c696d6174697a6174696f6e2057616c6b2c204166746572206c756e636820667265652074696d6520666f72205369676874736565696e672e203c62723e0d0a0d0a467265652064617920666f72206163636c696d6174697a6174696f6e202620536574746c696e6720446f776e2c20546f776e2076697369742026204272696566696e673c62723e0d0a0d0a44617920343a205472656b20746f204b616c61746f70204261736563616d70203c62723e0d0a0d0a416674657220627265616b666173742c207472656b20746f204c616b6b61646d616e64692026207468656e20746f204b616c61746f70202838303030206674292c204e696768742068616c7420696e20576f6f64656e20487574732f486f74656c7320286173207065722077656174686572293c62723e0d0a0d0a44617920353a205472656b20746f204461696e6b756e6420546f7020283937303020667429203c62723e0d0a0d0a4869676874206761696e20746f204461696e6b756e642048696c6c2026206261636b20746f204b616c61746f70204261736563616d702c204e696768742048616c74206174204b616c61746f703c62723e0d0a0d0a44617920363a20566973697420746f204b68616a6a696172206279204275732f536d616c6c2056656869636c65733c62723e0d0a0d0a52657475726e20746f2044616c686f7573696520696e206576656e696e6720616e64207468656e206472697665206261636b20746f2050617468616e6b6f742c204e696768742061742050617468616e6b6f7420486f74656c3c62723e0d0a0d0a44617920373a2044657061727475726520666f722050617468616e6b6f7420616e64207468656e20746f2041686d6564616261642c206f7665726e6967687420696e20747261696e2e3c62723e0d0a0d0a44617920383a204172726976616c2061742041686d65646162616420617420333a313520504d2e3c62723e0d0a0d0a0d0a3c62723e0d0a54686f73652077686f206170706c69657320666f722044616c686f7573696520746f2044616c686f757369652c206e65656420746f207265706f7274206f6e20326e6420646179206576656e696e672f33726420646179206d6f726e696e67206f662074686973207363686564756c65206f6e20676976656e20706c61636520616e642077696c6c206c65617665207468652063616d7073697465206f6e2036746820646179206576656e696e672e20, 'Brochure of Dalhousie Trekking Expedition.pdf'),
(4, 'Snow Trekking in Manali', 8, 7000, 'manali-summer-adventure-camp-09-apr-2016-vUO2var-360x200.jpg', 7, 'Himachal Pradesh, India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26997.54816209246!2d77.16961019388907!3d32.23941774279275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39048708163fd03f%3A0x8129a80ebe5076cd!2sManali%2C+Himachal+Pradesh!5e0!3m2!1sen!2sin!4v1540525707355', 'Snow Trekking in Manali is an elite initiative by Invincible NGO which mainly targets youngsters and promotes them into less explored field of Winter Trekking.<br>  Moreover, in Himalayas, when the winter fills the dense forests with white furry snow, Invincible looks high towards snow clad mountains and leads warm blood and ignited minds for exploring the area in a unique way with heritage touch.<br>  Keeping this learning tour at very low cost, providing the participants their own gujju taste of food & making them to feel the real adventure, where everything around is white are the missionary objectives from this student run organization. Organized in a very disciplined manner with proper safety and security for both Boys and Girls, this expedition gives a chance to learn, understand & explore the Himalayan beauty and meanwhile to conquer the self-made limitations.<br>', 0x20496e2074686973206475726174696f6e2c206120736572696573206f662038206461792f37206e69676874206c6f6e6720616476656e747572652063616d70732077696c6c20626520706c6163656420617320706572207468652061636164656d6963207363686564756c65206f6620766172696f757320636f6c6c656765732f696e73746974757465732e3c62723e0d0a0d0a0d0a5468652070726f706f736564206974696e657261727920666f7220746869732063616d70732077696c6c2072656d61696e2073616d6520616e6420697320657870656374656420617320756e646572e280a63c62723e0d0a0d0a44617920313a204465706172747572652066726f6d2041686d6564616261642c204f7665726e6967687420747261696e206a6f75726e65792e3c62723e0d0a0d0a44617920323a204172726976616c2061742050617468616e6b6f742c2044657061727475726520666f72204d616e616c692e3c62723e0d0a0d0a44617920333a204172726976616c206174204e616767617220486f74656c2c20467265652074696d6520666f72206163636c696d6174697a6174696f6e2026207465616d206275696c64696e6720616374697669746965732e203c62723e0d0a0d0a44617920343a205472656b20746f20416476616e636520426173652043616d702c204e6967687468616c7420696e20746865206c6f63616c2048696d616c6179616e20776f6f64656e20687574732c2043616d70666972652e3c62723e0d0a0d0a44617920353a20436c696d6220746f20536e6f7720506f696e742c20536e6f772047616d65732c205472656b206261636b20746f204e616767617220486f74656c2e3c62723e0d0a0d0a44617920363a20467265652064617920666f72207369746520736565696e67206174204d616e616c692c2044657061727475726520666f722050617468616e6b6f742061667465722064696e6e65722e3c62723e0d0a0d0a44617920373a204172726976616c2061742050617468616e6b6f74205261696c7761792053746174696f6e20696e206d6f726e696e672c2044657061727475726520666f722041686d6564616261642e3c62723e0d0a0d0a44617920383a204172726976616c2061742041686d6564616261642e3c62723e0d0a0d0a0d0a3c62723e0d0a54686f73652077686f206170706c69657320666f72204d616e616c6920746f204d616e616c692c206e65656420746f207265706f7274206f6e2033726420646179206d6f726e696e67206f662074686973207363686564756c65206f6e20676976656e20706c61636520616e642077696c6c206c65617665207468652063616d7073697465206f6e2036746820646179206d6f726e696e672e0d0a0d0a0d0a0d0a546865207363686564756c65206973207375626a65637420746f206368616e67652061732070657220746865207765617468657220636f6e646974696f6e732e20416e79206368616e676520696e207363686564756c65206f722063616e63656c6c6174696f6e206f6620746865207472656b2063616e20626520646f6e6520776974686f757420676976696e6720616e79207072696f7220696e666f726d6174696f6e2e20, 'Brochure of Manali Adventure Camp.pdf'),
(5, ' Bakor Nature Camp', 4, 2950, 'bakor-nature-camp-01-sep-2018-CkgHWUo-360x200.JPG', 3, 'Gujarat , India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7326.577757878848!2d73.59983692500573!3d23.341546489169865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396753cb0dd1bb0b%3A0x20d6fd13419d6b09!2sBakor%2C+Gujarat!5e0!3m2!1sen!2sin!4v1540526299783', 'The Majestic Beauty of Village â€“ Bakor <br> Bakor is a beautiful village situated in Mahisagar District of Gujarat. The campsite is located close to Rajasthan Border. In monsoon, Bakor is full of green grass, shrubs, bushes and green tall trees. <br> The area is forest covered consisting maximum Mohava Trees. Mammals such as jackals & mongoose are mainly found. Jungles around the tribal area known as  Hidimbavan. <br> Nearby there is a heritage site consisting ancient temples of Kaleshwari. In internal of village their lies a beautiful Waterfall, which is most spectacular in monsoon. The main advantage of this waterfall is it is the best place to get peace and admire natural beauty as there is no one around. <br> Its best place for Meditation and Photographers.<br>', 0x43616d70666972653c62723e0d0a5269666c652053686f6f74696e673c62723e0d0a547567206f66205761723c62723e0d0a417263686572793c62723e0d0a4275726d61204272696467653c62723e0d0a5472656b6b696e673c62723e0d0a4865726974616765205369676874736565696e673c62723e0d0a4b616c6573687761726920506172697361723c62723e0d0a42616b6f7220576174657266616c6c3c62723e0d0a5465616d2047616d65733c62723e, 'Brochure of Bhrigu Lake Trek.pdf'),
(6, 'Polo Rain Forest Camp', 3, 2950, 'polo-forest-15-aug-2015-rqK2bEq-360x200.jpg', 2, 'Gujarat,India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.38696101918!2d73.28922851498574!3d23.9821088844757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395d781ba305bbdf%3A0x3f6684bdb0317dc9!2sPolo+Forest+Road%2C+Gujarat+383460!5e0!3m2!1sen!2sin!4v1540526634365', 'The Polo Forest area was a part of a vast territory and Vijaynagar was the capital 600 years back. The ancient city was a pilgrimage for the Jains and Shivadharmi people of the area. The jungle have 4 sculptured gates made of local sedimentary rocks in each direction. Development of the city was done along the river banks of Harnav. The temples were destroyed by the Mughals and now are the heritage sites.  <br><br> The jungles are rich with many wild animals like leopards and bears. Spiders and pythons are also found in the dense jungle area. In tress, here are more than 600 types. Many species of water birds and crabs are also found in the river and reservoir. The area is sanctuary and being maintained by the Dholwani range forest department. The government has also established a campsite with a view to provide nature education and develop the site as tourism place.', 0x416374697674696573206f7665722074686572653c62723e3c62723e0d0a526f636b20436c696d62696e673c62723e0d0a52617070656c6c696e673c62723e0d0a426f756c646572696e673c62723e0d0a5472656b6b696e673c62723e0d0a43616d7020466972653c62723e0d0a5465616d2047616d65733c62723e0d0a0d0a506c6163657320746f206578706c6f72653c62723e3c62723e0d0a4861726e61762044616d3c62723e0d0a536861726e6573687761722054656d706c653c62723e0d0a5669726573687761722054656d706c653c62723e0d0a526f636b2047617264656e3c62723e0d0a4964617269796f20476164683c62723e0d0a52616e69204c616b653c62723e0d0a506f6c6f20466f726573743c62723e, 'Brochure of Polo Forest Trekking Camp.pdf'),
(7, 'Saputara Advanture Camp', 3, 3000, 'saputara-hill-station-05-jul-2014-wi6ntLV-360x200.jpg', 2, 'Gujarat , India', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29882.412037551112!2d73.72997742819646!3d20.575741269699012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bde11600f94dced%3A0x3177bfbe22202c73!2sSaputara%2C+Gujarat!5e0!3m2!1sen!2sin!4v1540526933792', 'Saputara hills are situated in the district of Dang . It is a part of the Sahyadri Range of mountains and the highest point is on the altitude of 1081 M from mean sea level. After the very first rain of the season, the whole area comes out with full of greenery, waterfalls and other natural beauty. <br><br>  The city has been developed as a Hill Station by the government and is a hot favourite place of tourists all the way coming from Gujarat, Nashik and Bombay. The place is also famous for its rich tribal heritage and festivals. Many museums are here showing culture of the Danges, the local tribe.<br><br>', 0x41637469766974696573206f7665722074686572653c62723e3c62723e0d0a526f636b20436c696d62696e673c62723e0d0a52617070656c6c696e673c62723e0d0a426f756c646572696e673c62723e0d0a426f6174696e673c62723e0d0a5472656b6b696e673c62723e0d0a43616d7020466972653c62723e0d0a5465616d2047616d65733c62723e0d0a3c62723e0d0a506c6163657320746f2076697369743c62723e3c62723e0d0a0d0a4769726120576174657266616c6c3c62723e0d0a4c616b652026204c616b652047617264656e3c62723e0d0a526f73652047617264656e3c62723e0d0a537465702047617264656e3c62723e0d0a53756e73657420506f696e743c62723e0d0a4563686f20506f696e743c62723e0d0a476f7665726e6f722048696c6c3c62723e0d0a5361707574617261204d757365756d3c62723e0d0a417175617269756d3c62723e, 'Brochure of Saputara Adventure Camp.pdf'),
(8, 'Leh Ladakh Expedition', 14, 12000, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-10-jun-2017-dyeq3lk-360x200.jpg', 13, 'Jammu and Kashmir,india', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105639.10349000509!2d77.49669807793032!3d34.166241757612056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38fdeb21445fed85%3A0xd1bb09975086f710!2sLeh!5e0!3m2!1sen!2sin!4v1540527485822', 'Ladakh (land of high passes) is a region in the Indian state of Jammu and Kashmir that currently extends from the Siachen Glacier in the Karakoram range to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.[3][4] It is one of the most sparsely populated regions in Jammu and Kashmir and its culture and history are closely related to that of Tibet. Ladakh is renowned for its remote mountain beauty and culture.<br><br>  Historically, the region included the Baltistan (Baltiyul) valleys (now mostly in Pakistan), the entire upper Indus Valley, the remote Zanskar, Lahaul and Spiti to the south, much of Ngari including the Rudok region and Guge in the east, Aksai Chin in the northeast (extending to the Kun Lun Mountains), and the Nubra Valley to the north over Khardong La in the Ladakh Range. Contemporary Ladakh borders Tibet to the east, the Lahaul and Spiti regions to the south, the Vale of Kashmir, Jammu and Baltiyul regions to the west, and the southwest corner of Xinjiang across the Karakoram Pass in the far north.<br><br>  Aksai Chin is one of the disputed border areas between China and India.', 0x31204465706172747572652066726f6d2041686d6564616261642c204f7665726e6967687420747261696e206a6f75726e65793c62723e0d0a32204172726976616c2061742050617468616e6b6f742c2044657061727475726520666f72204d616e616c69206279206275733c62723e0d0a33204172726976616c206174204d616e616c692043616d70736974652c20467265652064617920666f72204163636c696d6174697a6174696f6e2026205369746520736565696e673c62723e0d0a342044657061727475726520666f72205361726368752c204e6967687468616c74206174205361726368753c62723e0d0a352044657061727475726520666f72204c65682c204e6967687468616c74206174204c65683c62723e0d0a36204d6f726e696e672057616c6b2c20467265652044617920616e64206c6f63616c207369746520736565696e6720696e204c65683c62723e0d0a372044657061727475726520666f722050616e676f6e67204c616b652c2056697369742026204261636b20746f204c65683c62723e0d0a38204e756272612056616c6c657920766961204b68617264756e676c61205061737320616e64204e6967687420537461793c62723e0d0a39204c6f63616c205369746520536565696e6720696e204e7562726120262044657061727475726520666f72204c65683c62723e0d0a31302044657061727475726520666f72205361726368752c204e6967687468616c7420696e205361726368753c62723e0d0a31312044657061727475726520666f72204d616e616c692c204c617465206576656e696e67206172726976616c206174204d616e616c693c62723e0d0a313220467265652064617920666f72207369746520736565696e6720696e204d616e616c692c2044657061727475726520666f722050617468616e6b6f742061667465722044696e6e65723c62723e0d0a3133204172726976616c2061742050617468616e6b6f742c2044657061727475726520666f722041686d6564616261643c62723e0d0a3134204172726976616c2061742041686d6564616261643c62723e, 'Brochure of The Leh Ladakh Expedition.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(5) NOT NULL,
  `cmp_id` int(5) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `cmp_id`, `dates`) VALUES
(1, 1, '2018-10-31'),
(2, 1, '2018-11-03'),
(3, 1, '2018-11-06'),
(5, 1, '2018-11-19'),
(6, 2, '2018-10-29'),
(7, 2, '2018-11-04'),
(8, 2, '2018-11-14'),
(9, 2, '2018-11-20'),
(10, 2, '2018-11-27'),
(11, 3, '2018-10-28'),
(12, 3, '2018-10-31'),
(13, 3, '2018-11-05'),
(14, 3, '2018-11-13'),
(15, 3, '2018-11-28'),
(16, 4, '2018-11-01'),
(17, 4, '2018-11-16'),
(18, 4, '2018-11-22'),
(19, 4, '2018-11-29'),
(20, 4, '2018-11-30'),
(21, 5, '2018-10-28'),
(22, 5, '2018-11-06'),
(23, 5, '2018-11-14'),
(24, 5, '2018-11-21'),
(25, 5, '2018-11-30'),
(28, 6, '2018-12-09'),
(29, 6, '2018-11-21'),
(30, 6, '2018-12-16'),
(31, 6, '2018-12-22'),
(32, 6, '2019-01-02'),
(33, 7, '2019-01-10'),
(34, 6, '2019-01-05'),
(35, 7, '2019-02-12'),
(36, 7, '2019-01-23'),
(37, 7, '2018-11-01'),
(38, 7, '2018-12-30'),
(39, 8, '2018-11-02'),
(40, 8, '2018-11-15'),
(43, 8, '2018-11-03'),
(44, 8, '2018-11-21'),
(45, 8, '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `img` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cmp_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `name`, `cmp_id`) VALUES
(1, 'dunny-point-13-feb-2015-KISQcE4-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(2, 'dunny-point-13-feb-2015-V6XEZad-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(3, 'dunny-point-marine-camp-22-oct-2017-mtoZaSC-360x200.JPG', 'Beyt Dwarka Island Camping', 1),
(4, 'dunny-point-marine-camp-22-oct-2017-NVvqMQ7-360x200.JPG', 'Beyt Dwarka Island Camping', 1),
(5, 'dunny-point-marine-camp-27-jan-2017-55xJCuF-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(6, 'dunny-point-marine-camp-27-jan-2017-aSLtJve-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(7, 'dunny-point-marine-camp-27-jan-2017-pYEdsEp-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(8, 'dunny-point-marine-camp-27-jan-2017-sxfjZCX-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(9, 'dunny-point-marine-camp-27-jan-2017-YxqX6dt-360x200.jpg', 'Beyt Dwarka Island Camping', 1),
(10, 'jaisalmer-desert-camping-02-nov-2018-1iJBNmX-360x200.JPG', 'Jaisalmer Desert Camping', 2),
(11, 'jaisalmer-desert-camping-02-nov-2018-AVgaD0W-360x200.JPG', 'Jaisalmer Desert Camping', 2),
(12, 'jaisalmer-desert-camping-06-nov-2018-cwBAgsF-360x200.JPG', 'Jaisalmer Desert Camping', 2),
(13, 'jaisalmer-desert-camping-06-nov-2018-HrWGE8f-360x200.JPG', 'Jaisalmer Desert Camping', 2),
(14, 'jaisalmer-desert-camping-06-nov-2018-IDTRyej-360x200.JPG', 'Jaisalmer Desert Camping', 2),
(15, 'jaisalmer-desert-camping-26-jan-2017-djZxeeC-360x200.jpg', 'Jaisalmer Desert Camping', 2),
(16, 'jaisalmer-desert-camping-26-jan-2017-DR9Njct-360x200.JPG', 'Jaisalmer Desert Camping', 2),
(17, 'jaisalmer-desert-camping-26-jan-2017-KYqRVb7-360x200.jpg', 'Jaisalmer Desert Camping', 2),
(18, 'jaisalmer-desert-camping-26-jan-2017-Pm4unpK-360x200.jpg', 'Jaisalmer Desert Camping', 2),
(20, 'dalhousie-winter-trekking-expedition-04-jan-2017-sS4UrwM-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(21, 'dalhousie-winter-trekking-expedition-06-jan-2017-cHKb6U1-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(22, 'dalhousie-winter-trekking-expedition-06-jan-2017-dNzhVJh-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(23, 'dalhousie-winter-trekking-expedition-06-jan-2017-f2y1rmP-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(24, 'dalhousie-winter-trekking-expedition-06-jan-2017-hq4rWJI-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(25, 'dalhousie-winter-trekking-expedition-06-jan-2017-M5koGGh-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(27, 'dalhousie-winter-trekking-expedition-11-jan-2017-4tqGrYk-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(28, 'dalhousie-winter-trekking-expedition-11-jan-2017-EjVvO8g-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(29, 'dalhousie-winter-trekking-expedition-20-dec-2016-iJXap3z-360x200.JPG', 'Dalhousie Winter Trekking Expedition', 3),
(30, 'manali-14-jun-2015-qHnnTXP-360x200.jpg', 'Snow Trekking in Manali', 4),
(31, 'manali-summer-adventure-camp-03-jun-2017-AXf4SBx-360x200.JPG', 'Snow Trekking in Manali', 4),
(32, 'manali-summer-adventure-camp-03-jun-2017-taB8aln-360x200.JPG', 'Snow Trekking in Manali', 4),
(33, 'manali-summer-adventure-camp-09-apr-2016-vUO2var-360x200.jpg', 'Snow Trekking in Manali', 4),
(34, 'manali-summer-adventure-camp-09-apr-2016-6yvQyFa-360x200.jpg', 'Snow Trekking in Manali', 4),
(35, 'manali-summer-adventure-camp-09-apr-2016-VK3W7eg-360x200.jpg', 'Snow Trekking in Manali', 4),
(36, 'manali-summer-adventure-camp-12-jun-2017-9HGY73U-360x200.JPG', 'Snow Trekking in Manali', 4),
(37, 'manali-summer-adventure-camp-12-jun-2017-ugUz2yF-360x200.jpg', 'Snow Trekking in Manali', 4),
(38, 'bakor-nature-camp-01-sep-2018-CkgHWUo-360x200.JPG', ' Bakor Nature Camp', 5),
(39, 'bakor-nature-camp-01-sep-2018-ivRehjd-360x200.JPG', ' Bakor Nature Camp', 5),
(40, 'bakor-nature-camp-01-sep-2018-X3lVDcJ-360x200.JPG', ' Bakor Nature Camp', 5),
(41, 'bakor-nature-camp-01-sep-2018-xH9KSLw-360x200.JPG', ' Bakor Nature Camp', 5),
(42, 'bakor-nature-camp-01-sep-2018-Ymii98c-360x200.JPG', ' Bakor Nature Camp', 5),
(43, 'saputara-hill-station-04-sep-2015-6kU2Ba4-360x200.jpg', 'Saputara Advanture Camp', 7),
(44, 'saputara-hill-station-04-sep-2015-qbepIIs-360x200.jpg', 'Saputara Advanture Camp', 7),
(45, 'saputara-hill-station-05-jul-2014-Glj9oJE-360x200.jpg', 'Saputara Advanture Camp', 7),
(46, 'saputara-hill-station-05-jul-2014-gvQGR7I-360x200.jpg', 'Saputara Advanture Camp', 7),
(47, 'saputara-hill-station-18-aug-2015-2qg7CjN-360x200.jpg', 'Saputara Advanture Camp', 7),
(48, 'saputara-hill-station-21-aug-2015-LBWcGa7-360x200.jpg', 'Saputara Advanture Camp', 7),
(49, 'polo-forest-08-aug-2015-3v7boCs-360x200.jpg', 'Polo Rain Forest Camp', 6),
(50, 'polo-forest-08-aug-2015-EQEp03F-360x200.jpg', 'Polo Rain Forest Camp', 6),
(51, 'polo-forest-12-sep-2015-QCW3z6d-360x200.jpg', 'Polo Rain Forest Camp', 6),
(52, 'polo-forest-15-aug-2015-87yPR8B-360x200.jpg', 'Beyt Dwarka Island Camping', 6),
(53, 'polo-forest-15-aug-2015-Qn2lGFS-360x200.jpg', 'Polo Rain Forest Camp', 6),
(54, 'polo-forest-15-aug-2015-X9maHe1-360x200.jpg', 'Polo Rain Forest Camp', 6),
(55, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-04-jun-2016-6avgUnT-360x200.JPG', 'Leh Ladakh Expedition', 8),
(56, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-04-jun-2016-kiGmNTn.JPG', 'Beyt Dwarka Island Camping', 8),
(57, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-10-jun-2017-dyeq3lk-360x200.jpg', 'Leh Ladakh Expedition', 8),
(58, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-10-jun-2017-flSfMGm-360x200.jpg', 'Leh Ladakh Expedition', 8),
(59, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-10-jun-2017-picJpfT-360x200.jpg', 'Leh Ladakh Expedition', 8),
(60, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-10-jun-2017-TO9mRMG-360x200.jpg', 'Beyt Dwarka Island Camping', 8),
(61, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-10-jun-2017-xkav5W9-360x200.JPG', 'Leh Ladakh Expedition', 8),
(62, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-12-jun-2016-56GI7Xq-360x200.JPG', 'Leh Ladakh Expedition', 8),
(63, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-12-jun-2016-FmOohJK-360x200.JPG', 'Leh Ladakh Expedition', 8),
(64, 'the-leh-ladakh-trekking-expedition-towards-heaven-back-12-jun-2016-rYKrz7e-360x200.JPG', 'Leh Ladakh Expedition', 8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `img`, `email`, `pwd`) VALUES
(1, 'rupal', '9.jpg', 'rupal3900rajani@gmail.com', 'c6065956');

-- --------------------------------------------------------

--
-- Table structure for table `pkg`
--

CREATE TABLE `pkg` (
  `id` int(5) NOT NULL,
  `cmp_id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cost` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkg`
--

INSERT INTO `pkg` (`id`, `cmp_id`, `name`, `cost`) VALUES
(1, 1, 'Ahemdabad to Ahemdabad', 2950),
(2, 1, 'Mumbai to Mumbai', 5000),
(3, 2, 'Ahemdabad to Ahemdabad', 1850),
(4, 2, 'Mumbai to Mumbai', 5000),
(5, 2, 'Delhi to Delhi', 4000),
(6, 3, 'Ahemdabad to Ahemdabad', 5000),
(7, 3, 'Mumbai to Mumbai', 7000),
(8, 3, 'Delhi to Delhi', 8000),
(9, 3, 'Pathankot to Pathankot', 3000),
(10, 4, 'Ahemdabad to Ahemdabad', 5000),
(11, 4, 'Mumbai to Mumbai', 7000),
(12, 4, 'Delhi to Delhi', 3000),
(13, 5, 'Ahemdabad to Ahemdabad', 5000),
(14, 5, 'Mumbai to Mumbai', 7000),
(15, 6, 'Mumbai to Mumbai', 5000),
(16, 6, 'Delhi to Delhi', 3000),
(17, 6, 'Pathankot to Pathankot', 5000),
(18, 7, 'Ahemdabad to Ahemdabad', 5000),
(19, 7, 'Mumbai to Mumbai', 5000),
(20, 7, 'Delhi to Delhi', 7000),
(21, 8, 'Ahemdabad to Ahemdabad', 10000),
(22, 8, 'Mumbai to Mumbai', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `msg`) VALUES
(1, 'rupal', 'rupal3900rajani@gmail.com', 'enjoyed a lot'),
(2, 'sakshi', 'sakshi123@gmail.com', 'very good facilites');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `contact`, `email`, `address`, `pwd`, `age`, `image`) VALUES
(1, 'rupal', '7016963181', 'rupal3900rajani@gmail.com', 'shiv bhuvan,\r\n2 momainagar,\r\ngandhinagr,\r\njamnagar-361008', 'c6065956', 18, '1.jgp'),
(2, 'radhika', '3452342342', 'radha123@gmail.com', 'shiv bhuvan', '123', 43, 'bakor-nature-camp-01-sep-2018-xH9KSLw-360x200.JPG'),
(3, 'Kartavya Rajani', '1234567890', 'kartu123@gmail.com', 'shiv bhuvan', '123', 10, 'banner-3-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(5) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img`) VALUES
(1, 'bakor-nature-camp-01-sep-2018-CkgHWUo-360x200.JPG'),
(9, 'bakor-nature-camp-01-sep-2018-ivRehjd-360x200.JPG'),
(11, 'xxx.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL,
  `edu_qua` varchar(500) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addresss` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `speciality`, `experience`, `edu_qua`, `contact`, `email`, `addresss`, `age`, `image`) VALUES
(13, 'sakshi', 'photography', 4, 'diploma', '9988663342', 'sakshi123@gmail.com', 'shiv bhuvan', 18, 'testimonials-3-2.jpg'),
(14, 'Darshan Mehta', 'photography', 4, 'diploma', '9988663342', 'darshan@gmail.com', 'Govardhan Apartment', 25, 'team-member-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`cmp_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pkg`
--
ALTER TABLE `pkg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cmp_id` (`cmp_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_info`
--
ALTER TABLE `bill_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pkg`
--
ALTER TABLE `pkg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`cmp_id`) REFERENCES `camps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pkg`
--
ALTER TABLE `pkg`
  ADD CONSTRAINT `pkg_ibfk_1` FOREIGN KEY (`cmp_id`) REFERENCES `camps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
