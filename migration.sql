DROP DATABASE IF EXISTS blog_ipb23;

CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content varchar(25) NOT NULL,
    category_id INT
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);

SELECT * from posts;

SELECT * from categories;