<html>
<head>
    <meta charset="UTF-8">
    <title>AGİ FORM</title>
</head>
<body>
   <form name="form" action="" method="post">
       <table width="600" border="0">
           <tr>
               <td>TC:</td>
               <td><input type="number" name="tc"></td>
           </tr>
           <tr>
               <td>AD:</td>
               <td><input type="text" name="ad"></td>
           </tr>
           <tr>
               <td>SOYAD:</td>
               <td><input type="text" name="soyad"></td>
           </tr>
           <tr>
               <td>CİNSİYET:</td>
               <td><input type="radio" name="cinsiyet" value="Kadın">Kadın
               <input type="radio" name="cinsiyet" value="Erkek">Erkek</td>
           </tr>
           <tr>
               <td>MAAŞ:</td>
               <td><input type="number" name="maas"></td>
           </tr>
           <tr>
               <td>ÇOCUK SAYISI:</td>
               <td> 
               <input type="radio" name="cocuk_sayisi" value="1">1
               <input type="radio" name="cocuk_sayisi" value="2">2
               <input type="radio" name="cocuk_sayisi" value="3">3 ve üzeri
               </td>
           </tr>
           <tr>
              <td colspan="2">
                 <input type="submit" name="ekle" value="EKLE">
                 <input type="submit" name="listele" value="LİSTELE">
                 <input type="submit" name="degistir" value="DEĞİŞTİR">                 
                 <input type="submit" name="sil" value="SİL">
              </td>
           </tr>
       </table>
   </form>
</body>
</html>





<?php
$db=new PDO("mysql:host=localhost; dbname=isci_maas10; charset=utf8","root","");
if(isset($_POST["ekle"]))
{
    $ktc=$_POST["tc"];
    $kad=$_POST["ad"];
    $ksoyad=$_POST["soyad"];
    $kcinsiyet=$_POST["cinsiyet"];
    $kmaas=$_POST["maas"];
    $kcocuksayisi=$_POST["cocuk_sayisi"];
    $sonmaas=0;
    if($kcocuksayisi==1)
    {$sonmaas=$kmaas+500;}
    else if ($kcocuksayisi==2)
    { $sonmaas=$kmaas+600;}
    else if ($kcocuksayisi==3)
    { $sonmaas=$kmaas+700;}
    if($db)
    { echo "Veritabanına bağlantı gerçekleşti";}
    $ekle=$db->exec("INSERT INTO durum(tc,ad,soyad,cinsiyet,maas,cocuksayisi,tmaas) VALUES ('$ktc','$kad','$ksoyad','$kcinsiyet','$kmaas','$kcocuksayisi','$sonmaas')");
    if($ekle)
    {echo "Kayıt ekleme başarılı";}
    else
    {echo "Kayıt ekleme başarısız";}
}

if(isset($_POST["degistir"]))
{
    $ktc=$_POST["tc"];
    $kad=$_POST["ad"];
    $ksoyad=$_POST["soyad"];
    $kcinsiyet=$_POST["cinsiyet"];
    $kmaas=$_POST["maas"];
    $kcocuksayisi=$_POST["cocuk_sayisi"];
    $sonmaas=0;
    if($kcocuksayisi==1)
    {$sonmaas=$kmaas+500;}
    else if ($kcocuksayisi==2)
    { $sonmaas=$kmaas+600;}
    else if ($kcocuksayisi==3)
    { $sonmaas=$kmaas+700;}
    if($db)
    { echo "Veritabanına bağlantı gerçekleşti";}
    $guncelle=$db->exec("UPDATE durum SET tc='$ktc', ad='$kad',soyad='$ksoyad',cinsiyet='$kcinsiyet',maas='$kmaas',cocuksayisi='$kcocuksayisi',tmaas='$sonmaas' WHERE tc='$ktc'");
    if($guncelle)
    { echo "Güncelleme başarılı";}
    else
    { echo "Güncelleme başarısız";}
}

if(isset($_POST["sil"]))
{
    $ktc=$_POST["tc"];
    if($db)
    {echo "Veritabanına bağlantı gerçekleşti";}
    $sil=$db->exec("DELETE FROM durum WHERE tc='$ktc'");
    if($sil)
    {echo "Silme Başarılı";}
    else
    {echo "Silme Başarısız";}
}
if(isset($_POST["listele"]))
{
    $listele=$db->query("SELECT * FROM durum");
    while ($gelenveri=$listele->fetch())
    {
        echo "Adı: ".$gelenveri['ad']." ".
            "Soyadı: ".$gelenveri['soyad']." ".
            "Cinsiyet: ".$gelenveri['cinsiyet']." ".
            "Maaş: ".$gelenveri['maas']." ".
            "Çocuk Sayısı: ".$gelenveri['cocuksayisi']." ".
            "<b>Toplam Maaş</b>".$gelenveri['tmaas']."<br>";
    }
}

















?>














