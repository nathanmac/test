<?php


//$tmpdir = sys_get_temp_dir();
//echo "Temp dir: $tmpdir\n";
//echo  is_writable($tmpdir) ? "Temp dir is writable" : "Temp dir is not writable";

$host = '127.0.0.1';
$port = 21;
$timeout = 90;

$user = "anonymous";
$password = "";

$ftp = ftp_connect($host, $port, $timeout);

ftp_login($ftp, $user, $password);

echo ftp_pwd ( $ftp );
var_dump(ftp_nlist($ftp, ''));