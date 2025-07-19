<!DOCTYPE html> 
<html>
<head>
    <title>Administrador</title>
    <link rel="stylesheet" href="estiloAdmin.css">
    <meta charset="UTF-8">
</head>
<body>
    
<div class="Institucion">
<img src="../Logos/logooo.png" alt="logo de la escuela"
class="hlogo1">   
<h2>Colegio Privado Los Olivos</h2>
</div>

<?php
session_start(); // Iniciar la sesión

// verificar si la sesión está autenticada
if ($_SESSION['validar'] !== true) {
    header("Location: ../LOGIN/index.php");
    exit(); // detener ejecución adicionales
}


if (isset($_SESSION['mensaje'])) {
    echo "<div class='mensaje'>" . $_SESSION['mensaje'] . "</div>";
    unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
}
?>

<div class="cerrarSesion">
    <form action="logout.php" method="POST">
        <div class="botonCS">
            <button type="submit">Ir a la Página</button>
        </div>
    </form>
</div>

<h3>Bienvenido Administrador</h3>
<br>

<div class="C-ModificarSlider">


<div class="modificarSlider">
    <h4>Cambiar Imagenes: Slider</h4>
    <form action="modificarSlider1.php" method="POST" enctype="multipart/form-data"> 
                <div class="formImagenTitulo"> Imagen 1 </div>
            <div class="Slider-Campo">
                <select name="imagen_id" required>
                    <?php
                    // Conectar a la base de datos
                    include 'Conexion.php'; 
                    $sql = "SELECT id_imagen, ruta FROM imagenes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id_imagen"] . '">' . $row["ruta"] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay imágenes disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
                <div>
                    <button type="submit" class="Slider-button">Guardar Cambios</button>
                 </div>
                 
                 </div> 
            </form>
           
            </div> 

 <div class="modificarSlider">
    <form action="modificarSlider2.php" method="POST" enctype="multipart/form-data"> 
                <div class="formImagenTitulo"> Imagen 2 </div>
            <div class="Slider-Campo">
                <select name="imagen_id" required>
                    <?php
                    // Conectar a la base de datos
                    include 'Conexion.php'; 
                    $sql = "SELECT id_imagen, ruta FROM imagenes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id_imagen"] . '">' . $row["ruta"] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay imágenes disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
                <div>
                    <button type="submit" class="Slider-button">Guardar Cambios</button>
                 </div>
                 

            </div> 
            </form>
            </div> 


            <div class="modificarSlider">
    <form action="modificarSlider3.php" method="POST" enctype="multipart/form-data"> 
                <div class="formImagenTitulo"> Imagen 3 </div>
            <div class="Slider-Campo">
                <select name="imagen_id" required>
                    <?php
                    // Conectar a la base de datos
                    include 'Conexion.php'; 
                    $sql = "SELECT id_imagen, ruta FROM imagenes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id_imagen"] . '">' . $row["ruta"] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay imágenes disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
                <div>
                    <button type="submit" class="Slider-button">Guardar Cambios</button>
                 </div>
                 

            </div> 
            </form>
            </div> 
            
 <div class="modificarSlider">
    <form action="modificarSlider4.php" method="POST" enctype="multipart/form-data"> 
                <div class="formImagenTitulo"> Imagen 4 </div>
            <div class="Slider-Campo">
                <select name="imagen_id" required>
                    <?php
                    // Conectar a la base de datos
                    include 'Conexion.php'; 
                    $sql = "SELECT id_imagen, ruta FROM imagenes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id_imagen"] . '">' . $row["ruta"] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay imágenes disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
                <div>
                    <button type="submit" class="Slider-button">Guardar Cambios</button>
                 </div>
                 

            </div> 
            </form>
            </div> 
   
            </div>
            
<div class="C-ModificarSlider">
    <h4>Nueva Noticia</h4>
    <form action="guardarcambios.php" method="POST" enctype="multipart/form-data"> 
        <div class="imagenQuienesSomos">
            <label>Imagen: </label>
            <div class="formImagen">
            <select name="imagen_id" required>
                    <?php
                    // Conectar a la base de datos
                    include 'Conexion.php'; 

                    $sql = "SELECT id_imagen, ruta FROM imagenes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id_imagen"] . '">' . $row["ruta"] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay imágenes disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
            </div> 
        </div>

        <div class="texto">
            <label>Texto Noticia:</label> 
            <div class="formQS">
                <textarea name="texto" rows="10" required></textarea>
            </div>
        </div>

        <div>
            <button type="submit">Guardar Cambios</button>
        </div>
    </form>
</div>

<div class="eliminarNoticia">
     <div class="elimNo"> <h4> Eliminar una Noticia </h4> </div>
     <form action="eliminar_noticia.php" method="POST" style="display:inline;">
     <input type="hidden" name="id_noticia" value="<?php echo $row['id_noticia']; ?>">
     
     <div class="noticias-lista">
       <?php
       include 'Conexion.php'; 

       $sql="SELECT n.id_noticia, n.texto, i.ruta FROM noticias n JOIN imagenes i ON n.imagen_id = i.id_imagen order by n.id_noticia desc";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='noticia'>";
            echo "<p>" . htmlspecialchars($row['texto']) . "</p>";
            echo "<img src='" . htmlspecialchars($row['ruta']) . "' alt='Imagen de noticia' style='width: 100px; height: auto; margin-right: 10px;'>";
            echo "<form action='eliminar_noticia.php' method='POST' style='display:inline;'>";
            echo "<input type='hidden' name='id_noticia' value='" . $row['id_noticia'] . "'>";
            echo "<button type='submit' onclick='return confirm(\"¿Está seguro de que desea eliminar esta noticia?\");'>Eliminar</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "No hay noticias disponibles.";
    }
     ?>
    </div>


  </div>
         
      
   </form>  
   
</div>


<div class="C-ModificarSlider">
    <h4>Nuevo Evento</h4>
    <form action="guardarcambios_2.php" method="POST" enctype="multipart/form-data"> 

    <div class="texto">
            <label>Fecha:</label> 
            <div class="formQS">
                <input name="fecha" rows="10" required></input>
            </div>
        </div>
        
        <div class="imagenQuienesSomos">
            <label>Imagen: </label>
            <div class="formImagen">
            <select name="imagen_id" required>
                    <?php
                    // Conectar a la base de datos
                    include 'Conexion.php'; 

                    $sql = "SELECT id_imagen, ruta FROM imagenes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id_imagen"] . '">' . $row["ruta"] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay imágenes disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
            </div> 
        </div>

        <div class="texto">
            <label>Texto Evento:</label> 
            <div class="formQS">
                <textarea name="texto" rows="10" required></textarea>
            </div>
        </div>
        

        <div>
            <button type="submit">Guardar Cambios</button>
        </div>
    </form>
</div>

<div class="eliminarNoticia">
     <div class="elimNo"> <h4> Eliminar un Evento </h4> </div>
     <form action="eliminar_evento.php" method="POST" style="display:inline;">
     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     
     <div class="noticias-lista">
       <?php
       include 'Conexion.php'; 

       $sql="SELECT e.id, e.fecha,e.texto, i.ruta FROM eventos e JOIN imagenes i ON e.imagen_id = i.id_imagen order by e.id desc";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='noticia'>";
            echo "<h3>" . htmlspecialchars($row['fecha']) . "</h3>";
            echo "<p>" . htmlspecialchars($row['texto']) . "</p>";
            echo "<img src='" . htmlspecialchars($row['ruta']) . "' alt='Imagen de noticia' style='width: 100px; height: auto; margin-right: 10px;'>";
            echo "<form action='eliminar_evento.php' method='POST' style='display:inline;'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<button type='submit' onclick='return confirm(\"¿Está seguro de que desea eliminar este evento?\");'>Eliminar</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "No hay eventos disponibles.";
    }
     ?>
    </div>


  </div>
         
      
   </form>  
   
</div>



<div class="Imagenes"> 
    <h4>Subir Imágenes</h4>
    <form action="guardar_imagen.php" method="POST" enctype="multipart/form-data">
      <div class="cargaImagen"> <label>Cargar una imagen:</label>
        <input type="file" name="imagen" accept="image/*" required>
        
        <div class="guardarImagen">  <button type="submit">Guardar Imagen</button></div>
        
      </div>
    </form>

    <br>
    <h4>Imágenes guardadas:</h4>
    <div class="imagenesGuardadas">
        <?php
       
       include 'Conexion.php'; 
       
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        // Obtener las imágenes guardadas
        $sql = "SELECT ruta FROM imagenes";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<img src="' . $row["ruta"] . '" style="width: 150px; height: 150px; margin: 10px;">';
            }
        } else {
            echo "No hay imágenes guardadas.";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>

</body>
</html>

