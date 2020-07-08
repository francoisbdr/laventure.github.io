<?php

class Page {

    public $name;
    public $title;
    public $link;

    public function __construct($name, $title, $link) {
        $this->name = $name;
        $this->title = $title;
        $this->link = $link;

    }
    
    public function _toString(){
        return $this->name;
    }

}

$page_list = [

    new Page("erreur_404", "Erreur 404", "pages/erreur_404.php"),
    new Page("accueil", "Accueil", "pages/accueil.php"),
    new Page("podcasts", "Tous les épisodes", "pages/podcasts.php"),
    new Page("contact", "Nous contacter", "pages/contact.php")
            ]
?>