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

     margin-left: 35%;
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
      <td>luis</td>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Apellido del comprador:</th>
       <td>morales</td>

    </tr>
    <tr>
      <th scope="row">Cedula:</th>
      <td>12355</td>
      
    </tr>
    <tr>
      <th scope="row">Numero del contrato:</th>
       <td>00</td>
    </tr>
     
      <tr>
      <th scope="row">Descripcion del contrato:</th>
       <td>00</td>
    </tr>
     
      <tr>
      <th scope="row">Valor del contrato:</th>
       <td>999</td>
    </tr>

     <tr>
      <th scope="row">Numero del contrato:</th>
       <th>33</th>
    </tr>

     <tr>
      <th scope="row">Productos comprados:</th>
       <th>55</th>
    </tr>



  </tbody>
</table>




  </section>











</body>
</html>

@stop