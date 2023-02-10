
<?php
    $db_host     = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "hypnos";

 
    $connexion = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Error " . mysqli_error());
    $db = mysqli_select_db($connexion, "hypnos") or die("Error " . mysqli_error());
    $sql = mysqli_query($connexion, "SELECT Nom,Prenom,email FROM client");
     

   while($row = mysqli_fetch_array($sql)) {
    ?>
    <table>
        <tr>
        <th>Nom</th>
    <th>Prénom</th>
    <th>email</th>
    </tr>
    

   </table>

    
   <table>
  
  <?php foreach ($sql as $user) {; ?>
    <tr>
      
      <td><?php echo $user['Nom']; ?></td>
      <td><?php echo $user['Prenom']; ?></td>                                                                                                              
      <td><?php echo $user['email']; ?></td>
      <td>
        <button class="edit-user" data-user-id="<?php echo $user['Nom']; ?>">Edit</button>
        <button name="Nom" class="delete-user" data-user-id="<?php echo $user['Nom']; ?>">Delete</button>
        
        
        <style>
            button{
                padding: 10px 20px; 
                    border-radius: 50px; 
                    background-image: url("media/sand_background.png");
                    color: white; 
                    border: none; 
                    font-size: 16px; 
                    cursor: pointer;
            }
        </style>
      </td>
    </tr>
  <?php };?>


</table>
    
   <?php
}

?>




