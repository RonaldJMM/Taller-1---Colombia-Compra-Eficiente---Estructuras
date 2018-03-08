<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>

<style>

  section{

      position: relative;
  }
  
  #cover{

      background:  url(img/colombia.jpg) center center no-repeat;
      background-size: cover;
      color: black;
      background-color: background-color:rgb(255,0,0);opacity:0.78 ;
      text-align: center;
      align-items: center;
      position: relative;
      margin: auto;
      width: 1500px;
      height: 600px;
      margin-top: 30px;

 }

 #letrab{

     
   color: #FFFFFF;
   



 }

 #izquierda { position: relative;
              width: 700px;
               float: left;
                height: 400px; } 

 #derecha { position: relative;
              float: right;
            width: 400px;
             ;
             
              height: 400px; }    

 .esqinfder { position: absolute;
              bottom: 5px;
              right: 5px; 
              background: #ff0; }                          
</style>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<div class="w3-container w3-teal">
  <h1>Seccion compra de productos</h1>
</div>



<div id="cover">   

<div id="izquierda">

<div class="container">
      
  <form class="w3-container" action="{{ url('compras')}}" method="POST" >
        
        {{ csrf_field() }}
         

          <h2 id="letrab">Registrar datos de representante legal</h2>
          <br>
          <br>
            <p align="justify" >      
           <label><b  >Nombres Representante Legal..........</b></label>
          <input type="text" size="25" maxlength="30" ></p>
           

           <p align="justify">      
           <label><b>Apellidos Representante Legal..........</b></label>
          <input type="text" size="25" maxlength="30"></p>
            <p align="justify" >

           <label ><b>Cedula.................................................</b></label>
            <input type="text" size="25" maxlength="30"></p>
            <p align="justify">
            <label><b>Numero de contrato........................... </b></label>
          <input type="text" size="25" maxlength="30"></p>

          <p align="justify">
         
         <label><b>Descripcion del contrato.....................</b></label>
          <input type="text" size="25" maxlength="30"></p>
         <p align="justify">
        <label><b>Valor total del contrato.......................</b></label>
          <input type="text" size="25" maxlength="30"></p>
 

          <div class="esqinfder"></div> 
         
    </div>
    



   


   <div id="derecha">
 
        
      

</div>



          
</div> 

                 <br>
             <br>
             <h2  id="letrab" align="center"><strong>Registar productos</strong></h2>
             <br>

             <h4 align="center"> <input  type="text" name="nombre"></h4>
              <br>
            
  
<h3 align="center"> Buscar producto por:  </h3>
<div align="center" class="radio">
  <label >
    <input  type="radio" name="opciones" id="opciones_1">
          Codigo
  </label>
</div>
<div align="center"class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" >
        Nombre
  </label>
</div>
<div align="center" class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" >
        Clase
  </label>
</div>
<div  align="center" class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_4">
        Tipo
  </label>
</div>
            
           <h2 align="center"> <button  type="submit" class="btn btn-primary btn-sm">Buscar</button></h2>
           <!--  <br><button type="submit"> Buscar </button> --> 

       <div class="esqinfder"></div>     


  
          

         
      </form>

           <br>
           <br>
           <br>
             <h5 align="left"><span class="badge badge-pill badge-info">Importante</span></h5>
           <p id="letrab" align="left">Para poder efectuar la compra en COLOMBIA COMPRA EFICIENTE debe saber el numero de contrato y el valor del mismo </p>

           <br>
           <br>
           <br>


</div>

</body>
</html>
