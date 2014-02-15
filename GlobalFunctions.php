<?php
/*
	Copyright 2013 Alex Zaddach (mrzmanwiki@gmail.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/
// wfUrlencode - borrowed from MediaWiki's GlobalFunctions.php
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
	echo "<div class='result success'>$msg</div>";
}
function errormsg( $msg ) {
	if ( is_array( $msg ) ) {
		$msg = implode( "<br />", $msg );
	}
	echo "<div class='result error'>$msg</div>";
}

function shellexec( $cmd ) {
	ob_start();
	passthru( $cmd );
	$res = ob_get_contents();
	ob_end_clean();
	return $res;
}

