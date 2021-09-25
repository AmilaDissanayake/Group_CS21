<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../member/index.php');
    exit;
}
