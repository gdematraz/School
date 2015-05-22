<?php

/**
 * TE du vendredi 22 mai 2015
 *
 * @author Grégoire Dématraz <gregoire.dematraz@cpnv.ch>
 * @date 2015.05.22
 *
 */
    // Variables
    $sexe = $_POST['Sexe'];
    $name = $_POST['Name'];
    $mail = $_POST['Mail'];
    
    // Erreur si le format mail est invalide
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $emailerror = "Format email invalide";
    }
    // Erreur si le format nom est invalide
    if (strlen($name) < 2 || strlen($name) > 50) {
        $nameerror = "Votre nom doit être entre 2 et 50 caractères";
    }
    // Erreur si le format sexe est invalide
    if (!$sexe) {
        $sexeerror = "Vous devez avoir un sexe :D";
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TE informatique</title>
  </head>
    <body>
        <h3>TE PHP informatique au CPNV</h3>
<?php

    if (isset($emailerror)) {
        echo "<p>" . $emailerror . "</p>";
        echo '<a href="exercice.html">Retour</a>';
    }
    
    if (isset($nameerror)) {
        echo "<p>" . $nameerror . "</p>";
        echo '<a href="exercice.html">Retour</a>';
    }
    
    if (isset($sexeerror)) {
        echo "<p>" . $sexeerror . "</p>";
        echo '<a href="exercice.html">Retour</a>';
    }
    
    if (empty($emailerror) && empty($nameerror) && empty($sexeerror)) {
        if ($sexe == 'M') {
            echo "Bonjour M." . $name . ", votre adresse courriel est : " . $mail;
        } elseif($sexe == 'F') {
            echo "Bonjour Mme." . $name . ", votre adresse courriel est : " . $mail;
        }
    }

?>
    </body>
</html>
