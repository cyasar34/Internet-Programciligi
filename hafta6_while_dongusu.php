
<?php
//1'den 10'a kadar yazma
/*$sayi=1;
while($sayi<=10){
    echo "Sayı: ".$sayi."<br>";
    $sayi++;
}*/

//1'den 10'a kadar sayıların toplamı
$sayi=1;
echo $sayi;
$toplam=$sayi;
while($sayi<10)
{
    $sayi++;
    $toplam+=$sayi;
    echo "+".$sayi;
}
echo "=".$toplam;
?>
