<?php
    include("menu.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<h1> REGISTRO DE DATOS UWU</h1>
<p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la sección 1.10.32</p>
<?php
    $db = new mysqli('localhost','root','','proyecto');
    if($db->connect_errno)
    {
        die("Error al conectar : ".$db->connect_error);
    }

    $sql = "SELECT * FROM persona";
    $result = $db->query($sql);
    if(!$result){
        die("Error al consultar: ".$db->error);
    }

    if($result->num_rows==0){
        echo "No hay registros";
    }
    
    else{
        echo "<div class=container>";
        echo "<div class=table-responsive>";
        echo "<table border=2 class= table >";
        echo "<thead class=thead-light>";
        echo "<tr>";
        echo "<th>ID</th><th>NOMBRES</th><th>APELLIDOS</th><th>EDAD</th><th>DIRECCION</th><th>CORREO</th><th colspan='2'>OPCIONES</th>";
        echo "</tr>";
        echo "</thead>";
        while($reg = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$reg['id']."</td>";
            echo "<td>".$reg['nombres']."</td>";
            echo "<td>".$reg['apellidos']."</td>";
            echo "<td>".$reg['edad']."</td>";
            echo "<td>".$reg['direccion']."</td>";
            echo "<td>".$reg['correo']."</td>";
            echo "<td><a href='eliminar.php?id=".$reg['id']."'>Eliminar</a></td>";
            echo "<td><a href='editar.php?id=".$reg['id']."'>Editar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "</div>";
    }

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>
 