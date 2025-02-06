<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

try {
	// Looing for .env at the root directory
	$dotenv = Dotenv::createImmutable(__DIR__);
	$dotenv->load();
} catch (Exception $e) {
	// just ignore
}

define('WP_MEMORY_LIMIT', isset($_ENV['WP_MEMORY_LIMIT']) ? $_ENV['WP_MEMORY_LIMIT'] : '1024M');

$host = isset($_ENV['HTTP_HOST']) ? $_ENV['HTTP_HOST'] : $_SERVER['HTTP_HOST'];

define('FORCE_SSL_LOGIN', isset($_ENV['FORCE_SSL_LOGIN']) && $_ENV['FORCE_SSL_LOGIN'] === 'true');
define('FORCE_SSL_ADMIN', isset($_ENV['FORCE_SSL_ADMIN']) && $_ENV['FORCE_SSL_ADMIN'] === 'true');
define('DISABLE_WP_CRON', isset($_ENV['DISABLE_WP_CRON']) && $_ENV['DISABLE_WP_CRON'] === 'true');

// Define the site URL and home URL dynamically
define( 'WP_HOME', 'https://' . $host );
define( 'WP_SITEURL', 'https://' . $host );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/** Enable W3 Total Cache */
define('WP_CACHE', isset($_ENV['WP_DEBUG']) && $_ENV['WP_DEBUG'] !== 'true'); // Added by W3 Total Cache
define('WPCACHEHOME', __DIR__ . 'wp-content/plugins/wp-super-cache/');

define('DB_NAME', isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : 'momcraftedlife_wordpress');

/** Database username */
define('DB_USER', isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'momcraftedlife');

/** Database password */
define('DB_PASSWORD', isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : 'momcraftedlife123');

/** Database hostname */
define('DB_HOST', isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-1mi(I{N/LHgd9mFTmM9iP@TP,rgkB=gV7tg]m;R4nEXiT}9.*?Ccqs=yWl;DXXC');
define('SECURE_AUTH_KEY',  '67g~:BNI9E4W5,tiM-9h,-<&nJ9CJk-t=W]9,kZZ$r(825GakB}mTJ/8.5]1g,[_');
define('LOGGED_IN_KEY',    '7e4_j{.OS/)?2.lA`dHh,u%:3=@nX60]L%g29ObVbh`C[U`!yW;Mw%L7mNST&S}t');
define('NONCE_KEY',        'DKZ[!eX>62$^3Rc&E>&1++bW<|L:6bmBs!+XRP!yO&SS)%$N&pKKrDS%JMSA<cI3');
define('AUTH_SALT',        '@?oH#H9K.#Gw5zbWT/s`A#O7[~M)SR{#bcvJ~&b`$Hg,VBN=F#0N6y3,*=Tst,<3');
define('SECURE_AUTH_SALT', 'K=6_qR~5DkP%0>CMmj#s5)W!W Ab#[FzW4qS0X{3aNiUl<{bj^X^,.2hd2^^T[a!');
define('LOGGED_IN_SALT',   '^Op{J^Cj[RVG$Afep&S{+YtT}RN-Pp3j.!xj6$qGhv$+Hr(gdB$LmvmLbIX1u)CN');
define('NONCE_SALT',       'X%_y^1pdu:lW*)C,3_=}7w|Ovja)GO5!AYUYv{g/1Wrbr=q*0gX*bnR>,r&J2.&E');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('SCRIPT_DEBUG', true);
define('WP_DEBUG', isset($_ENV['WP_DEBUG']) && $_ENV['WP_DEBUG'] === 'true');
define('WP_DEBUG_LOG', isset($_ENV['WP_DEBUG_LOG']) && $_ENV['WP_DEBUG_LOG'] === 'true');


// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', isset($_ENV['WP_DEBUG_DISPLAY']) && $_ENV['WP_DEBUG_DISPLAY'] === 'true');
@ini_set('display_errors', 0);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
