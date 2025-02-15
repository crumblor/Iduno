DROP DATABASE IF EXISTS blog_ipb23;

CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content varchar(255) NOT NULL,
    category_id INT
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL,
    comment VARCHAR(255) NOT NULL,
    post_id INT NOT NULL,
    date DATETIME NOT NULL
);

INSERT INTO categories (category_name) 
VALUES ('Amantas domas');

INSERT INTO posts (content, category_id) 
VALUES ('Kapec peles ir labakas neka gulbji', 1);

INSERT INTO comments (name, comment, post_id, date) 
VALUES 
    ('Amanta', 'Peles ir labakas par gulbjiem jo peles ir milakas un mazakas un apalas. 🦢❌🐁✔️', 1, '2025-02-15 14:33:39'),

    ('Robero', 'Isteniba gulbji ir ganjau labaki jo esmu epic hehe 🦢✅', 1, '2025-02-15 14:38:41'),

    ('Gulbis', '..Logiski ka gulbji ir labaki....', 1, '2025-02-15 14:40:30');

SELECT * from posts;

SELECT * from categories;

SELECT * from comments;