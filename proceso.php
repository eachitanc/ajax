<?php 
   $aerolinea=$_POST["aerolinea"];
   $origen=$_POST["origen"];
   $destino=$_POST["destino"];
   $indentificacion=$_POST["indentificacion"];
   $numeroID=$_POST["numero"];
   $nombre=$_POST["nombre"];
   $tel=$_POST["tel"];
   $dir=$_POST["dir"];
   $fecha=$_POST["fecha"];
   
   //Archivos
   $file = fopen("lista.txt","a");
   fwrite($file,$numeroID.";".$aerolinea.";".$origen.";".$destino.";".$indentificacion.";".$nombre.";".$tel.";".$dir.";".$fecha.PHP_EOL);
   fclose($file);

   echo'<script type="text/javascript">
   alert("Reserva Exitosa!!!");
   window.location.href="reserva.php";
   </script>';

?>
