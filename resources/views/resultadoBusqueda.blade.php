@extends('master')

@section('contenido')

	<section class="w3-container w3-teal">

	  <h1>Resultados de Busqueda: </h1>

	</section>
   <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Valor</th>
      <th scope="col">Clase</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>

	<?php $contador=0; foreach ($codigos as $iterador => $value) { 
     echo "<tr>";
     
     foreach ($value as $categoria => $values){ 
          
          if($categoria==$opciones){

            if($values==$parametro){
              $contador++;

              echo "<th>",$contador,"</th>";
              foreach ($value as $categoria => $values) {
                echo "<th>";
                    
                    echo $values;
                echo "</th>";
                }
            }
          }
           
      }
      echo "</tr>";         
   }

   ?>

  
@stop