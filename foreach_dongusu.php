<?php
//Haftanın Günleri
/*$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
foreach($gunler as $gun)
{
    echo $gun."<br>";
}*/

//Alfabedeki Kalın ve İnce Ünlü Harfler
$KalinVeInceUnluler=array("a","ı","o","u","e","i","ö","ü");
echo "Alfabedeki Kalın ve İnce Ünlü Harflerin Listesi:"."<br>";
foreach($KalinVeInceUnluler as $alfabe=>$sira)
{
    echo $alfabe." : ".$sira."<br>";
}
?>
