<?php

// Cross-Site Scripting (XSS)
$name = $_GET['name'];
echo('Hello ' . $name);

// SQL Injection
$id = $_POST['id'];
mysql_query("SELECT user FROM users WHERE id = " . $id);

// Command Injection
$cmd = $_COOKIE['cmd'];
exec("cat /var/log/apache2/access.log | grep " . $cmd);

// Deprecated Function
$words = split(":", "split:this");

//This is a test to adding some comments
//Password is password
//Test again for new commit.
