
<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"VOTRE NOM"<email-expediteur@example.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("janajawneh0204@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="doc-css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="doc-css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="stylesheet" type="text/css" href="citroen-c4.css">

    <script src="https://kit.fontawesome.com/76fc774c21.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://kit.fontawesome.com/76fc774c21.css" crossorigin="anonymous">

	</head>
	<body>
	<nav>

<a href="index.html" class="nav-icon" aria-label="homepage" aria-current="page">
  <img src="doc-image./logo.png" alt="logo garage" class="logo" />
  <span>Garage V.Parrot</span>
</a>

<div class="main-navlinks">
  <button type="button" class="hamburger"  aria-label="Toggle Navigation" aria-expanded="false">
	  <span></span>
	  <span></span>
	  <span></span>
	</button>
  <div class="navlinks-container">
	<a href="index.html" aria-current="page">Home</a>
	<a href="mecanique-carosserie.html">Pricing</a>
	<a href="#contact">Contact</a>
  </div>
</div>

<div class="nav-authentication">
  <a href="#" class="user-toggler" aria-label="Sign in page">
	<img src="doc-imanges/user.svg" alt="user icon" />
  </a>
  <div class="sign-btns">
	<button type="button">Sign In</button>
	<button type="button">Sign Up</button>
  </div>
</div>
</nav>
<!---------------------------------------nav1-------------------------->
<div class="nav11">
<div class="nav1">
  <div class="house">
	<img src="doc-image/pin_drop_FILL0_wght400_GRAD0_opsz48.png">
	<span> 16 rue etienne jules marey bois darcy</span>
  </div>
  <div class="call" >
	<img src="doc-image/phone.png">
	<span> 0678261945</span>
  </div>
  <div class="montre" >
	<img src="doc-image/montre.png">
	<span>  lun-vend 9h-12h ,13h-19h</span>
  </div>
</div>
</div>
</div>
<!--------------------------Détails--------------------------------->
<div class="detail">
	<h2>Détails</h2>
	<p> nous vendons uniquement des véhicules provenant de notre propre inventaire, et notre standard qualité est parmi les plus exigeants.
		<br> Nous procédons à un contrôle approfondi de tous nos véhicules, et nous affichons toutes les imperfections présentes dans la 
		<br>galerie de photo du véhicule. Cependant, un véhicule d'occasion est rarement dans un état esthétique absolument neuf, 
		<br>il faut prévoir une usure cohérente avec l'âge et le kilométrage du véhicule. Voici les résultats de notre contrôle :</p>
    <span>Profondeur des pneus d'au moins 3mm pour les pneus d'été / 4mm pour les pneus hiver / 4mm pour les pneus toutes saisons</span>
</div>
<div class="voitures">
  <div>
	<img src="doc-image/hyundai (2).jpg" alt="">
	<img src="doc-image/hyundai.jpg" alt="">
	<img src="doc-image/volvo (3).jpg" alt="">
  </div>
  <div>
	<img src="doc-image/hyundais.jpg" alt="">
	<img src="doc-image/lorenzo-hamers-AVt_lWb36WA-unsplash.jpg" alt="">
	<img src="doc-image/volvo.jpg" alt="">
</div>


</div>

<!------------------------------------formulaire de contact-------------------->
	<div class="form-contact">
		<h2>Formulaire de contact !</h2>
		<form method="POST" action="">
			<input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
		</div>
		<!-------------------------footer----------------------------->

<div class="jaune">
    
	<div id="contact">
		<div class="filter">
		   <div class="foot-paragraph">
			   <h5>Nos coordonnées et heures d’ouverture :</h5>
			   <p><strong>Adresse :</strong>
			   <br>25 Rue d'Hauteville
				   <br>75010 Paris</p>
				<br><strong>Téléphone :</strong>04 74 21 09 44
				<br><strong>Email:</strong>info@garage-v-parrot.fr
				<p>
				 <strong>Heures d'ouvertures:</strong>
				 <br>lun-vend 9h-12h ,13h-19h
				</p>
				<a href="#">Mentions légales</a>
				<hr>
			 <p>Copyright © Garage Vincent Parrot 2023</p>   
		   </div> 
	<iframe class="cta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2216096807224!2d2.347636915674888!3d48.87305177928887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e145ccb3091%3A0x9495beee8c96ec27!2s25%20Rue%20d&#39;Hauteville%2C%2075010%20Paris!5e0!3m2!1sfr!2sfr!4v1676969893800!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
</div>
</div>


 <script src="doc-css/doc.js"></script>

	</body>
</html>