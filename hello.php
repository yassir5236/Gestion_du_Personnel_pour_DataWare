<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php

$server_name="localhost";
$user="root";
$password="";
$db="mydata";

$conn=mysqli_connect($server_name,$user,$password,$db);

if(!$conn){
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}


$sql="select * from équipes;";
$res = mysqli_query($conn, $sql);
if(!$res){
    die("Erreur dans la requête : " . mysqli_error($conn));

}

echo"<table class=\"table table-striped table-dark\">
<thead>
  <tr>
    <th scope=\"col\">Équipes_ID</th>
    <th scope=\"col\">Équipe_Nom</th>
    <th scope=\"col\">Création_Équipe</th>
  </tr>
</thead>   
<tbody>
";

while ($ligne = mysqli_fetch_assoc($res)) {
    echo "<tr>
            <th scope=\"row\">" . $ligne['Équipes_ID'] . "</td>
            <td>" . $ligne['Équipe_Nom'] . "</td>
            <td>" . $ligne['Création_Équipe'] . "</td>
          </tr>";
}

echo "</tbody></table>";


mysqli_close($conn);
?>


</body>
</html>




