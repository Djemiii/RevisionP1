<?php require('connexion2.php');


$nom = $_POST["nom"];
$description = $_POST["description"];
$annee = $_POST["annee"];




$recupA = "SELECT * from artiste";
$recupC = "SELECT * from categorie";

$req = $db->prepare('SELECT * FROM artiste');
$req->execute([]);
$result = $req->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);

$req2 = $db->prepare('SELECT * FROM categorie');
$req2->execute([]);
$result2 = $req2->fetchAll(PDO::FETCH_ASSOC);
var_dump($result2);

if (!empty($_POST)) {
    
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $annee = $_POST['annee'];
    // $artiste = ;
    // $categorie = $_POST['categorie'];


    
    $req3 = $db->prepare('SELECT * FROM artiste WHERE idArtiste = ?');
    $req3->execute(array($_POST['artiste']));
    $resultArtiste = $req3->fetch();
    // var_dump($resultArtiste);
    // die();

    $req4 = $db->prepare('SELECT * FROM categorie WHERE idCategorie = ?');
    $req4->execute(array($_POST['categorie']));
    $resultCategorie = $req4->fetch();

    $req0 = $db->prepare('INSERT INTO oeuvre(nom,description,annee,idArtiste,idCategorie) VALUES(?,?,?,?,?)');
    $req0->execute(array($nom,$description,$annee,$resultArtiste[0],$resultCategorie[0]));

    
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="create.php" method="post">

        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"> <br> <br> <br>

        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Description"> <br> <br>

        <label for=" annee">Annee</label>
        <input type="number" class="form-control" id="annee" name="annee" placeholder="Annee"> <br><br>

        <label for="idArtiste">Nom Artiste</label>
        <select class="form-control" name='artiste'>
            <?php foreach ($result as $key => $value){ ?>
            <option value=<?= $value['idArtiste']?>><?= $value['nom']?></option>
            <?php } ?>
        </select>
<br><br> <br>
        <label for="idCategorie">Nom Categorie</label>
        <select class="form-control" name='categorie'>
             <?php foreach ($result2 as $key => $value){ ?>
            <option value=<?= $value['idCategorie']?>><?= $value['nomCategorie']?></option>
            <?php } ?>

        </select>
<br> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>