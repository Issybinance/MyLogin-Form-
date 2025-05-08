<?php
session_start();
if (!isset($_SESSION['insta_user'])) {
    header("Location: index.php");
    exit;
}
echo "<h2>Welcome, " . htmlspecialchars($_SESSION['insta_user']) . "!</h2>";
?>
