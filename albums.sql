CREATE TABLE `albums` (
  `id`  int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `artist` text NOT NULL,
  `date` date NOT NULL,
  `duration` int(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `price` FLOAT NOT NULL,
  `storage_code` text NOT NULL,
  `room_number` int(255) NOT NULL,
  `rack_number` int(255) NOT NULL,
  `shelf_number` int(255) NOT NULL,
   PRIMARY KEY (id)
)

INSERT INTO `albums` (`id`, `name`, `image`, `artist`, `date`, `duration`, `purchase_date`, `price`, `storage_code`, `room_number`, `rack_number`, `shelf_number`) VALUES
(NULL, 'Homework', '/public/img/daftpunk.jpg', 'Daft Punk', '2016-01-16', '70', '2018-12-25', '200.30', '25:10:15', '25', '10', '15'),
(NULL, 'Discovery', '/public/img/discovery.jpg', 'Daft Punk', '2001-01-22', '70', '2018-12-25', '50', '25:10:16', '25', '10', '16'),
(NULL, 'The Fat of the Land', '/public/img/the_fat_of_the_land.jpg', 'The Prodigy', '1997-05-27','34',  '2018-12-25', '20.10', '30:12:10', '30', '12', '10');