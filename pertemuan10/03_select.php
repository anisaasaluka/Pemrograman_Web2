<?php
$conn=new mysqli("localhost","root","","lat_dbase");
if($conn->connect_error) die("Koneksi gagal");
$r=$conn->query("SELECT * FROM tbl_mhs");
while($d=$r->fetch_assoc()) echo $d["mhsID"]." ".$d["FirstName"]." ".$d["LastName"]." ".$d["Age"]."<br>";
$conn->close();
?>