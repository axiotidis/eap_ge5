<!DOCTYPE html>
<html><head><meta name="GCD" content="YTk3ODQ3ZWZhN2I4NzZmMzBkNTEwYjJl2b572d3aef216ddc42f1ca18dd2aabea"/>
  <meta charset="utf-8">
  <title>Αναζήτηση υπηρεσιών</title>
  <meta name="generator" content="Google Web Designer 5.0.4.0226">
  <link href="gwdpage_style.css" rel="stylesheet" data-version="12" data-exports-type="gwd-page">
  <link href="gwdimage_style.css" rel="stylesheet" data-version="12" data-exports-type="gwd-image">
  <style type="text/css" id="gwd-text-style">p {
    margin: 0px;
}
h1 {
    margin: 0px;
}
h2 {
    margin: 0px;
}
h3 {
    margin: 0px;
}</style>
  <style type="text/css">html,
body {
    width: 100%;
    height: 100%;
    margin: 0px;
}
body {
    background-color: transparent;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    -moz-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    perspective: 1400px;
    -webkit-perspective: 1400px;
    -moz-perspective: 1400px;
    transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
}
.gwd-label-18aw {
    position: absolute;
    left: 0%;
    top: 8%;
    width: 100%;
    height: 5%;
    text-align: center;
    font-size: 28px;
}
.gwd-imagebutton-1p1q {
    position: absolute;
    left: 39.67%;
    top: 70.49%;
    width: 20.77%;
    height: 21.41%;
}
.gwd-label-qty0 {
    position: absolute;
    top: 90.98%;
    height: 3.06%;
    width: 19%;
    text-align: center;
    font-size: 18px;
    left: 40.5%;
}
.gwd-div-nd3q {
    position: absolute;
    top: 20.03%;
    height: 50%;
    width: 79%;
    left: 10%;
}</style>
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_min.js" data-version="6" data-exports-type="gwd_webcomponents" src="gwd_webcomponents_min.js"></script>
  <script data-source="gwdpage_min.js" data-version="12" data-exports-type="gwd-page" src="gwdpage_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="12" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
  <script data-source="gwdimagebutton_min.js" data-version="11" data-exports-type="gwd-imagebutton" src="gwdimagebutton_min.js"></script>
</head>

<body class="htmlNoPages">
  <label id="label_1" class="gwd-label-18aw">Αναζήτηση υπηρεσιών</label>
  <a href="mainMenu.php" class="">
    <gwd-imagebutton id="gwd-imagebutton_1" up-image="http://axiotidis.com:8085/pictures/return.png" over-image="http://axiotidis.com:8085/pictures/return.png" down-image="http://axiotidis.com:8085/pictures/return.png" scaling="contain" class="gwd-imagebutton-1p1q"></gwd-imagebutton>
  </a>
  <label id="label_2" class="gwd-label-qty0">Επιστροφή στο κεντρικό μενού</label>
  <div class="gwd-div-nd3q">
  <?php
$servername = "localhost";
$username = "root";
$password = "eap2019ge4";
$dbname = "eap2019ge4";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connected";


$sql = "SELECT id, servicename, city, address, number, postcode, phone, typeOfService  FROM services";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Υπηρεσία</th>
<th>Πόλη</th>
<th>Οδός</th>
<th>Αριθμός</th>
<th>ΤΚ</th>
<th>Τηλέφωνο</th>
<th>Τύπος Υπηρεσίας</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['servicename'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['number'] . "</td>";
echo "<td>" . $row['postcode'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['typeOfService'] . "</td>";
echo "</tr>";
}
echo "</table>";

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Υπηρεσία: " . $row["servicename"]. " Πόλη: " . $row["city"]. " Διεύθυνση: " . $row["addresses"]. " Αριθμός: " . $row["number"]." TK: " . $row["postcode"]. " Τηλέφωνο: " . $row["phone"]. " Τύπος υπηρεσίας: " . $row["typeOfService"]."<br>";
    }
} else {
    echo "0 results";
}
*/
$conn->close();


?> 
  </div>


</body></html>
