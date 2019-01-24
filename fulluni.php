<?php $thisPage="Universities"; ?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ratemyprof/core/init.php';
include 'includes/header.php';
include 'includes/navigation.php';
?>

	<div id="fh5co-main-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Full List</h2>
				</div>
			</div>
			<?
			$loc = $_GET['loc'];
			?>
			<div class="row">
				<div class="col-md-5 col-centered-full">
						<div class="row">
							<div class="col-sm">
								<?if($loc == 'uae'){
									echo '<h3>UAE</h3>';
								} else if($loc == "leb"){
									echo '<h3>Lebanon</h3>';
								} else if($loc == "eg"){
									echo '<h3>Egypt</h3>';
								}else if($loc == "ir"){
									echo '<h3>Iran</h3>';
								}else if($loc == "ksa"){
									echo '<h3>Saudi Arabia</h3>';
								}else if($loc == "jor"){
									echo '<h3>Jordan</h3>';
								}
								$sql = "SELECT * FROM university WHERE country = '$loc' ORDER BY NAME ASC";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<?php
	include 'includes/footer.php';
	?>
