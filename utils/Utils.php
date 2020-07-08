<?php


function generateHTMLHeader() {
    require("header.php");
}

function generateHTMLFooter() {
    require("footer.php");
}

function getAskedPageName($arrayGET) {  // Controle que "page" soit bien défini dans POST
    if (array_key_exists('page', $arrayGET)) {
        return $arrayGET['page'];
    } else {
        return 'page_source';
    }
}

function checkPageName($askedPageName, $page_list) { //Controle que le nom de la page soit bien dans la liste des pages autorisée
    $authorized = false;
    foreach ($page_list as $page) {
        if ($page->name == $askedPageName) {
            $authorized = true;
        }
    }
    return $authorized;
}

function getPage($askedPageName, $page_list) { //Récupere l'objet Page dans $page_list
    foreach ($page_list as $page) {
        if ($page->name == $askedPageName) {
            return $page;
        }
    }
}

function getValidPage($askedPageName, $page_list) { //Fait appel a checkPageName et getPage
    if (checkPageName($askedPageName, $page_list)) {
        return getPage($askedPageName, $page_list);
    } else {
        return getPage('accueil', $page_list);
    }
}

?>