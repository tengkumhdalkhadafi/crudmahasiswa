<?php

class laundry
{
 public function hitung_total_harga($jenis_laundry,$berat_pakaiyan,$pakaiyan_dalam = false, $membawa_struk = true)
{
$setrika_saja = 3500;
$cucisetrika = 5000;
$biaya_pakaiyan_dalam = 5000;
$tdk_bawa_struk = 10000;
$total_harga = 0;

if ($jenis_laundry == "setrika"){
echo "Harga per kg = $setrika_saja";
$total_harga = $setrika_saja * $berat_pakaiyan;
echo"<br>";
echo "$total_harga";
echo "<br/>";
}
elseif ($jenis_laundry == "cuci dan setrika"){
echo "Harga per kg = $cucisetrika";
$total_harga = $cucisetrika * $berat_pakaiyan;
echo"<br>";
echo "$total_harga";
echo"<br>";
 }


if ($pakaiyan_dalam){
 $total_harga += $pakaiyan_dalam;
echo "Biaya tambahan pakaian dalam : " . $total_harga;
 echo "<br>";
 }
if($tdk_bawa_struk){
$total_harga += $tdk_bawa_struk;
echo "Biaya tambahan tidak bawa struk";
 echo "<br>";
 }
}
}
