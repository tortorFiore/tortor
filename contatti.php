<?php  
    require("decide-lang.php");  
?>
<?php
include_once'administration/connectdb.php';
session_start();
if(isset($_POST['btn_login'])){
   $nome=$_POST['nome'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$oggetto=$_POST['oggetto'];
	$descrizione=$_POST['descrizione'];
	
    $insert=$pdo->prepare("INSERT INTO collaboratoriMsg (nome, email, telefono, oggetto, descrizione) VALUES (:nome, :email, :telefono, :oggetto, :descrizione)");
      // $insert->bindParam(':id_collab', $id_collab);
       $insert->bindParam(':nome', $nome);
	   $insert->bindParam(':email', $email);
	   $insert->bindParam(':telefono', $telefono);
	   $insert->bindParam(':oggetto', $oggetto);
       $insert->bindParam(':descrizione', $descrizione);
       if($insert->execute()){
        $message = 'success';
    }else{
        $errormsg = 'error';
    }; 
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Siamo tortorini</title>
    
    <!-- Basic SEO -->
    <meta name="description" content="sito web destinato ad una associazione APS senza scopo di lucro, associazione törtör">
    <meta name="keywords" content="Associazione törtör, Associazione tortor, tortor, törtör">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon4.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
	<!-- JPlayer CSS -->
    <link rel="stylesheet" href="css/jplayer.css">
	<link rel="stylesheet" href="css/main.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

    <!-- Preloader -->
    <div id="preloader">
		<img src="img/logo/nuovo_logo1.png" alt="logo" style="position:relative;left:50%;top:50%;top:100px;margin-left:-55px;margin-bottom:0px;border:2px solid #F0EAD6;border-radius:8px;">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">

                    <div class="navbar-header">

                        <!-- Button burger Apri cellulare -->
                        <span id="navigation-cellulare-open-btn">&#9776;</span>

                        <!-- Logo -->
                        <a class="navbar-brand smooth-scroll" href="#home">
                            <img src="img/logo/logo_rop1.png" alt="logo">
                        </a>
                    </div>

                    <!-- Main Menu -->
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li id="home1"><a href="" Style="border-bottom:3px solid #25CCF7;"></a></li>
								<li id="obiettivi100"><a href="" Style="border-bottom:3px solid #fd9644;"><?php echo OUR_GOAL; ?></a></li>
                                <li id="progetti100"><a href="" Style="border-bottom:3px solid #26de81;"><?php echo PROJECTS; ?></a></li>
								<!-- test -->
								
								<!-- fine test -->
                                <li id="blog100"><a href="" Style="border-bottom:3px solid #eb3b5a;"><?php echo BLOG; ?></a></li>
                                <li id="gallerie100"><a href="" Style="border-bottom:3px solid #8854d0;"><?php echo GALLERY; ?></a></li>
                                <li id="contatti100"><a href="" Style="border-bottom:3px solid #fed330;"><?php echo CONTACT; ?></a></li>
                                <li><a class="btn btn-primary text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;"><?php echo EVENTS; ?></a></li>
                                <!--<li><a class="btn btn-success" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;">Associati</a></li>-->
								<li><a class="btn btn-danger text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;"><?php echo SUPPORT; ?></a></li>
								<!--<li><a class="smooth-scroll" href="#">Eventi</a></li>-->
                            </ul>
                        </div>
                    </div>

                    <!-- Menu cellulare -->
                    <div id="navigation-cellulare">
                        <!-- Close Button cellulare-->
                        <span id="navigation-cellulare-close-btn">&times;</span>

                        <div id="navigation-cellulare-content">
                            <ul class="nav">
                                <li id="home100"><a href="" Style="border-bottom:3px solid #25CCF7;font-size:14px;"><?php echo HOME; ?></a></li>
                                <!--<li id="about500"><a href="" Style="border-bottom:3px solid #D6A2E8;">About</a></li>-->
								<li id="obiettivi500"><a href="" Style="border-bottom:3px solid #fd9644;font-size:14px;"><?php echo OUR_GOAL; ?></a></li>
                                <li id="progetti500"><a href="" Style="border-bottom:3px solid #26de81;font-size:14px;"><?php echo PROJECTS; ?></a></li>
								<!-- test -->
								
								<!-- fine test -->
                                <li id="blog500"><a href="" Style="border-bottom:3px solid #eb3b5a;font-size:14px;">Blog</a></li>
                                <li id="gallerie500"><a href="" Style="border-bottom:3px solid #8854d0;font-size:14px;"><?php echo GALLERY; ?></a></li>
                                <li id="contatti500"><a href="" Style="border-bottom:3px solid #fed330;font-size:14px;"><?php echo CONTACT; ?></a></li>
                                <li><a class="btn btn-danger text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;font-size:14px;">Eventi</a></li>
                                <li><a class="btn btn-success" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;font-size:14px;">Associati</a></li>
								<li><a class="btn btn-primary text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;font-size:14px;"><?php echo SUPPORT; ?></a></li>
								<!--<li><a class="smooth-scroll" href="#">Eventi</a></li>-->								
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <!-- Home --
    <section id="home">
        <div id="home-content">
            <div id="home-content-inner" class="text-center">
                <div id="home-heading">
                    <h1 id="home-heading-1">Associazione</h1><br>
                    <h1 id="home-heading-2">Socio-Culturale <span>törtör</span></h1>
                </div>
                <div id="home-text">
                    <p style="color:#d1d8e0;">Anche noi esseri umani siamo törtör, fiori bellissimi.</p><p style="position: relative;top:-15px;color:#d1d8e0;">Ma solo l’incontro con l’altro ci trasforma e ci fa vivere.</p>
                </div>
            </div>
        </div>
    </section>
    !-- Home fine -->

<!-- Contact -->
<section id="contact">
<div class="" style="background-color:#501424;height:380px;">
<div class="container" Style="position:relative;top:130px;color:#fff;">
    <div class="row">
        <h1 class="text-center" Style="font-weight:700;"><?php echo ASSOCIATION; ?><?php echo SPACE; ?><?php echo SOCIO_CULTURALE; ?><?php echo SPACE; ?><span>törtör</span></h1>
    </div>
    <div class="col-xs-12 text-center">
        <p style="color:#fff;">
        <strong>
            <?php echo SUBTITLE1; ?>
            <br />
            <?php echo SUBTITLE2; ?>
        </strong>
        </p>
    </div>
</div>
</div>
<div class="content-box-md">

   <div class="container">

    <div class="row">
                <div class="col-md-12 text-center wow slideInDown">
                    <div class="titre-horizontal">
                        <h2 style="font-family: 'Chango', cursive;font-weight:800;color:gray;"><?php echo CONTACT; ?></h2>
                    </div>
                </div>

            
            <div class="col-md-6">
                <!-- Partie droite -->
                <div id="partie-droite">

                    <form action="" method="post">
                        <h2><strong><?php echo USER_DATA; ?></strong></h2>
                        <p style="color:#373737;">
                        <strong>
                        <?php echo MODULE_CONTACT_DESCRIPTION; ?>
                        </strong>
                        </p>
                            
                        <div class="row">
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="<?php echo USERNAME; ?>" name="nome" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="<?php echo ADDRESS; ?> <?php echo EMAIL; ?>" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="<?php echo PHONE; ?>" name="telefono" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="<?php echo OBJECT; ?>" name="oggetto" required>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" placeholder="<?php echo USER_MESSAGE; ?>" name="descrizione" required></textarea>
                        </div>

                        <div class="col-xs-4">
                            <!--<button type="submit" class="btn btn-primary" name="btn_login">Invia</button>-->
                            <button type="submit" class="btn btn-yellow1" name="btn_login"><?php echo BUTTON_SUBMIT; ?></button>
                        </div>
                        <div id="messaggio"></div>


                    </form>

                </div>

            </div>
            
            <div class="col-md-6">

                <!-- Partie gauche -->
                <div id="partie-gauche">

                    <div class="titre-vertical">
                        <!--<h5>Who We Are</h5>-->
                        <h2><?php echo CONTACT_AVAILABLE; ?></h2>
                    </div>
                    <p>
                    <strong>
                    <?php echo CONTACT_DESCRIPTION; ?></strong></p>

                    <div id="indirizzi">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="indirizzo">
                                    <h4>Brescia</h4>
                                    <ul class="indirizzo-details">
                                        <li><i class="fa fa-mobile" style="font-size:4rem;color:#7a1010;"></i><span>+39 3477378272</span></li>
                                        <li><i class="fa fa-envelope" style="font-size:4rem;color:#7a1010;"></i><span>info@associazionetortor.com</span></li>
                                        <li><i class="fa fa-map-marker" style="font-size:4rem;color:#7a1010;"></i><span>11 Via Pilati<br>Brescia</span></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="indirizzo">
                                    <h4>Lonato</h4>
                                    <ul class="indirizzo-details">
                                        <li><i class="fa fa-mobile" style="font-size:4rem;color:#7a1010;"></i><span>+39 3402646412</span></li>
                                        <li><i class="fa fa-envelope" style="font-size:4rem;color:#7a1010;"></i><span>info@associazionetortor.com</span></li>
                                        <li><i class="fa fa-map-marker" style="font-size:4rem;color:#7a1010;"></i><span>87/L Via Centenaro <br>Lonato D/G, Brescia.</span></li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>

                    <ul class="social-list">
                        <li><a href="https://www.facebook.com/tortor2017" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/tortor.2017/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/AssociationTor" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=eETavT8EMVE" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>

                </div>

            </div>
            
        </div>

    </div>

</div></section>
<!-- Google Map -->
<section id="google-map">
        <div class="container-fluid">
            <div class="row">
                <!--<div id="map"></div>-->
				<div id="googlemap">
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.3394532402776!2d10.21998271503701!3d45.523374179101744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781760a257054cb%3A0x3841470dec974b22!2sVia%20Cristoforo%20Pilati%2C%2013%2C%2025124%20Brescia%20BS!5e0!3m2!1sit!2sit!4v1607884189224!5m2!1sit!2sit" width="1266" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.3405215199396!2d10.21969761555944!3d45.52335267910163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478177299ef6df71%3A0xac1cd25dd4c191c2!2zU2VkZSBkaSBUw7ZyIFTDtnI!5e0!3m2!1sit!2sit!4v1614973571030!5m2!1sit!2sit" width="1266" height="600" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
            </div>
        </div>
    </section>
    <!-- Google Map Ends -->


    <!-- footer -->
    <?php
echo'
<link rel="preconnect" href="https://fonts.gstatic.com">';
echo'
<link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
';
echo '<link rel="stylesheet" href="css/style_footer.css">';
?>
<?php
//include_once'administration/connectdb.php';
//session_start();

if(isset($_POST['invio_newsletter'])){
   
	$email=$_POST['email_newsletter'];
	
	
    $insert=$pdo->prepare("INSERT INTO Newsletter (email_utente) VALUES (:email_utente)");
	   $insert->bindParam(':email_utente', $email);
       if($insert->execute()){
        $message_newsletter = 'success';
        
    }else{
        $errormsg_newsletter = 'error';
    }; 
}
?>

 <section class="section-5" Style="position:relative;top:-5px;">
                <div class="section-5-top">
                <form action="" method="post">
                <h1 class="section-5-top-heading text-center" Style="font-family: 'Chango', cursive;font-weight:800;color:gray;">Newsletter</h1>
                
                <p style="position:relative;bottom:15px;color:#373737;">
                <strong>
                <?php echo NEWSLETTER_DESCRIPTION; ?>
                </strong>
                </p>
                    <!-- test -->
                    <div class="row">

                        <div class="col-sm-3 col-xs-1">
                        </div>			
                        <div class="col-sm-6 col-xs-10 text-center">
                            <div class="form-group text-center">
                            <input type="text" class="form-control" id="newsletter" placeholder="<?php echo NEWSLETTER_EMAIL; ?>" name="email_newsletter" required Style="text-align:center;border:1px solid black;height:38px;">
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-1">
                        </div>
                    </div>
                    <!-- case à cocher -->
                    <div class="row">
                    <div class="col-sm-3 col-xs-1">
                    </div>
                    <div class="col-sm-6 col-xs-10">
                    <div class="form-group">
                    <div class="form-check text-left">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                    <?php echo NORMATIVE; ?> <a href="menzioni-legali"><?php echo PRIVACY; ?></a>
                    </label>
                    </div>
                    </div>
                    </div>
                    <div class="col-sm-3 col-xs-1">
                    </div>
                    </div> 
                    <!-- /case à cocher -->
                    <div class="row">
                    <div class="col-sm-3 col-xs-1">
                    </div>
                    <div class="col-sm-6 col-xs-10 text-left">
                    <button type="submit" class="btn btn-primary" name="invio_newsletter" Style="font-family: 'Josefin Slab', sans-serif;font-size:18px;font-weight:300;"><?php echo BUTTON_SUBMIT_NEWSLETTER; ?></button>
                    </div>
                    <div class="col-sm-3 col-xs-1">
                    </div>
                    </div> 
                    <!-- fine test -->
                    </form>
                </div>
                <footer class="footer" Style="height:110px;margin-bottom:0px;">
                    <div class="footer-top" Style="position:relative;top:-5px;">
                        <ul class="footer-list">
                            <li>
                                <a href=""><?php echo CULTURAL_CENTER; ?></a>
                            </li>
                            <li>
                            <a href="">Shop Solidale</a>    
                            </li>
                        </ul>
                        <ul class="footer-list">
                            <li>
                            <a class="smooth-scroll" href=""><?php echo COLLABORATE_WITH_US; ?></a>
                            </li>
                            <li>
                                <a href=""><?php echo SUPPORT; ?></a>
                            </li>
                            <li>
                                <a href=""><?php echo LEGAL_MENTION; ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-bottom">
                        <p class="copyright">&copy; 
						<?php
						echo '<script>document.write(new Date().getFullYear());</script>';
						?>
						<strong> - Associazione TörTör APS.</strong> <strong>C.F: 98193620170</strong> </p>
                    </div>
                </footer>
            </section>
            <!-- End of Section 5 -->

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
     <!-- Sweet Alert JS -->
     <script src="administration/bower_components/sweetalert/sweetalert.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="js/waypoints/jquery.waypoints.min.js"></script>
    <!-- Responsive Tabs JS -->
    <script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>
    <!-- Isotope -->
    <script src="js/isotope/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Counter -->
    <script src="js/counter/jquery.counterup.min.js"></script>
    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfaUe1QpEduDR7EejvIDZnHKF0C7Q9Uws"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVVqTymQgZ8ojE8nWJdZX5L5P6WPXwA8g"></script>-->
    <!-- Easing -->
    <script src="js/easing/jquery.easing.1.3.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow/wow.min.js"></script>
	<!-- tforest -->
	<script src="js/tforest/jquery.jplayer.min.js"></script> 
    <script src="js/tforest/jplayer.playlist.min.js"></script>
	<script src="js/tforest/jplayer.source.js"></script> 	
	<!-- fine tforest -->
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
    <!-- fine footer -->

    <?php
if(!empty($message)){
    echo'<script type="text/javascript">
    jQuery(function validation(){
    swal({
      title: "Vostra richiesta é inviata correttamente!",
      text: "presto riceverai una risposta dell\'associazione TörTör.",
      icon: "success",
      button: "Ok",
    });
    });
    </script>';
    }else{}
    if(empty($errormsg)){
    }else{

    echo'<script type="text/javascript">
    jQuery(function validation(){
    swal({
      title: "ERROR!",
      text: "Prova a controllare se c\é stato un\'errore di compilazione",
      icon: "error",
      button: "Ok",
    });
    });
    </script>';
}

?>


<?php
if(!empty($message_newsletter)){
    echo'<script type="text/javascript">
    jQuery(function validation(){
    swal({
      title: "Vostra registrazione nella newsletter é andata correttamente!",
      text: "ti teniamo aggiornato su tutti gli eventi e progetti di TörTör.",
      icon: "success",
      button: "Ok",
    });
    });
    </script>';
    }else{}
    if(empty($errormsg_newsletter)){
    }else{

    echo'<script type="text/javascript">
    jQuery(function validation(){
    swal({
      title: "ERROR!",
      text: "Prova a controllare se c\é stato un\'errore di compilazione",
      icon: "error",
      button: "Ok",
    });
    });
    </script>';
}

?>
