<?php
if($_REQUEST['key'] != '15') die();
$myfile = fopen("./node/ctl.txt", "w") or die("Unable to open file!");
$txt = $_REQUEST['cmd'];
fwrite($myfile, $txt);
fclose($myfile);
