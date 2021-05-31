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
    function Validate(){
        var email = document.getElementById("Email").value;
        var parts = email.split("@");
        var part1 = parts[0];
        var part2 = parts[1];
        if(part2 != "students.plymouth.ac.uk"){
            if(part2 != "plymouth.ac.uk"){
                alert("please use a plymouth university email address");
                console.log(email + " : " + part1 + " : " + part2);
            } else {
                sendnew();
            }
        } else {
            sendnew();
    }

    function sendnew(){
        console.log("user being created");
            //New User form
            $("#newuserform").submit(function (e) {
            console.log("here");
                var name = $('#Name').val()
                var email = $('#Email').val()
                var user = $('#newUser').val()
                var conuser = $('#ConUser').val()
                var pass = $('#newPass').val()
                var conpass = $('#ConPass').val()
                //converting form data to json
                var formdata = JSON.stringify({
                    "Name": name,
                    "Email": email,
                    "User": user,
                    "ConUser": conuser,
                    "Password": pass,
                    "ConPass": conpass
                });
                formdata = "values=" + formdata;
                console.log(formdata);
                $.ajax({
                    type: "POST",
                    url: "../API/NewUser.php",
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
                        if (text != "sentdata") {
                            alert("Username is in use, please try again");
                        } else {
                            alert("User has been created. Please login to continue");
                            window.open("Login.php", "_self");
                        }
                    }
                });
            });
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
                    if (text != "loggedin") {
                        alert("Username or password was incorrect, please try again");
                    } else {
                        window.open("Profile.php", "_self");
                    }
                }
            });
        });
        });

        
</script>

<html>
<body onload="onload()">
<!-- Page Content -->
<div id="login" name="login" style="padding-left: 20px;">
    <div class="w3-content w3-text-grey" id="contact">
        <p style="color: LemonChiffon">Login Details</p>
        <form id="loginform">
            <p><input style="width: 100%" class="w3-padding-16" type="text" placeholder="Username" required id="user" name="user"></p>
            <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" required id="pass" name="pass"></p>
            <p><input  type="submit" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_log" value="Login"></p>
        </form>
        <button type="submit" style="width: 100%" onclick="swapview('login'), swapview('newuser')">
            New User
        </button>
    </div>
</div>

<div id="newuser" style="padding-left: 20px;">
    <div class="w3-content w3-text-grey" id="contact">
        <p style="color: LemonChiffon">New User Information</p>
        <form id="newuserform">
            <p><input class="w3-padding-16" type="text" style="width: 100%" placeholder="Name" required id="Name" name="Name"></p>
            <p><input class="w3-padding-16" type="text" style="width: 100%" placeholder="Email" required id="Email" name="Email"></p>
            <p><input class="w3-padding-16" style="width: 100%" type="text" placeholder="Username" required id="newUser" name="newUser"></p>
            <p><input class="w3-padding-16" style="width: 100%" type="text" placeholder="Confirm Username" id="ConUser" required name="ConUser"></p>
            <p><input class="w3-padding-16" type="password" style="width: 100%" placeholder="Password" required id="newPass" name="newPass"></p>
            <p><input class="w3-padding-16" type="password" style="width: 100%" placeholder="Confirm Password" required id="ConPass" name="ConPass"></p>
            <p><input  type="submit" onclick="Validate()" style="padding-top: 10px; padding-bottom: 10px; width: 100%" id="btn_new" value="Create New User"></p>
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