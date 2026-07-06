CREATE DATABASE IF NOT EXISTS praktikum;
USE praktikum;

CREATE TABLE IF NOT EXISTS tb_mahasiswa (
    nim VARCHAR(20) NOT NULL PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    universitas VARCHAR(150) NOT NULL,
    no_hp VARCHAR(20) NOT NULL
);

INSERT INTO tb_mahasiswa (nim, nama, prodi, universitas, no_hp) VALUES
('32603400047', 'Ezzy Kurbana', 'Teknik Informatika', 'Universitas Islam Sultan Agung', '081234560001'),
('32603400048', 'Zachari Yazid', 'Teknik Informatika', 'Universitas Islam Sultan Agung', '081234560002'),
('32603400049', 'Raafi Prawira Setiamudo', 'Teknik Informatika', 'Universitas Islam Sultan Agung', '081234560003'),
('32603400050', 'M. Aldriyan Saputra Andriansya', 'Teknik Informatika', 'Universitas Islam Sultan Agung', '081234560004'),
('32603400051', 'Eky Syaifuddin Ibnu Pratama', 'Teknik Informatika', 'Universitas Islam Sultan Agung', '081234560005')
ON DUPLICATE KEY UPDATE
    nama = VALUES(nama),
    prodi = VALUES(prodi),
    universitas = VALUES(universitas),
    no_hp = VALUES(no_hp);
