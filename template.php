<?php

function templatetop( $title, $css = array(), $js = array(), $subpage = '', $headother = '' ) {
	$csslinks = "";
	foreach( $css as $page ) {
		$csslinks .= "		<link rel=\"stylesheet\" href=\"/amdb/commonphp/$page\" type=\"text/css\" />\n";
	}
	$title = htmlspecialchars( $title, ENT_QUOTES );
	if ( $subpage ) {
		$subpage = "<span class=\"subpages\">&lt; $subpage</span>";
	}
	
	$jselems = "";
	foreach( $js as $page ) {		
		$jselems .= "		<script type=\"text/javascript\" src=\"/amdb/commonphp/$page\"></script>\n";
	}

	echo "<!DOCTYPE html>
<html>
	<head>
		<title>$title - alexz's tools - Wikimedia Toolserver</title>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
$csslinks
		<link rel=\"stylesheet\" href=\"/amdb/commonphp/main.css\" type=\"text/css\" media=\"screen\" />

$jselems
$headother
	</head>

<body class=\"mediawiki ltr skin-modern\">

	<!-- heading -->
	<div id=\"mw_header\"><h1 id=\"firstHeading\">$title</h1></div>

	<div id=\"mw_main\">
	<div id=\"mw_contentwrapper\">

	<!-- content -->

	<div id=\"mw_content\">
	<!-- contentholder does nothing by default, but it allows users to style the text inside
	     the content area without affecting the meaning of 'em' in #mw_content, which is used
	     for the margins -->
	<div id=\"mw_contentholder\">

		<div id=\"contentSub\">$subpage</div>
";
}

function templatebottom() {

	echo "
		<div class='mw_clear'></div>
					</div><!-- mw_contentholder -->
	</div><!-- mw_content -->
	</div><!-- mw_contentwrapper -->

	<div id=\"mw_portlets\">

	<!-- portlets -->
	<div class='generated-sidebar portlet' id='p-navigation'>
		<h5>Navigation</h5>

		<div class='pBody'>
			<ul>
				<li><a href=\"https://wiki.toolserver.org/\" title=\"Toolserver wiki\" >Toolserver wiki</a></li>
				<li><a href=\"http://toolserver.org/~alexz/\" title=\"More tools\" >More tools</a></li>
				<li><a href=\"http://toolserver.org/~alexz/coord\" title=\"Geotagged pages needing images\" >Geotagged pages needing images</a></li>
				<li><a href=\"http://toolserver.org/~alexz/pop/\" title=\"Popular pages\">WikiProject popular pages</a></li>
				<li><a href=\"http://toolserver.org/~alexz/amdb/\" title=\"AMDB\">Admins willing to make difficult blocks</a></li>
				<li><a href=\"http://en.wikipedia.org/wiki/User:Mr.Z-bot\" title=\"Bots\">Bots</a></li>
				<li>Contact: <a href=\"http://en.wikipedia.org/wiki/User_talk:Mr.Z-man\" title=\"Talk page\">Talk page</a></li>
				<li><a href=\"https://jira.toolserver.org/secure/CreateIssue.jspa?pid=10310&issuetype=1\" title=\"Bug reports\">Bug reports</a></li>
				<li><a href=\"https://jira.toolserver.org/secure/CreateIssue.jspa?pid=10310&issuetype=2\" title=\"Feature requests\">Feature requests</a></li>
			</ul>
		</div><!-- pBody -->
		<h5>&nbsp;</h5>
		<p>
			<a href=\"http://wiki.toolserver.org/\" title=\"Wikimedia Toolserver\">
				<img src=\"/images/wikimedia-toolserver-button.png\" alt=\"Wikimedia Toolserver\"/>
			</a>
		</p>
		<p>
			<a title=\"Valid HTML 5\" href=\"http://validator.w3.org/check?uri=referer\">
				<img src=\"http://toolserver.org/~alexz/valid-html5.png\" alt=\"Valid HTML 5\" height=\"31\" width=\"88\" />
			</a>
		</p>

	</div><!-- portlet -->

	</div><!-- mw_portlets -->


	</div><!-- main -->

	<div class=\"mw_clear\"></div>

	<!-- personal portlet -->

	<div class=\"portlet\" id=\"p-personal\">
		<h5>Personal tools</h5>
		<div class=\"pBody\">
			<ul>
			</ul>
		</div>
	</div>


	<!-- footer --> 
	<div id=\"footer\">
	</div>	
</body></html>";	
}
