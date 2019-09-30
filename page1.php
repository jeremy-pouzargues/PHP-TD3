<?php
    include 'utils.inc.php';

    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }


    start_page('page1');


    $rub2 = 'Page 2';
    $rub2addr = 'page2.php';


    echo '<a href="' . $rub2addr . '">' . $rub2 . '</a>';

    end_page();

?>