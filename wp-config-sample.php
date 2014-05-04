<?php
// ** Налаштування MySQL ** //
define('DB_NAME', '');    // Назва вашої БД
define('DB_USER', '');     // Your MySQL ім’я користувача
define('DB_PASSWORD', ''); // …та пароль
define('DB_HOST', 'localhost');    // 99 відсотків що вам не треба змінювати це
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Ви можете мати деклька інсталяцій WP в одній базі даних,
// якщо даватимете кожній різні перфікси
$table_prefix  = 'wp_';   // Тільки латинські літери та підкреслювання!

// Наступне — локалізація WP. Щоб локалізувати, вам необхідно мати
// відповідний .mo фалй в теці wp-content/languages
// Наприклад встановіть ru_RU.mo до wp-content/languages та 
// встановіть WPLANG в 'ru_RU' щоб використовувати російську мову.
define ('WPLANG', 'uk'); // Українська за замовчуванням

/* Це все, хватить редагувати — встановлюйте та почніть писати! */

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
?>
