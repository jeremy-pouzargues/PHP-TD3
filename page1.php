<?php
    include 'utils.inc.php';

    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }


    start_page('page1');


    $rub2 = 'Page 2';
    $rub2adr = 'page2.php';

    $form = 'Formulaire';
    $formadr = 'formulaire.php';


    echo '<a href="' . $rub2adr . '">' . $rub2 . '</a><br/>';
    echo '<a href="' . $formadr . '">' . $form . '</a>';

    end_page();

?>