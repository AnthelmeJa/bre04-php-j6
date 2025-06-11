<?php

    require "connexion.php";
    
    $query = $db->prepare("DELETE FROM address WHERE id = :id");
    
    $parameters = [
        'id' => $_POST['id']
    ];
    
    $query->execute($parameters);

?>