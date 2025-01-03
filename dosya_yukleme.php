<html>
<head>
    <meta charset="UTF-8">
    <title>DOSYA YÜKLEME</title>
</head>
<body>
   <form name="form" action="" method="post" enctype="multipart/form-data">
    <h3>DOSYA YÜKLEME İŞLEMİ</h3>
    Dosya Seçiniz:<input type="file" name="dosya" size=40>
    <input type="submit" value="Gönder">       
   </form>
</body>
</html>
<?php
$dosya=$_FILES["dosya"]["tmp_name"];
$isim=$_FILES["dosya"]["name"];
$boyut=$_FILES["dosya"]["size"];
$max_boyut=1024*1024*3;
$tipler=$_FILES["dosya"]["type"];
$uzanti=explode("/",$tipler);
$gecerli_tipler=array(
"image/png",
"image/gif",
"image/jpg",
"image/jpeg");
if($_FILES["dosya"]["error"]==0)
{
    if(in_array($tipler,$gecerli_tipler))
    {
        if($boyut>$max_boyut)
        {
            echo "Yüklenen dosya boyutu en fazla 3 Mb olabilir";
        }
        else
        {
            if(move_uploaded_file($dosya,$isim))
            {
                echo "Dosya Yüklendi";
            }
            else
            {
                echo "Dosya Yüklenemedi";
            }
        }
            
    }
    else
    {
        echo "Sadece PNG,JPG,GİF ve JPEG dosyaları yüklenebilir.";
    }
}
else
{
    echo "Bir sorun oluştu";
}
?>
