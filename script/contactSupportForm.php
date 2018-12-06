<?php
session_start();
  
    
    $prenom = $_POST['prenom'];
    $adresseMail = $_POST['email'];
    $objet = $_POST['objet'];
    $messageUtilisateur = $_POST['messageUtilisateur'];
     
    
if (isset($_POST['submit'])){

/* on test si les champ sont bien remplis*/
if(!(empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['objet']) and !empty($_POST['message']))) {

    $adresseMail = htmlentities($adresseMail, ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
           
    //on se connecte à la base de données:
    $mysqli = mysqli_connect("localhost","root","","lessonscreen");

    //on vérifie que la connexion s'effectue correctement:
    if(!$mysqli) {
        echo "Erreur de connexion à la base de données.";
    } 
    
    else {
        // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
        $Requete = mysqli_query($mysqli,"SELECT * FROM utilisateurs  WHERE adresseMail = '".$adresseMail."'");
        // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
        
        // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
        
        if (mysqli_num_rows($Requete) == 0) {
            
            printf("L'adresse mail n'est pas reconnu veuillez recommencer \n", $c->error); }

        else{

            $sql = "INSERT INTO `support` (prenom, adresseMail, objet, messageUtilisateur, idUser)
                    VALUES ('$prenom','$adresseMail','$objet', '$messageUtilisateur', (SELECT id FROM utilisateurs WHERE adresseMail='".$_SESSION['adresseMail']."'))";
                    mysqli_query($mysqli,$sql);
                    
                    echo "Merci de votre message, l'équipe de <strong>LessOnScreen</strong> ce changeras de vous répondre dans les plus bref delais !" ;
            /* execute et affiche l'erreur mysql si elle se produit */ 
        }
        
    } 

    } /* Fin if empty */
    else {echo "Veuillez saisir tous les champs !"; }

}/* Fin if submit */
    
  



    
?>