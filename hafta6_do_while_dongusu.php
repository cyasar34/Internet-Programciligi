<?php
//Ekrana 5 kere isminizi yazdırma
/*$sayi = 1;
do{
 echo $sayi." - ÇİSEM YAŞAR" ."<br>";
 $sayi++;
}
while($sayi<=5);*/

//30 sayısının bölenleri
$sayi = 30;
$bolen = 1;
do 
{
 if($sayi%$bolen==0) 
 {
 echo $bolen." sayısı " .$sayi." sayısının bir bölenidir."."<br>";
 }
 $bolen++;
}
while($bolen<=$sayi);
?>