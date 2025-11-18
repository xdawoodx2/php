<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:test-srvr01.database.windows.net,1433; Database = db01", "dawood", "123@Itcs");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "dawood", "pwd" => "123@Itcs", "Database" => "db01", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:test-srvr01.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

echo "Successfully Connected."
?>






