<?php

include('connection.php');

$Name = $_POST["t2"];
$Fname = $_POST["t3"];
$Mname = $_POST["t4"];
$DOB = $_POST["t5"];
$Mobile = $_POST["t6"];
$Gender = $_POST["t7"];
$Email = $_POST["t8"];
$Bloodgroup = $_POST["t9"];
$City = $_POST["t10"];
$Adderss = $_POST["t11"];

$query = "INSERT INTO adddonor (Name, Fname, Mname, DOB, Mobile, Gender, Email, Bloodgroup, City, Address) VALUES('$Name', '$Fname', '$Mname', '$DOB', $Mobile, '$Gender', '$Email', '$Bloodgroup', '$City', '$Adderss');";

if (mysqli_query($conn, $query)) {
    echo "
    <script> alert('Data Inserted Successfully');</script>
    ";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>
<html>
    <head>
        <title></title>
    </head>
    <body bgcolor="aqua">
    <a href="main.html"><h1 align="center">Click Here To Go Home PAGE</h1></a>

    </body>
</html>