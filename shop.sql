-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 14. Jan 2016 um 15:06
-- Server Version: 5.5.45-cll
-- PHP-Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `floegguc_shop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C2502824F85E0677` (`username`),
  UNIQUE KEY `UNIQ_C2502824E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `email`, `is_active`) VALUES
(6, 'nalet', '$2y$13$hyPvs0YuD/dfF2MdHA7Kt.51pbX1QSj.uQ24PM0qUZqbfmhSY.TyS', 'nalet@bluewin.ch', 1),
(7, 'florian', '$2y$13$kJljCy4dp7t65c425asGa.8dSoNtSsSvZ2ySj6Dw4eZ4XzbHWigEO', 'flo@flo.ch', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `category_description` text,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(2, 'Test4', 'Dies ist der Test4'),
(3, 'Test5', 'asdfasdf'),
(4, 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_title` varchar(45) DEFAULT NULL,
  `customer_firstname` varchar(45) DEFAULT NULL,
  `customer_lastname` varchar(45) DEFAULT NULL,
  `customer_login` varchar(45) DEFAULT NULL,
  `customer_password` varchar(100) DEFAULT NULL,
  `customer_email` varchar(50) DEFAULT NULL,
  `customer_phone` varchar(45) DEFAULT NULL,
  `customer_address` varchar(45) DEFAULT NULL,
  `customer_zip` varchar(10) DEFAULT NULL,
  `customer_location` varchar(45) DEFAULT NULL,
  `customer_title2` varchar(45) DEFAULT NULL,
  `customer_firstname2` varchar(45) DEFAULT NULL,
  `customer_lastname2` varchar(45) DEFAULT NULL,
  `customer_address2` varchar(45) DEFAULT NULL,
  `customer_zip2` varchar(10) DEFAULT NULL,
  `customer_location2` varchar(45) DEFAULT NULL,
  `customer_billingaddress` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_title`, `customer_firstname`, `customer_lastname`, `customer_login`, `customer_password`, `customer_email`, `customer_phone`, `customer_address`, `customer_zip`, `customer_location`, `customer_title2`, `customer_firstname2`, `customer_lastname2`, `customer_address2`, `customer_zip2`, `customer_location2`, `customer_billingaddress`) VALUES
(1, 'Herr', 'Florian', 'Auderset', 'florian', '3839b5e36b7c8f192bf0563d75431d7b', 'f_auderset@hotmail.com', '+41 79 558 67 00', 'Bösingenfeldstrasse 27', '3178', 'Bösingen', 'Frau', 'Jana', 'Perler', 'Bösingenfeldstrasse 17', '3178', 'Bösingen', 1),
(2, 'Herr', 'Nalet', 'Meinen', 'nalet', '0d1206eb6f1472726b45ae2219f0c5e4', 'nalet@bluewin.ch', '+41 79 123 45 67', 'Bahnhofstrasse 2', '3084', 'Wabern', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 'Herr', 'Hans', 'Mustermann', 'hans', '59b15fe4b454789f7bd7b4d6292f4855', 'hans.muster@mustermann.ch', '+41 79 333 22 55', 'Am Weg 2', '1234', 'Musterstadt', 'Frau', 'Frieda', 'Mustermann', 'Am Weg2', '1234', 'Musterstadt', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `nicename` varchar(45) DEFAULT NULL,
  `content` text,
  `lang` varchar(5) DEFAULT NULL,
  `inmenu` tinyint(1) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `hidden` tinyint(1) DEFAULT NULL,
  `translof` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `nicename`, `content`, `lang`, `inmenu`, `pos`, `hidden`, `translof`, `parent`) VALUES
(1, 'Über uns', 'ueberuns', '<p>Zalando bietet seinen Kundinnen und Kunden mehr als nur Schuhe!\r\nZalando steht für ein umfassendes Shoppingerlebnis. Unser Ziel ist\r\nes, unseren Kunden und Kundinnen ein breit gefächertes Sortiment\r\ntopaktueller Schuhe und Modeartikel mit einem exzellenten\r\nKundenservice und den Vorteilen des unkomplizierten und sicheren\r\nOnline-Shoppings erlebbar zu machen.</p>\r\n<h2 class="noBorder noMargin">Leichte Navigation und intuitive Bedienung</h2>\r\n<p>Unser Online-Shop ist übersichtlich gestaltet und einfach zu\r\nbedienen. Beim ersten Besuch der Startseite oder bei der Suche nach\r\neinem speziellen Modell: Unsere Kunden und Kundinnen werden bequem\r\ndurch den Shop geführt, um Ihren Einkauf schnell und leicht\r\nabschließen zu können.</p>\r\n<h2 class="noBorder noMargin">Unkompliziert und sicher einkaufen</h2>\r\n<p>Liegen die gewünschten Artikel im Warenkorb, können unsere\r\nKunden zwischen verschiedenen, sicheren Zahlungsoptionen auswählen.\r\nDie Bezahlung kann einfach per Rechnung, Vorkasse oder Kreditkarte erfolgen. Nach erfolgreicher Bestellung\r\nwerden unsere Kunden detailliert über den aktuellen Status ihrer\r\nBestellung informiert. So erhält jeder Kunde eine Sendungsnummer,\r\nmit der er den Versand seines Pakets bis an die eigene Haustür\r\nverfolgen kann.</p>\r\n<h2 class="noBorder noMargin">Schneller Versand</h2>\r\n<p>Unsere Kunden nennen es "Blitzversand" – denn wir versenden\r\nBestellungen in der Regel noch am selben Tag!</p>\r\n<h2 class="noBorder noMargin">Kostenloser Versand &amp; kostenlose Rückgabe</h2>\r\n<p>Bei Zalando zahlt der Kunde für den Versand seiner Bestellung\r\nkeinen Cent! Anders als bei anderen Online-Shops, gibt es bei\r\nZalando keine Mindestbestellwerte. Ob ein Schuh 9€ oder 99€ kostet,\r\nspielt für uns keine Rolle - der Versand ist immer kostenfrei!</p>\r\n<p>Schuhe und Bekleidung fallen unterschiedlich aus – dass z.B. ein\r\nSchuh einmal nicht passt oder doch nicht gefällt, ist für uns ganz\r\nselbstverständlich! Aus diesem Grunde gibt es bei Zalando den\r\nkostenlosen Rückversand. Kunden können ihre bestellten Artikel\r\nvöllig kostenlos umtauschen oder zurückgeben, bis sie das perfekte\r\nPaar gefunden haben!</p>\r\n<h2 class="noBorder noMargin">Umfassender und persönlicher Service</h2>\r\n<p>Unsere Kunden und Kundinnen können sich über eine kostenlose\r\nHotline oder unseren Servicechat rund um das Thema "Schuhe und\r\nMode" informieren und ihre Fragen an kompetente Kundenbetreuer\r\nrichten. Unseren Kunden steht damit ein umfassendes Serviceangebot\r\nzur Verfügung – persönlich, kompetent und ohne lange\r\nWarteschleifen.</p>\r\n<h2 class="noBorder noMargin">Produktsortiment</h2>\r\n<p>Bei Zalando finden Kunden neben großen internationalen Marken\r\nwie Boss Orange, Guess, Geox oder Timberland auch exklusive\r\nFashion-Labels wie Apepazza, Latitude Femme oder Beverly Feldman,\r\ndie im Einzelhandel oft nur schwer zu finden sind.</p>', 'de_DE', 1, 3, 0, 1, 0),
(2, 'About us', 'about', '<p>Clothes, accessories, sports items… At Zalando we’re no longer solely about shoes! We offer an extensive product selection, excellent customer service and an easy and secure online shopping experience.</p>\r\n<h4>Browse in Style</h4>\r\n<p>We’ve worked hard to make sure that our online store is as easy to navigate as possible. Use our drop down menus to filter your results or simply enter a search term if you’re looking for something specific.</p>\r\n<h4>Simple &amp; Secure Shopping</h4>\r\n<p>So now that you’ve added your chosen items to your virtual shopping bag, the only thing left to do is decide how you wish to pay for your purchases. Debit and credit cards as well as PayPal are all accepted forms of payment.</p>\r\n<p>Once your order has been received we will send you a confirmation email, which acts as proof of purchase. You’ll receive a further email when you order is on its way. This email contains a tracking number, which you may use to check the status of your order should you so wish.</p>\r\n<h4>Free Delivery &amp; Free Returns</h4>\r\n<p>When you place an order online at Zalando, you can rest assured that you won’t have to pay a penny extra for delivery. It really is completely free, regardless of the total cost of your order. Whether you spend £9 or £99, the delivery costs are on us. And that’s a promise.</p>\r\n<p>It is also free to send any unwanted purchases back to us, as long you send the item(s) back to the Zalando warehouse within 100 days of placing your order. No catches. Just free delivery and free returns.</p>\r\n<h4>Customer Service</h4>\r\n<p>If you would like to speak to a member of our Customer Service Team, simply give us a call on 0800 472 5995. It’s free to call from any UK landline and lines are open from 8am until 8pm, Monday to Friday. Alternatively you can send us an email at <a href="mailto: service@zalando.co.uk">service@zalando.co.uk</a></p>\r\n<h4>Product Range</h4>\r\n<p>Discover big name brands such as Guess, Timberland and Vero Moda online at Zalando.co.uk. Exclusive fashion labels like Apepazza and Latitude Femme, which are often hard to get your hands on, also feature in our online shop.</p>', 'en_EN', 1, 3, 0, 1, 0),
(3, 'À propos', 'apropos', '<p>\r\nZalando.ch est une vaste boutique en ligne teintée d''originalité et un brin visionnaire. Ses marques traditionnelles répondent à un courant de mode très actuel tandis que de nouvelles griffes audacieuses et novatrices font régulièrement leur apparition. Cet alliage des genres permet de vous offrir un large choix de modèles - du classique au plus inédit. Le site s''adresse aux femmes aussi bien qu''aux hommes et propose également une gamme spéciale pour les enfants. De la chaussure au textile, de la nuisette à la tenue de soirée, Zalando.ch vous propose un choix étendu de produits adaptés à tous les moments de la journée !\r\n</p>\r\n<h2 class="noBorder noMargin">Le plaisir de faire les boutiques... en ligne</h2>\r\n<p>\r\nPratique et intuitive, notre boutique en ligne est accessible à tous les internautes, simples visiteurs ou clients aguerris. Nous mettons tout en œuvre pour que chacun s''y retrouve et prenne du plaisir à naviguer d''une marque à une autre. De la présentation produit jusqu''à la commande, vous êtes guidés et chaque étape est facilitée.\r\n</p>\r\n<h2 class="noBorder noMargin">Un paiement sécurisé</h2>\r\n<p>\r\nUne fois votre panier rempli, vous choisissez parmi différents moyens de paiement sécurisés : carte bancaire (Visa, Mastercard, American Express) et PayPal. La commande passée, vous êtes informé(e) en détail sur son état d''avancement. Vous recevez alors un numéro pour suivre le processus de livraison, de l’envoi jusqu''à la réception.\r\n</p>\r\n<h2 class="noBorder noMargin">Envoi express</h2>\r\n<p>Chez <a href="https://www.zalando.ch/">Zalando.ch</a> les commandes passées avant 15h sont expédiées le jour même !</p>\r\n<h2 class="noBorder noMargin">Des frais d’envoi et de retour gratuits</h2>\r\n<p>Chez Zalando vous ne payez pas un centime vos frais de port ! Contrairement à d’autres boutiques en ligne, il n’y a pas de montant minimum de commande. Que votre panier soit de 9€ ou de 99€, les frais de port sont toujours gratuits ! Au plus près de vous, chez Zalando.fr nous comprenons et acceptons les causes de retour d''un article : erreur dans le choix du produit, dans la taille, dans les coloris etc. C''est pourquoi nous prenons à notre charge les frais de retours. Vous avez la possibilité de renvoyer vos articles sans aucune taxe supplémentaire pendant 30 jours, jusqu’à ce que vous trouviez chaussure à votre pied !</p>\r\n<h2 class="noBorder noMargin">Un service complet et personnalisé</h2>\r\n<p>\r\nRéactive et attentive à tout type de demande, l''équipe de Zalando se tient à votre disposition grâce à la hotline gratuite. Dans le respect de notre clientèle, nous traitons chaque demande avec le plus grand soin, de façon personnalisée et dans des délais raisonnables.\r\n</p>\r\n<h2 class="noBorder noMargin">Une gamme de produits hétérogène !</h2>\r\n<p>Chez Zalando on peut trouver de grandes marques internationales telles que Camper, Clarks, Adidas ou Converse ainsi que des marques de modes plus exclusives comme Palladium ou encore HUB, ce qui en fait un lieu insolite, une référence en matière de style pour toutes les shoppeuses invétérées aussi bien que pour les amateurs de grandes marques, en quête de singularité.</p>', 'fr_FR', 1, 3, 0, 1, 0),
(4, 'Credo', 'credo', 'Dies ist unser Motto, wie spielen nicht im Lotto', 'de_DE', 1, 9, 0, 4, 0),
(5, 'Versand', 'versand', 'Bei uns wird rein gar nichts versandt! Daher können wir unseren Kunden kostenlosen Versand anbieten.<br /><br />\r\nFreundliche Grüsse<br />\r\n<strong>Ihr MYShop-Team</strong>', 'de_DE', 1, 2, 0, 5, 0),
(6, 'Envoi', 'envoi', 'Chéz nous, absolument rien sera envoyé! Par conséquent nous pouvons offrir la livraison gratuite à tous nos clients. <br /> <br />\r\nCordialement <br />\r\n<strong>Votre équipe Myshop</strong>', 'fr_FR', 1, 2, 0, 5, 0),
(7, 'Shipping', 'shipping', 'Bei uns wird rein gar nichts versandt! Daher können wir unseren Kunden kostenlosen Versand anbieten.<br /><br />\r\nFreundliche Grüsse<br />\r\nIhr MYShop-Team', 'en_EN', 1, 2, 0, 5, 0),
(8, 'Credo', 'credoen', 'Our Motto, winning ims lotto', 'en_EN', 1, 9, 0, 4, 0),
(9, 'Credo', 'credofr', 'Notre credo, est credo lotto garçon!', 'fr_FR', 1, 9, 0, 4, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_number` varchar(45) NOT NULL,
  `product_name1` varchar(45) NOT NULL,
  `product_name2` varchar(45) DEFAULT NULL,
  `product_nicename` varchar(45) NOT NULL,
  `product_price1` varchar(45) NOT NULL,
  `product_price2` varchar(45) DEFAULT NULL,
  `product_category` varchar(45) NOT NULL,
  `product_description` text,
  `product_details` text,
  `product_features` text,
  `product_images` text,
  `product_options` text,
  `product_brand` varchar(45) NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  `translof` int(11) NOT NULL,
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`product_id`, `product_number`, `product_name1`, `product_name2`, `product_nicename`, `product_price1`, `product_price2`, `product_category`, `product_description`, `product_details`, `product_features`, `product_images`, `product_options`, `product_brand`, `hidden`, `translof`, `lang`) VALUES
(1, '10001', 'Nike Roshe Run', 'JUST DO IT!', 'nike-roshe-run', '95.00', '90.00', '1', 'Der Nike Roshe Run wurde durch die Praxis der Meditation und das Konzept des Zen inspiriert und verkörpert Schlichtheit. Kein unnötiger Schnickschnack, nur die grundlegenden Elemente eines Schuhs, die mit jedem Detail zum Ausdruck kommen. Fast jeder Teil des Schuhs steht für einen Aspekt eines friedlichen Zengartens: Mit einer modifizierten Waffelaußensohle, die die Trittsteine symbolisiert, einer Innensohle, die einen geharkten Steingarten widerspiegelt und der leicht veränderte Seitenlänge der Mittelsohle vereint dieser Schuh Seriosität und Verspieltheit.', 'Der Nike Roshe Run Herrenschuh verfügt über ein durchgehendes Mesh-Obermaterial und eine eingespritzte Mittelsohle, die für Atmungsaktivität und federleichten Aufprallschutz sorgen. Der vielseitige Schuh kann mit oder ohne Socken getragen werden, für eleganten oder legeren Style beim Gehen oder Entspannen.', '<ul>\r\n<li>Mesh-Obermaterial für hervorragende Atmungsaktivität</li>\r\n<li>Durchgehende IU-Mittelsohle für leichte Dämpfung</li>\r\n<li>Solarsoft-Einlegesohle für erstklassigen Tragekomfort</li>\r\n<li>Gepolsterter Schuhkragen für Knöchelschutz</li>\r\n<li>IU-Außensohle mit Waffel-Muster für Traktion</li>\r\n</ul>', '{"thumb":"nike-roshe-run.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '1', 0, 1, 'de_DE'),
(2, '10002', 'Line Link 67009', NULL, 'line-link-67009', '70.00', '65.00', '1', 'asdf', 'asdf', 'asdf', '{"thumb":"line-link-67009.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '2', 0, 2, 'de_DE'),
(3, '10003', 'Minimus Zero', NULL, 'minimus-zero', '100.00', '98.00', '2', NULL, NULL, NULL, '{"thumb":"minimus-zero.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '3', 0, 3, 'de_DE'),
(4, '10004', 'Athletic Shoe', NULL, 'athletic-shoe', '120.00', '110.00', '2', NULL, NULL, NULL, '{"thumb":"athletic-shoe.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '4', 0, 4, 'de_DE'),
(5, '10005', 'Veronique\n\n', NULL, 'veronique', '99.00', '90.00', '2', NULL, NULL, NULL, '{"thumb":"veronique.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[36,37,38]}', '5', 0, 5, 'de_DE'),
(6, '10006', 'Suede Boots', NULL, 'suede-boots', '85.00', '80.00', '3', NULL, NULL, NULL, '{"thumb":"suede-boots.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '6', 0, 6, 'de_DE'),
(7, '10007', 'Barricade 6.0', NULL, 'barricade-6', '60.00', '50.00', '3', NULL, NULL, NULL, '{"thumb":"barricade-6-0.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '7', 0, 7, 'de_DE'),
(8, '10008', 'Cotu Classic', NULL, 'cotu-classic', '90.00', '85.00', '3', NULL, NULL, NULL, '{"thumb":"cotu-classic.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '1', 0, 8, 'de_DE'),
(12, '10009', 'Performance POWERLIFT 2.0', 'Trainings- / Fitnessschuh', 'performance-powerlift-2', '150.00', '105.00', '1', 'Wenn du beim Stemmen Kraft brauchst, achte vor allem auf eine gute Grundlage. Dieser Powerlift 2.0 Schuh für Männer eignet sich mit seiner breiten, festen Basis und der hoch dichten Zwischensohle ideal für die Anforderungen des Wettkampf-Gewichthebens. Eine leichtes Obermaterial aus Mesh sorgt für Kühle und ein Kraftband über den Schnürsenkeln für festen Halt.', 'Wenn du beim Stemmen Kraft brauchst, achte vor allem auf eine gute Grundlage. Dieser Powerlift 2.0 Schuh für Männer eignet sich mit seiner breiten, festen Basis und der hoch dichten Zwischensohle ideal für die Anforderungen des Wettkampf-Gewichthebens. Eine leichtes Obermaterial aus Mesh sorgt für Kühle und ein Kraftband über den Schnürsenkeln für festen Halt.', 'Wenn du beim Stemmen Kraft brauchst, achte vor allem auf eine gute Grundlage. Dieser Powerlift 2.0 Schuh für Männer eignet sich mit seiner breiten, festen Basis und der hoch dichten Zwischensohle ideal für die Anforderungen des Wettkampf-Gewichthebens. Eine leichtes Obermaterial aus Mesh sorgt für Kühle und ein Kraftband über den Schnürsenkeln für festen Halt.', '{"thumb":"powerlift.jpg", "images": [ "performance-power-2_0", "performance-power-2_1", "performance-power-2_2", "performance-power-2_3"]}', '{"size": [ 42, 43 , 44, 45]}', '6', 0, 12, 'de_DE'),
(13, '10009', 'Performance POWERLIFT 2.0', 'Trainings- / Fitnessschuh', 'performance-powerlift-2-fr', '150.00', '105.00', '1', 'Avant de mettre tout ta puissance dans ton lever, assure-toi de disposer d''une bonne base. La chaussure Powerlift 2.0 hommes offre une base large et solide ainsi qu''une semelle intercalaire à haute densité pour répondre aux exigences de l''haltérophilie. Sa tige légère en mesh apporte de la fraîcheur tandis que sa puissante sangle par-dessus les lacets assure un maintien ferme du pied.', 'Avant de mettre tout ta puissance dans ton lever, assure-toi de disposer d''une bonne base. La chaussure Powerlift 2.0 hommes offre une base large et solide ainsi qu''une semelle intercalaire à haute densité pour répondre aux exigences de l''haltérophilie. Sa tige légère en mesh apporte de la fraîcheur tandis que sa puissante sangle par-dessus les lacets assure un maintien ferme du pied.', 'Avant de mettre tout ta puissance dans ton lever, assure-toi de disposer d''une bonne base. La chaussure Powerlift 2.0 hommes offre une base large et solide ainsi qu''une semelle intercalaire à haute densité pour répondre aux exigences de l''haltérophilie. Sa tige légère en mesh apporte de la fraîcheur tandis que sa puissante sangle par-dessus les lacets assure un maintien ferme du pied.', '{"thumb":"powerlift.jpg", "images": [ "performance-power-2_0", "performance-power-2_1", "performance-power-2_2", "performance-power-2_3"]}', '{"size": [ 42, 43 , 44, 45]}', '6', 0, 12, 'fr_FR'),
(14, '10009', 'Performance POWERLIFT 2.0', 'Trainings- / Fitnessschuh', 'performance-powerlift-2-en', '150.00', '105.00', '1', 'The number one thing a weightlifting shoe needs is stability, so the men''s Powerlift 2.0 is made with a wide, solid base and a high-density midsole. A light mesh upper and an instep strap over the laces give you lockdown support.', 'The number one thing a weightlifting shoe needs is stability, so the men''s Powerlift 2.0 is made with a wide, solid base and a high-density midsole. A light mesh upper and an instep strap over the laces give you lockdown support.', 'The number one thing a weightlifting shoe needs is stability, so the men''s Powerlift 2.0 is made with a wide, solid base and a high-density midsole. A light mesh upper and an instep strap over the laces give you lockdown support.', '{"thumb":"powerlift.jpg", "images": [ "performance-power-2_0", "performance-power-2_1", "performance-power-2_2", "performance-power-2_3"]}', '{"size": [ 42, 43 , 44, 45]}', '6', 0, 12, 'en_EN'),
(15, '20001', 'Nike Roshe Run New Version!', 'JUST DO IT!', 'nike-roshe-new-version', '95.00', '45.00', '1', 'Der Nike Roshe Run wurde durch die Praxis der Meditation und das Konzept des Zen inspiriert und verkörpert Schlichtheit. Kein unnötiger Schnickschnack, nur die grundlegenden Elemente eines Schuhs, die mit jedem Detail zum Ausdruck kommen. Fast jeder Teil des Schuhs steht für einen Aspekt eines friedlichen Zengartens: Mit einer modifizierten Waffelaußensohle, die die Trittsteine symbolisiert, einer Innensohle, die einen geharkten Steingarten widerspiegelt und der leicht veränderte Seitenlänge der Mittelsohle vereint dieser Schuh Seriosität und Verspieltheit.', 'Der Nike Roshe Run Herrenschuh verfügt über ein durchgehendes Mesh-Obermaterial und eine eingespritzte Mittelsohle, die für Atmungsaktivität und federleichten Aufprallschutz sorgen. Der vielseitige Schuh kann mit oder ohne Socken getragen werden, für eleganten oder legeren Style beim Gehen oder Entspannen.', '<ul>\r\n<li>Mesh-Obermaterial für hervorragende Atmungsaktivität</li>\r\n<li>Durchgehende IU-Mittelsohle für leichte Dämpfung</li>\r\n<li>Solarsoft-Einlegesohle für erstklassigen Tragekomfort</li>\r\n<li>Gepolsterter Schuhkragen für Knöchelschutz</li>\r\n<li>IU-Außensohle mit Waffel-Muster für Traktion</li>\r\n</ul>', '{"thumb":"nike-roshe-run.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '1', 0, 15, 'de_DE'),
(16, '20001', 'Nike Roshe Run New Version!', 'JUST DO IT!', 'nike-roshe-run-new-version-en', '95.00', '45.00', '1', 'The Nike Roshe Run has been inspired by the practice of meditation and the concept of Zen and embodies simplicity. No unnecessary frills, just the basic elements of a shoe that come with every detail reflected. Almost every part of the shoe represents an aspect of a peaceful zen garden: With a modified Waffle outsole, which symbolizes the stepping stones, an insole, which reflects a raked rock garden and the slightly different side length of the midsole combines this shoe seriousness and playfulness.', 'The Nike Roshe Run men''s shoe has a continuous mesh upper and injected midsole that ensure breathability and lightweight impact protection. The versatile shoe can be worn with or without socks, for elegant or casual style when walking or relaxing.', '<ul>\r\n<li>Mesh-Obermaterial für hervorragende Atmungsaktivität</li>\r\n<li>Durchgehende IU-Mittelsohle für leichte Dämpfung</li>\r\n<li>Solarsoft-Einlegesohle für erstklassigen Tragekomfort</li>\r\n<li>Gepolsterter Schuhkragen für Knöchelschutz</li>\r\n<li>IU-Außensohle mit Waffel-Muster für Traktion</li>\r\n</ul>', '{"thumb":"nike-roshe-run.jpg", "images": [ "dummy_0", "dummy_1", "dummy_2", "dummy_3"]}', '{"size":[41,44,45]}', '1', 0, 15, 'en_EN');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product_brand`
--

CREATE TABLE IF NOT EXISTS `product_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(45) NOT NULL,
  `brand_nicename` varchar(45) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `product_brand`
--

INSERT INTO `product_brand` (`brand_id`, `brand_name`, `brand_nicename`) VALUES
(1, 'Nike', 'nike'),
(2, 'Camper', 'camper'),
(3, 'New Balance', 'new-balance'),
(4, 'Converse', 'converse'),
(5, 'Puma', 'puma'),
(6, 'Adidas', 'adidas'),
(7, 'Superga', 'superga'),
(8, 'Nalet', 'nalet');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(45) DEFAULT NULL,
  `order_products` text,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Daten für Tabelle `product_order`
--

INSERT INTO `product_order` (`order_id`, `customer_id`, `order_products`, `order_date`) VALUES
(6, '1', '[["10007","1","41"],["10004","2","45"]]', '2016-01-14 13:25:38'),
(7, '1', '[["10001","1","41"]]', '2016-01-14 13:31:58'),
(8, '1', '[["10001","1","41"]]', '2016-01-14 13:32:18'),
(9, '1', '[]', '2016-01-14 13:33:08'),
(10, '1', '[["10003","1","41"]]', '2016-01-14 13:33:39'),
(11, '1', '[["10003","1","41"]]', '2016-01-14 13:35:02'),
(12, '1', '[["10001","4","41"]]', '2016-01-14 13:35:17'),
(13, '1', '[]', '2016-01-14 13:42:43'),
(14, '1', '[]', '2016-01-14 13:43:28'),
(15, '1', '[["10009","1","42"]]', '2016-01-14 13:50:43');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product_stock`
--

CREATE TABLE IF NOT EXISTS `product_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_number` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20003 ;

--
-- Daten für Tabelle `product_stock`
--

INSERT INTO `product_stock` (`stock_id`, `product_number`, `stock`) VALUES
(22, 10001, 3),
(23, 10002, 0),
(24, 10003, 56),
(25, 10004, 56),
(26, 10005, 78),
(27, 10006, 34),
(28, 10007, 78),
(31, 10008, 34),
(32, 10009, 15),
(20002, 20001, 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `salts`
--

CREATE TABLE IF NOT EXISTS `salts` (
  `salt_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `salt` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`salt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `salts`
--

INSERT INTO `salts` (`salt_id`, `customer_id`, `salt`) VALUES
(1, 1, '1ca250540cc48a75'),
(2, 2, 'ed5c1c95117965bda11aa48cf85a374b'),
(3, 3, '6c410f4b33257a39529d391342701cf5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
