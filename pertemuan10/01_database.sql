CREATE DATABASE IF NOT EXISTS lat_dbase;
USE lat_dbase;
CREATE TABLE IF NOT EXISTS tbl_mhs(
mhsID INT AUTO_INCREMENT PRIMARY KEY,
FirstName VARCHAR(15), LastName VARCHAR(15), Age INT);
INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES
('Anjar','Prabowo',25),('Karina','Suwandi',29),('Glenn','Gandari',32);
