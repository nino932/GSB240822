<?php

include "./vues/v_sommaire.php";
$action = $_REQUEST['action'];
switch($action) {
    
    case 'remboursement' : {
        $lesRemboursements = $pdo->getRemboursement();
        include "./vues/v_remboursement.php";
        break;
    }
}


?>