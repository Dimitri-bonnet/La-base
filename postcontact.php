<?php
$errors = [];



if(!array_key_exists('nom', $_POST) || $_POST['nom'] === ''){
     $errors['nom'] = "Vous n'avez pas renseingé votre nom.";
}

if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] === ''){
    $errors['prenom'] = "Vous n'avez pas renseingé votre prenom.";
}

if(!array_key_exists('email', $_POST) || $_POST['email'] === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseingé un email valide.";
}

if(!array_key_exists('message', $_POST) || $_POST['message'] === ''){
    $errors['message'] = "Vous n'avez pas renseingé votre message.";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    $_SESSION['inputs'] = $_POST;
      

}else{
    $_SESSION['success'] = 1;
    $message = $_POST ['message'];
    $headers = 'FROM : cucou@gmail.com';
    $headers1 = $_POST ['email'];

    /* Ici l'insert dans la base de donnée message */
try{
    require_once "Connexion/Connexion.php";
    $connexion=new Connexion();
    $pdo=$connexion->getPdo();
    echo 'Je suis connecté à la base de donnée';

    $pdostat = $pdo->prepare('INSERT INTO messages VALUE (NULL,:nom, :prenom, :email, :msg)');
    $pdostat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $pdostat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $pdostat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $pdostat->bindValue(':msg', $_POST['message'], PDO::PARAM_STR);
    $insertOk = $pdostat->execute();

    mail('dimitri.bonnet18@gmail.com', 'Formulaire de contact', $message , $headers);

  /*   if($insertOk){
        $message = 'insert in the table ';
    }
    
    else{
        $message = "cant insert in the table";
    
    } */
}
    catch(PDOException $e){
        echo 'Echec de la connexion : '.$e->getMessage();
    }
}

header('location: contact.php');
/* var_dump($errors); */
die();

