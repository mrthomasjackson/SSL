-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2014 at 08:56 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpexport`
--
-- CREATE DATABASE IF NOT EXISTS `phpexport` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
-- USE `phpexport`;

-- --------------------------------------------------------

--
-- Table structure for table `arrangements`
--

CREATE TABLE IF NOT EXISTS `arrangements` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `alt` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `arrangements`
--

INSERT INTO `arrangements` (`id`, `image`, `alt`, `title`, `price`, `description`) VALUES
(1, '200_arrangement_yellow_tulip.gif', 'Yellow Tulips', 'Burst of Yellow', '19.95', '<p>This simple, yet stunning arrangement brims with exuberance. Yellow tulips in a contrasting container.</p>\r\n<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar arcu pulvinar, dictum turpis vel, semper risus. Curabitur ac augue et felis tempor molestie. Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui. Aenean non rhoncus nisi. Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat. Sed volutpat felis eget enim laoreet, ac porttitor eros interdum.</p>'),
(2, '200_arrangement_163066655.jpg', 'Mixed Mums', 'Polka Dot Pail', '25.95', '<p>Mum''s the word. She''ll go dotty over this arrangement of mixed crysanthemums in a rad pail with white polka dots.</p>\n<p>\n<p>Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit. Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu.</p>\n<p>Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque.</p>'),
(3, '200_tulips_daffodils_139756476.jpg', 'Mixed Tulips', 'Green Thumb', '22.95', '<p>You can tell spring''s in the air when the daffodils and tulips are in full bloom. Blow away your winter blues with this fresh arrangement.</p>\r\n<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar arcu pulvinar, dictum turpis vel, semper risus. Curabitur ac augue et felis tempor molestie. Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui. Aenean non rhoncus nisi.</p>'),
(4, '200_bouquet_watering_can_orange_163066621.png', 'Watering Can with Mums', 'It''s Raining Flowers', '19.95', '<p>April showers or autumn downpours won''t dampen your spirits with this arrangement in a bright, orange watering can. Fill it with tulips and daffs in spring, or crystanthemums in late summer and autumn.</p>\r\n<p> Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>\r\n<p>Ut lobortis elit ut lectus pretium blandit. In hac habitasse platea dictumst. Quisque euismod sit amet augue non malesuada. Etiam accumsan id tellus sed ullamcorper. Vivamus eros urna, auctor id pellentesque a, feugiat at dui. Vivamus sagittis porttitor euismod. Fusce vitae ante quis orci posuere aliquam. Nullam cursus erat eu vehicula volutpat. Maecenas ut magna risus. Nunc eu eleifend massa.</p> '),
(5, '200_carnations_basket_92246977.jpg', 'Basket of Carnations', 'Get Well Soon', '19.95', '<p>What better way to lift the spirits of someone feeling under the weather than with this wicker basket filled with flowers. This example is filled with carnations, but choose the patient''s favorite flowers to say "Get well soon."</p>\r\n<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar arcu pulvinar, dictum turpis vel, semper risus. Curabitur ac augue et felis tempor molestie. Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla.</p>'),
(6, '200_lilacs_tulips_157045915.jpg', 'Tulips and Lilac', 'Bon Anniversaire!', '25.95', '<p>Say happy birthday to that special woman in your life with this pretty pink arrangement of lilac and tulips. It comes in a white container all wrapped up with a pink bow.</p>\r\n<p>Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque.</p>\r\n<p>Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>'),
(7, '200_sunflowers_146748795.jpg', 'Sunflowers', 'Brighten Any Day', '22.95', '<p>Inspired by Vincent van Gogh, this arrangement of sunflowers will brighten anyone''s day. It comes in an elegant turquoise stemmed vase.</p>\r\n<p> Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>\r\n<p>Ut lobortis elit ut lectus pretium blandit. In hac habitasse platea dictumst. Quisque euismod sit amet augue non malesuada. Etiam accumsan id tellus sed ullamcorper. Vivamus eros urna, auctor id pellentesque a, feugiat at dui. Vivamus sagittis porttitor euismod. Fusce vitae ante quis orci posuere aliquam. Nullam cursus erat eu vehicula volutpat. Maecenas ut magna risus. Nunc eu eleifend massa. </p>'),
(8, '200_white_tulip_163199928.jpg', 'White Tulips', 'Purely Beautiful', '19.95', '<p>Pure white flowers in a glass bowl. Simply elegant, simply beautiful, simply delightful.</p>\r\n<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar arcu pulvinar, dictum turpis vel, semper risus. Curabitur ac augue et felis tempor molestie. Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut.</p>'),
(9, '200_tulips_daffodils_153986115.jpg', 'Mixed Tulips', 'Tea for Two', '15.95', '<p>A fun arrangement of spring flowers in two milk jugs. What a nice way to wish all the best to a happy couple on their engagement or wedding.</p>\r\n<p>Aenean non rhoncus nisi. Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat. Sed volutpat felis eget enim laoreet, ac porttitor eros interdum.</p>\r\n<p>Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit. Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus.</p>'),
(10, '200_arrangement_94972439.jpg', 'Mixed Bouquet', 'Thinking of You', '35.95', '<p>A luxurious arrangement of flowers and greenery in a superior quality square vase. The perfect way to tell someone special that you''re thinking of them.</p>\r\n<p> Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui. Aenean non rhoncus nisi.</p>\r\n<p>Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat. Sed volutpat felis eget enim laoreet, ac porttitor eros interdum. Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit.</p>\r\n<p>Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue.</p>'),
(11, '200_irises_lilies_87478811.jpg', 'Irises and Lilies', 'Simply Elegant', '22.95', '<p>Irises and lilies are among the most elegant of flowers. Add some ferns for extra greenery, and you have a simply elegant arrangement at a very affordable price.</p>\r\n<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque.</p>\r\n<p>Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>'),
(12, '200_pink_white_daisies_146806077.jpg', 'Pink and White Mums', 'Blush and Bashful', '19.95', '<p>Not quite sure how to say "Sorry"? Or maybe "I love you"? Save your blushes with this simple arrangement of pink and white crysanthemums.</p>\r\n<p> Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui. Aenean non rhoncus nisi. Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat.</p>\r\n<p>Sed volutpat felis eget enim laoreet, ac porttitor eros interdum. Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit. Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue.</p>'),
(13, '200_tulips_watering_can_155465445.jpg', 'Tulips in Watering Can', 'Morning in the Garden', '29.95', '<p>A silver watering can overflowing with red and yellow tulips. What a way to say "Top of the morning to you!"</p>\r\n<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar arcu pulvinar, dictum turpis vel, semper risus. Curabitur ac augue et felis tempor molestie. Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut.</p>'),
(14, '200_birthday_163167595.jpg', 'Orchid Bouquet', 'Orchids for the Table', '35.95', '<p>This is one for formal occasions, or to spoil someone who''s really special. An exotic array of orchids in a deep red square vase.</p>\r\n<p>Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque.</p>\r\n<p>Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>'),
(15, '200_red_yellow_roses_119752732.jpg', 'Red and Yellow Roses', 'Classic Rose Bouquet', '49.95', '<p>For that special occasion, say it with roses. I love you. Happy anniversary. Congratulations. Whatever you want to say, roses are the perfect choice.</p>\r\n<p> Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit. Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue.</p>\r\n<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque. Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie.</p>\r\n<p>Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>'),
(16, '200_white_lily_pink_daisy_92493508.jpg', 'Lilies and Roses', 'Evening Surprise', '29.95', '<p>An unconventional mix of lilies, roses, and crysanthemums. Surprise your loved one with this unique arrangement.</p>\r\n<p>Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo. Ut lobortis elit ut lectus pretium blandit. In hac habitasse platea dictumst.</p>\r\n<p>Quisque euismod sit amet augue non malesuada. Etiam accumsan id tellus sed ullamcorper. Vivamus eros urna, auctor id pellentesque a, feugiat at dui. Vivamus sagittis porttitor euismod. Fusce vitae ante quis orci posuere aliquam. Nullam cursus erat eu vehicula volutpat. Maecenas ut magna risus. Nunc eu eleifend massa.</p>'),
(17, '200_carnations_daisies_92007328.jpg', 'Carnations and Daisies', 'Cheer Up!', '19.95', '<p>Carnations, daisies, and splashes of greenery&mdash;the perfect pick-me-up for someone feeling under the weather or just down in the dumps.</p>\r\n<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar arcu pulvinar, dictum turpis vel, semper risus. Curabitur ac augue et felis tempor molestie. Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui.</p>'),
(18, '200_purple_daisy_rose104274224.jpg', 'Daisy Bouquet', 'Purple Galore', '21.95', '<p>A vibrant mix of purple and white daisies, topped off with red roses. Delivered in a matching purple mosaic vase.</p>\r\n<p>Aenean non rhoncus nisi. Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat. Sed volutpat felis eget enim laoreet, ac porttitor eros interdum.</p>\r\n<p>Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit. Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu.</p>'),
(19, '200_colorful_gerbera_119722776.jpg', 'Mixed Gerbera Daisies', 'Dotted Daisies', '25.95', '<p>This fun arrangement of gerbera daisies in round red vase with white polka dots is bound to brighten up anyone''s day.</p>\r\n<p>Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque.</p>\r\n<p>Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>'),
(20, '200_yellow_white_mums_147664285.jpg', 'Daisy Mix', 'Patio Picnicking', '19.95', '<p>A simple, yet delightful arrangement of daisies and crystanthemums, just like a breath of fresh air. Ideal for the patio table or to bring the joys of nature indoors.</p>\r\n<p>Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui. Aenean non rhoncus nisi. Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat. Sed volutpat felis eget enim laoreet, ac porttitor eros interdum.</p>\r\n<p>Praesent sit amet tempus metus. In porttitor rhoncus arcu eget blandit. Cras sagittis, dolor ut lacinia tempus, lectus nunc varius augue, ut pellentesque ante libero a justo. Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus.</p>'),
(21, '200_tulips_daffodils2_153986183.jpg', 'Mixed Tulips', 'Box of Happiness', '29.95', '<p>An explosion of color, with daffs and tulips in a yellow vase with a mosaic pattern. Sure to bring a happy smile to anyone''s face.</p>\r\n<p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam. Aliquam tincidunt in odio in scelerisque.</p>\r\n<p>Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>'),
(22, '200_butterflies_120624479.jpg', 'Daisies and Butterflies', 'Bounty of Butterflies', '25.95', '<p>We supply the flowers, and the butterflies are sure to gather round this delightful mix of wild flowers. Just like an English country garden in an elegant vase.</p>\r\n<p>Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui. Aenean non rhoncus nisi. Fusce non sem suscipit, posuere risus et, adipiscing ante. Maecenas nec neque ac urna bibendum viverra eu a eros. Maecenas quis eros a lorem blandit euismod sit amet venenatis leo. Praesent a justo ut turpis tristique volutpat. Sed volutpat felis eget enim laoreet, ac porttitor eros interdum.</p>\r\n<p>Donec non eros dui. Curabitur a dapibus enim. Nam fermentum, turpis ac laoreet rhoncus, arcu est accumsan est, a condimentum ligula nisl quis augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ut hendrerit tellus, ac aliquet arcu. Praesent volutpat, mauris vitae feugiat ullamcorper, quam neque tristique risus, rhoncus tempus tellus metus imperdiet tellus. Duis dolor diam, posuere fermentum est in, convallis condimentum nisl. Suspendisse a nisl vitae velit accumsan pretium sed at quam.</p>'),
(23, '200_tulips_irises_121357306.jpg', 'Irises and Tulips', 'Mardi Gras Mambo', '29.95', '<p>A flamboyant mix of irises and yellow tulips, this arrangement will set your table dancing to a whole new rhythm.</p>\r\n<p>Fusce ligula libero, dignissim eget ultrices ut, varius sit amet massa. Curabitur luctus nulla non lacus malesuada, eget elementum arcu lacinia. Fusce et metus non nulla sodales hendrerit. Aenean vitae enim nunc. Integer ultrices erat ac nunc commodo, in mattis mi viverra. Nullam et vehicula orci.</p>\r\n<p>Sed accumsan, odio at vestibulum viverra, magna magna cursus mi, a venenatis nibh enim sagittis felis. Suspendisse elit tortor, dictum a est in, sollicitudin laoreet purus. Nullam quis porta tortor. Suspendisse potenti. Suspendisse commodo pulvinar arcu nec fringilla. Pellentesque dignissim scelerisque elit, nec sollicitudin turpis sodales ut. Sed eget elementum augue, non dapibus dui.</p>'),
(24, '200_tulips_daffodils4_160232631.jpg', 'Mixed Bulbs', 'Cascade of Color', '32.95', '<p>Gorgeous, exuberant, a riot of color... Go completely wild with this stunning arrangement of flowers in season.</p>\r\n<p> Nulla faucibus, est a interdum volutpat, sem neque interdum dui, aliquam accumsan velit sapien nec purus. Integer quis massa vel odio viverra molestie. Duis rhoncus posuere felis. Proin lobortis feugiat dui, eget posuere mauris aliquet ut. Integer sagittis lacinia varius. Aenean sit amet nunc mauris. Aenean sed lobortis justo, non pharetra justo.</p>\r\n<p>Ut lobortis elit ut lectus pretium blandit. In hac habitasse platea dictumst. Quisque euismod sit amet augue non malesuada. Etiam accumsan id tellus sed ullamcorper. Vivamus eros urna, auctor id pellentesque a, feugiat at dui. Vivamus sagittis porttitor euismod. Fusce vitae ante quis orci posuere aliquam. Nullam cursus erat eu vehicula volutpat.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `make_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `yearmade` year(4) NOT NULL,
  `mileage` mediumint(8) unsigned NOT NULL,
  `transmission` enum('automatic','manual') NOT NULL DEFAULT 'automatic',
  `price` decimal(8,2) NOT NULL,
  `description` text,
  PRIMARY KEY (`car_id`),
  KEY `yearmade` (`yearmade`),
  KEY `make_id` (`make_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `make_id`, `yearmade`, `mileage`, `transmission`, `price`, `description`) VALUES
(1, 5, 2007, 113688, 'automatic', '13550.00', 'Green Chrysler 300. Only one owner, very carefully maintained. Top of the line, and beautifully styled, this is an outstanding ride with great performance.'),
(2, 2, 2007, 126570, 'automatic', '7545.00', 'Red Ford Focus. "Great bargain as a family car."'),
(3, 12, 2012, 517, 'automatic', '20755.00', 'Demo model that''s hardly been out on the road, this red Chevrolet Cruze is just a dream, with just about every option you could ask for. Great fuel economy, too.'),
(4, 16, 2010, 116626, 'automatic', '10554.00', 'Red Camry in good running condition. Sound electrics and bodywork. Clean interior, appears never to have been smoked in.'),
(5, 7, 2011, 24694, 'automatic', '26951.00', 'Space grey BMW 3 series with beige leather interior. BMW Factory Certified with a 6 year/100,000 mile warranty from in-service date.'),
(6, 11, 2005, 95496, 'automatic', '8554.00', 'Black Jaguar S-Type in perfect working condition. Good electrics and bodywork. Low mileage. New tires recently fitted.'),
(7, 5, 2004, 75500, 'automatic', '6005.00', 'Black Sebring LX convertible. Very low mileage. Excellent ride. A must-see bargain.'),
(8, 4, 2001, 100145, 'automatic', '9550.00', 'Black SLK-Class convertible. Immaculate interior. Power top and power seats. Runs like new.'),
(9, 2, 1999, 102500, 'automatic', '4550.00', 'Metallic red Mustang convertible. Economy car, very easy on fuel. No negative history. No rust or damage on paintwork.'),
(10, 16, 2002, 173658, 'automatic', '6550.00', 'So much to like about this Silver Toyota 4Runner. Runs well, good paint, tires, nice sound system.'),
(11, 3, 2005, 122250, 'automatic', '11550.00', 'Black Cadillac SRX. Only one owner. Beautiful SUV.'),
(12, 17, 2002, 155500, 'automatic', '4305.00', 'Silver Passat. Only one owner. Leather interior. Rare bargain.'),
(13, 1, 1952, 46383, 'manual', '22055.00', 'Burgundy Studebaker Roadster with newly rebuilt engine and wide whitewall tires. Three-speed manual transmission. Runs and drives amazingly.'),
(14, 10, 2006, 124209, 'automatic', '9120.00', 'White Santa Fe. Only one owner. Leather interior and bodywork are in great shape.'),
(15, 10, 2012, 9811, 'automatic', '24554.00', 'Silver Genesis with beige leather and wood trim interior. Great handling and comfort. Low, low mileage. Luxury at an affordable price.'),
(16, 14, 2005, 130500, 'manual', '7505.00', 'Five-speed manual black Civic. Super clean, with 6 CD changer. This one, you must see!'),
(17, 15, 2007, 84947, 'automatic', '14554.00', 'Audi A4 Quattro. Gray with gray leather interior, and glass roof. Excellent value.'),
(18, 6, 1972, 77600, 'manual', '28055.00', 'Citroen D Super with 5 speed manual transmission in fantastic shape. Extremely well maintained, and has obviously been treasured by its owner. A real European classic.'),
(19, 8, 2012, 19361, 'automatic', '14553.00', 'Yellow Fiat 500 POP. Immaculate interior and bodywork. Electrics in perfect order. Tires only slightly worn.'),
(20, 12, 2002, 160550, 'automatic', '4545.00', 'Blue Impala LS with gray interior. Ideal economical vehicle with good gas mileage. Dependable engine, new tires. Price includes 6 month/8,500 mile warranty.'),
(21, 9, 2005, 94995, 'automatic', '8150.00', 'Gold Pontiac Bonneville with low mileage. Great condition.'),
(22, 5, 2006, 102300, 'automatic', '7105.00', 'Green Town & Country sports van.'),
(23, 8, 2012, 5238, 'automatic', '16050.00', 'Pearl white Fiat 500 sport hatchback. Power glass sunroof and power windows. Only one owner.'),
(24, 17, 2005, 70388, 'automatic', '14055.00', 'Shadow blue Touareg in excellent condition. Heated leather seats, sun roof, and navigation. Really low mileage. '),
(25, 13, 2012, 35000, 'automatic', '15550.00', 'Tan Altima. Low mileage. Excellent condition.'),
(26, 2, 2004, 108694, 'automatic', '10980.00', 'Top of the line black Expedition XLT 5.4 liter 4WD with every conceivable option. A truly exceptional SUV.'),
(27, 2, 2005, 123059, 'automatic', '8000.00', 'Blue Ford Escape. Excellent condition. A real bargain.'),
(28, 13, 2010, 32791, 'automatic', '20505.00', 'Red Pathfinder 4WD. Only one owner. Nicely equipped with just about every feature you could want, including third-row seats.'),
(29, 14, 2002, 124334, 'automatic', '6004.00', 'Silver Accord with sunroof, CD player, and all new tires. Excellent condition.'),
(30, 14, 2011, 27345, 'automatic', '14000.00', 'Dark gray Civic. Only one owner, very low mileage. Great fuel economy.'),
(31, 12, 2011, 34256, 'automatic', '12000.00', 'Dark gray Malibu. Interior and bodywork in good condition. Low mileage.'),
(32, 15, 2003, 93494, 'automatic', '10000.00', 'Silver Audi A6 with tan interior. Two previous owners. Mechanically sound and good bodywork. New tires.'),
(33, 3, 2005, 139534, 'automatic', '11505.00', 'Pearl white Cadillac SRX. Electrics, engine, and bodywork all in excellent condition. Only one owner. Tires have about 3/4 of their life span left.'),
(34, 7, 2011, 33784, 'automatic', '25904.00', 'White 3 Series 328i. Low mileage. Bodywork in mint condition. AM/FM stereo, trip computer, power sunroof.'),
(35, 5, 2012, 7834, 'automatic', '16560.00', 'White Chrysler 200 with black interior. Exceptionally low mileage ');

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE IF NOT EXISTS `makes` (
  `make_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(30) NOT NULL,
  PRIMARY KEY (`make_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`make_id`, `make`) VALUES
(1, 'Studebaker'),
(2, 'Ford'),
(3, 'Cadillac'),
(4, 'Mercedes Benz'),
(5, 'Chrysler'),
(6, 'Citroen'),
(7, 'BMW'),
(8, 'Fiat'),
(9, 'Pontiac'),
(10, 'Hyundai'),
(11, 'Jaguar'),
(12, 'Chevrolet'),
(13, 'Nissan'),
(14, 'Honda'),
(15, 'Audi'),
(16, 'Toyota'),
(17, 'Volkswagen');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`make_id`) REFERENCES `makes` (`make_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
