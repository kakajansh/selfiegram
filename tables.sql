DROP TABLE IF EXISTS photos;
CREATE TABLE photos
(
  id              smallint unsigned NOT NULL auto_increment,
  userid          smallint NOT NULL,
  publicationDate date NOT NULL,
  title           varchar(255),
  image           varchar(255) NOT NULL,
  lat             float(10, 6) NOT NULL,
  lng             float(10, 6) NOT NULL,
  content         mediumtext NOT NULL,

  PRIMARY KEY     (id)
);

INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 1', 'images/1.jpg', '47.608941', '-122.340145', 'Merhaba, simdi saat 17:25 eminonun onundeyim');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 2', 'images/2.jpg', '47.613591', '-122.344394', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 3', 'images/3.jpg', '47.624562', '-122.356442', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 4', 'images/4.jpg', '47.606366', '-122.337656', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 5', 'images/5.jpg', '47.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');

INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 1', 'images/delete/1.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 2', 'images/delete/2.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 3', 'images/delete/3.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 4', 'images/delete/4.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 5', 'images/delete/5.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 6', 'images/delete/6.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 7', 'images/delete/7.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 8', 'images/delete/8.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 9', 'images/delete/9.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 10', 'images/delete/10.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 11', 'images/delete/11.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 12', 'images/delete/12.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 13', 'images/delete/13.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 14', 'images/delete/14.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 15', 'images/delete/15.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 16', 'images/delete/16.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 17', 'images/delete/17.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 18', 'images/delete/18.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 19', 'images/delete/19.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 20', 'images/delete/20.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, content) VALUES (NOW(), 1, 'Resim 21', 'images/delete/21.jpg', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');

DROP TABLE IF EXISTS favorites;
CREATE TABLE favorites
(
  id              smallint unsigned NOT NULL auto_increment,
  userid          smallint NOT NULL,
  photoid         smallint NOT NULL,
  date            date NOT NULL,

  PRIMARY KEY     (id)
);

INSERT INTO favorites (userid, photoid, date) VALUES (1, 1, NOW());
INSERT INTO favorites (userid, photoid, date) VALUES (1, 12, NOW());
