-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `newsapp`;
CREATE DATABASE `newsapp` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `newsapp`;

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `imgurl` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL,
  `category` tinytext NOT NULL,
  `source` tinytext NOT NULL,
  `modified_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `title`, `description`, `url`, `imgurl`, `status`, `category`, `source`, `modified_at`, `created_at`) VALUES
(21,	'Self-driving Uber car involved in fatal accident in Arizona',	'An autonomous Uber car struck and killed a woman crossing the street in Tempe, Arizona, police said.',	'http://www.nbcnews.com/tech/innovation/self-driving-uber-car-involved-fatal-accident-arizona-n857941',	'https://media2.s-nbcnews.com/j/newscms/2018_12/2368051/180319-uber-self-driving-car-arizona-se-112p_252c64a0fa352c42f2ae8d9ec019caee.1200;630;7;70;5.jpg',	'published',	'technology',	'NBC News',	'2018-03-19 23:52:12',	'2018-03-19 23:52:12'),
(22,	'Deadly Austin bombings were \'meant to send a message,\' police chief says',	'Austin Police Chief Brian Manley didn\'t say what the message was — but he pleaded with the bomber to \"reach out to us before anyone else is injured or killed.\"',	'http://www.nbcnews.com/news/us-news/deadly-austin-bombings-were-meant-send-message-police-chief-says-n857786',	'https://media3.s-nbcnews.com/j/newscms/2018_11/2359711/180312-austin-bombing-ac-515p_ab914a015c013801a0dca3fd3d67a468.nbcnews-fp-1200-630.jpg',	'draft',	'worldnews',	'NBC News',	'2018-03-19 23:52:34',	'2018-03-19 23:52:34'),
(23,	'JNU sexual harassment case: Students clash with police in Delhi\'s Vasant Kunj',	'A clash between the students of Jawaharlal Nehru University (JNU) and police broke out after a protest march today. T',	'https://www.indiatoday.in/india/story/jnu-sexual-harassment-case-students-clash-with-police-in-vasant-kunj-1192960-2018-03-19',	'https://akm-img-a-in.tosshub.com/indiatoday/images/story/201803/JNU_-_1.jpeg?y86p7qrU4GGFheLsAeHWfiEVWwBe6vsR',	'draft',	'indianews',	'Indiatoday.in',	'2018-03-19 23:53:14',	'2018-03-19 23:53:14'),
(24,	'Kerala MP\'s wife shares #MeToo story, sparks political controversy',	'Kerala MP\'s wife shares #MeToo story, sparks political controversy',	'https://www.indiatoday.in/india/story/kerala-mp-s-wife-shares-metoo-story-sparks-political-controversy-1192786-2018-03-19',	'https://akm-img-a-in.tosshub.com/indiatoday/images/story/201803/JISHA_JOSE.jpeg?_0djxYYvvRBc_.GLH2drqov6KVT_gBow',	'draft',	'indianews',	'Indiatoday.in',	'2018-03-19 23:53:26',	'2018-03-19 23:53:26'),
(25,	'Awesome Thanos & Logan Poster Shared By Infinity War Directors',	'Young Gamora holding Thanos\' hand in the new Avengers: Infinity War trailer has inspired a Logan parody poster—and the Russo Brothers approve. The post Awesome Thanos & Logan Poster Shared By Infinity War Directors appeared first on Screen Rant.',	'https://screenrant.com/avengers-infinity-war-thanos-logan-poster-gamora/',	'https://screenrant.com/wp-content/uploads/2018/03/Thanos-Logan-parody-poster-cropped.jpg',	'draft',	'tvmovies',	'Screenrant.com',	'2018-03-19 23:55:47',	'2018-03-19 23:55:47'),
(26,	'George R.R. Martin’s Nightflyers TV Series Gets a New Showrunner',	'George R.R. Martin\'s Nightflyers TV series has reportedly lost showrunner Daniel Cerone, and will replace him with EP Jeff Buhler. The post George R.R. Martin’s Nightflyers TV Series Gets a New Showrunner appeared first on Screen Rant.',	'https://screenrant.com/george-martin-nightflyers-tv-show-showrunner/',	'https://screenrant.com/wp-content/uploads/2018/03/George-RR-Martin-Nightflyers-book-cover.jpg',	'draft',	'tvmovies',	'Screenrant.com',	'2018-03-19 23:56:07',	'2018-03-19 23:56:07'),
(27,	'Westworld Showrunners Are Calling Season 2 ‘The Door’',	'While Westworld season 1 was called \'The Maze\', the showrunners of the mysterious HBO TV series say season 2 is known as \'The Door\'. The post Westworld Showrunners Are Calling Season 2 ‘The Door’ appeared first on Screen Rant.',	'https://screenrant.com/westworld-season-2-title-door/',	'https://screenrant.com/wp-content/uploads/2018/03/Dolores-and-Teddy-in-Westworld-Season-2.jpeg',	'draft',	'tvmovies',	'Screenrant.com',	'2018-03-19 23:56:17',	'2018-03-19 23:56:17'),
(28,	'15 Actors Who Regretted Being In Marvel Movies',	'Though most actors are excited to take on infamous superhero roles, the on-set experience of Marvel stars isn\'t always the most pleasant.',	'https://screenrant.com/actors-regretted-roles-marvel-movies/',	'https://screenrant.com/wp-content/uploads/2018/03/Gwyneth-Paltrow-Ryan-Reynolds-Andrew-Garfield-.jpg',	'draft',	'tvmovies',	'Screenrant.com',	'2018-03-19 23:56:37',	'2018-03-19 23:56:37'),
(29,	'29 Movie And TV Stars You Didn\'t Realize Are Also Musicians',	'From the big screen to center stage.',	'https://www.buzzfeed.com/michelelbird/movie-and-tv-stars-you-didnt-realize-were-also-musicians',	'https://img.buzzfeed.com/buzzfeed-static/static/2018-03/14/13/enhanced/buzzfeed-prod-web-05/original-24759-1521049909-7.jpg?crop=1198:627;0,0',	'draft',	'tvmovies',	'Buzzfeed',	'2018-03-19 23:57:15',	'2018-03-19 23:57:15'),
(30,	'21 Annoying Movie Clichés That Never Fail To Piss People Off',	'Why does nobody eat the food they order at restaurants?',	'https://www.buzzfeed.com/jasminnahar/movie-cliches-that-seriously-annoy-people',	'https://img.buzzfeed.com/buzzfeed-static/static/2018-03/19/12/campaign_images/buzzfeed-prod-web-02/21-annoying-movie-cliches-that-never-fail-to-piss-2-12705-1521476734-0_dblbig.jpg',	'draft',	'tvmovies',	'Buzzfeed',	'2018-03-19 23:57:30',	'2018-03-19 23:57:30'),
(31,	'18 Unique Jobs You Probably Didn\'t Realize People Actually Get Paid To Do',	'Don\'t quit your day job!',	'https://www.buzzfeed.com/morganmurrell/unique-jobs-around-world-people-get-paid-for',	'https://img.buzzfeed.com/buzzfeed-static/static/2018-03/15/16/enhanced/buzzfeed-prod-web-06/original-28152-1521144567-3.jpg?crop=2113:1106;0,151',	'draft',	'lifestyle',	'Buzzfeed',	'2018-03-19 23:57:45',	'2018-03-19 23:57:45'),
(32,	'Pick Some Food And We\'ll Tell You When You\'ll Get Married',	'I can hear the bells!',	'https://www.buzzfeed.com/gabeh20/pick-some-food-and-well-tell-you-when-youll-get-38t1z',	'https://img.buzzfeed.com/buzzfeed-static/static/2018-03/19/14/tmp/buzzfeed-prod-web-03/3c6896c62d9696865e396896d68e8a5f-1.jpg?crop=624:327;1,85',	'draft',	'recipes',	'Buzzfeed',	'2018-03-19 23:58:01',	'2018-03-19 23:58:01');

-- 2018-03-19 18:43:02
