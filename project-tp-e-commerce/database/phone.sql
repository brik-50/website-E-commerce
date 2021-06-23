
--table products




-- Dumping data for table `product`
--

INSERT INTO `products` (`id`, `image`, `nom`, `prix`) VALUES
(0,'./images/products/iphone/iphone3.jpeg','Apple iPhone 11',990), -- NOW()
(1,'./images/products/sumsung/samsung6.jpeg','Samsung Galaxy S10',899),
(2,'./images/products/iphone/iphone4.jpeg','Apple iPhone X',720),
(3,'./images/products/iphone/iphone5.jpeg','Apple iPhone 11',769),
(4,'./images/products/sumsung/tv.png','Samsung Smart TV',900),
(5,'./images/products/sumsung/tv2.png','Apple Smart TV',1099),
(6,'./images/products/sumsung/tv3.png','LG Smart TV',899),
(7,'./images/products/sumsung/tv4.png','Samsung Smart TV',789),
(8,'./images/products/headphone/headphone9.jpeg','Sony WH-CH510',760),
(9,'./images/products/headphone/headphone4.jpeg','Sony WH-CH510',799),
(10,'./images/products/headphone/headphone7.jpeg','Sony WH-CH510',499),
(11,'./images/products/headphone/headphone2.jpeg','Sony WH-CH510',239);

--create table orders

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `image` Text(11) NOT NULL,
  `name` Varchar(30) NOT NULL,
  `unite_price` double(10.2) NOT NULL,
  `quantite` int(11) NOT NULL,
  `price` double(10.2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--insert into table orders
INSERT INTO `orders`(`image`, `name`,`unite_price`,`quantite`,`total`) VALUES ('$nom','$prenom','$email','$password','$telephone','$adresse');

