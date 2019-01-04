-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 05:26 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_login_system`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `games`
--

INSERT INTO `games` (`id`, `title`, `content`, `body`, `images`) VALUES
(6, 'Avatar Musik', 'Avatar Musik, the world of sound, sound and sound is a man, negative.', 'Avatar Musik, the world of music, dance and connecting friends all over the country.\r\n\r\nYou are a dynamic person who loves music and lively dance. You look for an online mobile game that has a world full of music and the opportunity to meet friends all over the country.\r\n\r\nWant a place with a younger, more bustling, stylish style? A place that can affirm your talent, class and your own mark?\r\n\r\nNo need to search far away, TeaMobi would like to introduce a new product, the first pure Vietnamese 3D mobile game that combines music, dance and social network: Avatar Musik.\r\n\r\nNext, confidently show off your skillful skills in exciting songs, challenging the quickness of your fingers with your friends. Or you may suddenly meet a new friend who agrees to be wandering in the park. In addition, you can freely communicate with your friends with interesting interactive features between players. With Avatar Musik, distance is no longer a concern.', 'images/avt.jpg'),
(7, 'KPAH', 'Heroes of Hung is the first ancient role-playing game on mobile phones in Vietnam, with a large number of enthusiastic participants.', 'Heroes of Hung is the first ancient role-playing game on mobile phones in Vietnam, with a large number of enthusiastic participants.\r\n\r\nIn the game the player can choose one of three character lines with five different styles with different weapons according to the Five Elements: Kim, Carpentry, Water, Fire and Earth.\r\n\r\nIntegrating in the game are events, historical happenings, real characters that help players feel the atmosphere of the past. When participating in the game, players always have interesting challenges, the activities of the committee are always exciting and always have attractive events periodically.', 'images/kpah.jpg'),
(8, 'Mobi Army', 'In 2014, the world situation was complicated, the 3rd World War could explode at any time.', 'An armed forces claiming to be the ES invaded all of East Asia, South Africa and are conducting hawkish laws to control a vast territory here, they terrorize people, occupy oil fields. and announced it would acquire all major cities in the continents to form a coalition of nations under the control.\r\n\r\nThe powers of the Earth GATO peacekeeping group found that ES was a threat to all humans, so they did not attack them with aircraft and Raptors, but could not destroy ES without using infantry. .\r\n\r\nOctober 2014 ES murdered humanitarian journalists and volunteers as they participated in volunteer campaigns in the countries where the ES occupied and the ambition to acquire GATO and its allies decided to appoint the most elite task force on the planet SEAN, SWAN, SAT, DANTA and a mysterious task force to the suspect bases of the ES and rescue innocent people.\r\n\r\nWhich task force will you join to participate in this historic campaign? Please join Mobi Army 3 and choose your favorite team.', 'images/mobi.jpg'),
(9, 'Ninja School', 'You are a fan of Ninja, the hero character is half-half bad, runs mysteriously but has extraordinary abilities.', 'You are a fan of Ninja, the hero character is half-half bad, runs mysteriously but has extraordinary abilities.\r\n\r\nYes! We are too familiar with the world of Ninja, with poisonous weapons that are strange, with transformation techniques, mystical skills and with indomitable spirit.\r\n\r\nPlease introduce Teenager Hero - Ninja School role playing role-playing game will help you experience the Ninja world in the most vivid way. As a girl / boy, you will decide your Ninja path by joining one of the three ancient schools to cultivate.\r\n\r\nHere, you will be able to attend training courses from teachers, personal tasks or with friends. Each character will have a unique personality, your practice and behavior in the game will make you unique.\r\n\r\nCome on, join now and transform into Ninja on the path to making a legend', 'images/ninja.png'),
(10, 'Knight Age', 'In the world of the Knights of the Age, anyone who grows up begins his or her own adventure such as going to undiscovered lands, fighting against evil forces', 'As an online role-playing game - The Knight Age brings a fascinating and fun storyline, a vast world to explore, a battle system - diverse items with 4 character classes to choose from .\r\n\r\nKnight Age is a multi-platform online game. You can play on Windows, iPhone PC, Android OS, Windows Phone, and even Java versions running on the old S40 and S60 of Nokia. With high quality and smooth speed on ADSL, 3G, GPRS network lines.\r\n\r\nThe game is suitable for all ages. Direct control of characters is easy on the touch screen. When playing on a PC you just need to use the mouse, or flexibly control the character with the old Nokia S40, S60 phone keyboard', 'images/banner-Knight.jpg'),
(11, ' Boy Dragons', 'Players will transform into one of the heroes of 3 planets: Earth, Xayda, Nam. Practice, increase strength and skills. Unite together to fight against evil forces.', '- Action, role-playing genre. Directly control action figures. Easy to play, easy to control characters. Sharp graphics. There is a high-end graphical version for a powerful phone and a low-profile pixel version.\r\n\r\n- Plot closely follows the original. The player will meet all the characters from Bunma, Elder Kame, Jacky-chun, Pate Boat ... to Fide, Pic, Poc, Xen, Broly, Bojack team.\r\n\r\n- The most outstanding feature: Participating in the sole label business. Join the martial arts conference. Join the dragon ball hunt to bring your wish.\r\n\r\n- Compatible with all models on the market today: PC computers, Nokia Java mobile phones, Android, iPhone, Windows Phone, and Android tablets, iPad.', 'images/dragon.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
