<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Anna Dermo Maquillage Permanent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src="https://cdn.jsdelivr.net/gh/manucaralmo/GlowCookies@2.0.4/src/glowCookies.min.js" async></script>
	<script>
		AnalyticsCode = "259800761";

		linkHref = "http://annadermo.mallord.it/Privacypolicy.html";

	</script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDKPSH7D8N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HDKPSH7D8N');

    </script>
</head>
<style>
    .contact-section {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-info {
        color: black;
        max-width: 500px;
        line-height: 65px;
        padding-left: 50px;
        font-size: 18px;
    }

    .contact-info i {
        margin-right: 20px;
        font-size: 25px;
    }

    .contact-form {
        max-width: 700px;
        margin-right: 50px;
    }

    .contact-info,
    .contact-form {
        flex: 1;
    }

    .contact-form h2 {
        color: black;
        text-align: center;
        font-size: 35px;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    .contact-form .text-box {
        background: white;
        color: black;
        border: none;
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .contact-form .text-box:first-child {
        margin-right: 15px;
    }

    .contact-form textarea {
        background: white;
        color: black;
        border: none;
        width: 100%;
        padding: 12px;
        font-size: 15px;
        min-height: 200px;
        max-height: 400px;
        resize: vertical;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .contact-form .send-btn {
        float: right;
        background: white;
        color: black;
        border: none;
        width: 120px;
        height: 40px;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        transition-property: background;
    }

    .contact-form .send-btn:hover {
        background: white;
    }

    @media screen and (max-width: 950px) {
        .contact-section {
            flex-direction: column;
        }

        .contact-info,
        .contact-form {
            margin: 30px 50px;
        }

        .contact-form h2 {
            font-size: 30px;
        }

        .contact-form .text-box {
            width: 100%;
        }
    }

    /*css for alert messages*/

    .alert-success {
        z-index: 1;
        background: #D4EDDA;
        font-size: 18px;
        padding: 20px 40px;
        min-width: 420px;
        position: fixed;
        right: 0;
        top: 10px;
        border-left: 8px solid #3AD66E;
        border-radius: 4px;
    }

    .alert-error {
        z-index: 1;
        background: #FFF3CD;
        font-size: 18px;
        padding: 20px 40px;
        min-width: 420px;
        position: fixed;
        right: 0;
        top: 10px;
        border-left: 8px solid #FFA502;
        border-radius: 4px;
    }

</style>

<body>
    <!--Navbar!-->
    <!--Navbar!-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Anna Dermo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav ">

                    <!--Adding a dropdown menu!-->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="Presentiel.html">
                            En centre
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="Forma.php">Notre Formatrice</a></li>

                            <li><a href="Prog3.php">Nos Programmes</a></li>
                            <li><a href="pec2.php">Prise en Charge</a></li>

                            <li><a href="saf.php">Suivi après Formation</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="Elearning.html">
                            A distance
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="Forma.php">Notre Formatrice</a></li>

                            <li><a href="Prog2.php">Nos Programmes</a></li>
                            <li><a href="pec1.php">Prise en Charge</a></li>


                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="WebAcad.html">
                            Web Academy
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="Prog1.php">Nos Programmes</a></li>

                        </ul>
                    </li>
                    <li><a href="https://annadermo-maquillagepermanent.fr/">Site Principal</a></li>
                    <li><a href="Contac.php">Contactez-nous</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="boutique.php"><span class="fas fa-shopping-cart"></span> Boutique</a></li>
                    <li><a href="bot.html"><span class="fas fa-headset"></span> Chat</a></li>

                    <?php
					
					if(!isset($_SESSION["loggedin"])){

					?>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    <?php }
					else{?>

                    <li><a href="logout.php"><span class="fas fa-sign-out-alt"></span> Log out </a></li>
                    <?php }
					?>


                </ul>
            </div>
        </div>
    </nav>


    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>24 avenue Jean Jaurès 83320 Carqueiranne</div>
            <div><i class="fas fa-envelope"></i>
                <a target="_blank" href="mailto:secretariatannadermo@gmail.com">secretariatannadermo@gmail.com</a>
            </div>
            <div><i class="fas fa-phone"></i>+33 (0)7 60 43 57 54</div>
            <div><i class="fas fa-clock"></i>Lun - Ven: 8h30 - 18h30</div>
        </div>
        <div class="contact-form">
            <h2>Contactez Nous!</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Nom et Prenom" required>
                <input type="email" name="email" class="text-box" placeholder="Email" required>
                <textarea name="message" rows="5" placeholder="Votre Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Envoyer">
            </form>
        </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

    </script>




    <br>
    <footer class="page-footer font-small cyan darken-3">


        <!-- Footer Elements -->
        <div class="container " style="background-color: #aa70aa;">

            <!-- Grid row-->
            <div class="row" style="color: black;">

                <!-- Grid column -->
                <div class="col-md-12">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h4 style="color: black;">REJOIGNEZ NOTRE COMMUNAUTÉ MAQUILLAGE PERMANENT</h4>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a href="https://www.facebook.com/maquillagepermanentannadermo/" style="color: black;">
                            <i class="fab fa-facebook socials"></i>
                        </a>
                        <a href="https://www.instagram.com/anna_dermo_pmu_france/?hl=en" style="color: black;">
                            <i class="fab fa-instagram socials"></i>
                        </a>
                        <a href="https://www.facebook.com/Annadermomaquillagepermanent?ref=bookmarks" style="color: black;">
                            <i class="fab fa-facebook socials"></i>
                        </a>


                    </div>
                    <br>
                    <br><br>
                    <div class="col-sm-4 ">


                        <!-- Links -->
                        <p>
                            <i class="fas fa-home mr-3"></i> 24 avenue Jean Jaurès 83320 Carqueiranne
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> contact@anna-dermo.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> 04 94 07 48 75
                        </p>
                        <p>
                            <i class="far fa-clock mr-3"></i> 8h30 - 18h30
                        </p>

                    </div>
                    <div class="col-sm-4 ">

                        <!-- Links -->
                        <p>
                            <i class="fas fa-home mr-3"></i> 38, rue Nationale 92100 Boulogne Billancourt
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> contact@anna-dermo.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> 04 94 07 48 75
                        </p>
                        <p>
                            <i class="far fa-clock mr-3"></i> 8h30 - 18h30
                        </p>

                    </div>
                    <div class="col-sm-4 ">

                        <!-- Links -->
                        <p>
                            <i class="fas fa-home mr-3"></i> 18, rue Robert Schuman 54850
                            Messein
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> contact@anna-dermo.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> 04 94 07 48 75
                        </p>
                        <p>
                            <i class="far fa-clock mr-3"></i> 8h30 - 18h30
                        </p>

                    </div>
                    <br>
                    <br>
                    <div class="footer-copyright text-center py-3">
                        <a href="https://annadermo-maquillagepermanent.fr/mentions-legales-2020/" target="_blank" style="color: black;">© 2021 Copyright</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
