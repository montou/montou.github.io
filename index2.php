<!DOCTYPE html>
<html>
	<head>
		<title>GoodVibesXMLTV</title>
		<meta name="description" content="Kodi XMLTV EPG france, retrouver les programmes de la journée +de 200 chaines. XMLTV grabber." />
		<meta name="robots" content="index, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/x-icon" href="../_img/favicon.ico" />

		<style>  
		    span{
		        padding-left:10px;
		    }
			.sp-url-lbl, .sp-url-val, .sp-url-lbl-sm, .sp-url-val-sm {
				padding:10px 10px 10px 10px;
				border:1px solid #17a2b8;
			}
			
			.sp-url-val-sm {
				overflow: scroll;
			}
			
			.sp-url-lbl, .sp-url-lbl-sm {
				color:white;
				font-weight:bold;
				background-color:#17a2b8;
			}
			
			.sp-url-lbl{
				border-radius:5px 0px 0px 5px;
			}
			
			.sp-url-val{
				border-radius:0px 5px 5px 0px;
			}
			
			.my-btn-sm {
				font-size:24px !important;
			}
			.tuto, .recomanded{
				/*display: none;*/
				color:grey;
				border-left: 6px solid #138496;
				padding: 10px;
				font-size: 12px;
				line-height: 1.4;
				background-color: #eee;
				border-radius: 4px;
				max-width:650px;
				/*overflow: Scroll;*/
			}
			.recomanded{
                color:red !important;
				border-color: #ff4d4d !important;
				background-color: #ffe6e6 !important;
				font-size: 18px !important;
				padding: 15px 10px 15px 10px !important;
			}
			.osname{
				color:green;
				font-size: 16px;
				text-align: left;
				font-weight: bold;
			}
			.comment{
				color:black;
				font-size: 14px;
				text-align: left;
				padding:10px 0px 10px 20px;
			}
			.command{
				color:blue;
				font-size: 12px;
				text-align: left;
				padding:0px 0px 20px 20px;
			}
			
			#chanlist {
				border-collapse:collapse;
				color:black;
			}
			#chanlist td, #chanlist th {
				border: 1px solid #ddd;
				padding: 8px;
			}
			#chanlist tr:nth-child(even){background-color: #515859; color:white;}

			#chanlist tr:hover {background-color: #138496;}

			#chanlist th {
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: left;
				background-color: #fff;
				color: green;
				font-size: 16px;
			}
			
			/* section de style pour gestion bouton haut de page */
			a#cRetour{
			  border-radius:3px;
			  padding:10px;
			  font-size:15px;
			  text-align:center;
			  color:#fff;
			  background:rgba(255, 193, 7, 0.7);
			  position:fixed;
			  right:20px;
			  opacity:1;
			  z-index:99980;
			  transition:all ease-in 0.2s;
			  backface-visibility: hidden;
			  -webkit-backface-visibility: hidden;
			  text-decoration: none;
			}
			a#cRetour:before{ content: "\25b2"; }
			a#cRetour:hover{
			  background:rgba(255, 2, 64, 0.5)
			  transition:all ease-in 0.2s;
			}
			a#cRetour.cInvisible{
			  bottom:-35px;
			  opacity:0;
			  transition:all ease-in 0.5s;
			}

			a#cRetour.cVisible{
			  bottom:20px;
			  opacity:1;
			}
			
			@media screen and (max-width: 1280px ) {
                .d-pub {
                    display:none;
                }
                .d-pub-align{
                    display:block !important;
                }
            }
			
			
			.div-pub-item{
				border:1px solid white; 
				border-radius:5px 5px 0 0;
				overflow: overlay;
			}
			
			
			.rss-source-title{ 
				background-color: white;
				color: black;
				border-radius: 5px 5px 0 0;
				font-weight:bold;
			}
			
			.rss-item-title{
				text-align: left;
				padding: 5px;
				background-color: darkslategrey;
				font-size: smaller;
				color:white !important;
			}
			
			.rss-pub-info{
				font-style: italic;
				font-size: x-small;
				color: #ffc107 !important; /*darkcyan !important;*/
				text-align: right;
				padding: 5px;
			}
			
			.rss-desc{
				font-size: small;
				text-align: justify;
				padding: 0 10px 0 10px;
				/*color:white !important;*/
			}
			
			.rss-link, .rss-link:hover{
				/*text-decoration: none;*/
				color: wheat; /*#ffc107;*/
			}
			
			.changes-log-title{
				padding:10px 0 0 0;
				border-bottom:1px dashed white;
			}
			
			.changes-log-content{
				padding: 20px 0 50px 20px;
			}
			
			.btn-close{
				border:1px solid; 
				border-radius:5px; 
				padding:3px 5px 3px 5px;
			}
			.btn-close:hover{
				cursor:pointer;
			}
		</style>
		
		<link rel="stylesheet" href="../_css/bootstrap-4.1.1-dist/css/bootstrap.css">
		<script language="javascript" type="text/javascript" src="../_js/jquery-3.3.1.min.js"></script>
		<!--<script src="../../_css/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>-->
		
		<script>
			function ShowXmltv(aParam){
				var sw=screen.width;
				switch(aParam) {
					case 'fr': 	document.location.href="./viewer3.php?w="+sw; break;
					case 'gw': 	document.location.href="./viewer4.php";
								//document.location.href="./viewer3.php?gwf=true&w="+sw; 
								break;
				};
			};
			function ToggleDisplayById(aId){
				$("#"+aId).toggleClass('d-none');
			}
		</script>
	<!-- <script data-ad-client="ca-pub-9463968869915167" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
	</head>
	<body class="text-light" style="background-color:#000000;" content="text/html; charset=UTF-8">
	    
		<a name="haut" id="haut"></a>
		
		<div class="container-fluid">

			<!--<center>
				<div style="color:red; font-size:18px; background-color:white; padding:10px 0 10px 0; overflow:scroll;">
					<div>!!! ATTENTION nouvelle adresse pour le site <b>"http://leretail.ddns.net"</b> ainsi que pour le fichier xml <b>"http://leretail.ddns.net/depot/gw/tvguide.xml"</b></div>
					<div>l'adresse <b>"leretail.myqnapcloud.com" ne sera plus stable a partir du 11/05/2020</b> en raison de test sur mon serveur.</div>
				</div>
			</center>-->

			<div class="row border-bottom border-white"><IMG src="../_img/enter.png" class="rounded mx-auto d-block"></div>
			
			<center>
			
			    <!--
				<div class="d-pub-align" style="display:flex; justify-content:space-between">
				-->
				<div><center>
				
			        <!--
			        <div class="d-pub" style="float:left; margin-top:40px; width:25%; padding:10px; position:-webkit-sticky; position:sticky; top:20px; align-self: flex-start;">
			            <div class="div-pub-item" style=""></div>
			            
						https://www.01net.com/rss/tv-video/
						<div class="div-pub-item" style="margin-top:15px;"></div>
			            <div class="div-pub-item" style="margin-top:15px;"></div>
						
			        </div>
			        -->
					
			        <div style="max-width:650px;">    
			            <br>
			            <br>
			            <div class="recomanded">
			                <div class="d-none" style="margin:10px; padding-bottom:10px; border-bottom:1px solid red;"><span style="font-weight:bold;">[08/08/2021]</span> - Suite à un soucis d'interface serveur, le fichier XML à été down durant 3, 4 jours. Le soucis est maintenant résolut.</div>
			                <div style="padding-bottom:2px;">
			                    XMLTV Suisse (<a class="text-info" href="https://xmltv.ch/">https://xmltv.ch</a>) propose des fichiers XMLTV pour la journée ou jusqu'a 12 jours pour les chaines française, 
			                    voir l'article <a class="text-info" href="https://www.windowsmediacenter.fr/2020/02/16/xmltv-france-a-ferme-xmltv-suisse-permet-desormais-de-telecharger-le-guide-tv-de-la-tnt-francaise/">ICI</a>
			                </div>
			                <div style="padding:2px 0 2px 0;">
			                    <b>OU</b>
			                </div>
			                <div style="padding-top:2px;">
			                    vous pouvez continuer à utiliser ma petite tambouille, ci-dessous.
			                </div>
			            </div>
			    
				        <h1 class="p-4">GoodVibesXMLTV</h1>
				        <h3>Fichiers xmltv contenant le guide des programmes de la journée.</h3>
				
				        <div style="text-align:justify; padding:15px 0 15px 0;">
				            <div style="padding-bottom:15px;">EPG légé <b>GoodVibes</b> pour la france au format XMLTV avec plus de 200 chaines. Fichier mis à jour quotidiennement à 1h30 UTC+1.</div>
                            <div>Fait à l'arrache suite à la mort du site "xmltv.fr", à la base pour mon utilisation perso je le partage ici pour ceux que ça peut dépanner.</div>
                        </div>
						
        				<!--
        					# - Affichage ecran md et supérieur
        				-->
        				<div class="d-none d-lg-block" style="padding:15px 0 15px 0;">
        					<span class="sp-url-lbl">URL</span>
        					<span class="sp-url-val">http://leretail.ddns.net/@xmltv/depot/gw/tvguide.xml</span>
        					<a class="btn btn-success" style="vertical-align:baseline !important;" href="?download=1">Télécharger</a>
        				</div>
        				<!--
        					# - END Affichage ecran md et supérieur
        				-->
				
        				<!--
        					# - Affichage ecran sm et inférieur
        				-->
        				<div class="py-2 d-lg-none">
        					<br>
        					<br>
							<div class="sp-url-lbl-sm">URL</div>
        					<div class="sp-url-val-sm">http://leretail.ddns.net/@xmltv/depot/gw/tvguide.xml</div>
        					<!--<div class="sp-url-lbl-sm">URL</div>
        					<div class="sp-url-val-sm">http://leretail.ddns.net/@xmltv/depot/gw/tvguide.xml</div> './depot/gw/tvguide.xml" download="tvguide.xml"-->
        					<br>
        					<a class="btn btn-success my-btn-sm" href="?download=1" >Télécharger</a>
        					<br
        					<br>
        				</div>
        				<!--
        					# - END Affichage ecran sm et inférieur
        				-->
				
        				<div style="padding-top:15px;"> 
        				    <div class="btn btn-info w-100" onclick="javascript:ShowXmltv('gw');"><em>Afficher le contenu du guide </em><b>GoodVibes</b></div>
        				</div>
				
        				<div>
        					<div class="btn btn-outline-light w-100" style="overflow:hidden;" onclick="javascript:ToggleDisplayById('idTuto');">Afficher / Masquer - Automatiser la récupération journalière du fichier "xml"</div>
        					<div id="idTuto" class="tuto d-none">
        						<div class="osname">Linux :</div>
        						<div class="comment">créer une tâche "cron" (tâche planifiée) qui exécute le script suivant :</div>
        						<div class="command">
        							<em><p>
        							cd /[Folder target full path]/
        							wget -b -r http://leretail.ddns.net/@xmltv/depot/gw/tvguide.xml -o /[Folder target full path]/tvguide.log
        							</p></em>
        						</div>		
        						<div class="osname">Windows :</div>
        						<div class="comment">créer une tâche planifiée qui exécute le script power shell suivant :</div>
        						<div class="command">
        							<em><p>
        							curl "http://leretail.ddns.net/@xmltv/depot/gw/tvguide.xml" -OutFile "[Folder target full path]\tvguide.xml"							
        							</p></em>
        						</div>	
        						<div class="comment">OU</div>
        						<div class="command">
        							<em><p>
        							$ObjShell = new-object System.Net.WebClient
        							$ObjShell.DownloadFile("http://leretail.ddns.net/@xmltv/depot/gw/tvguide.xml","[Folder target full path]\tvguide.xml")
        							</p></em>
        						</div>						
        					</div>
        				</div>
				
						<div>
							<div class="btn btn-outline-light w-100" style="overflow:hidden;" onclick="javascript:ToggleDisplayById('idApi');">Afficher / Masquer - GoodVibesXMLV API -> json</div>
        					<div id="idApi" class="tuto d-none">
								
								<div class="osname" style="padding:20px 10px 15px 10px;">API GoodVibesXMLTV v 0.3</div>
								<div class="recomanded" style="text-align:justify;">
									Je suis à la recherche d'une âme charitable afin d'avoir des explications sur le fonctionnement d'une API EPG.
									Si vous pensez être la personne de la sistuation merci de prendre contact avec moi via mail.
								</div>
								<div style="color:black; font-size:14px; text-align:justify; padding:10px 0 0 10px;">
									<p>Le données retournées sont au fromat "json". L'API est accessible à l'address suivante :</p>
									<p>http://leretail.ddns.net/@xmltv/api-v3<em> --> <span style="color:blue; font-size:12px;">../help pour obtenir la liste des commandes disponibles.</span> </em></p>
<pre>
le format de sortie est maintenant composé comme suit :
{
	"success": "{true || false}"	// indique si la commande a réussit.
	"msg": "{warning || error}"	// message en cas d'avertissement ou erreur.
	"result": "{EPG datas}"		// données de l'EPG en cas de succès.
}
</pre>
									<p>Les commandes de type "GET" disponibles sont les suivantes :</p>
									<p>
									<table>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/help</td><td width="30px"><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie la liste des commandes disponibles.</em></span></td></tr>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/epg</td><td width="30px"><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie un EPG paginé.</em></span></td></tr>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/epg/{page}/{resultat par page}</td><td width="30px"><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie la page passée en parametre avec le nombre de resultat par page passé en parametre.</em></span></td></tr>
									
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/channels</td><td width="30px"><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie la liste des channels.</em></span></td></tr>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/channels/id/{id}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie un channel en fonction de l'id.</em></span></td></tr>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/channels/id/{id}/{date}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie les programmes d'un channel en fonction de l'id et a partir de la date ou date heure passe en parametre, la date doit etre au format { YYYYmmdd ou YYYYmmddhhmm }.</em></span></td></tr>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/channels/name/{name}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie un channel en fonction du nom.</em></span></td></tr>
									<tr style="border-bottom:1px grey dashed;"><td>.../api-v3/channels/date/{date}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie les programmes de tous les channels en fonction de la date ou date heure passe en parametre, la date doit etre au format { YYYYmmdd ou YYYYmmddhhmm }.</em></span></td></tr>
									<tr><td width="250px">.../api-v3/channels/date/{date}/{name}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie les programmes d'un channel en fonction de de la date ou date heure et du nom de la chaine passe en parametre, la date doit etre au format { YYYYmmdd ou YYYYmmddhhmm }.</em></span></td></tr>
									</table>
									</p>
								</div>
								
    							<div class="d-none">
    								<div class="osname" style="padding:20px 10px 15px 10px;">API GoodVibesXMLTV v 0.2 <span style="color:red;">(dépréciée - supprimée à compter du 01/06/2021)</span></div>
    								<div style="color:black; font-size:14px; text-align:justify; padding:10px 0 0 10px;">
    									<p>Le données retournées sont au fromat "json". L'API est accessible à l'address suivante :</p>
    									<p>http://leretail.ddns.net/@xmltv/api<em> --> <span style="color:blue; font-size:12px;">renvoie le guide complet (entier).</span> </em></p>
    									<p>Les commandes de type "GET" disponibles sont les suivantes :</p>
    									<p>
    									<table>
    									<tr style="border-bottom:1px grey dashed;"><td>.../api/channels</td><td width="30px"><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie la liste des channels.</em></span></td></tr>
    									<tr style="border-bottom:1px grey dashed;"><td>.../api/channels/id/{id}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie un channel en fonction de l'id.</em></span></td></tr>
    									<tr style="border-bottom:1px grey dashed;"><td>.../api/channels/id/{id}/{date}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie les programmes d'un channel en fonction de l'id et a partir de la date ou date heure passe en parametre, la date doit etre au format { YYYYmmdd ou YYYYmmddhhmm }.</em></span></td></tr>
    									<tr style="border-bottom:1px grey dashed;"><td>.../api/channels/name/{name}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie un channel en fonction du nom.</em></span></td></tr>
    									<tr style="border-bottom:1px grey dashed;"><td>.../api/channels/date/{date}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie les programmes de tous les channels en fonction de la date ou date heure passe en parametre, la date doit etre au format { YYYYmmdd ou YYYYmmddhhmm }.</em></span></td></tr>
    									<tr><td>.../api/channels/date/{date}/{name}</td><td><em> --> </em></td><td><span style="color:blue; font-size:12px;"><em>renvoie les programmes d'un channel en fonction de de la date ou date heure et du nom de la chaine passe en parametre, la date doit etre au format { YYYYmmdd ou YYYYmmddhhmm }.</em></span></td></tr>
    									</table>
    									</p>
    								</div>
    							</div>
							
							</div>
						</div>
						
        				<div>
        					<div id="btnchanlist" class="btn btn-outline-light w-100" onclick="javascript:ToggleDisplayById('chanlist');">Afficher / Masquer - Liste des chaines</div>
        					<div id="chanlist" class="tuto d-none">
								
								<div style="color:white; text-align:left; background-color:#515859; font-size:16px; padding:10px 5px 10px 5px;">
									<div class="">
										GoodvibesXMLTV v0.62.5a<span class="btn btn-info w-100 p-2" style="max-with:460px;"  onclick="javascript:ToggleDisplayById('id_changes_log');">Modifications de version (Changes.txt)</span>
									</div>
									<div id="id_changes_log" class="d-none">
										<div style="font-weight:bold; text-align:right; width:100%; border-top:1px solid white; padding:10px 10px 5px 10px;" onclick="javascript:ToggleDisplayById('id_changes_log');">
											<span class="btn-close" style="margin-top:5px;">X</span>
										</div>
										<div class="changes-log-title">
[Le 19/07/2021] -- GoodVibesXMLTV v0.62.5a
</div>
<div class="changes-log-content">
<p>
    
	Fix parsing @ TELE LOISIR
</p>
</div>



<div class="changes-log-title">
[Le 07/06/2021] -- API GoodVibesXMLTV v0.2 EOL
</div>
<div class="changes-log-content">
<p>
    
    API GoodVibesXMLTV v 0.2 dépréciée - supprimée.
</p>	
</div>



<div class="changes-log-title">
[Le 04/04/2021] -- GoodVibesXMLTV v0.62.4a
</div>
<div class="changes-log-content">
<p>
	Api v0.3 <br>
	<br>	

le format de sortie est maintenant composé comme suit :<br>
{<br>
	"success": "{true || false}"<br>
	"msg": "{warning || error}"	<br>
	"result": "{EPG datas}"	<br>
}<br>
<br>
<br>
		Commandes disponibles :<br>
		.../api-v3/help<br>
		.../api-v3/epg<br>
		.../api-v3/epg/{page}/{resultat par page}<br>
		.../api-v3/channels<br>
		.../api-v3/channels/id/{chan id}<br>
		.../api-v3/channels/id/{chan id}/{date}<br>
		.../api-v3/channels/name/{chan name}<br>
		.../api-v3/channels/date/{date}<br>
		.../api-v3/channels/date/{date}/{chan name}<br>
	<br>
		Plus d'information a la section "GoodVibesXMLV API -> json"<br>
		OU<br>
		@api-v3/help
</p>	
</div>

<div class="changes-log-title">
[Le 02/03/2021] -- GoodVibesXMLTV v0.62.4a
</div>
<div class="changes-log-content">
<p>
	Liste des chaines retirees :
</p>
<p>	
		- Rmc sport 3<br>
		- Rmc sport 4<br>
		- Voyage<br>
</p>	
</div>



<div class="changes-log-title">
[Le 21/12/2020] -- GoodVibesXMLTV v0.62.3a
</div>
<div class="changes-log-content">
<p>
	Changements mineurs :
</p>
<p>	
		- Fixation du bug sur les images des programmes @Teleloisir.<br>
</p>	
</div>



<div class="changes-log-title">
[Le 15/12/2020] -- GoodVibesXMLTV v0.62.2a
</div>
<div class="changes-log-content">
<p>
	Changements mineurs :
</p>
<p>	
		- Fixation du bug remonter par "Floria" sur les images des programmes @nouvelobs.<br>
</p>	
</div>


<div class="changes-log-title">
[Le 08/11/2020] -- GoodVibesXMLTV v0.62.1a
</div>
<div class="changes-log-content">
<p>
	Liste des chaines retirees :
</p>
<p>	
		- Disney chan +1<br>
		- Disney Cinema<br>
		- Disney XD<br>
		- France O<br>
</p>	
<p>
	Api v0.2 <br>
	<br>	
		Modifications des commandes :<br>
		.../api/channels/tvg-id/{id}			<span style="color:red;">devient</span>		.../api/channels/id/{id}<br>
		.../api/channels/display-name/{name}	<span style="color:red;">devient</span>		.../api/channels/name/{name}<br>
	<br>
		Ajout des commandes :<br>
		.../api/channels/id/{id}/{date}<br>
		.../api/channels/date/{date}<br>
		.../api/channels/date/{date}/{name}
</p>
</div>



<div class="changes-log-title">
[Le 03/05/2020] -- GoodVibesXMLTV v0.62a
</div>
<div class="changes-log-content">
<p>
	Ajout du parametre "GUIDE_TYPE = { full || light }, permettant
	la recuperation des informations { annee; acteurs; realisateur; date; rating }
</p>
<p>	
	!!! Pour le moment l'option n'est pas active !!! (*)
</p>
<p>
	(*) - il s'agit d'un programme fait pour mon utilisation personnelle
	je ne trouve pas que cela apporte beaucoup plus pour moi, et vu 
	la perte de temps a l'execution, a part si j'ai une forte demande,
	tant que je n'aurais pas de solution pour reduire le temps de traitement
	je ne pense pas l'activer.
</p>
</div>


<div class="changes-log-title">
[Le 02/05/2020] -- GoodVibesXMLTV v0.61a
</div>
<div class="changes-log-content">
<p>
	Ajout multi source, modification fichier ini 1.1.0 -> 1.2.0
</p>
<p>	
	Liste des chaines ajoutees :
</p>
<p>	
		- Bloomberg<br>
		- CNBC Europe<br>
		- Comedy Central<br>
		- Disney Channel +1<br>
		- MCM Top<br>
</p>
</div>

<div class="changes-log-title">
[Le 24/04/2020] -- GoodVibesXMLTV v0.5a
</div>
<div class="changes-log-content">
<p>
	Liste des "id" de chaines modifiees :
</p>
<p>	
		- MENs UP TV<br>
		- RMC Sport 2<br>
		- tele grenoble<br>
</p>	
<p>	
	Liste des chaines ajoutees :
</p>
<p>	
		- 2M Monde<br>
		- 3SAT<br>
		- AB 3<br>
		- ABXPLORE<br>
		- ATV Guyane<br>
		- ATV Guadeloupe<br>
		- ATV Martinique<br>
		- BBC 1<br>
		- BBC 2<br>
		- BBC Entrertainment<br>
		- Canal+ Antilles<br>
		- Cine+ Classic Belgique<br>
		- Cine+ Frisson Belgique<br>
		- Cine+ Premier Belgique<br>
		- Demain TV<br>
		- Discovery Family<br>
		- Discovery Investigation<br>
		- DW English<br>
		- éen<br>
		- Golf Channel<br>
		- Ketnet<br>
		- Mirabelle TV<br>
		- Museum<br>
		- Nautical Channel<br>
		- Nouvelle-Caledonie la 1ere<br>
		- Rai Due<br>
		- Rai Tre<br>
		- Rai Uno<br>
		- RMC Sport UHD<br>
		- RSI LA 1<br>
		- RSI LA 2<br>
		- Stingray i-Concert<br>
		- Stingray Festival<br>
		- TV Tours<br>
		- TV5MONDE Europe<br>
		- TVE 1<br>
		- TVE 2<br>
		- TVR Rennes 35 Bretagne<br>
		- VTM<br>
		- ZDF<br>
</p>		
<p>
	Liste des chaines supprimees :
</p>
<p>	
		- ASTRO CENTER TV<br>
		- BEST OF SHOPPING<br>
		- Bloomberg<br>
		- CCTVF<br>
		- CNBC Europe<br>
		- Disney Channel +1<br>
		- Extreme sport channel<br>
		- JUST 4 TALENT<br>
		- KARAOKE CHANNEL<br>

</p>
</div>
<div class="changes-log-title">	
[Le 28/01/2020] -- GoodVibesXMLTV v0.4a
</div>
<div class="changes-log-content">
	Relance du projet suite a la fermeture du site "xmltv.fr"
	Reprise du code pour le transposer en PHP
</div>


<div class="changes-log-title">	
[Le 12/03/2018] -- GoodVibesXMLTV v0.3a
</div>
<div class="changes-log-content">
	Separation de WebGrab++
</div>


<div class="changes-log-title">
[Le 25/02/2018] -- GoodVibesXMLTV v0.2a
</div>
<div class="changes-log-content">
	Optimisation du code (temps d'execution divise par 2)
</div>


<div class="changes-log-title">
[Le 18/01/2018] -- GoodVibesXMLTV v0.1a
</div>
<div class="changes-log-content">
	Développé en Free Pascal, sous linux Debian 8
	En complément de WebGrab++ par concatenation de fichiers
</div>									</div>
								</div>
								<table width='100%'>	<tr>		<th>#</th>		<th>CHAINES</th>		<th>ID</th>	</tr><tr>	<td>1</td>	<td>13eme RUE</td>	<td>C2.api.telerama.fr</td></tr><tr>	<td>2</td>	<td>2M MONDE</td>	<td>C340.api.telerama.fr</td></tr><tr>	<td>3</td>	<td>3SAT</td>	<td>C3.api.telerama.fr</td></tr><tr>	<td>4</td>	<td>6ter</td>	<td>C1403.api.telerama.fr</td></tr><tr>	<td>5</td>	<td>8 Mont-Blanc</td>	<td>C421.api.telerama.fr</td></tr><tr>	<td>6</td>	<td>A+</td>	<td>C2049.api.telerama.fr</td></tr><tr>	<td>7</td>	<td>AB 1</td>	<td>C5.api.telerama.fr</td></tr><tr>	<td>8</td>	<td>AB 3</td>	<td>C254.api.telerama.fr</td></tr><tr>	<td>9</td>	<td>ABXPLORE</td>	<td>C303.api.telerama.fr</td></tr><tr>	<td>10</td>	<td>AB MOTEURS</td>	<td>abmoteurs</td></tr><tr>	<td>11</td>	<td>Action</td>	<td>C10.api.telerama.fr</td></tr><tr>	<td>12</td>	<td>Al Jazeera</td>	<td>C525.api.telerama.fr</td></tr><tr>	<td>13</td>	<td>ALTICE STUDIO</td>	<td>C2320.api.telerama.fr</td></tr><tr>	<td>14</td>	<td>Animaux</td>	<td>C12.api.telerama.fr</td></tr><tr>	<td>15</td>	<td>ARD</td>	<td>C13.api.telerama.fr</td></tr><tr>	<td>16</td>	<td>Arte</td>	<td>C111.api.telerama.fr</td></tr><tr>	<td>17</td>	<td>ATV Guyane</td>	<td>C1531.api.telerama.fr</td></tr><tr>	<td>18</td>	<td>ATV Guadeloupe</td>	<td>C1140.api.telerama.fr</td></tr><tr>	<td>19</td>	<td>ATV Martinique</td>	<td>C295.api.telerama.fr</td></tr><tr>	<td>20</td>	<td>AUTO MOTO</td>	<td>C15.api.telerama.fr</td></tr><tr>	<td>21</td>	<td>BBC 1</td>	<td>C16.api.telerama.fr</td></tr><tr>	<td>22</td>	<td>BBC 2</td>	<td>C17.api.telerama.fr</td></tr><tr>	<td>23</td>	<td>BBC Entrertainment</td>	<td>C18.api.telerama.fr</td></tr><tr>	<td>24</td>	<td>BBC World News</td>	<td>C19.api.telerama.fr</td></tr><tr>	<td>25</td>	<td>BE 1</td>	<td>C29.api.telerama.fr</td></tr><tr>	<td>26</td>	<td>Be Ciné</td>	<td>C417.api.telerama.fr</td></tr><tr>	<td>27</td>	<td>Be Séries</td>	<td>C418.api.telerama.fr</td></tr><tr>	<td>28</td>	<td>beIN SPORTS 1</td>	<td>C1290.api.telerama.fr</td></tr><tr>	<td>29</td>	<td>beIN SPORTS 2</td>	<td>C1304.api.telerama.fr</td></tr><tr>	<td>30</td>	<td>beIN SPORTS 3</td>	<td>C1335.api.telerama.fr</td></tr><tr>	<td>31</td>	<td>beIN SPORTS MAX 10</td>	<td>C1342.api.telerama.fr</td></tr><tr>	<td>32</td>	<td>beIN SPORTS MAX 4</td>	<td>C1336.api.telerama.fr</td></tr><tr>	<td>33</td>	<td>beIN SPORTS MAX 5</td>	<td>C1337.api.telerama.fr</td></tr><tr>	<td>34</td>	<td>beIN SPORTS MAX 6</td>	<td>C1338.api.telerama.fr</td></tr><tr>	<td>35</td>	<td>beIN SPORTS MAX 7</td>	<td>C1339.api.telerama.fr</td></tr><tr>	<td>36</td>	<td>beIN SPORTS MAX 8</td>	<td>C1340.api.telerama.fr</td></tr><tr>	<td>37</td>	<td>beIN SPORTS MAX 9</td>	<td>C1341.api.telerama.fr</td></tr><tr>	<td>38</td>	<td>BET</td>	<td>C1960.api.telerama.fr</td></tr><tr>	<td>39</td>	<td>BFM Buisness</td>	<td>C1073.api.telerama.fr</td></tr><tr>	<td>40</td>	<td>BFMTV</td>	<td>C481.api.telerama.fr</td></tr><tr>	<td>41</td>	<td>Bloomberg</td>	<td>C410.api.telerama.fr</td></tr><tr>	<td>42</td>	<td>Boing</td>	<td>C924.api.telerama.fr</td></tr><tr>	<td>43</td>	<td>Boomerang</td>	<td>C321.api.telerama.fr</td></tr><tr>	<td>44</td>	<td>C8</td>	<td>C445.api.telerama.fr</td></tr><tr>	<td>45</td>	<td>Canal J</td>	<td>C32.api.telerama.fr</td></tr><tr>	<td>46</td>	<td>Canal+</td>	<td>C34.api.telerama.fr</td></tr><tr>	<td>47</td>	<td>Canal+ Antilles</td>	<td>C376.api.telerama.fr</td></tr><tr>	<td>48</td>	<td>Canal+ Cinéma</td>	<td>C33.api.telerama.fr</td></tr><tr>	<td>49</td>	<td>Canal+ Décalé</td>	<td>C30.api.telerama.fr</td></tr><tr>	<td>50</td>	<td>Canal+ Family</td>	<td>C657.api.telerama.fr</td></tr><tr>	<td>51</td>	<td>Canal+ Séries</td>	<td>C1563.api.telerama.fr</td></tr><tr>	<td>52</td>	<td>Canal+ Sport</td>	<td>C35.api.telerama.fr</td></tr><tr>	<td>53</td>	<td>Cartoon Network</td>	<td>C36.api.telerama.fr</td></tr><tr>	<td>54</td>	<td>CGTN</td>	<td>C318.api.telerama.fr</td></tr><tr>	<td>55</td>	<td>Chasse et pêche</td>	<td>C38.api.telerama.fr</td></tr><tr>	<td>56</td>	<td>Chérie 25</td>	<td>C1399.api.telerama.fr</td></tr><tr>	<td>57</td>	<td>Ciné+ Classic</td>	<td>C287.api.telerama.fr</td></tr><tr>	<td>58</td>	<td>Ciné+ Classic Belgique</td>	<td>C437.api.telerama.fr</td></tr><tr>	<td>59</td>	<td>Ciné+ Club</td>	<td>C285.api.telerama.fr</td></tr><tr>	<td>60</td>	<td>Ciné+ Emotion</td>	<td>C283.api.telerama.fr</td></tr><tr>	<td>61</td>	<td>Ciné+ Famiz</td>	<td>C401.api.telerama.fr</td></tr><tr>	<td>62</td>	<td>Ciné+ Frisson</td>	<td>C284.api.telerama.fr</td></tr><tr>	<td>63</td>	<td>Ciné+ Frisson Belgique</td>	<td>C317.api.telerama.fr</td></tr><tr>	<td>64</td>	<td>Ciné+ Premier</td>	<td>C282.api.telerama.fr</td></tr><tr>	<td>65</td>	<td>Ciné+ Premier Belgique</td>	<td>C294.api.telerama.fr</td></tr><tr>	<td>66</td>	<td>Club RTL</td>	<td>C50.api.telerama.fr</td></tr><tr>	<td>67</td>	<td>CNBC Europe</td>	<td>C51.api.telerama.fr</td></tr><tr>	<td>68</td>	<td>CNEWS</td>	<td>C226.api.telerama.fr</td></tr><tr>	<td>69</td>	<td>CNN</td>	<td>C53.api.telerama.fr</td></tr><tr>	<td>70</td>	<td>Comédie+</td>	<td>C54.api.telerama.fr</td></tr><tr>	<td>71</td>	<td>Comedy Central</td>	<td>C2752.api.telerama.fr</td></tr><tr>	<td>72</td>	<td>Crime District</td>	<td>C2037.api.telerama.fr</td></tr><tr>	<td>73</td>	<td>CSTAR</td>	<td>C458.api.telerama.fr</td></tr><tr>	<td>74</td>	<td>Demain TV</td>	<td>C57.api.telerama.fr</td></tr><tr>	<td>75</td>	<td>Discovery Channel</td>	<td>C400.api.telerama.fr</td></tr><tr>	<td>76</td>	<td>Discovery Family</td>	<td>C2324.api.telerama.fr</td></tr><tr>	<td>77</td>	<td>Discovery Investigation</td>	<td>C2184.api.telerama.fr</td></tr><tr>	<td>78</td>	<td>Discovery Science</td>	<td>C1374.api.telerama.fr</td></tr><tr>	<td>79</td>	<td>Disney Channel</td>	<td>C58.api.telerama.fr</td></tr><tr>	<td>80</td>	<td>Disney Junior</td>	<td>C300.api.telerama.fr</td></tr><tr>	<td>81</td>	<td>DW English</td>	<td>C61.api.telerama.fr</td></tr><tr>	<td>82</td>	<td>E Entrertainment</td>	<td>C405.api.telerama.fr</td></tr><tr>	<td>83</td>	<td>één</td>	<td>C23.api.telerama.fr</td></tr><tr>	<td>84</td>	<td>Equidia</td>	<td>C64.api.telerama.fr</td></tr><tr>	<td>85</td>	<td>Euronews</td>	<td>C140.api.telerama.fr</td></tr><tr>	<td>86</td>	<td>Eurosport 1</td>	<td>C76.api.telerama.fr</td></tr><tr>	<td>87</td>	<td>Eurosport 2</td>	<td>C439.api.telerama.fr</td></tr><tr>	<td>88</td>	<td>France 2</td>	<td>C4.api.telerama.fr</td></tr><tr>	<td>89</td>	<td>France 24</td>	<td>C529.api.telerama.fr</td></tr><tr>	<td>90</td>	<td>France 3</td>	<td>C80.api.telerama.fr</td></tr><tr>	<td>91</td>	<td>France 4</td>	<td>C78.api.telerama.fr</td></tr><tr>	<td>92</td>	<td>France 5</td>	<td>C47.api.telerama.fr</td></tr><tr>	<td>93</td>	<td>France Info</td>	<td>C2111.api.telerama.fr</td></tr><tr>	<td>94</td>	<td>Game One</td>	<td>C87.api.telerama.fr</td></tr><tr>	<td>95</td>	<td>Golf Channel</td>	<td>C1166.api.telerama.fr</td></tr><tr>	<td>96</td>	<td>Golf+</td>	<td>C1295.api.telerama.fr</td></tr><tr>	<td>97</td>	<td>Gulli</td>	<td>C482.api.telerama.fr</td></tr><tr>	<td>98</td>	<td>Histoire</td>	<td>C88.api.telerama.fr</td></tr><tr>	<td>99</td>	<td>I24 news</td>	<td>C781.api.telerama.fr</td></tr><tr>	<td>100</td>	<td>Infosport+</td>	<td>C94.api.telerama.fr</td></tr><tr>	<td>101</td>	<td>J-One</td>	<td>C1585.api.telerama.fr</td></tr><tr>	<td>102</td>	<td>Ketnet</td>	<td>C1280.api.telerama.fr</td></tr><tr>	<td>103</td>	<td>KTO</td>	<td>C110.api.telerama.fr</td></tr><tr>	<td>104</td>	<td>La Chaine Meteo</td>	<td>C124.api.telerama.fr</td></tr><tr>	<td>105</td>	<td>La Deux</td>	<td>C187.api.telerama.fr</td></tr><tr>	<td>106</td>	<td>La Trois</td>	<td>C892.api.telerama.fr</td></tr><tr>	<td>107</td>	<td>La Une</td>	<td>C164.api.telerama.fr</td></tr><tr>	<td>108</td>	<td>LCI</td>	<td>C112.api.telerama.fr</td></tr><tr>	<td>109</td>	<td>LCP / PUBLIC SENAT</td>	<td>C234.api.telerama.fr</td></tr><tr>	<td>110</td>	<td>LEquipe 21</td>	<td>C1401.api.telerama.fr</td></tr><tr>	<td>111</td>	<td>M6</td>	<td>C118.api.telerama.fr</td></tr><tr>	<td>112</td>	<td>M6 Boutique</td>	<td>C184.api.telerama.fr</td></tr><tr>	<td>113</td>	<td>M6 Music</td>	<td>C453.api.telerama.fr</td></tr><tr>	<td>114</td>	<td>Mangas</td>	<td>C6.api.telerama.fr</td></tr><tr>	<td>115</td>	<td>MCM</td>	<td>C121.api.telerama.fr</td></tr><tr>	<td>116</td>	<td>MCM Top</td>	<td>C343.api.telerama.fr</td></tr><tr>	<td>117</td>	<td>Melody</td>	<td>C265.api.telerama.fr</td></tr><tr>	<td>118</td>	<td>MENs UP TV</td>	<td>C1452.api.telerama.fr</td></tr><tr>	<td>119</td>	<td>Mezzo</td>	<td>C125.api.telerama.fr</td></tr><tr>	<td>120</td>	<td>Mezzo Live HD</td>	<td>C907.api.telerama.fr</td></tr><tr>	<td>121</td>	<td>Mirabelle TV</td>	<td>C1045.api.telerama.fr</td></tr><tr>	<td>122</td>	<td>MTV</td>	<td>C128.api.telerama.fr</td></tr><tr>	<td>123</td>	<td>MTV Hits</td>	<td>C262.api.telerama.fr</td></tr><tr>	<td>124</td>	<td>Museum</td>	<td>C1072.api.telerama.fr</td></tr><tr>	<td>125</td>	<td>National Geographic</td>	<td>C243.api.telerama.fr</td></tr><tr>	<td>126</td>	<td>National Geographic Wild</td>	<td>C719.api.telerama.fr</td></tr><tr>	<td>127</td>	<td>Nautical Channel</td>	<td>C415.api.telerama.fr</td></tr><tr>	<td>128</td>	<td>Nickelodeon</td>	<td>C473.api.telerama.fr</td></tr><tr>	<td>129</td>	<td>Nickelodeon Junior</td>	<td>C888.api.telerama.fr</td></tr><tr>	<td>130</td>	<td>Nickelodeon Teen</td>	<td>C1746.api.telerama.fr</td></tr><tr>	<td>131</td>	<td>Nolife</td>	<td>C787.api.telerama.fr</td></tr><tr>	<td>132</td>	<td>Nollywood</td>	<td>C1461.api.telerama.fr</td></tr><tr>	<td>133</td>	<td>Nouvelle-Caledonie la 1ere</td>	<td>C240.api.telerama.fr</td></tr><tr>	<td>134</td>	<td>NRJ 12</td>	<td>C444.api.telerama.fr</td></tr><tr>	<td>135</td>	<td>NRJ Hits</td>	<td>C605.api.telerama.fr</td></tr><tr>	<td>136</td>	<td>O FIVE TV</td>	<td>ofivetv</td></tr><tr>	<td>137</td>	<td>OCS Choc</td>	<td>C732.api.telerama.fr</td></tr><tr>	<td>138</td>	<td>OCS City</td>	<td>C733.api.telerama.fr</td></tr><tr>	<td>139</td>	<td>OCS Geants</td>	<td>C734.api.telerama.fr</td></tr><tr>	<td>140</td>	<td>OCS Max</td>	<td>C730.api.telerama.fr</td></tr><tr>	<td>141</td>	<td>OLTV</td>	<td>C463.api.telerama.fr</td></tr><tr>	<td>142</td>	<td>Onzeo</td>	<td>C517.api.telerama.fr</td></tr><tr>	<td>143</td>	<td>Paramount Channel</td>	<td>C1562.api.telerama.fr</td></tr><tr>	<td>144</td>	<td>Paris Première</td>	<td>C145.api.telerama.fr</td></tr><tr>	<td>145</td>	<td>Piwi+</td>	<td>C344.api.telerama.fr</td></tr><tr>	<td>146</td>	<td>Planète+</td>	<td>C147.api.telerama.fr</td></tr><tr>	<td>147</td>	<td>Planète+ AE</td>	<td>C402.api.telerama.fr</td></tr><tr>	<td>148</td>	<td>Planète+ CI</td>	<td>C662.api.telerama.fr</td></tr><tr>	<td>149</td>	<td>Plug RTL</td>	<td>C377.api.telerama.fr</td></tr><tr>	<td>150</td>	<td>Polar+</td>	<td>C2326.api.telerama.fr</td></tr><tr>	<td>151</td>	<td>Rai Due</td>	<td>C154.api.telerama.fr</td></tr><tr>	<td>152</td>	<td>Rai Tre</td>	<td>C155.api.telerama.fr</td></tr><tr>	<td>153</td>	<td>Rai Uno</td>	<td>C156.api.telerama.fr</td></tr><tr>	<td>154</td>	<td>RFM TV</td>	<td>C241.api.telerama.fr</td></tr><tr>	<td>155</td>	<td>RMC Découverte</td>	<td>C1400.api.telerama.fr</td></tr><tr>	<td>156</td>	<td>RMC Sport 2</td>	<td>C2666.api.telerama.fr</td></tr><tr>	<td>157</td>	<td>RMC Sport Access 1</td>	<td>C2095.api.telerama.fr</td></tr><tr>	<td>158</td>	<td>RMC Sport Access 2</td>	<td>C675.api.telerama.fr</td></tr><tr>	<td>159</td>	<td>RMC Sport UHD</td>	<td>C2029.api.telerama.fr</td></tr><tr>	<td>160</td>	<td>RMC Story</td>	<td>C1402.api.telerama.fr</td></tr><tr>	<td>161</td>	<td>RSI LA 1</td>	<td>C200.api.telerama.fr</td></tr><tr>	<td>162</td>	<td>RSI LA 2</td>	<td>C201.api.telerama.fr</td></tr><tr>	<td>163</td>	<td>RTL 9</td>	<td>C115.api.telerama.fr</td></tr><tr>	<td>164</td>	<td>RTL Television</td>	<td>C166.api.telerama.fr</td></tr><tr>	<td>165</td>	<td>RTL TVI</td>	<td>C168.api.telerama.fr</td></tr><tr>	<td>166</td>	<td>RTPI</td>	<td>C169.api.telerama.fr</td></tr><tr>	<td>167</td>	<td>RTS Deux</td>	<td>C183.api.telerama.fr</td></tr><tr>	<td>168</td>	<td>RTS Un</td>	<td>C202.api.telerama.fr</td></tr><tr>	<td>169</td>	<td>Science et Vie TV</td>	<td>C63.api.telerama.fr</td></tr><tr>	<td>170</td>	<td>Seasons</td>	<td>C173.api.telerama.fr</td></tr><tr>	<td>171</td>	<td>Serie Club</td>	<td>C49.api.telerama.fr</td></tr><tr>	<td>172</td>	<td>Stingray Djazz</td>	<td>C1357.api.telerama.fr</td></tr><tr>	<td>173</td>	<td>Stingray i-concert</td>	<td>C604.api.telerama.fr</td></tr><tr>	<td>174</td>	<td>Stingray Festival</td>	<td>C2090.api.telerama.fr</td></tr><tr>	<td>175</td>	<td>Syfy</td>	<td>C479.api.telerama.fr</td></tr><tr>	<td>176</td>	<td>TCM Cinéma</td>	<td>C185.api.telerama.frL</td></tr><tr>	<td>177</td>	<td>Tele Grenoble</td>	<td>C537.api.telerama.fr</td></tr><tr>	<td>178</td>	<td>Télétoon+</td>	<td>C197.api.telerama.fr</td></tr><tr>	<td>179</td>	<td>Téva</td>	<td>C191.api.telerama.fr</td></tr><tr>	<td>180</td>	<td>TF1</td>	<td>C192.api.telerama.fr</td></tr><tr>	<td>181</td>	<td>TF1 Séries Films</td>	<td>C1404.api.telerama.fr</td></tr><tr>	<td>182</td>	<td>TFX</td>	<td>C446.api.telerama.fr</td></tr><tr>	<td>183</td>	<td>Tiji</td>	<td>C229.api.telerama.fr</td></tr><tr>	<td>184</td>	<td>TMC</td>	<td>C195.api.telerama.fr</td></tr><tr>	<td>185</td>	<td>Toonami</td>	<td>C2040.api.telerama.fr</td></tr><tr>	<td>186</td>	<td>Toute lhistoire</td>	<td>C7.api.telerama.fr</td></tr><tr>	<td>187</td>	<td>Trace Africa</td>	<td>C1179.api.telerama.fr</td></tr><tr>	<td>188</td>	<td>Trace Sport Stars</td>	<td>C1168.api.telerama.fr</td></tr><tr>	<td>189</td>	<td>Trace Urban</td>	<td>C325.api.telerama.fr</td></tr><tr>	<td>190</td>	<td>Trek</td>	<td>C1776.api.telerama.fr</td></tr><tr>	<td>191</td>	<td>TV Tours</td>	<td>C540.api.telerama.fr</td></tr><tr>	<td>192</td>	<td>TV5Monde</td>	<td>C205.api.telerama.fr</td></tr><tr>	<td>193</td>	<td>TV5Monde Europe</td>	<td>C232.api.telerama.fr</td></tr><tr>	<td>194</td>	<td>TV7 Bordeaux</td>	<td>C273.api.telerama.fr</td></tr><tr>	<td>195</td>	<td>TvBreizh</td>	<td>C225.api.telerama.fr</td></tr><tr>	<td>196</td>	<td>TVE</td>	<td>C208.api.telerama.fr</td></tr><tr>	<td>197</td>	<td>TVE 1</td>	<td>C206.api.telerama.fr</td></tr><tr>	<td>198</td>	<td>TVE 2</td>	<td>C207.api.telerama.fr</td></tr><tr>	<td>199</td>	<td>TVR Rennes 35 Bretagne</td>	<td>C539.api.telerama.fr</td></tr><tr>	<td>200</td>	<td>Ushuaïa TV</td>	<td>C451.api.telerama.fr</td></tr><tr>	<td>201</td>	<td>VH1</td>	<td>C210.api.telerama.fr</td></tr><tr>	<td>202</td>	<td>VH1 Classic</td>	<td>C690.api.telerama.fr</td></tr><tr>	<td>203</td>	<td>VOOsport World 1</td>	<td>C413.api.telerama.fr</td></tr><tr>	<td>204</td>	<td>VTM</td>	<td>C215.api.telerama.fr</td></tr><tr>	<td>205</td>	<td>W9</td>	<td>C119.api.telerama.fr</td></tr><tr>	<td>206</td>	<td>Warner TV</td>	<td>C2334.api.telerama.fr</td></tr><tr>	<td>207</td>	<td>ZDF</td>	<td>C219.api.telerama.fr</td></tr></table>								
        					</div>
							
        				</div>
						<div style="padding-bottom:15px;"> 
        				    <a class="btn btn-info w-100" href="programme-tv.php">Programme tv (Exemple utilisation API)</a>
        				</div>
				
				        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
				        <script>
        					//Gestion bouton permettant le retour en haut
        					document.addEventListener('DOMContentLoaded', function() {
        						window.onscroll = function(ev) {
        							document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
        							//PositionerCursseur(FromHour);
        						};
        					});
        					//Fin gestion bouton permettant le retour en haut 	
        				</script>
						
						
				        <div class="p-2">CONTACT : nspprod@gmail.com</div>
				        
				</center></div>
					
					<!--
        			<div class="d-pub" style="float:right; margin-top:40px; width:25%; padding:10px;  position:-webkit-sticky; position:sticky; top:20px; align-self: flex-start;">
						<div class="div-pub-item" style=""></div>
			            
						
						<div class="div-pub-item" style="margin-top:15px;"></div>
			            <div class="div-pub-item" style="margin-top:15px;"></div>
						
			        </div>
					-->
					
        		</div>
			</center>
		</div>
	</body>
</html>
