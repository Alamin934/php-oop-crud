<?php
require 'database.php';

$obj = new Database();

// Insert Data into DB
// $obj->insert('users', ['user_name'=>'Shajjad', 'user_age'=>'26', 'user_city'=>'Gazipur']);


// Update Data into DB
// $obj->update('users', ['user_name'=>'Shahanur Rahman', 'user_age'=>'25', 'user_city'=>'Dhaka'], "user_id='21'");

// Delete user by id
// $obj->delete('users', 'user_id = "22"');

// Show user by id
$obj->sql('SELECT * FROM users');


echo "users: ";
echo "<pre>";
print_r($obj->get_result());
echo "</pre>";



