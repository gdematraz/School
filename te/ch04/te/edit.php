<?php
/**
 * TE du vendredi 13 mars 2015
 *
 * @author Grégoire Dématraz <gregoire.dematraz@cpnv.ch>
 * @date 2015.03.13
 *
 */
// Constantes
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="Style/css/bootstrap.min.css" rel="stylesheet">
    <link href="Style/css/bootstrap-theme.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>TE informatique</title>
  </head>
    <body>
        <h3>TE PHP-MYSQL informatique au CPNV</h3>
        <form action="update.php" method="post">
           <input name="ID" id="disabledInput" type="text" value="<?=$_GET["ID"]?>" ><br>
           <input name="Name" id="disabledInput" type="text" disabled="" type="text" value="<?php echo htmlspecialchars($_GET["Name"]); ?>"><br>
           <input name="District" id="disabledInput" type="text" disabled="" type="text" value="<?php echo htmlspecialchars($_GET["District"]); ?>"><br>
           <input name="CC" id="disabledInput" type="text" disabled="" type="text" value="<?php echo htmlspecialchars($_GET["CC"]); ?>"><br>
           <input name="Population" type="text" value="<?php echo htmlspecialchars($_GET["Population"]); ?>"><br>
           <input type="submit" value="Enregistrer">
           <input type="reset" value="Annuler" onclick="window.location='cities.php'">
        </form>
    </body>
</html>
