<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<h1>EDITE SUS DATOS ;)</h1>
<p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. </p>
<?php

$id = $_GET['id'];

$db = new mysqli('localhost', 'root', '', 'proyecto');
if ($db->connect_errno) {
    die("Error al conectar : " . $db->connect_error);
}

$sql = "SELECT * FROM persona WHERE id='{$id}'";
$result = $db->query($sql);
if (!$result) {
    die("Error al consultar: " . $db->error);
}

if ($result->num_rows == 0) {
    echo "No hay registros";
} else {

    $reg = $result->fetch_assoc();
?>
    <div class="row">
    <div class="col-6">
    <section class="container">
    <form action="evaleditar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $reg['id']; ?>">
        <div class="form-group row">
            <label class="col-2 col-form-label">Nombres:</label>
            <input type="text" name="nombres" value="<?php echo $reg['nombres']; ?>" placeholder="Corrige tu nombre aqui" class="form-control col-10">
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $reg['apellidos']; ?>" placeholder="Corrige tu apellido aqui" class="form-control col-10">
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Edad</label>
            <input type="text" name="edad" value="<?php echo $reg['edad']; ?>" placeholder="Corrige tu edad aqui" class="form-control col-10">
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Direccion</label>
            <input type="text" name="direccion" value="<?php echo $reg['direccion']; ?>" placeholder="Corrige tu direccion aqui" class="form-control col-10">
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Correo</label>
            <input type="text" name="correo" value="<?php echo $reg['correo']; ?>" placeholder="Corrige tu correo aqui" class="form-control col-10">
        </div>
        <div ><input type="submit" class="btn btn-danger"></div>
    </form>
    </section>
    </div>
    </div>

<?php
}
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>