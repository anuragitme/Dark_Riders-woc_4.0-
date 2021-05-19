<?php
session_start();
echo'we are logging you out';

session_destroy();
header("Location:/darkriders/project");



?>