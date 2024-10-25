<?php

//KARAR YAPISI
$sayi=7;
echo "Tanımlanmış sayı değeri: ".$sayi."<br>";
if($sayi>3 && $sayi<10)
{
    echo "Sayı değeri 3'ten büyük 10'dan küçüktür";
}

//İF-ELSE YAPISI
$adi="Çisem";
$sifre=123456;
echo "Tanımlanmış kullanıcı adı: ".$adi."<br>"."Tanımlanmış kullanıcı şifresi: ".$sifre."<br>";
if($adi=="Çisem" && $sifre==123456)
{
    echo "Kullanıcı adı ve şifre doğru";
}
else
{
    echo "Kullanıcı adı ve şifre yanlış";
}

//TERNARY YAPISI
$sayi=50;
echo "Tanımlanmış sayı değeri: ".$sayi."<br>";
echo ($sayi>10)?"Sayı 10'dan büyük":"Sayı 10'dan küçük";
?>