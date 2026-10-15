<?php
$conn=new mysqli("localhost","root","","lat_dbase");
$sql="UPDATE tbl_mhs SET Age=36 WHERE FirstName='Karina' AND LastName='Suwandi'";
echo $conn->query($sql) ? "Data berhasil diupdate." : $conn->error;
$conn->close();
?>