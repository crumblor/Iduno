DROP DATABASE IF EXISTS blog_ipb23;
CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200)
);

INSERT  INTO  posts
(content)
VALUES
("Ziemassvetki nak 🎄"),
("Sis ir pa traku"),
("Leons nozaga siko");

SELECT * FROM posts;

INSERT INTO posts (content)
VALUES
    ("Kas notiek patiesi?"),
    ("Laiks doties uz Rigu!"),
    ("Neviens neklausas!"),
    ("Es tikai gribu mieru..."),
    ("Kur pazuda sniegs?"),
    ("Ziemassvetki bez mandariniem..."),
    ("Cikos saksies balite?"),
    ("Nav laika, nav naudas."),
    ("Atdod manu cepuri, Leons!"),
    ("Sniegavirs ir netaisits."),
    ("Laiks ir tikai iluzija."),
    ("Kas par jauniem draugiem?"),
    ("Mans kaimins ir traks."),
    ("Ko tu dari tur?"),
    ("Vel viens tas pats."),
    ("Zvaigznes virs manas galvas."),
    ("Pirmais janvaris ir tuvuma.");
   
   
