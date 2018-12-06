<?php
echo "Merci de votre inscription, vous allez recevoir un mail prochainement, restez connecté !" ;


if (isset($_POST['submit'])) {

    /* on test si les champ sont bien remplis*/
    if(!(empty($_POST['sexe']) and empty($_POST['nom']) and empty($_POST['prenom']) and empty($_POST['mail']) and empty($_POST['numero']) and empty($_POST['motDePasse']) 
    and!empty($_POST['password2']) and empty($_POST['dateNaissance']) )) {

        $motDePasse = $_POST['motDePasse'];
        $password2 = $_POST['password2'];
        
        /* On filtre et attribus les variables */

        if(in_array(array("h", "f"), $_POST['sexe'])){
        $sexe = $_POST['sexe'];
       }else{
        $sexe = "f";
       }

       if (filter_var($_POST['nom'], FILTER_SANITIZE_STRING)) {
        $nom = $_POST['nom'] ;
      } 
      else {
        echo("Le nom entré  n'est pas valide !");
      }

      if (filter_var($_POST['prenom'], FILTER_SANITIZE_STRING)) {
        $prenom = $_POST['prenom'] ;
      } 
      else {
        echo("Le prénom entré  n'est pas valide !");
      }

        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $adresseMail = $_POST['mail'] ;
          } 
          else {
            echo("$email n'est pas valide !");
          }
        
        //  if (filter_var($_POST['numero'], FILTER_VALIDATE_INT)) {
            $numero = $_POST['numero'] ;
       /* } 
        else {
            echo("Le numéro est invalide !");
        }*/
        
        
        $dateNaissance = $_POST['dateNaissance'];

        /* Fin verification */


        /* on test si le mdp contient bien au moins 8 caractère */
        if (strlen($motDePasse)>=8)
        {
            /* on test si les deux mdp sont bien identique*/
            if ($motDePasse == $password2)
            {
                // On crypte le mot de passe
                $motDePasse = hash('sha256', $motDePasse);
                // on se connecte à MySQL et on sélectionne la base
                $c = new mysqli ("localhost","root","","lessonscreen") ;
                //On créé la requête

                $sql = "INSERT INTO utilisateurs (sexe, nom, prenom, dateNaissance, adresseMail, motDePasse, numero) VALUES ('$sexe','$nom','$prenom', '$dateNaissance', '$adresseMail', '$motDePasse', '$numero')";
                /* execute et affiche l'erreur mysql si elle se produit */
                    if (!$c->query($sql)){
                        printf("Message d'erreur : %s\n", $c->error);
                    }/* msg d'erreur */
                // on ferme la connexion
                mysqli_close($c);

                //echo $sql;

                $host  = $_SERVER['HTTP_HOST'];
                $uri   = "/Projet/html";//rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra = 'inscription.php';
                setcookie('prenom', $prenom, time() + 365*24*3600, "/", "localhost", false, true); 
                header("Location: http://$host$uri/$extra?msg=success");
                exit;

            } /* if mdp1 = mdp2 */
            else{
                echo "Les mots de passe ne sont pas identiques";
            } /* mdp non identique */
        }/* mdp de + de 8 carac*/
        else {
            echo "Le mot de passe est trop court !";
        }

    } /* if empty case vide */
    else { 
        echo "Veuillez saisir tous les champs !";
    }          
} /* if submit */

?>