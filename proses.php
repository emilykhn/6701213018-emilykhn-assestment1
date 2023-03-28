<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<form method="post">
		<input type="number" name="number1" placeholder="Masukkan angka pertama"><br>
		<input type="number" name="number2" placeholder="Masukkan angka kedua"><br>
		<select name="operator">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">*</option>
			<option value="bagi">/</option>
		</select><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$angka1 = $_POST['number1'];
			$angka2 = $_POST['number2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "tambah":
					$hasil = $number1 + $number2;
					break;
				case "kurang":
					$hasil = $number1 - $number2;
					break;
				case "kali":
					$hasil = $number1 * $number2;
					break;
				case "bagi":
					$hasil = $number1 / $number2;
					break;
			}

			echo "<br>Hasil perhitungan: ".$hasil;
		}
	?>
</body>
</html>