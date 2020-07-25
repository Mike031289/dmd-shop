
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
                        <li class="dropdown"><a href="#" class="dropbtn">MON COMPTE </a></br>
                                <?php 
                                    $userIsConnected = true;
                                    $userName = '<em>Mike</em>';
                                if($userIsConnected)
                                    {
                                        echo '<em> Bonjour </em>' .$userName. ' ! '  ;
                                    }
                                else
                                    {
                                        echo 'Veuillez vous connecter';
                                    }
                                ?>
                                
                            <di class="dropdown-content">
                                <a href="sign-in.html">sign-in</a>
                                <a href="sign-up.html">sign-up</a>
                            </di>
                        </li>
                        <li class="dropdown"><a href="#" class="dropbtn">MON PANNIER</a></br>
                                <?php 
                                    $productInBasket = 0;
                                    
                             if( $productInBasket < 100 )
                                    {
                                        echo '<em>Vous avez ' . $productInBasket . ' articles </em>'  ;
                                        $productInBasket++;
                                    }
                            else {
                                echo ' Veuillez ajouter vos articles au pannier';
                            }
                                ?>
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