<?php 
session_start();
	include("homeheader.php");
	include("nav.php");
 ?>
<link rel="stylesheet" href="layout.css" />
<title>LAYOUT PAGE</title>
<script src="layout.js" type="text/javascript"></script>
<body>
<div id="box">
	<h1 id="parktext">PARKING AREA</h1>
	<div id="parkingarea">
		<div id="parking1">
			<div id="car1" onclick="red1_1()" ondblclick="red1()">
				<label id="text1" class="spacetext">1</label>
			</div>

			<div id="car2" onclick="red2_2()" ondblclick="red2()">
				<label id="text2" class="spacetext">2</label>
			</div>

			<div id="car3" onclick="red3_3()" ondblclick="red3()">
				<label id="text3" class="spacetext">3</label>
			</div>

			<div id="car4" onclick="red4_4()" ondblclick="red4()">
				<label id="text4" class="spacetext">4</label>
			</div>

			<div id="car5" onclick="red5_5()" ondblclick="red5()"> 
				<label id="text5" class="spacetext">5</label>
			</div>
		</div>
	<!-- END OF PARKING AREA 1 -->

		<div id="parking2">
			<div id="car6" onclick="red6_6()" ondblclick="red6()">
				<label id="text6" class="spacetext">6</label>
			</div>

			<div id="car7" onclick="red7_7()" ondblclick="red7()">
				<label id="text7" class="spacetext">7</label>
			</div>

			<div id="car8" onclick="red8_8()" ondblclick="red8()">
				<label id="text8" class="spacetext">8</label>
			</div>

			<div id="car9" onclick="red9_9()" ondblclick="red9()">
				<label id="text9" class="spacetext">9</label>
			</div>

			<div id="car10" onclick="red10_10()" ondblclick="red10()">
				<label id="text10" class="spacetext">10</label>
			</div>
		</div>
		<!-- END OF PARKING AREA 2 -->
		<div id="parking3">
			<div id="car11" onclick="red11_11()" ondblclick="red11()">
				<label id="text11" class="spacetext">11</label>
			</div>

			<div id="car12" onclick="red12_12()" ondblclick="red12()">
				<label id="text12" class="spacetext">12</label>
			</div>

			<div id="car13" onclick="red13_13()" ondblclick="red13()">
				<label id="text13" class="spacetext">13</label>
			</div>

			<div id="car14" onclick="red14_14()" ondblclick="red14()">
				<label id="text14" class="spacetext">14</label>
			</div>

			<div id="car15" onclick="red15_15()" ondblclick="red15()">
				<label id="text15" class="spacetext">15</label>
			</div>

			<div id="car16" onclick="red16_16()" ondblclick="red16()">
				<label id="text16" class="spacetext">16</label>
			</div>
		</div>
	<img src="images/CarParkingSign.png" id="carsign" alt="CAR PARKING">
	<br>
	<a href="file.php"><img src="images/continue.png" id="continue" alt="VIEW PAGE"></a>
	</div>
		
</div>
</body>