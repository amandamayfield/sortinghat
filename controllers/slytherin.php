<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<div class="Sbackground">
	<header>
		<h1>Slytherin</h1>
	</header>
	<div class="Stext">
		<?php
			$houseId = $_GET['Id'];
			$result = listHouse($houseId);
			if ($result) {
				while ($row = mysqli_fetch_array($result)) {
					echo "<p class=\"founder\">Founded by ".$row['founder']."</p>";
					echo "<p class=\"quote\">".$row['quote']."</p>";
				}
			}
		?>
	</div>
	<div class="Sreturn">
		<a href="index.php">Return to the Great Hall</a>
	</div>
</div>