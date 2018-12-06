<!DOCTYPE html>
<html>
<head>
    <title>Mon espace - LessOnScreen</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/monEspaceEchec.css" />
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">

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
        <div class="titre">
            <h1>Oups, vous devez être connecté pour voir le contenu...</h1>
            <a href="inscription.php">Connectez-vous</a>
        </div>
              

 <!--Fin menu navigation-->  
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