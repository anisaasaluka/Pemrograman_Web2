
<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Could not connect: " . mysqli_connect_error());
}

// Mengaktifkan database
mysqli_select_db($con, "lat_dbase");

// Menyisipkan data Karina
$sql1 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Karina', 'Suwandi', 29)";

if (mysqli_query($con, $sql1)) {
    echo "Data Karina Suwandi berhasil ditambahkan.<br>";
} else {
    echo "Gagal menambahkan data Karina: " . mysqli_error($con) . "<br>";
}

// Menyisipkan data Glenn
$sql2 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Glenn', 'Gandari', 32)";

if (mysqli_query($con, $sql2)) {
    echo "Data Glenn Gandari berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data Glenn: " . mysqli_error($con);
}

mysqli_close($con);
?>
