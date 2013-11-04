<?php
/*
	Copyright 2013 Alex Zaddach. (mrzmanwiki@gmail.com)

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
function templatetop( $title, $css = array(), $js = array(), $subpage = '', $headother = '' ) {
	global $PROJECT;
	$csslinks = "";
	foreach( $css as $page ) {
		$csslinks .= "		<link rel=\"stylesheet\" href=\"/$PROJECT/commonphp/$page\" type=\"text/css\" />\n";
	}
	// NOTE: Not currently implemented!
	$title = htmlspecialchars( $title, ENT_QUOTES );
	if ( $subpage ) {
		$subpage = "<span class=\"subpages\">&lt; $subpage</span>";
	}
	
	$jselems = "";
	foreach( $js as $page ) {		
		$jselems .= "		<script type=\"text/javascript\" src=\"/$PROJECT/commonphp/$page\"></script>\n";
	}

	echo "<!DOCTYPE html>
<html>
	<head>
		<title>$title - alexz's tools - Wikimedia Tool Labs</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
$csslinks
		<link rel=\"stylesheet\" href=\"/$PROJECT/commonphp/main.css\" type=\"text/css\" media=\"screen\" />

$jselems
$headother
	</head>

<body>
<div class='bgcontainer'><div class='container'>
<a class='logolink' href='https://tools.wmflabs.org/' title='Wikimedia Tool Labs'></a>
<div class='header'><h1 class='header'>Tool Labs: alexz's tools</h1></div>

<div class='left'>
<h4>Information</h4>
<ul class='sidebarlinks'>
<li class='slink'><a href='https://tools.wmflabs.org/' title='Tool Labs'>Wikimedia Tool Labs</a></li>
<!--<li class='slink'><a href='' title=''>More of alexz's tools</a></li>
<li class='slink'><a href='' title=''>Admins willing to make difficult blocks</a></li>-->
<li class='slink'><a href='https://en.wikipedia.org/wiki/User:Mr.Z-bot' title='Mr.Z-bot'>Bot info</a></li>
<li class='slink'><a href='https://github.com/alexz-enwp?tab=repositories' title='Source'>Source code</a></li>
</ul>
<h4>Contact</h4>
<ul class='sidebarlinks'>
<li class='slink'><a href='https://en.wikipedia.org/wiki/User_talk:Mr.Z-man' title='Talk page'>Talk page</a></li>
</ul>
</div>

<div class='content'>
<h2>$title</h2>
";
}

function templatebottom() {

	echo "
</div>


<div class='footer'>Footer</div>
</div></div>

	
</body></html>";	
}
