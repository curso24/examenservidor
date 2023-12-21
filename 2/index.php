<?php
// Genera un valor entre 1 y 100, y muestra si es par o si es impar

//Aquí genero el valor

if (isset($_POST['submit'])) {
    $numeroGenerado = rand(1, 100);

    echo "<p>El número generado es: $numeroGenerado</p>";
// Código PHP para generar un valor entre 1 y 100 y mostrar si es par o impar
    if ($numeroGenerado % 2 == 0) {
        echo "<p>El número es par.</p>";
    } else {
        echo "<p>El número es impar.</p>";
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<fieldset style="width:40%;margin: 20%;background: darkkhaki ">
    <legend>Acciones</legend>
<form action="index.php" method="post">
    <input type="submit" value="Genera Password" name="submit">
</form>

</fieldset>
</body>
</html>

