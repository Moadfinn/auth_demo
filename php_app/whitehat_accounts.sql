use whwebapp;

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `pword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;


/*
MAMP 3.3.0
PHP 7.0.13
cache off
Ports 80 80 3306
Apache C:\MAMP\filesgohere
Start page url: /MAMP/

localhost
3306
root


ob_start()
ob_end_flush()

*/
