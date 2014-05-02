<?php

define('WP_HOME','http://decomama.work/');
define('WP_SITEURL','http://decomama.work/');

// ** ������������ MySQL ** //
define('DB_NAME', 'decomama_db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'pedro12');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// �� ������ ���� ������� ���������� WP � ���� ��� �����,
// ���� ���������� ����� ��� ��������
$table_prefix  = 'wp_';

// �������� � ���������� WP. ��� �����������, ��� ��������� ����
// ��������� .mo ���� � ���� wp-content/languages
// ��������� ��������� ru_RU.mo �� wp-content/languages �� 
// ��������� WPLANG � 'ru_RU' ��� ��������������� �������� ����.
define ('WPLANG', 'uk'); // ��������� �� �������������

/* �� ���, ������� ���������� � ������������ �� ������ ������! */

define('WP_MEMORY_LIMIT', '500M');
define( 'WP_MAX_MEMORY_LIMIT', '500M' );

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
?>
