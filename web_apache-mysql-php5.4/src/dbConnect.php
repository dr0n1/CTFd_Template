<?php
$serve = '127.0.0.1';
$username = 'ctf';
$password = 'Qwer@1234';
$dbname = 'ctf';
$mysqli = new Mysqli($serve,$username,$password,$dbname);
if($mysqli->connect_error){
    die('connect error:'.$mysqli->connect_errno);
}
$mysqli->set_charset('UTF-8');