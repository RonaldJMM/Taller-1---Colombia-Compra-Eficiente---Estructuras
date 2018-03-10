@extends('master')

@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla general</title>

<style >
	
body{

       background:  url(img/nube.jpg) center center no-repeat;
      background-size: cover;
      color: black;
      height: 60%;
    
      text-align: center;
      align-items: center;



}

table{

     margin-left: 2%;
     margin-top: 2%;


}




</style>	

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
	
   <section class="w3-container w3-teal">

  <h1>Resumen de la compra efectuada:</h1>

  </section>


  <section >
  	
       <table class="table">
  <thead class="thead-inverse">

   <h2 align="center">Datos Generales:</h2>
    

    <tr>

      <th width="25%">Nombre del Comprador:</th>
      <td><?php echo $nombreContrato; ?></td>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Apellido del comprador:</th>
       <td><?php echo $apellidoContrato; ?></td>

    </tr>
    <tr>
      <th scope="row">Cedula:</th>
      <td><?php echo $cedulaContrato; ?></td>
      
    </tr>
    <tr>
      <th scope="row">Numero del contrato:</th>
       <td><?php echo $numeroContrato; ?></td>
    </tr>
     
      <tr>
      <th scope="row">Descripcion del contrato:</th>
       <td><?php echo $descripcionContrato; ?></td>
    </tr>
     
      <tr>
      <th scope="row">Valor del contrato:</th>
       <td><?php echo $valorContrato; ?></td>
    </tr>

     <tr>
      <th scope="row">Numero del contrato:</th>
       <td><?php echo $numeroContrato; ?></td>
    </tr>

     <tr>
      <th scope="row"><br><br>Productos registrados:</th>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Clase</th>
      <th scope="col">Tipo</th>

    </tr>
  </thead>
  <tbody>
    <?php 	$contador3=0;
    		foreach ($datos as $key => $value) {
                    foreach ($value as $key2 => $values) {
                    	
                    	echo "<tr>";
                        if($key2=="Codigo"){
                            if($values==$codigoProducto1){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto2){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto3){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto4){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto5){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto6){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto7){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto8){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto9){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }
                            if($values==$codigoProducto10){
                            	$contador3++;
                            	echo "<th>",$contador3,"</th>";
                                foreach ($value as $key3 => $values2) {
                                    echo "<th>",$values2,"</th>";
                                }
                                
                            }

                        }
                        echo "</tr>";
                    }
                }

    	?>
  </tbody>
</table>





  </section>











</body>
</html>

@stop