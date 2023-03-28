<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Versi 1.3</title>
</head>
<body>
    <table>
        <tr>
            <td>
            <form method="POST" action="">
                <input type="number" name="number1" required>
                <select name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value=""></option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="number2" required>
                <input type="submit" name = "hitung" value="hitung">    
            </form>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if (isset($_POST["hitung"])){
                    $angka1 = $_POST['number1'];
                    $angka2 = $_POST['number2'];
                    $operator = $_POST['operator'];

                    if ($operator == '+') {
                        $hasil = $number1 + $number2;
                    } elseif ($operator == '-') {
                        $hasil = $number1 - $number2;
                    } elseif ($operator == '*') {
                        $hasil = $number1 * $number2;
                    } elseif ($operator == '/') {
                        $hasil = $number1 / $number2;
                    } else {
                        $hasil = 0;
                    }

                    echo "<h2>Hasil perhitungan:</h2>";
                    echo "<p>{$number1} {$operator} {$number2} = {$hasil}</p>";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>