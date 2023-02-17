<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EC Sarong Page</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<meta name="confidential student" content="about">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/5747fb50b1.js" crossorigin="anonymous"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
<link rel="icon" type="image/x-icon" href="/week5/favicon.ico">
</head>
<body>


<?php
$servername = "192.168.150.213";
$username = "webprogmi211";
$password = "j@zzyAngle30";
$dbname = "webprogmi211"; //

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM esarong_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["name"]. " - Email: ". $row["email"]. " - Website: ". $row["website"]. 
        " - Comment: ". $row["comment"]. " - Gender: ". $row["gender"].  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>