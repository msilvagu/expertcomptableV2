	
	<!doctype html>


<html>
<head>
	<meta charset="utf-8">
	<title>Expert Comptable</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="knacss.css" media="all">
	<link rel="stylesheet" href="https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans+Condensed:300,300italic,700">
	<!--<link rel='stylesheet' href='css/stylesheet.css'>
	<link rel='stylesheet' href='css/responsiveslides.css'>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/reponse.js"></script>
	<script src="js/jquery-1.11.0.js"></script>
	<!--<link rel="stylesheet" media="screen and (max-width: 640px)" href="smallscreen.css" />-->
		<?php 
		
		if( strpos($_SERVER['HTTP_USER_AGENT'], 'rv:11.0') ) { 
		  echo "<link rel='stylesheet' href='css/ie.css'>";
		  echo "<link rel='stylesheet' href='css/responsiveslides.css'>";
		} else {
		  echo "<link rel='stylesheet' href='css/stylesheet.css'>";
		  echo "<link rel='stylesheet' href='css/responsiveslides.css'>";
		}
		?>
	
	<script src="js/responsiveslides.min.js"></script>
	<script>
    // You can also use "$(window).load(function() {"
    $(function () {

     // Slideshow 3
      $("#slider3").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "large-btns"
      });
	});
  </script>
</head>
	<body>
		<header class="container">
		
			<ul>
					<li><img src="img/icone-check.png" alt="check"><p >Rapide et gratuit<br><b>Sans engagement.</b></p></li>
					<li><img src="img/icone-telephone.png" alt="check"><p>Expert Comptable?<br><strong><span> 0 800 </span> 11 22 33</strong></p></li>
				
					
					<button type="button" href="#">INSCRIPTION</button>
				</ul>
		</header>
		<section class="wrapper-title">
				<h1><img src="img/Title.png" alt="Expert Comptable Paris"></h1> 
				
		</section>

		<section class="wrapper-center">
				<div class="container">
						
						
							<h3><strong>Combien vous coûte</strong> votre expert-comptable ?</h3>

							<article>
								<h3>En <strong>3 clics,</strong>obtenez le prix<br>
								 que vous devez payer !</h3>
								
								<ul class="advice">
									<li><img src="img/icone-check.png" alt="check"><p>Tenue comptabilité</p></li>
									<li><img src="img/icone-check.png" alt="check"><p>Audit et conseils</p></li>
									<li><img src="img/icone-check.png" alt="check"><p>Externalisation comptabilité</p></li>
									<li><img src="img/icone-check.png" alt="check"><p>Production bilan et compte de résultat</p></li>														
								</ul>	
							</article>



						<div id="step-1">
				    	<fieldset><legend><h2>Simulateur de prix</h2></legend><fieldset><fieldset>
							<form role="form">
					    			<div class="form-group">
							          <img src="img/number1.png"><label for="Factures d'achat">Factures d'achat </label>
							          <input class= "achat" id="achat" placeholder="Quantité"><label for="achat" id="achat">par mois</label>
							        </div>
							        <div class="form-group">
							          <img src="img/number2.png"><label for="Factures de vente">Factures de vente</label>
							          <input class="vente" id="vente" placeholder="Quantité"><label for="vente" id="vente">par mois</label>
							        </div>
							        <div class="form-group">
							          <img src="img/number3.png"><label for="Nombre de salariés">Nombre de salariés</label>
							          <input class="salaries" id="salaries" placeholder="Quantité">
							        </div>
							        <button class="btn-calculer" type="submit" class="btn btn-default">CALCULER</button>
							</form></fieldset></fieldset></fieldset>
						</div>

						
							
						<div id="step-2">
							<fieldset><legend><h2>Votre coût mensuel</h2></legend><fieldset><fieldset>
							<form role="form">
							<p>Pour <strong><span id="nb-factures-achat"></span> factures d'achat</strong> et <strong><span id="nb-factures-vente"></span> factures de ventes</strong> par mois, ainsi que 
							<strong><span id="nb-salaries"></span> salarié(s)</strong> votre coût mensuel est compris</p>
							<p class="resultat-calcul">Entre <span id="val-min"></span>€ et <span id="val-max"></span>€ .</p>
							<p>Je souhaite recevoir mon devis par email</p>
					    			
					    			  <div class="form-group-2">
					    			  	<label for="nomprenom" class="libelle">Civilité</label>

						    			  <div class="civilites" >
							    			  <p id="civilites" for="Miss">Mlle.<input type="radio" name="gender" value="Miss"></input></p>
		  									  <p id="civilites" for="Mrs">Madame<input type="radio" name="gender" value="Mrs"></input></p>
		  									  <p id="civilites" for="Mr">Monsieur<input type="radio" name="gender" value="Mr"></input></p>
						    			  </div>
					    			  </div>
					    			 
					    			<div class="form-group-2">
							          <label for="nomprenom" class="libelle">Nom et prénom</label>
							          <input class= "coordonnees" id="name" placeholder="Nom et prénom">
							        </div>

							        <div class="form-group-2">
							          <label for="email" class="libelle">Email</label>
							          <input class="coordonnees" id="email" placeholder="Email">
							        </div>

							        <div class="form-group-2">
							          <label for="Telephone" class="libelle">Téléphone</label>
							          <input class="coordonnees" id="telephone" placeholder="Téléphone">
							        </div>

							        <button type="submit" class="btn btn-default">ENVOYER</button>
							</form></fieldset></fieldset></fieldset>
						</div>
												
							
						
		</section>	
		
						
		<section class="personnage"><img src="img/personnage-ExpertComptableParis.png" alt=""></section>		    	

		
		    <!-- Slideshow 3 -->
		    <div class="rslides_container">
		    	<h3 class="partenaires">Nos <strong>partenaires</strong> de <strong>confiance.</strong></h3>
		      <ul class="rslides" id="slider3">
		        <li><img src="img/logo_webartisan.png" alt=""></li>
		        <li><img src="img/logo-webexpertcomptable-V1.png" alt=""></li>
		        <li><img src="img/logo_webartisan.png" alt=""></li>
		        <li><img src="img/logo-webexpertcomptable-V1.png" alt=""></li>
		      </ul>
		    </div>
		<footer>
		

		</footer>
		<!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	</body>
</html>