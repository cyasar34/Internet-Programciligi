<?php
include "hafta11_veritabani_baglanti.php";
//Veritabanına Exec Kullanarak Manuel Veri Ekleme
$kayit=$db->exec("INSERT INTO deneme SET id='4',ad='Gelişim',soyad='Üniversitesi'");
if($kayit)
{
    echo "Kayıt işlemi başarılı";
}
else
{
    echo "Kayıt işlemi başarısız";
}
//Veritabanına Prepare Kullanarak Manuel Veri Ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET 
id=?,
ad=?,
soyad=?
");
$kayit=$sorgu->execute(array("5","Tuğba","Saray Çetinkaya"));
if($kayit)
{
    echo "Kayıt işlemi başarılı";
}
else
{
    echo "Kayıt işlemi başarısız";
}

//Veritabanına Prepare Kullanarak Manuel Veri Ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET 
id=:id,
ad=:ad,
soyad=:soyad
");
$kayit=$sorgu->execute(array(
"soyad"=>"Benli",
"id"=>"8",
"ad"=>"Sena Nur"));
if($kayit)
{
    echo "Kayıt işlemi başarılı";
}
else
{
    echo "Kayıt işlemi başarısız";
}
?>
