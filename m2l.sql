-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 02:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `m2l`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `id_s` int(11) NOT NULL,
  `contenu` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

CREATE TABLE IF NOT EXISTS `formations` (
  `id_f` int(32) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nb_jour` int(32) NOT NULL,
  `prerequis` varchar(255) NOT NULL,
  `credits` int(32) NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`id_f`, `nom`, `description`, `image`, `nb_jour`, `prerequis`, `credits`) VALUES
(1, 'FORMATION HTML5 ET CSS3 ', 'Le HTML5 et le CSS3 sont deux standards qui sont déjà devenus les références pour la création et l’interaction des sites internet.', 'html-css.jpg', 2, 'HTML, CSS, JS', 600),
(2, 'FORMATION JAVASCRIPT', 'Si la maîtrise de HTML et CSS pour faire des pages complexes reste relativement aisée, JavaScript reste souvent une Terra Icognita pour les intégrateurs web ou les équipes de développement habituellement plus à l''aise côté serveur avec une stack PHP, Java', 'js.jpg', 3, 'html, css..', 1500),
(3, 'FORMATION RUBY INITIATION', 'Connaître l''utilisation, les possiblités de Ruby. Etre capable de prévoir, développer, tester, déployer une application complète et complexe en Ruby', 'ruby.jpg', 5, 'Aucun', 1000),
(4, 'FORMATION PHP', 'A travers cette formation je vous propose de découvrir progressivement ce qu''est PHP et comment vous pourrez l''utiliser pour créer des sites web complets. Avant de suivre cette formation il est indispensable que vous soyez déjà à l''aise avec la création d', 'php.jpg', 3, 'HYML, CSS', 800),
(5, 'FORMATION JQUERY', 'Construire des interfaces performantes avec jQuery - Développer des plugins additionnels', 'jquery.jpg', 2, 'Connaissance de JavaScript, DOM, CSS et notions d''AJAX', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `pretataires`
--

CREATE TABLE IF NOT EXISTS `pretataires` (
  `id_p` int(32) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(32) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE IF NOT EXISTS `salaries` (
  `id_s` int(32) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `jour` int(32) NOT NULL,
  `credits` int(32) NOT NULL,
  `chef` tinyint(1) NOT NULL,
  `superieur` int(11) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id_s`, `login`, `password`, `nom`, `prenom`, `jour`, `credits`, `chef`, `superieur`) VALUES
(2, 'william', 'azer', 'ben', 'will', 10, 5000, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
