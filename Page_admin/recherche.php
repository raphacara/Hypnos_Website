<?php
 $db_host     = "localhost";
 $db_username = "root";
 $db_password = "";
 $db_name = "hypnos";


 $connexion = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Error " . mysqli_error());
 $db = mysqli_select_db($connexion, "hypnos") or die("Error " . mysqli_error());

if(isset($_POST['submit'])){
    // Récupération de la chaîne de recherche
    $search_string = $_POST['search_string'];
    // Requête de recherche d'utilisateur
    $sql = "SELECT Nom,Prenom,email FROM client WHERE Nom LIKE '%$search_string%' OR Prenom LIKE '%$search_string%'";
    $result = $connexion->query($sql);
    if ($result->num_rows > 0) {
        // Affichage des résultats de la recherche
        while ($row = $result->fetch_assoc()) {
            echo "Nom: " . $row['Nom'] . "<br>";
            echo "Prenom: " . $row['Prenom'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            

        }
    } else {
        echo "Aucun utilisateur trouvé pour cette recherche";
    }
    }
    $connexion->close();

?>