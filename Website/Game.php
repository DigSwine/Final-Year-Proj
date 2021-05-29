<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
?>
<!DOCTYPE html>
<div id="svgMap"></div>
<html>
<body onload="clocktimer(); onload()">
<!-- Page Content -->
<div id="main">
    <div class="views w3-padding-8 w3-content w3-text-grey" id="gamearea" style="background-color: papayawhip; width: 800px; height: 450px">
        <p id="clock" style="position: absolute; padding-left: 25px"></p><br>
        <img id="World_Map" src="Addons/Images/large_WorldMap.png" onmouseover="locationfound('default')" usemap="#intermap" style="height: 425px">
        <map name="intermap">
            <area shape="poly" coords="92, 100, 86, 103, 80, 98, 87, 80, 92, 77, 84, 69, 108, 47, 144, 40, 159, 35, 228, 18, 275, 17, 267, 24, 255, 25, 251, 55, 249, 89, 251, 105, 216, 116, 213, 111, 213, 107, 209, 107, 205, 110, 192, 110, 188, 112, 181, 112, 164, 104, 154, 100, 92, 101" onmouseover="locationfound('Canada')" onclick="startarea('Canada')">
            <area shape="poly" coords="79, 146, 72, 138, 72, 122, 90, 103, 154, 101, 186, 115, 190, 111, 203, 113, 209, 108, 212, 109, 211, 110, 167, 150, 166, 165, 161, 166, 158, 154, 134, 154, 124, 165, 121, 166, 115, 155, 110, 155, 106, 150, 78, 147" onmouseover="locationfound('United States of America')" onclick="startarea('United States of America')">
            <area shape="poly" coords="280, 72, 268, 69, 252, 35, 256, 30, 281, 20, 335, 12, 361, 16, 356, 50, 347, 64, 280, 73" onmouseover="locationfound('Greenland')" onclick="startarea('Greenland')">
            <area shape="poly" coords="78, 148, 106, 151, 109, 155, 113, 155, 122, 167, 118, 173, 153, 169, 170, 172, 202, 182, 202, 190, 171, 196, 168, 212, 165, 218, 155, 222, 92, 193, 77, 169, 73, 158, 78, 147" onmouseover="locationfound('Central America')" onclick="startarea('Central America')">
            <area shape="poly" coords="167, 212, 165, 220, 152, 240, 155, 258, 173, 286, 183, 292, 184, 313, 185, 352, 194, 359, 194, 369, 204, 387, 214, 392, 232, 397, 232, 390, 218, 381, 218, 356, 232, 351, 251, 310, 271, 300, 273, 276, 282, 263, 282, 252, 265, 239, 239, 233, 232, 217, 214, 208, 198, 204, 174, 202, 167, 207, 169, 212" onmouseover="locationfound('South America')" onclick="startarea('South America')">
            <area shape="poly" coords="346, 230, 322, 204, 322, 176, 347, 141, 363, 138, 374, 134, 394, 133, 394, 143, 402, 144, 418, 147, 447, 150, 452, 163, 476, 206, 496, 205, 497, 213, 465, 248, 496, 276, 485, 308, 486, 310, 436, 337, 412, 337, 394, 282, 401, 275, 400, 254, 388, 242, 381, 226, 344, 229" onmouseover="locationfound('Africa')" onclick="startarea('Africa')">
            <area shape="poly" coords="359, 104, 348, 117, 349, 136, 362, 136, 387, 129, 399, 140, 404, 141, 423, 136, 429, 125, 435, 125, 433, 122, 437, 111, 448, 115, 454, 108, 457, 103, 438, 93, 435, 84, 430, 84, 427, 73, 434, 66, 426, 47, 413, 47, 381, 66, 383, 76, 386, 87, 365, 102, 358, 102, 348, 116" onmouseover="locationfound('Europe')" onclick="startarea('Europe')">
            <area shape="poly" coords="478, 203, 452, 160, 448, 150, 432, 127, 438, 124, 463, 120, 468, 118, 477, 120, 480, 120, 480, 110, 488, 118, 498, 118, 499, 113, 505, 111, 513, 117, 520, 116, 525, 122, 536, 119, 549, 119, 556, 121, 544, 126, 550, 134, 541, 134, 541, 131, 536, 135, 525, 134, 518, 136, 515, 143, 522, 163, 520, 167, 515, 179, 507, 189, 504, 194, 478, 204" onmouseover="locationfound('Middle East')" onclick="startarea('Middle East')">
            <area shape="poly" coords="521, 167, 524, 163, 516, 145, 517, 140, 526, 136, 531, 136, 538, 134, 540, 136, 548, 135, 547, 126, 556, 121, 549, 117, 538, 117, 530, 120, 522, 114, 516, 115, 503, 110, 499, 110, 497, 118, 491, 117, 481, 111, 474, 104, 474, 96, 501, 94, 501, 89, 519, 83, 561, 98, 565, 102, 575, 95, 585, 98, 588, 93, 616, 102, 635, 99, 633, 89, 646, 89, 658, 101, 674, 104, 673, 116, 682, 117, 698, 110, 712, 117, 713, 139, 696, 150, 684, 160, 685, 183, 696, 204, 710, 227, 730, 247, 729, 264, 721, 265, 701, 259, 679, 254, 670, 258, 662, 268, 630, 265, 616, 239, 607, 220, 614, 200, 600, 190, 594, 182, 577, 199, 577, 210, 562, 218, 552, 214, 548, 186, 521, 169, 523, 163" onmouseover="locationfound('Asia')" onclick="startarea('Asia')">
            <area shape="poly" coords="475, 96, 474, 105, 478, 109, 479, 118, 469, 116, 464, 117, 455, 113, 455, 106, 459, 101, 438, 91, 440, 90, 436, 83, 430, 82, 429, 72, 435, 66, 427, 46, 431, 46, 450, 52, 449, 54, 470, 49, 498, 41, 499, 48, 497, 41, 505, 42, 535, 30, 566, 31, 645, 41, 735, 53, 741, 61, 719, 98, 695, 109, 685, 115, 676, 116, 676, 106, 659, 101, 647, 89, 635, 89, 634, 98, 618, 99, 591, 92, 585, 96, 576, 95, 566, 101, 520, 83, 504, 88, 500, 93, 475, 96" onmouseover="locationfound('Russia')" onclick="startarea('Russia')">
            <area shape="poly" coords="27, 84, 37, 76, 40, 63, 44, 51, 70, 44, 104, 45, 109, 47, 84, 69, 88, 79, 31, 83, 27, 83" onmouseover="locationfound('Russia')" onclick="startarea('Russia')">
            <area shape="poly" coords="731, 247, 729, 263, 698, 269, 684, 272, 666, 276, 656, 290, 634, 299, 629, 321, 629, 343, 697, 354, 741, 377, 774, 366, 789, 347, 777, 325, 767, 248, 754, 240, 730, 247" onmouseover="locationfound('Australia')" onclick="startarea('Australia')">
            <area shape="poly" coords="358, 97, 371, 94, 373, 91, 368, 88, 363, 78, 358, 77, 358, 83, 352, 83, 357, 88, 358, 96" onmouseover="locationfound('United Kingdom')" onclick="startarea('United Kingdom')">
        </map>
    </div>
    <div class=views" style="padding-left: 50px; padding-top: 20px; width: 300px; height: 450px; background-color: papayawhip; margin-left: 1000px">
        <button>testing</button>
        <button>testing 2</button>
        <p>Details</p>
        <input id="countryname" class="gamedisplay" placeholder="Selected Location"><br><br>
        <input id="numofcomps" class="gamedisplay" placeholder="Computer Density"><br><br>
        <input id="noninfec" class="gamedisplay" placeholder="Non-infected Computers"><br><br>
        <input id="infected" class="gamedisplay" placeholder="Infected Computers"><br><br>
        <input id="virusprotec" class="gamedisplay" placeholder="Virus Protection"><br><br>
        <input id="detected" class="gamedisplay" placeholder="Detected">
    </div>
</div>
<?php
include_once "Addons/Footer.php";
?>
</body>
</html>
<script>
    //global variables
    var countnames = ["United States of America", "Central America", "Greenland", "Canada", "Russia", "United Kingdom", "Europe", "Africa", "Asia", "Middle East", "Australia", "South America"];
    var infectnumbs = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var isinfected = ["no", "no", "no", "no", "no", "no", "no", "no", "no", "no", "no", "no"];
    var isdetected = ["no", "no", "no", "no", "no", "no", "no", "no", "no", "no", "no", "no"];
    var totalusers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var protclv = ["unknown", "unknown", "unknown", "unknown", "unknown", "unknown", "unknown", "unknown", "unknown", "unknown", "unknown", "unknown"];
    var fullyinfected = ["no", "no", "no", "no", "no", "no", "no", "no", "no", "no", "no", "no"];
    //set variables
    function onload(){
        for(var x = 0; x <= 11; x++){
            setupgame(countnames[x]);
        }
    }
    function setupgame(where) {
        $(document).ready(function () {
            var sendloc = JSON.stringify({
                "Location": where
            });
            var senddata = "values=" + sendloc;
            $.ajax({
                type: "POST",
                url: "../API/LocationInfo.php",
                data: senddata, // send user email and serializes the form's elements.
                error: function (xhr, textStatus, error) {
                    //console.log(xhr.responseText);
                    //console.log(xhr.statusText);
                    //console.log(textStatus);
                    //console.log(error);
                    console.log("Bed Gateway");
                },
                success: function (text, status) {
                    //console.log(status);
                    console.log(text);
                    //variables
                    var holder = text.split(", ");
                    //get the current infected computers
                    var infect = 0;
                    var y = 0;
                    for (var x = 0; x <= 11; x++) {
                        if (countnames[x] == where) {
                            totalusers[x] = parseInt(holder[0]);
                            protclv[x] = holder[1];
                            y = x;
                        } else {
                        }
                    }
                }
            });
        });
    }
    //highlight an area and change the stats
    function locationfound(x){
        if(x == "Canada") {
            document.getElementById("World_Map").src = "Addons/Images/Canada_Highlighted.png";
            changedetails(x);
        } else if(x == "United States of America") {
            document.getElementById("World_Map").src = "Addons/Images/NorthAmerica_Highlighted.png";
            changedetails(x);
        } else if(x == "Greenland") {
            document.getElementById("World_Map").src = "Addons/Images/Greenland_Highlighted.png";
            changedetails(x);
        } else if(x == "Central America") {
            document.getElementById("World_Map").src = "Addons/Images/CentralAmerica_Highlighted.png";
            changedetails(x);
        } else if(x == "South America") {
            document.getElementById("World_Map").src = "Addons/Images/SouthAmerica_Highlighted.png";
            changedetails(x);
        } else if(x == "Africa") {
            document.getElementById("World_Map").src = "Addons/Images/Africa_Highlighted.png";
            changedetails(x);
        } else if(x == "Europe") {
            document.getElementById("World_Map").src = "Addons/Images/Europe_Highlighted.png";
            changedetails(x);
        } else if(x == "Middle East") {
            document.getElementById("World_Map").src = "Addons/Images/MiddleEast_Highlighted.png";
            changedetails(x);
        } else if(x == "Asia") {
            document.getElementById("World_Map").src = "Addons/Images/Asia_Highlighted.png";
            changedetails(x);
        } else if(x == "Russia") {
            document.getElementById("World_Map").src = "Addons/Images/Russia_Highlighted.png";
            changedetails(x);
        } else if(x == "United Kingdom") {
            document.getElementById("World_Map").src = "Addons/Images/UK_Highlighted.png";
            changedetails(x);
        } else if(x == "Australia") {
            document.getElementById("World_Map").src = "Addons/Images/Austrila_Highlighted.png";
            changedetails(x);
        } else if(x == "default") {
            document.getElementById("World_Map").src = "Addons/Images/large_WorldMap.png";
            changedetails("default");
        } else {
            alert("An unmapped area has been selected");
        }
    }
    //get current stats
    function changedetails(where) {
        if (where == "default") {
            document.getElementById('countryname').placeholder = "Selected Location";
            document.getElementById('numofcomps').placeholder = "Computer Density";
            document.getElementById('noninfec').placeholder = "Non-infected Computers";
            document.getElementById('infected').placeholder = "Infected Computers";
            document.getElementById('virusprotec').placeholder = "Virus Protection";
            document.getElementById('detected').placeholder = "Detected";
        } else {
            var y = 0;
            for (var x = 0; x <= 11; x++) {
                if (countnames[x] == where) {
                    y = x;
                }
            }
            var noninfecnum = totalusers[y] - infectnumbs[y];
            //fill out display box
            document.getElementById('countryname').placeholder = countnames[y];
            document.getElementById('numofcomps').placeholder = totalusers[y];
            document.getElementById('noninfec').placeholder = noninfecnum;
            document.getElementById('infected').placeholder = infectnumbs[y];
            document.getElementById('virusprotec').placeholder = protclv[y];
            document.getElementById('detected').placeholder = isdetected[y];
        }
    }
    // once a day
    function spread() {
        //for each location
        for (var x = 0; x <= 11; x++) {
            if (infectnumbs[x] >= totalusers[x]) {
                if(infectnumbs[x] != 0) {
			if(fullyinfected[x] == "no"){
                    infectnumbs[x] = totalusers[x];
                    fullyinfected[x] = "yes";
                    console.log(countnames[x], " has gone into darkness.");
			checkwin();
                }
		}
            } else {
                //average email sent by an office PC is 40 emails per day
                var todo = 400;
                for (var y = 0; y < todo; y++) {
                    //produce random security values - 1 low security, 2 medium, 3 high
                    var randomsec = Math.floor(Math.random() * 3) + 1;
                    //check the infection number hasn't gone below 0
                    if (infectnumbs[x] > 0) {
                        if (randomsec == 1) {
                            //low security - garanted infection
                            infectnumbs[x] = infectnumbs[x] + 1000;
                        } else if (randomsec == 2) {
                            //50/50 infection rate
                            var randomchance = Math.floor(Math.random() * 100) + 1;
                            if (randomchance < 49) {
                                //unlucky
                                infectnumbs[x] = infectnumbs[x] + 100;
                            } else if (randomchance > 51) {
                                //lucky
                                infectnumbs[x] = infectnumbs[x] - 1;
                            } else if (randomchance >= 49 && randomchance <= 51) {
                                //new infection to area
                                newarea();
                            }
                        } else if (randomsec == 3) {
                            infectnumbs[x] = infectnumbs[x] - 100;
                        } else {
                            alert("Unexpected value");
                        }
                    }
                }
            }
        }
    }
    //infect a new country, as the can email could go anywhere, the area does not need to be specified
    function newarea(){
        var where = Math.floor(Math.random() * 12);
        for(var x = 0; x <= 11; x++) {
            if (x == where) {
                if (infectnumbs[x] == 0) {
                    infectnumbs[x] = 1000;
                    isinfected[x] = "yes";
                }
            }
        }
    }
    //select where to start
    function startarea(where){
        var check = 0;
        for(var x = 0; x <= 11; x++) {
                //check if anywhere else has been infected
                for(var y = 0; y <= 11; y++) {
                    if (infectnumbs[y] > 0) {
                        check = check + 1;
                    }
                }
            if (countnames[x] == where) {
                if(check == 0){
                    infectnumbs[x] = 1000;
                    console.log("The virus has been deployed in: " + where);
                    startclock();
                }
            }
        }
    }

    function updatestats(){
        document.getElementById("countryname").name;


    }

    //clock
    //get current day and time
    var date = new Date();
    var day = date.getDate() - 1;
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth()+1, 0);
    var thelastdayofthemonth = lastDayOfMonth.getDate();
    function clocktimer() {
        var second = date.getSeconds();
        //see if the seconds is a mulitiple of 3
        if (second % 3 === 0) {
            if (day == thelastdayofthemonth) {
                day = 1;
                //if month is 12 add new year, and start of 1st month
                if (month == 12) {
                    month = 1;
                    year = year + 1;
                } else {
                    month = month + 1;
                }
            } else {
                day = day + 1;
            }
            //spread the virus more.
            spread();
            //update stats
            updatestats();
        }
        //change the clock timer each cycle
        const stringdate = day + " - " + month + " - " + year + " - " + second;
        document.getElementById('clock').innerHTML = stringdate;
    }
    function startclock() {
        setInterval(clocktimer, 1000);
    }
    var checker = 0;
    function checkwin(){
	checker = checker + 1;
        if(checker == 12){
            console.log("win");
        }
    }
</script>