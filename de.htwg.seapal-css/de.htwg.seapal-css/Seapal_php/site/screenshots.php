<!DOCTYPE HTML>

<html lang="de">
  	<head>
  	
		<!-- Meta Informations -->
		<meta charset="utf-8">
		<meta http-equiv='content-type' content='text/html; charset=utf-8'/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name='keywords' content='sailing, app, navigation, sea map, boat, skipper'/>
		<meta name='description' content='SeaPal is a mobile app for sailors to do navigation, tracking and more.'/>
		<meta name="author" content="Prof. Dr. Marko Boger, Dominic Eschbach und Timo Partl">
		<title>Seapal</title>
		
		<!-- Favicon -->
		<link rel='icon' type='image/png' href='../img/icons/seapal_normal.png'/>
		
		<!-- Font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>  
		
		<!-- Styles -->
		<link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="../css/bootstrap/layout.css" rel="stylesheet">
		<link href="../css/bootstrap/bootstrap-responsive.css" rel="stylesheet">

	  	
  	</head>
  	<body>

		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top" id="navigation">
			<div class="navbar-inner" id="navigation">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="margin-top:25px; margin-right:20px;">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="index.php">
						<img src='../img/icons/seapal_normal.png' alt='Icon-Small-50' width='50' height='50' style="float: left; padding-top: 5px; padding-left: 20px"/>
						<h2 style="float: left; padding-left:10px; margin-right:100px; font-weight: normal;">Seapal</h2>
					</a>
					<div class="nav-collapse collapse">
						<ul class="nav nav-pills" style="padding-left:0px; padding-top: 24px; font-size: 18px;">
							<li class="active"><a href='index.php'>Home</a></li>
							<li><a href='app_waypoint.php'>App</a></li>
							<li><a href='userguide.php'>User Guide</a></li>
							<li><a href='screenshots.php'>Screenshots</a></li>
							<li><a href='about.php'>About</a></li>
							<li><a href='contact.php'>Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


    	<!-- Container -->
    	<div class="container">
	    	<div class="container-fluid">
		    	<div class="row-fluid">
		    	
		    		<!-- Sidebar -->
			    	<div class="span3">
				    	<div class="sidebar-nav affix-top">
					    	<ul class="nav nav-list bs-docs-sidenav affix" id="sidebar">
						    	<li class="sidebar"><a href="#" class="ipad">iPad</a></li>
						    	<li class="sidebar"><a href="#" class="tools">Tools</a></li>
						    	<li class="sidebar"><a href="#" class="inplace">In-Place-Tools</a></li>
						    	<li class="sidebar"><a href="#" class="iphone">iPhone</a></li>
					        </ul>
					    </div>
					</div><!-- Sidebar -->

					<!-- Content -->
					<div class="span9">
	    				<div>
							<div class="post" id="ipad">
				      			<h2>SeaPal on the iPad</h2>
				      			<div class="entry">
									<figure>
										<img src="../img/screenshots//SeaPal-InitialPosition.jpg" class="img-rounded" alt="SeaPal-InitialPosition" width="580" height="435"/>
										<figcaption>Map view with current position, initial view.</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-Gothenborg-Menu.jpg" class="img-rounded" alt="SeaPal-Gothenborg-Menu" width="580" height="435"/>
										<figcaption>Menu selected.</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-Gothenborg-Tools.jpg" class="img-rounded" alt="SeaPal-Gothenborg-Tools" width="580" height="435">
										<figcaption>Tools selected.</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-Gothenborg-OSM.jpg" class="img-rounded" alt="SeaPal-Gothenborg-OSM" width="580" height="435">
										<figcaption>Map view with OpenSeaMap showing Gothenburg.</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-SatelliteView.jpg" class="img-rounded" alt="SeaPal-SatelliteView" width="580" height="435"/>
										<figcaption>Satellite view</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-Satellite-Closeup.jpg" class="img-rounded" alt="SeaPal-Satellite-Closeup" width="580" height="435">
										<figcaption>Satellite view - Close-up.</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-Southampton-OSM.jpg" class="img-rounded" alt="SeaPal-Southampton-OSM" width="580" height="435"/>
										<figcaption>Map view with OpenSeaMap showing Southampton.</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-Konstanz-IBN.jpg" class="img-rounded" alt="SeaPal-Konstanz-IBN" width="580" height="435"/>
										<figcaption>Offline map from IBN</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-POI-Search.jpg" class="img-rounded" alt="SeaPal-POI-Search" width="435" height="580">
										<figcaption>Searching for Points of Interest</figcaption>
									</figure>
									<br>
									<figure>
										<img src="../img/screenshots//SeaPal-POI-Harborinfo.jpg" class="img-rounded" alt="SeaPal-POI-Harborinfo" width="435" height="580">
										<figcaption>Points of Interest: Info for a Harbour</figcaption>
									</figure>						 
								</div>
				      		</div>
						</div>
						<div id="tools">
							<br><br>
							<h2 >SeaPal Tools</h2>
							<div class="entry">
								<figure>
									<img src="../img/screenshots//SeaPal-RouteTool.jpg" class="img-rounded" alt="SeaPal-RouteTool" width="580" height="435">
									<figcaption>The Route Tool - Melbourne to Sydney. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-RouteTool-OSM.jpg" class="img-rounded" alt="SeaPal-RouteTool-OSM" width="580" height="435">
									<figcaption>The Route Tool - Close-up in Sydney. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-DistanceTool.jpg" class="img-rounded" alt="SeaPal-DistanceTool" width="580" height="435">
									<figcaption>The Distance Tool - Miami to Montego Bay is about 755 nm. </figcaption>
								</figure>
							</div>
						</div>
						<div class="post" id="inplace">
							<br><br>
							<h2>SeaPal In-Place-Tools</h2>
							<div class="entry">
								<figure>
									<img src="../img/screenshots//SeaPal-Longtouch.jpg" class="img-rounded" alt="SeaPal-Longtouch" width="580" height="435">
									<figcaption>A Longtouch brings up bearing and distance to that point from the current position.</figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-InPlace-Tools.jpg" class="img-rounded" alt="SeaPal-InPlace-Tools" width="580" height="435">
									<figcaption>Another touch brings up a menu for in-place tools. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-Mark.jpg" class="img-rounded" alt="SeaPal-Mark" width="580" height="435">
									<figcaption>This allows quick creation of Marks, for example. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-InPlace-Tools.jpg" class="img-rounded" alt="SeaPal-InPlace-Tools" width="580" height="435">
									<figcaption>Marks again have a context menu. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-Target.jpg" class="img-rounded" alt="SeaPal-Target" width="580" height="435">
									<figcaption>Marks can be made the target, bearing and distance are displayed at the top. </figcaption>
								</figure>	
							</div>
						</div>
						<div class="post" id="logbook">
							<br><br>
							<h2>SeaPal Logbook and Tracking</h2>
							<div class="entry">
								<figure>
									<img src="../img/screenshots//SeaPal-Tracking.jpg" class="img-rounded" alt="SeaPal-Tracking" width="580" height="435">
									<figcaption>The Tracking Tool. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-Boat.jpg" class="img-rounded" alt="SeaPal-Boat" width="580" height="435">
									<figcaption>The Logbook view with Boat info. </figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-Logbook.jpg" class="img-rounded" alt="SeaPal-Logbook" width="580" height="435">
									<figcaption>The Logbook view for a Trip. </figcaption>
								</figure> 
							</div>
						</div>
						<div class="post" id="iphone">
							<br><br>
							<h2>SeaPal on the iPhone</h2>
							<div class="entry">
								<figure>
									<img src="../img/screenshots//SeaPal-iPhone-LaCoruna.jpg" class="img-rounded" alt="SeaPal-iPhone-LaCoruna" width="218" height="292">
									<figcaption>SeaPal on the iPhone - horizontal</figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-iPhone-wide.jpg" class="img-rounded" alt="SeaPal-iPhone-wide" width="292" height="218">
									<figcaption>SeaPal on the iPhone - vertical</figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-iPhone-Tools.jpg" class="img-rounded" alt="SeaPal-iPhone-Tools" width="218" height="292">
									<figcaption>SeaPal on the iPhone - Tools</figcaption>
								</figure>
								<br>
								<figure>
									<img src="../img/screenshots//SeaPal-iPhone-Menu.jpg" class="img-rounded" alt="SeaPal-iPhone-Menu" width="218" height="292">
									<figcaption>SeaPal on the iPhone - Tools</figcaption>
								</figure>
								<br><br>
							</div>
						</div>
			      	</div><!-- Content -->

				</div>
			</div>	
		</div><!-- Container -->

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<br>
				<div class="span4">
					<h4>Where to get Seapal</h4>
					<p>
						Seapal is available in the following stores.
					</p>
					<div>
						<a href="http://itunes.apple.com/us/app/seapal/id561903907?mt=8&amp;uo=4" target="itunes_store"><img src="../img/icons/seapal_normal.png" alt="Icon-Small-50" width="50" height="50"> iPad App Store</a></li>
						<br>
						<br>
						<a href="http://itunes.apple.com/us/app/seapal/id561903907?mt=8&amp;uo=4" target="itunes_store"><img src="../img/icons/seapal_normal.png" alt="Icon-Small-50" width="50" height="50"> iPhone App Store</a></li>		
					</div>
				</div>
				<div class="span4">
					<h4>Help us promote SeaPal</h4>
					<div style="height: 131px; width: 300px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial;" id="___plus_0"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 131px; " tabindex="0" vspace="0" width="100%" id="I0_1356941711310" name="I0_1356941711310" src="https://plusone.google.com/u/0/_/pages/badge?bsv&amp;rel=publisher&amp;hl=en-US&amp;origin=http%3A%2F%2Fseapal.info&amp;url=http%3A%2F%2Fplus.google.com%2F100825752167882077539&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.de.f1WRxP0Oh4Y.O%2Fm%3D__features__%2Fam%3DiQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTMT8TDsRgVQeBTUMugU-bYVVfOduQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Conauth%2Conload&amp;id=I0_1356941711310&amp;parent=http%3A%2F%2Fseapal.info" allowtransparency="true" title="Google+ Badge"></iframe>
					</div>
					<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="http://www.SeaPal.info" data-send="true" data-width="300" data-show-faces="true" fb-xfbml-state="rendered"><span style="height: 28px; width: 300px; "><iframe id="f179f2c544" name="f324c881c8" scrolling="no" style="border: none; overflow: hidden; height: 28px; width: 300px; " title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.html?api_key=&amp;locale=en_US&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.html%3Fversion%3D18%23cb%3Dfaf249d74%26origin%3Dhttp%253A%252F%252Fseapal.info%252Ff395176298%26domain%3Dseapal.info%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fwww.SeaPal.info&amp;node_type=link&amp;width=300&amp;layout=standard&amp;colorscheme=light&amp;show_faces=true&amp;send=true&amp;extended_social_context=false"></iframe></span>
					</div>
					<div>
					<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1355514129.html#_=1356941711205&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fseapal.info%2F&amp;size=m&amp;text=SeaPal&amp;url=http%3A%2F%2Fseapal.info%2F" class="twitter-share-button twitter-count-horizontal" style="width: 107px; height: 20px; " title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
					</div>
				</div>
				<div class="span4">
					<h4>Further Informations</h4>
					<p>
						SeaPal is a cooperation that is open for participation. If you have ideas for extensions or want to provide content, please send us a message.
					</p>
					<ul class="list-style2" style="list-style:none; margin-left:0px;">
						<li class="first"><a href="impressum.html">Impressum</a></li>
						<li><a href="legal.html">Legal notice</a></li>
					</ul>
				</div>
			</div>
			<div class="container" align="center">
				<br>
				<p>&copy; 2012 IBN Verlag</p>
			</div>
		</footer>
  </body>
<?php include('header.php')?>
<?php
$hit_count = @file_get_contents('count.txt'); 
echo $hit_count; 
$hit_count++; 
@file_put_contents('count.txt', $hit_count); 
?>
<?php include('footer.php')?>
