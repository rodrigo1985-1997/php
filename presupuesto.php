<H1>Calcular la cantidad de dinero para algunas areas de la salud</H1></CENTER>
<?php
 
 $monto=$_POST['monto'];
  
 echo "El monto presupuestal es: ".$monto."<br>";
   
 $ginecologia=$monto*0.4;
 $traumatologia=$monto*0.3;
 $pediatria=$monto*0.3;

 echo "La cantidad de dinero para el area de ginecologia es: ".$ginecologia."<br>";
 echo "La cantidad de dinero para el area de traumatologia es: ".$traumatologia."<br>";
 echo "La cantidad de dinero para el area de pediatria es: ".$pediatria."<br>";
 
?>
