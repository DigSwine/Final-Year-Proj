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
                <select class="w3-input" name="dropcomplexity" id="dropcomplexity">
                    <option value="empty">--- Select Virus Complexity ---</option>
                    <option value="Simple">Simple</option>
                    <option value="Normal">Normal</option>
                    <option value="Complex">Complex</option>
                    <option value="Polymorphic">Polymorphic</option>
                </select>
            </div>
            <textarea class="w3-input" id="thevirusarea
" name="w3review" rows="10" cols="50">
            </textarea>
            <p><input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_use" value="Use"></p>
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>