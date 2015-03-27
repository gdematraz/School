<?php
/**
 * TE du vendredi 13 mars 2015
 *
 * @author Grégoire Dématraz <gregoire.dematraz@cpnv.ch>
 * @date 2015.03.13
 *
 */
// Constantes
$ID = $_POST["ID"];
$Population = $_POST["Population"];

const DB_SERVER   = 'localhost';
const DB_USER     = 'cpnv';
const DB_PASSWORD = 'cpnv1234';
const DB_NAME     = 'world';

$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbh->connect_errno) {
    //affichage de l'erreur en cas de problème
    $error_msg = sprintf('Problème de connexion : (%d) %s',
                         $dbh->connect_errno, $dbh->connect_error);
}

$sql = "UPDATE City SET Population=$Population Where ID=$ID";

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
        <h1>Mise à jour de la base de données ...</h1>
        <?php
        if ($dbh->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $dbh->error;
        }
        $dbh->close();
        ?>
        <a href="cities.php">Revenir au tableau</a>
    </body>
</html>
