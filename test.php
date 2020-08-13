<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"power");

// $db = mysql_select_db("SIH",$conn);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$query = "SELECT year(time) as a,count(year(time)) as b FROM transaction GROUP BY year(time)";
$year = mysqli_query($conn,$query);


 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Statistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>
  <body>
    <div id="mychart" style="height: 250px;"></div>

  </body>
  <script>
    </script>
</html>
