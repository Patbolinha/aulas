<?php
session_start();
session_destroy();
header(header:"location: login.php?msg= voce foi expulso");


?>
