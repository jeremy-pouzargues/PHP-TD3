<?php




function login($log, $pwd)
{
    $dbLink = mysqli_connect("mysql-jeremy-pouzargues.alwaysdata.net"
        ,"189628","tdphp83")
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink,"jeremy-pouzargues_db")
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));


    $query = 'SELECT IDENT AS ident, MDP AS password FROM `user` WHERE IDENT = \'' . $log . '\'';

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        /*echo 'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        //Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';*/
        exit();
    }

    $resultat = $dbResult->fetch_assoc();


    if ($resultat['password'] == $pwd AND $resultat['ident'] == $log)
        return true;
    else
        return false;



}

function connexion($id)
{
    $dbLink = mysqli_connect("mysql-jeremy-pouzargues.alwaysdata.net"
        ,"189628","tdphp83")
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink,"jeremy-pouzargues_db")
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'UPDATE user SET NbConnexion = NbConnexion + 1 WHERE IDENT = \''. $id . '\' ';

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        //Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
}



function inscription($id, $civ, $mail, $mdp, $tel, $pays)
{

    $dbLink = mysqli_connect("mysql-jeremy-pouzargues.alwaysdata.net"
        ,"189628","tdphp83")
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink,"jeremy-pouzargues_db")
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));


    $query = 'INSERT INTO user (ident, civ, mail, mdp, tel, pays, date) 
              VALUES (\'' . $id . '\',
                      \'' . $civ . '\',
                      \'' . $mail . '\',
                      \'' . $mdp . '\',
                      \'' . $tel . '\',
                      \'' . $pays . '\',
                            NOW())';

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        //Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    } else {
        echo "Bonjour $id, <br/>
              votre inscription a bien été prise en compte, merci.";
    }


}






?>