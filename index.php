<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/527724abde.js" crossorigin="anonymous"></script>
    <title>dmd-shop</title>
</head>

<body>
    <div id="container">

        <header>
            <div id="header">
                <h1 class="header__title">Don Mike Design Shop <span class="header__title--red-dote">.</span></h1>
                <nav class="header__nav">
                    <ul class="header__nav--liste">
                        <li class="dropdown"><a href="#" class="dropbtn">ACCUEIL</a>
                            <di class="dropdown-content">
                                <a href="#">Homme</a>
                                <a href="#">Femme</a>
                                <a href="file:///C:/Users/Asus/Projet-dmd-shop/index.html#">Nouvelle Collection</a>
                            </di>
                        </li>
                        <li class="dropdown"><a href="#" class="dropbtn">MON COMPTE</a>
                            <di class="dropdown-content">
                                <a href="sign-in.html">sign-in</a>
                                <a href="sign-up.html">sign-up</a>
                            </di>
                        </li>
                        <li class="dropdown"><a href="#" class="dropbtn">MON PANNIER</a>
                            <di class="dropdown-content pannier">
                                <i class="fa fa-shopping-cart"><span class="badge">0</span>
                               </i> <br>
                                <em>Votre panier est vide !</em>
                            </di>

                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!--Section-1 partie reservé pour la pub avec desimages en fond qui vont déffiler-->
        <section id="advertising">

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
                        <img src="https://static.pullandbear.net/2/photos//2020/I/0/2/p/5694/512/433/5694512433_2_6_8.jpg?t=1590503040921&imwidth=375" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>

                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">favorite_border</i>
                        <img src="https://static.pullandbear.net/2/photos//2020/V/0/2/p/5694/517/833/5694517833_2_1_8.jpg?t=1589995278476&imwidth=1280" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://images.asos-media.com/products/tommy-hilfiger-sweat-shirt-authentique-confort-avec-bandes-laterales-a-logo-bleu-marine-chine/12193204-1-navymarl?$n_480w$&wid=476&fit=constrain" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="https://images.asos-media.com/products/pullbear-rolling-stones-sweat-shirt-noir-delave/14556924-1-black?$n_320w$&wid=317&fit=constrain" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
                        <p>Disponible en toutes tailles<span class="price">29,99 €</span></p>
                    </a>
                </div>
                <div class="product">
                    <a href="#" class="product__link">
                        <i class="material-icons">   favorite_border</i>
                        <img src="\Users\Asus\Pictures\Project-dmd\jeans_1.jfif" alt="nouvelle_arrivage_1">
                        <h3>Jeans homme coupe fit</h3>
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
        <footer id="footer">
            <div class="footer__information">

                <ul class="">

                    <li><a href="#">HOMME</a>
                    </li><br>
                    <li><a href="#">FEMME</a>
                    </li><br>
                    <li><a href="#">NEW COLLECTION</a>
                    </li>

                </ul>
                <p>
                    <a href="sign-up.html">INSCRIPTION</a><br><br> Devenez menmbre et <br> bénéficiez de -20%<br>sur vos commandes
                </p>
                <p>
                    <a href="">EN SAVOIR PLUS SUR NOUS</a><br><br>
                    <strong>dmd-shop</strong> est une boutique en ligne<br> qui vous propose ses services de vente de vêtements de
                    <br> qualité au design exceptionnel de notre marque <strong>dmd</strong>

                </p>
                <p class="icons"><a href="#">CONTACTES</a><br><br>

                    <a href=""><i class="fa fa-envelope"></i> dmd-shop@gmail.com </a><br>
                    <a href=""><i class="fa fa-facebook-square"></i> dmd-shop Official</a><br>
                    <a href=""><i class="fa fa-instagram"> </i> dmd-shop Official</a><br>
                    <a href=""><i class="fa fa-mobile"> </i> +336 62 27 29 75</a><br>
                </p>
            </div>
            <div class="copyright">
                <div class="copyright__logo">
                    dmd <br><span class="copyright__logo--extention">Since-2012</span>
                </div>
                <p class="terms">Pour plus d’information, consulter la Politique de conﬁdentialité de <a href="index.html">dmd-shop</a> accessible via le lien suivant :
                    <a href="#">Protection de vos données personnelles</a>
                </p>
                <p>
                    The content of this site is protected by the law of the Copy Right and belongs to <strong>dmd-Shop</strong> <br>Copy Right 2012-2020 Reserved By <strong>dmd-Company<i class="material-icons">copyright</i></strong>
                </p>
                <strong>Paris</strong>
                <p> ____________ </p>


            </div>
        </footer>
    </div>
</body>

</html>