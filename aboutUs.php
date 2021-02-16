<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="css/aboutUs.css">
    <script type="text/javascript" src="js/aboutus.js"></script>
</head>
<body>
<div class="full">
        <div id="about">
            <div class="txt">
                <h1>About Our Team</h1>
                <h4>This is TheFurniturePoint.com</h4>
                <p id="underline"></p>
            </div>
        </div>
    <div class="edi">
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="image/nelkin1.jpeg" alt="Avatar" style="width:100%">
                <div class="container">
                    <div id="n1"><b> </b></div>
                    <div id="r1"></div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/viren.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <div id="n2"><b> </b></div>
                    <div id="r2"></div>
                </div>
            </div>
        </div>

            <div class="column">
                <div class="card">
                    <img src="image/amit.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <div id="n3"><b> </b></div>
                        <div id="r3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- new part -->
    <div>

        <button id="con" type="button" onclick="loadDoc()">CONTACT INFO</button>
        <br><br>
        <table id="tab"></table>

        <script>
        function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              myFunction(this);
            }
          };
          xhttp.open("GET", "aboutus.xml", true);
          xhttp.send();
        }
        function myFunction(xml) {
          var i;
          var xmlDoc = xml.responseXML;
          var table="<tr><th>EMAIL</th><th>PHONE</th><th>FACEBOOK</th></tr>";
          var x = xmlDoc.getElementsByTagName("one");
          for (i = 0; i <x.length; i++) {
            table += "<tr><td>" +
            x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("phone")[0].childNodes[0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("face")[0].childNodes[0].nodeValue +
            "</td></tr>";
          }
          document.getElementById("tab").innerHTML = table;
        }
        </script>

    </div>
</div>
</body>
</html>

