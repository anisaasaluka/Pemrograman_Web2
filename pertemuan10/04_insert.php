<?php
$conn=new mysqli("localhost","root","","lat_dbase");
$sql="INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES('Budi','Santoso',21)";
echo $conn->query($sql) ? "Data berhasil ditambahkan." : $conn->error;
$conn->close();
?>