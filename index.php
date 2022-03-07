<!-- per poter gestire i controlli -->
<?php include 'helpers/Format.php';  ?>
<?php
require("decide-lang.php");
?>
<?php
if(isset($_COOKIE['accettaCookies'])) {
   $visualizzaCookies = false;
} else {
   $visualizzaCookies = true;
}
?>
<?php
include_once'administration/connectdb.php';
session_start();
// istanziare la classe Format
$f = new Format();
if(isset($_POST['btn_login'])){
   $nome=$f->validation($_POST['nome']);
	$email=$f->validation($_POST['email']);
	$telefono=$f->validation($_POST['telefono']);
	$oggetto=$f->validation($_POST['oggetto']);
	$descrizione=$f->validation($_POST['descrizione']);

    $insert=$pdo->prepare("INSERT INTO collaboratoriMsg (nome, email, telefono, oggetto, descrizione) VALUES (:nome, :email, :telefono, :oggetto, :descrizione)");
      // $insert->bindParam(':id_collab', $id_collab);
       $insert->bindParam(':nome', $nome);
	   $insert->bindParam(':email', $email);
	   $insert->bindParam(':telefono', $telefono);
	   $insert->bindParam(':oggetto', $oggetto);
       $insert->bindParam(':descrizione', $descrizione);
       //$insert->execute();
       if($insert->execute()){
        $message = 'success';
    }else{
        $errormsg = 'error';
    };
}
if(isset($_POST['btn_contatto'])){

	$nome_donatore=$f->validation($_POST['nome_donatore']);
	$cognome_donatore=$f->validation($_POST['cognome_donatore']);
	$indirizzo_donatore=$f->validation($_POST['indirizzo_donatore']);
    $insert=$pdo->prepare("INSERT INTO libroMareNostrum (nome,cognome,indirizzo) VALUES (:nome,:cognome,:indirizzo)");
	   $insert->bindParam(':nome', $nome_donatore);
       $insert->bindParam(':cognome', $cognome_donatore);
       $insert->bindParam(':indirizzo', $indirizzo_donatore);
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
    <meta name="keywords" content="Associazione törtör, Associazione tortor, tortor, törtör, obiettivi, progetti, contatti, eventi, galerie, blog, associati">

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

	<!-- JPlayer CSS -->
    <link rel="stylesheet" href="css/jplayer.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                                <li id="home1"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #25CCF7;hover:3px solid #25CCF7;"><?php echo HOME; ?></a></li>
                                <!--<li id="about5"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #D6A2E8;">About</a></li>-->
								<li id="obiettivi100"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #fd9644;"><?php echo OUR_GOAL; ?></a></li>
                                <li id="progetti100"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #26de81;"><?php echo PROJECTS; ?></a></li>
								<!-- test -->

								<!-- fine test -->
                                <li id="blog100"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #eb3b5a;"><?php echo BLOG; ?></a></li>
                                <li id="gallerie100"><a href="" Style="border-bottom:3px solid #8854d0;"><?php echo GALLERY; ?></a></li>
                                <li id="contatti100"><a href="" Style="border-bottom:3px solid #fed330;"><?php echo CONTACT; ?></a></li>
								<!--<li><a href="https://www.paypal.com/donate?hosted_button_id=FU97LU6XZ83DC" target="_blank" Style="border-bottom:3px solid pink;">Sostienici</a></li>
								!--<li><a class="smooth-scroll" href="#">Eventi</a></li>-->
                                <li id="bouton100"><a class="btn btn-warning text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;"><?php echo EVENTS; ?></a></li>
                                <!--<li id="bouton200"><a class="btn btn-success text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;">Associati</a></li>-->
                                <li id="bouton300"><a class="btn btn-primary text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;"><?php echo SUPPORT; ?></a></li>
                                <!--<li><a class="btn btn-primary text-center" href="index.php?lang=fr" title="" role="button" Style="font-weight:300;color:#fff;">fr</a></li>-->
                                <li Style="hover:none;border:none;"><a href="" title="" Style="cursor:none;border:none;"></a></li>
                                <li Style="hover:none;border:none;"><a href="" title="" Style="cursor:none;border:none;"></a></li>
                                <!--<li><a class="btn btn-primary text-center" href="index.php?lang=it" title="" role="button" Style="font-weight:300;color:#fff;">it</a></li>-->
                                <li>
                                <a href="index.php?lang=it"><img id="bandiera_italiana" src="img/logo/logo_italia.jpg" alt="lingua italiana" class="img-responsive" width="22" height="16"></a>
                                </li>
                                <li>
                                <a href="index.php?lang=fr"><img id="bandiera_francia" src="img/logo/logo_francia.jpg" alt="lingua francese" class="img-responsive" width="22" height="16"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Menu cellulare -->
                    <div id="navigation-cellulare">
                        <!-- Close Button cellulare-->
                        <span id="navigation-cellulare-close-btn">&times;</span>

                        <div id="navigation-cellulare-content">
                            <ul class="nav">
                                <li id="home100"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #25CCF7;hover:3px solid #25CCF7;font-size:14px;"><?php echo HOME; ?></a></li>
                                <!--<li id="about500"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #D6A2E8;">About</a></li>-->
								<li id="obiettivi500"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #fd9644;font-size:14px;"><?php echo OUR_GOAL; ?></a></li>
                                <li id="progetti500"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #26de81;font-size:14px;"><?php echo PROJECTS; ?></a></li>
								<!-- test -->

								<!-- fine test -->
                                <li id="blog500"><a class="smooth-scroll" href="" Style="border-bottom:3px solid #eb3b5a;font-size:14px;"><?php echo BLOG; ?></a></li>
                                <li id="gallerie500"><a href="" Style="border-bottom:3px solid #8854d0;font-size:14px;"><?php echo GALLERY; ?></a></li>
                                <li id="contatti500"><a href="" Style="border-bottom:3px solid #fed330;font-size:14px;"><?php echo CONTACT; ?></a></li>
								<!--<li><a href="https://www.paypal.com/donate?hosted_button_id=FU97LU6XZ83DC" target="_blank" Style="border-bottom:3px solid pink;">Sostienici</a></li>
								!--<li><a class="smooth-scroll" href="#">Eventi</a></li>-->
                                <li><a class="btn btn-warning text-center" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;font-size:14px;">Eventi</a></li>
                                <!--<li><a class="btn btn-success" href="" title="" role="button" Style="font-weight:300;color:#fff;margin-right:10px;">Associati</a></li>-->
                                <li><a class="btn btn-primary" href="" title="" role="button" Style="font-weight:300;color:#fff;font-size:14px;"><?php echo SUPPORT; ?></a></li>
                                <li>
                                <a href="index.php?lang=fr"><img id="bandiera_francia" src="img/logo/logo_francia.jpg" alt="lingua francese" class="img-responsive" width="22" height="16" Style="text-align:center;margin-right:auto;margin-left:auto;"></a>

                                <a href="index.php?lang=it"><img id="bandiera_italiana" src="img/logo/logo_italia.jpg" alt="lingua italiana" class="img-responsive" width="22" height="16" Style="text-align:center;margin-right:auto;margin-left:auto;"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->
    <!-- Home -->
    <section id="home">

        <!-- Background Video -->
        <video id="home-bg-video" poster="video/img2.jpg" autoplay loop muted>
            <!--<source src="video/solo.mp4" type="video/mp4">
            <source src="video/solo.ogv" type="video/ogg">
            <source src="video/solo.webm" type="video/webm">-->
			<source src="video/v3.mp4" type="video/mp4">
        </video>

        <!-- Overlay -->
        <div id="home-overlay"></div>

        <!-- Home Content -->
        <div id="home-content">

            <div id="home-content-inner" class="text-center">

                <div id="home-heading">
                    <h1 id="home-heading-1"><?php echo ASSOCIATION; ?></h1><br>
                    <h1 id="home-heading-2"><?php echo SOCIO_CULTURALE; ?> <span>törtör</span></h1>
                </div>

                <div id="home-text">
                    <p style="color:#d1d8e0;">
                    <strong>
                    <?php echo SUBTITLE1; ?>
                    </strong>
                    </p>
                    <p style="position: relative;top:-15px;color:#d1d8e0;">
                    <strong>
                    <?php echo SUBTITLE2; ?>
                    </strong>
                    </p>
                </div>

                <div id="home-btn">
                    <a class="btn btn-general btn-home smooth-scroll" href="#about" title="Scopri subito" role="button"><?php echo ABOUT; ?></a>
                </div>

            </div>

        </div>

        <!-- Arrow Down -->
        <a href="#about" id="arrow-down" class="smooth-scroll">
            <i class="fa fa-angle-down"></i>
        </a>

    </section>
    <!-- Home Ends -->

			<!-- About -->
    <section id="about">

        <!-- About 01 -->
        <div id="about-01">

            <div class="content-box-lg">

                <div class="container">

					<div class="row">

                        <div class="col-md-12 text-center wow slideInDown">

                            <div class="titre-horizontal">
                                <h5 style="color:#242424;background-color:#f8ecd4;padding:18px 18px;font-weight:400;border-radius:5px;"><strong>TörTör E tortorini</strong></h5>
                                <h2 style="font-family: 'Chango', cursive;font-weight:800;color:#242424;"><?php echo ABOUT; ?></h2>
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <!-- About Left Side -->
                        <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1s">

                            <div id="about-left">
								<img id="mani_croc" src="img/about/mani.jpg" alt="About Us" class="img-responsive" Style="border:1.2rem solid #f8ecd4;">
                            </div>

                        </div>

                        <!-- About Right Side -->
                        <div class="col-md-6 wow slideInRight" data-wow-duration="1s">

                            <div id="about-right">
                                <!--<p><strong>Fiore per nome.</strong> L'associazione TörTör ha questo, tra gli obiettivi:

								valorizzare ogni individuo e promuovere la cultura della pace attraverso la conoscenza reciproca, l’arte, la cultura, la ricerca, con particolare attenzione alle persone vulnerabili.

								Valorizzare le culture del mondo, con uno sguardo speciale rivolto allo scambio tra Italia e Senegal.

								<br /><strong>Tanti Progetti.</strong>-->
                                <p><?php echo PLACEHOLDER1; ?></p>
                            </div>


                        </div>
					</div>

                </div>
			</div>
		</div>

        <!-- jumbotron -->
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-xs-12 col-md-10">
        <div class="jumbotron">
        <div class="container">
        <h3 class="text-center" Style="font-family: 'Chango', cursive;font-weight:800;position:relative;top:-30px;">L'<?php echo ASSOCIATION; ?> TörTör <img src="img/arci.jpg" alt=""> APS</h3>
        <p class="lead wow slideInLeft text-center" style="font-size:18px;">
        <strong>
        <?php echo PLACEHOLDER2; ?>
        </strong>
        </p>
        <div class="col-sm-12 text-center">
			<div id="pricing-btn-01" style="padding-top:10px;padding-bottom:20px;">
               <a class="btn btn-primary btn-lg" href="<?php echo DOWNLOAD; ?>" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-weight:300;" target="_blank"><?php echo STATUS; ?></a>
			</div>
		</div>
        <hr style="position:relative;bottom:5px;border-bottom:0.04rem dotted #262626;text-align:center;width:1000px;">
		<div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6 col-sm-4 wow slideInLeft">
        <div class="blog-post">
        <div class="row">
        <div class="col-xs-6">
            <h3 Style="color:silver;"><strong>Logo</strong></h3>
            <p><a href="#"><img src="img/logo/nuovo_logo1.png" class="img-responsive" alt=""></a></p>
        </div>
        <div class="col-xs-6">
            <h3 Style="color:silver;"><strong>Slogan</strong></h3>
            <hr>
            <p style="font-size:18px;"><strong>Siamo törtör</strong></p>
			<p></p>
			<p style="font-size:18px;"><strong>fiori bellissimi</strong></p>

            <div class="post-meta">
                <div class="row">
                <div class="col-xs-12">
                </div>
                </div>
            </div>
        </div>
            <!--<p><a class="btn btn-primary btn-lg" href="pdf/statuto.pdf" role="button">Nostro Statuto</a></p>-->
        </div>
        </div>
        </div>
        <div class="col-md-5 text-center">
        <h3 Style="color:silver;border-bottom-width:1 dotted silver;"><strong><?php echo OFFICE; ?></strong></h3>
            <hr>
            <p style="font-size:18px;"><strong><span class="sede_amministrativo"><?php echo ADDRESS; ?> :</span></strong> 11 Via Pilati Brescia</p>
			<p style="font-size:18px;"><strong><span class="sede_amministrativo"><?php echo EMAIL; ?> :</span></strong> info@associazionetortor.com</p>
			<p style="font-size:18px;"><strong><span class="sede_amministrativo"><?php echo PHONE; ?> :</span></strong> 3402646412 - 3477378272</p>
            <a class="btn btn-primary btn-lg" href="contatti-Associazione-tortor" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-weight:300;"><?php echo COLLABORATE_WITH_US; ?></a>
        </div>
 <!--<div class="col-md-1"></div>-->
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-1"></div>
        </div>
        <!-- /jumbotron -->

					<!-- Team Members -->
		<section id="team" style="margin-top:60px;">

        <!--<div class="content-box">-->
            <div class="titre-horizontal wow animated fadeInDown text-center xs-12" data-wow-duration="1s" data-wow-delay=".5s">
                <!--<h3 class="text-center"> SOCI DI TÖR-TÖR</h3>-->

                    <h2 style="position:relative;color:#242424;margin-top:20px;font-weight: 700;font:bold;font-family: 'Chango', cursive;"><?php echo ADMINISTRATION_GROUP; ?></h2>

                <div class="content-title-underline"></div>
            </div>


            <div class="container-fluid">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="col-md-1">
                </div>
                    <div class="col-md-10">
                        <div id="team-members" class="owl-carousel owl-theme">
                        <!-- elencare i membri del consiglio direttivo -->
                        <!-- lavoro --
                        <p></p>
                        !-- /lavoro -->
                        <?php
                               $select=$pdo->prepare("select * from consiglioDirettivo order by id_cd asc");
                               $select->execute();
                               while($row=$select->fetch(PDO::FETCH_OBJ)  ){
                            echo'
                            <div class="team-member">
                                <img src="administration/productimages/'.$row->immagine.'" class="img-responsive" alt="team member" style="border:1.2rem solid #ccc;">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">'.$row->nome.' </h4>
                                    <h4 class="team-member-designation">'.$row->funzione.'</h4>
                                    <p>'.$row->lavoro.'</p>
                                </div>
                            </div>
                            ';
                        }
                  ?>
                  <!-- /elencare i membri del consiglio direttivo -->
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>

                </div>
                <!-- elencare tutti i soci attivi -->
        <div class="row">
        <h1 class="text-center" style="color:#242424;margin-bottom:40px;font-family: 'Chango', cursive;font-weight:800;"><?php echo ACTIVED_MEMBERS; ?></h1>
          <!-- descrizione ruolo socio -->
          <div class="container">
			<div class="row">
				<div class="col-xs-12">
				<div class="blog-post" Style="background-color: #f8ecd4;color:#242424;margin-bottom:20px;">
    <p class="wow slideInLeft">
    <strong>
    <?php echo DESCRIPTION_ATTIVATE_MEMBER; ?>
    </strong>
	</p>
    </div>
    </div>
    </div>
    </div>
          <!-- fine ruolo socio -->
          <?php
            $select=$pdo->prepare("select * from soci  order by id_soci desc");
            $select->execute();
            while($row=$select->fetch(PDO::FETCH_OBJ)  ){
            echo'
            <div class="col-xs-6 col-sm-4 col-md-2">
             <div class="thumbnail">
             <img src="administration/productimages/'.$row->immagine.'" alt="representant" style="border:1.2rem solid #f8ecd4;border-radius:50%;">
               <div class="caption">
                <h3>'.$row->nome.'</h3>
                <p>'.$row->funzione.'</p>
               </div>
             </div>
            </div>
            ';}
            ?>
        </div>
      <!-- /elencare tutti i soci attivi -->

            </div>
        <!--</div>-->
        <!-- End Content Box -->
    </section>

	<!-- inizio Obiettivi -->
	<section id="obiettivi" style="background-color:#eee;">

			<div class="jumbotron jumbotron-fluid" style="position:relative;top:0px;">
  <div class="container">
    <h2 class="display-4 text-center wow slideInDown" style="position:relative;bottom:15px;font-family: 'Chango', cursive;font-weight:800;"><strong><?php echo OUR_GOAL_TITLE; ?></strong></h2>
    <p class="lead wow slideInLeft" Style="font-family: 'Josefin Slab', serif;font-size:20px;">
    <strong>
	<?php echo OUR_GOAL_TEXT; ?>
    </strong>
	</p>
  </div>
</div>
	</section>
	<!-- fine Obiettivi -->

    <section id="progetti">
        <div id="progetti-02">
                <div class="col-md-12 text-center wow slideInDown">
					<div class="titre-horizontal">
						<h2 style="color:#242424;font-family: 'Chango', cursive;font-weight:800;position:relative;bottom:-20px;"><Strong><?php echo OUR_PROJECTS_TITLE; ?></Strong></h2>
                    </div>
				</div>
			<!--<div class="content-box-sm">-->
				<div class="container">
				<div class="row">

                <!-- inizio progetto centro culturale -->
				<div class="col-xs-12">
				<!--<div class="blog-post">-->

    <h3 class="text-center wow slideInDown" style="position:relative;bottom:15px;color:#6640FE;font-family: 'Chango', cursive;font-weight:200;"><strong><?php echo PROJECT_DESCRIPTION_SUBTITLE; ?></strong></strong></h3>
	<h4 class="wow slideInDown" style="color:#242424;"><strong><?php echo PROJECT_DESCRIPTION; ?></strong></h4>
    <p class="wow slideInLeft" Style="color:#373737;padding-bottom:20px;">
        <strong>
        <?php echo PROJECT_DESCRIPTION_TEXT; ?>
    </strong>
	</p>

    <!-- disegno 3d --
    <h3 style="color:#242424;font-family: 'Chango', cursive;font-weight:300;padding-top:20px;padding-bottom:30px;"><strong>Keur Gian Stipi</strong></h3>
	<div class="row">
	<div class="col-sm-4 col-xs-6">
    <p><img src="img/viste/schizzo2.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
    </div>
	!--<div class="col-sm-4 col-xs-6">
    <p><img src="img/viste/vista2altadef.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
    </div>-->
	<div class="col-sm-4 col-xs-6">
    <p><img src="img/viste/vista3altadef.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
    </div>
	<div class="col-sm-4 col-xs-6">
    <p><img src="img/viste/vista4altadef.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
    </div>
	<div class="col-sm-4 col-xs-6">
    <p><img src="img/viste/vista5altadef.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
    </div>
	<!--<div class="col-sm-3 col-xs-6">
    <p><img src="img/forage.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
    </div>-->
	</div>
    <!-- fine disegno 3d -->
  </div></div>
  <!-- fine progetto centro culturale -->

                <!-- inizio disegno progetto -->
                <div class="container">
                <div class="row" Style="margin-top:20px;margin-bottom:20px;">
                <div class="col-sm-6 col-xs-12">
				<!--<div class="blog-post">-->
                <img src="img/primo_piano.jpg" class="img-responsive" alt="portfolio 03">
                </div>
                <!--<img src="img/portfolio/mesures_surfaciques3.jpg" class="img-responsive" alt="portfolio 03">-->

                <div class="col-sm-6 col-xs-12">
                <img src="img/piano_terra.jpg" class="img-responsive" alt="portfolio 03">
                </div>
                </div>
                </div>
                <div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="blog-post">
    <p class="wow slideInLeft">
    <strong>
    <?php echo DESIGNER_PROJECT; ?>
    </strong>
	<span><img src="img/team/giacopelli.jpg" class="img-responsive" alt="team member" style="border:2px solid #F0EAD6;border-radius:8px;" width="110" heigh="110"></span>
	</p>
    </div>
    </div>
    <div class="col-md-8">
    <p Style="padding-top:40px;" class="wow slideInLeft">
    <strong>
    <?php echo PROJECT_INFO; ?>
    </strong>
    </p>
    </div>
    </div>
    <p class="text-center"><a class="btn btn-general btn-yellow" href="<?php echo CULTURAL_CENTER; ?>" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-weight:300;"><?php echo BUTTON_KNOW_MORE; ?></a></p>
    <hr style="position:relative;top:30px;border-bottom:0.1rem dotted #262626;text-align:center;width:1000px;">
    </div>
            <h3 class="text-center" Style="font-family: 'Chango', cursive;padding-top:40px;"><?php echo DONATE_TITLE; ?></h3>
            <p class="text-center">
            <strong>
            <?php echo DONATE_DESCRIPTION; ?>
            </strong>
            </p>
            <p class="text-center"><a class="btn btn-general btn-yellow" href="Donatori-Sostenitori-tortor" title="" role="button" Style="font-weight:300;"><?php echo BUTTON_DONATE; ?></a></p>
            <!--<p class="text-center"><a class="btn btn-general btn-yellow" href="donatori.php" title="" role="button" Style="font-weight:300;">Fai un'offerta libera</a></p>-->
</div></div>
<!--</div>-->


        <!--</div>-->
	</section>
<!------------------------------------------------------------------------------------------------------------>

	<!-- parallax2 -->
		<!-- Stats -->
    <section id="stats">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 wow slideInLeft">

                        <div class="titre-vertical">
                            <h5 style="color:#f1c40f;font-weight:700;">Asso. törtör</h5>
                            <h2><?php echo DESIGN_LABORATORY; ?></h2>
                        </div>

                    </div>

                </div>

				<div class="row">

                    <div class="col-md-12 wow fadeIn">
						<!-- test -->
					<!--<div class="col-md-3 col-sm-3 col-xs-6">-->
						<div class="stats-item text-center">
                          <p Style="font-size:20px;"><?php echo DESCRIPTION_LABORATORY; ?></p>
                        </div>
						<!-- fine test -->

                    </div>

                </div>


            </div>

        </div>
	</section>
<!-- fine parallax2 -->


<!-- inizio blog -->
    <section id="blog">

        <div class="content-box-md">
				<div class="col-md-12 text-center wow slideInDown">

                            <div class="titre-horizontal">
                                <!--<h5>TORTOR E TORTORINI</h5>-->
                                <h2 style="font-family: 'Chango', cursive;font-weight:800;color:#242424;"><Strong>BLOG</Strong></h2>
                            </div>

                </div>

				<!-- test -->
					<div class="progetti-tab">
						<div class="container">
                                <div class="row">
                                    <div class="col-sm-6 bg-light h-350">

                                        <h3 Style="font-family: 'Chango', cursive;font-weight:300;color:#6640FE;"><strong><?php echo DOCUMENTARY_TITLE; ?></strong></h3>
                                        <p>
                                        <strong>
                                        <?php echo DOCUMENTARY_SUBTITLE; ?>
                                         </strong>
                                         </p>
                                         <img src="img/team/piavoli.jpg" class="img-responsive" alt="team member" style="border:1rem solid #ccc;border-radius:50%;;width:120px;height:110px;position:relative;left:-80px;top:-15px;">
                                         <h4 Style="font-weight:700;color:#341f97;"><?php echo DOCUMENTARY_TITLE1; ?></h4>
                                         <p style="color:#000;">
                                         <strong>
                                         <?php echo DOCUMENTARY_DESCRIPTION; ?>
                                        </strong>
                                         </p>

									</div>

								<div class="col-sm-6 bg-light h-350">

                                        <div class="embed-responsive embed-responsive-16by9" id="cellulare" style="position:relative;top:10px;">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/xbIBgiQvcxw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>

                                </div></div>
                                <hr style="position:relative;top:5px;border-bottom:0.1rem dotted #262626;text-align:center;width:1000px;">
                                <!-- migration -->
                            <div class="container">
                                <div class="row">

                                <div class="col-xs-12 wow slideInLeft text-center">

                                <p><strong>Brescia Wind Orchestra</strong><br /> <strong><?php echo SMALL_TEXT; ?> M° Davide Pozzali</strong><br />
			                        <strong>
                                    <?php echo BEFORE_TITLE_MIGRATION; ?>
                                    </p>
                                <h3 style="color:#6640FE;font:bold;font-family: 'Chango', cursive;font-weight:300;"><?php echo TITLE_MIGRATION; ?></h3>
                                <p>
                                <strong>
                                <?php echo TEXT_MIGRATION; ?>
                                </strong>
                                </p>
                                <h3 style="color:#6640FE;font-family: 'Chango', cursive;font-weight:300;"><strong><?php echo EVENT_IMAGE; ?></strong></h3>
                                <div class="row">
                <div class="col-sm-4 col-xs-6">
                <p><img src="img/migration/img1.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
                </div>
                <div class="col-sm-4 col-xs-6">
                <p><img src="img/migration/img2.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
                </div>
                <div class="col-sm-4 col-xs-6">
                <p><img src="img/migration/img3.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
                </div>
                <div class="col-sm-4 col-xs-6">
                <p><img src="img/migration/img4.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
                </div>
                <div class="col-sm-4 col-xs-6">
                <p><img src="img/migration/img5.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
                </div>
				<div class="col-sm-4 col-xs-6">
                <p><img src="img/migration/img6.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;"></p>
                </div>
                </div>
                </div>
                </div>
                </div>

                <!-- /migration -->


        <hr style="position:relative;top:0px;border-bottom:0.1rem dotted #262626;text-align:center;width:1000px;">
                            <!-- 2nd -->
                        <div class="row">

<div class="col-sm-6 bg-light h-350">
<div class="embed-responsive embed-responsive-16by9" id="cellulare" style="position:relative;top:10px;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/x5oOM5oqR38" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

                            <div class="col-sm-6 bg-light h-350">

<h3 class="text-center" Style="font-family: 'Chango', cursive;font-weight:300;color:#6640FE;"><strong><?php echo TITLE_PORTA_INV; ?></strong></h3>
<p style="color:#000;">
<strong>
<?php echo DESCRIPTION_PROJECT_P_I; ?>
</strong>
</p>
</div></div>
    </div>

						</div>
					</div>
				<!-- fine test blog -->



        </div>

    </section>


		<!-- Blog -->
		<section id="blog2">
        <hr style="position:relative;top:-40px;border-bottom:0.1rem dotted #262626;width:1000px;">
        <!--<hr style="position:relative;top:15px;color:#000;">-->

			<div class="content-box-md" style="position:relative;top:-100px;">

					<div class="row">

                    <div class="col-sm-7 wow slideInLeft text-center">
						<div class="blog-post">
							<h2 style="color:#6640FE;font-family: 'Chango', cursive;font-weight:300;"><?php echo TITLE_SHOLARSHIP; ?></h2>
                            <p>
                            <strong>
                            <?php echo TEXT_SCHOLARSHIP; ?>
                            </strong>
                           </p>
							<!--<div class="post-meta"> -->
                                <p><img src="img/blog/borsa_studio_6.jpg" alt="author" class="img-fluid" style="max-width:100%;height:auto;margin-top:30px;border:1.2rem solid #ccc;"></p>
                            <!--</div>-->
						</div>
                    </div>

                    <div class="col-sm-5">
                                <div class="section-title text-center">
                                    <h2 style="color:#6640FE;font-family: 'Chango', cursive;font-weight:300;">Mare Nostrum</h2>
                                    <!--<h2>Audio Player</h2>-->
                                </div>
                                <div id="jplayer-container">
                                    <div id="jplayer" class="jplayer"></div>
                                    <div id="jp-container" class="audio-content">
                                        <div class="control-content">
                                            <div id="playing"></div>
                                            <ul class="jp-controls">
                                                <li style="list-style:none;position:relative;left:-20px;"><a href="javascript:;" class="jp-play" tabindex="1"><img  class="img-responsive" src="img/tforest/3.png" alt="Image"></a></li>
                                                <li style="list-style:none;position:relative;left:-20px;"><a href="javascript:;" class="jp-pause" tabindex="1"><img  class="img-responsive" src="img/tforest/5.png" alt="Image"></a></li>
                                            </ul>
                                            <div class="jp-interface">
                                                <div class="jp-progress">
                                                    <div class="jp-seek-bar">
                                                        <div class="jp-play-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="jp-current-time"></div>
                                            </div>
                                        </div>
                                        <div class="jp-playlist">
                                            <ul>
                                                <li style="list-style:none;"></li>
                                            </ul>
                                        </div>
                                    </div>
                            <p Style="padding-left:20px;">
                            <strong>
                            <?php echo MARE_NOSTRUM; ?>
                            </strong>
                            </p>
                            <img src="img/mare_nostrum/mNostrum1.jpg" class="img-responsive" alt="client" Style="padding-left:20px;padding-top:20px;">
							</div>
                        </div>
                    </div>
			    </div>

                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-xs-12 col-md-10">
                <div class="jumbotron text-center" Style="position:relative;top:-120px;">
                    <div class="container">
                    <h2 class="text-center" Style="font-family: 'Chango', cursive;font-weight:800;"><?php echo TITLE_MARE_NOSTRUM; ?></h2>
                        <h3 class="text-center"><?php echo SUBTITLE_MARE_NOSTRUM; ?></h3>
                        <p class="lead wow slideInLeft text-center" style="font-size:20px;padding:15px 20px;">
                        <strong>
                        <?php echo DESCRIPTION_MARE_NOSTRUM; ?>
                        </strong>
                        </p>
                        <!--<p class="text-center"><a class="btn btn-default btn-lg" href="https://www.paypal.com/donate?hosted_button_id=FU97LU6XZ83DC" target="_blank" role="button">Fai un'offerta</a></p>-->
                        <h3 class="text-center" Style="font-family: 'Chango', cursive;"><?php echo DONATE; ?></h3>
                    <div class="row">
                        <!-- inizio pagamento bonifico -->
                        <div class="col-sm-6 col-md-4 text-center">
                            <h2 Style="color:#6640FE;"><strong><?php echo PAYMENT_BANK; ?></strong></h2>
                            <p style="font-size:20px;padding:15px 20px;">
                            <strong>
                            <?php echo PAYMENT_BANK_DESCRIPTION; ?>
                            </strong><br />
                             <strong Style="color:#6640FE">IBAN:</strong> <strong>IT55G0869211206029000293336</strong>
                            </p>
                        </div>
                        <!-- fine pagamento bonifico -->
                        <!-- inizio pagamento contanti -->
                        <div class="col-sm-6 col-md-4 text-center">
                            <h2 Style="color:#6640FE;"><strong><?php echo PAYMENT_CASH; ?></strong></h2>
                            <p style="font-size:20px;padding:15px 20px;">
                            <strong>
                            <?php echo PAYMENT_CASH_DESCRIPTION; ?>
                            </strong>
                            </p>
                        </div>
                        <!-- fine pagamento contanti -->
                        <!-- inizio pagamento on line -->
                        <div class="col-sm-6 col-md-4 text-center">
                            <h2 Style="color:#6640FE;"><strong><?php echo PAYMENT_ON_LINE; ?></strong></h2>
                            <p style="font-size:20px;padding:15px 20px;">
                            <strong>
                            <?php echo PAYMENT_ON_LINE_DESCRIPTION; ?>
                            </strong>
                            </p>
                            <a class="btn btn-general btn-yellow" href="Donatori-Sostenitori-tortor" title="" role="button" Style="font-weight:300;"><?php echo DONATE_FREE; ?></a>
                        </div>
                        <hr style="position:relative;bottom:-20px;border-bottom:0.1rem dotted #262626;text-align:center;width:800px;">
                        <!-- fine pagamento on line -->

                        <!-- Doazione regolare -->
                        <h3 class="text-center" Style="font-family: 'Chango', cursive;padding-top:30px;padding-bottom:40px;"><?php echo REGULAR_DONATION_TITLE; ?></h3>
                        <div class="row">
                        <div class="col-sm-6 text-center">
                            <!--<p style="font-size:20px;padding:15px 20px;">-->
                            <!--<div class="jumbotron">-->
                            <h2><?php echo REGULAR_DONATION_SUBTITLE; ?></h2>
                            <p class="font-size:20px;padding:15px 20px;">
                            <strong>
                            <?php echo REGULAR_DONATION_PARAGRAPH1; ?>
                            </strong>
                            </p>
                            <!--</div>-->
                        </div>
                        <div class="col-sm-6 text-center">
                        <div class="row">
                        <h4 Style="padding-bottom:15px;color:#6640FE;"><?php echo REGULAR_DONATION_CHOICE; ?></h4>
                        <p style="font-size:20px;padding:15px 20px;">
                        <a class="btn btn-warning" href="" target="_blank" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-size:20px;font-weight:300;"><strong>€10,00</strong></a>
                        <a class="btn btn-primary" href="" target="_blank" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-size:20px;font-weight:300;"><strong>€20,00</strong></a>
                        <a class="btn btn-info" href="" target="_blank" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-size:20px;font-weight:300;"><strong>€50,00</strong></a>
                        <a class="btn btn-danger" href="" target="_blank" title="" role="button" Style="font-family: 'Josefin Slab', sans-serif;font-size:20px;font-weight:300;"><strong>€100,00</strong></a>
                        <p style="font-size:20px;padding:15px 40px;">
                          <strong>
                          <?php echo REGULAR_DONATION_PARAGRAPH2; ?>
                          </strong>
                      </p>
                        </div>
                        </div>
                        </div>

                        <!-- fine donazione regolare -->

                        <hr style="position:relative;bottom:-20px;border-bottom:0.1rem dotted #262626;text-align:center;width:800px;">
                    </div>
                    <div class="row">
                       <div class="col-xs-12 text-center">
                       <h2 Style="color:#6640FE;"><strong><?php echo EXPEDITION; ?></strong></h2>
                       <p style="font-size:20px;padding:15px 20px;"><?php echo MODULE_MARE_NOSTRUM; ?></p>
                       <!-- test -->
                       <form action="" method="post">

                                <div class="row">

                                    <div class="col-md-6 col-xs-12" Style="">
                                        <div class="form-group" Style="padding-left:10px;padding-right:10px;">
                                            <input type="text" class="form-control text-center" id="nome_donatore" placeholder="<?php echo NAME_MARE_NOSTRUM; ?>" name="nome_donatore" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group" Style="padding-left:10px;padding-right:10px;">
                                            <input type="text" class="form-control text-center" id="cognome_donatore" placeholder="<?php echo SURNAME_MARE_NOSTRUM; ?>" name="cognome_donatore" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group" Style="padding-left:10px;padding-right:10px;">
                                            <input type="text" class="form-control text-center" id="indirizzo_donatore" placeholder="<?php echo ADRESS_MARE_NOSTRUM; ?>" name="indirizzo_donatore" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xs-12 text-center">
                                    <!--<button type="submit" class="btn btn-primary" name="btn_login">Invia</button>-->
									<button type="submit" class="btn btn-primary text-center" name="btn_contatto" Style="font-family: 'Josefin Slab', sans-serif;font-size:18px;font-weight:300;"><?php echo BUTTON_MARE_NOSTRUM; ?></button>
                                </div>
								<div id="messaggio"></div>


                            </form>
                       <!-- /test -->
                       </div>
                    </div>
                </div>
                </div>
                <div class="col-md-1"></div>
                </div>
            </div>

		</section>
						<!-- fine test -->
<!-- fine blog -->

	<!-- Clients #F0EAD6-->
    <section id="clients" style="background: #6640FE;">

        <div class="content-box-sm">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center" style="padding-top: 5px;">

                        <div class="horizontal-heading" style="position:relative;top:-80px;">
                            <h2 Style="color:#fff;font-family: 'Chango', cursive;"><strong><?php echo TITLE_PARTNER; ?></h2>
                            <h3 Style="color:#fff;font-family: 'Josefin Slab', sans-serif;"><?php echo DESCRIPTION_PARTNER; ?></h3>
                        </div>

                    </div>

                </div>

                <div class="row wow bounceInLeft">

                            <!-- Client 01 -->
							<div class="col-xs-6 col-sm-3" Style="margin-bottom:0px;">
                                <img src="img/logo/logoMutty.png" class="img-responsive" alt="client" Style="transform:scale(.5);padding-bottom:10px;">
                            </div>
                            <!-- Client 02 -->


							<div class="col-xs-6 col-sm-3" Style="margin-bottom:0px;">
                                <img src="img/client/logo_fiducia_liberta.png" class="img-responsive" alt="client" Style="transform:scale(.5);padding-bottom:10px;">
                            </div>
							<!-- Client 03 -->

                            <div class="col-xs-6 col-sm-3" Style="margin-bottom:0px;">
                                <img src="img/client/zefiroFilm.jpg" class="img-responsive" alt="client" Style="transform:scale(.5);position:relative;bottom:-20px;">
                            </div>

							<!-- Client 04 -->
							<div class="col-xs-6 col-sm-3" Style="margin-bottom:0px;">
                                <img src="img/client/logo_ideaSalute.jpg" class="img-responsive" alt="client" Style="transform:scale(.6);position:relative;bottom:-20px;">
                            </div>


                    </div>
                    <div class="row wow bounceInLeft" Style="padding-top:10px;">
                            <!-- Client 05 -->
                            <div class="col-xs-6 col-sm-3">
                                <img src="img/client/logo_bergamaschi.jpg" class="img-responsive" alt="client" Style="transform:scale(.8);">
                            </div>

                             <!-- Client 06 -->

                             <div class="col-xs-6 col-sm-3">
                                <img src="img/client/logo_hakousha.png" class="img-responsive" alt="client" Style="transform:scale(.6);">
                            </div>

                            <!-- Client 07 -->

                            <div class="col-xs-6 col-sm-3">
                                <img src="img/client/logo_razzetti.jpg" class="img-responsive" alt="client" Style="transform:scale(.9);position:relative;bottom:-20px;">
                            </div>

                             <!-- Client 08 -->

                            <div class="col-xs-6 col-sm-3">
                                <img src="img/client/village_pilote.png" class="img-responsive" alt="client" Style="transform:scale(.8);position:relative;bottom:-20px;">
                            </div>


            </div>

            </div>

        </div>


    </section>
    <!-- Clients Ends -->

    <!-- footer -->
    <?php
echo'
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
';
echo '<link rel="stylesheet" href="css/style_footer.css">';
?>
<?php
include_once'administration/connectdb.php';
session_start();
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
                    <strong Style="color:#000;"><?php echo NORMATIVE; ?></strong> <a href="menzioni-legali"><?php echo PRIVACY; ?></a>
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
                            <a href=""><?php echo CONTACT; ?></a>
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
            <!-- cookie bar start -->
                    <?php if($visualizzaCookies) { ?>
                    <div class="gestisce_cookie">
                    Continuando a navigare su questo sito, accetti l'uso dei cookie per fornirti contenuti e servizi su misura per le tue aree di interesse.<br /><a href="accettaCookies.php">ok</a>
                    </div>
                <?php } ?>
            <!-- cookie bar end -->
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
