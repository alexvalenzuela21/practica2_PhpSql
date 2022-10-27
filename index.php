<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PracticaS11</title>
</head>
<body>
<?php
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset>
        <legend> BBDD </legend>
        <label>
            Selecciona la base de dades que vols editar 
            
            <select name="transporte">

            <option value="1">Coche</option>

            <option value="2">Avión</option>

            <option value="3">Tren</option>

            </select> 
        </label> 
        <br>
    </fieldset>
</form>