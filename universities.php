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
					<h2>List of Universities</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-5 col-centered">
						<div class="row">
							<div class="col-sm">
								<h3>UAE</h3>
								<?php
								$sql = "SELECT * FROM university WHERE country = 'uae' ORDER BY NAME ASC LIMIT 15";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
									<a href="fulluni.php?loc=uae"><b>See full list...</b></a>
								</ul>
							</div>
						</div>
				</div>

				<div class="col-md-5 col-centered">
						<div class="row">
							<div class="col-sm">
								<h3>Lebanon</h3>
								<?php
								$sql = "SELECT * FROM university WHERE country = 'leb' ORDER BY NAME ASC LIMIT 15";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
									<a href="fulluni.php?loc=leb"><b>See full list...</b></a>
								</ul>
							</div>
						</div>
				</div>

				<div class="col-md-5 col-centered">
						<div class="row">
							<div class="col-sm">
								<h3>Egypt</h3>
								<?php
								$sql = "SELECT * FROM university WHERE country = 'eg' ORDER BY NAME ASC LIMIT 15";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
									<a href="fulluni.php?loc=eg"><b>See full list...</b></a>
								</ul>
							</div>
						</div>
				</div>

				<div class="row">
				<div class="col-md-5 col-centered">
						<div class="row">
							<div class="col-sm">
								<h3>Jordan</h3>
								<?php
								$sql = "SELECT * FROM university WHERE country = 'jor' ORDER BY NAME ASC LIMIT 15";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
									<a href="fulluni.php?loc=jor"><b>See full list...</b></a>
								</ul>
							</div>
						</div>
				</div>

				<div class="col-md-5 col-centered">
						<div class="row">
							<div class="col-sm">
								<h3>Iran</h3>
								<?php
								$sql = "SELECT * FROM university WHERE country = 'ir' ORDER BY NAME ASC LIMIT 15";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
									<a href="fulluni.php?loc=ir"><b>See full list...</b></a>
								</ul>
							</div>
						</div>
				</div>

				<div class="col-md-5 col-centered">
						<div class="row">
							<div class="col-sm">
								<h3>Saudi Arabia</h3>
								<?php
								$sql = "SELECT * FROM university WHERE country = 'ksa' ORDER BY NAME ASC LIMIT 15";
								$pquery = $db->query($sql);
								?>
								<ul>
									<?php while($uni = mysqli_fetch_assoc($pquery)) : ?>
									<li><a href="#"><?php echo $uni['name']?></a></li>
									<?php endwhile;?>
									<a href="fulluni.php?loc=ksa"><b>See full list...</b></a>
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
