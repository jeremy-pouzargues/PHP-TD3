<?php

include 'base.php';

$id = $_POST['Id'];
$civ = $_POST['Civ'];
$mail = $_POST['Mail'];
$mdp = $_POST['Mdp'];
$cmdp = $_POST['CMdp'];
$tel = $_POST['Tel'];
$pays = $_POST['Pays'];
$cg = $_POST['CG'];
$action = $_POST['action'];


$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
$message .= 'Email : ' . $mail . PHP_EOL;
$message .= 'Mot de passe : ' . PHP_EOL . $mdp;

if ($action == 'Mailer')
{
    mail($mail, 'Vos Identifiants', $message);
    echo '<p> Votre mail a bien été envoyé </p>';
    echo '<a href="http://jeremy-pouzargues.alwaysdata.net/PHP-TD2/formulaire.php"> 
                    Cliquez pour retourner à l\'accueil </a> ';

}
elseif ($action == 'Rec')
{
    $file = 'data.txt';
    if(!($file = fopen($file, 'a+')))
    {
        echo 'Erreur d\'ouverture';
        exit();
    }
    fputs($file, 'id : ' . $id . ', email : ' . $mail . PHP_EOL);
    fclose($file);
}
else
{
    echo'<br/><strong>Bouton non géré!</strong><br/>';
}

inscription($id, $civ, $mail, $mdp, $tel, $pays);


?>