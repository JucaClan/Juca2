<?php
// removendo todas as sessões:
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(), '', 0, '/');
session_regenerate_id(true);

//Redirecionar:
header('Location: login.php');
