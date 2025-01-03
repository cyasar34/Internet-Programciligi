<?php
$okul=array(
    "8/A"=>array(
        "Hakan"=>95,
        "Fatih"=>45,
        "Ayşe"=>65),
    "8/B"=>array(
        "Timur"=>55,
        "Emine"=>80,
        "Ömer"=>55),
);
    echo "<pre>";
    print_r($okul);
    echo "</pre>";

echo "Notu:".$okul["8/B"]["Timur"]."<br>";
echo "Notu:".$okul["8/A"]["Ayşe"];




?>
