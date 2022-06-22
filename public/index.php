<?php
echo "<h1>InNOut</h1>";

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

echo User::getSelect(['name' => 'Chaves'], 'id, colums1');
echo "<br>";
echo User::getSelect();


echo "fim";
