
<?php require_once('./admin/conexiones/cnx_slider.php'); ?>
	<?php
		mysql_select_db($database_cnx_slider, $cnx_slider);
		$query_ms_slider = "SELECT * FROM personal";
		$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());

		mysql_data_seek($ms_slider, 0);
		$extraido = mysql_fetch_array($ms_slider);

		mysql_data_seek($ms_slider, 1);
		$extraido1 = mysql_fetch_array($ms_slider);

		mysql_data_seek($ms_slider, 2);
		$extraido2 = mysql_fetch_array($ms_slider);
	?>

        <div class="tabbable tabs">
		<div class="tab-content label-primary">
			<div class="tab-pane active" id="all">
				<ul class="thumbnails">
					<li class="col-sm-4 col-xs-12">
						<div class="thumbnail">
							<div class="blockDtlp">
								<a href="#" ><img class="img-responsive" src="recursos/personal/<?php echo $extraido['imagen']; ?>" id="imgpersonal"></a>
						        <h4><?php echo $extraido['nombres']; ?></h4>
						        <h5><?php echo $extraido['funciones']; ?></h5>
						        <p><?php echo $extraido['email']; ?> </p>
						       	<a class="facebook1" href="#"><img class="img-responsive" src="img/thum-f-icon.png"></a>
						        <a class="twitter1" href="#"><img class="img-responsive" src="img/thum-t-icon.png"></a>
								<a class="pin1" href="#"><img class="img-responsive" src="img/thum-g-icon.png"></a>
							</div>
						</div>
					</li>
				</ul> 						   
			</div>
		</div>
	</div>

<div class="tabbable tabs">
		<div class="tab-content label-primary">
			<div class="tab-pane active" id="all">
				<ul class="thumbnails">
					<li class="col-sm-4 col-xs-12">
						<div class="thumbnail">
							<div class="blockDtlp">
								<a href="#" ><img class="img-responsive" src="recursos/personal/<?php echo $extraido1['imagen']; ?>" id="imgpersonal"></a>
						        <h4><?php echo $extraido1['nombres']; ?></h4>
						        <h5><?php echo $extraido1['funciones']; ?></h5>
						        <p><?php echo $extraido1['email']; ?> </p>
						       	<a class="facebook1" href="#"><img class="img-responsive" src="img/thum-f-icon.png"></a>
						        <a class="twitter1" href="#"><img class="img-responsive" src="img/thum-t-icon.png"></a>
								<a class="pin1" href="#"><img class="img-responsive" src="img/thum-g-icon.png"></a>
							</div>
						</div>
					</li>
				</ul> 						   
			</div>
		</div>
	</div>


<div class="tabbable tabs">
		<div class="tab-content label-primary">
			<div class="tab-pane active" id="all">
				<ul class="thumbnails">
					<li class="col-sm-4 col-xs-12">
						<div class="thumbnail">
							<div class="blockDtlp">
								<a href="#" ><img class="img-responsive" src="recursos/personal/<?php echo $extraido2['imagen']; ?>" id="imgpersonal"></a>
						        <h4><?php echo $extraido2['nombres']; ?></h4>
						        <h5><?php echo $extraido2['funciones']; ?></h5>
						        <p><?php echo $extraido2['email']; ?> </p>
						       	<a class="facebook1" href="#"><img class="img-responsive" src="img/thum-f-icon.png"></a>
						        <a class="twitter1" href="#"><img class="img-responsive" src="img/thum-t-icon.png"></a>
								<a class="pin1" href="#"><img class="img-responsive" src="img/thum-g-icon.png"></a>
							</div>
						</div>
					</li>
				</ul> 						   
			</div>
		</div>
	</div>

<?php
	   mysql_free_result($ms_slider);
?>


	</BODY>
	</HTML>

