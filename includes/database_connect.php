<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "pglife");

if (!$conn) {
    // Connection failed
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
?>
