<?php
    include 'utils.inc.php';

    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }

    start_page('Page 2');

    echo 'Ceci est la page 2';

    end_page();