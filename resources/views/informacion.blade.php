@extends('master')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Informacion</title>

<style>
  *{
     
     margin: 0;
     padding: 0;


}
  #cover{

     background:  url(img/market.jpg) center center no-repeat;
      background-size: cover;
      color: black;
      height: 60%;
      background-color: background-color:rgb(255,0,0); ;
      text-align: center;
      align-items: center;
      
      

 }

 #letrab{

     
   color: #000;
   



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

  <h1>Informacion de Productos</h1>

</section>

<section id="cover">   
<div class="container">
      
  <form action="{{ url('informacionC')}}" method="POST" >
        
        {{ csrf_field() }}
        
             <br>
             <br>
             <br>
             <br>

             <br>
              <br>
            
  
        <h2 align="center"> <strong>Informacion - Productos</strong>  </h2>
        <br>
             
        
                    
                   <h2 align="center"> <button  type="submit" class="btn btn-primary btn-sm">Buscar</button></h2>
                   <!--  <br><button type="submit"> Buscar </button> --> 

                   <br>
                   <br>
                   <br>
                     <h5 align="left"><span class="badge badge-pill badge-info">Importante</span></h5>
                   <p id="letrab" align="left">Para poder efectuar la compra en COLOMBIA COMPRA EFICIENTE debe saber el numero de contrato y el valor del mismo </p>

                   <br>
                   <br>
                   <br>


                 
              </form>





        </div>
                  
        </section> 




        </body>
</html>
@stop
