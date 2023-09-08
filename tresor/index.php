<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

<style>
   table,td,thead {
    border-collapse: collapse;
    border: 1px solid #000;
    margin: 20px auto;
   } 

   td{
    font-weight: bold;
    padding: 30px;
   
   }
</style>

    <table>
        <thead>
            <tr>
                <td>Oeuvre</td>
                <td>Auteur</td>
                <td>Année</td>
                <td>Catégories</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td> </td>
                <td><button type="button" class="btn btn-primary">Modifier</button>
                <button type="button"class="btn btn-danger">Supprimer</button></td>
            </tr>
           
        </tbody>
    </table>

</body>

</html>