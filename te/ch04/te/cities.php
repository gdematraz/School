<?php
/**
 * TE du vendredi 13 mars 2015
 *
 * @author Grégoire Dématraz <gregoire.dematraz@cpnv.ch>
 * @date 2015.03.13
 *
 */
// Constantes
const DB_SERVER   = 'localhost';
const DB_USER     = 'cpnv';
const DB_PASSWORD = 'cpnv1234';
const DB_NAME     = 'world';

$dbh = @ new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ($dbh->connect_errno) {
    //affichage de l'erreur en cas de problème
    $error_msg = sprintf('Problème de connexion : (%d) %s',
                         $dbh->connect_errno, $dbh->connect_error);
} else {

    if ($result = $dbh->query('select ID, Name, CountryCode, District, Population from City where CountryCOde = \'CHE\' order by Name')) {
        //le nombre de lignes
        $number_of_records = $result->num_rows;

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
<?php
            echo "Il y a " . $number_of_records . " villes";
            echo "<br />";
?>
        <table border="1px">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nom</td>
                    <td>District</td>
                    <td>Code Postal</td>
                    <td>Population</td>
                    <td>Édition</td>
                </tr>
            </thead>
            <tbody>
<?php
                    while ($city = $result->fetch_assoc()) {
                        echo "<tr>" . 
                        "<td>{$city['ID']}</td>" . 
                        "<td>{$city['Name']}</td>" . 
                        "<td>{$city['District']}</td>" . 
                        "<td>{$city['CountryCode']}</td>" . 
                        "<td>{$city['Population']}</td>" . 
                        "<td><a href=\"edit.php?ID={$city['ID']}&Name={$city['Name']}&District={$city['District']}&CC={$city['CountryCode']}&Population={$city['Population']}\">Editer</a></td>" . 
                        "</tr>";
                    }
                }
            }
?>
            </tbody>
        <?php
            $dbh->close();
        ?>
    </body>
</html>
