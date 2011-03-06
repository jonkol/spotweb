<?php
error_reporting(E_ALL & ~8192 & ~E_USER_WARNING);	# 8192 == E_DEPRECATED maar PHP < 5.3 heeft die niet

require_once "lib/SpotDb.php";
require_once "lib/SpotReq.php";
require_once "lib/SpotParser.php";
require_once "lib/SpotsOverview.php";
require_once "SpotCategories.php";
require_once "lib/SpotNntp.php";

function openDb() {
	extract($GLOBALS['site'], EXTR_REFS);

	# fireup the database
	try {
		$db = new SpotDb($settings['db']);
		$db->connect();
	} 
	catch(Exception $x) {
		die('Unable to open database: ' . $x->getMessage());
	} # catch

	$GLOBALS['site']['db'] = $db;
	
	return $db;
} # openDb

function initialize() {
	require_once "settings.php";
	$settings = $GLOBALS['settings'];

	# we define some preferences, later these could be
	# user specific or stored in a cookie or something
	$prefs = array('perpage' => 100);
	if (isset($settings['prefs'])) {
		$prefs = array_merge($prefs, $settings['prefs']);
	} # if
		
	# helper functions for passed variables
	$req = new SpotReq();
	$req->initialize();

	# gather the current page
	$GLOBALS['site']['page'] = $req->getDef('page', 'index');
	if (array_search($GLOBALS['site']['page'], array('index', 'catsjson', 'getnzb', 'getspot')) === false) {
		$GLOBALS['site']['page'] = 'index';
	} # if
	
	# and put them in an encompassing site object
	$GLOBALS['site']['req'] = $req;
	$GLOBALS['site']['settings'] = $settings;
	$GLOBALS['site']['prefs'] = $prefs;
	$GLOBALS['site']['pagetitle'] = 'SpotWeb - ';
	$GLOBALS['site']['db'] = openDb();
} # initialize()



function showPage($page) {
	extract($GLOBALS['site'], EXTR_REFS);

	require_once "lib/page/SpotPage_" . $page . ".php";
	
	$className = "SpotPage_" . $page;
	
	$page = new $className($db, $settings, $prefs, $req);
	$page->render();
} # showPage()


#- main() -#
try {
	initialize();
	extract($site, EXTR_REFS);
	showPage($site['page']);
}
catch(Exception $x) {
	die($x->getMessage());
} # catch
