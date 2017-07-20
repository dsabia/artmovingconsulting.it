<?php
$lc = ""; 

if (isset($_GET['lang'])) {
	$lc = $_GET['lang'];
}
if($lc == "it" || $lc == "en" || $lc == "fr"){
	
}
else {
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
		$lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Art Moving Consulting</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Art Moving Consulting - consulting service for Fine Art Moving" />
		<meta name="keywords" content="Art Moving Consulting - consulting service for Fine Art Moving" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="images/favicon.gif" type="image/gif" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900" rel="stylesheet" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/style-mobile.css" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">
	
<?php
if($lc == "fr"){
?>
		<!-- Header Wrapper -->
			<div id="header-wrapper" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<div id="header">
										<br/>
										<div style="width:100%;text-align:right; position: absolute;padding-right:30px;" class="mobile-hide">
											<a href="index.php?lang=it" class="image">
												<img src="images/it.png" alt="it" />
											</a>
											<a href="index.php?lang=en" class="image">
												<img src="images/en.png" alt="en" />
											</a>
											<a href="index.php?lang=fr" class="image">
												<img src="images/fr.png" alt="fr" />
											</a>
										</div>
											
									<!-- Logo -->
										<div id="logo" >
											
											<br class="mobile-hide" />
											<br class="mobile-hide" />
											<br class="mobile-hide" />
											<a href="#" class="image ">
												<img src="images/logo_home.png" alt="" />
											</a>
											<br/>
											<!--<h1><a href="#">Art Moving consulting</a></h1>-->
											<span class="byline">Consultantes pour tous aspects de mouvement d'œuvres d'art</span>
											<br/>
											<br/>
											<br/>
											<span class="byline"></span>
										</div>
									<!-- /Logo -->
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="#header-wrapper">Home</a></li>
												<li><a href="#titleServizi">NOS SERVICES</a></li>
												<li><a href="#titleExperience">NOTRE EXPERIENCE</a></li>
												<li><a href="#titleGallery">QUI NOUS SOMMES</a></li>
												<li><a href="#titleContacts">CONTACTS</a></li>

												<li>
													<ul>
														<li><a href="index.php?lang=it">Italiano</a></li>
														<li><a href="index.php?lang=en">English</a></li>
														<li><a href="index.php?lang=fr">Français</a></li>
													</ul>
												</li>
											</ul>
										</nav>
							<!-- /Nav -->

								</div>
							<!-- /Header -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Header Wrapper -->
		
		<!-- Intro Wrapper -->
			<div id="intro-wrapper" class="wrapper wrapper-style2">
				<div class="title" id="titleServizi">NOS SERVICES</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Intro -->
								<section >
									<h2 style="font-size:1.25em;">Nous sommes la toute première société de consultantes pour toute opération de déplacement d'œuvres d'art de <strong style="color:#6D7381;">"clou à clou"</strong>.</h2>
									
									<br/>
									<div style="padding:0 10% 0 10%;">
										<div class="row">
											<div class="6u">
												<p >
													Parmi nos services figurent soit la recherche de marchés pour les meilleurs coûts, soit la supervision et le contrôle de toutes les opérations en Italie et à l'étranger en ce qui concerne :
													<br class="mobile-hide" />
												
																				
												
													<ul >
														<li class="icon icon-ok-sign"><strong> L'emballage, le transport et l'installation d'œuvres d'art en Italie comme à l'étranger</strong></li>
														<li class="icon icon-ok-sign"><strong> Les mouvements d’œuvres d’art, les déplacements internes, les aménagements de salles de musée et de collections</strong></li>
														<li class="icon icon-ok-sign"><strong> Rapports avec les ministères, pour toutes les formalités  </strong>  (beaux arts, etc.)</li>
														<li class="icon icon-ok-sign"><strong> Formalités douanières </strong> (importations et exportations temporaires et définitives)</li>
														<li class="icon icon-ok-sign"><strong> Escortes armées et dépôts de sécurité</strong></li>
														<li class="icon icon-ok-sign"><strong> Assurances tous risques</strong></li>
													</ul>
													
												</p>
											</div>	
											<div class="6u">
												<p class="style2">
													Nous mettons à disposition notre expérience de plusieurs décennies pour la supervision de toutes les phases opérationnelles depuis le choix du fournisseur de service jusqu’à l’exécution complète du service demandé : <br class="mobile-hide" />
													<ul>
														<li class="icon icon-ok-sign"><strong> Les coûts les meilleurs</strong></li>
														<li class="icon icon-ok-sign"><strong> Contrôle de la qualité et suivi des temps de livraison des fournisseurs de service</strong></li>
														<li class="icon icon-ok-sign"><strong> Résolution des problèmes</strong></li>
														<li class="icon icon-ok-sign"><strong> Discrétion maximale</strong></li>
														<li class="icon icon-ok-sign"><strong> Protection du client</strong></li>
													</ul>
												</p>	
											</div>
										</div>	
									</div>
								</section>
								
							<!-- /Intro -->
							
						</div>
					</div>
				</div>
				
			</div>
		<!-- /Intro Wrapper -->
		
		<!-- Main Wrapper -->
			<div class="wrapper wrapper-style21" id="ourExperience">
				<div class="title" id="titleExperience">NOTRE EXPERIENCE</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									
									
									
									<!-- Features -->
										<section id="features">
											<div class="feature-list">
												<div>
													<div class="row">
														<div class="6u">
															<section>
																<h3 class="icon icon-folder-open"><font color="white">CE QUE NOUS FAISONS</font></h3>
																<p><font color="white">A la suite d’une longue expérience acquise au service des principales agences de transport d’œuvres d’art, nous mettons notre préparation à la disposition des collectionneurs d’art ancien et contemporain, des musées, galeries d’art, et fondations, en vue de fournir nos services en matière de déplacement, d’ emballage,  de transport d’œuvres d’art, d’expéditions, de formalités d’exportation et d’importation, et d’assurances.</font></p>
															</section>
														</div>
														<div class="6u">
															<section>
																<h3 class="icon icon-globe"><font color="white">A QUI NOUS NOUS ADRESSONS</font></h3>
																<p><font color="white">Nous offrons aux collectionneurs, musées, galeries, et fondations, <b>des procédés spécialement étudiés </b> d’évaluation des coûts de transport et de déplacement d’œuvres d’art en demandant des devis et en choisissant les plus sûrs et avantageux, <b>des procédés professionnels de confiance </b> en matière de savoir faire pour de telles opérations alliés à une connaissance de tous les aspects de ce travail et de leur gestion.</font></p>
															</section>
														</div>
													</div>
												</div>
											</div>
											<ul class="actions actions-centered">
												<li><a href="#titleServizi" class="button button-style3 button-big">NOS SERVICES</a></li>
												<li><a href="#titleContacts" class="button button-style3 button-big">CONTACTS</a></li>
											</ul>
										</section>
									<!-- /Features -->
									
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Main Wrapper -->
		
		<!-- Highlights Wrapper -->
			<div class="wrapper wrapper-style2" id="gallery">
				<div class="title" id="titleGallery">QUI NOUS SOMMES</div>
				<div class="container">
					<div class="row">
						<div class="12u">
						
						<!-- Highlights -->
								<div id="main">
									<section id="features">
									<div class="feature-list">
										<div>
											<div class="row">
												<div class="6u">
													<section >
														<h3 class="icon icon-star"><font color="#484d55">GIOVANNA CAROTTI</font></h3>
														<p>Trente ans d’expérience en ce qui concerne transport, emballage, déplacement et installation d’œuvres d’art<br/> •	Collaboration auprès d’agences de pointe dans le domaine considéré <i>(Universal Express – Borghi International – Arterìa)</i>.</p>
														<p class="style3">
														Directrice des sièges des agences de Florence et de Naples où elle a travaillé pour coordonner et gérer le personnel technique et opérationnel
														<br/>Contacts et collaboration avec les plus grands musées nationaux et étrangers ainsi qu’avec les collectionneurs d’œuvres d’art ancien et contemporain.
														</p>
													</section>
												</div>
												<div class="6u">
													<section>
														<h3 class="icon icon-star"><font color="#484d55">DANIELA PICCOLO</font></h3>
														<p>Dix ans d’expérience en matière de transports, emballages, déplacements et installations d’œuvres d’art<br/>	Collaboration auprès des agences de pointe du domaine <i> (Borghi International - Arterìa)</i></p>
														<br class="mobile-hide" />
														<br class="mobile-hide" />
													</section>
												</div>
											</div>
										</div>
											
											
									</div>
								</div>
								</section>
							
									<hr>
									<footer class="style2">
										<h2><i>Nous ne concluons pas de contrats pour le compte du client.</i></h2>
									</footer>
								</section >
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- /Highlights Wrapper -->

		<!-- Footer Wrapper -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title" id="titleContacts">CONTACTS</div>
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Footer -->
								<div id="footer">
									<header class="style1">
										<h2>ArtMoving Consulting</h2>
									</header>
									<br class="mobile-hide" />
									<br class="mobile-hide" />
									<br class="mobile-hide" />
									<!--
									<div>
										<div class="row">
											
											<div class="6u">

												 Contact Form 
													<section class="footer-one">
														<form method="post" action="#">
															<div>
																<div class="row half">
																	<div class="6u">
																		<input type="text" class="text" name="name" id="contact-name" placeholder="Name" />
																	</div>
																	<div class="6u">
																		<input type="text" class="text" name="name" id="contact-email" placeholder="Email" />
																	</div>
																</div>
																<div class="row half">
																	<div class="12u">
																		<textarea name="message" id="contact-message" placeholder="Message"></textarea>
																	</div>
																</div>
																<div class="row">
																	<div class="12u">
																		<ul class="actions">
																			<li><input type="submit" class="button button-style1" value="Send" /></li>
																			<li><input type="reset" class="button button-style2" value="Reset" /></li>
																		</ul>
																	</div>
																</div>
															</div>
														</form>
													</section>
												 /Contact Form 

											</div>
											-->
											<div  class="12u">
											
												<!-- Contacts -->
													<section class="footer">
														<div class="feature-list">
															<div class="row">
															<!--
																<div class="4u">
																		<p><b><font color="white">Legal headquarters</font></b></p>
																		<p><font color="white">ArtMoving Consulting sas</font><br />
																			Casa La Croce 1 - Loc. Buggiana<br />
																			47010 Galeata (FC), Italy<br/>
																			<font color="white">P.IVA/VAT: IT04029960400</font>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">info@artmovingconsulting.it</font>
																		</p>
																</div>
																
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-comment">Social</h3>
																			<p>
																				<a href="http://twitter.com/n33co">@n33co</a><br />
																				<a href="http://dribbble.com/n33">dribbble.com/n33</a><br />
																				<a href="#">facebook.com/untitled</a>
																			</p>
																		</section>
																	</div>
																-->
																<div class="4u">
																	<section id="contactsGiovanna">
																		<p><b><font color="white">Giovanna Carotti</font></b>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">giovanna@artmovingconsulting.it</font>
																		</p>
																		<p class="icon icon-phone"> 
																			+39 333 2521541
																		</p>
																		<p class="icon icon-phone"> 
																			+39 333 3237615
																		</p>
																	</section>
																</div>
																<div class="4u">
																	<section id="contactsDaniela">
																		<p><b><font color="white">Daniela Piccolo</font></b>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">daniela@artmovingconsulting.it</font>
																		</p>
																		<p class="icon icon-phone"> 
																			+39 331 9101943
																		</p>
																	</section>
																</div>
																
																<div class="4u">
																		<section>
																			<p><b><font color="white">Social</p>
																			<p><a href="https://www.facebook.com/pages/Art-Moving-Consulting/504362689684345" target="fb_artMovingConsulting"><img src="images/fb.png" alt="it" /></a>&nbsp;<a href="https://twitter.com/ArtMovingConsul" target="tw_artMovingConsulting"><img src="images/tw.png" alt="it" /></a></p>
																		</section>
																</div>
															</div>
														</div>
													</section>
												<!-- /Contacts -->
													
											</div>
											<!--
										</div>
									</div>
									-->
								</div>
							<!-- /Footer -->

							<!-- Copyright -->
								<div id="copyright">
									<span>
										&copy; Copyright 2013-2014 &nbsp;&nbsp;&nbsp; <font color="white">ArtMoving Consulting sas</font> &nbsp;&nbsp;&nbsp;  P.IVA/VAT: <font color="white">IT04029960400</font> &nbsp;&nbsp;&nbsp; <font color="white">info@artmovingconsulting.it </font> 
									</span>
									<span>
										<font style="font-size:9px;"> thanks to</font> <br/>
										<img src="images/cc30.png" alt="CC3.0"  style="width:60px;height:25px;" /> <br/>
										<font style="font-size:9px;"> html5up.net</font>
									</span>
								</div>
							<!-- /Copyright -->
						
						</div>
					</div>
				</div>
			</div>
		<!-- /Footer Wrapper -->

<?php
} else if($lc == "it"){
?>
 <!-- Header Wrapper -->
			<div id="header-wrapper" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<div id="header">
										<br/>
										<div style="width:100%;text-align:right; position: absolute;padding-right:30px;" class="mobile-hide">
											<a href="index.php?lang=it" class="image">
												<img src="images/it.png" alt="it" />
											</a>
											<a href="index.php?lang=en" class="image">
												<img src="images/en.png" alt="en" />
											</a>
											<a href="index.php?lang=fr" class="image">
												<img src="images/fr.png" alt="fr" />
											</a>
										</div>
											
									<!-- Logo -->
										<div id="logo" >
											
											<br class="mobile-hide" />
											<br class="mobile-hide" />
											<br class="mobile-hide" />
											<a href="#" class="image ">
												<img src="images/logo_home.png" alt="" />
											</a>
											<br/>
											<!--<h1><a href="#">Art Moving consulting</a></h1>-->
											<span class="byline">Consulting services for Fine Art moving</span>
											<br/>
											<br/>
											<br/>
											<span class="byline"></span>
										</div>
									<!-- /Logo -->
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="#header-wrapper">Home</a></li>
												<li><a href="#titleServizi">I NOSTRI SERVIZI</a></li>
												<li><a href="#titleExperience">LA NOSTRA ESPERIENZA</a></li>
												<li><a href="#titleGallery">CHI SIAMO</a></li>
												<li><a href="#titleContacts">CONTATTI</a></li>
												<li>
													<ul>
														<li><a href="index.php?lang=it">Italiano</a></li>
														<li><a href="index.php?lang=en">English</a></li>
														<li><a href="index.php?lang=fr">Français</a></li>
													</ul>
												</li>
											</ul>
										</nav>
							<!-- /Nav -->

								</div>
							<!-- /Header -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Header Wrapper -->
		
		<!-- Intro Wrapper -->
			<div id="intro-wrapper" class="wrapper wrapper-style2">
				<div class="title" id="titleServizi">I NOSTRI SERVIZI</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Intro -->
								<section >
									<h2 style="font-size:1.25em;">Siamo la prima società di consulenza globale <strong style="color:#6D7381;">"da chiodo a chiodo"</strong> per la movimentazione delle opere d’arte.</h2>
									<br/>
									<div style="padding:0 10% 0 10%;">
										<div class="row">
											<div class="6u">
												<p >
													<strong>I nostri servizi includono</strong> sia la ricerca di mercato per i costi migliori, sia la supervisione e il controllo di tutte le operazioni relative a: <br class="mobile-hide" />
												
																				
												
													<ul >
														<li class="icon icon-ok-sign"><strong> Imballaggi, trasporti e installazioni di opere d’arte sia in Italia che all’estero</strong></li>
														<li class="icon icon-ok-sign"><strong> Movimentazioni opere, spostamenti interni, allestimenti sale musei e collezioni</strong></li>
														<li class="icon icon-ok-sign"><strong> Pratiche ministeriali</strong> (Belle Arti etc.)</li>
														<li class="icon icon-ok-sign"><strong> Pratiche doganali </strong>(importazioni ed esportazioni temporanee e definitive)</li>
														<li class="icon icon-ok-sign"><strong> Scorte armate e depositi di sicurezza</strong></li>
														<li class="icon icon-ok-sign"><strong> Assicurazioni all risks</strong></li>
													</ul>
													
												</p>
											</div>	
											<div class="6u">
												<p class="style2">
													<strong >Offriamo la nostra pluridecennale esperienza</strong> per la supervisione di ogni fase del processo, dalla scelta del fornitore al completamento del servizio richiesto. Questo si traduce nei seguenti benefici: <br class="mobile-hide" />
													<ul>
														<li class="icon icon-ok-sign"><strong> Ottimizzazione dei costi</strong></li>
														<li class="icon icon-ok-sign"><strong> Controllo della qualità e delle tempistiche dei fornitori</strong></li>
														<li class="icon icon-ok-sign"><strong> Problem solving</strong></li>
														<li class="icon icon-ok-sign"><strong> Massima riservatezza</strong></li>
														<li class="icon icon-ok-sign"><strong> Tutela del cliente</strong></li>
													</ul>
												</p>	
											</div>
										</div>	
									</div>
								</section>
								
							<!-- /Intro -->
							
						</div>
					</div>
				</div>
				
			</div>
		<!-- /Intro Wrapper -->
		
		<!-- Main Wrapper -->
			<div class="wrapper wrapper-style21" id="ourExperience">
				<div class="title" id="titleExperience">LA NOSTRA ESPERIENZA</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									
									
									
									<!-- Features -->
										<section id="features">
											<div class="feature-list">
												<div>
													<div class="row">
														<div class="6u">
															<section>
																<h3 class="icon icon-folder-open"><font color="white">COSA FACCIAMO</font></h3>
																<p><font color="white"><b><font color="white">Dopo una lunga esperienza maturata lavorando per le maggiori aziende di opere d'arte </font></b> mettiamo la nostra preparazione a disposizione di collezionisti d’arte antica e contemporanea, musei, gallerie d’arte, fondazioni, per fornire consulenze per la movimentazione, l’imballaggio, il trasporto di opere d’arte, spedizioni, formalità di esportazione e importazione, assicurazioni.</font></p>
															</section>
														</div>
														<div class="6u">
															<section>
																<h3 class="icon icon-globe"><font color="white">A CHI CI RIVOLGIAMO</font></h3>
																<p><font color="white">A collezionisti, musei, gallerie, fondazioni <b><font color="white">offriamo</font></b> una figura specificatamente studiata per valutare i costi dei trasporti e delle movimentazioni delle opere d’arte, chiedendo preventivi e scegliendo quelli più vantaggiosi, una figura professionale di fiducia che abbia il know how delle operazioni e che conosca e sappia gestire tutti gli aspetti del lavoro.</font></p>
															</section>
														</div>
													</div>
												</div>
											</div>
											<ul class="actions actions-centered">
												<li><a href="#titleServizi" class="button button-style3 button-big">Servizi</a></li>
												<li><a href="#titleContacts" class="button button-style3 button-big">Contatti</a></li>
											</ul>
										</section>
									<!-- /Features -->
									
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Main Wrapper -->
		
		<!-- Highlights Wrapper -->
			<div class="wrapper wrapper-style2" id="gallery">
				<div class="title" id="titleGallery">CHI SIAMO</div>
				<div class="container">
					<div class="row">
						<div class="12u">
						
						<!-- Highlights -->
								<div id="main">
								<!-- Image 
								
										<a href="#" class="image ">
											<img src="images/logo.png" alt="" />
										</a>
									 -->
									<section id="features">
									<div class="feature-list">
										<div>
											<div class="row">
												<div class="6u">
													<section >
														<h3 class="icon icon-star"><font color="#484d55">GIOVANNA CAROTTI</font></h3>
														<p><b>Esperienza trentennale </b>nel settore dei trasporti, imballaggi, movimentazione e installazione di opere d’arte.<br/> Ha lavorato presso le aziende leader del settore: <br/>(Universal Express – Borghi International – Arterìa).</p>
														<p class="style3">
														È stata direttore delle sedi di Firenze e Napoli per le aziende presso le quali ha lavorato, coordinando e gestendo il team tecnico e operativo. 
														<br/>Contatti e collaborazioni con i più grandi musei nazionali, internazionali e con i collezionisti d’arte antica e contemporanea.
														</p>
													</section>
												</div>
												<div class="6u">
													<section>
														<h3 class="icon icon-star"><font color="#484d55">DANIELA PICCOLO</font></h3>
														<p><b>Esperienza decennale </b> nel settore dei trasporti, imballaggi, movimentazione e installazione delle opere d’arte. <br/>Ha lavorato presso le aziende leader del settore: <br/>(Borghi International – Arterìa)
														<br class="mobile-hide" />
														<br class="mobile-hide" />
													</section>
												</div>
											</div>
										</div>
											
											
									</div>
								</div>
								</section>
							
									<hr>
									<footer class="style2">
										<h2><i>Non si stipulano contratti per conto del cliente.</i></h2>
									</footer>
								</section >
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- /Highlights Wrapper -->

		<!-- Footer Wrapper -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title" id="titleContacts">Contatti</div>
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Footer -->
								<div id="footer">
									<header class="style1">
										<h2>ArtMoving Consulting</h2>
									</header>
									<br class="mobile-hide" />
									<br class="mobile-hide" />
									<br class="mobile-hide" />
									<!--
									<div>
										<div class="row">
											
											<div class="6u">

												 Contact Form 
													<section class="footer-one">
														<form method="post" action="#">
															<div>
																<div class="row half">
																	<div class="6u">
																		<input type="text" class="text" name="name" id="contact-name" placeholder="Name" />
																	</div>
																	<div class="6u">
																		<input type="text" class="text" name="name" id="contact-email" placeholder="Email" />
																	</div>
																</div>
																<div class="row half">
																	<div class="12u">
																		<textarea name="message" id="contact-message" placeholder="Message"></textarea>
																	</div>
																</div>
																<div class="row">
																	<div class="12u">
																		<ul class="actions">
																			<li><input type="submit" class="button button-style1" value="Send" /></li>
																			<li><input type="reset" class="button button-style2" value="Reset" /></li>
																		</ul>
																	</div>
																</div>
															</div>
														</form>
													</section>
												 /Contact Form 

											</div>
											-->
											<div  class="12u">
											
												<!-- Contacts -->
													<section class="footer">
														<div class="feature-list">
															<div class="row">
																<!--
																<div class="4u">
																		<p><b><font color="white">Sede legale</font></b></p>
																		<p><font color="white">ArtMoving Consulting sas</font><br />

																			Casa La Croce 1 - Loc. Buggiana<br />
																			47010 Galeata (FC), Italia<br/>
																			<font color="white">P.IVA/VAT: IT04029960400</font>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">info@artmovingconsulting.it</font>
																		</p>
																</div>
																
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-comment">Social</h3>
																			<p>
																				<a href="http://twitter.com/n33co">@n33co</a><br />
																				<a href="http://dribbble.com/n33">dribbble.com/n33</a><br />
																				<a href="#">facebook.com/untitled</a>
																			</p>
																		</section>
																	</div>
																-->
																<div class="4u">
																	<section id="contactsGiovanna">
																		<p><b><font color="white">Giovanna Carotti</font></b>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">giovanna@artmovingconsulting.it</font>
																		</p>
																		<p class="icon icon-phone"> 
																			+39 333 2521541
																		</p>
																		<p class="icon icon-phone"> 
																			+39 333 3237615
																		</p>
																	</section>
																</div>
																<div class="4u">
																	<section id="contactsDaniela">
																		<p><b><font color="white">Daniela Piccolo</font></b>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">daniela@artmovingconsulting.it</font>
																		</p>
																		<p class="icon icon-phone"> 
																			+39 331 9101943
																		</p>
																	</section>
																</div>
																<div class="4u">
																		<section>
																			<p><b><font color="white">Social</p>
																			<p><a href="https://www.facebook.com/pages/Art-Moving-Consulting/504362689684345" target="fb_artMovingConsulting"><img src="images/fb.png" alt="it" /></a>&nbsp;<a href="https://twitter.com/ArtMovingConsul" target="tw_artMovingConsulting"><img src="images/tw.png" alt="it" /></a></p>
																		</section>
																</div>
															</div>
														</div>
													</section>
												<!-- /Contacts -->
													
											</div>
											<!--
										</div>
									</div>
									-->
									<hr />
								</div>
							<!-- /Footer -->

							<!-- Copyright -->
								<div id="copyright">
									<span>
										&copy; Copyright 2013-2014 &nbsp;&nbsp;&nbsp; <font color="white">ArtMoving Consulting sas</font> &nbsp;&nbsp;&nbsp;  P.IVA/VAT: <font color="white">IT04029960400</font> &nbsp;&nbsp;&nbsp; <font color="white">info@artmovingconsulting.it </font> 
									</span>
									<span>
										<font style="font-size:9px;"> thanks to</font> <br/>
										<img src="images/cc30.png" alt="CC3.0"  style="width:60px;height:25px;" /> <br/>
										<font style="font-size:9px;"> html5up.net</font>
									</span>
								</div>

							<!-- /Copyright -->
							
						</div>
					</div>

				</div>
			</div>
			
		<!-- /Footer Wrapper -->
<?php
}
else{
?>
		<!-- Header Wrapper -->
			<div id="header-wrapper" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<div id="header">
										<br/>
										<div style="width:100%;text-align:right; position: absolute;padding-right:30px;" class="mobile-hide">
											<a href="index.php?lang=it" class="image">
												<img src="images/it.png" alt="it" />
											</a>
											<a href="index.php?lang=en" class="image">
												<img src="images/en.png" alt="en" />
											</a>
											<a href="index.php?lang=fr" class="image">
												<img src="images/fr.png" alt="fr" />
											</a>
										</div>
											
									<!-- Logo -->
										<div id="logo" >
											
											<br class="mobile-hide" />
											<br class="mobile-hide" />
											<br class="mobile-hide" />
											<a href="#" class="image ">
												<img src="images/logo_home.png" alt="" />
											</a>
											<br/>
											<!--<h1><a href="#">Art Moving consulting</a></h1>-->
											<span class="byline">Consulting services for Fine Art moving</span>
											<br/>
											<br/>
											<br/>
											<span class="byline"></span>
										</div>
									<!-- /Logo -->
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="#header-wrapper">Home</a></li>
												<li><a href="#titleServizi">OUR SERVICES</a></li>
												<li><a href="#titleExperience">OUR EXPERIENCE</a></li>
												<li><a href="#titleGallery">ABOUT US</a></li>
												<li><a href="#titleContacts">CONTACTS</a></li>

												<li>
													<ul>
														<li><a href="index.php?lang=it">Italiano</a></li>
														<li><a href="index.php?lang=en">English</a></li>
														<li><a href="index.php?lang=fr">Français</a></li>
													</ul>
												</li>
											</ul>
										</nav>
							<!-- /Nav -->

								</div>
							<!-- /Header -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Header Wrapper -->
		
		<!-- Intro Wrapper -->
			<div id="intro-wrapper" class="wrapper wrapper-style2">
				<div class="title" id="titleServizi">OUR SERVICES</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Intro -->
								<section >
									<h2 style="font-size:1.25em;">We are the first global consulting company for art in movement using a <strong style="color:#6D7381;">"nail to nail"</strong> system.</h2>
									
									<br/>
									<div style="padding:0 10% 0 10%;">
										<div class="row">
											<div class="6u">
												<p >
													<strong>Our services include </strong>market research for the best price offer, supervision and step by step control of all the operations related to the following areas:
													<br class="mobile-hide" />
												
																				
												
													<ul >
														<li class="icon icon-ok-sign"><strong> Packing, transport, and installation of works of art in Italy and abroad</strong></li>
														<li class="icon icon-ok-sign"><strong> Moving and handling of works of art, internal arrangements and organization of museum and art collections.</strong></li>
														<li class="icon icon-ok-sign"><strong> Ministerial formalities</strong>  (Fine Arts etc.)</li>
														<li class="icon icon-ok-sign"><strong> Customs formalities </strong> (for temporary or definitive exportation/importation )</li>
														<li class="icon icon-ok-sign"><strong> Security escort services and security storage</strong></li>
														<li class="icon icon-ok-sign"><strong> All risk insurance policies</strong></li>
													</ul>
													
												</p>
											</div>	
											<div class="6u">
												<p class="style2">
													<strong > Our longstanding experience guarantees professional supervision. </strong>Every phase of the process, that goes from the choice of the supplier to the completion of the requested service, is followed through and overseen meticulously. The service we offer provides our clients the following benefits: <br class="mobile-hide" />
													<ul>
														<li class="icon icon-ok-sign"><strong> Cost optimization</strong></li>
														<li class="icon icon-ok-sign"><strong> Quality timely control of the suppliers</strong></li>
														<li class="icon icon-ok-sign"><strong> Problem solving</strong></li>
														<li class="icon icon-ok-sign"><strong> Maximum discretion</strong></li>
														<li class="icon icon-ok-sign"><strong> Client protection</strong></li>
													</ul>
												</p>	
											</div>
										</div>	
									</div>
								</section>
								
							<!-- /Intro -->
							
						</div>
					</div>
				</div>
				
			</div>
		<!-- /Intro Wrapper -->
		
		<!-- Main Wrapper -->
			<div class="wrapper wrapper-style21" id="ourExperience">
				<div class="title" id="titleExperience">OUR EXPERIENCE</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									
									
									
									<!-- Features -->
										<section id="features">
											<div class="feature-list">
												<div>
													<div class="row">
														<div class="6u">
															<section>
																<h3 class="icon icon-folder-open"><font color="white">WHAT WE DO</font></h3>
																<p><font color="white"><b><font color="white">Our longstanding experience gained through working for some of the major companies that deal in transportation of works of art, enables us to offer our service to</font></b> antique and contemporary art collectors, museums, art galleries, and art foundations. We provide a valuable consulting service to assist our clients in handling of works of art, packaging, transport and shipping procedures, import and export formalities and insurance policies.</font></p>
															</section>
														</div>
														<div class="6u">
															<section>
																<h3 class="icon icon-globe"><font color="white">OUR TARGET</font></h3>
																<p><font color="white">Our highly-specialized services to art collectors, museums, galleries and foundations are based on professionalism and trust. We assess the costs of handling and transportation of works of art by evaluating and choosing the best offer for our clients. We take pride in our "know how" that enables us to competently deal with the operation and procedures concerning all aspects of the job.</font></p>
															</section>
														</div>
													</div>
												</div>
											</div>
											<ul class="actions actions-centered">
												<li><a href="#titleServizi" class="button button-style3 button-big">SERVICES</a></li>
												<li><a href="#titleContacts" class="button button-style3 button-big">CONTACTS</a></li>
											</ul>
										</section>
									<!-- /Features -->
									
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Main Wrapper -->
		
		<!-- Highlights Wrapper -->
			<div class="wrapper wrapper-style2" id="gallery">
				<div class="title" id="titleGallery">ABOUT US</div>
				<div class="container">
					<div class="row">
						<div class="12u">
						
						<!-- Highlights -->
								<div id="main">
									<section id="features">
									<div class="feature-list">
										<div>
											<div class="row">
												<div class="6u">
													<section >
														<h3 class="icon icon-star"><font color="#484d55">GIOVANNA CAROTTI</font></h3>
														<p><b>Over thirty years </b>of experience in transportation, packing and installation of works of art.<br/> Longstanding experience gained through collaboration with leading companies in this sector <br/> (Universal Express – Borghi International – Arterìa).</p>
														<p class="style3">
														Director of the head offices of the companies situated in Florence and in Naples; co-ordinator of the operative and technical team.
														<br/>Collaboration and contacts with major national and international museums and with antique and contemporary art collectors.
														</p>
													</section>
												</div>
												<div class="6u">
													<section>
														<h3 class="icon icon-star"><font color="#484d55">DANIELA PICCOLO</font></h3>
														<p><b>Longstanding experience </b>in the area of transportation, packing and installation of works of art.<br/>Qualified work experience with leading companies in this sector (Borghi International - Arterìa)</p>
														<br class="mobile-hide" />
														<br class="mobile-hide" />
													</section>
												</div>
											</div>
										</div>
											
											
									</div>
								</div>
								</section>
							
									<hr>
									<footer class="style2">
										<h2><i>Contracts are not drawn up on behalf of the client.</i></h2>
									</footer>
								</section >
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- /Highlights Wrapper -->

		<!-- Footer Wrapper -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title" id="titleContacts">CONTACTS</div>
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Footer -->
								<div id="footer">
									<header class="style1">
										<h2>ArtMoving Consulting</h2>
									</header>
									<br class="mobile-hide" />
									<br class="mobile-hide" />
									<br class="mobile-hide" />
									<!--
									<div>
										<div class="row">
											
											<div class="6u">

												 Contact Form 
													<section class="footer-one">
														<form method="post" action="#">
															<div>
																<div class="row half">
																	<div class="6u">
																		<input type="text" class="text" name="name" id="contact-name" placeholder="Name" />
																	</div>
																	<div class="6u">
																		<input type="text" class="text" name="name" id="contact-email" placeholder="Email" />
																	</div>
																</div>
																<div class="row half">
																	<div class="12u">
																		<textarea name="message" id="contact-message" placeholder="Message"></textarea>
																	</div>
																</div>
																<div class="row">
																	<div class="12u">
																		<ul class="actions">
																			<li><input type="submit" class="button button-style1" value="Send" /></li>
																			<li><input type="reset" class="button button-style2" value="Reset" /></li>
																		</ul>
																	</div>
																</div>
															</div>
														</form>
													</section>
												 /Contact Form 

											</div>
											-->
											<div  class="12u">
											
												<!-- Contacts -->
													<section class="footer">
														<div class="feature-list">
															<div class="row">
															<!--
																<div class="4u">
																		<p><b><font color="white">Legal headquarters</font></b></p>
																		<p><font color="white">ArtMoving Consulting sas</font><br />
																			Casa La Croce 1 - Loc. Buggiana<br />
																			47010 Galeata (FC), Italy<br/>
																			<font color="white">P.IVA/VAT: IT04029960400</font>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">info@artmovingconsulting.it</font>
																		</p>
																</div>
																
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-comment">Social</h3>
																			<p>
																				<a href="http://twitter.com/n33co">@n33co</a><br />
																				<a href="http://dribbble.com/n33">dribbble.com/n33</a><br />
																				<a href="#">facebook.com/untitled</a>
																			</p>
																		</section>
																	</div>
																-->
																<div class="4u">
																	<section id="contactsGiovanna">
																		<p><b><font color="white">Giovanna Carotti</font></b>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">giovanna@artmovingconsulting.it</font>
																		</p>
																		<p class="icon icon-phone"> 
																			+39 333 2521541
																		</p>
																		<p class="icon icon-phone"> 
																			+39 333 3237615
																		</p>
																	</section>
																</div>
																<div class="4u">
																	<section id="contactsDaniela">
																		<p><b><font color="white">Daniela Piccolo</font></b>
																		</p>
																		<p class="icon icon-envelope"> 
																			<font color="white">daniela@artmovingconsulting.it</font>
																		</p>
																		<p class="icon icon-phone"> 
																			+39 331 9101943
																		</p>
																	</section>
																</div>
																
																<div class="4u">
																		<section>
																			<p><b><font color="white">Social</p>
																			<p><a href="https://www.facebook.com/pages/Art-Moving-Consulting/504362689684345" target="fb_artMovingConsulting"><img src="images/fb.png" alt="it" /></a>&nbsp;<a href="https://twitter.com/ArtMovingConsul" target="tw_artMovingConsulting"><img src="images/tw.png" alt="it" /></a></p>
																		</section>
																</div>
															</div>
														</div>
													</section>
												<!-- /Contacts -->
													
											</div>
											<!--
										</div>
									</div>
									-->
								</div>
							<!-- /Footer -->

							<!-- Copyright -->
								<div id="copyright">
									<span>
										&copy; Copyright 2013-2014 &nbsp;&nbsp;&nbsp; <font color="white">ArtMoving Consulting sas</font> &nbsp;&nbsp;&nbsp;  P.IVA/VAT: <font color="white">IT04029960400</font> &nbsp;&nbsp;&nbsp; <font color="white">info@artmovingconsulting.it </font> 
									</span>
									<span>
										<font style="font-size:9px;"> thanks to</font> <br/>
										<img src="images/cc30.png" alt="CC3.0"  style="width:60px;height:25px;" /> <br/>
										<font style="font-size:9px;"> html5up.net</font>
									</span>
								</div>
							<!-- /Copyright -->
						
						</div>
					</div>
				</div>
			</div>
		<!-- /Footer Wrapper -->
<?php
}
?>

	</body>
</html>
