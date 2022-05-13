<?php

$ad= $_POST['ad'];
$soyad=$_POST['soyad'];
$cinsiyet=$_POST['cinsiyet'];
$dogumtarihigun=$_POST['dogumtarihigun'];
$dogumtarihiay=$_POST['dogumtarihiay'];
$dogumtarihiyil=$_POST['dogumtarihiyil'];
$mail=$_POST['mail'];
$mesaj=$_POST['mesaj'];
if( $ad!="" && $soyad!="" && $cinsiyet!="" && $dogumtarihigun!="" && $dogumtarihiay!="" && $dogumtarihiyil!="" && $mail!="" && $mesaj!=""){
echo"Adı: $_POST[ad] <br>";
echo"Soyadı: $_POST[soyad] <br>";
echo"Cinsiyet: $_POST[cinsiyet] <br>";
echo"Doğum Tarihi: $_POST[dogumtarihigun]";
echo".$_POST[dogumtarihiay]";
echo".$_POST[dogumtarihiyil] <br>";
echo"E-Mail Adresi: $_POST[mail] <br>";
echo"Mesaj: $_POST[mesaj] <br>";
} 

?>