<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 	<link rel="stylesheet" href="dist/css/bootstrap-select.css">


</head>
<body>
	<style>
		.jyp {
			background-image:url(cur/jyp.png);
			width:45px;
			height:23px;
			}
			
		.gbp {
			background-image:url(cur/uk.png);
			width:45px;
			height:23px;
			}

		.usd {
			background-image:url(cur/mus.png);
			width:45px;
			height:23px;
			}

		.euro {
			background-image:url(cur/eu.png);
			width:45px;
			height:23px;
			}

		.krw {
			background-image:url(cur/krw.png);
			width:45px;
			height:23px;
			}

	  </style>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  <script src="dist/js/bootstrap-select.js"></script>

	<nav class="navbar navbar-light bg-info justify-content-between">
		<a href="index.php" class="navbar-brand" style="color: #fff;">Exchange Caldulator</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		</form>
	</nav>


	<center>

		<div class="container">
			<div class="col-md-6 col-md-offset-3" style="padding: 50px; border: 3px solid #ccc; border-radius: 10px; " >
				<form action="caculate-result.php" method="POST"> 
					<h3>คำนวณอัตราแลกเปลี่ยน</h3><br>

					<label>จำนวนเงินไทย</label><br>
					<input class="form-control" type="number" min="0" name="thb" placeholder="กรุณาใส่ตัวเลข">
					<br><br>

					<label>สกุลเงินที่ต้องการคำนวณ</label>
					<br>
					<select class="selectpicker" name="type">
						<option value="usd" data-icon="usd">  USD</option>
						<option value="jyp" data-icon="jyp">  JYP</option>
						<option value="krw" data-icon="krw">  KRW</option>
						<option value="gbp" data-icon="gbp">  GBP</option>
						<option value="eur" data-icon="euro" >  EUR</option>
					</select>

					<br><br>
					<button type="submit" class="btn btn-success ">Caculate</button>
					
				</form>
			</div>

			
		</div>
	</center>
	

</body>
</html>