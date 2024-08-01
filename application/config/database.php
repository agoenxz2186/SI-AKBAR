<?php
defined('BASEPATH') or exit('No direct script access allowed');



$active_group = 'default';
$query_builder = true;

$db['default'] = array(
	'dsn' => '',
	'hostname' => '192.168.195.5',
	'username' => 'mhs',
	'password' => 'mhsmhs',
	'database' => 'siakbar',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => false,
	'db_debug' => false,
	'cache_on' => false,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => false,
	'compress' => false,
	'stricton' => false,
	'failover' => array(),
	'save_queries' => true
);