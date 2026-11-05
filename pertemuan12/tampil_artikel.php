
<?php
// Menampilkan isi tabel mahasiswa
include "koneksi.php";

$hasil = mysqli_query($connection, "SELECT * FROM tbl_mhs");

if (!$hasil) {
    die("Query gagal: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 6px 12px;
        }

        th {
            background: #6aa84f;
            color: #fff;
        }
    </style>
</head>

<body>

    <h2>Daftar Mahasiswa</h2>

    <table>
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>

        <?php
        $no = 1;

        while ($row = mysqli_fetch_assoc($hasil)) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . htmlspecialchars($row['FirstName'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['LastName'] ?? '') . "</td>";
    echo "<td>" . ($row['Age'] ?? '') . "</td>";
    echo "</tr>";
}

        if ($no == 1) {
            echo "<tr><td colspan='4'>Belum ada data mahasiswa</td></tr>";
        }
        ?>

    </table>

</body>
</html>
