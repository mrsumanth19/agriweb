<?php
// server, username, password, database
$con = mysqli_connect('localhost', 'root', '', 'agriculture');

if ($con == false) {
    echo "connection error";
}
?>