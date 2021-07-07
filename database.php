<?php

function connect() { // Connecte le site web à la BDD
  $dbName = 'TodoApp'; // Nom de la BDD
  $dbHost = 'localhost'; //Nom de l'hôte
  $port = '8889'; // ou '3306'
  $dbUsername ='root'; // Nom d'utilisateur MySQL
  $dbUserPassword = 'root'; // Pot de passe MySQL
  $cont = null;

  try {
    // On crée un objet PDO à l'aide des identifients de connexion à la BDD
    $cont = new PDO("mysql:host=$dbHost;dbname=$dbName;port=$port", $dbUsername, $dbUserPassword);
  } catch(PDOException $e) {
      die($e->getMessage());
  }

  return $cont; // Renvoie un objet issu de la connectionPDO à la BDD
};