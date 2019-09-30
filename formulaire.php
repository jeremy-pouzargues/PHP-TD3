<?php
include 'utils.inc.php';

session_start();
if($_SESSION['login']!='ok')
{
    die('Erreur d\'authentification');
}

?>


<?php
start_page('Formulaire');


echo '<hr/><br/><strong>Formulaire</strong><br/><br/><hr/>';
echo '<br/>';

echo '<form action="data-processing.php" method="post">
            <input type="text" name="Id" placeholder="Identifiant" /> <br/>
            <input type="radio" name="Civ" value="Homme"/> Homme
            <input type="radio" name="Civ"value="Femme"/> Femme <br/>
            <input type="text" name="Mail" placeholder="E-Mail"/> <br/>
            <input type="password" name="Mdp" placeholder="Mot de passe"/> <br/>
            <input type="password" name="CMdp" placeholder="Verification du mot de passe"/> <br/>
            <input type="text" name="Tel" placeholder="Téléphone"/> <br/>
            <select name="Pays">
                <option value="Allemagne"/> Allemagne </option>
                <option value="Etats-Unis"/> Etats-Unis </option>
                <option value="France"/> France </option>
                <option value="Italie"/> Italie </option>
                <option value="Royaume-Uni"/> Royaume-Uni </option>
            </select> <br/>
            <input type="checkbox" name="CG"/> Conditions Générales <br/>
            <input type="submit" name="action" value="Mailer"/> <br/>
            <input type="submit" name="action" value="Rec"/> <br/>
          </form>';



end_page();
?>