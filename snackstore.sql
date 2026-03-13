CREATE DATABASE IF NOT EXISTS snack_store;
USE snack_store;

CREATE TABLE products(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
price DECIMAL(10,2),
image VARCHAR(255),
description TEXT
);

CREATE TABLE orders(
id INT AUTO_INCREMENT PRIMARY KEY,
product VARCHAR(100),
price DECIMAL(10,2)
);

INSERT INTO products(name,price,image,description) VALUES
('Potato Chips',50,'images/chips.jpg','Crispy salted potato chips'),
('Chocolate Bar',40,'images/chocolate.jpg','Sweet milk chocolate'),
('Cookies Pack',60,'images/cookies.jpg','Crunchy cookies snack'),
('Soft Drink',35,'images/soda.jpg','Refreshing soda drink');
