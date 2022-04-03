-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 09:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echo`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(5) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `korisnicko_ime` varchar(20) NOT NULL,
  `sifra` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `korisnicko_ime`, `sifra`, `email`, `admin`) VALUES
(1, 'Aleksa', 'Milic', 'AleksaM', 'Milic1', 'aleksamilickv@gmail.com', 1),
(2, 'Stefan', 'Milanovic', 'StefanM', 'Milanovic1', 'stefan03milanovic@gmail.com', 1),
(3, 'Mihajlo', 'Milojevic', 'MihajloM', 'Mihajlo1', 'milojevicm374@gmail.com', 1),
(4, 'Ana', 'Lukovic', 'LukovicA', 'Lukovic1', 'alukovic2004@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lajkovi`
--

CREATE TABLE `lajkovi` (
  `id_korisnika` int(5) NOT NULL,
  `id_objave` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lajkovi`
--

INSERT INTO `lajkovi` (`id_korisnika`, `id_objave`) VALUES
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `objave`
--

CREATE TABLE `objave` (
  `id` int(5) NOT NULL,
  `naslov` varchar(35) NOT NULL,
  `sadrzaj` varchar(700) NOT NULL,
  `slika` varchar(30) NOT NULL,
  `datum_kreiranja` varchar(30) NOT NULL,
  `id_kor` int(5) NOT NULL,
  `br_lajkova` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objave`
--

INSERT INTO `objave` (`id`, `naslov`, `sadrzaj`, `slika`, `datum_kreiranja`, `id_kor`, `br_lajkova`) VALUES
(1, 'Shock new', 'Man loses 56 pounds after eating only McDonalds for six months. He makes nutritionists frown, but a man who ate all of his meals at McDonalds for six months says hes lighter and healthier as he nears the end of his unconventional weight-loss plan.', 'objava1.jpg', '2021-12-01', 1, 0),
(2, 'The 16/8 method', 'The 16/8 method involves fasting every day for about 16 hours and restricting your daily eating window to approximately 8 hours.Within the eating window, you can fit in two, three, or more meals.This method is also known as the Leangains protocol and was popularized by fitness expert Martin Berkhan.Doing this method of fasting can actually be as simple as not eating anything after dinner and skipping breakfast.For example, if you finish your last meal at 8 p.m. and don’t eat until noon the next ', 'objava2.jpg', '2021-12-01', 1, 0),
(3, 'Eat Stop Eat', 'Eat Stop Eat involves a 24-hour fast once or twice per week.This method was popularized by fitness expert Brad Pilon and has been quite popular for a few years.Fasting from dinner one day to dinner the next day amounts to a full 24-hour fast.For example, if you finish dinner at 7 p.m. Monday and don’t eat until dinner at 7 p.m. Tuesday, you’ve completed a full 24-hour fast. You can also fast from breakfast to breakfast or lunch to lunch — the end result is the same.Water, coffee, and other zero-', 'objava3.jpg', '2021-12-01', 1, 1),
(4, 'The Warrior Diet', 'The Warrior Diet was popularized by fitness expert Ori Hofmekler.It involves eating small amounts of raw fruits and vegetables during the day and eating one huge meal at night.Basically, you fast all day and feast at night within a 4-hour eating window.The Warrior Diet was one of the first popular diets to include a form of intermittent fasting.This diet’s food choices are quite similar to those of the paleo diet — mostly whole, unprocessed foods.', 'objava4.jpg', '2021-12-01', 1, 1),
(5, 'World Food Day', 'World Food Day is an international day celebrated every year worldwide on 16 October to commemorate the date of the founding of the United Nations Food and Agriculture Organization in 1945. The day is celebrated widely by many other organizations concerned with hunger and food security, including the World Food Programme, the World Health Organization and the International Fund for Agricultural Development. WFP received the Nobel Prize in Peace for 2020 for their efforts to combat hunger, contri', 'objava5.jpg', '2021-12-01', 1, 0),
(7, 'Not all oranges are orange', 'In sub-tropical growing regions (like Brazil, the country that grows the most oranges in the world) there are never temperatures cold enough to break down the chlorophyll in the fruits skin, which means it may still be yellow or green even when its ripe. But because American consumers cant fathom such a phenomenon, imported oranges get treated with ethylene gas to get rid of the chlorophyll and turn them orange.This also means that Florida oranges tend to be yellower than California oranges, because theyre grown further south', 'objava7.jpg', '2021-12-01', 1, 0),
(8, 'Most commercial fruits are clones', 'Which, when you actually look at supermarket displays of perfectly identical apples and oranges and peaches, isnt that shocking. Producers want specific varieties of fruit, called cultivars (say, Fuji apples or Bosc pears) to remain perfectly consistent, without all the unpredictable genetic mutations you get with old-fashioned sexual reproduction (pollinating flowers, planting seeds, and seeing what the heck comes up).', 'objava8.jpg', '2021-12-01', 1, 0),
(9, 'Cranberries dont grow underwater', 'Despite what you might imagine based on those Ocean Spray commercials, its only at harvest time that sandy cranberry bogs are artificially flooded with water. Cranberries have air pockets inside that let them float, which makes them easy to pick en masse.\r\n\r\nBut thats only for berries that are destined to be juice, jelly, Craisins, etc. Whole fresh cranberries — the kind you buy in bags at Thanksgiving — are never flooded, instead getting dry-harvested by picking machines that comb the berries out.', 'objava9.jpg', '2021-12-01', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recepti`
--

CREATE TABLE `recepti` (
  `id` int(5) NOT NULL,
  `naziv` varchar(35) NOT NULL,
  `priprema` varchar(700) NOT NULL,
  `sastojci` varchar(700) NOT NULL,
  `id_kor` int(5) NOT NULL,
  `slika` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recepti`
--

INSERT INTO `recepti` (`id`, `naziv`, `priprema`, `sastojci`, `id_kor`, `slika`) VALUES
(4, 'Buttermilk Chicken', 'Place the buttermilk, thyme, garlic and salt in a large bowl or shallow dish. Add chicken and turn to coat. Refrigerate 8 hours or overnight, turning occasionally.\r\nDrain chicken, discarding marinade. Grill, covered, over medium heat until a thermometer reads 165°, 5-7 minutes per side.', '1-1/2 cups buttermilk\r\n4 fresh thyme sprigs\r\n4 garlic cloves, halved\r\n1/2 teaspoon salt\r\n12 boneless skinless chicken breast halves (about 4-1/2 pounds)', 1, 'recept4.jpg'),
(5, 'Salad', 'In a large bowl, combine first 4 ingredients. Add dressing; toss to coat.', '1 small bunch kale (about 8 ounces), stemmed and thinly sliced (about 6 cups)\r\n1/2 pound fresh Brussels sprouts, thinly sliced (about 3 cups)\r\n1/2 cup pistachios, coarsely chopped\r\n1/2 cup honey mustard salad dressing\r\n1/4 cup shredded Parmesan cheese', 1, 'recept5.jpg'),
(6, 'Spicy Plum Salmon', 'Coarsely chop 2 plums; place in a small saucepan. Add water; bring to a boil. Reduce heat; simmer, uncovered, 10-15 minutes or until plums are softened and liquid is almost evaporated. Cool slightly. Transfer to a food processor; add ketchup, chipotle, sugar and oil. Process until pureed. Reserve 3/4 cup sauce for serving.\r\nSprinkle salmon with salt; place on a greased grill rack, skin side up. Grill, covered, over medium heat until fish just begins to flake easily with a fork, about 10 minutes, brushing with remaining sauce during last 3 minutes. Slice remaining plums. Serve salmon with plum slices and reserved sauce.', '5 medium plums, divided\r\n1/2 cup water\r\n2 tablespoons ketchup\r\n1 chipotle pepper in adobo sauce, finely chopped\r\n1 tablespoon sugar\r\n1 tablespoon olive oil\r\n6 salmon fillets (6 ounces each)\r\n3/4 teaspoon salt', 1, 'recept6.jpg'),
(7, 'Jicama Citrus Salad', 'Combine all ingredients; refrigerate until serving.', '8 tangerines, peeled, quartered and sliced\r\n1 pound medium jicama, peeled and cubed\r\n2 shallots, thinly sliced\r\n2 tablespoons lemon or lime juice\r\n1/4 cup chopped fresh cilantro\r\n1/2 teaspoon salt\r\n1/2 teaspoon pepper', 1, 'recept7.jpg'),
(8, 'Crab Phyllo Cups', 'In a small bowl, mix cream cheese and seafood seasoning; gently stir in crab. Spoon 2 teaspoons crab mixture into each tart shell; top with chili sauce.', '1/2 cup reduced-fat spreadable garden vegetable cream cheese\r\n1/2 teaspoon seafood seasoning\r\n3/4 cup lump crabmeat, drained\r\n2 packages (1.9 ounces each) frozen miniature phyllo tart shells\r\n5 tablespoons chili sauce', 1, 'recept8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`,`korisnicko_ime`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lajkovi`
--
ALTER TABLE `lajkovi`
  ADD PRIMARY KEY (`id_korisnika`,`id_objave`);

--
-- Indexes for table `objave`
--
ALTER TABLE `objave`
  ADD PRIMARY KEY (`id`),
  ADD KEY `k_ime` (`id_kor`),
  ADD KEY `id_kor` (`id_kor`);

--
-- Indexes for table `recepti`
--
ALTER TABLE `recepti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `k_ime` (`id_kor`),
  ADD KEY `id_kor` (`id_kor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `objave`
--
ALTER TABLE `objave`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recepti`
--
ALTER TABLE `recepti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `objave`
--
ALTER TABLE `objave`
  ADD CONSTRAINT `objave_ibfk_1` FOREIGN KEY (`id_kor`) REFERENCES `korisnici` (`id`);

--
-- Constraints for table `recepti`
--
ALTER TABLE `recepti`
  ADD CONSTRAINT `recepti_ibfk_1` FOREIGN KEY (`id_kor`) REFERENCES `korisnici` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
