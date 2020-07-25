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
        <div class=" SignIn-SignUp">

    <header>
        <?php include('header.php'); ?>
    </header>

            <form>
                <div id="sign-in">
                    <div class="copyright__logo">
                        dmd <br><span class="copyright__logo--extention">Since-2012</span>
                    </div>
                    <h4>Connecter vous et découvrez nos nouvels arrivage</h4>
                    <p>__________________________________</p>
                    <br>

                    <i class="fa fa-facebook"> 
                    <a href="https:/facebook.com" class="sign-in__byfacebook">
                        Continuez avec Facebook 
                    </a> 
                </i>
                    <br><br>
                    <i class="fa fa-envelope"> 
                <input type="mail" name="e-mail" placeholder="Exp: dmd-shop@gmail.com">
                </i>
                    <br><br>
                    <i class="fas fa-lock"> 
                   <input type="password" name="password" id="password" placeholder="votre mot de passe" ><i class="far fa-eye-slash"></i>
                    </i>
                    <br><br>
                    <button type="submit" id="sign-up__button">Connexion</button>
                    <br><br><br>
                    <a href="#" class="password-init">Mot de passe oublié ?</a>
                    <a href="sign-up.html" class="new-user">Je suis nouveau je m'inscrit !</a>
                    <br><br><br>
                    <p class="terms">Pour plus d’information, consulter la Politique de conﬁdentialité de <a href="index.html">dmd-shop</a> accessible via le lien suivant :
                        <a href="#">Protection de vos données personnelles</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
</body>

</html>