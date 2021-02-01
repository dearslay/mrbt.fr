<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="background.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="icon" href="img/favicon.png" />
	<title>Maël</title>
</head>
<body>
<script>
       window.history.replaceState('','','/');
</script>
<div class="main">
	<a href="#"><img src="img/mael.png" class="logo"></img></a>
	<p class="contactinfo">
		Bonjour, je m'appelle <strong>Maël</strong>, j'ai 21 ans !<br>
		J'habite à Lille, je suis passionné d'informatique depuis tout petit !<br>
		Je recherche activement un stage dans le domaine du <strong>Développement Web</strong> !<br>
		Si vous êtes à la recherche d'un stagiaire à partir du <strong>29 mars 2021</strong>.<br>
		Pour une durée de minimum <strong>2 mois</strong>, n'hésitez pas à me contacter via le formulaire de contact !
	</p>
	<div class="container">
		<div class="content">
		<a href="mael.php" class="button">
			Contactez moi
			<span>
			<svg>
				<use xlink:href="#arrow" href="#arrow"></use>
			</svg>
			</span>
		</a>
		</div>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<defs>
		<symbol id="arrow" viewBox="0 0 100 100">
			<path d="M12.5 45.83h64.58v8.33H12.5z"/>
			<path d="M59.17 77.92l-5.84-5.84L75.43 50l-22.1-22.08 5.84-5.84L87.07 50z"/>
		</symbol>
		</defs>
	</svg>

	<div class="cvarea">
		<h2>Historique Professionnel</h2>
	<ol>
		<li>2020 - Création du site Spa Frog</li>
		<li>2019 - Entreprise de transport S.A.T</li>
		<li>2017 - Préparateur de commande - E.Leclerc</li>
	</ol>
	<h2>Historique d'Étude</h2>
	<ul>
		<li><a href="#">2022 Troisième année Bachelor Développeur Web - MyDigitalSchool</a></li>
		<li><a href="#">2021 Deuxième année Bachelor Développeur Web - MyDigitalSchool</a></li>
		<li><a href="2020.html">2020 Première année Bachelor Cycle Web et Multimédia - MyDigitalSchool</a></li>
		<li><a href="2019.html">2019 Première année D.U.T Transport & Logistique - DUT Mulhouse</a></li>
		<li><a href="2018.html">2018 Obtention du Baccalauréat Professionnel de Transport - Lycée E. Bugatti</a></li>
	</ul>
	</div>
</div>
<div class="background">
	<div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div>
	<div id='title'>
</div>
<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $nav = $_SERVER['HTTP_USER_AGENT'];
    $db = new PDO('mysql:host=;dbname=;charset=utf8','', '');
    $result = $db->prepare('INSERT INTO logs (ip, nav) VALUES (:ip, :nav)');
    $result->execute(array('ip' => $ip, 'nav' => $nav));
    echo "<div class=\"collect\" style=\"display: none;\">Informations collectées: $ip - $nav</div>";
?>

<?php
try
{
	$bdd = new PDO('mysql:host=;dbname=;charset=utf8','', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM logs');
$i = 0;
while ($donnees = $reponse->fetch())
	$i++;

$reponse->closeCursor();
echo $i;
?>


</body>
</html>