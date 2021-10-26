<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../../login/index.php');
}
elseif($_SESSION['user_type'] !== 'accountant'){
    header('Location: ./../login/index.php');
}
