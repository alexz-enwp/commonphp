<?php

# wfUrlencode - borrowed from MediaWiki's GlobalFunctions.php
function wfUrlencode( $s ) {
    $s = rawurlencode( $s );
    $s = str_ireplace(
        array( '%3B','%3A','%40','%24','%21','%2A','%28','%29','%2C','%2F' ),
        array(   ';',  ':',  '@',  '$',  '!',  '*',  '(',  ')',  ',',  '/' ),
        $s
    );

    return $s;
}

function successmsg( $msg ) {
	if ( is_array( $msg ) ) {
		$msg = implode( "<br />", $msg );
	}
	echo "<div class='messagebox success'>$msg</div>";
}
function errormsg( $msg ) {
	if ( is_array( $msg ) ) {
		$msg = implode( "<br />", $msg );
	}
	echo "<div class='messagebox error'>$msg</div>";
}

function shellexec( $cmd ) {
	ob_start();
	passthru( $cmd );
	$res = ob_get_contents();
	ob_end_clean();
	return $res;
}

