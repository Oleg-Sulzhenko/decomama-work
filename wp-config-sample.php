<?php
// ** ������������ MySQL ** //
define('DB_NAME', '');    // ����� ���� ��
define('DB_USER', '');     // Your MySQL ��� �����������
define('DB_PASSWORD', ''); // ��� ������
define('DB_HOST', 'localhost');    // 99 ������� �� ��� �� ����� �������� ��
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// �� ������ ���� ������� ���������� WP � ���� ��� �����,
// ���� ���������� ����� ��� ��������
$table_prefix  = 'wp_';   // ҳ���� �������� ����� �� �������������!

// �������� � ���������� WP. ��� �����������, ��� ��������� ����
// ��������� .mo ���� � ���� wp-content/languages
// ��������� ��������� ru_RU.mo �� wp-content/languages �� 
// ��������� WPLANG � 'ru_RU' ��� ��������������� �������� ����.
define ('WPLANG', 'uk'); // ��������� �� �������������

/* �� ���, ������� ���������� � ������������ �� ������ ������! */

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
?>
