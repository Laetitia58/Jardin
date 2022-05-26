<?php
/* se connecter à la BDD jardin */

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "jardin";

try 
{$BDD=new PDO("mysql:host=localhost; dbname=jardin, charset=utf8", "root"," ");

    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch (PDOException $e) {echo "erreur :" . $e->getMessage();
}
?>

<!doctype html>
<html>

<head>
  <title> Aujourd'hui? C'est Jardi! </title>
  <meta charset=" utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=5.0, minimum-scale=0.86"> 
  <link rel="stylesheet" href="jardi.css">
  <link rel="shortcut icon" href="favicon.ico">
<!------------ ici relier Bootstrap: link + 3 scripts  !! NE PAS OUBLIER LES JAVASCRIPT EN FIN DE FICHIER AVANT /BODY---------------->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body class="body">

<header id="header">  

<div class="ligne1">

<div class="loupe1">
  <input type="search" placeholder="Que recherchez-vous?">  
  <button><img src="images/loupe.PNG" style="width:1rem"></button>
</div>

<div class="caddie">
   <img src="images/caddie.PNG" style="width: 2.5rem">
</div>

<div class="moncompte">
    <button type="submit" name="envoi">
          <img src="images/compte.png" style="width: 3rem">
          <p>Mon compte</p>          
    </button>
</div>
</div>
  
<div>
  <h1 class="titulo"> 
    <div class="centrercol"> Aujourd'hui ?      
    </div>          
        <div>            
            <img class="image" src="/images/logo.gimb.PNG">             
        </div> 
    <div class="centrercol jard1"> C'est Jardi' ! 
    </div>
  </h1>  

<div id="promo">
Aujourd'hui ? C'est promo !  // UTILISER EVENT ONCLICK JAVASCRIPT POUR CHANGER D IMAGE AU CLICK
OU UTILISER UNE GALERIE CSS??? SI PAS TROP GROS??? ---> TENTER PLACER NAVIGATEUR A DROITE CADRE)

       <a href="/jardi.htlm/images/fraisier.jpg"><img src="/images/mirabelles.jpg" style="width: 15rem ; height:15rem"></a>
        
        
       <a href="jardin/jardi.htlm/jardi.htlm/images/pommes.jpg"><img src="/images/fraisier.jpg" style="width: 15rem ; height:15rem"></a>
        
       
       <a href="jardin/jardi.htlm/images/mirabelles.jpg"><img src="/images/pommes.jpg" style="width: 15rem ; height:15rem"></a>
      
</div>  
        <ul>
            <li><a href="/catalogueJardin.html.html"> Vos plants </a></li>
            <li><a href="/catalogueJardin.html.html"> Votre matériel </a></li>
            <li><a href="/catalogueJardin.html.html"> Votre mobilier </a></li>
        </ul>
</div>  
</header>

<article class="articlebody">
<!-------------------------------SECTION1---------------------------->

<article class="article1">
<section id="section1">
<div class="container">
  <h1>Vos plants</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Vos légumes</div>
<!--------------------ici //// DEBUT //// carousel inclus dans la card bootstrap ---------------------->
      <div class="card-body carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item">
            <img class="img-fluid" src="/images/artichaud.jpg" style="width: 15rem ; height:15rem" alt="slide1">
           </div>
           <div class="carousel-item active">
            <img class="img-fluid" src="/images/cossePpois.jpg" style="width: 15rem ; height:15rem" alt="slide2">
           </div>
           <div class="carousel-item">
            <img class="img-fluid" src="/images/tomates.jpg" style="width: 15rem ; height:15rem" alt="slide3">
           </div>
        </div>      
      </div>
<!--------------------ici //// FIN //// carousel inclus dans la card bootstrap ---------------------->
      <div class="card-footer">Calendrier</div>
  </div>
</div>

<div class="container">
  <h1>Vos plants</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Vos fruits</div>
    <div class="card-body carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item">
          <img class="img-fluid" src="/images/mirabelles.jpg" style="width: 15rem ; height:15rem" alt="slide1">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/fraisier.jpg" style="width: 15rem ; height:15rem" alt="slide2">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/pommes.jpg" style="width: 15rem ; height:15rem" alt="slide3">
         </div>
      </div>      
    </div>
      <div class="card-footer">Calendrier</div>
  </div>
</div>

<div class="container">  
  <h1>Vos plants</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Vos fleurs</div>
      <div class="card-body carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item">
            <img class="img-fluid" src="/images/fleurNénuphar.jpg" style="width: 15rem ; height:15rem" alt="slide1">
           </div>
           <div class="carousel-item active">
            <img class="img-fluid" src="/images/fleursBleues.jpg" style="width: 15rem ; height:15rem" alt="slide2">
           </div>
           <div class="carousel-item">
            <img class="img-fluid" src="/images//tulipesBlancRouge.jpg" style="width: 15rem ; height:15rem" alt="slide3">
           </div>
        </div>      
      </div>
      <div class="card-footer">Calendrier</div>
  </div>
</div>
</section1>
</article>
<!-------------------------------SECTION2---------------------------->
<article class="article2">
<section2 id="section2">
<div class="container">
  <h1>Votre matériel</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Vos outils au jardin</div>
     <div class="card-body carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item">
          <img class="img-fluid" src="/images//arrosoirLonguePortee.jpg" style="width: 15rem ; height:15rem" alt="slide1">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/outils1.jpg" style="width: 15rem ; height:15rem" alt="slide2">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/brouette.jpg" style="width: 15rem ; height:15rem" alt="slide3">
         </div>
      </div>      
    </div>
      <div class="card-footer">Les essentiels</div>
  </div>
</div>

<div class="container">
  <h1>Votre matériel</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Vos outils d'entretien </div>
  <div class="card-body carousel slide" data-ride="carousel">
    <div class="carousel-inner">
       <div class="carousel-item">
        <img class="img-fluid" src="/images/composteur.jpg" style="width: 15rem ; height:15rem" alt="slide1">
       </div>
       <div class="carousel-item active">
        <img class="img-fluid" src="/images/tondeuseAutonome.jpg" style="width: 15rem ; height:15rem" alt="slide2">
       </div>
       <div class="carousel-item">
        <img class="img-fluid" src="/images/TuyauArrosageFlexible.jpg" style="width: 15rem ; height:15rem" alt="slide3">
       </div>
    </div>      
  </div>
      <div class="card-footer">Les essentiels</div>
  </div>
</div>

<div class="container">
  <h1>Votre matériel</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Vos accessoires</div>
     <div class="card-body carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item">
          <img class="img-fluid" src="/images/gants1.jpg" style="width: 15rem ; height:15rem" alt="slide1">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/chapeau1.jpg" style="width: 15rem ; height:15rem" alt="slide2">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/cabaneInsectes.jpg" style="width: 15rem ; height:15rem" alt="slide3">
         </div>
      </div>      
    </div>
      <div class="card-footer">Les essentiels</div>
  </div>
</div>
</section2>
</article>
<!-------------------------------SECTION3---------------------------->
<article class="article3">
<section3 id="section3">
<div class="container">
  <h1>Votre mobilier</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Votre mobilier au jardinage</div>
      <div class="card-body carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item">
            <img class="img-fluid" src="/images/mobilierJardin1.png" style="width: 15rem ; height:15rem" alt="slide1">
           </div>
           <div class="carousel-item active">
            <img class="img-fluid" src="/images/mobilierJardin4.jpg" style="width: 15rem ; height:15rem" alt="slide2">
           </div>
           <div class="carousel-item">
            <img class="img-fluid" src="/images/mobilierJardin5.jpg" style="width: 15rem ; height:15rem" alt="slide3">
           </div>
        </div>      
      </div>
      <div class="card-footer">Astuces pratiques</div>
    </div>  
  </div>

<div class="container">
  <h1>Votre mobilier</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Votre mobilier extérieur</div>
    <div class="card-body carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item">
          <img class="img-fluid" src="/images/bbqs.jpg" style="width: 15rem ; height:15rem" alt="slide1">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/mobilierHamac1.jpg" style="width: 15rem ; height:15rem" alt="slide2">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/mobilierJardin5.jpg" style="width: 15rem ; height:15rem" alt="slide3">
         </div>
      </div>      
    </div>
      <div class="card-footer">Idées loisirs</div>
  </div>
</div>

<div class="container">
  <h1>Votre mobilier</h1>
  <div class="card" style="width: 20rem;">
      <div class="card-header">Votre mobilier intérieur</div>
    <div class="card-body carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="img-fluid" src="/images/astuceJardinSuspendu.jpg" style="width: 15rem ; height:15rem" alt="slide1">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="/images/mobilierCoffre.jpg" style="width: 15rem ; height:15rem" alt="slide2">
        </div>
        <div class="carousel-item active">
          <img class="img-fluid" src="/images/mobilierJardin1.png" style="width: 15rem ; height:15rem" alt="slide3">
        </div>
      </div>      
    </div>
      <div class="card-footer">Idées détente</div>
  </div>
</div>
</section3>
</article>

</article>
<!-------------------------------FOOTER---------------------------->
<footer id="footer">

<div class="footer1">  
<ul>
    <li><a href="/catalogueJardin.html.html"> Vos plants </a></li>
    <li><a href="/catalogueJardin.html.html"> Votre matériel </a></li>
    <li><a href="/catalogueJardin.html.html"> Votre mobilier </a></li>
</ul>
</div>  

<div class="footer2">
  <div>
    <ul>
      <li><a href="/catalogueJardin.html.html"> CG</a></li>
      <li><a href="/catalogueJardin.html.html"> Mentions légales</a></li>
      <li><a href="/catalogueJardin.html.html"> Politique de Confidentialité</a></li>
      <li><a href="/catalogueJardin.html.html"> Paiement sécurisé CB mastercard visa</a></li>
    </ul>  
  </div>
  <div>
    <ul>
      <li><a href="/catalogueJardin.html.html"> Contactez-nous par mail</a></li>
      <li><a href="/catalogueJardin.html.html"> Service client à votre écoute 06 00 00 00 00 <br>
        Disponible du lundi au vendredi de 9h30 à 19h30 <br>Appel non surtaxé</a></li>
      <li>Suivez-nous sur les réseaux sociaux twitter instagram</li>
    </ul>
  </div>
  <div>
    <ul>
      <li><a href="/catalogueJardin.html.html">Newsletter<input> Saisissez votre adresse ok <span><br>
        Je souhaite recevoir les offres 
        exclusives et les actualités de <br>Jardi'.com</span></a></li>
      <li><a href="/catalogueJardin.html.html">Blog</a></li>
    </ul>
  </div>
</div>

</footer>

</body>
</html>
