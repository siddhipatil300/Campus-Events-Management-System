<?php

session_start();

session_destroy();

header("Location: homepg.php");
exit;