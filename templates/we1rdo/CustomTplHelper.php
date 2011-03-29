<?php
class CustomTplHelper extends SpotTemplateHelper {

	function cat2color($spot) {
		switch( (int) $spot['category']) {
			case 0: return 'blue'; break;
			case 1: return 'orange'; break;
			case 2: return 'green'; break;
			case 3: return 'red'; break;
		} # switch
		
		return '-';
	} # cat2color
	
	function filter2cat($s) {
		$cat = 0;
		if (stripos($s, 'cat0') !== false) {
			return "blue";
		} elseif (stripos($s, 'cat1') !== false) {
			return "orange";
		} elseif (stripos($s, 'cat2') !== false) {
			return "green";
		} elseif (stripos($s, 'cat3') !== false) {
			return "red";
		} # else
	} # filter2cat
	
	function getSmileyList() {
		return array('biggrin' => 'templates/we1rdo/smileys/biggrin.gif',
				'bloos' => 'templates/we1rdo/smileys/bloos.gif',
				'buigen' => 'templates/we1rdo/smileys/buigen.gif',
				'censored' => 'templates/we1rdo/smileys/censored.gif',
				'clown' => 'templates/we1rdo/smileys/clown.gif',
				'confused' => 'templates/we1rdo/smileys/confused.gif',
				'cool' => 'templates/we1rdo/smileys/cool.gif',
				'exactly' => 'templates/we1rdo/smileys/exactly.gif',
				'frown' => 'templates/we1rdo/smileys/frown.gif',
				'grijns' => 'templates/we1rdo/smileys/grijns.gif',
				'heh' => 'templates/we1rdo/smileys/heh.gif',
				'huh' => 'templates/we1rdo/smileys/huh.gif',
				'klappen' => 'templates/we1rdo/smileys/klappen.gif',
				'knipoog' => 'templates/we1rdo/smileys/knipoog.gif',
				'kwijl' => 'templates/we1rdo/smileys/kwijl.gif',
				'lollig' => 'templates/we1rdo/smileys/lollig.gif',
				'maf' => 'templates/we1rdo/smileys/maf.gif',
				'ogen' => 'templates/we1rdo/smileys/ogen.gif',
				'oops' => 'templates/we1rdo/smileys/oops.gif',
				'pijl' => 'templates/we1rdo/smileys/pijl.gif',
				'redface' => 'templates/we1rdo/smileys/redface.gif',
				'respekt' => 'templates/we1rdo/smileys/respekt.gif',
				'schater' => 'templates/we1rdo/smileys/schater.gif',
				'shiny' => 'templates/we1rdo/smileys/shiny.gif',
				'sleephappy' => 'templates/we1rdo/smileys/sleephappy.gif',
				'smile' => 'templates/we1rdo/smileys/smile.gif',
				'uitroepteken' => 'templates/we1rdo/smileys/uitroepteken.gif',
				'vlag' => 'templates/we1rdo/smileys/vlag.gif',
				'vraagteken' => 'templates/we1rdo/smileys/vraagteken.gif',
				'wink' => 'templates/we1rdo/smileys/wink.gif');
	} # parseUBB
	
} # class CustomTplHelper