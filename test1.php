<?php

$connection = new mysqli("localhost", "root", "", "store");

if ($connection->errno == 0) {
    $personToDelete = "Adamik";
    $request = "DELETE FROM client WHERE name = '$personToDelete'";
    $result = $connection->query($request);
    if ($connection->affected_rows == 1) {
        echo "The client was deleted";
    } else if ($connection->affected_rows == 0) {
        echo "No client was deleted";
    } else {
        echo "Every client with $personToDelete was deleted";
    }
} else {
    echo "Connection can't be established";
}