<?php

# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   WIJZIG ONDERSTAANDE  =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$settings['nntp_nzb']['host'] = 'news.ziggo.nl';    # <== Geef hier je nntp server in
$settings['nntp_nzb']['user'] = 'xx';               # <== Geef hier je username in
$settings['nntp_nzb']['pass'] = 'yy';               # <== Geef hier je password in
$settings['nntp_nzb']['enc'] = false;               # <== false|'tls'|'ssl', defaults to false.
$settings['nntp_nzb']['port'] = 119;                # <== set to 563 in case of encryption

# =-=-=-=-=-=-=-=- Als je een aparte 'headers' newsserver nodig hebt, uncomment dan volgende =-=-=-=-=-=-=-=-=-
$settings['nntp_hdr']['host'] = '';
$settings['nntp_hdr']['user'] = '';
$settings['nntp_hdr']['pass'] = '';
$settings['nntp_hdr']['enc'] = false;
$settings['nntp_hdr']['port'] = 119;

# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

# =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= Filters =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
# Default zet gemaakt door 'Nakebod'
$settings['filters'] = array(    
    Array("Reset filters", "images/icons/home.png", "", "", array()),
    Array("Beeld", "images/icons/film.png", "cat0_d,!cat0_d11,!cat0_d23,!cat0_d24,!cat0_d25,!cat0_d26,!cat0_a5", "", 
        Array(
            Array("DivX", "images/icons/divx.png", "cat0_a0", ""),
            Array("WMV", "images/icons/wmv.png", "cat0_a1", ""),
            Array("MPEG", "images/icons/mpg.png", "cat0_a2", ""),
            Array("DVD", "images/icons/film.png", "cat0_a3,cat0_a10", ""),
            Array("HD", "images/icons/hd.png", "cat0_a4,cat0_a6,cat0_a7,cat0_a8,cat0_a9", ""),
            Array("Series", "images/icons/tv.png", "cat0_d11", ""),
            Array("Boeken", "images/icons/book.png", "cat0_a5", ""),
            Array("Erotiek", "images/icons/female.png", "cat0_d23,cat0_d24,cat0_d25,cat0_d26", "")
        )
    ),    
    Array("Muziek", "images/icons/music.png", "cat1_a", "", 
        Array(
            Array("Compressed", "images/icons/music.png", "cat1_a0,cat1_a3,cat1_a5,cat1_a6", ""),
            Array("Lossless", "images/icons/music.png", "cat1_a2,cat1_a4,cat1_a7,cat1_a8", "")
        )
    ),
    Array("Spellen", "images/icons/controller.png", "cat2_a", "", 
        Array(
            Array("Windows", "images/icons/windows.png", "cat2_a0", ""),
            Array("Mac / Linux", "images/icons/linux.png", "cat2_a1,cat2_a2", ""),
            Array("Playstation", "images/icons/playstation.png", "cat2_a3,cat2_a4,cat2_a5,cat2_a12", ""),
            Array("XBox", "images/icons/xbox.png", "cat2_a6,cat2_a7", ""),
            Array("Nintendo", "images/icons/nintendo_ds.png", "cat2_a9,cat2_a10,cat2_a11", ""),
            Array("PDA", "images/icons/phone.png", "cat2_a13", "")
        )
    ),
    Array("Applicaties", "images/icons/application.png", "cat3_a", "", 
        Array(
            Array("Windows", "images/icons/vista.png", "cat3_a0", ""),
            Array("Mac / Linux / OS2", "images/icons/linux.png", "cat3_a1,cat3_a2,cat3_a3", ""),
            Array("PDA / Navigatie", "images/icons/phone.png", "cat3_a4,cat3_a5,cat3_a6,cat3_a7", "")
        )
    )
);

// version
define('VERSION', '0.5a');

#
# Moeten de headers door retrieve volledig geladen worden? Als je dit op 'true' zet wordt 
# het ophalen van headers veel, veel trager. Het staat je dan echter wel toe om te filteren op userid.
#
$settings['retrieve_full'] = true;

#
# Wanneer nzb_download_local true is kan er met nzb_local_queue_command een programma uitgevoerd worden nadat de nzb in de queue is geplaatst.
# Dit is bijvoorbeeld handig om nzbget -S te draaien.
#
$settings['nzb_local_queue_command'] = '';

// preferences
// hoeveel spots wil je tonen op 1 pagina?
$settings['prefs']['perpage'] = 100;

// settings 
$settings['hdr_group'] = 'free.pt';
$settings['nzb_group'] = 'alt.binaries.ftd';
$settings['comment_group'] = 'free.usenet';

// db
$settings['db']['engine'] = 'sqlite3'; 			# <== keuze uit sqlite3 en mysql
$settings['db']['path'] = './nntpdb.sqlite3';	# <== als je geen SQLite3 gebruikt, kan dit weg	

# Als je MySQL wilt gebruiken, vul dan onderstaande in
#$settings['db']['engine'] = 'mysql';
#$settings['db']['host'] = 'localhost';
#$settings['db']['dbname'] = 'spotweb';
#$settings['db']['user'] = 'spotweb';
#$settings['db']['pass'] = 'spotweb';

# waar moeten ew de templates vinden?
$settings['tpl_path'] = './templates/';

# tonen we een update knop in de web ui?
$settings['show_updatebutton'] = false;

# toon een download-nzb knop op het overzicht?
$settings['show_nzbbutton'] = true;

# integratie met sabnzbd+? uncomment als dit gewenst is
#$settings['sabnzbd']['host'] = '192.168.10.122:8081';					# <== Pas deze aan naar de sabnzbd host plus port
#$settings['sabnzbd']['apikey'] = '';									# <== Pas deze aan naar jouw sabnzbd api key
#$settings['sabnzbd']['spotweburl'] = 'http://server/spotweb/';			# <== URL naar spotweb, gezien vanuit de Sabnzbd machine
$settings['sabnzbd']['url'] = 'http://$SABNZBDHOST/sabnzbd/api?mode=addurl&amp;name=$NZBURL&nzbname=$SPOTTITLE&amp;cat=$SANZBDCAT&amp;apikey=$APIKEY&amp;output=json'; # <== Hoef je niet aan te passen

# vertaal de categorieen uit spots (zie SpotCategories.php) naar sabnzbd categorieen
$settings['sabnzbd']['categories'] = Array(
		0	=> Array('default' 	=> "movies",				# Default categorie als niets anders matched
					 'a5'		=> "books",
					 'd2'		=> "anime",
					 'd11'		=> "tv",
					 'd29'		=> "anime"),
		1	=> Array('default'	=> 'music'),
		2	=> Array('default'	=> 'games'),
		3	=> Array('default'	=> 'apps',
					 'a3'		=> 'consoles',
					 'a3'		=> 'consoles',
					 'a4'		=> 'consoles',
					 'a5'		=> 'consoles',
					 'a6'		=> 'consoles',
					 'a7'		=> 'consoles',
					 'a8'		=> 'consoles',
					 'a9'		=> 'consoles',
					 'a10'		=> 'consoles',
					 'a11'		=> 'consoles',
					 'a12'		=> 'consoles',
					 'a13'		=> 'pda',
					 'a14'		=> 'pda',
					 'a15'		=> 'pda')
	);
					 

# zoekmachine url (gebruikt bij spots voor 24 november als download knop, en onderaan de spot info)
$settings['search_url'] = 'http://www.binsearch.info/?adv_age=&amp;q=$SPOTFNAME';
# $settings['search_url'] = 'http://nzbindex.nl/search/?q=$SPOTFNAME';

# de filter die standaard gebruikt wordt op de index pagina (als er geen filters oid opgegeven zijn), 
# zorg dat deze wel gedefinieerd is.
$settings['index_filter'] = array();

# als je standaard geen erotiek wilt op de index, uncomment dan volgende filter, je kan wel erotiek vinden door te zoeken
# $settings['index_filter'] = array('cat' => array('0' => array('a!d23', 'a!d24', 'a!d25', 'a!d26')));

#
# RSA keys
# Worden gebruikt om te valideren of spots geldig zijn, hoef je normaal niet aan te komen
#
$settings['rsa_keys'] = array();
$settings['rsa_keys'][2] = array('modulo' => 'ys8WSlqonQMWT8ubG0tAA2Q07P36E+CJmb875wSR1XH7IFhEi0CCwlUzNqBFhC+P',
								 'exponent' => 'AQAB');
$settings['rsa_keys'][3] = array('modulo' => 'uiyChPV23eguLAJNttC/o0nAsxXgdjtvUvidV2JL+hjNzc4Tc/PPo2JdYvsqUsat',
								 'exponent' => 'AQAB');
$settings['rsa_keys'][4] = array('modulo' => '1k6RNDVD6yBYWR6kHmwzmSud7JkNV4SMigBrs+jFgOK5Ldzwl17mKXJhl+su/GR9',
								 'exponent' => 'AQAB');

#
# Hoeveel verschillende headers (van danwel spots danwel comments) moeten er per keer opgehaald worden? 
# Als je regelmatig timeouts krijgt van retrieve.php, vrelaag dan dit aantal
#
$settings['retrieve_increment'] = 1000;


#
# Wanneer je NZB bestanden in een monitor queue wilt plaatsen, zet dan nzb_download_local op true
# en vul in nzb_local_queue_dir de directory waar de NZB in geplaatst moet worden.
#

$settings['nzb_download_local'] = false;
$settings['nzb_local_queue_dir'] = '/[pad naar queue dir]/';

#
# Include eventueel eigen settings, dit is ook een PHP file. 
# Settings welke hierin staan zullen de instellingen van deze file overiden.
#
# We raden aan om je instellingen in deze eigen file te zetten zodat bij een upgrade
# je instellingen bewaard blijven.
#
if (file_exists('../ownsettings.php')) { include_once('../ownsettings.php'); }	# <== deze lijn mag je eventueel verwijderen	
if (file_exists('./ownsettings.php')) { include_once('./ownsettings.php'); }	# <== deze lijn mag je eventueel verwijderen	

#
# Override NNTP header/comments settings, als er geen aparte NNTP header/comments server is opgegeven, gebruik die van 
# de NZB server
#
if (empty($settings['nntp_hdr']['host'])) {
	$settings['nntp_hdr'] = $settings['nntp_nzb'];
} # if 
