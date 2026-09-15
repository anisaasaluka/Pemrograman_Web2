<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .container {
            width: 700px;
            margin: auto;
            text-align: center;
        }

        .selamat {
            color: orangered;
            font-size: 24px;
            margin-bottom: 30px;
        }

        h2 {
            color: #8b0000;
            font-family: "Times New Roman", serif;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            margin-top: 30px;
        }

        input {
            width: 200px;
            padding: 7px;
        }

        select {
            padding: 7px;
        }

        button {
            padding: 7px 15px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 25px;
            padding: 15px;
            border: 1px solid #ccc;
            background: #f5f5f5;
        }

        .footer {
            margin-top: 80px;
            color: blue;
            font-size: 18px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="selamat">
        Selamat Mencoba
    </div>

    <h2>
        Nilai I &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Nilai II
    </h2>

    <form method="post">

        <div class="form">

            <input
                type="number"
                name="nilai1"
                placeholder="Nilai I"
                required
            >

            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <input
                type="number"
                name="nilai2"
                placeholder="Nilai II"
                required
            >

            <button type="submit" name="hitung">
                Submit
            </button>

        </div>

    </form>

    <?php

    if (isset($_POST['hitung'])) {

        // Mengambil nilai dari input
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];

        // Melakukan perhitungan
        switch ($operator) {

            case "+":
                $hasil = $nilai1 + $nilai2;
                break;

            case "-":
                $hasil = $nilai1 - $nilai2;
                break;

            case "*":
                $hasil = $nilai1 * $nilai2;
                break;

            case "/":
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    $hasil = "Tidak dapat dibagi dengan 0";
                }
                break;

            default:
                $hasil = "Operator tidak valid";
        }

        echo "<div class='hasil'>";

        echo "<strong>Hasil Perhitungan</strong><br><br>";

        echo $nilai1 . " "
            . $operator . " "
            . $nilai2 . " = "
            . $hasil;

        echo "</div>";
    }

    ?>

    <div class="footer">
        Created by Nama Kamu, Nim : NIM Kamu
    </div>

</div>

</body>
</html>