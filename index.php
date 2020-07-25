<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/527724abde.js" crossorigin="anonymous"></script>
    <title>dmd-shop</title>
</head>

<body>
    <div id="container">
    <header>
        <?php include('header.php'); ?>
    </header>   

        <!--Section-1 partie reservé pour la pub avec desimages en fond qui vont déffiler-->
        <section id="advertising">
        <a> <strong><?php echo  date(' d/m/y h:i:s ') ; ?></strong> </a>
            <div class="advertising__content">                
                <h2 class="logo">dmd</span><br><span class="logo__extention">Since-2012</span>
                </h2>
                <p>Jusqu'à 20% de Remise sur vos commandes</p>
                <a href="#" class="btn__shopping">SHOPPING</a>
            </div>
        </section> 
        
       
        <!--Section 2 des nouvelles collections mises en premier plan sur la page d'accueil-->
        <section id="collection">
            <div class="Collection__btn">
                <button class="Collection__btn--active" type="button">
                     <p>NEW COLLECTION</p> 
                </button>
                <div class="dropdown">
                    <button class="collection__btn--disable dropbtn" type="menu">
                      <p>ALL COLLECTION </p>
               
                    <div class="dropdown-content"> 
                        <a href="#">Homme</a>
                        <a href="#">Femme</a>
                   </div> 
                
                </button>
                </div>

                <div class="dropdown">
                    <i class="fa fa-search dropbtn">
                <input class="search__area" type="search__area" name="serch-area" placeholder="SEARCH IN LIST">
                </i>
                    <div class="dropdown-content">
                        <a href="#">T-shirt</a>
                        <a href="#">Pantallon</a>
                    </div>

                </div>
            </div>
            <div class="newCollection__gallery">
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">favorite_border</i>
                        <img src="https://static.zara.net/photos///2020/I/0/1/p/7839/002/712/2/w/2024/7839002712_9_1_1.jpg?ts=1593157882393" alt="nouvelle_arrivage_1">
                        <h3>Robe d'été</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>

                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">favorite_border</i>
                        <img src="https://images.asos-media.com/products/tommy-hilfiger-sweat-shirt-authentique-confort-avec-bandes-laterales-a-logo-bleu-marine-chine/12193204-1-navymarl?$n_480w$&wid=476&fit=constrain" alt="nouvelle_arrivage_1">
                        <h3>Pull homme</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://static.zara.net/photos///2020/I/0/1/p/6873/029/933/5/w/2024/6873029933_9_1_1.jpg?ts=1593158000117" alt="nouvelle arrivage">
                        <h3>Haut et bas d'été</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://images.asos-media.com/products/pullbear-rolling-stones-sweat-shirt-noir-delave/14556924-1-black?$n_320w$&wid=317&fit=constrain" alt="nouvelle_arrivage_1">
                        <h3>Pull homme </h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://static.zara.net/photos///2020/V/0/2/p/0722/400/250/2/w/2088/0722400250_2_4_1.jpg?ts=1579168442104" alt="nouvelle_arrivage_1">
                        <h3>Jeans & T-shirt sans motif</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="//lp2.hm.com/hmgoepprod?set=quality[79],source[/73/13/7313e507b86ae1cf75a19168bcd905dc4cec7119.jpg],origin[dam],category[ladies_cardigansjumpers_cardigans],type[LOOKBOOK],res[l],hmver[1]&call=url[file:/product/fullscreen]" alt="nouvelle arrivage">
                        <h3>Veste femme</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="//lp2.hm.com/hmgoepprod?set=quality[79],source[/2c/c7/2cc793552ff795f45a3825eb18530b199e3ec61a.jpg],origin[dam],category[men_tshirtstanks_shortsleeve],type[LOOKBOOK],res[m],hmver[1]&call=url[file:/product/main]" alt="nouvelle_arrivage_1">
                        <h3>T-shirt Noir coton</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="//lp2.hm.com/hmgoepprod?set=quality[79],source[/d2/bd/d2bd701749e6f595ae22e22d11f39132811d7af8.jpg],origin[dam],category[ladies_cardigansjumpers_cardigans],type[LOOKBOOK],res[l],hmver[1]&call=url[file:/product/fullscreen]" alt="nouvelle_arrivage_1">
                        <h3>Haut de soirée femme</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://static.zara.net/photos///2020/V/0/1/p/2761/041/712/3/w/1230/2761041712_2_1_1.jpg?ts=1581930688203" alt="nouvelle_arrivage_1">"
                        <h3>Ensemble Blanc femme</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="//lp2.hm.com/hmgoepprod?set=quality[79],source[/5d/39/5d3952171b328434e83c800138e8534bf2b2c63f.jpg],origin[dam],category[men_tshirtstanks_shortsleeve],type[LOOKBOOK],res[m],hmver[1]&call=url[file:/product/main]" alt="nouvelle_arrivage_1">
                        <h3>T-shirt d'été</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://static.zara.net/photos///2020/I/0/1/p/7805/181/711/2/w/1337/7805181711_9_3_1.jpg?ts=1594031728568" alt="nouvelle_arrivage_1">
                        <h3>Ensemble blanc femme</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="//lp2.hm.com/hmgoepprod?set=quality[79],source[/27/fa/27fa38dc8bf9843ff5554de5f0f2583b3b4a2a3a.jpg],origin[dam],category[men_tshirtstanks_shortsleeve],type[LOOKBOOK],res[m],hmver[1]&call=url[file:/product/main]" alt="nouvelle_arrivage_1">
                        <h3>T-shirt blanc été</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
            </div>
        </section>

        <!--Section Opinions clients-->
        <section id="opinion">
            <div class="opinion__way">

                <!--Avis des clients via le service messagerie-->
                <div class="opinion__way--byMail">
                    <h3>Votre avis nous interesse :</h3>
                    <form>
                        <label for="name"> Name </label>
                        <br>
                        <i class="fa fa-user user-icone">
                            <input type="text"  name="pseudo" id="pseudo" placeholder="Pseudo" required  >  
                        </i>
                        <br>
                        <label for="e-mail"> E-mail </label><br>
                        <i class="fa fa-envelope e-mail-icone">
                            <input type="mail" name="e-mail" id="e-mail" placeholder="Exp: dmd-shop@gmail.com" required>
                        </i>
                        <br>
                        <label for="userOpinion">Opinion  </label><br>
                        <textarea name="userOpinion" id="userOpinion">  Laissez votre commentaire ici !  </textarea><br>
                        <input type="submit" name="userOpinion" value="Send" id="userOpinion__btn">
                        <p>
                            Vous êtes nouveau sur notre site ? <br>Inscrivez vous gratuitement en un clic !
                        </p>
                        <button class="opinion__SignUp--btn" type="submit">
                            <a href="sign-up.html">sign-up</a>
                        </button>
                    </form>
                </div>

                <!--Avis et note des clients en marquant les étoiles-->
                <div class="opinion__way--byNote">
                    <h3>Meilleurs commentaires :</h3>
                    <p><i class="fa fa-user"></i> <strong> Mike </strong>
                        <br>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class='fas fa-star-half-alt'></i>
                        <strong> Excélent </strong><br>
                        <em>Commenté en France le 20 Mai 2020<br>
                            couleure noire: | Taille: M | <span style="color: #d10f0f; font-weight: bold" >Achat vérifier</span> </em>
                        <br><br> Livraison rapide, j'ai reçu mon colis, la qualité des impressions est incoyable. <br>merci dmd-shopvous êtes au top !
                        <br><br><i class="fa fa-thumbs-up"> 5 j'aime</i> | 0 j'aime <i class="fa fa-thumbs-o-down"></i>
                    </p>
                    <p><i class="fa fa-user"></i> <strong> Sonya </strong>
                        <br>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <strong> Très satisfait  </strong><br>
                        <em>Commenté en France le 20 Fevrier 2020<br>
                            couleure: Blanc | Taille: L | <span style="color: #d10f0f; font-weight: bold" >Achat vérifier</span> </em>
                        <br><br> J'ai reçu mon colis et j'en suis très fière de ma commande.
                        <br><br><i class="fa fa-thumbs-up"> 9 j'aime</i> | 0 j'aime <i class="fa fa-thumbs-o-down"></i>
                    </p>
                    <p><i class="fa fa-user"></i> <strong> Remy </strong>
                        <br>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class='fas fa-star-half-alt'></i>
                        <i class="fa fa-star-o"></i>
                        <strong> Bonne qualité  </strong><br>
                        <em>Commenté en France le 20 décembre 2019<br>
                            couleure : rouge | Taille: s | <span style="color: #d10f0f; font-weight: bold" >Achat vérifier</span> </em>
                        <br><br> Livraison rapide. bonne qualité rapport prix <br>
                        <br><i class="fa fa-thumbs-up"> 2 j'aime</i> | 0 j'aime <i class="fa fa-thumbs-o-down"></i>

                    </p>

                </div>
            </div>
        </section>

        <!--Section mode de payement-->
        <section id="payementMode">
            <h3>réglez vos achats en toute sécurité </h3>
            <div class="payement__card">

                <p><img src="https://images.asos-media.com/navigation/visa-carte-bleue-png" alt="visacartebleue">
                </p>
                <p> <img src="https://images.asos-media.com/navigation/mastercard-png" alt="mastercard">
                </p>
                <p><img src="https://images.asos-media.com/navigation/american-express-png" alt="americanexpress">
                </p>
                <p> <img src="https://images.asos-media.com/navigation/pay-pal-png" alt="paypal">
                </p><br>
                <p><img src="https://images.asos-media.com/navigation/apple-pay-png" alt="applepay">
                </p>


            </div>
        </section>

        <!--Pied de la page-->
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    </div>
</body>

</html>