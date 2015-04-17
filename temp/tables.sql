DROP TABLE IF EXISTS photos;
CREATE TABLE photos
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,
  title           varchar(255),
  image           varchar(255) NOT NULL,
  content         mediumtext NOT NULL,

  PRIMARY KEY     (id)
);

INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 1', 'images/1.jpg', 'Merhaba, simdi saat 17:25 eminonun onundeyim');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 2', 'images/2.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 3', 'images/3.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 4', 'images/4.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 5', 'images/5.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');

INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 1', 'images/delete/1.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 2', 'images/delete/2.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 3', 'images/delete/3.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 4', 'images/delete/4.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 5', 'images/delete/5.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 6', 'images/delete/6.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 7', 'images/delete/7.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 8', 'images/delete/8.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 9', 'images/delete/9.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 10', 'images/delete/10.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 11', 'images/delete/11.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 12', 'images/delete/12.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 13', 'images/delete/13.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 14', 'images/delete/14.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 15', 'images/delete/15.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 16', 'images/delete/16.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 17', 'images/delete/17.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 18', 'images/delete/18.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 19', 'images/delete/19.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 20', 'images/delete/20.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, title, image, content) VALUES (NOW(), 'Resim 21', 'images/delete/21.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
