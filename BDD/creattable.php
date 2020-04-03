
<?php 

try{

    require_once "../Connexion/Connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();

    echo 'Je suis connecté à la base de donnée';
    
//creation table

    $table = "CREATE TABLE IF NOT EXISTS messages(
        id INT AUTO_INCREMENT NOT NULL,
        nom VARCHAR(50),
        prenom VARCHAR(50),
        email VARCHAR (100),
        msg VARCHAR(500),
        PRIMARY KEY (id)
        )";
    $pdo->exec($table);
    echo 'table message créee';

}

catch(PDOException $e){
    echo 'Echec de la connexion : '.$e->getMessage();
}

?>
