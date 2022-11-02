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
    require_once 'database.php';
    require_once 'server.php';
    require_once 'querys.php';
    ?>
<?php
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset>
        <legend> BBDD </legend>
        <label>
            Selecciona la base de dades que vols editar 
            
            <select name="bbdd" id="bbdd">
            <?php

            while ($rowData = mysqli_fetch_array($databaseXampp)) {
                echo '<option value="' . $rowData["schema_name"] . '">' . $rowData["schema_name"] . '</option>';
            }

            ?>

            </select> 
            <br>
            <br>
            Intodueix la seguent sentencia SQL
            <br>
            <br>
            <textarea id="consultar" name="consultar" rows="4" cols="70"> </textarea>
        </label> 
        <br>
        <br>
        <input type="submit" value="Executar consulta"> </input>
    </fieldset>
</form>

<br>
<br>
<br>

<fieldset>
    <legend>Resultat de la Consulta</legend>
<?php
foreach ($result as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
</fieldset