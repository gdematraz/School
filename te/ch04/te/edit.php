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
    <meta charset="utf-8">
    <title>TE informatique</title>
  </head>
    <body>
        <h3>TE PHP-MYSQL informatique au CPNV</h3>
        <form>
           <input type="text" value="<?php echo htmlspecialchars($_GET["ID"]); ?>"><br>
           <input type="text" value="<?php echo htmlspecialchars($_GET["Name"]); ?>"><br>
           <input type="text" value="<?php echo htmlspecialchars($_GET["District"]); ?>"><br>
           <input type="text" value="<?php echo htmlspecialchars($_GET["CC"]); ?>"><br>
           <input type="submit" value="Enregistrer">
           <input type="submit" value="Annuler">
        </form>
    </body>
</html>
