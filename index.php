<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
	<title>รายงานสถานการณ์ โควิด-19</title>

</head>

<body>
	<?php
	//ถ้าใช้งานบน ssl หรือ HTTPS แล้วให้เอา @ ออกได้เลยจ้า เพราะตัว API Request SSL 
	@$get_data = file_get_contents('https://covid19.th-stat.com/api/open/today');
	$covid19_th = json_decode($get_data);

	//print_r ออกมาดูซะหน่อย มีอะไรบ้าง
	// echo '<pre>';
	// print_r($covid19_th);
	// echo '</pre>';

	// echo '<center><b> <a href="https://covid19.th-stat.com/api/open/today" target="_blank"> หน้าตา API Click... </a></b></center>';


	//อย่าลืมปิด print_r นะครับ จะได้แสดงออกมาสวยๆ 


	//ประกาศตัวแปรแยกเป็นแต่ละคอลัมภ์ เพื่อเอาไปใช้งาน/ตกแต่งให้สวยงามตามใจคุณ ^^
	$Confirmed = $covid19_th->Confirmed;
	$Recovered = $covid19_th->Recovered;
	$Hospitalized = $covid19_th->Hospitalized;
	$NewConfirmed = $covid19_th->NewConfirmed;
	$NewRecovered = $covid19_th->NewRecovered;
	$NewHospitalized = $covid19_th->NewHospitalized;
	$NewDeaths = $covid19_th->NewDeaths;
	$UpdateDate = $covid19_th->UpdateDate;
	$Deaths = $covid19_th->Deaths;

	//ที่มาของ API ข้อมูล 
	// https://covid19.th-stat.com/api/open/today ****เอาลิงค์นี้ไป run ครับ จะเห็นหน้าตาของข้อมูล

	//data from https://covid19.th-stat.com/

	/*  ศึกษาเรื่อง JSON PHP เพิ่มเติมได้ที่ https://www.w3schools.com/js/js_json_php.asp  */


	?>

	<!-- ส่วนนี้ก็ตกแต่งง่ายๆด้วย Bootstrap4 -->
	<div class="container">
		<div class="row">

			<div class="col col-sm-12 time1">
				<h3 style="margin-top: 30px;"> รายงานสถานการณ์ โควิด-19 </h3>
				<h5>อัพเดทข้อมูลล่าสุด :
					<?php echo  $UpdateDate; ?> </h5>
			</div>


			<div class="col-6 col-sm-3 main1">
				<div class="alert alert-info shit text-center " role="alert">
					<b> ผู้ติดเชื้อสะสม <br> <?php echo  $Confirmed; ?> </b>
					<br><br>
					<div class="alert alert-light holy text-center" role="alert">
						<b>เพิ่มขึ้น <?php echo  $NewConfirmed; ?> &nbsp <i class="fas fa-angle-double-up c1"></i> </b>
					</div>
				</div>
			</div>

			<div class="col-6 col-sm-3 main2">
				<div class="alert alert-success shit text-center" role="alert">
					<b>หายแล้ว <br> <?php echo  $Recovered; ?> </b>
					<br><br><br><br><br>
					<div class="alert alert-light holy text-center" role="alert">
						<b>เพิ่มขึ้น <?php echo  $NewRecovered; ?> &nbsp <i class="fas fa-angle-double-up c2"></i> </b>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-3 main3">
				<div class="alert alert-warning shit text-center" role="alert">
					<b>รักษาอยู่ใน รพ. <br> <?php echo  $Hospitalized; ?> </b>
					<br><br>
					<div class="alert alert-light holy text-center" role="alert">
						<b>เพิ่มขึ้น <?php echo  $NewHospitalized; ?> &nbsp <i class="fas fa-bars c3"></i> </b>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-3 main4">
				<div class="alert alert-dark shit text-center" role="alert">
					<b>เสียชีวิต <br> <?php echo  $Deaths; ?> </b>
					<br><br><br><br><br>
					<div class="alert alert-light holy text-center" role="alert">
						<b>เพิ่มขึ้น <?php echo  $NewDeaths; ?> &nbsp <i class="fas fa-bars c4"></i> </b>
					</div>
				</div>
			</div>

		</div>
	</div>



</body>

</html>