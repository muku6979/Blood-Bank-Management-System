<?php
// Replace with your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch donor details from the database
$sql = "SELECT * FROM addpatient";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donor Details</title>
</head>
<body background="Patients Details1.jpg">
    <h1 align="center">Donor Details</h1>
    <hr><br>
    <table border="1" align="center">
        <tr>
            <th>Patient Id</th>
            <th>Name</th>
            <th>F.Name</th>
            <th>M.Name</th>
            <th>DOB</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Address</th>
            <!-- Add other column headers here -->
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Patient"] . "</td>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Fname"] . "</td>";
                echo "<td>" . $row["Mname"] . "</td>";
                echo "<td>" . $row["DOB"] . "</td>";
                echo "<td>" . $row["Mobile"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Bloodgroup"] . "</td>";
                echo "<td>" . $row["City"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";

                // Add other data columns here
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No donors found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="main.html">BACK</a>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
