<!--IMPLEMENTACION DE FORMULARIO-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
    include("menu.php");
?>
<h1>REGISTRESE EN LA PLATAFORMA</h1>
<p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. </p>
<div class="row">
<div class="col-6">
<section class="container">
<form action="eval.php" method="post">
    <div class="form-group row">
        <label class="col-2 col-form-label">Nombres:</label>
        <input type="text" name="nombres" placeholder="Escibe tu nombre aqui" class="form-control col-10">
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Apellidos:</label>
        <input type="text" name="apellidos" placeholder="Escibe tu apellido aqui" class="form-control col-10">
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Edad:</label>
        <input type="text" name="edad"placeholder="Escibe tu edad aqui" class="form-control col-10">
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Direccion:</label>
        <input type="text" name="direccion" placeholder="Escibe tu direccion aqui" class="form-control col-10">
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Correo:</label>
        <input type="text" name="correo" placeholder="Escibe tu correo aqui" class="form-control col-10">
    </div>
    <div ><input type="submit" class="btn btn-danger"></div>
</form>
</section>
</div>
</div>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>