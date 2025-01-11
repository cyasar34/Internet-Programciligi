<?php
function carpim()
{
    $carpim=1;
    $parametre_sayisi=func_num_args();
    for($i=0;$i<$parametre_sayisi;$i++)
    {
        $carpim*=func_get_arg($i);
    }
    return $carpim;
}
echo carpim(1,2,5,8,9)."<br>";
echo carpim(22,5);
?>