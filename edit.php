<?php 
session_start();


// Verifica si la sesión está iniciada
if (!isset($_SESSION['user'])) {
    header("Location: ./index.php");
  
    exit();
}
include('conexion.php');
$id = "";
$nombre = "";
$edad = "";

if($_SERVER['REQUEST_METHOD']== 'GET'){

    $id = $_GET["id"];
    $sql = "SELECT * FROM alumnos WHERE id= $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(!$row){
        header("location: success.php");
        exit;
    }      

    $nombre = $row["nombre"];
    $edad = $row["edad"];
} else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    $sql = "UPDATE alumnos SET nombre = '$nombre', edad= $edad WHERE id = $id";
    $result = $conn->query($sql);

    if($result){
        header("location: success.php");
        exit;
    } else{
        echo "Error al agregar el registro: " . $conn->error;
    }

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header id="banner">
        <h1>Editar Alumno</h1>
    </header> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main id="principal">
        <form class="form" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $nombre ?>"required><br>
            
            <label for="edad">Edad:</label>
            <input type="number" name="edad" value="<?php echo $edad ?>" required><br>

            <input type="submit" id="botonAgregar" name="actualizar" value="Actualizar">
        </form>

        </table>
    </main>
</body>
</html>