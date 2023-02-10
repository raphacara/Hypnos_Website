<?php
            
            $host="localhost";
            $user="root";
            $pass="";
            $db="hypnos";

            $con=new mysqli($host,$user,$pass,$db);
            if (!$con){
                echo "veuillez réessayer";
            }


           

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $mot_de_passe= $_POST['mdp'];
                $hashmdp = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                
                $qry = "INSERT INTO client (Nom, Prenom, email, mot_de_passe) VALUES ('$nom', '$prenom', '$email','$hashmdp')";
                
                echo $qry;

                if (mysqli_query($con,$qry)){
                    session_start();
                    $_SESSION["connecté"] = true;
                
                    header("Location:ref.html");
                  
                        
                }
      
                
            
           
?>