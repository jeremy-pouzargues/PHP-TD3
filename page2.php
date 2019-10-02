<?php
    include 'utils.inc.php';

    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }

    start_page('Page 2');

    echo 'Ceci est la page 2';

    $file = 'data.txt';
    if (!($file = fopen($file, 'r')))
    {
        echo 'Erreur de lecture';
        exit();
    }

    echo 'Liste des utilisateurs : <br/>';
    $cpt = 1;
    while($line = fgets($file, 255))
    {
        echo 'Utilisateur n ' . $cpt . ' : ' . $line . '<br/>';
        ++$cpt;
    }
    fclose($file);

    end_page();