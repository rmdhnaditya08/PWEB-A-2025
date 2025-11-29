<?php
$host = 'localhost';
$dbname = 'laundrycrafty';
$user = 'root';
$pass = '';

$db = new PDO("mysql:host=localhost;dbname=laundrycrafty", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

