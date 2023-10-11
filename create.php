<?php
require_once 'connec.php';
$pdo = new PDO(DSN, USER, PASS);

$firstname = trim($_POST['firstname']); 
$lastname = trim($_POST['lastname']);

// On prépare notre requête d'insertion
$query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $pdo->prepare($query);

// On lie les valeurs saisies dans le formulaire à nos placeholders
$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);

$statement->execute();

header('Location: ./index.php');