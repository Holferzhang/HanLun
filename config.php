<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'root';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '1',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://localhost:8888/moodle';
// $CFG->wwwroot   = 'http://192.168.0.199:8888/moodle34';
$CFG->dataroot  = '/Applications/MAMP/data/moodle';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

$CFG->themedesignermode= true;

// 设置语言文件不进行缓存
$CFG->langstringcache = false;

$CFG->cachejs = true; //js缓存

$CFG->debug = (E_ALL | E_STRICT); //调试模式

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
