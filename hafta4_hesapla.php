<?php
if(isset($_POST["kaydet"]))
{
    $kadi=$_POST["ad"];
    $ksoyad=$_POST["soyad"];
    $kvize=$_POST["vize"];
    $kfinal=$_POST["final"];
    $kproje=$_POST["proje"];
    $ortalama=($kvize*0.5)+($kfinal*0.25)+($kproje*0.25);
    echo "Merhaba ".$kadi." ".$ksoyad."<br>"."Vize Notun: ".$kvize."<br>"."Final Notun: ".$kfinal."<br>"."Proje Notun: ".$kproje."<br>"."Ortalaman: ".$ortalama."<br>";
    if($ortalama>40 && $kproje>=40)
    {
        echo "Tebrikler ".$ortalama." ortalama ile dersi tamamladın";
    }
    else
    {
        echo "Maalesef".$ortalama." ile dersten kaldın";
    }
}
?>