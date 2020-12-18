<?php
session_start();
$_SESSION["loggedin"] = "true";
include "Addons/Navbar.php";
include_once "Addons/Sytlesheet.php";
include_once "Addons/Header.php";
include_once "LocationInfo.php";
?>
<!DOCTYPE html>
<div id="svgMap"></div>
<html>
<body>
<!-- Page Content -->
<div id="main">
    <div class="views w3-padding-16 w3-content w3-text-grey" id="gamearea" style="background-color: papayawhip; width: 800px; height: 450px">
        <img id="World_Map" src="Addons/Images/large_WorldMap.png" onmouseover="highlight(this)" onclick="mouseloc(this)" usemap="#intermap" style="height: 425px">
        <map name="intermap">
            <area shape="poly" coords="92, 100, 86, 103, 80, 98, 87, 80, 92, 77, 84, 69, 108, 47, 144, 40, 159, 35, 228, 18, 275, 17, 267, 24, 255, 25, 251, 55, 249, 89, 251, 105, 216, 116, 213, 111, 213, 107, 209, 107, 205, 110, 192, 110, 188, 112, 181, 112, 164, 104, 154, 100, 92, 101" onmouseover="locationfound('Canada')">
            <area shape="poly" coords="79, 146, 72, 138, 72, 122, 90, 103, 154, 101, 186, 115, 190, 111, 203, 113, 209, 108, 212, 109, 211, 110, 167, 150, 166, 165, 161, 166, 158, 154, 134, 154, 124, 165, 121, 166, 115, 155, 110, 155, 106, 150, 78, 147" onmouseover="locationfound('North America')">
            <area shape="poly" coords="280, 72, 268, 69, 252, 35, 256, 30, 281, 20, 335, 12, 361, 16, 356, 50, 347, 64, 280, 73" onmouseover="locationfound('Greenland')">
            <area shape="poly" coords="78, 148, 106, 151, 109, 155, 113, 155, 122, 167, 118, 173, 153, 169, 170, 172, 202, 182, 202, 190, 171, 196, 168, 212, 165, 218, 155, 222, 92, 193, 77, 169, 73, 158, 78, 147" onmouseover="locationfound('Central America')">
            <area shape="poly" coords="167, 212, 165, 220, 152, 240, 155, 258, 173, 286, 183, 292, 184, 313, 185, 352, 194, 359, 194, 369, 204, 387, 214, 392, 232, 397, 232, 390, 218, 381, 218, 356, 232, 351, 251, 310, 271, 300, 273, 276, 282, 263, 282, 252, 265, 239, 239, 233, 232, 217, 214, 208, 198, 204, 174, 202, 167, 207, 169, 212" onmouseover="locationfound('South America')">
            <area shape="poly" coords="346, 230, 322, 204, 322, 176, 347, 141, 363, 138, 374, 134, 394, 133, 394, 143, 402, 144, 418, 147, 447, 150, 452, 163, 476, 206, 496, 205, 497, 213, 465, 248, 496, 276, 485, 308, 486, 310, 436, 337, 412, 337, 394, 282, 401, 275, 400, 254, 388, 242, 381, 226, 344, 229" onmouseover="locationfound('Africa')">
            <area shape="poly" coords="359, 104, 348, 117, 349, 136, 362, 136, 387, 129, 399, 140, 404, 141, 423, 136, 429, 125, 435, 125, 433, 122, 437, 111, 448, 115, 454, 108, 457, 103, 438, 93, 435, 84, 430, 84, 427, 73, 434, 66, 426, 47, 413, 47, 381, 66, 383, 76, 386, 87, 365, 102, 358, 102, 348, 116" onmouseover="locationfound('Europe')">
            <area shape="poly" coords="478, 203, 452, 160, 448, 150, 432, 127, 438, 124, 463, 120, 468, 118, 477, 120, 480, 120, 480, 110, 488, 118, 498, 118, 499, 113, 505, 111, 513, 117, 520, 116, 525, 122, 536, 119, 549, 119, 556, 121, 544, 126, 550, 134, 541, 134, 541, 131, 536, 135, 525, 134, 518, 136, 515, 143, 522, 163, 520, 167, 515, 179, 507, 189, 504, 194, 478, 204" onmouseover="locationfound('Middle East')">
            <area shape="poly" coords="521, 167, 524, 163, 516, 145, 517, 140, 526, 136, 531, 136, 538, 134, 540, 136, 548, 135, 547, 126, 556, 121, 549, 117, 538, 117, 530, 120, 522, 114, 516, 115, 503, 110, 499, 110, 497, 118, 491, 117, 481, 111, 474, 104, 474, 96, 501, 94, 501, 89, 519, 83, 561, 98, 565, 102, 575, 95, 585, 98, 588, 93, 616, 102, 635, 99, 633, 89, 646, 89, 658, 101, 674, 104, 673, 116, 682, 117, 698, 110, 712, 117, 713, 139, 696, 150, 684, 160, 685, 183, 696, 204, 710, 227, 730, 247, 729, 264, 721, 265, 701, 259, 679, 254, 670, 258, 662, 268, 630, 265, 616, 239, 607, 220, 614, 200, 600, 190, 594, 182, 577, 199, 577, 210, 562, 218, 552, 214, 548, 186, 521, 169, 523, 163" onmouseover="locationfound('Asia')">
            <area shape="poly" coords="475, 96, 474, 105, 478, 109, 479, 118, 469, 116, 464, 117, 455, 113, 455, 106, 459, 101, 438, 91, 440, 90, 436, 83, 430, 82, 429, 72, 435, 66, 427, 46, 431, 46, 450, 52, 449, 54, 470, 49, 498, 41, 499, 48, 497, 41, 505, 42, 535, 30, 566, 31, 645, 41, 735, 53, 741, 61, 719, 98, 695, 109, 685, 115, 676, 116, 676, 106, 659, 101, 647, 89, 635, 89, 634, 98, 618, 99, 591, 92, 585, 96, 576, 95, 566, 101, 520, 83, 504, 88, 500, 93, 475, 96" onmouseover="locationfound('Russia')">
            <area shape="poly" coords="27, 84, 37, 76, 40, 63, 44, 51, 70, 44, 104, 45, 109, 47, 84, 69, 88, 79, 31, 83, 27, 83" onmouseover="locationfound('Russia')">
            <area shape="poly" coords="731, 247, 729, 263, 698, 269, 684, 272, 666, 276, 656, 290, 634, 299, 629, 321, 629, 343, 697, 354, 741, 377, 774, 366, 789, 347, 777, 325, 767, 248, 754, 240, 730, 247" onmouseover="locationfound('Australia')">
            <area shape="poly" coords="358, 97, 371, 94, 373, 91, 368, 88, 363, 78, 358, 77, 358, 83, 352, 83, 357, 88, 358, 96" onmouseover="locationfound('United Kingdom')">
        </map>
    </div>
    <div class=views" style="padding-left: 50px; padding-top: 20px; width: 300px; height: 450px; background-color: papayawhip; margin-left: 1000px">
        <p>Location Details</p>
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
    function highlight(x){
        document.getElementById("World_Map").src = "Addons/Images/large_WorldMap.png";
        changedetails("default");
    }
    function locationfound(x){
        if(x == "Canada") {
            document.getElementById("World_Map").src = "Addons/Images/Canada_Highlighted.png";
            changedetails(x);
        } else if(x == "North America") {
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
        } else {
            alert("An unmapped area has been selected");
        }
    }
    var coor = "";
    function mouseloc(){
        var x = event.clientX;     // Get the horizontal coordinate
        var y = event.clientY;     // Get the vertical coordinate

        var area = document.getElementById("World_Map").getBoundingClientRect();
        var thetop = Math.round(area.top);
        var theleft = Math.round(area.left);

        var finaltop = x - theleft;
        var finalleft = y - thetop;

        coor = coor + ", " + finaltop + ", " + finalleft;

        console.log(coor);

    }
    function changedetails(where) {
        if (where == "default") {
            document.getElementById('countryname').placeholder ="Selected Location";
            document.getElementById('numofcomps').placeholder="Computer Density";
            document.getElementById('noninfec').placeholder="Non-infected Computers";
            document.getElementById('infected').placeholder="Infected Computers";
            document.getElementById('virusprotec').placeholder="Virus Protection";
            document.getElementById('detected').placeholder="Detected";
        } else {
            //variables
            var numberofcomps = 1000;
            var infect = 50;
            var noninfecnum = numberofcomps - infect;
            var virusprotectlv = "low";
            var detec = "no";

            document.getElementById('countryname').placeholder = where;
            document.getElementById('numofcomps').placeholder = numberofcomps;
            document.getElementById('noninfec').placeholder = noninfecnum;
            document.getElementById('infected').placeholder = infect;
            document.getElementById('virusprotec').placeholder = virusprotectlv;
            document.getElementById('detected').placeholder = detec;
        }
    }
</script>