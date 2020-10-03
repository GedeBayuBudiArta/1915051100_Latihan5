<!DOCTYPE html>
<html>
    <head>
<title>Baris Aritmatika / Gede Bayu Budi Arta(1915051100)</title></head>
<body>
<body style="background: url(https://i.ibb.co/C6GcxYx/pexels-asad-photo-maldives-457881.jpg);background-size:cover;background-attachment: fixed;">
<table border="3" style="border-collapse:collapse"width="100%" cellpadding="6"
bordercolor="green"
<br><h3>Aplikasi Baris Aritmatika</h3></br>
<form action="" method="post">
Masukan Barisan Aritmatika: <br><input type="text" name="ba"><br><br>
Suku Pertama:<br><input type="text" name="a"><br><br>
Beda: <br><input type="text" name="b"><br><br>
Suku Ke- : <br><input type="text" name="un"><br><br>
<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php 
if (isset($_POST['submit'])){
    $baris = $_POST['ba'];
    $suku1 = $_POST['a'];
    $suku2 = $_POST['b'];
    $suku_n = $_POST['un'];  

   $hasil1 = $suku_n - 1;
   $hasil2 = $hasil1 * $suku2;
   $hasil = $suku1 + $hasil2;
   echo '<br>';
   echo "Suku Ke- ".$_POST['un'] ;
   echo " dari Baris Aritmatika  " .$_POST["ba"] ;
   echo "  adalah  ";
   echo $hasil;
    
}
?>
