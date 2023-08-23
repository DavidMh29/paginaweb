<?php
 $servidor ="localhost";
 $usuario = "root";
 $clave ="";
 $basededatos = "formulario";

 $enlace = mysqli_connect($servidor , $usuario , $clave, $basededatos);

 if(!$enlace){
    echo"Error en la conexion con el servidor";
}

?> 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Formulario.css">
    </head>
    <body>
        <main>
        <form action="#" class="formulario" id="formulario" method="POST"> 
           <section class="form-register">
            <h5><b>REGISTRO</b></h5>
            
                <input class="controls" type="text" name="cedula"   placeholder="cedula" maxlength="15" minlength="10" required>
                <input class="controls" type="text" name="apellidos"   placeholder="apellidos" maxlength="25" minlength="15" required>
                <input class="controls" type="text" name="nombres"  placeholder="nombres" maxlength="25" minlength="11" required>
                <input class="controls" type="text" name="edad"   placeholder="edad" maxlength="2" minlength="2" required>
                <input class="controls" type="text" name="correo"   placeholder="ejemplo@servidor.com" maxlength="30" minlength="11" required>
                <input class="controls" type="password" name="contraseña"   placeholder="Contraseña" maxlength="15" minlength="8" required>
                <input class="controls" type="text" name="dirección"   placeholder="Dirección" maxlength="30" minlength="25" required>
                <input class="controls" type="text" name="teléfono"  placeholder="Teléfono" maxlength="10" minlength="10" required>

            <!--Utilizamos tipo  Radio-->
                <br></br>
                <input name="Genero" type="radio" value="Genero"> Masculino
                <input name="Genero" type="radio" value="Genero"> Femenino
             
            <!--Botones de acción-->
                <br> </br>
                <input  type="submit" name="Buscar" value="Buscar" >
                <input  type="submit" name="Eliminar" value="Eliminar" >
                <input  type="submit" name="Grabar" value="Grabar">
                <br></br>
             
            <p>Estoy de Acuerdo con <a href="#">Terminos y Condiciones</a></p>
                <input class="button" type="submit" name="registrarse" value="Registrar">
            <p><a href="Login 2.html"> ¿Ya tengo cuenta? </a></p>

            <!--Llamado al Script de validación-->
            <script src="formulario.js"></script>

        </section>
     </body>
</html>

<?php
   if(isset($_POST['registrarse'])){
     $cedula = $_POST ["cedula"];
     $apellidos = $_POST ["apellidos"];
     $nombres = $_POST ["nombres"];
     $edad = $_POST ["edad"];
     $correo = $_POST ["correo"];
     $contraseña = $_POST ["contraseña"];
     $dirección = $_POST ["dirección"];
     $teléfono = $_POST ["teléfono"];
    
     $insertarDatos = "INSERT INTO datos VALUES ('$cedula', 
                                                  '$apellidos',
                                                  '$nombres',
                                                  '$edad',
                                                  '$correo', 
                                                  '$contraseña',
                                                  '$dirección',
                                                  '$teléfono')";

     $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
     
     if(!$ejecutarInsertar){
        echo"Error En la linea de sql";
     }
   } 
?>     
        
        
