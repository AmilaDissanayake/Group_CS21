<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../../login/admin/index.php');
    exit;
}
