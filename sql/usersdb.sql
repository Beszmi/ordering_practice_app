-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Feb 09. 13:08
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `usersdb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `items`
--

CREATE TABLE `items` (
  `itemid` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `item_desc` text NOT NULL,
  `pic_loc` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `creation_time` datetime NOT NULL,
  `buy_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `items`
--

INSERT INTO `items` (`itemid`, `seller_id`, `buyer_id`, `item_name`, `item_desc`, `pic_loc`, `price`, `creation_time`, `buy_time`) VALUES
(1, 1, -1, 'Valami nagyon jó', 'Hablaty', 'macska.gif', 5000, '2025-02-02 21:45:39', NULL),
(8, 2, -1, 'Tescos kifli', 'Hablaty', 'img/kifli.jpg', 800, '2025-02-02 21:45:39', NULL),
(9, 1, -1, 'Enyhén használt billentyű', 'Barely used keyboard', 'img/keyboard.jpg', 100, '2025-02-02 21:55:41', NULL),
(11, 1, -1, 'bee movie script', 'NARRATOR:\r\n(Black screen with text; The sound of buzzing bees can be heard)\r\nAccording to all known laws\r\nof aviation,\r\n :\r\nthere is no way a bee\r\nshould be able to fly.\r\n :\r\nIts wings are too small to get\r\nits fat little body off the ground.\r\n :\r\nThe bee, of course, flies anyway\r\n :\r\nbecause bees don\'t care\r\nwhat humans think is impossible.\r\nBARRY BENSON:\r\n(Barry is picking out a shirt)\r\nYellow, black. Yellow, black.\r\nYellow, black. Yellow, black.\r\n :\r\nOoh, black and yellow!\r\nLet\'s shake it up a little.\r\nJANET BENSON:\r\nBarry! Breakfast is ready!\r\nBARRY:\r\nComing!\r\n :\r\nHang on a second.\r\n(Barry uses his antenna like a phone)\r\n :\r\nHello?\r\nADAM FLAYMAN:\r\n\r\n(Through phone)\r\n- Barry?\r\nBARRY:\r\n- Adam?\r\nADAM:\r\n- Can you believe this is happening?\r\nBARRY:\r\n- I can\'t. I\'ll pick you up.\r\n(Barry flies down the stairs)\r\n :\r\nMARTIN BENSON:\r\nLooking sharp.\r\nJANET:\r\nUse the stairs. Your father\r\npaid good money for those.\r\nBARRY:\r\nSorry. I\'m excited.\r\nMARTIN:\r\nHere\'s the graduate.\r\nWe\'re very proud of you, son.\r\n :\r\nA perfect report card, all B\'s.\r\nJANET:\r\nVery proud.\r\n(Rubs Barry\'s hair)\r\nBARRY=\r\nMa! I got a thing going here.\r\nJANET:\r\n- You got lint on your fuzz.\r\nBARRY:\r\n- Ow! That\'s me!\r\n\r\nJANET:\r\n- Wave to us! We\'ll be in row 118,000.\r\n- Bye!\r\n(Barry flies out the door)\r\nJANET:\r\nBarry, I told you,\r\nstop flying in the house!\r\n(Barry drives through the hive,and is waved at by Adam who is reading a\r\nnewspaper)\r\nBARRY==\r\n- Hey, Adam.\r\nADAM:\r\n- Hey, Barry.\r\n(Adam gets in Barry\'s car)\r\n :\r\n- Is that fuzz gel?\r\nBARRY:\r\n- A little. Special day, graduation.\r\nADAM:\r\nNever thought I\'d make it.\r\n(Barry pulls away from the house and continues driving)\r\nBARRY:\r\nThree days grade school,\r\nthree days high school...\r\nADAM:\r\nThose were awkward.\r\nBARRY:\r\nThree days college. I\'m glad I took\r\na day and hitchhiked around the hive.\r\nADAM==\r\nYou did come back different.\r\n(Barry and Adam pass by Artie, who is jogging)\r\nARTIE:\r\n- Hi, Barry!\r\nBARRY:\r\n- Artie, growing a mustache? Looks good.\r\nADAM:\r\n- Hear about Frankie?\r\nBARRY:\r\n- Yeah.\r\nADAM==\r\n- You going to the funeral?\r\nBARRY:\r\n- No, I\'m not going to his funeral.\r\n :\r\nEverybody knows,\r\nsting someone, you die.\r\n :\r\nDon\'t waste it on a squirrel.\r\nSuch a hothead.\r\nADAM:\r\nI guess he could have\r\njust gotten out of the way.\r\n(The car does a barrel roll on the loop-shaped bridge and lands on the\r\nhighway)\r\n :\r\nI love this incorporating\r\nan amusement park into our regular day.\r\nBARRY:\r\nI guess that\'s why they say we don\'t need vacations.\r\n(Barry parallel parks the car and together they fly over the graduating\r\nstudents)\r\nBoy, quite a bit of pomp...\r\nunder the circumstances.\r\n(Barry and Adam sit down and put on their hats)\r\n :\r\n- Well, Adam, today we are men.', 'img/mxstery.gif', 0, '2025-02-02 22:14:06', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `password` char(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `reg_date`, `type`) VALUES
(1, 'test1', 'test12', '2025-01-17 16:53:17', 0),
(2, 'test2', 'test21', '2025-01-17 17:22:22', 0),
(11, 'meow', '$2y$10$HZcyfqeB51n8/pVG9koHBe3O6p83xn0hzXteYgplcEgkZPN5SkdtG', '2025-01-17 18:44:57', 0),
(12, '1234', '$2y$10$UEmY.Mss6HFA9rVgK7rFROwxSXlC8PdzmFexMtdxdmYlqX2Xwrrh6', '2025-01-22 20:25:36', 0),
(14, '123', '$2y$10$YBjBmDJWpe5MZu3PswzGR.4E/hj1mvW9BmmOscKnMqb8sxfXhqJJG', '2025-02-06 17:27:29', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
