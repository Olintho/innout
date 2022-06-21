<?php
echo "<h1>InNOut</h1>";

require_once (dirname(__FILE__, 2) . '/src/config/database.php');

$sql = "SELECT * FROM users";
$result = Database::getResultFromQuery($sql);

while ($row = $result->fetch_assoc()) {
    foreach ($row as $key => $value) {
        echo $key . ": " . $value . ", ";
    }
    echo "<br>";
}
