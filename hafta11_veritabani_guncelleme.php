<?php
include "hafta11_veritabani_baglanti.php";
//Veritabanından exec ile veri güncelleme
$guncelle=$db->exec("UPDATE deneme SET ad='Deneme' WHERE soyad='Deneme'");
if($guncelle)
{
    echo "Güncelleme başarılı";
}
else
{
    echo "Güncelleme başarısız";
}
//Veritabanından prepare ile veri güncelleme
$sorgu=$db->prepare("UPDATE deneme SET 
ad=?,
soyad=?
");
$guncelle=$sorgu->execute(array("çisem","yaşar"));
if($guncelle)
{
    echo "Güncelleme başarılı";
}
else
{
    echo "Güncelleme başarısız";
}
?>