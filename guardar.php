<?php
  $ced=$_POST["cedula"];
  $nombre=$_POST["nom"];

  $db=mysqli_connect("localhost","root","root");

  mysqli_select_db($db, "angela");// Seleccion la base de datos correcta

  $result = mysqli_query($db, "insert into clientes values('$ced','$nombre')");

  echo "guardado el nombre ".$nombre
 ?>
