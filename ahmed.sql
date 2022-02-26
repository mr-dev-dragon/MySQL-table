
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` decimal(50,0) NOT NULL,
  `function` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `date_of_birth`, `department`, `salary`, `function`, `photo`) VALUES
(87, 'ahmed ', 'AOULAD OUMAR', '1993-10-26', '#AIEN', '3000000', 'WEBDEVLOPER', 'https://raw.githubusercontent.com/code-brief/img/main/20200610_212959.jpg'),
(88, 'trump', 'dounl', '2022-02-03', 'president ', '70000', 'president ', 'https://www.theglobeandmail.com/resizer/hNVMjr8hDGdPi6smvp-zWJbX4mI=/1200x0/filters:quality(80):format(webp)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/5HSZVXDII5BRRHH4S6KE4WZ7RE.jpg'),
(93, 'Elon', 'mask', '2009-06-02', 'biasness', '10000000', 'conpany owner', 'https://cdn.vox-cdn.com/thumbor/RBwA33BWcDfnGZpubWFZLLb7hsA=/0x0:3926x3123/1220x813/filters:focal(1649x1248:2277x1876):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70305223/1234657391.0.jpg'),
(94, 'aziz', 'akhanockh', '1999-02-02', 'prisdantdz', '1000', 'r', 'https://static.lematin.ma/files/lematin/images/articles/2021/10/15f905c648ac6c3fc451e5e4ede5d466.jpg'),
(95, 'STIVE', 'jobe', '0034-03-05', 'pre', '5000000', 'sdfg', 'https://s.yimg.com/ny/api/res/1.2/AX5H0MqDU7xaHyAx2lSwRA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTU4Mw--/https://s.yimg.com/uu/api/res/1.2/9j3ZjrbTmUxyQk.Ws.SYPw--~B/aD00NTA7dz00OTQ7YXBwaWQ9eXRhY2h5b24-/https://www.blogcdn.com/www.engadget.com/media/2011/10/steve-jobs.jpg'),
(96, 'mohamed', 'salah', '1999-05-06', 'asdf', '10000', 'player', 'https://img.a.transfermarkt.technology/portrait/header/148455-1546611604.jpg'),
(97, 'miss', 'lion', '1800-12-01', 'rdf', '300000', 'player', 'https://i.skyrock.net/3056/39483056/pics/1732872664.jpg'),
(199, 'ahmed ', 'AOULAD OUMAR', '1993-10-26', '#AIEN', '3000000', 'WEBDEVLOPER', 'https://raw.githubusercontent.com/code-brief/img/main/20200610_212959.jpg'),
(198, 'trump', 'dounl', '2022-02-03', 'president ', '70000', 'president ', 'https://www.theglobeandmail.com/resizer/hNVMjr8hDGdPi6smvp-zWJbX4mI=/1200x0/filters:quality(80):format(webp)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/5HSZVXDII5BRRHH4S6KE4WZ7RE.jpg'),
(938, 'Elon', 'mask', '2009-06-02', 'biasness', '10000000', 'conpany owner', 'https://cdn.vox-cdn.com/thumbor/RBwA33BWcDfnGZpubWFZLLb7hsA=/0x0:3926x3123/1220x813/filters:focal(1649x1248:2277x1876):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70305223/1234657391.0.jpg'),
(875, 'aziz', 'akhanockh', '1999-02-02', 'prisdantdz', '1000', 'r', 'https://static.lematin.ma/files/lematin/images/articles/2021/10/15f905c648ac6c3fc451e5e4ede5d466.jpg'),
(7989, 'STIVE', 'jobe', '0034-03-05', 'pre', '5000000', 'sdfg', 'https://s.yimg.com/ny/api/res/1.2/AX5H0MqDU7xaHyAx2lSwRA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTU4Mw--/https://s.yimg.com/uu/api/res/1.2/9j3ZjrbTmUxyQk.Ws.SYPw--~B/aD00NTA7dz00OTQ7YXBwaWQ9eXRhY2h5b24-/https://www.blogcdn.com/www.engadget.com/media/2011/10/steve-jobs.jpg'),
(778, 'mohamed', 'salah', '1999-05-06', 'asdf', '10000', 'player', 'https://img.a.transfermarkt.technology/portrait/header/148455-1546611604.jpg'),
(975, 'miss', 'lion', '1800-12-01', 'rdf', '300000', 'player', 'https://i.skyrock.net/3056/39483056/pics/1732872664.jpg');


ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;
