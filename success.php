<?php
session_start();


// Verifica si la sesión está iniciada
if (!isset($_SESSION['user'])) {
    header("Location: ./index.php");
  
    exit();
}
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en alumnos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header id="banner">
        <h1>Crud de Alumnos</h1>
    </header> 

    <main>
        <form action="create.php" method="post">
            <input type="submit" value="Añadir Alumno" id="botonAgregar"><br><br>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php include('read.php'); ?>
            </tbody>
        </table>
        <br>
        <br>        
       <button class="cerrar-btn" onclick="window.location.href='./cerrar.php'">Cerrar Sesión</button> 
    </main>
   
</body>
</html>
