<?php

$serverName = "test-srvr01.database.windows.net";
$connectionOptions = array(
    "Database" => "db01",
    "Uid" => "Dawood",
    "PWD" => "123@Itcs",
    "Encrypt" => true

);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$name  = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO test_table2 (name, email) VALUES (?, ?)";
$params = array($name, $email);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt) {
    echo "Record inserted successfully!<br>";
    echo "<a href='form.html'>Back to form</a>";
} else {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT id, name, email FROM test_table2";
$stmt = $conn->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br><hr>";
}


sqlsrv_close($conn);
?>
