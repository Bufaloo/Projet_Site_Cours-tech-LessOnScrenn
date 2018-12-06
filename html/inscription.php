<!DOCTYPE html>
<html>
 
 
<head>
 
    <meta charset="utf-8">
    <meta lang="fr">
    <link rel="stylesheet" type="text/css" href="../css/inscription.css">
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">
    
 
    <title>Inscription & Connexion - LessOnScreen </title>
 
</head>
 
 
<body> 


    
<!--Menu de navigation-->
    
        <div id="ctnMenuNav">
            <nav class="navbar">
                
            <a href="index.php" style="padding-right: 80px;"><img src="../img/logo.png" alt="Logo LessOnScreen" name="LogoDuSite" height="55px" width="75px"></a>
                <a href="cours.php" style="padding-right: 80px;">Cours</a>
                <a href="news.php" style="padding-right: 80px;">Les News</a>
                <a href="MonEspace.php" style="padding-right: 80px;">Mon Espace</a>
                <a href="contact.php" style="padding-right: 80px;" >Contact</a>
                <a href="../script/deconnexion.php"style="padding-right: 50px; float:right;" >Se déconnecter</a>
            </nav> 
        </div>
              
 <!--Fin menu navigation-->   
 

    <!--Texte avant le formulaire-->
        <div class="inscription">
            <div>
                <h1 class="titreInscription">Vous n'êtes  pas encore inscrit ? Faite le dès maintenant !</h1>
                <?php if(isset($_GET['msg']) && $_GET['msg']=="success"){
                        echo "<h4>Vous êtes bien inscrit, veuillez vous connecter SVP</h4>";
                } ?>
            </div>
    <!--Conteneur bloc insciption-->        
            <div class="ctnFormulaireInscription">
                <form method="post" action="../script/inscriptionForm" name="monForm" >
                        <p>
                            <input type="radio" id="homme" name="sexe" value="h"/>
                                <label for="homme">Homme</label>
                            <input type="radio" id="femme" name="sexe" value="f" />
                                <label for="femme">Femme</label>
                        </p>

                        <p>
                            <label for="nom">Nom : </label>
                            <input type="text" id="nom" name="nom" value="jgjgjjhg" required  autofocus>
                        </p>
 
                        <p>
                            <label for="prenom">Prénom :</label>
                            <input type="text" id="prenom" name="prenom"value="sdfgfdsdfg" required >
                        </p>

                        <p>
                            <label for="dateNaissance">Entrez votre date de date naissance :</label>
                            <input type="date" id="dateNaissance" name="dateNaissance" required/>
                        </p>
 
                        <p>
                            <label for="mail"> Adresse E-mail :</label>
                            <input type="text" id="mail" name="mail" placeholder="Ex :azerty@gmail.com" required />
                        </p>
 
                        <p>
                            <label for="password"> Mot de passe :</label>
                            <input type="password" id="password" name="motDePasse" placeholder="Minimum 8 caractères" min="8" required />
                        </p>
 
                        <p>
                            <label for="password"> Répeter votre mot de passe :</label>
                            <input type="password" id="password" name="password2" placeholder="Confimer votre mot de passe" required />
                        </p>
 
                        <p>
                            <label for="numero">Numéro de téléphone :</label>
                            <input type="tel" id="numero" name ="numero" placeholder="Ex :0601020405" min="10" max="10" required >
                        </p>
 
                        <p>
                            <label for="acceptertermes">J'accepte les termes et conditions</label>
                            <a href="mentionLegal.html" target="_blank">(mention légal)</a>
                            <input type="checkbox" id="acceptertermes" name="acceptertermes" value="1" required />
                            
                        </p>
 
                        <p>
                            <input type="submit" value="Inscription" name="submit">
                        </p>
                </form>
            </div>
    <!--Fin conteneur bloc inscription-->
    </div>

    <!--Conteneur bloc connexion-->
        <div class="connexion">
            <div>
                <h2 class=TitreConnexion>Vous avez déjà un compte ? Connectez vous sans perdre de temps !</h2>
            </div>
                <br />
            <div class="ctnFormulaireConnexion">
                <form method="POST" action="../script/connexionForm.php" >
                        <p>
                            <label for="mail"> Adresse E-mail :</label>
                            <input type="text" id="mail" name="mail" value="<?php echo (isset($_COOKIE['adresseMail'])) ? $_COOKIE['adresseMail'] : "" ; ?>" required />
                        </p>
 
                        <p>
                            <label for="password"> Mot de passe :</label>
                            <input type="password" id="password" name="motDePasse" min="8" required />
                        </p>
 
                        <p>
                            <label for="souvenirId">Se souvenir de moi à la prochaine connexion</label>
                            <input type="checkbox" id="souvenirId" name="souvenirId" value="1" checked  />
                        </p>
 
                        <p>
                            <input type="submit" name="submit" value="Connexion">
                        </p>
                </form>
            </div>
        </div>

        <div id="ctnFooter">
            <footer>
                    
                  

                    <div class="txtFooter1">
                        <p>&copy; 2018 LessOnScreen<p>
                        <p>213 Route de Rennes</p>
                        <p>44700 ORVAULT FRANCE</p>
                    </div>

                    <div class="txtFooter2">
                        <p>Si vous avez un problème n'hésitez pas à nous contacter: <strong><a href="mailto:lessonscreen@gmail.com" style="font-size:19px">
                            lessonscreen@gmail.com</a></strong>.</p>
                        <p>N'hésitez pas à contacter le service client: +33 6 01 02 03 04 .</p>
                    </div>

                    <div class="iconReseauxSociaux">

                        <div class="partie1Icon">
                            <img src="../img/Facebook-Pages.png" alt="Logo Facebook LessOnScreen" name="Logo_Facebook" height="40px" width="30px">
                            <img src="../img/Twitter.png" alt="Logo Twitter LessOnScreen" name="Logo_Twitter" height="40px" width="30px">
                        </div>
                        
                        <div class="partie2Icon">
                            <img src="../img/LinkedIn.png" alt="Logo LinkedIn LessOnScreen" name="Logo_LinkedIn" height="40px" width="30px" >
                            <img src="../img/Youtube.png" alt="Logo YouTube LessOnScreen" name="Logo_YouTube" height="40px" width="30px">
                        </div>
                </div>

                <div class="txtFooter3">
                <p><a href="../html/mentionLegal.php">Mentions Légales</a></p>
                        <p><a href="#siteConseil">Nos Partenaires</a></p>
                        <p><a href="MonEspace.php">Listes Etudiants/Professionnels Incrits</a></p>
                </div>
                
                <div class="noteSite" >
                        <ul class="notes-echelle">
                            <p>Notez notre site web :</p>
                                <li>
                                    <label for="note1" title="Note&nbsp;: 1 sur 4">1</label>
                                    <input type="radio" name="notesA" id="note1" value="1" />
                                </li>
                                <li>
                                    <label for="note2" title="Note&nbsp;: 2 sur 4">2</label>
                                    <input type="radio" name="notesA" id="note2" value="2" />
                                </li>
                                <li>
                                    <label for="note3" title="Note&nbsp;: 3 sur 4">3</label>
                                    <input type="radio" name="notesA" id="note3" value="3" />
                                </li>
                                <li>
                                        <label for="note4" title="Note&nbsp;: 3 sur 4">4</label>
                                        <input type="radio" name="notesA" id="note4" value="4" />
                                </li>
                                    <input type="submit" name="Envoyez" id="envoyer" value="Envoyez !">
                            </ul>
                            
                </div> 
            </footer>      
    </div>
 
</body>
 
 
</html>