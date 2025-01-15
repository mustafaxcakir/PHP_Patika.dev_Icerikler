CREATE TABLE IF NOT EXISTS `users` (
`id` INT AUTO_INCREMENT,
`isim` VARCHAR(50) NULL,
`gsm` VARCHAR(20) NULL,
`eposta` VARCHAR(50) NULL,
`sehir` VARCHAR(30) NULL,
`grup` VARCHAR(20) NULL,
`posta_kodu` VARCHAR(10) NULL,
`yas` INT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO `users` (`isim`, `gsm`, `eposta`, `sehir`, `grup`, `posta_kodu`, `yas`) VALUES
('Ali Veli', '05321234567', 'ali.veli@example.com', 'İstanbul', 'A', '34000', 25),
('Ayşe Fatma', '05429876543', 'ayse.fatma@example.com', 'Ankara', 'B', '06000', 30),
('Mehmet Can', '05537654321', 'mehmet.can@example.com', 'İzmir', 'A', '35000', 22),
('Elif Nur', '05011234567', 'elif.nur@example.com', 'Bursa', 'C', '16000', 28),
('Kerem Yılmaz', '05441239876', 'kerem.yilmaz@example.com', 'Antalya', 'B', '07000', 27),
('Zeynep Kılıç', '05331234567', 'zeynep.kilic@example.com', 'Adana', 'A', '01000', 26),
('Ahmet Çelik', '05619876543', 'ahmet.celik@example.com', 'Konya', 'C', '42000', 32),
('Fatma Demir', '05429876542', 'fatma.demir@example.com', 'Samsun', 'A', '55000', 24),
('Selim Arslan', '05011239876', 'selim.arslan@example.com', 'Trabzon', 'B', '61000', 29),
('Merve Şahin', '05339876541', 'merve.sahin@example.com', 'Diyarbakır', 'C', '21000', 31),
('Canan Öztürk', '05549876543', 'canan.ozturk@example.com', 'Kayseri', 'A', '38000', 23),
('Emre Yılmaz', '05459876544', 'emre.yilmaz@example.com', 'Eskişehir', 'B', '26000', 27),
('Hülya Koç', '05341234568', 'hulya.koc@example.com', 'Mersin', 'C', '33000', 33),
('Burak Aksoy', '05019876547', 'burak.aksoy@example.com', 'Gaziantep', 'A', '27000', 28),
('Deniz Aydın', '05321234569', 'deniz.aydin@example.com', 'Muğla', 'B', '48000', 26),
('Ece Tüfekçi', '05631239877', 'ece.tufekci@example.com', 'Kocaeli', 'C', '41000', 34),
('Furkan Güler', '05451234567', 'furkan.guler@example.com', 'Balıkesir', 'A', '10000', 29),
('Leyla Kaya', '05361234568', 'leyla.kaya@example.com', 'Tekirdağ', 'B', '59000', 30),
('Onur Demirtaş', '05671239878', 'onur.demirtas@example.com', 'Van', 'C', '65000', 27),
('Nazlı Güner', '05081234566', 'nazli.guner@example.com', 'Erzurum', 'A', '25000', 32);
