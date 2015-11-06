<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Links</title>
		<!-- Bootstrap -->
		<link href="Styles/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="Scripts/jquery-2.1.4.min.js"</script>
		<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
		<style type="text/css">
			body{
				padding-top: 15px;
				background-color: #777;
			}
			.jumbotron{
				background-color: #000;
				color: #000000;
				padding-top: 35px;
				padding-bottom: 35px;
			}

			.container .jumbotron, .container-fluid .jumbotron{

				margin-bottom: 0px;
				border-radius: 8px 8px 0px 0px;
			}
			.jumbotron + .row{
				border-radius: 0.5em;
				margin-top: 0px;
				background-color: #000;
			}
			a[href]{
				color: #000;
				text-decoration: none;
			}
			.jumbotron > .row{
				border-radius: 0.5em;
				background-color: teal;
			}
			#estadisticas{
				background-color: white;
				margin-bottom: 20px;
				border-radius: 0.5em;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-10 col-md-offset-2"><h1>Links by José María Ribas</h1></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<h3><a href="spy.php?origen=index.html&destino=http://www.google.es" target="_blank" class="btn btn-default" role="button" style="width:100%">Google</a></h3>
				</div>
				<div class="col-md-2">
					<h3><a href="spy.php?origen=index.html&destino=http://www.hotmail.com" target="_blank" class="btn btn-info" role="button" style="width:100%">Hotmail</a></h3>
				</div>
				<div class="col-md-2">
					<h3><a href="spy.php?origen=index.html&destino=http://www.youtube.com" target="_blank" class="btn btn-primary" role="button" style="width:100%">Youtube</a></h3>
				</div>
				<div class="col-md-2">
					<h3><a href="spy.php?origen=index.html&destino=http://www.hdfull.tv" target="_blank" class="btn btn-success" role="button" style="width:100%">FullHd</a></h3>
				</div>
				<div class="col-md-2">
					<h3><a href="spy.php?origen=index.html&destino=http://moodlenou.iessacolomina.es" target="_blank" class="btn btn-danger" role="button" style="width:100%">Moodle</a></h3>
				</div>
				<div class="col-md-2">
					<h3><a href="spy.php?origen=index.html&destino=http://htmlya.com.ar/" target="_blank" class="btn btn-warning" role="button" style="width:100%">Htmlya</a></h3>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-5">
						<?php
					    	if(isset($_GET['e'])){

								if($_GET['e'] == "true"){

									$self = $_SERVER['REQUEST_URI'];
									header("refresh:30; url=$self");

									echo "<h3><a href='index.php?e=false' target='_self' class='btn btn-warning' role='button' style='width:100%'>Estadisticas</a></h3>";
									echo "</div></div>";
									echo "<div class='row'>";
										echo "<div id='estadisticas' class='col-md-6 col-md-offset-3'>";

											require("estadisticas.php");
											echo "<div class='table-responsive'>";
												echo "<table class='table'>";

													echo "<tr>";
														echo "<th>Enlaces</th>";
														echo "<th>Cantidad/Total</th>";
														//echo "<th>Total</th>";
													echo "</tr>";

													while($line = mysqli_fetch_assoc($result)){

													    echo "<tr>";												    
														    foreach($line as $index => $col_value){
														    	
														    	if($index != "total"){

														        	echo "<td>$col_value</td>";
														    	}
														    }
													    echo "</tr>";
													}

													echo "<tr>";
														echo "<td></td><th>$col_value</th>";
													echo "</tr>";
												echo "</table>";
											echo "</div>";
										echo "</div>";
									echo "</div>";
								}
								else{

									echo "<h3><a href='index.php?e=true' target='_self' class='btn btn-warning' role='button' style='width:100%'>Estadisticas</a></h3>";
									echo "</div></div>";
								}	
							}
							else{

								echo "<h3><a href='index.php?e=true' target='_self' class='btn btn-warning' role='button' style='width:100%'>Estadisticas</a></h3>";
								echo "</div></div>";
							}


						?>
			</div>
		</div>
	</body>
</html>