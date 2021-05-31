<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
?>
<!DOCTYPE html>
<script>
$(document).ready(function () {
	$("#virusform").submit(function (e) {
		e.preventDefault(); // avoid to execute the actual submit of the form
		    var vs = $('#VirusSpread').val()
            var vt = $('#VirusTrigger').val()
			var vp = $('#VirusPayload').val()
			var txt = $('#thevirusarea').val()
            //converting form data to json
            var formdata = JSON.stringify({
                "VirusSpread": vs,
                "VirusTrigger": vt, 
				"VirusPayload": vp,
				"thevirusarea": txt
            });
		formdata = "values=" + formdata;
		$test = formdata;
		console.log($test);
	});
});
</script>
<html>
<body onload="onload()";>
<!-- Page Content -->
<div id="main" name="main">
	<form id="virusform" name="virusform">
		<div class="w3-padding-16 w3-content w3-text-grey" id="contact">
				<div class="w3-padding-16">
	                <select onchange="Vspread()" style="padding-top: 10px; padding-bottom: 10px; width: 32%;" name="VirusSpread" id="VirusSpread">
						<option value="empty">--- Select Infection mechanism ---</option>
						<option value="high">--- Infected Emails ---</option>
						<option value="medium">--- Embedded Virus ---</option>
						<option value="low">--- Upload by hand ---</option>
					</select>
					<select onchange="Vtrigger()" style="padding-top: 10px; padding-bottom: 10px; width: 32%;" name="VirusTrigger" id="VirusTrigger">
	                    <option value="empty">--- Select Trigger ---</option>
						<option value="high">--- Time and Date ---</option>
						<option value="medium">--- On Click ---</option>
						<option value="low">--- Immediate ---</option>
					</select>
					<select onchange="Vpayload()" style="padding-top: 10px; padding-bottom: 10px;  width: 32%;" name="VirusPayload" id="VirusPayload">
	                    <option value="empty">--- Select Payload ---</option>
						<option value="low">--- Nothing ---</option>
						<option value="low1">--- Offensive Messages ---</option>
						<option value="medium">--- Data Destruction ---</option>
						<option value="high">--- Theft/Eavesdropping---</option>
					</select>
				</div>
				<textarea class="w3-input" style="color:white" id="thevirusarea" name="w3review" rows="10" cols="50" disabled> </textarea>
			<p><input onclick="submit()" type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_use" value="Use"></p>
		</div>
	</form>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
<script>
function Vspread() {
  var x = document.getElementById("VirusSpread").value;
	if(x == "low"){
		document.getElementById("thevirusarea").innerHTML = "d5 39 f5 f4 0a 10 7d e8 b2 83 63 c3 cc d3 bf 5c a6 4d f5 92 62 de cf d7 97 95 9a 0b b7 47 29 60 72 6d ed 62 32 03 2e 49 04 8c 0c 2a 98 83 50 28 d5 5d f4 60 11 92 57 b6 e3 ed ca 2c 01 02 9a 6f 61 6b 6a b6 54 c1 3a 25 ee df 64 ba 47 11 14 9b 38 40 3d 97 e4 e4 5d c6 cf 65 3a 9b 76 5b 5b fc ef 2e 3a 55 3b cf f2 45 1c 6d de 03 28 b2 ea 6f ";
	} else if(x == "medium"){
		document.getElementById("thevirusarea").innerHTML = "a7 2a ca fb 11 96 a5 70 30 1e 09 5a 0b 72 b4 b2 e4 9f 72 30 ad 91 d7 a4 f8 72 02 06 f1 04 59 29 50 3b 1d 4b 21 fe 94 73 85 d3 4a 44 f7 26 1a 56 a2 e7 12 bf 8d 6e c7 e0 85 44 d0 0f 80 c4 4a 2c 3c ce 15 76 e0 39 ff ae 45 57 46 eb ca 40 36 e8 48 db 5a 4f 38 66 0d 52 33 e2 a5 05 c8 23 25 46 eb e3 68 6b 9f 8a 3a 52 da 9f 0f 8b ec fc 6f 16 ";
	} else if(x == "high"){
		document.getElementById("thevirusarea").innerHTML = "61 c8 22 4c 74 13 b0 91 89 3d 17 1a 9f 40 17 93 b4 60 6c ce 9c 91 9c 76 cd df 3c 09 10 7a c0 13 cf c1 2a a2 8a f2 a3 4a 26 9c 19 fc 4d a0 85 4b 27 15 ee 4f 20 b4 7e aa b6 b3 4a 18 1b 37 3f 19 86 49 47 4a bc 2b c8 c9 20 e2 ec 27 c2 40 25 ce 70 3e 3d bd b2 5d da 5b 45 9e dc 00 ee aa 8d 9a cb 2d e0 58 ea 4e a6 3b 84 1c 0c c2 77 64 39 c8 ";	
	}
}
function Vtrigger() {
  var x = document.getElementById("VirusTrigger").value;
	if(x == "low"){
		document.getElementById("thevirusarea").innerHTML = "3c a1 61 5d f5 f1 0f 30 4e 47 e9 26 50 70 2e c9 cf 09 4e 36 38 76 23 c0 f2 bd 64 02 27 cd 07 f9 75 dc 10 23 4d 97 3d e8 f6 01 83 5a c1 1d 64 4b e4 6d ce 4a ff 60 cb f1 cf 64 7e c0 1f 30 6c 23 1a a7 ae 91 ba 11 fe 59 b8 e9 f8 61 44 7e 6c b9 9b cf 15 8f 3e 3f 0a 42 ec d5 0a 3d 2f 3b 21 e7 d8 8e 1f 8c ba f7 16 7a 33 90 a9 55 6f 33 d2 c4 ";
	} else if(x == "medium"){
		document.getElementById("thevirusarea").innerHTML = "9c d5 77 f5 ac c3 dc dd a6 1a 5f 6a 94 fb 47 58 5a 69 76 4b 09 b2 a6 29 5f c9 7a 12 74 7d 87 42 ef c5 53 63 56 fa a0 4e 07 86 86 f3 ae 5b 0f 6d 30 d0 01 e3 39 1b d9 66 a9 9d 51 dc 61 54 e9 db f0 af 55 82 5d 70 93 4f 72 e7 6a 7c b2 e6 cc 31 34 98 86 6a c5 f4 d5 6b 03 0c ff a1 a2 0d 84 7b 6e b7 a9 56 5d 13 e9 b5 d6 3f 0b 07 a0 66 95 9d ";
	} else if(x == "high"){
		document.getElementById("thevirusarea").innerHTML = "27 93 fb 6a f4 a7 ab 69 d7 31 72 20 79 78 80 a6 96 12 be 69 4f 58 fe 74 d6 ce d2 e7 59 ab 42 01 d1 10 cb 40 18 1b b0 8a cd 98 aa de 28 f9 5b f8 d7 db f4 9f 4a 10 3c 5b dd 36 2b ed 4c e2 56 aa 1a e1 97 2b 4a 6e 06 d6 23 dd 12 3b 18 3c 3b 02 df 17 68 b1 bb f5 9b ec dd 50 7e e0 e2 09 2b de 76 8e 04 99 9d 28 75 97 02 67 44 59 53 c4 e5 2c ";
	}
}
function Vpayload() {
  var x = document.getElementById("VirusPayload").value;
	if(x == "low"){
		document.getElementById("thevirusarea").innerHTML = "c6 26 8c 04 35 8f 97 d4 c4 53 be 92 30 5c 3b bd eb 59 7e bf 60 79 57 87 5f ec 82 fb eb 4f 80 5f dd f1 24 87 77 16 49 58 df 80 a5 f1 04 e7 c6 be 96 c2 1f 73 c0 47 e5 ff 2a c9 39 45 62 14 09 70 df 5f c3 ac 3a fb 1a 59 68 f1 78 98 5e 3c 42 22 01 32 34 f0 f2 4d b4 1b d8 b5 1f ed 1a 56 fb ec e2 fd e9 53 be 2b 7e 1b 0g f4 9f 4a 10 3c 5b dd 36 ";
	 } else if(x == "low1"){
		document.getElementById("thevirusarea").innerHTML = "d6 96 19 be 57 dd 9e 1c c1 cf 85 c3 d2 62 04 ae cc 1b 2b b9 18 f9 dd fc 3c 3f 68 f4 59 e5 91 99 42 bf ba 00 69 5d eb 12 23 81 15 82 cb 29 1e be 2b 7e 1b 0f 21 20 60 3c d9 2d 8f 93 7e 26 52 2a 37 60 90 0a 0d 80 25 4c 45 94 34 37 4e f5 7e c9 08 29 d4 c0 0d c8 8b c8 4b b7 76 4b 0f 75 fd d8 83 a5 67 c0 cb f1 cf 64 7e c0 1f 30 6c 23 1a a7 ";
	} else if(x == "medium"){
		document.getElementById("thevirusarea").innerHTML = "c5 6c f6 bd 09 e9 aa be c7 74 52 51 e1 a9 92 9f a5 25 0c be bf bf 3e 6f 0e da 7b 97 1e 9d b7 18 c0 0b c2 cb b5 79 22 3d 3a fd 56 46 38 c5 e5 2b 30 d6 25 b6 6 55 56 b2 ff a7 c5 3d 85 e8 a5 d3 1d 42 9b 96 f4 d4 b8 96 91 91 20 c9 dd 58 10 7a 25 75 0c 46 73 02 b9 37 82 a4 ea 5e af 22 3e 95 48 37 27 ab f9 9a 10 1d 7f 2f 37 e5 72 46 0c 6e ";
	} else if(x == "high"){
		document.getElementById("thevirusarea").innerHTML = "93 34 f2 8e 92 a0 07 84 78 79 ce f2 14 3a 69 bf 9f 19 c9 db 5c 84 08 75 ca 81 45 51 86 76 ec c9 ec ad 13 3c 7a d9 ce cd 8d ca 4c 49 3e 7d 0f 21 e3 ac 28 17 bc 1e 19 51 33 0c 95 0c 23 02 9f 7e 2c 41 b3 e8 46 f1 bd 3d 33 ed a2 06 68 e1 91 2c 53 1c 09 e4 30 62 d9 93 ae 91 ba 11 fe 59 b8 e9 f8 61 44 7e 6c b9 9b cf 15 8f 3e 3f 0a 42 ec d5 ";
	}
}
function submit(){
	var x = document.getElementById("VirusSpread").value;
	var y = document.getElementById("VirusTrigger").value;
	var z = document.getElementById("VirusPayload").value;

	var anyempty = "no";

	if(x == "empty" || y == "empty" || z == "empty"){
		alert("Please fill out all sections of the virus.")
	} else {
		var count = 0;
		if(x == "low" || y == "low" || z == "low"){
			count = count + 1;
		}
		if(x == "meduim" || y == "meduim" || z == "meduim"){
			count = count + 10;
		}
		if(x == "high" || y == "high" || z == "high"){
			count = count + 20;
		}
		//low
		if(count <= 25){
			<?php
				//$_SESSION['viruscode'] = "this is defult data but this shows that the code works";
				$_SESSION['viruspen'] = "low";
			?>
		} else 
		//meduim
		if(count > 26 && count < 34){
			$_SESSION['viruspen'] = "medium";
		} else 
		//high
		if(count > 35){
			$_SESSION['viruspen'] = "high";
		}
		<?php
			echo "console.log('found: ". $_SESSION['viruscode'] . "');";
		?>
	}
	alert("The selected virus has been saved, please enter the game to continue.")
}
function onload(){
	<?php
	if (isset($_SESSION["viruscode"])){
		$_SESSION['viruspen'] = "null";
		$_SESSION['viruscode'] = "Deafult";
		echo "console.log('" . $_SESSION['viruspen'] . "');";
		echo "console.log('" . $_SESSION['viruscode'] . "');";
	} else {
			echo "console.log('not found');";
	}	
	?>
}
</script>