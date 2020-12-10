<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
?>
<script type="text/javascript">
    function onload(){
        <?php
            $user = $_SESSION["Member_Name"];
            $email = $_SESSION["Member_Email"];
        ?>
        document.getElementById("Name").value = "<?php echo $user ?>";
        document.getElementById("Email").value = "<?php echo $email; ?>";
    }

    $(document).ready(function () {
        //form selection
        //login form
        $("#details").submit(function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form
            var name = $('#Name').val()
            var email = $('#Email').val()
            //converting form data to json
            var formdata = JSON.stringify({
                "Name": name,
                "Email": email
            });
            formdata = "values=" + formdata;
            console.log(formdata);
            $.ajax({
                type: "POST",
                url: "../API/EditUser.php",
                data: formdata, // send user email and serializes the form's elements.
                error: function (xhr, textStatus, error) {
                    console.log(xhr.responseText);
                    console.log(xhr.statusText);
                    console.log(textStatus);
                    console.log(error);
                },
                success: function (text, status) {
                    console.log(status);
                    console.log(text);
                    alert("Updates have been made on your account");
                    window.open("Profile.php", "_self");
                }
            });
        });
    });
</script>
<!DOCTYPE html>
<html>
<body onload="onload()">
<!-- Page Content -->
<div id="main">
    <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
        <p>Personal Data</p>
        <form id="details">
            <p><input class="w3-input w3-padding-16" type="text" required name="Name" id="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email" id="Email"></p>
            <p><input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_save" value="Save"></p>
        </form>
        <p><input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 49%" id="btn_save" value="Save">
        <input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 49%; float: right" id="btn_del" value="Delete Account"></p>
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
