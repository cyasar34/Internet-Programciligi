<?php
//Ekrana Gelişim Üniversitesi Web Tasarımı ve Kodlama Programı yazdırma
/*for($i=0;$i<=10;$i++)
{
echo "<b>Gelişim Üniversitesi</b> <u>Web Tasarımı ve Kodlama Programı</u>"."<br>";
}*/
 
//1 ile 100 arasındaki sayılardan hem 2'e hem de 5'e tam bölünen sayıları ve bu sayıların toplamını ekrana yazdırma 

$toplam=0;
echo "1 ve 100 arasındaki sayılardan hem 2'ye hem de 5'e bölünen <br> sayıları listeleme ve toplam sonucunu bulalım."."<br>";
for($i=1; $i<=100;$i++)
{
    
    if ($i%2==0 && $i%5==0)
     {
        echo $i."<br>";
        $toplam=$toplam+$i;
     }
}
echo "<b>Toplam sonucu: </b>".$toplam;
?>
