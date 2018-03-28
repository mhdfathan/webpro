<!DOCTYPE html>
<html>
<head>
	<title> TES AKHIR </title>
</head>
<body>
	<center><h1>Inputkan Ukuran Balok</h1></center>
	<form>
		Panjang: <input type="text" name="panjang"><br>
		Lebar: <input type="text" name="lebar"><br>
		Tinggi: <input type="text" name="Tinggi"><br>
		Hitung apa? <select name="pilih">
			<option value="volume">Volume
			<option value="keliling">Keliling
			<option value="luas">Luas
		</select><br>
		<input type="submit" name="hitung" value="Hitung">
	</form>
</body>
<?php
	if ($_SERVER["REQUEST_METHOD"]=='POST'){
		$panjang= $_POST["nama"];
		$lebar= $_POST["gender"];
		$tinggi= $_POST["Tingi"];
		$hitung= $_POST["pilih"];
		if($hitung=="volume"){
			$hasil=$panjang*$lebar*$tinggi;
		}
		else if($hitung=="keliling"){
			$hasil=(4*$panjang)+(4*$lebar)+(4*$tinggi);
		}
		else {
			$hasil=(2*$panjang)+(2*$lebar)+(2*$tinggi);
		}

	echo "<h2> Anda Memilih Menghitung $hitung, yang menghasilkan $hitung balok= $hasil"
	}
?>
</html>