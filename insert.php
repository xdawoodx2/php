<?php
$servername = "test-srvr01.database.windows.net";
$username   = "Dawood";
$password   = "Daud@2664254";
$dbname     = "db01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name  = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO test_table (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully!<br>";
    echo "<a href='form.html'>Back to form</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
