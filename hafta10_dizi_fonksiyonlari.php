<?php
// Dizilerde Ekle Çıkar Fonksiyonları

/*echo "<h3>Array_unshift() Kullanımı</h3>";
$diller=array("PHP","C#");
array_unshift($diller,"Javascript","Phyton");
print_r($diller);
echo "<h3>Array_shift() kullanımı</h3>";
array_shift($diller);
print_r($diller);
echo "<h3>Array_push() kullanımı</h3>";
array_push($diller,"Vue","Laravel");
print_r($diller);
echo "<h3>Array_pop Kullanımı</h3>";
array_pop($diller);
print_r($diller);
echo "<h3>Unset Kullanımı</h3>";
unset($diller["2"]);
print_r($diller);*/


//Dizi Birleştirme

/*echo "<h3>Dizi Elemanlarını Birleştirme</h3>";
$marmara_bolge=array("Balıkesir","İstanbul","Bursa");
$ege_bolge=array("İzmir","Manisa","Aydın");
$tum_iller=array_merge($marmara_bolge,$ege_bolge);
echo "<pre>";
print_r($tum_iller);
echo "</pre>";*/



//Dizideki Ortak Elemanı Bulma

/*echo "<h3>Dizideki Ortak Eleman</h3>";
$dizi1=array("Araba","Kalem","Ev");
$dizi2=array("Araba","kalem","masa");
$dizi3=array("Kalem","Araba","Sandalye");
$dizi4=array("Masa","Kalem","Araba");
$ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
echo "<pre>";
print_r($ortak_bul);
echo "</pre>";
*/

//Dizi Elemanlarını Tek Seferde Çıktı Alma
 
/*echo "<h3>İmplode Kullanımı</h3>";
$programlamadilleri=array("PHP","HTML","CSS","Javascript");
$duzenle=implode(" | ",$programlamadilleri);
echo $duzenle;*/





//Dizi Elemanlarından Rastgele Seçim

/*echo "<h3>Diziden Rastgele Eleman Seçme</h3>";
$sehir=array("Balıkesir","İstanbul","İzmir","Van","Erzurum","Muğla");
$rastgele=array_rand($sehir);
echo $sehir[$rastgele];*/



//Dizi Elemanlarını Tersine Çevirme

/*echo "<h3> Dizi elemanlarını tersine çevirme</h3>";
$isim=array("Çisem","Tuğba","Mehmet","Aysun","Bilal");
$ters_cevir=array_reverse($isim);
echo "İlk hali"."<br>";
echo "<pre>";
print_r($isim);
echo "</pre>";
echo "Ters hali"."<br>";
echo "<pre>";
print_r($ters_cevir);
echo "</pre>";*/


//Dizi Sayıcıları

echo "<h3>Dizi Sayıcıları</h3>";
$sayi=array(6,2,4,1,1,3,5,6);
echo "Eleman sayısı: ".count($sayi)."<br>".
    "Dizideki elemanlarının çarpım sonucu: ".array_product($sayi)."<br>".
    "Dizideki elemanlarının toplam sayısı: ".array_sum($sayi)."<br>".
    "Dizideki Tekrar Eden Elemanlar: ";
print_r(array_count_values($sayi));








































































































?>