<?php
session_start();


// Verifica si la sesión está iniciada
if (!isset($_SESSION['user'])) {
    header("Location: ./index.php");
  
    exit();
}
include('conexion.php');

$error_message = ''; 
if(isset($_POST['insertar'])){
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    if(!preg_match("/^[a-zA-Z ]*$/", $nombre)){
        $error_message = "Error: El nombre solo debe contener letras y espacios.";
    } else {
    
        $sql = "INSERT INTO alumnos (nombre, edad) VALUES ('$nombre', '$edad')";
        if($conn->query($sql)){
            header('location: success.php');
        } else {
            $error_message = "Error al agregar al registro: ". $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de alumnos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header id="banner">
        <h1>Nuevo alumno</h1>
    </header> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main id="principal">
        <form class="form" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required><br>
            <label for="edad">edad:</label>
            <input type="number" name="edad" required><br>

            <input type="submit" id="botonAgregar" name="insertar" value="Insertar">
        </form>

        </table>

        <div class="error-message"><?php echo $error_message; ?></div>

    </main>
</body>
</html>