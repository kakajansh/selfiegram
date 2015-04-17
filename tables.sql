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
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 6', 'images/6.jpg', '48.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 7', 'images/7.jpg', '44.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 8', 'images/8.jpg', '43.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 9', 'images/9.jpg', '42.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 10', 'images/10.jpg', '52.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 11', 'images/11.jpg', '21.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 12', 'images/12.jpg', '41.612825', '-122.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 13', 'images/13.jpg', '47.612825', '-120.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 14', 'images/14.jpg', '47.612825', '-121.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 15', 'images/15.jpg', '47.612825', '-12.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 16', 'images/16.jpg', '47.612825', '-13.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');
INSERT INTO photos (publicationDate, userid, title, image, lat, lng, content) VALUES (NOW(), 1, 'Resim 17', 'images/17.jpg', '47.612825', '-128.34567', 'Merhaba, simdi saat 17:25 ben biseyler yapiyorum');

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
