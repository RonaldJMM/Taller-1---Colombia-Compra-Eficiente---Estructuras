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
      position: relative;
      width: 100%;
      height: 90%;
      margin-top:2%;
      margin-left: 2%;
      margin-right: 2%;
    
    
      
 }

 #letrab{

     
   color: #FFFFFF;
  


 }

 #izquierda { position: absolute;
              width:30% ;
              margin-top: 2%;
              float: left;
              height: 48%;
              left: 5%;
                 } 

 #derecha { position: relative;
            float: right;
            width: 65%;
            height: 50%;
            border: currentColor;
            right: 5%;
            margin-top:2%;
            margin-bottom: 2%
            

             }    

 .esqinfder { position: relative;
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



<div class="container">
      
  <form class="w3-container" action="{{ url('compras')}}" method="POST" >
        
        {{ csrf_field() }}
       
       <div id="izquierda">  

              <h2 >Registrar datos de representante legal</h2>
              <br>
              <br>
              <p align="left" >      
             <label><b  >Nombres Representante Legal</b></label>
             <input type="text" size="25" maxlength="30" ></p>
           

             <p align="justify">      
             <label><b>Apellidos Representante Legal</b></label>
             <input type="text" size="25" maxlength="30"></p>
             <p align="justify" >

            <label ><b>Cedula..................................</b></label>
            <input type="text" size="25" maxlength="30"></p>
            <p align="justify">
            <label><b>Numero de contrato................ </b></label>
            <input type="text" size="25" maxlength="30"></p>

           <p align="justify">
         
           <label><b>Descripcion del contrato.........</b></label>
          <input type="text" size="25" maxlength="30"></p>
         <p align="justify">
        <label><b>Valor total del contrato..........</b></label>
          <input type="text" size="25" maxlength="30"></p>
 

          <div class="esqinfder"></div> 
         
    </div>
  

          


            
    <div id="derecha">  
             <h2  id="letrab" align="center"><strong>Comprar productos</strong></h2>
             
  
            <h3 align="center"> Ingrese por favor los codigos de los productos que desea comprar:  </h3>

            <p align="center" >      
           <label><b  >Producto 1:</b></label>
          <input type="text" size="25" maxlength="30" ></p>
           

           <p align="center">      
           <label><b>Producto 2:</b></label>
          <input type="text" size="25" maxlength="30"></p>
            <p align="center" >

           <label ><b>Producto 3:</b></label>
            <input type="text" size="25" maxlength="30"></p>
            <p align="center">

            <label><b>Producto 4: </b></label>
          <input type="text" size="25" maxlength="30"></p>
          <p align="center">
         
         <label><b>Producto 5:</b></label>
          <input type="text" size="25" maxlength="30"></p>
         <p  align="center">
        

           <p align="center" >      
           <label><b  >Producto 6:</b></label>
          <input type="text" size="25" maxlength="30" ></p>
           

           <p  align="center">      
           <label><b>Producto 7:</b></label>
          <input type="text" size="25" maxlength="30"></p>

            <p align="center" >
           <label ><b>Producto 8:</b></label>
            <input type="text" size="25" maxlength="30"></p>
            <p align="center">

            <label><b>Producto 9: </b></label>
          <input type="text" size="25" maxlength="30"></p>
          <p align="center">
         
         <label><b>Producto10:</b></label>
          <input type="text" size="25" maxlength="30"></p>
         <p align="center">
       
            
           <h1 align="center"> <button  type="submit" class="btn btn-primary btn-sm">Comprar</button></h1>
           <!--  <br><button type="submit"> Buscar </button> --> 

       <div class="esqinfder"></div>     
   
    </div>
         
      </form>

   

</body>
</html>
