-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2014 at 07:23 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bolt`
--

CREATE DATABASE IF NOT EXISTS `bolt` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `bolt`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'PEF1', 'Gallina Entera', 'El pollo que tu negocio estaba buscando. Garantizamos un producto 100% de calidad gracias a llevar un proceso integral', 'gallina.png', 500, '210.00'),
(2, 'PEF2', 'Huevo Blanco','Disfruta el dia que quieras de este alimento rico en proteinas y prepara un desayuno saludable', 'huevo.jpg', 500, '120.00'),
(3, 'PEF3', 'Pavo Entero', 'Traemos para ti el pavo natural, el complemento perfecto para tus cenas decembrinas. Al ser natural lo puedes combinar con diferentes recetas, no dudes en probarlo.', 'pavo.png', 500, '280.00'),
(4, 'PEF4', 'Pierna de Pollo','Sin duda alguna en tu alimentacion balanceada no debe faltar la carne blanca como es la pierna de pollo que te ofrecemos con la frescura que lo caracteriza, la proteina que te ofrece y sus nutrientes son perfectos para tener la energia que requieres.', 'pierna.jpg', 500, '99.00'),
(5, 'PEF5', 'Pechuga de Pollo', 'Prepara deliciosas recetas con la pechuga de pollo con piel y hueso. Comprala por kilo al mejor precio aqui en la tienda en linea. Te garantizamos su frescura y alto contenido en proteinas para que te mantengas bien alimentado.', 'pechuga.jpg', 500, '150.00'),
(6, 'PEF6', 'Alitas de Pollo', 'Riquisimas alitas de pollo de la mas alta calidad, cuentan con un sabor excelente. Ideales para una botana o bien para una parrillada. Se le puede agregar algun tipo de salsa como BBQ o Buffalo.', 'alitas.jpg', 500, '79.00');

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Pedro', 'Leon', 'Mexico', 'Monterrey', 123456, 'pedro@mail.com', 123456, 'admin'),
(2, 'Alex', 'Acosta', 'Mexico', 'Monterrey', 123456, 'angel.ygtp@gmail.com', 123456, 'admin');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
