<?php

require '../vendor/autoload.php';

use Dojo\Controllers\DefaultController;

$defaultController = new DefaultController(); 

if (empty($_GET)){
	echo $defaultController->indexAction();
}

elseif ($_GET['section']=='add'){
	echo $defaultController->result();
}

elseif ($_GET['section']=='send'){
    echo $defaultController->sendEmail();
}