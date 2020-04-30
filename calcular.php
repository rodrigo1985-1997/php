<?php
$par1=$_POST ['par1'];
$par2=$_POST ['par2'];
$par3=$_POST ['par3'];
$exaf=$_POST ['exaf'];
$traf=$_POST ['traf'];
$promedio=($par1+$par2+$par3+$exaf+$traf)/5;
echo "<b> nota uno es:</b>$par1<br>";
echo "<b> nota dos es:</b>$par2<br>";
echo "<b> nota tres es:</b>$par3<br>";
echo "<b> examen final es:</b>$exaf<br>";
echo "<b> trabajo final es:</b>$traf<br>";
echo "<b> su promedio es:</b>$promedio<br>";
if ($promedio>=3){
echo "el alumno aprovo";
}else{
    echo "el alumno no aprovo";
} 
?>