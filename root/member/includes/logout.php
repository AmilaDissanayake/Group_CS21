<?php
session_start();
session_unset();
session_destroy();
// session_destroy();

header("location: ../../login/member/index.php");
exit();
