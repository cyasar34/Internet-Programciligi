<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form name="form" action="" method="post">
        <table>
            <tr>
                <td>1. Sayıyı Giriniz:</td>
                <td><input type="text" name="sayi1"></td>
            </tr>
            <tr>
                <td>2. Sayıyı Giriniz:</td>
                <td><input type="text" name="sayi2"></td>
            </tr>
            <tr>
                <td>Seçim Yapınız:</td>
                <td><select name="secim">
                        <option value="ucebolunme">İki sayı arasındaki 3'e bölünen sayılar</option>
                        <option value="besebolunme">İki sayı arasındaki 5'e bölünen sayılar</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="gonder" value="Gönder"></td>
            </tr>
        </table>
    </form>
    <?php
if(isset($_POST['gonder']))
{
    $ksayi1=$_POST['sayi1'];
    $ksayi2=$_POST['sayi2'];
    $ksecim=$_POST['secim'];
    switch($ksecim)
	{
		    case "ucebolunme":
		     if($ksayi1>$ksayi2)
		 	{	 $enb=$ksayi1;
				  $enk=$ksayi2;
			 }
			 else 
			 {	 $enb=$ksayi2;
				  $enk=$ksayi1;
			 } 
			for($i=$enk;$i<=$enb;$i++)
			{
				if($i%3==0)
				   echo "3'e bölünen sayılar: ". $i."<br>";
			}
		break;
        case "besebolunme":
		     if($ksayi1>$ksayi2)
			 {	 $enb=$ksayi1;
				  $enk=$ksayi2;
			 }
			 else 
			 {	 $enb=$ksayi2;
				  $enk=$ksayi1;
			 } 
			for($i=$enk;$i<=$enb;$i++)
			{
				   if($i%5==0)
				   echo "5'e bölünen sayılar: ". $i."<br>";
			}
		break;
}
}
?>
</body>

</html>
