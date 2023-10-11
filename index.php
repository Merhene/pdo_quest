<?php


require_once 'connec.php';

$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($friends);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
</head>
<body>
    <ul>
        <?php foreach($friends as $friend): ?>
            <li><?php echo $friend['firstname'] . ' ' . $friend['lastname']?></li>
            <?php endforeach ?>
            <form action="create.php" method="post">
             <fieldset>
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname">
    </fieldset>
    <fieldset>
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname">
    </fieldset>
    <button type="submit">Créer un ami</button>
</form>
    </ul>
</body>
</html>




