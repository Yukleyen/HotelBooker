<?php
    $con = mysql_connect('localhost', 'hotelbooker', 'c96eb216c72cd36dd396785615e3eafd');
    
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db('hotelbooker', $con) or die('Could not select database.');

?>