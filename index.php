    <?php
    $servername = "test-srvr01"; // Or your database server IP/hostname
    $username = "Dawood";
    $password = "123@Itcs";
    $dbname = "db01";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully to MySQL database!";

    // Close connection
    $conn->close();
    ?>
