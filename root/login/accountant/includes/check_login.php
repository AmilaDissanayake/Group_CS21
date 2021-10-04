<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../accountant/index.php');
    exit;
}
