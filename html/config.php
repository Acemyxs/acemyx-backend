<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();
//$CFG->enableloginrecaptcha='0';
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'prod-db.cdguqikagvfv.eu-west-1.rds.amazonaws.com';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'admin';
$CFG->dbpass    = 'dUX:V(=j)sCa:(ZC';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);
//enable line below to see top level logging both on dashboard and terminal
/*
@error_reporting(E_ALL | E_STRICT); // Show all errors
@ini_set('display_errors', '1'); // Display errors on the screen
$CFG->debug = (E_ALL | E_STRICT); // Moodle-specific debugging
$CFG->debugdisplay = 1; // Display Moodle debug messages
*/

$CFG->wwwroot   = 'https://academy.acemyx.com';
//$CFG->wwwroot	= 'http://167.172.144.160';
$CFG->dataroot  = '/var/www/html/moodledata';
$CFG->admin     = 'admin';
$CFG->sslproxy = true; //added recently
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
