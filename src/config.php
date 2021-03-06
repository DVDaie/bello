<?php
/*
 * Telegram Bot Sample
 * ===================
 * UWiClab, University of Urbino
 * ===================
 * Configuration file.
 * Fill in values and save as config.php.
 *
 * DO NOT COMMIT CONFIG.PHP.
 */

/*  Constants for telegram API */
define('TELEGRAM_BOT_TOKEN', '5391883429:AAEmroiJZeOyko8KCLfFNnrrRk780MG9kUk');
define('TELEGRAM_API_URI_BASE', 'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/');
define('TELEGRAM_FILE_API_URI_BASE', 'https://api.telegram.org/file/bot' . TELEGRAM_BOT_TOKEN . '/');

/*  Constants for DB Access */
define('DATABASE_HOST', 'https://github.com/CodeMOOC/TreasureHuntBot/blob/feature/docker');
define('DATABASE_NAME', '');
define('DATABASE_USERNAME', '');
define('DATABASE_PASSWORD', '');

/* Settings constant */
define('DEBUG', false);
define('PERF_LOGGING', false);
define('CHAT_GROUP_DEBUG', 0);
define('DEBUG_TO_DB', false);
define('DEBUG_TO_BOT', false);
define('DEACTIVATED', false);
define('BOT_DEEPLINK_START_ROOT', 'https://t.me/Caccia_Tesoro_55_bot?start=');

// PHP configuration
date_default_timezone_set('UTC'); // ensure UTC is used for all date functions
set_time_limit(0); // ensure scripts are not interrupted (e.g., long-polling or downloads)
