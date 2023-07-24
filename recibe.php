<?php

if(!$_POST){
   header('http://localhost/tarea/formulario/');
}


$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$year=$_POST['year'];
$ciudad=$_POST['ciudad'];
$interes=$_POST['interes'];
$email =$_POST['email'];

$errores = "";

if(!empty($nombre)){
      $nombre = trim($nombre);  
      $nombre = htmlspecialchars($nombre); 
      $nombre = stripcslashes($nombre); 

      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); 
      
      

   }else{
      $errores .='por favor ingresa tu nombre ';
   }
   if(!empty($email)){
       $email = filter_var($email, FILTER_SANITIZE_EMAIL); 

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errores .= 'por favor ingresar un correo electronico valido';

         
      }else{
         $errores .= 'por favor ingresar un correo electronico';
      }    
   }


?>

<!DOCTYPE html>
<html>
<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilo.css">
   <title>Información</title>
   
</head>
<body>
   
   <table class="tabla">
      <div class="tabla_titulo">Datos de viaje</div>
      <tr>
         <td>Nombre</td>
         <td><?php echo $nombre ?></td>
         <?php if(!empty($errores)): ?>
         
      <?php endif; ?>
      </tr>
      <tr>
         <td>Email</td>
         <td><?php echo $email ?></td>
         <?php if(!empty($errores)): ?>
         
      <?php endif; ?>

      </tr>


      <tr>
         <td>Sexo</td>
         <td><?php echo $sexo ?></td>
      </tr>
      <tr>
         <td>Año</td>
         <td><?php echo $year ?></td>
      </tr>
      <tr>
         <td>Destinos</td>
         <td><?php foreach ($ciudad as $value) {
            echo $value.'-';
            
         } ?></td>
         

      </tr>
      <tr>
         <td>Su interes por esta ciudad</td>
         <td><?php echo $interes ?></td>
      </tr>
      
   </table>
</body>
</html>