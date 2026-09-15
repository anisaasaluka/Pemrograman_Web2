<?php

// Nama peralatan
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// Harga per unit
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// Jumlah barang
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

// Total harga masing-masing barang
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

// Grand total
$tharga = $th1 + $th2 + $th3 + $th4;

// Diskon 5%
$diskon = 5;
$tdiskon = ($diskon * $tharga) / 100;

// Total yang harus dibayar
$tdibayar = $tharga - $tdiskon;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peralatan Yang Dibeli</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .container {
            width: 700px;
            margin: 30px auto;
        }

        h2 {
            text-align: center;
            color: blue;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Contoh Perhitungan dengan PHP</h2>

    <table>

        <tr>
            <th colspan="4">
                Daftar Pemesanan Peralatan Kantor
            </th>
        </tr>

        <tr>
            <th>Nama Peralatan</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Jumlah Harga</th>
        </tr>

        <tr>
            <td><?php echo $brg1; ?></td>
            <td class="right"><?php echo $jmlbrg1; ?></td>
            <td class="right">Rp <?php echo number_format($harga1, 0, ',', '.'); ?></td>
            <td class="right">Rp <?php echo number_format($th1, 0, ',', '.'); ?></td>
        </tr>

        <tr>
            <td><?php echo $brg2; ?></td>
            <td class="right"><?php echo $jmlbrg2; ?></td>
            <td class="right">Rp <?php echo number_format($harga2, 0, ',', '.'); ?></td>
            <td class="right">Rp <?php echo number_format($th2, 0, ',', '.'); ?></td>
        </tr>

        <tr>
            <td><?php echo $brg3; ?></td>
            <td class="right"><?php echo $jmlbrg3; ?></td>
            <td class="right">Rp <?php echo number_format($harga3, 0, ',', '.'); ?></td>
            <td class="right">Rp <?php echo number_format($th3, 0, ',', '.'); ?></td>
        </tr>

        <tr>
            <td><?php echo $brg4; ?></td>
            <td class="right"><?php echo $jmlbrg4; ?></td>
            <td class="right">Rp <?php echo number_format($harga4, 0, ',', '.'); ?></td>
            <td class="right">Rp <?php echo number_format($th4, 0, ',', '.'); ?></td>
        </tr>

        <tr class="total">
            <td colspan="3" class="right">Total Harga</td>
            <td class="right">
                Rp <?php echo number_format($tharga, 0, ',', '.'); ?>
            </td>
        </tr>

        <tr>
            <td colspan="3" class="right">
                Diskon (<?php echo $diskon; ?>%)
            </td>
            <td class="right">
                Rp <?php echo number_format($tdiskon, 0, ',', '.'); ?>
            </td>
        </tr>

        <tr class="total">
            <td colspan="3" class="right">
                Jumlah Harus Dibayar
            </td>
            <td class="right">
                Rp <?php echo number_format($tdibayar, 0, ',', '.'); ?>
            </td>
        </tr>

    </table>

</div>

</body>
</html>