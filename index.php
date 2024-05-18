<?php
include "main2.php" ;
$proses = new Beli();
$proses->setHarga(15420, 16130 , 18310 , 16510 );
if(isset($_POST['kirim']) ) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];
    echo "<br>";

    $proses->cetakPembelian();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<br><body>

<div class = "atas">
    <div class= "liter">
    <form action="" method = "post">
        <label for="liter">Masukan jumlah liter :</label>
        <input type="number" name = "liter" required> <br>
    </div>
    <div class ="jenis">
        <label for = "jenis">Masukkan jenis Bahan bakar : </label>
        <select name="jenis" id="haha" required>
         <option value="SSuper">S-Super</option>
         <option value="SVPower">SV-Power</option>
         <option value="SVPowerDiesel">SV-Power Diesel</option>
         <option value="SVPowerNitro"> SV-Power-Nitro</option>
        </select>
</div>

        <button name = "kirim">kirim</button>

    </form>
</div>
</body></br>
</html>[]