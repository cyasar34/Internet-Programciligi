<html>
<head>
    <meta charset="UTF-8">
    <title>Sayı Kontrolü</title>
</head>
<body>
   <h3>Sayının pozitif-negatif ve tek-çift olma durumu kontrolü</h3>
   <form name="form" action="" method="post">
      Sayı Giriniz:
      <input type="text" name="sayi">
      <input type="submit" name="kontrol" value="Kontrol Et">
   </form>
</body>
</html>
<?php
if(isset($_POST["kontrol"]))
{
    $ksayi=$_POST["sayi"];
    if($ksayi>0 && $ksayi%2==0)
    {
        echo "Sayı hem pozitif hem de çifttir.";
    }
    else if($ksayi>0 && $ksayi%2==1)
    {
        echo "Sayı hem pozitif hem de tektir";
    }
    else if($ksayi<0 && $ksayi%2==0)
    {
        echo "Sayı hem negatif hem de çifttir.";
    }
    else if ($ksayi<0 && $ksayi%2==-1)
    {
        echo "Sayı hem negatif hem de tektir.";
    }
    else
    {
        echo "Sayı değeri sıfırdır";
    }
}









?>
