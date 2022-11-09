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
            
            <select name="bbdd" id="bbdd" value = <?php print($mantenirBase); ?>>
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
            <textarea id="consultar" name="consultar" rows="4" cols="70"> <?php print_r($textConsulta) ?></textarea>
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    while ($fila = mysqli_fetch_assoc($result)) {
        foreach ($fila as $key => $value) {
             print_r("[" . $key . "] : " . $value);
             print_r("<br>");
        }
    }
}

?>
</fieldset



