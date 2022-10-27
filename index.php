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
            Selecciona la base de dades que vols editar <input type="text" name="name" value="" required> 
        </label> 
        <br>
    </fieldset>
</form>