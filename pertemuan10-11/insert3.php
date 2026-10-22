
<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Could not connect: " . mysqli_connect_error());
}

mysqli_select_db($con, "lat_dbase");

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssi",
    $_POST["firstname"],
    $_POST["lastname"],
    $_POST["age"]
);

if (!mysqli_stmt_execute($stmt)) {
    die("Error: " . mysqli_error($con));
}

echo "1 record added";

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
