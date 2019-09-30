<?php
include 'utils.inc.php';
include 'base.php';
session_start();
$log = $_POST['Log'];
$pwd = $_POST['Pwd'];

if (login($log,$pwd))
{
    $_SESSION['login'] = 'ok';
    $_SESSION['identifiant'] = $log;
    $_SESSION['mdp'] = $pwd;
    header('Location: page1.php');
}
else
    header('Location: login.php?step=ERROR');

?>