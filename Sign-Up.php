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
        <div class="SignIn-SignUp">
    <header>
        <?php include('header.php'); ?>
    </header>

            <form>
                <div id="sign-up">
                    <div class="copyright__logo">
                        dmd <br><span class="copyright__logo--extention">Since-2012</span>
                    </div>
                    <h4>Inscrivez vous et bénéficiez de <span class="sign-up__remise">20 % de remise !</span>
                    </h4>
                    <p>__________________________________</p>
                    <br>
                    <i class="fa fa-user"> 
                        <input type="text" name="pseudo"  placeholder="Choisisez Votre Pseudo" required/>
                </i>
                    <br><br>
                    <i class="fa fa-envelope"> 
                        <input type="mail" name="e-mail" placeholder="Exp: dmd-shop@gmail.com"/>
                </i>
                    <br><br>
                    <i class="fas fa-lock"> 
                        <input type="password" name="password" id="password" placeholder="choisissez votre mot de passe" /><i class="far fa-eye-slash"></i>
                    </i>
                    <br><br>
                    <i class="fa fa-lock"> 
                    <input type="password" name="password" id="password" placeholder="confirmez votre mot de passe" /><i class="far fa-eye-slash"></i>
                    </i>
                    <br><br>
                    <div id="terms-agreement">
                        <input type="checkbox" name="terms-agreement" required/>
                        <label for="terms-agreement" class="terms-agreement">
                    J'accepte avoir pris connaissance de la politique de confidentialité et de la protection des données personnelles de ce site
                    </label>
                    </div>
                    <br><br>
                    <button type="submit" id="sign-up__button">S'inscrire</button>
                    <br><br>
                    <a href="sign-in.html" class="user">Déjà client je me connecte</a>
                    <p class="terms">Pour plus d’information, consulter la Politique de conﬁdentialité de <a href="index.html">dmd-shop</a> accessible via le lien suivant :
                        <a href="#">Protection de vos données personnelles</a>
                    </p>
                    <div class="form__contact">
                        <a href=""><i class="fa fa-envelope"></i>  </a><br>
                        <a href=""><i class="fa fa-facebook-square"></i>   </a><br>
                        <a href=""><i class="fa fa-instagram"> </i>   </a><br>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html>