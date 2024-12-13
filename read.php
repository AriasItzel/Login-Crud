<?php 

    include('conexion.php');

    $sql = "SELECT * FROM alumnos";
    $result = $conn->query($sql);

  
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["id"].""."</td>";
            echo "<td>".$row["nombre"].""."</td>";
            echo "<td>".$row["edad"].""."</td>";
            echo '
            
            <td>
                <a href="edit.php?id='.$row['id'].'" class="editar">Editar</a>
                <a href="delete.php?id='.$row['id'].'" class="eliminar">Eliminar</a>
            </td>
            ';

            echo "</tr>";   
    } 
    } else{
        echo "<tr><td colspan='4'>No hay alumnos agregados</td></tr>";
    }

    $conn->close();
    
?>