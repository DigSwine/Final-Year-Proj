<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
?>
<!DOCTYPE html>
<html>
<body>
<!-- Page Content -->
<div id="main">
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
                    <option value="low">--- Offensive Messages ---</option>
                    <option value="medium">--- Data Destruction ---</option>
                    <option value="high">--- Theft/Eavesdropping---</option>
                </select>
            </div>
            <textarea class="w3-input" id="thevirusarea" name="w3review" rows="10" cols="50"> </textarea>
        <p><input  type="button" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_use" value="Use"></p>
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
<script>
function Vspread() {
  var x = document.getElementById("VirusSpread").value;
  document.getElementById("thevirusarea").innerHTML = document.getElementById("thevirusarea").innerHTML + x;
}
function Vtrigger() {
  var x = document.getElementById("VirusTrigger").value;
  document.getElementById("thevirusarea").innerHTML = document.getElementById("thevirusarea").innerHTML + x;
}
function Vpayload() {
  var x = document.getElementById("VirusPayload").value;
  document.getElementById("thevirusarea").innerHTML = document.getElementById("thevirusarea").innerHTML + x;
}
</script>