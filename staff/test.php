<!DOCTYPE html>
<html>
    <head>
        <meta  charset="UTF-8" name="viewport" content="width=320,height=480,initial-scale=1.0,minimum-scale=1.0,maximum-scale=2.0,user-scalable=yes" > 
        <title>端末識別</title>
    </head>
</html>
<?php

$user = $_SERVER['HTTP_USER_AGENT'];  

print $user;

?>