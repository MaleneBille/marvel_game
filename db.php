<?php
 session_start();
    // Create connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "registration";

    $conn = new mysqli($servername, $username, $password, $db) or die("Ingen forbindelse: %s\n". $conn -> error);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>