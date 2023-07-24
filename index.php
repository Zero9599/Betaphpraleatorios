





<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>entrega venta PHPy HTML</title>
</head>
<body>
   
   <form class="form-register" action="recibe.php"   method="post">
      <h2>Ruta de destino</h2>
      <input class="Cnombre" type="text" name="nombre"  placeholder="Ingrese su nombre">
      <input class ="Cemail" type="email" name="email"  placeholder="Ingrese su correo">

      <h2>Seleccione su genero</h2>
      <label class="Csexo" name="sexo"for="hombre">Hombre</label>
      <input type="radio" name="sexo" value="hombre" id="hombre" >
      <label class="Csexo" name="sexo"for="mujer">Mujer</label>
      <input type="radio" name="sexo" value="mujer" id="mujer" >
      <h2>Seleccione su año de registro</h2>
      <select class="Caño" name="year" id="year"><?php
         for ($i = 1999; $i < 2022; ++$i) { ?>
         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         <?php }

         ?></select>
      <h2>Seleccione su destino </h2>
      <div>
         
         <input type="checkbox"  name="ciudad[]" value="lima">lima
         <br>
         <input type="checkbox"  name="ciudad[]" value="arequipa">arequipa
         <br>
          <input type="checkbox"  name="ciudad[]" value="ica">ica
         <br>
          <input type="checkbox"  name="ciudad[]" value="cusco">cusco
         <br>
          <input type="checkbox"  name="ciudad[]" value="tumbez">tumbez
         <br>
         
      </div>
      <h2>¿Especificaciones de la entrega este destino?
         <div class="Dinteresa">
            <textarea   name="interes" id="interes" rows="4" cols="40"></textarea>
         </div>
         <label for="termino"><p class="parrafo">Listo <a href="#"> Condiciones el negocio</a></p></label>

         <input class="boton" type="submit" value="Enviar">
   </form>
</body>
</html>