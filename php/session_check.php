<?php
session_start();
session_regenerate_id(true);
if (!isset($_SESSION['user_id'])) {
    header("Location: /study-sphere/index.html");
    exit();
}
?>
