<!DOCTYPE html>
<html>
<head>
    <title>Mon espace - LessOnScreen</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/MonEspace.css" />
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
        
     
              

 <!--Fin menu navigation-->  

 <!--Début bloc centrale : Bloc contenue au milieu de la page en excluent les deux coter et le footer-->
    <div class="ctnBlocCentrale">     
        <div class="titreArriver">
<br /><br /> 
            <h2 class="bienvenue">Bienvenue sur notre site <?php  echo (isset($_COOKIE['prenom'])) ? $_COOKIE['prenom'] : "" ; ?> !</h2> 
        </div>

            <h2 style="text-align:center; text-decoration:underline;">Nos vidéos exclusives :</h2> <br />
        <div class="ctnVideo"> 

            <iframe width="450" height="315" src="https://www.youtube.com/embed/6AMZC3uIE4s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="450" height="315" src="https://www.youtube.com/embed/8FqZZrbnwkM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="450" height="315"  src="https://www.youtube.com/embed/cQZOfeKrWDs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
                    <br /><br />
        <div class="ctnVideo">
            <iframe width="450" height="315" src="https://www.youtube.com/embed/dWq4gpKJkWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="450" height="315" src="https://www.youtube.com/embed/FDhgSaVapEI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="450" height="315" src="https://www.youtube.com/embed/MZo0-00NcoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>

        <h2 style="text-align:center; text-decoration:underline;">Nos offres d'emplois tech :</h2> <br />

    <div class="ctnTweet">

        <div class="tweet1" >
            <blockquote class="twitter-tweet" ><p lang="fr" dir="ltr"><a href="https://twitter.com/hashtag/OFFREDEMPLOI?src=hash&amp;ref_src=twsrc%5Etfw">#OFFREDEMPLOI</a>: Engagement d&#39;un <a href="https://twitter.com/hashtag/analyste?src=hash&amp;ref_src=twsrc%5Etfw">#analyste</a> <a href="https://twitter.com/hashtag/d%C3%A9veloppeur?src=hash&amp;ref_src=twsrc%5Etfw">#développeur</a> et d&#39;un administrateur système et <a href="https://twitter.com/hashtag/r%C3%A9seau?src=hash&amp;ref_src=twsrc%5Etfw">#réseau</a> pour le S.P. <a href="https://twitter.com/hashtag/Informatique?src=hash&amp;ref_src=twsrc%5Etfw">#Informatique</a>: <a href="https://t.co/fWcGavdrDF">https://t.co/fWcGavdrDF</a> <a href="https://twitter.com/hashtag/ProvLux?src=hash&amp;ref_src=twsrc%5Etfw">#ProvLux</a> <a href="https://twitter.com/hashtag/Emploi?src=hash&amp;ref_src=twsrc%5Etfw">#Emploi</a> <a href="https://twitter.com/hashtag/Job?src=hash&amp;ref_src=twsrc%5Etfw">#Job</a> <a href="https://twitter.com/hashtag/JobSearch?src=hash&amp;ref_src=twsrc%5Etfw">#JobSearch</a> <a href="https://twitter.com/hashtag/Informaticien?src=hash&amp;ref_src=twsrc%5Etfw">#Informaticien</a> <a href="https://twitter.com/hashtag/code?src=hash&amp;ref_src=twsrc%5Etfw">#code</a> <a href="https://twitter.com/hashtag/coding?src=hash&amp;ref_src=twsrc%5Etfw">#coding</a> <a href="https://twitter.com/hashtag/dev?src=hash&amp;ref_src=twsrc%5Etfw">#dev</a> <a href="https://twitter.com/hashtag/developer?src=hash&amp;ref_src=twsrc%5Etfw">#developer</a> <a href="https://twitter.com/hashtag/it?src=hash&amp;ref_src=twsrc%5Etfw">#it</a> <a href="https://twitter.com/hashtag/development?src=hash&amp;ref_src=twsrc%5Etfw">#development</a> <a href="https://t.co/A51FIAJQFi">pic.twitter.com/A51FIAJQFi</a></p>&mdash; Province de Luxembourg (@ProvLux) <a href="https://twitter.com/ProvLux/status/956458253411602432?ref_src=twsrc%5Etfw">January 25, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>   
        </div>

        <div class="tweet2">
                <blockquote class="twitter-tweet" class="tweet2"><p lang="fr" dir="ltr">[ URGENT ] Cher réseau, nous recherchons des développeurs maîtrisant <a href="https://twitter.com/hashtag/Windev?src=hash&amp;ref_src=twsrc%5Etfw">#Windev</a> et <a href="https://twitter.com/hashtag/Webdev?src=hash&amp;ref_src=twsrc%5Etfw">#Webdev</a>, pour développer <a href="https://twitter.com/hashtag/CRM?src=hash&amp;ref_src=twsrc%5Etfw">#CRM</a>, <a href="https://twitter.com/hashtag/ERP?src=hash&amp;ref_src=twsrc%5Etfw">#ERP</a>, et site <a href="https://twitter.com/hashtag/webmarchand?src=hash&amp;ref_src=twsrc%5Etfw">#webmarchand</a> ! Contactez-nous vite pour plus d&#39;infos : contact@sedimat.com ou 04 76 48 01 90 ! <a href="https://twitter.com/hashtag/Job?src=hash&amp;ref_src=twsrc%5Etfw">#Job</a> <a href="https://twitter.com/hashtag/development?src=hash&amp;ref_src=twsrc%5Etfw">#development</a> <a href="https://twitter.com/hashtag/Informatique?src=hash&amp;ref_src=twsrc%5Etfw">#Informatique</a> <a href="https://twitter.com/hashtag/recrutement?src=hash&amp;ref_src=twsrc%5Etfw">#recrutement</a> <a href="https://twitter.com/hashtag/offre?src=hash&amp;ref_src=twsrc%5Etfw">#offre</a> <a href="https://twitter.com/hashtag/travail?src=hash&amp;ref_src=twsrc%5Etfw">#travail</a> <a href="https://t.co/MjbztNNNNh">pic.twitter.com/MjbztNNNNh</a></p>&mdash; Sedimat DGI (@SedimatDGI) <a href="https://twitter.com/SedimatDGI/status/943482057182928896?ref_src=twsrc%5Etfw">December 20, 2017</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
        </div>
        
        <div class="tweet3" >
                    <blockquote class="twitter-tweet" class="tweet3"><p lang="fr" dir="ltr">Nous recherchons un Analyste Développeur (H/F) pour rejoindre nos équipes à Villeneuve d&#39;Ascq dans le domaine « Instruction des Crédits »<a href="https://t.co/oHue2MjYRI">https://t.co/oHue2MjYRI</a><a href="https://twitter.com/hashtag/recrutement?src=hash&amp;ref_src=twsrc%5Etfw">#recrutement</a> <a href="https://twitter.com/hashtag/ingenieur?src=hash&amp;ref_src=twsrc%5Etfw">#ingenieur</a> <a href="https://twitter.com/hashtag/Development?src=hash&amp;ref_src=twsrc%5Etfw">#Development</a> <a href="https://twitter.com/hashtag/Lille?src=hash&amp;ref_src=twsrc%5Etfw">#Lille</a> <a href="https://twitter.com/hashtag/informatique?src=hash&amp;ref_src=twsrc%5Etfw">#informatique</a> <a href="https://t.co/DSKFkmYSUW">pic.twitter.com/DSKFkmYSUW</a></p>&mdash; Euro Information (@EuroInformation) <a href="https://twitter.com/EuroInformation/status/1017677321409572865?ref_src=twsrc%5Etfw">July 13, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
        </div>                
   </div>


<br /><br />


 <!-- Début Footer -->
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