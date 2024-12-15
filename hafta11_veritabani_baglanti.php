<?php
try
{
    $db=new PDO("mysql:host=localhost; dbname=guvenlik2;charset=utf8","root","");
    echo "Kayıt Başarılı"."<br>";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>