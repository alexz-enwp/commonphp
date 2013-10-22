<?php
$mysqlopts = file_get_contents( '/data/project/$PROJECT/replica.my.cnf' );
preg_match( "/password='(.*?)'/", $mysqlopts, $matches);
$my_pass = $matches[1];
preg_match( "/user='(.*?)'/", $mysqlopts, $matches);
$my_user = $matches[1];
