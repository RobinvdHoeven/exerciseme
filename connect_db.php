<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DBNAME", "am1a-project4");

    // Maak connectie met de database
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
?>