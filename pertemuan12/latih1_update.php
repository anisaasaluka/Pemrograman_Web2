<?php
// Latih 1 - UPDATE
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($con, "lat_dbase");

$sql = "UPDATE tbl_mhs SET Age = '36'
        WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";

if (mysqli_query($con, $sql)) {
    echo "Update berhasil. Baris terubah: " . mysqli_affected_rows($con);
} else {
    echo "Update gagal: " . mysqli_error($con);
}

mysqli_close($con);
?>
