<?php

session_id("admin");
session_start();
session_unset();
session_destroy();
header("Location: index.php");

?>