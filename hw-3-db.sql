/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ lesson4 /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE lesson4;

DROP TABLE IF EXISTS books;
CREATE TABLE `books` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `isbn` varchar(100) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS orders;
CREATE TABLE `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `book_id` int DEFAULT NULL,
  `date_of_order` date DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO books(book_id,isbn,author,title,price) VALUES(1,'9785389126794','John Updike','The witches of Eastwick',299),(2,'9785699812462','Edgar Allan Poe','The Gold-Bug',399),(3,'9785170814282','W. Somerset Maugham','Theater',220),(4,'9785171036010','Hermann Hesse','Der Steppenwolf',350),(5,'9785041036577','Markus Zusak','The book thief',401);

INSERT INTO orders(order_id,user_id,book_id,date_of_order) VALUES(1,1,2,'2020-01-13'),(2,3,1,'2021-02-23'),(3,2,5,'2021-03-10'),(4,5,4,'2021-05-20'),(5,4,5,'2021-06-01');
INSERT INTO users(user_id,user_name,age,email,gender) VALUES(1,'Tom Yern',34,'tom_yern@mail.com','male'),(2,'Janna Gerid',46,'janna_gerid@mail.com','female'),(3,'Fred Borher',13,'fred_borher@mail.com','male'),(4,'Mila Hallownest',25,'mila_hallownest@mail.com','female'),(5,'Gordon Freeman',51,'gordon_freeman@mail.com','male');