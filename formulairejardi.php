<?php

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
    <title>Formulaire Jardi'</title>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=5.0, minimum-scale=0.86" /> 
    <link rel="stylesheet" href="jardi.css">
</head>

<body>


<section id="formulairearemplir">        
    <div id="formulairecases">  
        <h4>Formulaire de contact</h4>      
        <legend>Remplissez le formulaire ci-dessous<br>pour nous contacter</legend>
<?php     
        echo 'Nom : '.$_POST["nom"].' '; 
        echo 'Preom : '.$_POST["prenom"].'<br>';
        echo 'Email : ' .$_POST["mail"].'<br>';
      
        echo 'msg : ' .$_POST["msg"].'<br>';

   header("Location:form-merci.html");
?>
    </div>        
    <img id="formulairefoto" src="/mesimages/tournesols.jpg">
</section>


<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body>

</html>