<?php
// Latih 2 - DELETE
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($con, "lat_dbase");

if (mysqli_query($con, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'")) {
    echo "Delete berhasil. Baris terhapus: " . mysqli_affected_rows($con);
} else {
    echo "Delete gagal: " . mysqli_error($con);
}

mysqli_close($con);
?>
