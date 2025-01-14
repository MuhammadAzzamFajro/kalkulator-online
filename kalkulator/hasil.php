<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan kalkulator online</title>
    <link href="style.css" rel="stylesheet" type = "text/css">
</head>
<body>
    <form>
        <h1>Hasil perhitungan</h1> 
        <?php
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $operator = $_GET['operator'];

            if ($operator == "+") {
                $hasil = $number1 + $number2;
            } elseif ($operator == "-") {
                $hasil = $number1 - $number2;
            } elseif ($operator == "x") {
                $hasil = $number1 * $number2;
            } elseif ($operator == ":") {
                $hasil = $number1 / $number2;
            }
            echo $number1 . $operator . $number2. " = ". $hasil;
        ?>
        <a href="index.php">Kembali</a>
        <a type="button" onclick=" return window.print();">cetak</a>
    </form>

</body>
</html>