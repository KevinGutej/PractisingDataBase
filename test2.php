<?php
$connection = new mysqli("localhost", "root", "", "store");

if ($connection->errno == 0) {
    $request = "SELECT name, age FROM client WHERE age > 20;";
    $result = $connection->query($request);
    $row = $result->fetch_assoc();
    while ($row !== null) {
        echo $row["name"];
        echo " ";
        echo $row["age"] . "\n";
        $row = $result->fetch_assoc();
    }
} else {
    echo "Connection can't be established";
}
