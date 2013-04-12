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

<form class="form-horizontal" name="boatInfo" method="post" action="http://www.google.de">
<!-- Container -->
		<div class="container-fluid">
						
			<!-- Content -->		
			<div id="appWrapper" align="center">
			    <br />
			    <h2>Wegpunkt</h2>
			    <br />
			    <div class="container-fluid" align="center">
	            	 
		            	<div class="row well" style="margin-left: 15%;" align="center">
		            		<div class="span4" align="center">	            		
			            		<div class="control-group">
			            			<label class="control-label">Name</label>
			            			<input class="input-medium" type="text" id="name"/>
			            		</div>
			            		<div class="control-group">
			            			<label class="control-label">Time</label>
			            			<input class="input-medium" type="date" id="wdate"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Date</label>
			            			<input class="input-medium" type="date" id="wtime"/>
			                    </div>
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">Latitude</label>
			            			<input class="input-medium" type="text" id="lat"/>
			            		</div>
			            		<div class="control-group">
			            			<label class="control-label">Longitude</label>
			            			<input class="input-medium" type="text" id="lng"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Fahrt nach</label>
			            			<select name="fahrtziel" id="marker" style="width: 165px;"></select>
			                    </div>
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">COG</label>
			            			<input class="input-medium" type="text" id="cog"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">SOG</label>
			            			<input class="input-medium" type="text" id="sog"/>
			                    </div>
			                    
			                    <div class="control-group">
			                    	<label class="control-label">Manoever</label>
			            			<select name="manoever" id="manoever" style="width: 165px;"></select>
			                    </div>                   
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">BTM</label>
			            			<input class="input-medium" type="text" id="btm"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">DTM</label>
			            			<input class="input-medium" type="text" id="dtm"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Vorsegel</label>
			            			<select name="vorsegel" id="vorsegel" style="width: 165px;"></select>
			            		</div>
		            		</div>
		            	</div>      	 
	            	</div>
	            </div>
			    <br />
			    <br />
			    <div class="container" align="center">
			    <div class="row" style="margin-left:5%;">
			        <div class="span4" id="appNotes">
			        	<h4>Notes</h4>
			            <textarea style="width:96%; height:360px;"></textarea>
			        </div>
			        <div class="span4" id="markerMap">
			        	<h4>Map</h4>
			            <img src="../img/icons/marker_map.png" id="appInfoPhoto" style="width:100%; heigt: 100%;"/>
			        </div>
			        <div class="span4" id="appPhotos">
			        	<h4>Photos</h4>
				        <img src="../img/icons/no_image.jpg" id="appInfoPhoto" style="width:100%; heigt: 100%;"/>
				    </div>
				</div>
			    </div>
				<div class="container-fluid" align="center">
						<div class="row well" style="margin-left: 5%;" align="center">
							<div class="span4">
								<div class="control-group">
									<label class="control-label">Wind Strength</label>
									<input class="input-medium" type="number" id="windStrength"/>
								</div>
								<div class="control-group">
									<label class="control-label">Wind Direction</label>
									<input class="input-medium" type="text" id="windDirection"/>
								</div>
								<div class="control-group">
									<label class="control-label">Airpressure</label>
									<input class="input-medium" type="number" id="airpressure"/>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label">Temperature</label>
									<input class="input-medium" type="number" id="temperature"/>
								</div>
								<div class="control-group">
									<label class="control-label">Clouds</label>
									<input class="input-medium" type="text" id="clouds"/>
								</div>
								<div class="control-group">
									<label class="control-label">Rain</label>
									<input class="input-medium" type="number" id="rain"/>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label">Wave Height</label>
									<input class="input-medium" type="number" id="waveHeight"/>
								</div>
								<div class="control-group">
									<label class="control-label">Wave Direction</label>
									<input class="input-medium" type="text" id="waveDirection"/>
								</div>
								<div class="control-group">
									<label class="control-label">Date and Time</label>
									<input class="input-medium" type="date" id="DatenTime"/>
								</div>
							</div>
						</div>
					<p>
						<input type="submit" name="submit" value="Send Form"/>
						<input type="reset" value="Clear Form"/>
					</p>
				</div>
			</div><!-- Content -->
			
		</div><!-- Container -->
</form>		
</body>
</html>
<?php include("header.php")?>
<?php
$hit_count = @file_get_contents('count.txt'); 
echo $hit_count; 
$hit_count++; 
@file_put_contents('count.txt', $hit_count); 
?>
<?php include("footer.php")?>
