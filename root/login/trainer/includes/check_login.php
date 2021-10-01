<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../trainer/index.php');
    exit;
}
