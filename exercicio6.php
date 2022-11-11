<?php
$link =$_POST['l']; 

$inverter = "http://".strrev($link);

//echo "Link invertido ".$inverter;

header("Location: $inverter");
//echo "<a href='https://'".$inverter."> me clique para ir </a>";
?>