<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta lang="fr">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width"/>
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet"> 
    

    <title>LessOnScreen</title>

</head>

<body>
<!--Début bannière -->
    <div id="banner">
        <img src="../img/banniere4.png " alt="Bannière du site"   name="banniereDuSite" height="250px" width="100%" >
    

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

 <!--Barre de recherche au niveau de la bannière-->
    
        <div class="recherche_p">

            <form action="/search" id="searchthis" method="get">
                 <input id="search" name="q" type="text" placeholder="Rechercher" />
             <input id="search-btn" type="submit" value="Rechercher" />
            </form>
    
    </div>
    
<!--Fin de la barre de recherche-->
 </div>
<!--Fin bannière-->

<!--Conteneur : boutton connexion + boutton inscription-->
    <div id="ctnInscriptionConnexion">

<!--Boutton inscription-->
        <div id="inscription">
                <a href="inscription.php" class="bouton"><button class="bouton2">Incrisption</button></a>
        </div>
<!--Fin boutton inscription-->

<!--Boutton connexion-->
        <div id="connexion">
                <a href="inscription.php"><button class="bouton2" >Connexion</button></a>
        </div>
<!--Fin boutton connexion-->

    </div>
<!--Fin conteneur connexion/inscription-->


<!--Début sous-menu-->
    <div id="sousMenu">
        
            <h1 style="text-align:center">Menu :</h1>
            <li><a href="cours.html">Cours</a></li>
                <ul>
                    <li><a href="cours.php">Cours sur algorithmes</a></li>
                    <li><a href="cours.php">Cours de droit</a></li>
                    <li><a href="cours.php">Cours LINUX</a></li>
                    <li><a href="cours.php">Voir plus</a></li>
                </ul>
                <li><a href="news.php">Les News :</a></li>
                <ul>
                    <li><a href="news.php">Les derniers articles</a></li>
                    <li><a href="news.php">Les tops articles</a></li>
                    <li><a href="news.php">Les Bases</a></li>
                </ul>
            <li><a href="MonEspace.php">Mon Espace</a></li>
                <ul>
                        <li><a href="MonEspace.php">Mon profil</a></li>
                        <li><a href="MonEspace.php">Mes cours</a></li>
                        <li><a href="MonEspace.php">Mes articles favoris</a></li>
                </ul>
            <li><a href="contact.php">Contact</a></li>
                <ul>
                        <li><a href="contact.php">Contactez le support</a></li>
                        <li><a href="contact.php">Contactez un membre du site</a></li>
                        <li><a href="contact.php">Mentions légales</a></li>
                </ul>
        
        
    </div>
<!--Fin sous menu-->

<!--Bloc pour les site conseiller par l'équipe-->
<div id="siteConseil">
    <li><h2 style="font-size:20px;">Nos Partenaires :</h2></li>
    <ul>
        <div class="imgPartenaires">
        <a href="https://openclassrooms.com/"><img src="../img/LogoOpenClassrooms.png" alt="openclassroom.fr" name="openclassroom"  width="100%" height="200px" style="float:left;right:50px;"></a>
        <a href="https://www.udemy.com/"><img src="../img/logoUdemy.png" alt="udemy" name="udemy" width="100%" height="180px" style="margin-top:10%"></a>
        
        <a href="https://www.codecademy.com/"><img src="../img/logoCodeAcademy.png" width="100%" height="150px" alt="codecademy" style="margin-top:15%" name="codecademy"></a>
        <a href="https://www.w3schools.com"><img src="../img/logoW3Schools.png" width="100%" height="200px" alt="w3schools" style="margin-top:10%" name="w3schools"></a>
        </div>
        <div id="imgMNSD"><a href="https://msdn.microsoft.com/fr-fr/"><img id="imgMNSD"  src="../img/logoMnsd.png" width="90%" height="100px" alt="msdn" name="msdn" style="margin-top:15%"></a></div>
    </ul>
</div>
<!--Fin Site conseil-->

<!--Debut bloc pub-->
<div class="pub">
    
</div>
<!--Fin bloc pub-->

<!--Début bloc centrale : Bloc contenue au milieu de la page en excluent les deux coter et le footer-->
        <div class="ctnBlocCentrale">
            <br /><br />
<!--Début bloc contenant les vidéos-->
            <div class="ctnVideo"><h1 style="font-size:35px;color:#333;text-align: center">Nos sélections de vidéos :</h1>
                <br /><br />
                <iframe width="390px" height="300" src="https://www.youtube.com/embed/yYs0Vn5X40k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="390px" height="300" src="https://www.youtube.com/embed/yVtfimroiQg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="390px" height="300" src="https://www.youtube.com/embed/X4nRop2b8Kg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
<!--Fin bloc vidéo-->
                <br /><br />
<!--Début bloc articles-->
            <div class="ctnArticles">
                    <h1 style="font-size:35px;color:#333;text-align: center">Nos articles préférés :</h1>
                    <br />
                    <div class="article1" width="400" height="300">

                        <div class="imgArticle1">
                            <a href="news.php"><img src="../img/article1.jpg" width="400" height="300"></a>
                            <!--https://www.lemondeinformatique.fr/actualites/lire-samsung-booste-la-puissance-de-ses-puces-exynos-avec-la-version-9820-73435.html-->
                        </div>

                        <br /><br />

                        <div class="txtArticle1">
                            <h2>Samsung booste la puissance de ses puces Exynos avec la version 9820</h2>
                            <p>Après une première édition dédiée au Galaxy S9 en janvier, Samsung Electronics vient de sortir la deuxième version de son processeur Exynos 9. Cette puce serait sept fois plus rapide que la précédente et est la première construite ...</p>
                            <a href="news.php"><button>Voir plus</button></a>
                        </div>

                    </div>

                        <br /><br />

                    <div class="article2" width="400" height="300">

                            <div class="imgArticle2">
                                <a href="news.php"><img src="../img/article2.jpg" width="400" height="300"></a>
                                <!--https://www.lemondeinformatique.fr/actualites/lire-microsoft-livre-une-seconde-maj-1809-pour-windows-10-73434.html-->
                            </div>
                            <br /><br />
                            <div class="txtArticle2">
                                <h2>Microsoft livre une seconde MAJ 1809 pour Windows 10</h2>
                                <p>Microsoft a repris aujourd'hui le déploiement de la mise à jour d'octobre de Windows 10, suspendue pendant 38 jours suite à des problèmes de suppression de fichiers.</p>
                                <a href="news.php"><button>Voir plus</button></a>
                            </div>
                    </div>

                    <br /><br />

                    <div class="article3" width="400" height="300">

                            <div class="imgArticle1">
                                <a href="news.php"><img src="../img/article3.jpg" width="400" height="300" ></a>
                                <!--https://www.lemondeinformatique.fr/actualites/lire-top500-des-supercalculateurs-trio-de-tete-domine-par-les-etats-unis-73423.html-->
                            </div>
                            <br /><br />
                            <div class="txtArticle3">
                                <h2>Top 500 des supercalculateurs : Trio de tête dominé par les Etats-Unis</h2>
                                <p>En plaçant des systèmes à la première et deuxième place du Top 500 des supercalculateurs, les Etats-Unis consolident leur position de numéro 1 en termes de puissance moyenne. Mais la Chine est en tête en volume...</p>
                                <a href="news.php"><button>Voir plus</button></a>
                            </div>
                    </div>

                    <br /><br />
            </div>
<!--Fin bloc article-->

<!--Bloc Tweets du jour-->
            <div class="ctnTweetDuJour"><h1 style="font-size:35px;color:#333;text-align: center">Les Tweets du jours :</h1>
                
                <div class="tweet1">
                    <blockquote class="twitter-tweet" data-lang="fr"><p lang="fr" dir="ltr"><a href="https://twitter.com/hashtag/Tech?src=hash&amp;ref_src=twsrc%5Etfw">#Tech</a> : les principales sources de revenus pour chacune des #GAFAMhttps://goo.gl/9erY2W <a href="https://t.co/kWEN1VFByB">pic.twitter.com/kWEN1VFByB</a></p>&mdash; Elena Debbaut (@ElenaDebbaut) <a href="https://twitter.com/ElenaDebbaut/status/1063025689262206977?ref_src=twsrc%5Etfw">15 novembre 2018</a></blockquote>
                    
                </div>

                <div class="tweet2">
                    <blockquote class="twitter-tweet" data-lang="fr" height="300" width="400"><p lang="fr" dir="ltr">Facebook: un nouveau bug dévoile les informations personnelles des utilisateurs <a href="https://t.co/lOkFXjKA57">https://t.co/lOkFXjKA57</a> <a href="https://twitter.com/hashtag/Tech?src=hash&amp;ref_src=twsrc%5Etfw">#Tech</a> <a href="https://t.co/F87bgPZMIm">pic.twitter.com/F87bgPZMIm</a></p>&mdash; L&#39;important (@Limportant_fr) <a href="https://twitter.com/Limportant_fr/status/1063011532836126720?ref_src=twsrc%5Etfw">15 novembre 2018</a></blockquote>
                </div>

            </div>
<!--Fin bloc Tweets du jour-->




        </div>

    
<!--Fin bloc centrale-->

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

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

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>


</html>