<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'config.php';


if($_POST){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = $db->prepare("SELECT * FROM user WHERE username = ?");
    $q->execute([$u]);
    $r = $q->fetch(PDO::FETCH_ASSOC);  // PENTING!

    if($r && password_verify($p, $r['password'])){
        $_SESSION['user'] = $r;
        header("Location: index.php");
        exit;
    } else {
        echo "<p style='color:red'>Username atau password salah</p>";
    }
}
?>
