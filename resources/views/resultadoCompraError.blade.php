@extends('master')
@section('contenido')
<!DOCTYPE html>
<html lang="en">

<style>
	
 body{

     background:  url(img/colombia.jpg) center center no-repeat;
      background-size: cover;
      color: black;
      
      width: 100%;
      height: 100%;
      margin-top:1%;
      margin-left: 1%;
      margin-right: 1%;



}


#error{

     
     margin-top: 1%;
     margin-left: 3%;
     margin-right: 25%;
     width: 100%;
     height: 100%;
}	




</style>



<head>

	<meta charset="UTF-8">
	<title>Alerta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>



<body>



<header >
	<div  class="w3-container w3-teal">
       <h1 >Oooppppsssss!!..</h1>
   </div>

</header>

         
	  <section>
	  	
        <article>
        	<div id="error" class="alert alert-danger" role="alert">
           <strong>Alerta:  </strong> El valor de los productos que desea comprar, superan el valor del contrato de colombia compra eficiente,.
          </div>
          
         
          <div id="error">
          <input type="button" onclick="alert('¡Por favor seleccione los productos mas importantes que no superen el valor del contrato o digite un valor de contrato mas grande   !')" value="Solucion" /> 
          

          </div>
        </article>
         


	  </section>


  <aside>
  	
  </aside>

  <footer>
  	

  </footer>




</body>


</html>
@stop