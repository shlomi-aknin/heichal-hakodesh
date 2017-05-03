<?php
    $data = [];
    $data = parse_ini_file('config/site.ini',true);
	include 'helper.php';
	include 'classes/PHP-MySQLi-Database-Class-master/MysqliDb.php';
	include 'classes/PHP-MySQLi-Database-Class-master/dbObject.php';
	$class_files = scandir($data['dir']['classes']);
	foreach ($class_files as $class_file) {
		if (strpos($class_file, '.class')) include $data['dir']['classes'].$class_file;
	}
	$creds = [
	    'host' => 'localhost',
	    'username' => 'admin_heichal-hakodesh', 
	    'password' => 'wYOV78BV6OTbc8LL',
	    'db'=> 'heichal-hakodesh',
    ];
    $db = new MysqliDb ($creds);    
    if (isset($_GET)) cleanString($_GET);    
    if (isset($_POST)) cleanString($_POST);
?>