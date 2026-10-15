<?php
$conn=new mysqli("localhost","root","","lat_dbase");
echo $conn->query("DELETE FROM tbl_mhs WHERE LastName='Prabowo'") ? "Data berhasil dihapus." : $conn->error;
$conn->close();
?>