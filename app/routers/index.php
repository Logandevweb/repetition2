<?php
//router pricinpale


// route par défaut
// pattern: /
// ctrl: pagesController
// action: homeAction
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);