<?php

/*
	Plugin Name: Gunun Sarkisi
	Plugin URI: 
	Plugin Description: Song of the Day
	Plugin Version: 1.0.1
	Plugin Date: 26.12.2016
	Plugin Author: Etka
	Plugin Author URI: [Privated]
	Plugin License: NaN
	Plugin Minimum Question2Answer Version: 1.4

*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_module('widget', 'q2a-sarki.php', 'q2a_quote', 'Song of the Day');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
