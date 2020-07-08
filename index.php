<?php

//initialisation de la session ou récupération de la session encours

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !


session_start();

function setSESSION() {
    if (!isset($_SESSION['initiated'])) {
        session_regenerate_id();
        $_SESSION['initiated'] = true;
        $_SESSION['lang'] = 'francais';
    }
}

setSESSION();

require ('utils/Utils.php');
require ('utils/Page.php');

// ------------------------Obtention de la page---------------------------

$askedPageName = getAskedPageName($_GET); //dans Utils - determiner la page demandée
$page = getValidPage($askedPageName, $page_list); //dans Utils - renvoie la page demandée si elle est valide, ie si la page demandée est dans la liste des pages autorisées

//------------------------------------------------------------------------



generateHTMLHeader();

require($page->link);

generateHTMLFooter();

?>