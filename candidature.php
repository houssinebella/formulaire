<?php
$prenom    = '';
$nom       = '';
$email     = '';
$age       = '';
$filiere   = '';
$motivation = '';
$erreurs   = [];

if ($_SERVER["REQUEST_METHOD"]=== "POST"){

    $nom   = $_POST['nom']   ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $age   = $_POST['age']   ?? '';
    $filiaire = $_POST['filiaire'] ?? '';
    $motivation = $_POST['motivation'] ?? '';
    $erreurs = $_POST['erreurs']?? '';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de candidature</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Formulaire de candidature</h2>
<form action="candidature.php" method="POST">

    <label for="prenom">prenom:</label>
    <input type="text" name="prenom" >

     <label for="nom">nom:</label>
    <input type="text" name="nom" >

     <label for="email">email:</label>
    <input type="email" name="email" >

     <label for="age">age:</label>
    <input type="number" name="age" >

     <label for="filiere">filiere:</label>
    <select name="filiere" id="filiere">
    <option value="pc">physique</option>
    <option value="math">mathematique</option>
    <option value="si">science de lingenieur</option>
    <option value="autre">autre</option>
    </select>

    <label for="motivation">motivation:</label>
    <textarea name="motivation" rows="6"></textarea>

    <label for="reglement"></label>
    </form>
    </body>