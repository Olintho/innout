<?php
echo "<h1>InNOut</h1>";

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

// $user = new User(['name' => 'Chaves', 'email' => 'chaves@televisa.com.br']);
print_r(User::get(['id' => 1], 'id, name, email'));

echo "<br> Fim";
