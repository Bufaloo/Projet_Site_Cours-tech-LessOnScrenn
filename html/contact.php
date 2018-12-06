<!DOCTYPE html>
<html>
<head>
    <title>Page contact - LessOnScreen</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/contact.css" />

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


    <div class="formContactSupport">
   
    <p>
        <h2 id="ContacterSupport" class="imageCenter">Contacter support </h2>
    </p>
 <!--formulaire "contacter"-->
    <form method="POST" action="../script/contactSupportForm.php" >
        </p> 
<!--formulaire contacter identifiant-->
        <p>
            
            <label for="prenom">Prénom :</label>
            <input type="text" placeholder="Prénom" name="prenom">
        </p>
        
<!--formulaire contacter mail-->
        <p>
                
            <label for="email">Mon Email :</label>
            <input type="email" value="<?php echo (isset($_COOKIE['adresseMail'])) ? $_COOKIE['adresseMail'] : "" ; ?>" name="adresseMail">

        </p>
        
<!--formulaire contacter sujet-->
        <p>
                <label for="sujet">Objet :</label>
                <input type="texte" placeholder="object" name="objet">
        </p>
<!--formulaire contacter message-->
        <p class="imageCenter">
                <label for="message">Message :</label>
                <textarea rows="4" cols="50" style="max-height: 80px; text-align: left; max-width: 500px;" name="messageUtilisateur">Message</textarea>

        </p>

        <input type="submit" name="submit" placeholder="Envoyer">
        </form>
    </div>

    <div class="ContacterUnmembreDuGroupe">
<!--formulaire de contacter un membre du groupe-->        

    <p>
        <h2 id="ContacterUnMembreDuGroupe" class="imageCenter">Contacter un membre du groupe</h2>
    </p>

        <form>
<!--formulaire de contacter un membre du groupe prenom-->    


            <p>
                    <label for="Prénom">Prénom :</label>
                    <input type="text" placeholder="Mathieu" name="firstname">
                
            </p> 
<!--formulaire de contacter un membre du groupe nom -->    


            <p>
                    <label for="Nom">Nom :</label>
                    <input type="text" placeholder="Martin" name="nom">
            </p>
            
<!--formulaire de contacter un membre du groupe votre mail-->
            <p>
                    <label for="email">Votre email :</label>
                    <input type="email" placeholder="Email" name="email">
    
            </p>

    
<!--formulaire de contacter un membre du groupe mail du destianataire-->        
            <p>
                    <label for="identifiant">Email du destinataire :</label>
                    <input type="email" name="email" placeholder="Email">
            </p>


<!--formulaire de contacter un membre du groupe sujet-->            
            <p>
                    <label for="sujet">Sujet :</label>
                    <input type="texte" placeholder="Sujet" name="sujet">
            </p>


<!--formulaire de contacter un membre du groupe message-->            
            <p class="imageCenter">
                    <label for="message">Message :</label>
                    <textarea rows="4" cols="50" style="max-height: 80px; text-align: left; max-width: 500px;">Message</textarea>
            </p>
            <input type="submit" placeholder="envoyer">

        </form>
    </div>

<!--mention Légal-->
<div class="mentionLegale">
    

    <h3 class="TitreMention">Voir mention légal:</h3>
    <a href="mentionLegal.html">Mention légal</a>
</div>

<div id="ctnFooter" style="background-color:#e9eaeb">
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