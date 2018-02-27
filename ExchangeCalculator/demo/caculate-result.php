<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
	<nav class="navbar navbar-light bg-info justify-content-between">
		<a href="index.php" class="navbar-brand" style="color: #fff;">Exchange Caldulator</a>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			</form>
	</nav>
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Result</li>
			</ol>
		</nav>
		<br>	
		<?php  
			//รับค่าจากหน้าที่แล้วมา ซึ่งส่งค่ามาเป็น post
			// $thb = $_POST['attribute name'];

			$thb = $_POST['thb'];
			$type = $_POST['type'];
			$result;
		?>

		<center>
			<?php
				echo "ค่าที่กรอกคือ : ".$thb;
				echo "<br>";
				echo "สกุลเงินที่ใช้คำนวณ : ".$type;
				echo "<br>";

				if ($type=="usd") {
					$result = $thb / 31.273;
				} elseif ($type=="jyp") {
					$result = $thb / 28.9814;
				} elseif ($type=="krw") {
					$result = $thb / 0.0293;
				} elseif ($type=="gbp") {
					$result = $thb / 43.3292;
				} elseif ($type=="eur") {
					$result = $thb / 38.2737;
				}

				//1
				echo "Result=".$result;

				//2------------------------------------------------

				// if ($type=="usd") {
				// 	$rate=0.31;
				// } elseif ($type=="jyp") {
				// 	$rate=0.22;
				// } elseif ($type=="krw") {
				// 	$rate=0.11;
				// } elseif ($type=="gbp") {
				// 	$rate=0.50;
				// } elseif ($type=="eur") {
				// 	$rate=0.41;
				// }
				// echo "Result".$thb*$rate;

				// 3------------------------------------------------

				// switch ($type) {
				// 	case 'usd':
				// 		$rate=0.31;
				// 		break;
				// 	case 'jyp':
				// 		$rate=0.22;
				// 		break;
				// 	case 'krw':
				// 		$rate=0.11;
				// 		break;
				// 	case 'gbp':
				// 		$rate=0.50;
				// 		break;
				// 	case 'eur':
				// 		$rate=0.41;
				// 		break;
					
				// 	default:
				// 		$rate=0;
				// 		break;
				// }
				// echo "Result".$thb*$rate;

				require 'connect.php';

				$sql = "INSERT INTO exch102_history(thb,calculated,currency) VALUES($thb,$result,'$type')";

				$sql_exe=$conn -> query($sql);
				// print($sql_exe);



			?>
		</center>


		<table class="table table-md table-hover table-striped thead-light">
			<thead class="thead-dark">
	 			<tr>
	  				<th scope="col">ID</th>
	   				<th scope="col">Thai Bath</th>
	   				<th scope="col">Exchage Calculator</th>
	   				<th scope="col">Date / Time</th>
	   				<th></th>
	      
	 			</tr>
	 		</thead>

			<?php
				$sql = "SELECT * FROM exch102_history ORDER BY dateRecord DESC";
				$sql_exe = $conn -> query($sql);
			?>

			<?php
				while($row=mysqli_fetch_assoc($sql_exe)){
			?>

			<tr>
				<td>		
					<?php
						echo $row['recordID'];
					?>
				</td>

				<td>		
					<?php
						echo $row['thb'];
					?>
				</td>

				<td>
					<?php 
						echo " exchage to ".$row['currency']." = ".$row['calculated']." ";					
					?>
				</td>

				<td>
					<?php 
						echo $row['dateRecord'];												
					?>
				</td>

				<td>			
					<a class="btn btn-danger" href="delete.php?id=<?php echo $row['recordID'];?>&thb=<?php echo $row['thb'];?>">Delete</a>
				</td>
		
				<?php	
					}
					echo "<br>";					
					$conn -> close();
					// $array['key/field name']							
				?>	
			</tr>
		</table>
	</div>	

</body>
</html>










