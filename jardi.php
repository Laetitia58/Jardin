<?php
/* se connecter à la BDD jardin */

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "jardin";

try 
{$BDD=new PDO("mysql:host=localhost; dbname=jardin", "root","");

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
  <link rel="shortcut icon" href="favicon.ico">
<!------------ ici relier Bootstrap: link + 3 scripts  !! NE PAS OUBLIER LES JAVASCRIPT EN FIN DE FICHIER AVANT /BODY---------------->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="jardi.css">
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
    <button class="boton" type="submit" name="envoi">
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
</div>

<div class="promo">
<div class="overlay-image"> 
  <div class="card" style="width: 17.8rem;">
    <div class="card-body carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item">
          <img class="img-fluid" src="/images/mirabelles.jpg" style="width: 18rem ; height:10rem" alt="slide1 mirabelles">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/fraisier.jpg" style="width: 18rem ; height:10rem" alt="slide2 fraises">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/pommes.jpg" style="width: 18rem ; height:10rem" alt="slide3 pommes">
         </div>
      </div>      
    </div>
  </div>
  <div class="texto"> Aujourd'hui ? C'est promo ! </div>
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
            <img class="img-fluid" src="/images/artichaud.jpg" style="width: 17rem ; height:17rem" alt="slide1 artichaud">
           </div>
           <div class="carousel-item active">
            <img class="img-fluid" src="/images/cossePpois.jpg" style="width: 17rem ; height:17rem" alt="slide2 petits_pois">
           </div>
           <div class="carousel-item">
            <img class="img-fluid" src="/images/tomates.jpg" style="width: 17rem ; height:17rem" alt="slide3 tomates">
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
          <img class="img-fluid" src="/images/mirabelles.jpg" style="width: 15rem ; height:15rem" alt="slide1 mirabelles">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/fraisier.jpg" style="width: 15rem ; height:15rem" alt="slide2 fraises">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/pommes.jpg" style="width: 15rem ; height:15rem" alt="slide3 pommes">
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
            <img class="img-fluid" src="/images/fleurNénuphar.jpg" style="width: 15rem ; height:15rem" alt="slide1 nénuphar">
           </div>
           <div class="carousel-item active">
            <img class="img-fluid" src="/images/fleursBleues.jpg" style="width: 15rem ; height:15rem" alt="slide2 bleuets">
           </div>
           <div class="carousel-item">
            <img class="img-fluid" src="/images//tulipesBlancRouge.jpg" style="width: 15rem ; height:15rem" alt="slide3 tulipes">
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
          <img class="img-fluid" src="/images//arrosoirLonguePortee.jpg" style="width: 15rem ; height:15rem" alt="slide1 arrosoir">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/outils1.jpg" style="width: 15rem ; height:15rem" alt="slide2 outil">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/brouette.jpg" style="width: 15rem ; height:15rem" alt="slide3 brouette">
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
        <img class="img-fluid" src="/images/composteur.jpg" style="width: 15rem ; height:15rem" alt="slide1 composteur">
       </div>
       <div class="carousel-item active">
        <img class="img-fluid" src="/images/tondeuseAutonome.jpg" style="width: 15rem ; height:15rem" alt="slide2 tondeuse">
       </div>
       <div class="carousel-item">
        <img class="img-fluid" src="/images/TuyauArrosageFlexible.jpg" style="width: 15rem ; height:15rem" alt="slide3 tuyau_arrosage">
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
          <img class="img-fluid" src="/images/gants1.jpg" style="width: 15rem ; height:15rem" alt="slide1 gants">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/chapeau1.jpg" style="width: 15rem ; height:15rem" alt="slide2 chapeau">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/cabaneInsectes.jpg" style="width: 15rem ; height:15rem" alt="slide3 cabane_insectes">
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
            <img class="img-fluid" src="/images/mobilierJardin1.png" style="width: 15rem ; height:15rem" alt="slide1 ensemble">
           </div>
           <div class="carousel-item active">
            <img class="img-fluid" src="/images/mobilierJardin4.jpg" style="width: 15rem ; height:15rem" alt="slide2 ensemble_jardin">
           </div>
           <div class="carousel-item">
            <img class="img-fluid" src="/images/mobilierJardin5.jpg" style="width: 15rem ; height:15rem" alt="slide3 mobilier_enfants">
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
          <img class="img-fluid" src="/images/bbqs.jpg" style="width: 15rem ; height:15rem" alt="slide1 barbecue">
         </div>
         <div class="carousel-item active">
          <img class="img-fluid" src="/images/mobilierHamac1.jpg" style="width: 15rem ; height:15rem" alt="slide2 hamac">
         </div>
         <div class="carousel-item">
          <img class="img-fluid" src="/images/mobilierJardin5.jpg" style="width: 15rem ; height:15rem" alt="slide3 mobilier_extérieur">
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
          <img class="img-fluid" src="/images/astuceJardinSuspendu.jpg" style="width: 15rem ; height:15rem" alt="slide1 mobilier_intérieur">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="/images/mobilierCoffre.jpg" style="width: 15rem ; height:15rem" alt="slide2 coffre">
        </div>
        <div class="carousel-item active">
          <img class="img-fluid" src="/images/mobilierJardin1.png" style="width: 15rem ; height:15rem" alt="slide3 herbier">
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
      <li><a onclick="alert('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.')"> CG </a></li>
      <li><a onclick="alert('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.')"> Mentions légales </a></li>
      <li><a onclick="alert('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.')"> Politique de Confidentialité </a></li>
      <li><a href="#"> Paiement sécurisé <img src="/images/CB_mast_visa.png" style="width: 3rem ; height:2rem" ></a></li>
    </ul>  
  </div>
  <div>
    <ul>
      <li><a href="formulairejardi.php"> Contactez-nous par mail </a></li>
      <li><a href="#"> Service client à votre écoute au 06 00 00 00 00 <br>
        du lundi au vendredi de 9h30 à 19h30 <br> Appel non surtaxé </a></li>
      <li><a href="#"> Suivez-nous  &nbsp </a> <a href="#"><img src="/images/twitter.png" style="width: 2em ; height:1.5rem"></a> <a href="#"> &nbsp <img src="/images/instagram.jpg" style="width: 2rem ; height:2rem"></a> </li>
    </ul>
  </div>
  <div>
    <ul>
      <li>
          <div class="optin-container">
          <div> Je m'inscris à ma Newsletter </div>
            <form class="form hidden">
              <input type="email" id="email" name="email" placeholder="exemple@gmail.com" />
              <input type="submit" value="Ok" />
            </form> 
          </div>
        <a href="/catalogueJardin.htlm.htlm"> <span style="font-style:oblique" > Je souhaite recevoir les offres exclusives et les actualités de 
            <br> Jardi'.com </span>
        </a>
      </li>    
      <li><a href="/catalogueJardin.html.html"> Blog </a>
      </li>
    </ul>
  </div>
</div>

</footer>

</body>
</html>
