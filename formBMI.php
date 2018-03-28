<!DOCTYPE html>
<html>
<head>
	<title> Jurnal No 1 </title>
</head>
<body>
	<center><h1> SIMPLE BMI CALCULATOR </h1></center>
	<font color="red"> * Harus Di-isi</font>
	<form method="POST">
		Nama: <input type="text" name="nama"><br><br>
		Gender: <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
				<input type="radio" name="gender" value="Perempuan">Perempuan<br><br>
		Berat: <input type="text" name="Berat">KG<font color="red">*</font><br><br>
		Tinggi: <input type="text" name="Tingi">CM<font color="red">*</font><br><br>
		<input type="submit" name="Submit" value="Submit">
	</form>
</body>
<?php
	if ($_SERVER["REQUEST_METHOD"]=='POST'){
		$nama= $_POST["nama"];
		$gender= $_POST["gender"];
		$berat= $_POST["Berat"];
		$tinggi= $_POST["Tingi"];
		echo "<h1>Hasil Perhitungan</h1>";
		echo "Nama:$nama <br>";
		echo "Gender:$gender <br>";
		echo "Berat:$berat <br>";
		echo "Tingi:$tinggi <br>";	
		$BMI = ($berat/(($tinggi/100)^2));
		if ($BMI<18.5){
			echo "Underweight";
		}
		else if ($BMI>=18.5 && $BMI <=25){
			echo "Normal";
		}
		else if ($BMI>25 && $BMI <=30){
			echo "Overweight";
		}
		else{
			echo "Obessed";
		}
	
	}
?>
</html>