<?php
/*$bilgiler=array(
"Eğitim Bilgileri: ",
    "Lisans: "=>"Marmara Üniversitesi",
"Deneyim: ",
    "Öğretim Görevlisi"=>"Gelişim Üniversitesi",
"Programlama Dilleri: ",
    "PHP","C#","HTML 5","CSS","Phyton",
);
echo "<pre>";
print_r($bilgiler);
echo "</pre>";

echo $bilgiler["Lisans: "];*/


$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
echo "<b>Haftanın Günleri</b>"."<br>";
for($i=0;$i<count($gunler);$i++)
{
    echo $gunler[$i]."<br>";
}














?>