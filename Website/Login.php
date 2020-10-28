<?php
session_start();
$_SESSION["loggedin"] = "false";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
include_once "../API/Login.php";
?>
<!DOCTYPE html>
<script>
    function onload() {
        swapview("newuser");
    }
    function swapview(toswap) {
        var x = document.getElementById(toswap);
        if (x.style.display === "none") {
            //show
            x.style.display = "block";
        } else {
            //hide
            x.style.display = "none";
        }
    }

    $(document).ready(function () {
        //form selection

        //login form
        $("#login").submit(function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form
            var user = $('#user').val()
            var pass = $('#pass').val()
            //converting form data to json
            var formdata = JSON.stringify({
                "User": user,
                "Password": pass
            });
            formdata = "values=" + formdata;
            console.log(formdata);

            $.ajax({
                type: "POST",
                url: "../API/Login.php",

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
                    if(text != "loggedin"){
                        alert("Username or password was incorrect, then try again");
                    } else {
                                    
                    }

                }
            });
        });

    });



    /*
       function compare(get) {
        //sending data to api
        const form = document.getElementById(get);
        form.addEventListener('submit', function (e) {
            //stop reloading
            e.preventDefault();
            //get form data
            const formData = new FormData(this);
            //send data
            fetch('../API/Login.php', {
                method: 'post',
                body: formData
            }).then(function (response) {
                return response.text();
            }).then(function (text) {
                console.log(text);
                if(text == "up"){
                    alert("Username or Password is incorrect, please try again");
                } else {
                    window.open('Profile.php', '_self');
                }
            }).catch(function (error) {
                console.error();
            })
        })
    }

     */
</script>

<html>
<body onload="onload()">
<!-- Page Content -->
<div id="login" name="login" style="padding-left: 20px;">
    <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
        <p>Personal Data</p>
        <form id="loginform" method="post">
            <p><input style="width: 100%" class="w3-padding-16" type="text" placeholder="Username" required id="user" name="user"></p>
            <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" required id="pass" name="pass"></p>
            <p><input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" value="Login"></p>
        </form>
        <button type="submit" style="width: 100%" onclick="swapview('login'), swapview('newuser')">
            New User
        </button>
    </div>
</div>

<div id="newuser" style="padding-left: 20px;">
    <div class="w3-content w3-text-grey" id="contact">
        <p>Personal Data</p>
        <form id="newuserform">
            <p><input class="w3-padding-16" type="text" style="width: 100%" placeholder="Name" required name="Name"></p>
            <p><input class="w3-padding-16" type="text" style="width: 100%" placeholder="Email" required name="Email"></p>
            <div class="views">
                <p><input class="w3-padding-16" style="width: 95%" type="text" placeholder="Username" required name="User"></p>
                <p><input class="w3-padding-16" style="width: 95%" type="text" placeholder="Confirm Username" required name="ConUser"></p>
            </div>
            <div class="views" style="padding-left: 5%">
                <p><input class="w3-padding-16" type="password" style="width: 100%" placeholder="Password" required name="Pass"></p>
                <p><input class="w3-padding-16" type="password" style="width: 100%" placeholder="Confirm Password" required name="ConPass"></p>
            </div>
            <p>
                <button type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" onclick="compare('newuserform')">
                    <i class="fa fa-paper-plane"></i> Save Details
                </button>
            </p>
        </form>
        <button type="submit" style="width: 100%" onclick="swapview('login'), swapview('newuser')">
            Cancel
        </button>
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>