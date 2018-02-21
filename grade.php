

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap2/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap2/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap2/js/bootstrap.min.js"></script>
	<title>Our grading</title>
	<style type="text/css">
	body{
		text-align: center;
	}
</style>
</head>
<div class="well well-lg">
	<body>
		GAUGE YOUR PERFORMANCE HERE:
		<div class="col-sm-4">
			<form method="GET">
				Maths<br>
				<input type="number" name="Maths">
				<br>
				English<br>
				<input type="number" name="Eng">
				<br>
				Kiswahili<br>
				<input type="number" name="Kiswa">
				<br>
				Chemistry<br>
				<input type="number" name="Chem">
				<br>
				Biology<br>
				<input type="number" name="Bio">
				<br>
				Geography<br>
				<input type="number" name="Geo">
				<br>
				Computer<br>
				<input type="number" name="Comp">
				<br><br>
				<button class="btn btn-success">calculate</button>

			</div>
		</div>
		<?php 

		$c=$_GET['Maths'];
		$l=$_GET['Eng'];
		$a=$_GET['Kiswa'];
		$i=$_GET['Chem'];
		$r=$_GET['Bio'];
		$e=$_GET['Geo'];
		$j=$_GET['Comp'];

		$total=$c+$l+$a+$i+$r+$e+$j;
		$average=$total/7;
		print"$average";

echo "<br>";
		if ($average>=80) {
		# code...
			echo "A";
		} elseif ($average>=70) {
		# code...
			echo "B";
		} elseif ($average>=60) {
		# code...
			echo "C";
		} elseif ($average>=50) {
		# code...
			echo "D";
		} elseif ($average>=40) {
		# code...
			echo "E";
		} else{
		#code...
			echo "DROP OUT";
		}

		?>

	</form>


	
</body>
</html>