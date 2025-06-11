<?php 
    require "connexion.php";
    
    $query = $db->prepare('SELECT * FROM users JOIN address ON users.address = address.id WHERE users.id = :id ');
    
    $parameters = [
        'id' => $_GET['id']
    ];

    $query->execute($parameters);
    
    $user = $query->fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($user);

?>