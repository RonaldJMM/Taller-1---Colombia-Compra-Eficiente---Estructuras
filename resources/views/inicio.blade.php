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

     background:  url(img/technology-3190200_1920.jpg) center center no-repeat;
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

  <h1>BIENVENIDO!!</h1>

</section>

<section id="cover">   
<div class="container">
      
  <form  >
        
        {{ csrf_field() }}
        
             <br>
             <br>
             <br>
             <br>

             <br>
              <br>
            
  
        <h2 align="center"> <strong>COLOMBIA COMPRA EFICIENTE</strong>  </h2>
        <br>
             
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
              </form>

        </div>
                  
        </section> 

        </body>
</html>
@stop