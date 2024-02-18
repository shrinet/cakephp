-- Database export via SQLPro (https://www.sqlprostudio.com/allapps.html)
-- Exported by akhilesh at 18-02-2024 21:49.
-- WARNING: This file may contain descructive statements such as DROPs.
-- Please ensure that you are running the script at the proper location.


-- BEGIN TABLE users
DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text,
  `state` varchar(5) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Inserting 4 rows into users
-- Insert batch #1
INSERT INTO users (id, first_name, last_name, password, contact_number, email, address, state, is_admin, created, modified) VALUES
(9, 'Test', 'Order', '6a93d193fcb302cbb62bbcb89771f7a1180d2ff9', '9910698765', 'some@testing.com', '76. j ljkj\r\njy jkhk jhk', 'DL', 1, '2024-02-18 07:53:25', '2024-02-18 13:00:31'),
(10, 'Some', 'user', '6a93d193fcb302cbb62bbcb89771f7a1180d2ff9', '7654578765', 'test@email.com', 'hg g jhg gj,  gjg jg', 'CT', 0, '2024-02-18 08:48:01', '2024-02-18 08:48:01'),
(11, 'Rest', 'Users', '6a93d193fcb302cbb62bbcb89771f7a1180d2ff9', '4598765609', 'rest@email.com', 'ghyjj 76, jhjkh', 'GA', 0, '2024-02-18 10:22:01', '2024-02-18 12:32:03'),
(12, 'New', 'User', 'eb4b5abf5fb6c1774477eb37653a756640003381', '7689765456', 'new@email.com', 'ghj jj, kjhjkhkj h', 'HP', 0, '2024-02-18 14:57:53', '2024-02-18 15:59:02');

-- END TABLE users

